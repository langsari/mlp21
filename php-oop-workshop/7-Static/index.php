<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */
 
include 'class.product.php';
$product = array(new Product("Computer"), new Product("Phone"));

foreach ($product as $item) {
    echo $item->info();
}