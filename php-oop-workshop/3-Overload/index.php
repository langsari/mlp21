<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */
 
include 'class.product.php';
$s1 = new Product();

$s1->setId(1);
$s1->setName(TV);

$s1->info("id", "name");
