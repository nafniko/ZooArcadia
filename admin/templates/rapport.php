<?php

    require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
    require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
    require "/xampp/htdocs/ZooArcadia/lib/content-index.php";
    require_once "/xampp/htdocs/ZooArcadia/lib/session.php";
require_once "/xampp/htdocs/ZooArcadia/admin/templates/header.php";
$animaux=getAnimaux($pdo);







if(isset($_POST['submit'] )){
    // $input=[
        //     $_post['etat'],
        //     $_post['nourriture'],
        //     $_post['grammage'],
        //     $_post['dates'],
        //     $_post['commentaire'],
        // securitiesXss( input: $input);
        $newRapports=createRapport($pdo);
        
    };

    // var_dump($newRapports);
    // };
    
    $rapports=getRapport($pdo);
    var_dump($rapport['id']);
    ?>


<h1 class="container text-white pt-4 ">Rapport</h1>

<div class="table-responsive-sm ">
<table class="table  block-contain container ">
    <thead>
      <tr>
     
      <th scope="col">prenom</th>
      <th scope="col">race</th>
        <th scope="col">etat</th>
        <th scope="col-">nourriture</th>
        <th scope="col">grammage</th>
        <th scope="col">dates </th>
        <th scope="col">commentaire</th>
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
        <td>modifier|supprimer</td>
      </tr>
   
      
 
      <?php 
 };
?>
    </tbody>
  </table>
  </div>

  <h2 class="container text-white pt-4 ">ajouter un rapport</h2>
            
            <div class=" container mb-3 pb-2 col-4 ">
             
                <div class=" block-contain rounded-4 ">
                    <div class=" container mt-4 rounded-4">
                        
                        <form action="" method="post" class=" text-white">
                            <div class="mb-3 pt-3">
                                <label for="prenom" class="form-label">animal</label>
                                <select class="form-select" name="prenom" aria-label="Default select example">
                                    <option selected>choisir un animal</option>
                                <?php 
                                 foreach ($animaux as $key=>$animal) {  ?>
                                <option value="<?= $animal["prénom"] ?>"><?= $animal["prénom"] ?></option>
                                <?php }; ?>
                            </select>
                            </div>
                            <div class="mb-3 pt-3">
                                <label for="race" class="form-label">Race</label>
                                <select class="form-select" name="race" aria-label="Default select example">
                                    <option selected>choisir la Race</option>
                                <?php 
                                 foreach ($animaux as $key=>$animal) {  ?>
                                <option value="<?= $animal["race"] ?>"><?= $animal["race"] ?></option>
                               
                                <?php }; ?>
                            </select>
                            </div>
                            <div class="mb-3">
                                <label for="etat" class="form-label">etat</label>
                                <input type="text" class="form-control"  id="etat" name="etat">
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
                                <label for="dates" class="form-label">date</label>
                                <input type="date" class="form-control" id="dates" name="dates">
                                <div class="mb-3">
                                <label for="time" class="form-label">heure</label>
                                <input type="time" class="form-control" id="time" name="time">
                            </div>
                            <div class="mb-3 pt-3">
                                <label for="commentaire" class="form-label">commentaire </label>
                                <textarea class="form-control" id="commentaire" name="commentaire" placeholder="commentaire !" rows="3" required></textarea>
                            </div>
                            <div class="col-auto ">
                                <button type="submit" name="submit" class="btn btn-primary mb-3">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

<?php 