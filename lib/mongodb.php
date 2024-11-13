<?php  
require_once __DIR__ . '/../vendor/autoload.php';


use Symfony\Component\Security\Csrf\CsrfTokenManager;
use Symfony\Component\Security\Csrf\CsrfToken;
use MongoDB\BSON\ObjectId;
use Exception;
use MongoDB\Client;
// Replace the placeholder with your Atlas connection string
$uri = 'mongodb+srv://zoo:Azerty11@cluster0.njatc.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0';
// Create a new client and connect to the server
$connexion = new MongoDB\Client($uri);
$bdd = $connexion->zooarcadia;
$collection = $bdd->avis;
$lesAvis = $collection->find(['validé' => true]);
$csrfTokenManager = new CsrfTokenManager();
$csrfToken = $csrfTokenManager->getToken('avis_form')->getValue();
try {
    // Send a ping to confirm a successful connection
    $connexion->selectDatabase('admin')->command(['ping' => 1]);
    echo "Pinged your deployment. You successfully connected to MongoDB!\n";
} catch (Exception $e) {
    printf($e->getMessage());
}

if (isset($_POST['poster'])) {
    $token = new CsrfToken('avis_form', $_POST['csrf_token']);
    if (!$csrfTokenManager->isTokenValid($token)) {
        echo "Erreur : Jeton CSRF invalide. Veuillez réessayer.";
        exit();
    }
if(isset($_POST['poster'])){
    $avis= htmlentities($_POST["avis"]);
    $pseudo= htmlentities($_POST["pseudo"]);
    
    $collection = $bdd->avis;
        try {
            $avisdata = [
                'pseudo' => $pseudo,
                'avis' => $avis,
                'validé' => false,
                
            ];
            $result = $collection->insertOne($avisdata);
            echo "avis inséré : " . $result->getInsertedId() . "<br>";
            header("Location: /index.php");
            exit();
        } catch (Exception $e) {
            echo "Erreur lors de l'insertion : " . $e->getMessage() . "<br>";
        }
    }
   
    
    $lesAvis = $collection->find(['validé' => true]);
    
    if (isset($_POST['valider'])) {
        try { 
            $idAvis = new MongoDB\BSON\ObjectId($_POST['valider']);
            $collection->updateOne(
    
        ['_id' => $idAvis ],
        ['$set' => ['validé' => true]]);
        echo "Avis validé avec succès.";
        header("Location: /admin/pages/avis.php");
    
        
    
    } catch (Exception $e) {
        echo "Erreur lors de la validation : " . $e->getMessage();
    }
    }
    
    if (isset($_POST['sup_avis'])) {
        try {  
             $idAvis = new ObjectId($_POST['sup_avis']);
            $collection->deleteOne(['_id' => $idAvis]);
        echo "Avis validé avec succès.";
        header("Location: /admin/pages/avis.php");
    
    } catch (Exception $e) {
        echo "Erreur lors de la validation : " . $e->getMessage();
    }
    }
   

}



