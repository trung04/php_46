<?php
class human
{
    // var $name;
    // var $age;
    // var $address;
    // var $weight;
    // var $gender;
    // var $height;
    function __construct($name,$age,$weight,$height){
        $this->name = $name;
        $this->age = $age;
        $this->weight=$weight;
        $this->height=$height;

    }
    function setName(){
        echo $this->name;
    }
    function  eat(){
        echo $this ->name." đi ăn cơm ";
    }
    function hangout(){
        echo $this->name." play basketball";
    }
    function doing(){
        echo $this->name."  is coding ";
    }
    function settName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        echo $this->name;
    }





}







?>