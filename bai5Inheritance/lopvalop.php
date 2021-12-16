<?php
//Lớp Circle có những thuộc tính 
class Circle {
    //thuộc tính 
    public $radius = 5;
    public $color = "blue";
//Lớp Circle có những thuộc tính mô tả bán kính, màu sắc, các getter/setter 
    public function __construct($radius,$color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function __toString()
    {
        return pi()*pow($this->radius,2);
    }
    // public function  setRadius($radius){
    //     $this->radius = $radius;
    // }
    // function getRadius(){
    //     return $this->radius;
    // }
    // public function setColor($color){
    //     $this->color = $color;
    // }
    // function getColor(){
    //     return $this->color;
    // }
}


//Lớp Cylinder mở rộng lớp Circle bằng cách bổ sung thuộc tính chiều cao
class Cylinder extends Circle {
   
    public $height = 10;

    public function __toString()
    {
      return (parent::__toString() * $this->height);
    }
}
//khơi tạo đối tượng từ lớp Circle 
    $circle = new Circle(10,"red");
    echo $circle->radius ."</br>";
    echo $circle->color ."</br>";
    echo $circle->__toString()."</br>";
    //gọi hàm Cylinder
    $objCylinder = new Cylinder(5,"blue",6);
    echo $objCylinder->radius."</br>";
    echo $objCylinder->color."</br>";
    echo $objCylinder->height."</br>";

    echo $objCylinder->__toString();

    // echo "<pre>";
    // print_r($objCylinder);
    // echo "</pre>";