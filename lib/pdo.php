<?php


require_once "/xampp/htdocs/ZooArcadia/vendor/autoload.php"; 
require_once "/xampp/htdocs/ZooArcadia/lib/config.php";

try {
    $pdo = new PDO("mysql:dbname="._DB_NAME_.";host="._DB_SERVER_.";charset=utf8mb4",_DB_USER_,_DB_PASSWORD_);
   
} catch(Exception $e) {
    die('Erreur MySQL : ' . $e->getMessage());
}