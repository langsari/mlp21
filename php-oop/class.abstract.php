<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

abstract class Component {
    abstract function printOutput();
}

class ImageComponent extends Component {
    function printOutput() {
        echo "Pretty picture";
    }
}