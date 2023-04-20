<?php
abstract class Model
{
    private static $db;

    private static function setDB()
    {

        try {
            self::$db = new PDO('mysql:host=localhost;dbname=burger_dev;charset=utf8', 'root');
        } catch (PDOException $e) {
            echo "Erreur :" . $e->getMessage();
        }
    }

    protected function getDB()
    {
        if (self::$db == null) {
            self::setDb();
        }
        return self::$db;
    }
}