<?php

namespace Emis\Annotation;

use ReflectionProperty;

class SimpleAnnotationReader
{
    public function getPropertyAnnotations(\ReflectionProperty $property)
    {
        $annotations = array();

        $comment = $property->getDocComment();
        preg_match_all('/@(.[^\s]+)\s+(.[^\s]+)/', $comment, $matches);

        if (count($matches[0])) {
            foreach ($matches[1] as $key => $value) {
                $annotations[$value] = $matches[2][$key];
            }
        }

        return $annotations;
    }

    public function getPropertyAnnotation(ReflectionProperty $property, $annotationName)
    {
        $annotations = $this->getPropertyAnnotations($property);

        if (isset($annotations[$annotationName])) {
            return $annotations[$annotationName];
        }

        return null;
    }
    
    public function getPropertyRecursive(\ReflectionClass $class, $propertyName)
    {
        $classes = array($class);

        while ($parent = $class->getParentClass()) {
            $classes[] = $parent;
            $class = $parent;
        }

        /* @var $class \ReflectionClass */
        foreach ($classes as $class) {
            try {
                $property = $class->getProperty($propertyName);
            } catch (\ReflectionException $exception) {
                continue;
            }

            return $property;
        }

        throw new \ReflectionException('Property not found using recursive search.');
    }
}