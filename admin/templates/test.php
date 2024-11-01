<?php 
    require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
    require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
    require "/xampp/htdocs/ZooArcadia/lib/content-index.php";
    require_once  "/xampp/htdocs/ZooArcadia/templates/_header.php"; 
 $getAnimal= getAnimal($pdo);

?>

    <div class="d-flex justify-content-center block-contain container rounded-4 " >
        <div class="row g-0 position-relative align-items-center text-center w-75 ">
            <?php foreach ($getAnimal as $key => $getAnimals) { ?>
                <div class="col-md-6 mb-md-0 p-md-4 d-flex justify-content-center myhover align-items-center flex-column">
                    <div class="card mycard myhover mb-4 mt-4" style="width: 20rem;" onclick="toggleDetails(this)">
                    <div class="">
                       
                    <img src="<?=$getAnimals["image_path"]?>" class="imgcontents rounded-4  img-fluid" alt="...">
                        <h3 class="mt-4"><?= $getAnimals["prénom"]?></h3>
                        </div>
                    
                        <div class="details visually-hidden-focusable ">

                        <div class="card-body  ">
                            <p class="card-text mycard">Race :<br> <?=$getAnimals["race"]?></p>
                        </div>
                        <div class="">
                            <p>L'avis du vétérinaire :<br> <?=$getAnimals["commentaire_veto"]?></p>
                        </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


<script>

</script>



  <?php  require_once "/xampp/htdocs/ZooArcadia/templates/_footer.php"; 