<?php

    require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
    require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
    require "/xampp/htdocs/ZooArcadia/lib/content-index.php";
    require_once "/xampp/htdocs/ZooArcadia/lib/session.php";
require_once "/xampp/htdocs/ZooArcadia/admin/templates/header.php";
$animaux=getAnimaux($pdo);
$animauxcom=getAnimauxCom($pdo);









if(isset($_POST['submit'] )){
    
        $newRapports=createRapport($pdo);
        
    };
    if(isset($_POST['com'] )){

        $createAvis=createAvis($pdo);
         var_dump( $_POST);  
        };
    

    
    $rapports=getRapport($pdo);


    if(isset($_GET['recent'])){
        $rapports=getRapportASC($pdo);  
      };
      if(isset($_GET['ancien'])){
        $rapports=getRapportDesc($pdo);  
      };
      if(isset($_GET['race'])){
        $rapports=getRapportRace($pdo);  
      };
      
      
    ?>


<div class="container text-center">
    <div class="row align-items-start">
        <h1 class="container text-white pt-4 ">Rapport</h1>
    </div><div class="row align-items-start">
    <form method="GET" class="m-4 d-flex justify-content-end">
                        <button type="submit" name="recent" class="btn btn-primary m-1">plus recent </button>
                        <button type="submit" name="ancien" class="btn btn-primary m-1">plus ancient</button>
                        <button type="submit" name="race" class="btn btn-primary m-1">par race</button>

                    </form>
    </div>

    <div class="row  align-items-start">
        <div class="col block-contain rounded-4 p-4">

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">prenom</th>
                            <th scope="col">race</th>
                            <th scope="col">etat</th>
                            <th scope="col-">nourriture</th>
                            <th scope="col">grammage</th>
                            <th scope="col">dates </th>
                            <th scope="col">commentaire</th>
                            <th scope="col">date de creation</th>
                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php 
foreach ($rapports as $key=>$rapport) {
   
        ?>
                            <td><?=$rapport["prenom"]?></td>
                            <td><?=$rapport["race"]?></td>
                            <td><?=$rapport["etat"]?></td>
                            <td><?=$rapport["nourriture"]?></td>
                            <td><?=$rapport["grammage"]?></td>
                            <td><?=$rapport["dates"]?></td>
                            <td><?=$rapport["commentaire"]?></td>
                            <td><?=$rapport["date_creation"]?></td>
                            <td>modifier|supprimer</td>
                        </tr>
                        <?php 
 };
?>
                    </tbody>
                </table>
            </div>
        </div>
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
        <div class="col-lg-6 col-md-12 col-sm-12">
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
foreach ($rapports as $key=>$rapport) {
   
        ?>
                                <td><?=$rapport["prenom"]?></td>
                                <td><?=$rapport["race"]?></td>
                                <td><?=$rapport["nourriture"]?></td>
                                <td><?=$rapport["nourriture"]?></td>
                                <td><?=$rapport["dates"]?></td>
                               
                             
                            
                            </tr>
                            <?php 
 };
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<?php 
require_once "/xampp/htdocs/ZooArcadia/admin/templates/footer.php";
?>
