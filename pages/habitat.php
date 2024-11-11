<?php 

require_once __DIR__ . '/../templates/_header.php';


    $contentHabitats=getContentHabitat($pdo);
?>
<h1 class="text-center text-white pt-4 mb-4"> Les habitats</h1>
<div class="pb-3 ">

    <div class=" block-contain container rounded-4 mb-3">
        <div class="d-flex justify-content-center  ">
            <?php foreach($contentHabitats as $key =>$contentHabitat){

            ?>
                <div class="col-lg-3 col-sm-12 col-md-9 mb-md-0 p-md-4">
                    <a href="<?= htmlentities($contentHabitat["liens"] )?>" class="d-flex flex-column container-fluid justify-center link-offset-2 link-underline link-underline-opacity-0 custom-img image-link">
                            <img src="<?= htmlentities($contentHabitat["chemin"]) ?>" class="habitat-img img-fluid" alt="image du zoo">
                            <h2 class="text-center text-white"><?= htmlentities($contentHabitat["titre"]) ?></h2>
                    </a>
                </div> 
            <?php } ?>

        </div>
</div>
</div>
<?php  require_once __DIR__ . '/../templates/_footer.php';
