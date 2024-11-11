<?php 


require_once "/xampp/htdocs/ZooArcadia/templates/_header.php"; 


$contents= getContents($pdo);
?>
<h1 class="text-center text-white mb-4">Nos Services</h1>

<?php 
    foreach ($contents as $key=>$content) {
        if( $key===3 || $key===4 || $key===5){
            require "/xampp/htdocs/ZooArcadia/templates/_content.php";
       
    };
};

    require_once "/xampp/htdocs/ZooArcadia/templates/_footer.php"; 