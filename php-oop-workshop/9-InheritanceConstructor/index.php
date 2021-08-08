<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

include 'class.product.php';
include 'class.radio.php';

$product = array(new Radio("Kholed"), new Radio("Langsari"));
foreach ($product as $item) {
    echo $item->info() . "<br>";
}