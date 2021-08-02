<?php
/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

 //
//function doubler($value)
//{
// return $value << 1;
//}
//
//echo "A pair of 13s is " . doubler(13);
// A pair of 13s is 263

// Modify
// passing parameter by reference

function doubler(&$value)
{
    $value = $value << 1;
}

$a = 3;
doubler($a);

echo $a;
// 6