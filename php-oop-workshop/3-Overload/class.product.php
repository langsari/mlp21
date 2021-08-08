<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */
 
class Product
{
    private $id;
    private  $name;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function info()
    {
        $info = "";
        foreach (func_get_args() as $arg) {
            switch ($arg){
                case 'id': $info .=$this->id; break;
                case 'name': $info .=$this->name; break;
            }
        }
        echo $info;
    }
}