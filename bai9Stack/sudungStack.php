<?php



class Stack {
    public $Stack ;

    public function __construct($Stack)
    {
        $this->stack = $Stack;
    }
    //dùng push thêm phần tử vào mảng
    public function push($item){
        // $this->stack[]=$item;
        array_push($this->stack,$item);
    }
    //lấy giá trị phần tử trong mảng
    public function pop($item) {
       return $this->stack[$item];
    }
}
//khởi tạo đối tượng
$objStack = new Stack([]);
$objStack->push(1);
$objStack->push(2);
$objStack->push(3);
$objStack->push(4);


$objStack->pop();
echo '<pre>';
print_r($objStack);
die();