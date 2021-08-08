<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */
 
//polymorphism

include 'class.product.php';
include 'class.radio.php';

$radio = new Radio("Kholed");
$radio->info();