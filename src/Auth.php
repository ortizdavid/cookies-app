<?php
require_once 'User.php';
require_once 'Cookie.php';

class Auth
{
    public static function login(string $userName, string $password) : void
    {
        if (User::exists($userName, $password)) 
        {
            Cookie::addCookie('username', $userName);
            Cookie::addCookie('password', $password);
            header("location: user-profile.php");
        }
        else {
            header("location: login.php");
        }
    }

    public static function logout() : void
    {
        Cookie::removeCookie("username");
        Cookie::removeCookie("password");
        header("location: login.php");
    }

    public static function verifyCookie() : void
    {
        if(Cookie::checkCookie('username') && Cookie::checkCookie('password'))
        {
            Auth::logout();
        }
    }

}