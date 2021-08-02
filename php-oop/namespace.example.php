<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

// shop
//   products
//     Products
//     ProductCategories
//   shipping
//     Courier
// admin
//  user
//    User

use shop\shipping;
use admin\user as u;

// which couriers can we use?
$couriers = shipping\Courier::getCouriersByCountry('India');

// look up this user's account and show their name
$user = new u\User();
echo $user->getDisplayName();