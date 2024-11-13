<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config.php';

// try {
//     $pdo = new PDO("mysql:dbname=". _DB_NAME_ .";host="._DOMAIN_.";charset=utf8mb4",_DB_USER_,_DB_PASSWORD_);
   
// } catch(Exception $e) {
//     die('Erreur MySQL : ' . $e->getMessage());
// }
$uri = getenv('JAWSDB_URL'); // Récupère l'URI de la variable d'environnement

if ($uri === false) {
    die('La variable d\'environnement JAWSDB_URL n\'est pas définie.');
}

try {
    // Tentative de connexion à la base de données avec l'URI
    $pdo = new PDO($uri);
    
    // Active le mode d'affichage des erreurs de PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    // Affiche l'erreur si la connexion échoue
    die('Erreur MySQL : ' . $e->getMessage());
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

