<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

//

//class classname [ extends baseclass ] [ implements interfacename , [interfacename, ... ] ] {
//    [ use traitname, [ traitname, ... ]; ]
//
//    [ visibility $property [ = value ]; ... ]
//
//    [ function functionname (args) [: type ] {
//        // code
//    }
// ...
// ]
//}

    //
class Person
{
    public $name = '';

    function getName() {
        return $this->name;
    }

    function setName($newName) {
        $this->name = $newName;
    }
}