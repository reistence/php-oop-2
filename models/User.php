<?php 

class User{
     private $card_number;
     private $expiration_date;
     protected $discount;
     public $user_kind;
     

     public function __construct(string $user_kind){
        $this->user_kind = $user_kind;
     }


     public function set_card($card_number){
        $this->card_number = $card_number;
     }

     public function get_card(){
        return  $this->card_number;
     }

     public function set_expiration(string $expiration_date){
        if( date($expiration_date) > date("m/y") ){
            $this->expiration_date = $expiration_date;
        } else {
            $this->expiration_date = "Card expired";
        }
     }

     public function get_expiration(){
        return $this->expiration_date;
     }

     public function set_discount() {
            $this->discount = 0;
    }

    public function get_discount() {
        return $this->discount;
    }

}; 


?>