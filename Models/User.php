<?php

class User{
    public $username;
    public $email;
    public $password;
    
    /**
     * __construct
     *
     * @param  string $_username
     * @param  string $_email
     */
    function __construct($_username, $_email){
        $this->username = $_username;
        $this->email = $_email;
    }    
}