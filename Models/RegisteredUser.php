<?php

class RegisteredUser extends User{
    public $registeredUserDiscount;
    
    /**
     * __construct
     *
     * @param  string $username
     * @param  string $email
     * @param  string $registeredUserDiscount
     */
    function __construct($username, $email, $registeredUserDiscount){
        parent::__construct($username, $email);
        $this->registeredUserDiscount = $registeredUserDiscount;
    }    
}