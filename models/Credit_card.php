<?php

class Credit_card{

    private $card_number;
    private $expiration_m;
    private $expiration_y;

    public function __construct(string $card_number, string $expiration_m, string $expiration_y)
    {
        $this->card_number = $card_number;
        $this->expiration_m = $expiration_m;
        $this->expiration_y = $expiration_y;
    }

    public function get_exp_m(){
        return $this->expiration_m;
    }

    public function get_exp_y(){
        return $this->expiration_y;
    }
}

?>