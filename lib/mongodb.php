<?php
require_once "/xampp/htdocs/ZooArcadia/lib/mongodb.php";

$client = new MongoDB\Client("mongodb://localhost:27017");

$bdd=$client->zooarcadianosql; 




