<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

function outer ($a)
{
    function inner($b)
    {
        echo "there $b";
    }
}
 echo "$a, hello ";

// outputs "well, hello there reader"
outer("well");
inner("reader");

