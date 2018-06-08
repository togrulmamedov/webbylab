<?php
/**
 * Author: tohrul
 * Date: 08.06.2018
 * Time: 1:51
 */
namespace ua\com\webbylab\tohrul;

class Animal{
    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}