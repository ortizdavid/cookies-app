<?php

class Connection
{
    private static $pdo;

    public static function connect() : PDO
    {
        try {
            $dsn = 'mysql:host=localhost;dbname=cookie_db;port=3306';
            self::$pdo = new PDO($dsn, 'root', '');
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return self::$pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public static function disconnect() : void
    {
        self::$pdo = NULL;
    }
}