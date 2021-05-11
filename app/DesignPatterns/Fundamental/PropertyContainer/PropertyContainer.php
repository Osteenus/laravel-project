<?php

namespace App\DesignPatterns\Fundamental\PropertyContainer;

use \App\DesignPatterns\Fundamental\PropertyContainer\Interfaces\PropertyContainerInterface;
use Carbon\Exceptions\Exception;

class PropertyContainer implements PropertyContainerInterface
{
    private $propertyContainer = [];

    /**
     *
     */
    public static function getDescription()
    {

    }

    /**
     * @param $propertyName
     * @param $value
     */
    public function addProperty($propertyName, $value)
    {
        $this->propertyContainer[$propertyName] = $value;
    }

    /**
     * @param $propertyName
     */
    public function deleteProperty($propertyName)
    {
        unset($this->propertyContainer[$propertyName]);

    }

    /**
     * @param $propertyName
     * @return mixed|null
     */
    public function getProperty($propertyName)
    {
        return $this->propertyContainer[$propertyName] ?? null;
    }

    /**
     * @param $propertyName
     * @param $value
     * @throws Exception
     */
    public function setProperty($propertyName, $value)
    {
        if (!isset($this->propertyContainer[$propertyName])) {
            throw new \Exception("Property [{$propertyName}] not found");
        }
        $this->propertyContainer[$propertyName] = $value;
    }
}
