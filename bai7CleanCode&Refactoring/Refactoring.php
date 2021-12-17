<?php
const ADDITION = "+";
const SUBTRACTION = "-";
const MULTIPLICATION = "*";
const DIVISION = "/";
class Calculator{
    public function Calculator($firstOperand, $secondOperand, $operator) : float|int{
        switch ($operator){
            case ADDITION;
            return $firstOperand + $secondOperand;
            case SUBTRACTION;
            return $firstOperand - $secondOperand;
            case MULTIPLICATION;
            return $firstOperand * $secondOperand;
            case DIVISION;
            if ($secondOperand != 0){
            return $firstOperand / $secondOperand;
            }else{
                return "Can not divide by 0";
            }
            default;
            return "Unsupported operation";
        }
    }
}

$calculator = new Calculator();
echo $calculator->Calculator(1,2, '-');
echo "<br>";
echo $calculator->Calculator(1,2, '+');
echo "<br>";
echo $calculator->Calculator(1,2, '*');
echo "<br>";
echo $calculator->Calculator(1,0, '/');
?>