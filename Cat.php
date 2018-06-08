<?php
/**
 * Author: tohrul
 * Date: 08.06.2018
 * Time: 1:50
 */
namespace ua\com\webbylab\tohrul;
include 'Animal.php';

class Cat extends Animal{

    public function __construct($name){
        parent::__construct($name);
    }

    public function meow(){
        return "Cat {$this->getName()} is saying meow";
    }
}