<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */
 

abstract class Product
{
    private static $nextID = 1;
    private $id;
    private  $name;

    public function __construct($name)
    {
        $this->name = $name;
        $this->id = self::$nextID;
        self::$nextID++;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function info()
    {
        return $this->id . ":" . $this->name;
    }

    abstract function report(); // NO {}
}