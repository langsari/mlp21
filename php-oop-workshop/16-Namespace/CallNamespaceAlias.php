<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */
include 'radio.php';

//use Go as g;
//
//$product = new g\tools\Radio();
//echo $product->report();

use tools\Radio as r;

$product = new r();
$product->report();