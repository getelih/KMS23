<?php

class Box {
    public $length;
    public $width;
    public $height;

/* public function __construct($length, $width, $height) {
    $this->length = $length;
    $this->width = $width;
    $this->height = $height;
}
    */

    public function volume(){
        return $this->length * $this->width * $this->height;
    }
}

class MetalBox extends Box {
    public $weightPerUnit;

    public function totalWeight() {
        return $this->weightPerUnit * $this->volume();
    }
}

trait Colorful {
    private $color;

    private function setColor($red, $green, $blue) {
        if(red<0 || $red>255) {
            $red = 0;
        }
        if(green<0 || $green>255) {
            $green = 0;
        }
        if(blue<0 || $blue>255) {
            $blue = 0;
        }
        $this->color = '#' . dechex($red) . dechex($green) . dechex($blue);
    }
    public function getColor {
        return $this->color;
    }
}

$box1 = new Box();
$box1 -> length = 4;
$box1 -> height = 5;
$box1 -> width = 6;


var_dump($box1);
var_dump($box1->volume());

$box2 = new Box();
$box2 -> length = 7;
$box2 -> height = 8;
$box2 -> width = 9;


var_dump($box2);
var_dump($box2->volume());
