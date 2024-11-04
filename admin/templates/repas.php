<?php

    require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
    require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
    require "/xampp/htdocs/ZooArcadia/lib/content-index.php";
    require_once "/xampp/htdocs/ZooArcadia/lib/session.php";
require_once "/xampp/htdocs/ZooArcadia/admin/templates/header.php";

$getRepas=getRepas($pdo);
$getAnimal=getAnimal($pdo);

if(isset($_POST['repas'] )){

    $createRepas=createRepas($pdo);
    
    };
?>
<div class="container text-center">
    <div class="row align-items-start">
        <h1 class="container text-white pt-4">Repas</h1>
    </div>
    <div class="container text-center">
        <div class="row align-items-start">
            <h2 class="container text-white pt-4 col-6">compte rendu des repas</h2>
            <h2 class="container text-white pt-4 col-6 ">Ajouter un repas</h2>

        </div>


        <div class="col">
            <div class="row align-items-start">
                <div class="col-6  block-contain rounded-4 p-4">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <?php 
                             
                                foreach (array_keys($getRepas[0]) as $getRepa) { ?>
                                    <th scope="col"><?=$getRepa ?></th>
                                    <?php } ?>


                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($getRepas as $getRepa) { ?>
                                <tr>
                                    <?php foreach ($getRepa as $value) { ?>
                                    <td><?= htmlentities($value) ?></td>
                                    <?php } ?>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=" block-contain rounded-4 col-5  ms-3  ">
                    <form action="" method="post" class=" text-white">
                        <div class="mb-3 pt-3">
                            <label for="prenom" class="form-label">animal</label>
                            <select class="form-select" name="prenom" id="prenom" aria-label="Default select example">
                                <option selected>choisir un animal</option>
                                <?php 
     foreach ($getAnimal as $key=>$getAnimals) {  ?>
                                <option value="<?= $getAnimals["animal_id"] ?>">
                                    <?= $getAnimals["animal_id"] ?><?= $getAnimals["prénom"] ?>
                                    <?php }; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nourritureRepas" class="form-label">nourriture</label>
                            <input type="text" class="form-control" id="nourritureRepas" name="nourritureRepas">
                        </div>
                        <div class="mb-3">
                            <label for="quantiteRepas" class="form-label">quantité</label>
                            <input type="text" class="form-control" id="quantiteRepas" name="quantiteRepas">
                        </div>
                        <div class="mb-3">
                            <label for="dates" class="form-label">date de passages</label>
                            <input type="date" class="form-control" id="dates" name="dates">
                            <div class="col-auto ">
                                <button type="submit" name="repas" class="btn btn-primary mb-3">Envoyer</button>
                            </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
    </div>


    <?php 
require_once "/xampp/htdocs/ZooArcadia/admin/templates/footer.php";
?>