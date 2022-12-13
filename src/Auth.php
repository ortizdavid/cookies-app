<?php
require_once 'User.php';
session_start();
class Auth
{
    public static function login(string $userName, string $password) : void
    {
        if (User::exists($userName, $password)) {
            $_SESSION['username'] = $userName;
            $_SESSION['password'] = $password;
            header("location: user-profile.php");
        }
        else {
            header("location: login.php");
        }
    }

    public static function logout() : void
    {
        session_destroy();
        header("location: login.php");
    }

    public static function reconizeSession() : void
    {
        if(!isset($_SESSION['username'])){
            Auth::logout();
        }
    }

}