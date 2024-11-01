<?php 
require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
require_once "/xampp/htdocs/ZooArcadia/lib/content-index.php";
require_once "/xampp/htdocs/ZooArcadia/admin/templates/header.php";


$getAnimal= getAnimal($pdo );
?>
<div class="d-flex justify-content-center mb-4 ">

    <div class="d-flex justify-content-center block-contain container rounded-4 ">
        <div class="row g-0 position-relative align-items-center text-center w-75">
            <?php    
        foreach ($getAnimal as $key=>$getAnimals) {
            ?>
            <div class="col-md-6 mb-md-0 p-md-4 d-flex justify-content-center align-items-center flex-column ">

                <div class=" card mycard mb-4 mt-4" style="width: 20rem;">
                    <img src="<?=$getAnimals["image_path"]?>" class="imgcontents img-fluid " alt="...">
                    <h3><?= $getAnimals["prénom"]?></h3>
                    <div class="card-body">
                        <p class="card-text">Race :<br> <?=$getAnimals["race"]?></p>
                    </div>
                    <div>
                        <p>l'avis du veterinaire :<br> <?=$getAnimals["commentaire_veto"]?></p>
                    </div>
                </div>
            </div>
            <?php 
 }; 
?>
        </div>
    </div>
</div>