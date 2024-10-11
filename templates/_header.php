<?php

$navLinks =[
    [
        "pages"=> "/index.php",
        "head_title"=> "Acceuil : Zoo Arcadia",
        "title"=> "Acceuil",
        "meta-description"=>"Découvrez le Zoo Arcadia, un espace écologique dédié à la préservation des espèces et à l’éducation environnementale. Visitez des habitats naturels recréés et soutenez nos initiatives de conservation durable.",
        "icons"=>'<i class="bi bi-house-door"></i>'
    
    ],
    [
        "pages"=> "/pages/services.php",
        "head_title"=> "Services : Zoo Arcadia",
        "title"=> "Services",
        "meta-description"=>"Profitez des services du Zoo Arcadia : restauration éco-responsable, visites guidées gratuites des habitats et balades en petit train pour explorer notre zoo engagé dans la conservation.",
        "icons"=>'<i class="bi bi-activity"></i>'
    ],

    [
        "pages"=> "/pages/habitat.php",
        "head_title"=> "Habitats : Zoo Arcadia",
        "title"=> "Habitats",
        "meta-description"=>"Profitez des services du Zoo Arcadia : restauration éco-responsable, visites guidées gratuites des habitats et balades en petit train pour explorer notre zoo engagé dans la conservation.",
        "icons"=>'<i class="bi bi-app"></i>'
    ],

    [
        "pages"=> "/pages/contact.php",
        "head_title"=> "Contacts Zoo Arcadia",
        "title"=> "Contact",
        "meta-description"=>"Profitez des services du Zoo Arcadia : restauration éco-responsable, visites guidées gratuites des habitats et balades en petit train pour explorer notre zoo engagé dans la conservation.",
        "icons"=>'<i class="bi bi-send"></i>'
    ],
    [
        "pages"=> "/pages/connexion.php",
        "head_title"=> "Connexion : Zoo Arcadia",
        "title"=> "Connexion ",
        "meta-description"=>"Profitez des services du Zoo Arcadia : restauration éco-responsable, visites guidées gratuites des habitats et balades en petit train pour explorer notre zoo engagé dans la conservation.",
        "icons"=>'<i class="bi bi-person"></i>'
    ],


];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/scss/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <title>Zoo Arcadia</title>
</head>
<body>

<header class="wrapper-header">
    <img src="/asset/zoo arcadia(2)1.png" alt="" class="logo img-fluid w-nav">
    <div class="mycaroussel-z-index">
        <div class="bg-danger">
            <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <img src="https://www.twalo.fr/wp-content/uploads/2023/04/rhinoceros-safari-afrique.webp" class="myimg"  alt="...">
                    </div>
                    <div class="carousel-item ">
                        <img src="https://www.hotellecaballin.com/data/uploads/2023/04/xanimaux_sauvages_a_voir_en_alsace-1200x750.jpg.pagespeed.ic.66AixvBQMA.jpg" class="myimg " alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.shutterstock.com/image-photo/cute-australia-koala-wildlife-animal-600nw-2476997509.jpg" class="myimg" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.roadaffair.com/wp-content/uploads/2020/12/boy-feeding-giraffe-miami-zoo-florida-usa-shutterstock_519325696.jpg" class="myimg" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-z-index">
        <nav class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills fs-3">
                <?php
                foreach ($navLinks as $key => $navLink) {

                ?>
                <li class="nav-item "><a href= <?= $navLink["pages"] ?> class="nav-link text-white d-flex flex-column justify-content-center align-items-center ms-5"><?= $navLink["icons"] ?> <?= $navLink["title"] ?> </a></li>
                <?php  } ?>
           
            </ul>
        </nav>
    </div>
    <div class="filter-z-index"></div>
        </header> 
        <main> 