<?php 
require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
require "/xampp/htdocs/ZooArcadia/lib/content-index.php";
require_once "/xampp/htdocs/ZooArcadia/templates/_header.php"; 

$paramUrl= $_GET['nom_habitat'];
$animauxSavane=getAnimauxSavane($pdo,);
$animauxMarais=getAnimauxMarais($pdo);
$animauxJungle=getAnimauxJungle($pdo);


function affiche($animauxJungle,$paramUrl){ ?>
    <div class="d-flex justify-content-center mb-4">
 
<div class="d-flex justify-content-center block-contain container rounded-4">
    <div class="row g-0 position-relative align-items-center text-center w-75">
<?php    
        foreach ($animauxJungle as $key=>$animalJungle) {
            ?>
<div class="col-md-6 mb-md-0 p-md-4 d-flex justify-content-center align-items-center flex-column ">
<div class=" card mycard mb-4 mt-4" style="width: 20rem;">
            <img src="<?= $animalJungle["chemin"]?>" class="imgcontents img-fluid " alt="...">
            <h3><?= $animalJungle["prénom"]?></h3>
         <div class="card-body">
            <p class="card-text">Race :<br> <?= $animalJungle["race"]?></p>
        </div>
        <div><p>l'avis du veterinaire :<br> <?= $animalJungle["commentaire"]?></p></div>
    </div>
</div> 
<?php ;};?>


<?php };



require_once "/xampp/htdocs/ZooArcadia/templates/_footer.php"; 