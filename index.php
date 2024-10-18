<?php
   
   require_once "./lib/config.php";
   require_once "./lib/pdo.php";
   
//    require_once "./lib/content-index.php";

   require_once "./templates/_header.php";

$query=$pdo->prepare("SELECT *,images.chemin FROM contenu LEFT JOIN images ON contenu.id_contenu = images.id_images") ;
$query->execute() ; 
$contents=$query->fetchAll(PDO::FETCH_ASSOC) ;

$query=$pdo->prepare("SELECT *,images.chemin FROM habitat LEFT JOIN images ON habitat.id_habitat = images.id_images") ;
$query->execute() ; 
$carousselHabits=$query->fetchAll(PDO::FETCH_ASSOC) ;

?>
 
 <h1 class="container text-white pt-4 ">Bienvenue Au Zoo Arcadia</h1>
 
 <?php    
        var_dump(  $carousselHabits );
    foreach ($contents as $key=>$content) {
        if ($key===0 || $key===1) {
            require "./templates/_content.php";
        }
    } 
    
    foreach ($carousselHabits as $key=>$carousselHabit) {
        if ($key===0) {
            require "./templates/_caroussel.php";
        } 
    
    }

    
    foreach ($contents as $key=>$content) {
        if ($key===2) {
            require "./templates/_content.php";
        }
    } 
    
    require_once "templates/_avis.php";
    
    
    require_once "templates/_footer.php";?>


