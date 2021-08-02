<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

require 'polymorphism.extends.init.php';

function greeting($people)
{
    foreach ($people as $person) {
        echo $person->greet() . '<br>';
    }
}

$people = [
    new English(),
    new German(),
    new French()
];

greeting($people);