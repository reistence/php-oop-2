<?php
class Basket{
    private $basket_products = [];

    public function add_product( Product $product)
    {
        $this->basket_products[] = $product;
    }


     public function get_basket_total(){
        $sum = 0;
        foreach($this->basket_products as $basket_product){
            $sum += $basket_product->get_price();
        }
        return $sum;
    }
}


?>