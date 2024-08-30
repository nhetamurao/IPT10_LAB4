<?php

class Customer{
    public $name;
    public $address;
    public $dob;
    public $cardName;
    public $pin;

    public function verifyPassword(){
        return false;
    }

}
?>