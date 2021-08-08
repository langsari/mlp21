<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */
 
//define()

class Student
{
    const ID = 491431002;
    public $school = "Nusantara";
    public function info()
    {
        $data = self::ID . ":" . $this->school;
        return $data;
    }
}