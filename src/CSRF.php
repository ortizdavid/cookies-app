<?php
session_start();
class CSRF
{
    public static function generateToken() : string
    {
        return crypt(sha1(time()), '$6$');
    }

    public static function prevent() : void
    {
        $token = self::generateToken();
        $_SESSION['csrf_token'] = $token;
        echo "<input type='hidden' name='csrf_token' value='{$token}'>";
        
    }

    public static function check(string $token) : void
    {
        if ($_SESSION['csrf_token'] != $token)
        {
            die ("<h3 style='color: red'>Diferent Tokens! CSRF Failed!</h2>");
        }
    }

    public static function inspect(string $token) : void
    {
        echo "<p><b>Generated Token: </b>".$token."</p>";
        echo "<p><b>Session Token: </b>".$_SESSION['csrf_token']."</p>";
    }
}
