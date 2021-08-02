<?php
/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

function strcat($left, $right)
{
    return $left . $right;
}
$first = "This is a ";
$second = " complete sentence!";

echo strcat($first, $second);