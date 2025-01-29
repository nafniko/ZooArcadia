<?php

require_once  '../../vendor/autoload.php';
require_once  '../../lib/config.php';
require_once  '../../lib/pdo.php';
require_once  '../../lib/session.php';
require_once  '../../lib/mongodb.php';
require_once  '../../lib/route.php';
require_once  '../../lib/content-index.php';
require_once  "../../lib/gestionboutons.php";
require_once  './../templates/header.php';


$contents= getContents($pdo);
$getService= getService($pdo);
if(isset($_POST["deleteArticle"])){
    $article=deleteArticle($pdo);
}

?>
<div class="container text-center">
  <div class="row">
    <div class="col">
    <h1 class="text-white text-center">Bienvenue sur le dasboard</h1>
    </div>
   
  </div>
  <div class="row">
    
    <?php
require_once  './../templates/tab_service.php';

?>
  
    <?php
require_once  './../templates/_tab_article.php';

?>
    
   
  </div>
</div>

            
            <?php
require_once  './../templates/creer_article.php';

?>

</div>


<?php
require_once  './../templates/creer_article.php';


require_once  './../templates/footer.php';


?>
