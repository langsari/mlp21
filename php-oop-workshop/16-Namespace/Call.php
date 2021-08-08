<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */
 
include 'Radio.php';
include 'tools/Radio.php';

$product = array();
$product[ ] = new Radio("Kholed");
$product[ ] = new \tools\Radio();

foreach ($product as $p){
    $p->report();
}