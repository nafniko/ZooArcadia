<?php
<<<<<<< HEAD
require_once "/xampp/htdocs/ZooArcadia/vendor/autoload.php"; 
=======
require_once  "/xampp/htdocs/ZooArcadia/vendor/autoload.php"; 
>>>>>>> dev


header("X-Frame-Options: SAMEORIGIN"); 
header("Content-Security-Policy: frame-ancestors 'self';");
header("Content-Security-Policy: default-src 'self'; style-src 'self' https://fonts.googleapis.com; script-src 'self'; font-src 'self' https://fonts.gstatic.com; img-src 'self' https://fonts.gstatic.com data:");


header("Content-Type: text/html; charset=UTF-8"); 
header("X-Content-Type-Options: nosniff"); 

http_response_code(500);

header_remove("X-Powered-By");

define("_DOMAIN_", "localhost");
define("_DB_SERVER_", "localhost");
define("_DB_NAME_", "zooarcadia");
define("_DB_USER_", "root");
define("_DB_PASSWORD_", "");
define("_ASSETS_IMAGES", "/asset/");
define("_STMP_PASSWORD_", "rjUImBqN7QMgXT5P");


$dotenv = Dotenv\Dotenv::createImmutable('C:/xampp/htdocs/ZooArcadia');
$dotenv->load();

$dbHost = $_ENV['DB_HOST'];
$dbUser = $_ENV['DB_USER'];
$dbName = $_ENV['DB_NAME'];
$dbPassword = $_ENV['DB_PASSWORD'];
$mongoUri = $_ENV['MONGO_URI'];



