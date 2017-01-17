<?php
namespace Emis\Tools;

use Emis\Entity\Serializer;
use Emis\Http\Client;
use Emis\Model\ApiClass;
use Emis\Model\ApiParameter;

class ProxyGenerator
{
    private static $primitives = array(
        'int',
        'string',
        'float',
        'bool',
        'boolean',
        'integer',
        'array',
        'mixed',
        'null'
    );

    const TEMPLATE_CLASS = <<<EOF
<?php
namespace %s;

use Emis\\Proxy\\Base;

class %s extends Base
{
%s
}
EOF;

    const TEMPLATE_METHOD = <<<EOF
    /**
    * %s
    *
    * @Authorization(type=AuthorizationType::%s)
%s
    */
    public function %s(%s) 
    {
        \$params = \$this->getClient()->paramsAsArray(\$this, '%s', func_get_args());

        /* @var %s \$result */
        \$result = \$this->getClient()->request('%s', '%s', \$params);

        return \$result;    
    }


EOF;


    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $api;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $outputDirectory;

    /**
     * @var string[]
     */
    private $generatedEntities;

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Client $client
     * @return ProxyGenerator
     */
    public function setClient($client)
    {
        $this->client = $client;
        return $this;
    }

    public function run()
    {
        printf("Syntax: php esdk.php [--api=<api name>] [--todir=<target directory>] [--username=<username>] [--password=<password>]\n\n");

        $this->inputApi();
        $this->inputUsername();
        $this->inputPassword();
        $this->inputOutputDirectory();

        printf("Connecting to %s...\n", $this->api);

        $this->client->setApi($this->api);
        $this->client->login($this->username, $this->password);

        /* @var \Emis\Model\ApiSpecification $spec */
        $spec = $this->client->request('Specification', 'definitions', array(), 'model');

        foreach ($spec->getPackages() as $package) {
            foreach ($package->getClasses() as $class) {
                $this->createClass($class);
            }
        }

        $this->client->logout();
    }

    private function getArg($argument)
    {
        global $argv;

        foreach ($argv as $arg) {
            $chunks = explode("=", $arg);
            if (count($chunks) == 2) {
                if ($chunks[0] == $argument) {
                    return $chunks[1];
                }
            }
        }

        return null;
    }

    private function inputApi()
    {
        $this->api = $this->getArg('--api');

        if ($this->api) {
            return;
        }

        echo "\nWhich API you'd like to generate proxy classes for?\n";
        echo "1 - News (Documents) API\n";
        echo "2 - Company API\n";
        echo "3 - DealWatch API\n";

        switch (readline("Select 1-3: ")) {
            case 1:
                $this->api = Client::DOCUMENTS_API;
                break;
            case 2:
                $this->api = Client::COMPANY_API;
                break;
            case 3:
                $this->api = Client::DEALWATCH_API;
                break;
            default:
                echo "Value out of range.\n";
                $this->inputApi();
        }
    }

    private function inputUsername()
    {
        $this->username = $this->getArg('--username');

        if ($this->username) {
            return;
        }

        $this->username = readline("API Username: ");
    }

    private function inputPassword()
    {
        $this->password = $this->getArg('--password');

        if ($this->password) {
            return;
        }

        $this->password = readline("API Password: ");
    }

    private function inputOutputDirectory()
    {
        $this->outputDirectory = $this->getArg('--todir');

        if ($this->outputDirectory) {
            return;
        }

        $this->outputDirectory = readline("Output Directory: ");

        if (!$this->outputDirectory) {
            $this->outputDirectory = '.';
        }
    }

    /**
     * @param ApiClass $class
     */
    public function createClass(ApiClass $class)
    {
        $directory = $this->outputDirectory . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class->getNamespace());
        $filename = $directory . DIRECTORY_SEPARATOR . $class->getName() . '.php';
        @mkdir($directory, 0777, true);

        $methodContent = '';
        printf("Extracting proxy class %s...\n", $filename);

