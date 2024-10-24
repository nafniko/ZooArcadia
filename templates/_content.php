<?php


?>

<h2 class="text-center text-white pt-4 mb-4"><?= $content["titre"] ?></h2>
<div class="d-flex justify-content-center">
    
    <div class="d-flex justify-content-center block-contain container rounded-4">
        <div class="row g-0  position-relative align-items-center">
            <div class="col-md-6 mb-md-0 p-md-4 ">
                <img src="<?= $content["chemin"] ?>" class="w-100 " alt="image du zoo">
            </div>
            <div class="col-md-6 p-4 ps-md-0">
                <p class="text-white "><?= $content["descriptions"] ?></p>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <a href="<?= $content["liens"] ?>" class="lien-buttons <?php if( $key===0){ echo "visually-hidden";}; ?> text-center btn align-middle mb-4">Voir</a>
            </div>
        </div>
    </div>
</div>

