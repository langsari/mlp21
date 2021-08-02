<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

 //Pseudocode 
//$object = new Class;

require 'class.person.php';

$object = new Person;

$moana = new "Person"; // does not work

$object = new Person("Sina", 35);

$class = "Person";
$object = new $class;
// is equivalent to
$object = new Person;

$account = new Account;
$object = "account";
${$object}->init(50000, 1.10); // same as $account->init