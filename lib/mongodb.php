<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Security\Csrf\CsrfTokenManager;
use Symfony\Component\Security\Csrf\CsrfToken;
use MongoDB\Client;
use MongoDB\BSON\ObjectId;


// $uri = 'mongodb+srv://zoo:Azerty11@cluster0.njatc.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0';
$uri =getenv('MONGODB_URI');

$connexion = new Client($uri);
$bdd = $connexion->zooarcadia;
$collection = $bdd->avis;

// Test de connexion
try {
    $connexion->selectDatabase('admin')->command(['ping' => 1]);
} catch (Exception $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

$csrfTokenManager = new CsrfTokenManager();
$csrfToken = $csrfTokenManager->getToken('avis_form')->getValue();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['poster'])) {
        $token = new CsrfToken('avis_form', $_POST['csrf_token']);
        
        if (!$csrfTokenManager->isTokenValid($token)) {
            die("Erreur : Jeton CSRF invalide. Veuillez réessayer.");
        }
        
        $avis = htmlentities($_POST["avis"]);
        $pseudo = htmlentities($_POST["pseudo"]);
        
        try {
            $avisData = [
                'pseudo' => $pseudo,
                'avis' => $avis,
                'validé' => false,
            ];
            $result = $collection->insertOne($avisData);
            echo "Avis inséré : " . $result->getInsertedId();
            header("Location: /index.php");
            exit();
        } catch (Exception $e) {
            echo "Erreur lors de l'insertion : " . $e->getMessage();
        }
    }
    
    if (isset($_POST['valider'])) {
        try {
            $idAvis = new ObjectId($_POST['valider']);
            $collection->updateOne(
                ['_id' => $idAvis],
                ['$set' => ['validé' => true]]
            );
            echo "Avis validé avec succès.";
            header("Location: /admin/pages/avis.php");
            exit();
        } catch (Exception $e) {
            echo "Erreur lors de la validation : " . $e->getMessage();
        }
    }
    
    if (isset($_POST['sup_avis'])) {
        try {
            $idAvis = new ObjectId($_POST['sup_avis']);
            $collection->deleteOne(['_id' => $idAvis]);
            echo "Avis supprimé avec succès.";
            header("Location: /admin/pages/avis.php");
            exit();
        } catch (Exception $e) {
            echo "Erreur lors de la suppression : " . $e->getMessage();
        }
    }
}

// Récupération des avis validés
try {
    $lesAvis = $collection->find(['validé' => true]);
} catch (Exception $e) {
    echo "Erreur lors de la récupération des avis : " . $e->getMessage();
}
?>

