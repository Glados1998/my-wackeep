<?php

function PDOConnection()
{
    $host = 'localhost:8889';
    $dbName = 'wackeep';
    $user = 'root';
    $pwd = 'root';

    $dsn = "mysql:host=$host;dbname=$dbName";

    try
    {
        $pdo = new PDO($dsn, $user, $pwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
}