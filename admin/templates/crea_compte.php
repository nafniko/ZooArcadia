<?php
require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
require_once "/xampp/htdocs/ZooArcadia/lib/content-index.php";
require_once "/xampp/htdocs/ZooArcadia/lib/session.php";
require_once "/xampp/htdocs/ZooArcadia/admin/templates/header.php";

?>

<div>

    <h1 class="text-white text-center pt-4 pb-4 ">Connexion</h1>
    <div class="container mt-5 col-4 block-contain rounded-4 pt-2">

    
    <form action="" method="post" class=" p-4 mb-4 ">
        
        <div class="row mb-4 ">
            <label for="email" class="col-sm-2 col-form-label text-white ">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="email"required>
            </div>
        </div>
        <div class="row mb-4">
            <label for="Passwords" class="col-sm-2 col-form-label text-white">Password</label>
            <div class="col-sm-10">
                <input type="password" name="Passwords" class="form-control" id="Passwords" required>
            </div>
        </div>
        <button type="submit" value="connxion" name="connexion" class="btn btn-primary ">connectez-vous</button>
    </form>
    </div>
</div>