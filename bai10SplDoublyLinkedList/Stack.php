<?php
$objStack = new SplStack();

$objStack->push('Bi Trang');
$objStack->push('Bi Do');
$objStack->push('Bi Vang');

/*
Bi Vang
Bi Do
Bi Trang
*/
$objStack->rewind();


//kiem tra du lieu co hay ko
if( $objStack->valid() ){
    echo $objStack->current()."<br>";
    //di chuyen con tro
    $objStack->next();
}

//kiem tra du lieu co hay ko
if( $objStack->valid() ){
    echo $objStack->current()."<br>";
    //di chuyen con tro
    $objStack->next();
}

//kiem tra du lieu co hay ko
if( $objStack->valid() ){
    echo $objStack->current()."<br>";
    //di chuyen con tro
    $objStack->next();
}

//kiem tra du lieu co hay ko
if( $objStack->valid() ){
   
}else{
    echo 'Stack is empty';
}

// $objStack->rewind();//i = 0
// while($objStack->valid()){ 
//     echo $objStack->current()."<br>";
//     $objStack->next();//i++
// }