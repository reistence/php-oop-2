<?php
trait Notifiable {

    protected $notification;

    public function set_notification($notification){
        $this->notification = $notification;
    }

    public function send($receiver, $message){
        echo "Hi $receiver, $message";
    }

}


?>