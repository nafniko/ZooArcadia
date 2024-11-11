<?php


require_once "/xampp/htdocs/ZooArcadia/vendor/autoload.php"; 
require_once "/xampp/htdocs/ZooArcadia/lib/config.php";

try {
<<<<<<< HEAD
    $pdo = new PDO("mysql:dbname= $dbName;host=$dbHost;charset=utf8mb4",$dbUser,$dbPassword);
=======
    $pdo = new PDO("mysql:dbname=$dbName;host=$dbHost;charset=utf8mb4",$dbUser,$dbPassword);
>>>>>>> dev
   
} catch(Exception $e) {
    die('Erreur MySQL : ' . $e->getMessage());
}