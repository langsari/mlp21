<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */
 
spl_autoload_register(function($class)
{
    include $class.'.php';
});

use tools\Radio as r;

$product = array();
$product[] = new Radio();
$product[] = new r();

foreach ($product as $p) {
    $p->report();
}

