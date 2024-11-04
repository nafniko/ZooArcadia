<?php 
require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
require_once "/xampp/htdocs/ZooArcadia/lib/content-index.php";
require_once "/xampp/htdocs/ZooArcadia/admin/templates/header.php";


$getAnimauxList= getAnimauxList($pdo );
$getHabitat= getHabitat($pdo );


if(isset($_POST['createAnimal'] )){

    $CreateAnimaux=CreateAnimaux($pdo);

    };
?>
     
    <div class="container text-center">
    <div class="row">
    <div class="col">
    <div class="col-md-12 mb-4">
            <div class="table-responsive block-contain rounded-4 p-4">
                <table class="table  ">
                    <thead>
                        <tr>
                            <?php foreach (array_keys($getAnimauxList[0]) as $getAnimauxLists) { ?>
                            <th scope="col"><?= $getAnimauxLists ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($getAnimauxList as $getAnimauxLists) { ?>
                        <tr>
                            <?php foreach ($getAnimauxLists as $value) { ?>
                            <td><?= htmlentities($value) ?></td>
                            <?php } ?>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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
                        <select class="form-select" name="habitats" id="habitats" >
                            <option selected>choisir un habitat</option>
                            <?php 
                    foreach ($getHabitat as $key=>$getHabitats) {  ?>
                            <option value="<?= $getHabitats["id"] ?>"><?= $getHabitats["id"] ?> |
                                <?= $getHabitats["titre"] ?>

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
                    </div>
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