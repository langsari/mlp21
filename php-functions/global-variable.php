<?php
/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

//global var1, var2, ... ;

$a = 3;

function foo()
{
    global $a;

    $a += 2;
}

foo();
echo $a;