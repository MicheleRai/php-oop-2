<?php
class User {
    public $name;
    public $userName;
    public $email;
    public $creditCard;
    public $discount = 0;
    public $registered;

    public function __construct($name, $userName, $email, $creditCard, $registered)
    {
        $this->name = $name;
        $this->userName = $userName;
        $this->email =$email;
        $this->creditCard = $creditCard;
        $this->setRegistered($registered);
    }

    
    public function setRegistered($registered)
    {
        if(is_bool($registered) && $registered == true){
            $this->discount = 20;
            $this->registered = true;
        } else {
            $this->registered = false;
        }
    }


    public function getDiscount()
    {
        return $this->discount;
    }
}