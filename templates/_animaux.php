<div class="d-flex flex-wrap justify-content-center w-75 myhover container">
    <?php foreach ($getAnimal as $key => $getAnimals) { ?>
        <div class="d-flex justify-content-center align-items-center flex-column">
            <div class="card mycard m-4 text-center rounded-4" onclick="toggleDetails(this, '<?= $getAnimals['animal_id'] ?>')">
                <img src="<?= $getAnimals["image_path"] ?>" class="imgcontents rounded-4 img-fluid" alt="Image de <?= htmlspecialchars($getAnimals["prénom"]) ?>">
                <h3 class="mt-3"><?= htmlspecialchars($getAnimals["prénom"]) ?></h3>
                <div class="details visually-hidden-focusable text-center">
                    <div class="card-body">
                        <p class="card-text">Race :<br> <?= htmlspecialchars($getAnimals["race"]) ?></p>
                    </div>
                    <div>
                        <p>L'avis du vétérinaire :<br> <?= htmlspecialchars($getAnimals["commentaire_veto"]) ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

