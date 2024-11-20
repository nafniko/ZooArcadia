<?php

require_once  '../../vendor/autoload.php';
require_once  '../../lib/config.php';
require_once  '../../lib/pdo.php';
require_once  '../../lib/session.php';
require_once  '../../lib/mongodb.php';
require_once  '../../lib/route.php';
require_once  '../../lib/content-index.php';
require_once  "../../lib/gestionboutons.php";
require_once  './../templates/header.php';

$getUser=getUser($pdo);
$getrole=getrole($pdo);
?>

<div class="container text-center">
    <div class="row">
        <div class="col-lg-12 col-sm-12 m-4">
            <h1 class="text-white text-center pt-4 pb-4 ">Connexion</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-sm-12">
        <div class="col ">
            <h2 class="text-white pt-4">Crée un utilisateur</h2>
        </div>
            <div class="container block-contain rounded-4 pt-2">
                <form action="" method="post" class=" p-4 mb-4 ">
                    <div class="row mb-4 ">
                        <label for="email" class=" col-form-label text-white ">Email</label>
                        <div class="col">
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="Passwords" class=" col-form-label text-white">Password</label>
                        <div class="col">
                            <input type="password" name="Passwords" class="form-control" id="Passwords" required>
                        </div>
                    </div>
                    <div class="mb-3 pt-3">
                        <label for="role" class="form-label text-white">Rôle</label>
                        <select class="form-select" name="role" id="role" aria-label="Default select example">
                            <option selected>choisir un Rôle</option>
                            <?php 
     foreach ($getrole as $key=>$getroles) {  ?>
                            <option value="<?= $getroles["id"] ?>"><?= htmlentities($getroles["nom"] )?>

                                <?php }; ?>
                        </select>
                    </div>
                    <button type="submit" value="connexion" name="createUser" class="btn btn-primary ">creer
                        l'utilisateur</button>
                </form>
            </div>
        </div>
        <div class="col-lg-9 col-sm-12">
        <div class="col-lg-9 col-sm-12">
            <h2 class="text-white text-center pt-4 ">Les comptes</h2>
        </div>
            <div class="table-responsive block-contain rounded-4 p-4">
                <table class="table  ">
                    <thead>
                        <tr>
                            <?php foreach (array_keys($getUser[0]) as $getUsers) { ?>
                            <th scope="col"><?= htmlentities($getUsers )?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($getUser as $getUsers) { ?>
                        <tr>
                            <?php foreach ($getUsers as $value) { ?>
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
require_once  './../templates/footer.php';


?>