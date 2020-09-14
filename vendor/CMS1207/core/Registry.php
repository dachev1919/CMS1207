<?php


namespace CMS1207;


class Registry
{
    use TSingletone;

    public static $properties = [];

    public function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

    protected function getProperty($name)
    {
        if(isset(self::$properties['name'])){
            return self::$properties['name'];
        }
        return null;
    }

    public function getProperties()
    {
        return self::$properties;
    }

}