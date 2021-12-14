<?php
namespace Services;
class ProductManager{
    private array $products;
    public function __construct(){
        $this->array_products =[];
    }
    public function add($product): void{
        $this->products[] = $product;
    }
    public function getProducts(): array{
        return $this->products;
    }
}