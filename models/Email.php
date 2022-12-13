<?php

class Email{
    public $adress;
    public $email_message;

    public function __construct(string $adress, string $email_message)
    {
        $this->adress = $adress;
        $this->email_message = $email_message;;;
    }


    public function send_email($adress, $email_message){
        echo "The email was successfully sent.";
    }
}


?>