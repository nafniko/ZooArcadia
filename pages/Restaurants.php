<?php 
    require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
    require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
    require "/xampp/htdocs/ZooArcadia/lib/content-index.php";
    require_once  "/xampp/htdocs/ZooArcadia/templates/_header.php"; 
 $contents= getContents($pdo);

?>
 
<h1 class="text-center text-white pt-4 mb-4">Les Restaurants</h1>
<?php 
foreach ($contents as $key=>$content) {
        if ($key===11 ||$key===12||$key===13) {
           
            require "/xampp/htdocs/ZooArcadia/templates/_content.php";
        }
    } 
    ?>


  <?php  require_once "/xampp/htdocs/ZooArcadia/templates/_footer.php"; 