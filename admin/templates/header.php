<?php 

require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
require_once "/xampp/htdocs/ZooArcadia/lib/content-index.php";
require_once "/xampp/htdocs/ZooArcadia/lib/session.php";

if(!isset($_SESSION['user']) ) {
  header("location: /pages/connexion.php");
};

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/scss/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>

<body>




<header class=" d-flex float-start ">

    <div class="d-flex flex-column flex-shrink-1 p-3 text-bg-dark" style="width: 280px;">
        <a href="/admin/index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <i class="bi pe-none me-2"></i>
            <span class="fs-4"><i class="bi bi-speedometer2"></i> Dashboard</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="/admin/templates/employee.php" class="nav-link active" aria-current="page"> creer un utilisateur
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <i class="bi pe-none me-2"></i>mails
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    
                    statistique
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                   compte rendu 
                    
                </a>
            </li>
             <li>
                <a href="/admin/templates/rapport.php";class="nav-link text-white">
                  rapport animaux
                    
                </a>
            </li>
            <li>
                <a href="/xampp/htdocs/ZooArcadia/admin/templates/rapport.php";class="nav-link text-white">
                 repas animaux
                    
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                    Customers
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>
</header>

    <main class="float ">
