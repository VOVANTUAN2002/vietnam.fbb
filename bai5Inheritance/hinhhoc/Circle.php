<?php
namespace Html;
include_once "../../bai3lopvadoituong/lop.php";
include_once "Shape.php";
use Shape\Shape;// namespace của lớp cần thừa kề và lớp cần thừa kế
class Circle extends Shape 
{
    public int|float $radius;

    public function __construct(string $name, int|float $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea(): int|float
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(): int|float
    {
        return pi() * $this->radius * 2;
    }
}
