<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config.php';




// $host = getenv('DB_HOST');
// $user = getenv('DB_USER');
// $password = getenv('DB_PASSWORD');
// $database = getenv('DB_NAME');

// $host = 'uf63wl4z2daq9dbb.chr7pe7iynqr.eu-west-1.rds.amazonaws.com'
// ;
// $user = 'h3wn8n8g66i1rour'
// ;
// $password = 'i9j7we0uegcy6a5g';
// $database = 'sto2g9dado760ufv';

// try {
    // $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $user, $password);
    // $pdo = getenv('DB');

// echo'ok';
    // $pdo = new PDO("mysql:dbname=sto2g9dado760ufv;host=uf63wl4z2daq9dbb.chr7pe7iynqr.eu-west-1.rds.amazonaws.com;charset=utf8mb4","h3wn8n8g66i1rour","i9j7we0uegcy6a5g");
   
// } catch(Exception $e) {
//     die('Erreur MySQL : ' . $e->getMessage());
// }

$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);
var_dump($url);
$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }