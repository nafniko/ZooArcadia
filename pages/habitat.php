<?php 
    require_once  "/xampp/htdocs/ZooArcadia/templates/_header.php"; 
    require "/xampp/htdocs/ZooArcadia/lib/content-index.php";
   

    foreach ($contentHabitats as $key=>$contentHabitat) {
       
            require "/xampp/htdocs/ZooArcadia/templates/_habitat.php";
       
    };

    require_once "/xampp/htdocs/ZooArcadia/templates/_footer.php"; 