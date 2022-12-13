<?php

require_once __DIR__ . "/Product.php";

class Kennel extends Product{
    public $kennel_kind;
    public $material;
    public $dimensions_cm;

    public function __construct(string $name, Category $category, string $poster, string $kennel_kind, string $material, string $dimensions_cm )
    {
        parent::__construct($name, $category, $poster, "Kennel" );
        $this->kennel_kind = $kennel_kind;
        $this->materials = $material;
        $this->dimensions_cm = $dimensions_cm;
    }

};