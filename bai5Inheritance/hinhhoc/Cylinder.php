<?php
namespace Cylinder;
include_once "Circle.php";
use Html\Circle;// namespace của lớp cần thừa kế và lớp cần thừa kế

class Cylinder extends Circle 
{
    public int $height;

    public function __construct(string $name,int|float $radius, int $height){
        parent::__construct($name, $radius);
        $this->height = $height;
    }
    public function calculateArea(): int|float{
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }
    public function calculateVolume(): int|float{
        return parent::calculateArea() * $this->height;
    }
}