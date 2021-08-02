<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

class HTMLStuff {
    static function startTable() {
        echo "<table border=\"1\">\n";
    }

    static function endTable() {
        echo "</table>\n";
    }
}

HTMLStuff::startTable();
 // print HTML table rows and columns
HTMLStuff::endTable();