        foreach ($class->getMethods() as $method) {
            $params = array();
            $annotations = array();

            printf("Collecting data for method %s...\n", $method->getName());
            foreach ($method->getParameters() as $parameter) {
                $this->createEntity($class->getNamespace(), $class->getName(), $parameter->getType());

                $params[] = sprintf('%s$%s%s',
                    $this->typeAsString($parameter->getType()),
                    $parameter->getName(),
                    $parameter->getIsMandatory() ? '' : ' = ' . $this->defaultValueAsString($parameter->getDefaultValue())
                );

                $annotations[] = sprintf("\t* @var %s $%s %s",
                    $parameter->getType(),
                    $parameter->getName(),
                    trim($parameter->getDescription())
                );
            }

            $this->createEntity($class->getNamespace(), $class->getName(), $method->getReturnType());
            $annotations[] = sprintf("\t* @return %s", $method->getReturnType());

            $methodContent .= sprintf(self::TEMPLATE_METHOD,
                str_replace("\n", "\n    * ", $method->getDescription()),
                $method->getAuthorizationType(),
                implode("\n", $annotations),
                $method->getName(),
                implode(', ', $params),
                $method->getName(),
                $method->getReturnType(),
                $class->getName(),
                $method->getName()
            );
        }

        $classContent = sprintf(self::TEMPLATE_CLASS, $class->getNamespace(), $class->getName(), $methodContent);

        file_put_contents($filename, $classContent, LOCK_EX);
    }

    private function typeAsString($type)
    {
        if (in_array($type, self::$primitives)) {
            return '';
        }

        if (substr($type, -2) == '[]') {
            return 'array ';
        }

        return $type . ' ';
    }

    private function defaultValueAsString($value)
    {
        if (is_array($value)) {
            return "array()";
        }

        if (is_null($value)) {
            return 'null';
        }

        if (is_bool($value)) {
            if ($value) {
                return "true";
            } else {
                return "false";
            }
        }

        if (!$value && strlen($value) < 1) {
            $value = "''";
        }

        return $value;
    }

    private function createEntity($parentNamespace, $parentClassName, $entityType)
    {
        if ($this->isPrimitive($entityType) || !$entityType) {
            return;
        }

        printf("Generating entity class for %s...\n", $entityType);

        if (strpos($entityType, '<') && strpos($entityType, '>')) {

        }

        $type = trim(str_replace('\\', '_', $entityType), '_');
        $dynamicTypes = $this->getDynamicTypeUrl($type);

        $schema = $this->client->request(
            'Schema',
            'getSchema',
            array(
                'schema' => $type,
                'types' => $dynamicTypes
            ),
            'model',
            true
        );

        $xml = new \DOMDocument();
        $xml->loadXML($schema);

        $xsl = new \DOMDocument();
        $xsl->load(dirname(__FILE__) . '/../../../xsl/entity.xsl');

        $processor = new \XSLTProcessor();
        $processor->importStyleSheet($xsl);

        $classes = explode('<?php', $processor->transformToXML($xml));

        foreach ($classes as $class) {
            if (!trim($class)) {
                continue;
            }

            $matches = array();

            preg_match('/namespace.(.+);/', $class, $matches);

            if (!isset($matches[1])) {
                throw new \Exception(printf("Bad entity class definition in %s\\%s for %s.\n", $parentNamespace, $parentClassName, $entityType));
            }

            $namespace = $matches[1];

            preg_match('/class.(.+)/', $class, $matches);

            if (!isset($matches[1])) {
                throw new \Exception(printf("Bad entity class definition in %s\\%s for %s.\n", $parentNamespace, $parentClassName, $entityType));
            }

            $className = $matches[1];
            $directory = $this->outputDirectory . DIRECTORY_SEPARATOR . str_replace("\\", DIRECTORY_SEPARATOR, $namespace);
            $filename = sprintf('%s%s.php',
                $directory . DIRECTORY_SEPARATOR,
                $className
            );
            echo "Filename: " . $filename . "\n";


            printf("Creating entity class %s in namespace %s...\n", $className, $namespace);
            @mkdir($directory, 0777, true);
            file_put_contents($filename, "<?php\n" . $class, LOCK_EX);
        }
    }

    private function isPrimitive($type)
    {
        $type = str_replace('[]', '', $type);

        if (in_array($type, self::$primitives) || str_replace('\\', '', $type) == 'DateTime') {
            return true;
        }

        return false;
    }

    private function getDynamicTypeUrl(&$class)
    {
        $types = array();
        preg_match('/(.*)<(.*)>/', $class, $matches);

        if (count($matches) == 3) {
            if (substr($class, -2) == '[]') {
                $class = $matches[1] . '[]';
            } else {
                $class = $matches[1];
            }

            foreach (explode(',', $matches[2]) as $type) {
                list($key, $value) = explode('=', trim($type));

                if (substr(trim($value), 0, 1) == '_') {
                    $value = substr(trim($value), 1);
                }

                // $types .= sprintf('&types[%s]=%s', trim($key), $value);
                $types[$key] = $value;
            }
        }

        return $types;
    }
}
