<?php
require_once __DIR__ . "/../Traits/Notifiable.php";
require_once __DIR__ . "/Email.php";


class Registered_user extends User{

     use Notifiable; 

    public $username;
    public $email;
    private $password;


    public function __construct(Credit_card $credit_card  ,string $username, string $email)
    {
         parent::__construct($credit_card ,"Registered User");
         $this->username = $username;
         $this->email = $email;
    }

    public function set_discount(){
        $this->discount = 20;
        $this->set_notification(new Email($this->email, "Hi $this->username as a registered member you get a 20% off!"));
        $this->send($this->username, "Check out the new notification");
       
    }

    public function set_password($password){
        $this->password = $password;
    }

    public function get_password(){
        return $this->password;
    }
}

?>