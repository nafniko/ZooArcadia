<?php

$navLinks =[
    "index.php"=>[
       
        "path"=> "/index.php",
        "head_title"=> "Acceuil : Zoo Arcadia",
        "title"=> "Acceuil",
        "meta-description"=>"Découvrez le Zoo Arcadia, un espace écologique dédié à la préservation des espèces et à l’éducation environnementale. Visitez des habitats naturels recréés et soutenez nos initiatives de conservation durable.",
        "icons"=>'<i class="bi bi-house-door"></i>'
    
    ],
    "services.php"=>[
        "path"=> "/pages/services.php",
        "head_title"=> "Services : Zoo Arcadia",
        "title"=> "Services",
        "meta-description"=>"Profitez des services du Zoo Arcadia : restauration éco-responsable, visites guidées gratuites des habitats et balades en petit train pour explorer notre zoo engagé dans la conservation.",
        "icons"=>'<i class="bi bi-activity"></i>'
    ],

    "habitat.php"=>[
        "path"=> "/pages/habitat.php",
        "head_title"=> "Habitats : Zoo Arcadia",
        "title"=> "Habitats",
        "meta-description"=>"Profitez des services du Zoo Arcadia : restauration éco-responsable, visites guidées gratuites des habitats et balades en petit train pour explorer notre zoo engagé dans la conservation.",
        "icons"=>'<i class="bi bi-app"></i>'
    ],

    "contact.php"=>[
        "path"=> "/pages/contact.php",
        "head_title"=> "Contacts : Zoo Arcadia",
        "title"=> "Contact",
        "meta-description"=>"Profitez des services du Zoo Arcadia : restauration éco-responsable, visites guidées gratuites des habitats et balades en petit train pour explorer notre zoo engagé dans la conservation.",
        "icons"=>'<i class="bi bi-send"></i>'
    ],
 



];
require_once "/xampp/htdocs/ZooArcadia/lib/session.php";

    $currentpage=basename($_SERVER['SCRIPT_NAME']);

 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=@$navLinks[$currentpage]["meta-description"]?>" >
   
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/scss/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <title><?= $navLinks[$currentpage]["head_title"] ?></title>
</head>
<body>

<header class="wrapper-header">
    <img src="/asset/zoo arcadia(2)1.png" alt="" class="logo img-fluid w-nav">
    <div class="mycaroussel-z-index">
        <div class="bg-danger">
            <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPV1F-cGVPK80UloW3S8oEUKAzGe72rla3CPYYumcKadsWdiqvfzqz__X7_LZMH6C7lOI3RaBRhFf6ayGwl03FId3vyvaU-sG75RdIqg" class="myimg"  alt="...">
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
                <li class="nav-item ">
                    <a href="<?= $navLink['path'] ?>"class="nav-link d-flex flex-column justify-content-center align-items-center ms-5"><?= $navLink["icons"] ?> <?= $navLink["title"] ?> </a>
                </li>
                <?php  } ?>
                <?php if(isset($_SESSION['user'])){ ?>
                <li><a href="/admin/index.php"class="nav-link d-flex flex-column justify-content-center align-items-center ms-5"><i class="bi bi-person"></i>Dashboard</a></li>
                <li><a href="/pages/logout.php"class="nav-link d-flex flex-column justify-content-center align-items-center ms-5"><i class="bi bi-box-arrow-right"></i>Deconnexion</a></li>

                <?php } else { ?>
                <li><a href="/pages/connexion.php"class="nav-link d-flex flex-column justify-content-center align-items-center ms-5"><i class="bi bi-person"></i>connexion</a></li>
     
                <?php  } ?>
           
            </ul>
        </nav>
    </div>
    <div class="filter-z-index"></div>
        </header> 
   
        <main> 