<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$product = new Radio();
$product->report();