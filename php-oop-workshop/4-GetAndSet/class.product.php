<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */
 
class Product
{
    private $data = array();
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    public function info()
    {
        $info = "";
        foreach ($this->data as $data) {
            $info .= $data . " ";
        }
        return $info;
    }

}