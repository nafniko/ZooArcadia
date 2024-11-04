<div class=" d-flex flex-wrap justify-content-center w-75 myhover container ">
            <?php foreach ($getAnimal as $key => $getAnimals) { ?>
                <div class=" d-flex justify-content-center align-items-center  flex-column">
                    <div class="card mycard m-4  text-center rounded-4"  onclick="toggleDetails(this)">
                   
                       
                    <img src="<?=$getAnimals["image_path"]?>" class="imgcontents rounded-4  img-fluid" alt="...">
                        <h3 class="mt-3"><?= $getAnimals["prénom"]?></h3>
                     
                    
                        <div class="details visually-hidden-focusable text-center ">

                        <div class="card-body ">
                            <p class="card-text ">Race :<br> <?=$getAnimals["race"]?></p>
                        </div>
                        <div class="">
                            <p>L'avis du vétérinaire :<br> <?=$getAnimals["commentaire_veto"]?></p>
                        </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
