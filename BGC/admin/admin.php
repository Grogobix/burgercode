<?php

class Database
{
    private static $dbHost = "localhost";
    private static $dbName = "vincents_burgercode";
    private static $dbUser = "vincents_burgercode";
    private static $dbPassword = "G4qqkfxfr";

    private static $connection = null;

    public static function connect()
    {
        try
        {
            self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName,self::$dbUser,self::$dbPassword);
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
        return self::$connection;
    }
    public static function disconnect()
    {
        self::$connection = null;
    }
}

Database::connect();


?>