<?php

class DB {

private $pdo;

    public function __construct()
    {
        $host = 'localhost';
        $db = 'school_api';
        $user = 'root';
        $password = '500199';
        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ];
        $pdo = new PDO($dsn, $user, $password, $options);
        $this->pdo = $pdo;
    }
}
