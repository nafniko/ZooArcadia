<?php
   
   require_once "./lib/config.php";
   require_once "./lib/pdo.php";
   
//    require_once "./lib/content-index.php";

   require_once "./templates/_header.php";

$query=$pdo->prepare("SELECT* FROM contenu LEFT JOIN contenu_images ON contenu.id_contenu = contenu_images.contenu_id
 LEFT JOIN images ON contenu_images.image_id = images.id_images;") ;
$query->execute() ; 
$contents=$query->fetchAll(PDO::FETCH_ASSOC) ;

$query=$pdo->prepare("SELECT *FROM habitat LEFT JOIN habitat_images ON habitat.id_Habitat =habitat_images.idHabitat 
LEFT JOIN images ON habitat_images.idImages = images.id_images;") ;
$query->execute() ; 
$carousselHabits=$query->fetchAll(PDO::FETCH_ASSOC) ;

?>
 
 <h1 class="container text-white pt-4 ">Bienvenue Au Zoo Arcadia</h1>
 
 <?php    
        
        
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


