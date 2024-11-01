<?php

    require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
    require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
    require "/xampp/htdocs/ZooArcadia/lib/content-index.php";
    require_once "/xampp/htdocs/ZooArcadia/lib/session.php";
require_once "/xampp/htdocs/ZooArcadia/admin/templates/header.php";
$animaux=getAnimaux($pdo);
$animauxcom=getAnimauxCom($pdo);
$rapports=getRapport($pdo);

?>

<div class="container text-center">
    <div class="row">
        <div class="col">
            <div class="">
                <h2 class="container text-white pt-4 ">compte rendu des repas</h2>
                <div class=" container  block-contain rounded-4 p-4">
                    <div class="table-responsive ">
                        <table class="table  container ">
                            <thead>
                                <tr>
                                    <th scope="col">prenom</th>
                                    <th scope="col">race</th>
                                    <th scope="col-">nourriture</th>
                                    <th scope="col-">quantité</th>
                                    <th scope="col">dates </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php 
foreach ($rapports as $key=>$rapport) { ?>
                                    <td><?=$rapport["prenom"]?></td>
                                    <td><?=$rapport["race"]?></td>
                                    <td><?=$rapport["nourriture"]?></td>
                                    <td><?=$rapport["nourriture"]?></td>
                                    <td><?=$rapport["dates"]?></td>
                                </tr>
                                <?php 
 };?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <h2 class="container text-white pt-4 ">Ajouter un repas</h2>
            <div class=" block-contain rounded-4  ">
                <div class=" container rounded-4">
                    <form action="" method="post" class=" text-white">
                        <div class="mb-3 pt-3">
                            <label for="prenom" class="form-label">animal</label>
                            <select class="form-select" name="prenom" id="prenom" aria-label="Default select example">
                                <option selected>choisir un animal</option>
                                <?php 
     foreach ($animaux as $key=>$animal) {  ?>
                                <option value="<?= $animal["prénom"] ?>"><?= $animal["prénom"] ?>
                                    <?php }; ?>
                            </select>
                        </div>
                        <div class="mb-3 ">
                            <label for="race" class="form-label">race</label>
                            <select class="form-select" name="race" id="race" aria-label="Default select example">
                                <option selected>choisir une race</option>
                                <?php 
     foreach ($animaux as $key=>$animal) {  ?>
                                <option value="<?= $animal["race"] ?>"><?= $animal["race"] ?>
                                    <?php }; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nourriture" class="form-label">nourriture</label>
                            <input type="text" class="form-control" id="nourriture" name="nourriture">
                        </div>
                        <div class="mb-3">
                            <label for="quantite" class="form-label">quantité</label>
                            <input type="text" class="form-control" id="quantite" name="quantite">
                        </div>
                        <div class="mb-3">
                            <label for="dates" class="form-label">date de passages</label>
                            <input type="date" class="form-control" id="dates" name="dates">
                            <div class="col-auto ">
                                <button type="submit" name="submit" class="btn btn-primary mb-3">Envoyer</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            Column
        </div>
    </div>
</div>
<?php 
require_once "/xampp/htdocs/ZooArcadia/admin/templates/footer.php";
?>