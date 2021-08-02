<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

namespace shipping;

class Courier
{
    public $name;
    public $home_country;
    public static function getCouriersByCountry($country) {
        // get a list of couriers with their home_country = $country
        // create a Courier object for each result
        // return an array of the results
        return $courier_list;
    } }