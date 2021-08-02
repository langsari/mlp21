<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

//interface interfacename {
//    [ function functionname();
//    ...
//    ]
//}

interface Printable {
    function printOutput();
}

class ImageComponent implements Printable {
    function printOutput() {
        echo "Printing an image...";
    }
}