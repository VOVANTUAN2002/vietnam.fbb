<?php
namespace Rectangle;// namespace có tên là foder
include_once "Shape.php";
use Shape\Shape;// namespace của lớp cần thừa kế và lớp thừa kế

class Rectangle extends Shape
{
    public int $width;
    public int $height;

    public function __construct(string $name,
                                        int $width,
                                        int $height){
    parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea(): float|int{
        return $this->height * $this->width;
    }
    public function calculatePerimeter(): float|int{
        return ($this->height + $this->width) * 2;
    }
}