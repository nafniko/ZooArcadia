<?php 
    require_once  "/xampp/htdocs/ZooArcadia/templates/_header.php"; 
    require "/xampp/htdocs/ZooArcadia/lib/content-index.php";
   
?>
 
<h1 class="text-center text-white pt-4 mb-4"><?= $contentHabitats[0]["title"] ?></h1>
<div class="pb-3 ">
    
    <div class=" block-contain container rounded-4 mb-3">
        <div class="d-flex justify-content-center  ">
          
            <div class="col-md-3 mb-md-0 p-md-4">
                <a href="/templates/savane.php" class="d-flex flex-column justify-center link-offset-2 link-underline link-underline-opacity-0">
                        <img src="/asset/<?= $contentHabitats[0]["image"] ?>" class="img-fluid" alt="image du zoo">
                        <h2 class="text-center text-white">La Savane</h2>
                </a>
            </div> 
            <div class="col-md-3 mb-md-0 p-md-4 ">
                <a href="/templates/jungle.php" class="d-flex flex-column justify-center link-offset-2 link-underline link-underline-opacity-0">
                        <img src="/asset/<?= $contentHabitats[0]["image"] ?>" class="img-fluid" alt="image du zoo">
                        <h2 class="text-center text-white">La Jungle</h2>
                </a>
            </div>
            <div class="col-md-3 mb-md-0 p-md-4 ">
                <a href="/templates/marais.php" class="d-flex flex-column justify-center link-offset-2 link-underline link-underline-opacity-0">
                        <img src="/asset/<?= $contentHabitats[0]["image"] ?>" class="img-fluid" alt="image du zoo">
                        <h2 class="text-center text-white">Le Marais</h2>
                </a>
            </div>
           
        </div>
</div>
</div>



  <?php  require_once "/xampp/htdocs/ZooArcadia/templates/_footer.php"; 