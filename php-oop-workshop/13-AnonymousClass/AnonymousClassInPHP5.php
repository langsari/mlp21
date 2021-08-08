<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

//Anonymous class for PHP below 7
include 'class.product.php';

$tv = new Product();
$tv->setId(1)->setName("TV")->setStock(100)->setPrice(1000);

$radio = new Product();
$radio->setId(2)->setName("Radio")->setStock(1000)->setPrice(200);

//
$product[ ] = (object)array("product" =>$tv, "qty" => 2);
$product[ ] = (object)array("product" =>$radio, "qty" => 4);
