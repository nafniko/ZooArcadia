<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config.php';




$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$database = getenv('DB_NAME');

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $user, $password);
// try {
//     $pdo = new PDO("mysql:dbname=". _DB_NAME_ .";host="._DOMAIN_.";charset=utf8mb4",_DB_USER_,_DB_PASSWORD_);
   
// } catch(Exception $e) {
//     die('Erreur MySQL : ' . $e->getMessage());
// }
try {
    $pdo = new PDO("mysql:dbname=sto2g9dado760ufv;host=uf63wl4z2daq9dbb.chr7pe7iynqr.eu-west-1.rds.amazonaws.com;charset=utf8mb4","h3wn8n8g66i1rour","i9j7we0uegcy6a5g");
   
} catch(Exception $e) {
    die('Erreur MySQL : ' . $e->getMessage());
}



