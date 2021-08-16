<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */
 
class Computer extends     Product{
    public function report (){
        echo "Computer:" . $this->getId() . ":" . $this->getName() . "<br>";
    }
}