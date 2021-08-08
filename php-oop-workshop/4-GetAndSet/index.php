<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

include 'class.product.php';
$product = new Product();

$product->id = 1;
$product->name = "Computer";

echo $product->info();