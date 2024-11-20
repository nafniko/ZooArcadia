<?php 
require_once  '../lib/config.php';
require_once  '../lib/pdo.php';
require_once  '../lib/session.php';
require_once  '../lib/mongodb.php';
require_once  '../lib/route.php';
require_once  '../lib/content-index.php';
require_once  '../templates/_header.php';

 $contents= getContents($pdo);

?>
<h1 class="text-center text-white pt-4 mb-4">Les Restaurants</h1>
<?php 
foreach ($contents as $key=>$content) {
        if ($key===11 ||$key===12||$key===13) {
           
            require __DIR__ . '/../templates/_content.php';

        }
    } 
    ?>


<?php  
require_once __DIR__ . '/../templates/_footer.php';