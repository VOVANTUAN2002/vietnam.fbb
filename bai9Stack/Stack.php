<?php
class Stack {
    public $limit ; 
    public $stack ;

    public function __construct($limit)
    {
        $this->limit = $limit;
        $this->stack = [] ;
    }
    // Thêm 5 phần tử vào stack dưới dạng phương thức push  
    public function push($item) {
        array_unshift($this->stack,$item);
    }
    
    /* xóa 1 phần tử trong ngắn xếp ở đây chúng ta Lấy ra lần lượt 3 phần tử 
     và giữ nguyên các phần tử trong mảng 
    */
    public function pop(){
        return array_shift($this->stack);
    }
    //lấy ra phần tử đầu tiên của ngăn xếp trên cùng của mảng 
    public function top(){
        return current($this->stack);
    }

    public function isEmpty(){
        if (count($this->stack) == $this->limit){
           return true;
        } else {
            return false;
            // return array_shift($this->stack);
        }
    }
}
//khởi tạo đối tượng 
$stack = new Stack(5);
$stack->push("tuan0");
$stack->push("tuan1");
$stack->push("tuan2");
$stack->push('tuan3');
$stack->push('tuan4');

$stack->pop();
$stack->pop();
$stack->pop();

$stack->push("tuanmoi2");
$stack->push('tuanmoi3');
$stack->push('tuanmơi4');

$stack->top();

var_dump($stack->isEmpty());

echo "<pre>";
print_r($stack);
die();