<?php

require_once __DIR__ . "/Product.php";
class Toy extends Product{
    public $toy_kind;
    public $materials;


    public function __construct( string $name, Category $category, string $poster ,string $toy_kind, array $materials )
    {
        parent::__construct($name, $category, $poster, "Toy");
        $this->toy_kind = $toy_kind;
        $this->materials = $materials;
    }

    public function get_materials(){
        foreach($this->materials as $material){
            echo $material . " ";
        }
    }

};