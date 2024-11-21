<?php
   
   require_once 'lib/config.php';
require_once  './lib/pdo.php';
require_once  './lib/session.php';
require_once  './lib/mongodb.php';
require_once  './lib/route.php';
require_once  './lib/content-index.php';
require_once "./templates/_header.php";
    
 $contents= getContents($pdo);
 $contentimages=getContentImages($pdo);
 $getAnimal =getAnimal ($pdo);
 

?>

<h1 class=" text-center text-white mb-4 ">Bienvenue Au Zoo Arcadia</h1>

<?php
        
$filtre_accueil=(array_filter($contents, fn($content) => $content['categorie'] === 'accueil')) ;

foreach ($filtre_accueil as $key=>$content) {

    require __DIR__ . '/./templates/_content.php';
}
        
$filtre_caroussel=(array_filter($contents, fn($content) => $content['categorie'] === 'carrousel')) ;

foreach ($filtre_caroussel as $key=>$content) {
        
            
    require_once __DIR__ . '/./templates/_caroussel.php';
}
    
    require_once __DIR__ . '/./templates/_avis.php';

    require_once  '././templates/_footer.php';?>
