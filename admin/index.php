<?php 

require_once __DIR__ . '/templates/header.php';

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

require_once __DIR__ . '/templates/_rapport.php';
require_once __DIR__ . '/templates/_repas.php';
require_once __DIR__ . '/templates/_animaux.php';
require_once __DIR__ . '/templates/footer.php';



?>

</div>
<?php 