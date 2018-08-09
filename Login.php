<?php
/**
 * Created by PhpStorm.
 * User: Hoc_Anms
 * Date: 8/7/2018
 * Time: 1:37 PM
 */
class MyClass
{
    public $prop1 = "I'm a class property!";

    public function setProperty($newval)
    {
        $this->prop1 = $newval;
    }

    public function getProperty()
    {
        return $this->prop1 . "<br />";
    }
}

$obj = new MyClass;

echo $obj->prop1;