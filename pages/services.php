<?php 
    require_once  "/xampp/htdocs/ZooArcadia/templates/_header.php"; 
    require "/xampp/htdocs/ZooArcadia/lib/content-index.php";
   

    var_dump(["REQUEST_URI"]);

    foreach ($contentServices as $key=>$contentService) {
       
            require "/xampp/htdocs/ZooArcadia/templates/_services.php";
       
    };

    require_once "/xampp/htdocs/ZooArcadia/templates/_footer.php"; 