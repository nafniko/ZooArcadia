<?php 
    require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
    require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
    require "/xampp/htdocs/ZooArcadia/lib/content-index.php";
    require_once  "/xampp/htdocs/ZooArcadia/templates/_header.php"; 
   
    
    $contents= getContents($pdo);


    foreach ($contents as $key=>$content) {
        if($key===1 || $key===3 || $key===4 || $key===5){
            require "/xampp/htdocs/ZooArcadia/templates/_services.php";
       
    };
};
    require_once "/xampp/htdocs/ZooArcadia/templates/_footer.php"; 