<?php
namespace Rectangle;
include_once "Rectangle.php";
use Rectangle\Rectangle;

class Square extends Rectangle
{
    public function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
    }
}
