<?php
/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

//procedural code
// static var [= value][, ... ];

function counter()
{
    static $count = 0;
    return $count++;
}

for ($i = 1; $i <= 5; $i++) {
    print counter();
}