<?php

require_once "/xampp/htdocs/ZooArcadia/vendor/autoload.php"; 

try{

    $pdo=new PDO("mysql:dbname="._DB_NAME_.";host="._DB_SERVER_.";charset=utf8mb4",_DB_USER_,_DB_PASSWORD_);

    // $client = new MongoDB\Client("mongodb://localhost:27017");

    // $bdd=$client->zooarcadianosql;
}
catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
} 
// catch (MongoDB\Driver\Exception\Exception $e) {
//     die('Erreur MongoDB : ' . $e->getMessage());
// }
