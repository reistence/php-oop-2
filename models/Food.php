<?php

require_once __DIR__ . "/Product.php";

class Food extends Product{
    public $kind;
    public $quantity;
    public $ingredients;

    public function __construct(string $name, Category $category, string $poster, string $kind, string $quantity, array $ingredients)
    {
        parent::__construct($name, $category, $poster, "Food");
        $this->kind = $kind;
        $this->quantity = $quantity;
        $this->ingredients = $ingredients;
    }

    public function get_ingretients(){
        foreach($this->ingredients as $ingredient){
            echo $ingredient . " ";
        }
    }

};