<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config.php';

try {
    $pdo = new PDO("mysql:dbname=$dbName;host=$dbHost;charset=utf8mb4",$dbUser,$dbPassword);
   
} catch(Exception $e) {
    die('Erreur MySQL : ' . $e->getMessage());
}