<?php
require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
require_once "/xampp/htdocs/ZooArcadia/lib/mongodb.php";
require_once "/xampp/htdocs/ZooArcadia/lib/content-index.php";

$getAnimal = getAnimal($pdo);
$collection = $bdd->animaux;

foreach ($getAnimal as $animal) {
    try {
        $animalData = [
            'animal_id' => $animal['animal_id'],
            'prénom' => $animal['prénom'],
            'race' => $animal['race'],
            'image_path' => $animal['image_path'],
            'counter' => 0 
        ];

        $result = $collection->insertOne($animalData);
        echo "Animal inséré avec ID : " . $result->getInsertedId() . "<br>";
    } catch (Exception $e) {
        echo "Erreur lors de l'insertion : " . $e->getMessage() . "<br>";
    }
}