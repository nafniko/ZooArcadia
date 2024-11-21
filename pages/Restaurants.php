<?php
require_once  '../lib/config.php';
require_once  '../lib/pdo.php';
require_once  '../lib/session.php';
require_once  '../lib/mongodb.php';
require_once  '../lib/route.php';
require_once  '../lib/content-index.php';
require_once  '../templates/_header.php';

 $getService= getService($pdo);

?>
<h1 class="text-center text-white pt-4 mb-4">Les Restaurants</h1>
<?php
$filtre_restau=array_filter($getService,fn($getService) => $getService['categorie'] === 'restau');

foreach ($filtre_restau as $key=>$getServices) {
           
require __DIR__ . '/../templates/_service.php';


}
?>


<?php
require_once __DIR__ . '/../templates/_footer.php';
