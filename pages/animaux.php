<?php    

require_once "/xampp/htdocs/ZooArcadia/lib/stats.php";
require_once "/xampp/htdocs/ZooArcadia/templates/_header.php"; 

$contents = getContents($pdo);
$contentimages = getContentImages($pdo);
$getAnimal = getAnimal($pdo);


foreach ($contents as $key => $content) {
    if ($key === 7) {
        require "/xampp/htdocs/ZooArcadia/templates/_content.php"; 
    }
}


require "/xampp/htdocs/ZooArcadia/templates/_animaux.php"; 


require_once "/xampp/htdocs/ZooArcadia/templates/_footer.php"; 
