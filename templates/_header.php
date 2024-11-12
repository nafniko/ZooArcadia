<?php




$currentpage=basename($_SERVER['SCRIPT_NAME']);


if(!array_key_exists($currentpage,$route)){
    
header('location: /erreur.php?error=404');
exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=htmlentities( $route[$currentpage]["meta-description"]) ?>">


    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/scss/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <title><?=  htmlentities( $route[$currentpage]["head_title"]) ?></title>
</head>
<body class="d-flex flex-column min-vh-100">
    <header class="wrapper-header">
    <img src="/asset/zoo arcadia(2)1.png" alt="" class="logo img-fluid w-nav">
    <div class="mycaroussel-z-index">
        <div class="bg-danger">
            <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <img src="/asset/header_girafle.jpg" class="myimg"  alt="caroussel girafle">
                    </div>
                    <div class="carousel-item ">
                        <img src="/asset/header_singes.jpg" class="myimg " alt="caroussel singe">
                    </div>
                    <div class="carousel-item">
                        <img src="/asset/header_zoo.jpg" class="myimg" alt="caroussel zoo">
                    </div>
                    <div class="carousel-item">
                        <img src="/asset/park.jpg" class="myimg" alt="caroussel zoo 2">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-z-index">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
            <div class="container-fluid d-flex justify-content-end">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="justify-content-center collapse navbar-collapse nav " id="navbarNav">
                    <ul class="navbar-nav fs-3">
                        <?php
                        foreach ($navLinks as $key => $navLink) { ?>
                            <li class="nav-item myhover">
                                <a href="<?= htmlentities( $navLink['path'] )?>" class="nav-link d-flex flex-column justify-content-center align-items-center ms-5"><?=  $navLink["icons"] ?> <?= htmlentities( $navLink["title"] )?> </a>
                            </li>
                        <?php } ?>

                        <?php if (isset($_SESSION['user'])) { ?>
                            <li class="nav-item myhover"><a href="/admin/index.php" class="nav-link d-flex flex-column justify-content-center align-items-center ms-5"><i class="bi bi-person"></i>Dashboard</a></li>
                            <li class="nav-item myhover"><a href="/pages/logout.php" class="nav-link d-flex flex-column justify-content-center myhover align-items-center ms-5"><i class="bi bi-box-arrow-right"></i>Deconnexion</a></li>
                        <?php } else { ?>
                            <li class="nav-item myhover"><a href="/pages/connexion.php" class="nav-link myhover d-flex flex-column justify-content-center align-items-center ms-5"><i class="bi bi-person"></i>Connexion</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="filter-z-index"></div>
</header>
        <main> 