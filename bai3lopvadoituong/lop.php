<?php
class Fan {
    public   $SLOW = 1; //truy xuất được
    public   $MEDIUM = 2;
    public   $FAST = 3;
    private   $speed = 1; //không truy xuất được
    //public có thể truy xuất được còn private k thể truy xuất protect k truy xuát được
    private   $on = false;
    private   $color = "blue";
    private   $radius = 5;
    protected $width = 15;

    public function getSLOW(){
        return $SLOW;
    }
    // public function __construc() 
    //{
        // code
    // } biến ít từ 3 trở xuống thì dùng 
    public function getMEDIUM(){
        return $MEDIUM;
    }

    public function getFAST(){
        return $FAST;
    }

    public function getSpeed($speed){
        $this->speed = $speed;
        return $this->speed;
    }

    public function  getOn($on){
        return $on;
    }

    public function  getColor($color){
        return $color;
    }

    public function getRadius($radius){
        return $radius;
    }

    public function setSpeed( $speed){
        $this->$speed = $speed;
    }

    public function setOn( $on){
        $this->on = $on;
    }

    function setColor(String $color){
        $this->$color = $color;
    }

    public function setRadius( $radius){
        $this->$radius = $radius;
    }

    public function Fan($speed, $on, $color, $radius){
        $this->speed = $speed;
        $this->on = $on;
        $this->color = $color;
        $this->radius = $radius;
    }
    public function toString(){
         $state = "";
        if ($this->getOn(true) == true) {
            $state .= ("Fan is on");
            $state .= ("Speed: " . $this->speed . "");
        } else {
            $state .= ("Fan is off");
        }
        $state .= ("Color: " . $this->color . "");
        $state .= ("Radius: " . $this->radius . "");
        return $state;
    }
}
// tính kế thừa
class FanWind extends Fan {
    // public $width = 15;
    public  $on = false;

}
//gọi hàm objFanWind
$objFanWind = new FanWind();
// echo $objFanWind->width;
// echo $objFanWind->on;
echo "<pre>";
print_r($objFanWind);
echo "</pre>";
$fan = new Fan();
// echo $fan->width;
$fan->getSpeed(3) ;
$fan->getOn(true) ;
$fan->getColor("yellow");
$fan->setRadius( 10);

echo $fan->toString();