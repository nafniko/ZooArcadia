<?php
?>
<h2 class="container text-white mt-4 ">Les Avis</h2>
            
            <div class=" container d-flex flex-row mb-3  pb-2">
                <div class=" block-contain rounded-4 me-3 d-flex flex-wrap fix overflow-auto col-lg-8 col-sm-4">
                <?php foreach($lesAvis as $Avis){

    ?>
                <div class="bg-light mt-4 p-2 m-4 overflow-auto col-lg-3 col-sm-6 h-50 rounded-4">
                <div class="mb-2">
                  <b>
                      <?= $Avis['pseudo'] ?> 
                  </b> 
                    </div>
                <div >
                <?=$Avis['avis'] ?>
                    </div>
                    </div>
                    <?php  } ?>
                </div>
                <div class=" block-contain rounded-4 col-lg-4 col-sm-8">
                    <div class=" container mt-4 rounded-4">
                        
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="pseudo" class="form-label">Pseudo</label>
                                <input type="text" class="form-control"  id="pseudo" name="pseudo" placeholder="Pierre">
                            </div>
                            <div class="mb-3 ">
                                <label for="avis" class="form-label">Laisser un avis</label>
                                <textarea class="form-control text-wrap" id="avis" name="avis" placeholder="Laissez votre commentaire ici !" rows="3" maxlength="100"></textarea>
                            </div>
                            <div class="col-auto ">
                                <button type="submit" name="poster" class="btn btn-primary mb-3">Poster</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
       