<?php

require_once 'TimeUnit.php';

class Cookie
{

    public static function addCookie(string $cookieName, $cookieValue, int $expirationInMinutes=15)
    {
        $expiration = time() + $expirationInMinutes * TimeUnit::MINUTES;
        setcookie($cookieName, $cookieValue, $expiration, '/');
    }

    public static function removeCookie(string $cookieName)
    {
        $expiration = time() - TimeUnit::MINUTES;
        setcookie($cookieName, "", $expiration, '/');
    }

    public static function checkCookie(string $cookieName) : bool
    {
        return !(isset($_COOKIE[$cookieName]));
    }
}
