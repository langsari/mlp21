<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */
 
class Product
{
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function info()
    {
        return $this->id . ":" . $this->name;
    }

    function __destruct()
    {
        echo "Object Have been Destroyed";
    }
}