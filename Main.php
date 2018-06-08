<?php
/**
 * Author: tohrul
 * Date: 08.06.2018
 * Time: 2:40
 */

use ua\com\webbylab\tohrul\Cat;
include 'Cat.php';

$cat = new Cat('garfield');
echo ($cat->getName() === 'garfield' ? 'true' : 'false') . "\n";
echo $cat->meow() === "Cat garfield is saying meow" ? 'true' : 'false';