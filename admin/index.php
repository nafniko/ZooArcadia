<?php 

require_once  '../vendor/autoload.php';
require_once  '../lib/config.php';
require_once  '../lib/pdo.php';
require_once  '../lib/session.php';
require_once  '../lib/mongodb.php';
require_once  '../lib/route.php';
require_once  '../lib/content-index.php';
require_once  "../lib/gestionboutons.php";
require_once './templates/header.php';

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

require_once  './templates/_rapport.php';
require_once  './templates/_repas.php';
require_once  './templates/_animaux.php';
require_once  './templates/footer.php';



?>

</div>
<?php 