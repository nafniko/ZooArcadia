<?php


require_once "/xampp/htdocs/ZooArcadia/vendor/autoload.php"; 
require_once "/xampp/htdocs/ZooArcadia/lib/config.php";

try {
    $pdo = new PDO("mysql:dbname=$dbName;host=$dbHost;charset=utf8mb4",$dbUser,$dbPassword);
   
} catch(Exception $e) {
    die('Erreur MySQL : ' . $e->getMessage());
}