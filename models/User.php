<?php 


class User{
    

     public $user_kind;
     protected $discount;
     protected $credit_card;
     public $basket;
     

     public function __construct( Credit_card $credit_card, string $user_kind = "guest" ){
        $this->user_kind = $user_kind;
        $this->credit_card = $credit_card;
     }
     
     public function pay($total){
      //check if there's any discount to be applied to the basket total
      if($this->get_discount() === 0 || is_null($this->discount)){
          $total = $total;
      }  else{
          $total = $total - (($this->get_discount() * $total) / 100);
      }
      // then check the validity of the credit card
      if(
         $this->credit_card->get_exp_y() > date("Y") || $this->credit_card->get_exp_y() === date("Y") && $this->credit_card->get_exp_m() <= date("m")
         )
      {
         return "Payment went through";
      } else{
         throw new Exception("Payment Error: Card expired");
      }
     }


     public function set_discount() {
            $this->discount = 0;
    }

    public function get_discount() {
        return $this->discount;
    }

}; 


?>