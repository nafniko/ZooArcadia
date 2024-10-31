<?php

require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
require_once "/xampp/htdocs/ZooArcadia/lib/content-index.php";
require_once "/xampp/htdocs/ZooArcadia/lib/session.php";
require_once "/xampp/htdocs/ZooArcadia/admin/templates/header.php";

?>



    <div class="d-flex flex-column">

    <h1 class="text-white text-center pt-4 pb-4 ">Connexion</h1>
  

    <div class="container mt-5  block-contain rounded-4 pt-2">

    
    <form action="" method="post" class=" p-4 mb-4 ">
        
        <div class="row mb-4 ">
            <label for="email" class=" col-form-label text-white ">Email</label>
            <div class="col">
                <input type="email" name="email" class="form-control" id="email"required>
            </div>
        </div>
        <div class="row mb-4">
            <label for="Passwords" class=" col-form-label text-white">Password</label>
            <div class="col">
                <input type="password" name="Passwords" class="form-control" id="Passwords" required>
            </div>
        </div>
        <div class="mb-3 pt-3">
            <label for="prenom" class="form-label text-white">Rôle</label>
            <select class="form-select" name="prenom" id="prenom" aria-label="Default select example">
                <option selected>choisir un Rôle</option>
                <?php 
     foreach ($animaux as $key=>$animal) {  ?>
                <option value="<?= $animal["prénom"] ?>"><?= $animal["prénom"] ?>
                
                <?php }; ?>
            </select>
        </div>
        <button type="submit" value="connexion" name="connexion" class="btn btn-primary ">creer l'utilisateur</button>
    </form>
    </div>
</div>


  <?php
    require_once "/xampp/htdocs/ZooArcadia/admin/templates/footer.php";
?>