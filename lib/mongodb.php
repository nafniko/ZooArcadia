<?php  
require_once "/xampp/htdocs/ZooArcadia/vendor/autoload.php"; 

$connexion = new MongoDB\Client("mongodb://localhost:27017");

$bdd = $connexion->zooarcadia;

if(isset($_POST['poster'])){
    $avis= htmlentities($_POST["avis"]);
    $pseudo= htmlentities($_POST["pseudo"]);
    
    $collection = $bdd->avis;
        try {
            $avisdata = [
                'pseudo' => $pseudo,
                'avis' => $avis,
                
            ];
            $result = $collection->insertOne($avisdata);
            echo "avis inséré : " . $result->getInsertedId() . "<br>";
            header("Location: /index.php");
            exit();
        } catch (Exception $e) {
            echo "Erreur lors de l'insertion : " . $e->getMessage() . "<br>";
        }
    }
   
    $collection = $bdd->avis;
    
    $lesAvis = $collection->find();



