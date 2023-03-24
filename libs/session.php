<?php
    session_start();

class SESSION{

    public static function setsession(string $email,string $password)
    {
        $_SESSION["user_login"]=$email;
        $_SESSION["password"]=$password;
    }    
}