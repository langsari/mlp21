<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

class Person {
    public $name = "";
    function getName() {
        return $this->name;
 }}

// return an anonymous implementation of Person
$anonymous = new class() extends Person {
    public function getName() {

        // return static value for testing purposes
        return "Moana";
    }};
// note: requires closing semicolon, 
// unlike non-anonymous class definitions