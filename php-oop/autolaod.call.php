<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

// function __autoload($classname) {
//     include strtolower($classname) . '.php';
// }

// spl_autoload_register(callable $autoload_function = ?, bool $throw = true, bool $prepend = false): bool

spl_autoload_register(function ($class) {
    include $class.'.php';
});