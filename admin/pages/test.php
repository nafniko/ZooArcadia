<?php 

require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
require_once "/xampp/htdocs/ZooArcadia/lib/mongodb.php";
require_once "/xampp/htdocs/ZooArcadia/lib/session.php";
require_once "/xampp/htdocs/ZooArcadia/lib/content-index.php";
require_once "/xampp/htdocs/ZooArcadia/lib/gestionboutons.php";


// if(!isset($_SESSION['user']) ) {
//   header("location: /pages/connexion.php");
// };
//   switch($_SESSION['user']['roles']){
//       case 1 :
//         if($_SERVER['SCRIPT_NAME'] !== '/admin/index.php' && $_SERVER['SCRIPT_NAME'] !== '/admin/templates/rapport.php'){
//             header('location: /admin/index.php');
//             exit();
//         };
//         break;
//         case 2 :
//             if($_SERVER['SCRIPT_NAME'] === '/admin/templates/employee.php.php'&& $_SERVER['SCRIPT_NAME'] === '/admin/templates/rapport.php'){
//                 header('location:/admin/index.php');
//                 exit();
//             };
//             break;
//             case 3 :
//                 break;
//     }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/scss/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;900&display=swap" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/admin/index.php">
                <i class="bi bi-speedometer2 pe-none me-2"></i> Dashboard
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/index.php">
                            <i class="bi-speedometer2 bi pe-none me-2"></i> Site Web
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/pages/employee.php">
                            <i class="bi-table bi pe-none me-2"></i> Créer un utilisateur
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/pages/rapport.php">
                            <i class="bi-table bi pe-none me-2"></i> Rapport
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/pages/repas.php">
                            <i class="bi-table bi pe-none me-2"></i> Repas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/pages/articles.php">
                            <i class="bi-table bi pe-none me-2"></i> Articles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/pages/animauxcrud.php">
                            <i class="bi-table bi pe-none me-2"></i> Animaux
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pages/logout.php">
                            <i class="bi bi-box-arrow-right"></i> Déconnexion
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-grow-1 d-flex justify-content-center align-items-center px-4">
    <?php


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
                            <option value="<?= $getroles["id"] ?>"><?= $getroles["nom"] ?>

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
                            <th scope="col"><?= $getUsers ?></th>
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

    </main>

    <footer class="bg-dark text-center text-white mt-auto p-3">
        Dashboard
    </footer>

    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/animations.js"></script>

</body>

</html>
