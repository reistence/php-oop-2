<?php 

class Category{
    protected $category;

    public function __construct(string $category)
    {
        $this-> category = $category;
    }


    public function printCategory (){
        return $this->category;
    }
}

?>