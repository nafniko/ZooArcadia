<?php 
require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
require_once "/xampp/htdocs/ZooArcadia/lib/content-index.php";
require_once "/xampp/htdocs/ZooArcadia/admin/templates/header.php";

$contents= getContents($pdo);


?>



  

<?php 
require_once "/xampp/htdocs/ZooArcadia/admin/templates/footer.php";
?>
