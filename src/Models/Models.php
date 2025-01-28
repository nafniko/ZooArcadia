<?php

namespace Models;

use PDO;
use MongoDB\Client;

abstract class Models
{
    protected $pdo;
    protected $table;
    protected $mongodb;
    protected $bdd;


    private function setBdd()
    {
        // Connexion à MySQL
        $this->pdo = new PDO("mysql:host=localhost;dbname=zooarcadia", 'root', 'ok');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    private function setMongodb()
    {
   
        // Connexion à MongoDB
        $this->mongodb = new Client('mongodb://localhost:27017');
         $this->mongodb->zooarcadia;
    }
    
    
    protected function getBdd(){
        if($this->pdo == null){
            $this->setBdd();
        }
        return $this->pdo;
    }
    protected function getmongodb(){
        if($this->bdd == null){
            $this->setBdd();
        }
        return $this->bdd;
    }

    // Récupérer une ligne par ID
    protected function getOne($table,$obj,int $id)
    {
        $this->getBdd();
        $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return new $obj($data);
        

    }

    // Récupérer toutes les lignes
    public function getAll($table,$obj): array
    {
        $this->getBdd();
        $var = [];

        $stmt = $this->pdo->prepare("SELECT * FROM $table");
        $stmt->execute();
        while($data = $stmt->fetch(PDO::FETCH_ASSOC)){
            $var[] = new $obj($data);
        }
        $stmt->closeCursor();
        return $var;
    }
    public function getAllWhithImages($table,$obj)
    {

        $this->getBdd();
        $var = [];
        $stmt = $this->pdo->prepare("SELECT * FROM $table join images on $table.images = images.id;");
        $stmt->execute();
        while($data = $stmt->fetch(PDO::FETCH_ASSOC)){
            $var[] = new $obj($data);
            
        }
        $stmt->closeCursor();
        return $var;
    }

    // Insérer une nouvelle ligne
    public function create(array $data): int
    {
        // Générer dynamiquement les colonnes et les placeholders
        $columns = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));

        // Préparer la requête SQL
        $stmt = $this->pdo->prepare("INSERT INTO $this->table ($columns) VALUES ($placeholders)");

        // Exécuter la requête avec les données fournies
        $stmt->execute($data);

        // Retourner l'ID de la dernière insertion
        return $this->pdo->lastInsertId();
    }
}
