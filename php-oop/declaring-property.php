<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

class Person {
    public $name = "J Doe"; // works
    public $age = 0; // works
    public $day = 60 * 60 * hoursInDay(); // doesn't work
    
    function getName() {
        return $this->name;
    }

    function setName($newName) {
        $this->name = $newName;
    }
}


class Person {
    protected $rowId = 0;

    public $username = 'Anyone can see me';

    private $hidden = true;
}