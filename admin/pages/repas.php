<?php
require_once "/xampp/htdocs/ZooArcadia/admin/templates/header.php";

$getRepas=getRepas($pdo);
$getAnimal=getAnimal($pdo);
?>
<div class="container text-center">
    <div class="row align-items-start">
        <h1 class="container text-white pt-4">Repas</h1>
    </div>
    <div class="container text-center">
        <div class="row align-items-start">
            <?php
require_once "/xampp/htdocs/ZooArcadia/admin/templates/_repas.php";
?>


            <div class=" text-center col-lg-6 col-md-12 col-sm-12">

                <h2 class=" text-white pt-4 ">Ajouter un repas</h2>
                <div class=" block-contain rounded-4 m-1 ">
                    <form action="" method="post" class=" text-white container">
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