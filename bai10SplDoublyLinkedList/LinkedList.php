<?php
$dlist = new SplDoublyLinkedList();
//$dlist->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);//Last In - First Out
$dlist->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);//First In - First Out

$dlist->push('Bi Trang');
$dlist->push('Bi Do');
$dlist->push('Bi Vang');

for($dlist->rewind();$dlist->valid();$dlist->next()){
    echo $dlist->current()."<br/>";
}

// echo '<pre>';
// print_r($dlist);
// die();