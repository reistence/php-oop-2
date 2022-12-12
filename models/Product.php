<?php

require_once __DIR__ . "/category.php";

class Product{
    public $name;
    protected $price;
    public $category;
    public $poster;


    public function __construct( string $name, Category $category, string $poster)
    {
        $this->name = $name;
        $this->category = $category;
        $this->poster = $poster;
    }
    
    public function set_price($price){
        $this->price = $price; 
    }
    
    public function get_price(){
       return $this->price; 
    }


};

//food, toys, kennels, bowl

class Food extends Product{
    public $kind;
    public $quantity;
    public $ingretients;

    public function __construct(string $name, Category $category, string $poster, string $kind, string $quantity, array $ingredients)
    {
        parent::__construct($name, $category, $poster);
        $this->kind = $kind;
        $this->quantity = $quantity;
        $this->ingretients = $ingredients;
    }

};


class Toy extends Product{
    public $toy_kind;
    public $materials;


    public function __construct( string $name, Category $category, string $poster ,string $toy_kind, array $materials )
    {
        parent::__construct($name, $category, $poster);
        $this->toy_kind = $toy_kind;
        $this->materials = $materials;
    }

};


class Kennel extends Product{
    public $kennel_kind;
    public $material;
    public $dimensions_cm;

    public function __construct(string $name, Category $category, string $poster , string $kennel_kind, string $material, string $dimensions_cm )
    {
        parent::__construct($name, $category, $poster);
        $this->kennel_kind = $kennel_kind;
        $this->materials = $material;
        $this->dimensions_cm = $dimensions_cm;
    }

};


class Bowl extends Product{
    public $material;
    public $capacity_litre;


    public function __construct(string $name, Category $category, string $poster ,string $material, float $capacity_litre)
    {
        parent::__construct($name, $category, $poster);
        $this->material = $material;
        $this->capacity_litre = $capacity_litre;   
    }
}







?>