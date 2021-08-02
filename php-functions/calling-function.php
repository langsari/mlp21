<?php
/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

$someValue = function_name( [ parameter, ... ] );

// strlen() is a PHP built-in function that returns the length of a string
$length = strlen("PHP"); // $length is now 3
// sin() and asin() are the sine and arcsine math functions
$result = sin(asin(1)); // $result is the sine of arcsin(1), or 1.0

// unlink() deletes a file
$result = unlink("functions.txt");
// $result = true or false depending on success or failure

// defining function
// psudocode
//function [&] function_name([parameter[, ...]])
//{
// statement list
//}

function strcat($left, $right)
{
    $combinedString = $left . $right;
    return $combinedString;
}


function strcat($left, $right)
{
    return $left . $right;
}
$first = "This is a ";
$second = " complete sentence!";

echo strcat($first, $second);