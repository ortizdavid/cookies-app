<?php
require_once 'Connection.php';
class User
{
    public static function getUserData(string $username, string $password) : object
    {
        try {
            $sql = "SELECT * FROM users WHERE username = :username AND password = :password;";
            $pdo = Connection::connect();
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->execute();
            $obj = $stmt->fetch(PDO::FETCH_OBJ);
            Connection::disconnect();
            return $obj;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function exists(string $username, string $password) : bool
    {
        try {
            $sql = "SELECT * FROM users WHERE username = :username AND password = :password;";
            $pdo = Connection::connect();
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->execute();
            $result = ($stmt->rowCount() > 0);
            Connection::disconnect();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}