<?php 

require_once "/xampp/htdocs/ZooArcadia/admin/templates/header.php";

$contents= getContents($pdo);
$animaux=getAnimaux($pdo);
$animauxcom=getAnimauxCom($pdo);
$getRepas=getRepas($pdo);
$rapports=getRapport($pdo);
$getAnimauxList= getAnimauxList($pdo );
?>
<div class=" container col-sm-12">
    <h1 class="text-white text-center m-4">Bienvenue dans le dashboard</h1>
<?php 

require_once "/xampp/htdocs/ZooArcadia/admin/templates/_rapport.php";
require_once "/xampp/htdocs/ZooArcadia/admin/templates/_repas.php";
require_once "/xampp/htdocs/ZooArcadia/admin/templates/_animaux.php"; 
require_once "/xampp/htdocs/ZooArcadia/admin/templates/footer.php";

?>

</div>
<?php 