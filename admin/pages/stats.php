<?php 
require_once "/xampp/htdocs/ZooArcadia/vendor/autoload.php"; 

require_once "/xampp/htdocs/ZooArcadia/admin/templates/header.php";
$connexion = new MongoDB\Client("mongodb://localhost:27017");

$bdd = $connexion->zooarcadia;
$collection = $bdd->animaux;
    
    $animaux = $collection->find();

?>

    
    <div class="row  align-items-start">
    <h1 class="col-12 text-white text-center m-3">Consulter les stats</h1>
        <div class="col-md-12 mb-4">
            <div class="table-responsive block-contain rounded-4 p-4">
                <table class="table  ">
                    <thead>
                        <tr>
                        <th scope="col">id mongo </th>
                        <th scope="col">id </th>
                        <th scope="col">prénom</th>
                        <th scope="col">race</th>
                        <th scope="col">photos</th>
                        <th scope="col">nombre de clic</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($animaux as $animal) { ?>
                        <tr>
                            <?php foreach ($animal as $value) { ?>
                            <td><?= htmlentities($value) ?></td>
                            <?php } ?>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
      

        
<?php 
require_once "/xampp/htdocs/ZooArcadia/admin/templates/footer.php";
?>