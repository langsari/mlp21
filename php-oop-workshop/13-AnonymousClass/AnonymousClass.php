<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */
 
$object  = new class
{
    public function hello($message)
    {
        return "Hello $message";
    }
};

echo $object->hello('Strong Student');