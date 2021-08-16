<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

include 'class.product.php';include 'class.radio.php';include 'class.computer.php';

$product = array();
$product[] = new Radio("Kholed");
$product[] = new Computer("ThinkPad");
$product [] = new Computer("Macbook Pro");

foreach ($product as $pro)
{
    $pro->report();
}