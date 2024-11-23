<div class="d-flex flex-wrap justify-content-center w-75 myhover container">
    <?php foreach ($getAnimal as $key => $getAnimals) { ?>
    <div class="d-flex justify-content-center align-items-center flex-column">
        <div data-animal-id="<?= $getAnimals['animal_id'] ?>" class="card mycard m-4 text-center rounded-4">
            <img src="<?= htmlentities( $getAnimals["image_path"]) ?>" class="imgcontents rounded-4 img-fluid"
                alt="Image de <?= htmlentities($getAnimals["prénom"]) ?>">
            <h3 class="mt-3"><?= htmlspecialchars(htmlentities( $getAnimals["prénom"])) ?></h3>
            <div class="details visually-hidden-focusable text-center">
                <div class="card-body">
                    <p class="card-text">Race :<br> <?= htmlentities($getAnimals["race"]) ?></p>
                </div>
                <div>
                    <p>L'avis du vétérinaire :<br> <?= htmlentities($getAnimals["commentaire_veto"]) ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
