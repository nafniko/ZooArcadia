<?php
 require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config.php';




try {
    $pdo = new PDO("mysql:host=localhost;dbname=zooarcadia", 'root', 'ok');
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }