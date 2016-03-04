<?php
class Hello
{
    private $hello = 'Hello';
}

$closure = function ($whom)
{
    echo sprintf('%s %s',$this->hello, $whom);
};

$obj = new Hello();
$closure->call($obj, 'Ed Lomonaco');