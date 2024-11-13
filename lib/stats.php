<?php

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/pdo.php';
require_once __DIR__ . '/mongodb.php';
require_once __DIR__ . '/content-index.php';

$collection = $bdd->animaux;

$data = json_decode(file_get_contents("php://input"), true);
if (isset($data['animalId'])) {
    $animalId = $data['animalId'];

    try {
        $result = $collection->updateOne(
            ['animal_id' => intval($animalId)],
            ['$inc' => ['counter' => 1]]
        );

        if ($result->getModifiedCount() > 0) {
            echo json_encode(['message' => 'Compteur incrémenté avec succès.']);
        } else {
            echo json_encode(['message' => 'Aucun changement effectué.']);
        }
    } catch (Exception $e) {
        echo json_encode(['message' => 'Erreur : ' . $e->getMessage()]);
    }
}
