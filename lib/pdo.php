<?php
 require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config.php';

// try {
//     $pdo = new PDO("mysql:dbname=". _DB_NAME_ .";host="._DOMAIN_.";charset=utf8mb4",_DB_USER_,_DB_PASSWORD_);
   
// } catch(Exception $e) {
//     die('Erreur MySQL : ' . $e->getMessage());
// }
// $uri = getenv('JAWSDB_URL');

// try {
//     $pdo = new PDO($uri);
   
// } catch(Exception $e) {
//     die('Erreur MySQL : ' . $e->getMessage());
// }

$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = getenv('_DOMAIN_');
$username = getenv('_DB_USER_');
$password = getenv('_DB_PASSWORD_');
$database = getenv('_DB_NAME_');

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Récupérer l'URL de la base de données depuis l'environnement (Heroku)
// $dbUrl = getenv('JAWSDB_URL');

// // Extraire les composants de l'URL
// $parsedUrl = parse_url($dbUrl);

// // Extraire chaque composant nécessaire
// $dbHost = $parsedUrl['host'];
// $dbPort = $parsedUrl['port'];
// $dbName = ltrim($parsedUrl['path'], '/'); // Enlever le "/" initial
// $dbUser = $parsedUrl['user'];
// $dbPassword = $parsedUrl['pass'];

// // Créer la connexion PDO avec ces informations
// $pdo = new PDO("mysql:dbname=$dbName;host=$dbHost;port=$dbPort;charset=utf8mb4", $dbUser, $dbPassword);
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

