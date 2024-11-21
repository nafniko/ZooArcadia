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
<h1 class="text-center text-white mb-4">Nos Services</h1>

<?php
$filtre_service=array_filter($getService,fn($getService) => $getService['categorie'] === 'service');
    foreach ($filtre_service as $key=>$getServices) {
      
        {
          
            require __DIR__ . '/../templates/_service.php';
    }
}

require_once __DIR__ . '/../templates/_footer.php';
