<?php 
    require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
    require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
    require "/xampp/htdocs/ZooArcadia/lib/content-index.php";
    require_once  "/xampp/htdocs/ZooArcadia/templates/_header.php"; 
   
    
    $contentServices=getContentService($pdo);

    foreach ($contentServices as $key=>$contentService) {
       
            require "/xampp/htdocs/ZooArcadia/templates/_services.php";
       
    };
    require_once "/xampp/htdocs/ZooArcadia/templates/_footer.php"; 