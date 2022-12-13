<?php

require_once __DIR__ . "/Product.php";

class Bowl extends Product{
    public $material;
    public $capacity_litre;


    public function __construct(string $name, Category $category, string $poster, string $material, float $capacity_litre)
    {
        parent::__construct($name, $category, $poster, "Bowl");
        $this->material = $material;
        $this->capacity_litre = $capacity_litre;   
    }
}