<?php

class Cat {
    public $name;
};


$cat1 = new Cat();
$cat1->name = 'Nuustik';

$cat2 = $cat1;
$cat2->name = 'Pätu';

var_dump($cat1, $cat2);
