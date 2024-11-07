<?php

    require_once "/xampp/htdocs/ZooArcadia/admin/templates/header.php";
    $animaux=getAnimaux($pdo);
    $animauxcom=getAnimauxCom($pdo);
    $getRepas=getRepas($pdo);
    $rapports=getRapport($pdo);
    ?>
<div class="container-fluid text-center">
    <div class="row align-items-start">
        <h1 class="container text-white mt-5 mb-5 pt-4 ">Rapport</h1>
    </div>
    <div class="row align-items-start">
        <form method="GET" class="m-4 d-flex justify-content-end">
            <button type="submit" name="recent" class="btn btn-primary m-1">plus recent </button>
            <button type="submit" name="ancien" class="btn btn-primary m-1">plus ancient</button>
            <button type="submit" name="race" class="btn btn-primary m-1">par race</button>
        </form>
    </div>

    <?php

    require_once "/xampp/htdocs/ZooArcadia/admin/templates/_rapport.php";

    ?>

        <div class="row  align-items-start">
            <div class=" col-lg-3 col-sm-12 ">
                <h2 class="container text-white pt-4 ">Ajouter un rapport</h2>
                <div class=" container  block-contain rounded-4">

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
                        <div class="mb-3 pt-3">
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
                            <label for="etat" class="form-label">etat</label>
                            <input type="text" class="form-control" id="etat" name="etat">
                        </div>
                        <div class="mb-3">
                            <label for="nourriture" class="form-label">nourriture</label>
                            <input type="text" class="form-control" id="nourriture" name="nourriture">
                        </div>
                        <div class="mb-3">
                            <label for="grammage" class="form-label">grammage</label>
                            <input type="text" class="form-control" id="grammage" name="grammage">
                        </div>
                        <div class="mb-3">
                            <label for="dates" class="form-label">date de passages</label>
                            <input type="date" class="form-control" id="dates" name="dates">

                            <div class="mb-3 pt-3">
                                <label for="commentaire" class="form-label">commentaire sur l'habitat</label>
                                <textarea class="form-control" id="commentaire" name="commentaire"
                                    placeholder="commentaire !" rows="3" required></textarea>
                            </div>
                            <div class="col-auto ">
                                <button type="submit" name="submit" class="btn btn-primary mb-3">Envoyer</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12">
            <h2 class="container text-white pt-4 "> un commentaire</h2>
            <form action="" method="post" class=" text-white">
                <div class=" block-contain rounded-4 p-4">
                    <div class="mb-3 pt-3">
                        <label for="idanimal" class="form-label">animal</label>
                        <select class="form-select" name="idanimal" id="idanimal" aria-label="Default select example">
                            <option selected>choisir un animal</option>
                            <?php 
                    foreach ($animauxcom as $key=>$animauxcoms) {  ?>
                            <option value="<?= $animauxcoms["id"] ?>"><?= $animauxcoms["id"] ?> |
                                <?= $animauxcoms["prénom"] ?>
                                <?php }; ?>
                        </select>
                    </div>
                    <div class="mb-3 pt-3">
                        <label for="commentaire" class="form-label">avis sur l'animal </label>
                        <textarea class="form-control" id="commentaire" name="commentaire" placeholder="commentaire !"
                            rows="3" required></textarea>
                    </div>
                    <div class="col-auto ">
                        <button type="submit" name="com" class="btn btn-primary ">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-6 col-sm-12  mb-4">
            <h2 class="text-white pt-4">Compte rendu des repas</h2>
            <div class="table-responsive block-contain rounded-4 p-4">
                <table class="table  ">
                    <thead>
                        <tr>
                            <?php foreach (array_keys($getRepas[0]) as $getRepa) { ?>
                            <th scope="col"><?= $getRepa ?></th>
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
    </div>
</div>
<?php 
require_once "/xampp/htdocs/ZooArcadia/admin/templates/footer.php";
?>