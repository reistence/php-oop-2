<?php
require_once __DIR__ . "/User.php";


class Registered_user extends User{

    public $username;
    public $email;
    private $password;


    public function __construct( string $username, string $email)
    {
         parent::__construct("Registered User");
         $this->username = $username;
         $this->email = $email;
    }

    public function set_discount(){
        $this->discount = 20;
    }

    public function set_password($password){
        $this->password = $password;
    }

    public function get_password(){
        return $this->password;
    }
}

?>