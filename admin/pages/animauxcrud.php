<?php 

require_once "/xampp/htdocs/ZooArcadia/admin/templates/header.php";
$getAnimauxList= getAnimauxList($pdo );
$getHabitat= getHabitat($pdo );
?>
<div class="container text-center">
    <div class="row">

        <?php require_once "/xampp/htdocs/ZooArcadia/admin/templates/_animaux.php"; ?>

        <div class="col">
            <h2 class="container text-white pt-4 "> Ajouter un animal</h2>
            <div class=" container block-contain rounded-4">

                <form method="post" enctype="multipart/form-data" class=" text-white">
                    <div class="mb-3 pt-3">
                    </div>
                    <div class="mb-3 pt-3">

                        <div class="mb-3">
                            <label for="imageUpload" class="form-label">image</label>
                            <input class="form-control" type="file" id="imageUpload" name="imageUpload">
                        </div>

                    </div>
                    <div class="mb-3 pt-3">
                        <label for="habitats" class="form-label">habitat</label>
                        <select class="form-select" name="habitats" id="habitats">
                            <option selected>choisir un habitat</option>
                            <?php 
                    foreach ($getHabitat as $key=>$getHabitats) {  ?>
                            <option value="<?= $getHabitats["id"] ?>"><?= $getHabitats["id"] ?> |
                                <?= htmlentities($getHabitats["titre"] )?>

                                <?php }; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="prenomAnimal" class="form-label">prénom</label>
                        <input type="text" class="form-control" id="prenomAnimal" name="prenomAnimal">
                    </div>
                    <div class="mb-3">
                        <label for="raceAnimal" class="form-label">race</label>
                        <input type="text" class="form-control" id="raceAnimal" name="raceAnimal">
                    </div>
                    <div class="col-auto pb-3 ">
                        <button type="submit" name="createAnimal" class="btn btn-primary ">Ajouter</button>
                        <button type="submit" name="deleteAnimal" class="btn btn-danger ">supprimer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
require_once "/xampp/htdocs/ZooArcadia/admin/templates/footer.php";
?>