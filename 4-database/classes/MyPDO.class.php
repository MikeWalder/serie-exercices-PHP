<?php

class MyPDO
{
    private const HOST_NAME = "localhost:3308";
    private const DB_NAME = "db_panierfruit";
    private const USER_NAME = "root";
    private const PWD = "";

    private static $myInstance = null;

    public static function getPDO()
    {
        if (is_null(self::$myInstance)) {
            try {
                $connexion = 'mysql:host=' . self::HOST_NAME . ';dbname=' . self::DB_NAME;
                self::$myInstance = new PDO($connexion, self::USER_NAME, self::PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch (PDOException $e) {
                $message = "Erreur : " . $e->getMessage();
                die($message);
            }
            self::$myInstance->exec("SET CHARACTER SET UTF8");
        }
        return self::$myInstance;
    }
}
