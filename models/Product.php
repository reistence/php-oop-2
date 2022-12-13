<?php

require_once __DIR__ . "/Category.php";

class Product{
    public $name;
    protected $price;
    public $category;
    public $poster;
    public $product_kind;


    public function __construct( string $name, Category $category, string $poster, string $product_kind)
    {
        $this->name = $name;
        $this->category = $category;
        $this->poster = $poster;
        $this->product_kind = $product_kind;
    }
    
    public function set_price($price){
        $this->price = $price; 
    }
    
    public function get_price(){
       return $this->price; 
    }


};

?>