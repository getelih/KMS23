<?php

class Box {
    public $length;
    public $width;
    public $height;

    public function volume(){
        return $this->length * $this->width * $this->height;
    }
}

$box1 = new Box;
$box1 -> length = 4;
$box1 -> height = 5;
$box1 -> width = 6;

var_dump($box1);
var_dump($box1->volume());
