<?php
namespace Emis\Entity;

use Emis\Annotation\SimpleAnnotationReader;
use Emis\Exception\InternalException;
use Emis\Exception\Exception;

class Serializer
{
    const FORMAT_JSON = 'JSON';
    const FORMAT_XML = 'XML';

    /**
     * @var int Output format.
     */
    private $format = Serializer::FORMAT_JSON;

    /**
     * @var int
     */
    private $schemaUrl = null;

    /**
     * @var SimpleAnnotationReader
     */
    private $annotationReader = null;

    /**
     * @return SimpleAnnotationReader
     */
    public function getAnnotationReader()
    {
        if (!$this->annotationReader) {
            $this->annotationReader = new SimpleAnnotationReader();
        }

        return $this->annotationReader;
    }

    /**
     * @param SimpleAnnotationReader $annotationReader
     * @return Serializer
     */
    public function setAnnotationReader($annotationReader)
    {
        $this->annotationReader = $annotationReader;
        return $this;
    }

    /**
     * @return string
     */
    public function getSchemaUrl()
    {
        return $this->schemaUrl;
    }

    /**
     * @param string $schemaUrl
     * @return Serializer
     */
    public function setSchemaUrl($schemaUrl)
    {
        $this->schemaUrl = $schemaUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param int $format
     * @return Serializer
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    public static function create()
    {
        $serializer = new self();

        return $serializer;
    }

    public function serialize($object)
    {
        switch ($this->getFormat()) {
            case Serializer::FORMAT_JSON:
                $data = $this->asJson($object);
                break;
            case Serializer::FORMAT_XML:
                $data = $this->asXml($object);
                break;
            default:
                throw new InternalException('Unknown output format.', InternalException::OUTPUT_FORMAT_UNKNOWN);
        }

        return $data;
    }

    /**
     * Unserialize an XML/JSON data as an object. Can receive a single constructor parameter which will be used
     * with all the sub-objects instantiated.
     * Unserialization will fail due to these limitations. No more than one constructor parameter is accepted and
     * all sub-objects should receive the same type of constructor parameter.
     *
     * @param $data
     * @param null $constructorParameter
     * @return array|\DateTime
     * @throws InternalException
     */
    public function unserialize($data, $constructorParameter = null)
    {
        switch ($this->getFormat()) {
            case Serializer::FORMAT_JSON:
                $stdClass = json_decode($data);
                break;
            case Serializer::FORMAT_XML:
                $options = array(
                    'encoding' => 'UTF-8',
                    'complexType' => 'object',
                    'tagAsClass' => false,
                    'forceEnum' => array('item')
                );

                $xmlSerializer = new \XML_Unserializer($options);

                $xmlSerializer->unserialize($data);
                $stdClass = $xmlSerializer->getUnserializedData();
                break;
            default:
                throw new InternalException('Unknown output format.', InternalException::OUTPUT_FORMAT_UNKNOWN);
        }

        $stdClass = $this->fixUnserializedArrays($stdClass);

        if (property_exists($stdClass, 'data') && property_exists($stdClass, 'version')) {
            $stdClass = $stdClass->data;
        }

        $object = $this->asObject($stdClass, $constructorParameter);

        return $object;
    }

    private function fixUnserializedArrays($stdClass)
    {
        if (is_object($stdClass) && property_exists($stdClass, 'item')) {
            $stdClass = $stdClass->item;
        } elseif (is_object($stdClass)) {
            foreach ($stdClass as $key => $value) {
                if (!is_object($value) && !is_array($value) && $value == '') {
                    $value = null;
                }

                $stdClass->$key = $this->fixUnserializedArrays($value);
            }
        }

        return $stdClass;
    }

    private function asObject($stdClass, $constructorParameter)
    {
        if (is_array($stdClass)) {
            $object = array();

            foreach ($stdClass as $item) {
                $object[] = $this->asObject($item, $constructorParameter);
            }

            return $object;
        }

        if (is_object($stdClass) && property_exists($stdClass, '_type') && $stdClass->_type == 'DateTime') {
            $object = new \DateTime($stdClass->date);

            return $object;
        }

        if (is_object($stdClass) && property_exists($stdClass, '_type')) {
            $typeChunks = explode('<', $stdClass->_type);
            $type = $typeChunks[0];

            $object = new $type($constructorParameter);
            $reflection = new \ReflectionClass(get_class($object));

            foreach ($stdClass as $key => $value) {
                if ($key == '_type') {
                    continue;
                }

                if (is_object($value) || is_array($value)) {
                    $value = $this->asObject($value, $constructorParameter);
                }

                try {
                    $property = $this->getAnnotationReader()->getPropertyRecursive($reflection, $key);
                } catch (\ReflectionException $exception) {
                    $object->$key = $value;
                    continue;
                }

                $property->setAccessible(true);
                $property->setValue($object, $value);
            }

            return $object;
        }

        return $stdClass;
    }

    /**
     * Converts an object to stdClass materializing all the get* method values to ordinary properties.
     * If the passed value is not an object returns it as it is. Adds _type property specifying the object type.
     *
     * @param mixed $object
     * @param IApi $api
     * @param array $typeProperties
     * @return \stdClass
     */
    public function asStdClass($object, IApi $api = null, $typeProperties = null)
    {
        if ($object instanceof \DateTime) {
            $date = new \stdClass();
            $date->_type = 'DateTime';
            $date->date = $object->format('c');

            return $date;
        }

        if (is_array($object)) {
            foreach ($object as $key => $value) {
                $object[$key] = $this->asStdClass($value, $api, $typeProperties);
            }

            return $object;
        }

        if (!is_object($object)) {
            return $object;
        }

        $class = new \ReflectionClass($object);
        $methods = $class->getMethods(\ReflectionMethod::IS_PUBLIC);
        $stdObject = new \stdClass();
        $stdObject->_type = $class->getName();

        if ($typeProperties) {
            $stdObject->_type .= sprintf('<%s>', $typeProperties);
        }

        $properties = $class->getProperties(\ReflectionMethod::IS_PUBLIC);

        if (count($properties)) {
            foreach ($properties as $property) {
                if (!$property->isStatic() && $this->isSerializable($class, $property->getName())) {
                    $returnTypes = $this->getReturnTypes($property);
                    $stdObject->{$property->getName()} = $this->asStdClass($object->{$property->getName()}, $api, $returnTypes);
                }
            }
        }

        if (count($methods)) {
            foreach ($methods as $method) {
                if (strpos($method->name, 'get') === 0 && strlen($method->name) > 3) {
                    $propertyName = lcfirst(substr($method->name, 3));
                    $getMethod = $method->name;
                    $access = array();

                    if ($api) {
                        $access = $api->getObjectAccessibility($object);
                    }

                    if ($this->isSerializable($class, $propertyName) && (!count($access) || in_array($propertyName, $access))) {
                        $stdObject->$propertyName = $this->asStdClass($object->$getMethod(), $api);
                    }
                }
            }
        }

        return $stdObject;
    }

    public function getReturnTypes(\ReflectionProperty $property)
    {
        $returnTypesAnnotation = $this->getAnnotationReader()->getPropertyAnnotation($property, 'return-types');

        if (!$returnTypesAnnotation) {
            $returnTypes = null;
        } else {
            $returnTypes = str_replace(' ', '', $returnTypesAnnotation);
        }

        return $returnTypes;
    }

    public function getMethodReturnTypes(\ReflectionMethod $method)
    {
        $returnTypesAnnotation = $this->getAnnotationReader()->getMethodAnnotation($method, 'return-types');

        if (!$returnTypesAnnotation) {
            $returnTypes = null;
        } else {
            $returnTypes = str_replace(' ', '', $returnTypesAnnotation);
        }

        return $returnTypes;
    }

    private function isSerializable(\ReflectionClass $class, $propertyName)
    {
        try {
            $property = $this->getAnnotationReader()->getPropertyRecursive($class, $propertyName);
            $serializableAnnotation = $this->getAnnotationReader()->getPropertyAnnotation($property, 'serializable');
            $isSerializable = ($serializableAnnotation != 'false');
        } catch (\ReflectionException $exception) {
            $isSerializable = false;
        }

        return $isSerializable;
    }

    private function asJson($object)
    {
        $schema = $this->getSchemaName($object);

        if ($schema) {
            $object = array_merge(array('$schema' => $schema), $object);
        }

        $result = json_encode($object);

        return $result;
    }

    private function asXml($object, $rootElement = 'RDF')
    {
        $schema = $this->getSchemaName($object);

        $options = array(
            'ident' => "\t",
            'linebreak' => "\n",
            'rootName' => $rootElement,
            'defaultTagName' => 'item',
            'addDecl' => true,
            'encoding' => 'UTF-8',
        );

        if ($schema) {
            $options['rootAttributes'] = array(
                'xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
                'xsi:noNamespaceSchemaLocation' => $schema
            );
        }

        $xmlSerializer = new \XML_Serializer($options);
        $xmlSerializer->serialize($object);
        $xml = $xmlSerializer->getSerializedData();

        return $xml;
    }

    private function getSchemaName($object)
    {
        if (!is_array($object)) {
            return null;
        }

        if (isset($object['data']) && is_array($object['data']) && isset($object['data'][0]) && is_object($object['data'][0])) {
            $class = $object['data'][0]->_type . '[]';
        } elseif (isset($object['data']) && is_object($object['data'])) {
            $class = $object['data']->_type;
        } else {
            return null;
        }

        $types = '';
        preg_match('/(.*)<(.*)>/', $class, $matches);

        if (count($matches) == 3) {
            if (substr($class, -2) == '[]') {
                $class = $matches[1] . '[]';
            } else {
                $class = $matches[1];
            }

            foreach (explode(',', $matches[2]) as $type) {
                list($key, $value) = explode('=', trim($type));

                if (substr(trim($value), 0, 1) == '\\') {
                    $value = substr(trim($value), 1);
                }

                $types .= sprintf('&types[%s]=%s', trim($key), $value);
            }
        }

        $schema = sprintf($this->getSchemaUrl(), $class . $types);
        $schema = str_replace('\\', '_', $schema);

        return $schema;
    }

    public function output($object)
    {
        $data = $this->serialize($object);

        switch ($this->getFormat()) {
            case Serializer::FORMAT_JSON:
                header('Content-Type: application/json');
                break;
            case Serializer::FORMAT_XML:
                header('Content-Type: application/xml');
                break;
            default:
                throw new InternalException('Unknown output format.', InternalException::OUTPUT_FORMAT_UNKNOWN);
        }

        echo $data;
    }
}