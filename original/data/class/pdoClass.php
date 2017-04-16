<?php

class PdoClass{

    const DB_HOST     = "localhost";
    const DB_NAME     = "dtb_user";
    const DB_USER     = "root";
    const DB_PASSWORD = "password";

    public static function dbConnection(){
        $dsn = "mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME.";charset=utf8";
        $pdo = new pdo($dsn, self::DB_USER, self::DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }

    public static function insert($table, $params, $where){

    }

}