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

<body>
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
                        <a class="nav-link" href="/admin/templates/employee.php">
                            <i class="bi-table bi pe-none me-2"></i> Créer un utilisateur
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/templates/rapport.php">
                            <i class="bi-table bi pe-none me-2"></i> Rapport
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/templates/repas.php">
                            <i class="bi-table bi pe-none me-2"></i> Repas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/templates/articles.php">
                            <i class="bi-table bi pe-none me-2"></i> Articles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/templates/animauxcrud.php">
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
<?php 



 
