<?php

$avis= htmlentities($_POST["avis"]);
$pseudo= htmlentities($_POST["pseudo"]);

?>
<h2 class="container text-white mt-4 ">Les Avis</h2>
            
            <div class=" container d-flex flex-row mb-3  pb-2">
                <div class=" block-contain rounded-4 me-3 col-8 ">
                    <div class="bg-light mt-4 p-4 m-4 col-3 rounded-4"><?= $pseudo,$avis ?></div>
                </div>
                <div class=" block-contain rounded-4 col-4">
                    <div class=" container mt-4 rounded-4">
                        
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="pseudo" class="form-label">Pseudo</label>
                                <input type="text" class="form-control"  id="pseudo" name="pseudo" placeholder="Pierre">
                            </div>
                            <div class="mb-3 ">
                                <label for="avis" class="form-label">Laisser un avis</label>
                                <textarea class="form-control" id="avis" name="avis" placeholder="Laissez votre commentaire ici !" rows="3"></textarea>
                            </div>
                            <div class="col-auto ">
                                <button type="submit" name="submit" class="btn btn-primary mb-3">Poster</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
       