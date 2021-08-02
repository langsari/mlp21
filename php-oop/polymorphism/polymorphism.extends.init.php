<?php

/**
 * LangsariSoftware - A Delicious PHP Component
 *
 * @package  LangsariEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */
 
include 'polymorphism.init.php';

class English extends PolymorphismPerson
{
    public function greet()
    {
        return 'Hello!';
    }
}

class German extends PolymorphismPerson
{
    public function greet()
    {
        return 'Hallo!';
    }
}

class French extends PolymorphismPerson
{
    public function greet()
    {
        return 'Bonjour!';
    }
}