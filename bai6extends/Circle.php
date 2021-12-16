<?php

class Circle{
    public float|int $radius;
    public string $name;

    public function __construct(string $name, float|int $radius){
        $this->radius = $radius;
        $this->name = $name;
    }

    public function getName(): string{
        return $this->name;
    }

    public function setName(string $name): void{
        $this->name = $name;
    }

    public function getRadius(): string{
        return $this->radius;
    }

    public function setRadius(float|int $radius): void{
        $this->radius = $radius;
    }
}
interface Comparable{
    public function compareTo($objTwo);
}

class ComparableCircle extends Circle implements Comparable{

    public function compareTo($objTwo): int{
        $circleTwoRadius = $objTwo->getRadius();

        if ($this->getRadius() > $circleTwoRadius){
            return 1;
        } else if ($this->getRadius() < $circleTwoRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}
$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 2);
$circleThree = new ComparableCircle('circleThree', 4);

$test = $circleOne->compareTo($circleTwo);
echo('Comparable: <br>');
echo $test;