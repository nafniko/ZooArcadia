<div class="row ">
            <div class="col-4">
                <div class=" container block-contain rounded-4">
                    <form action="" method="post" class=" text-white">
                        <div class="mb-3 pt-3">
                            <label for="titreArticle" class="form-label">article</label>
                            <select class="form-select" name="titreArticle" id="titreArticle">
                                <option selected>choisir l'article a modifier</option>
                                <?php 
     foreach ($contents as $key=>$content) {  ?>
                                <option value="<?= htmlentities($content["idcontent"]) ?>"><?= htmlentities($content["titre"]) ?>
                                    <?php };?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nourriture" class="form-label">titre</label>
                            <input type="text" class="form-control" id="nourriture" name="nourriture"
                                placeholder="choisir un nouveau titre">
                        </div>
                        <div class="mb-3 pt-3">
                            <label for="descriptionsArticle" class="form-label">contenu</label>
                            <textarea class="form-control" id="descriptionsArticle" name="descriptionsArticle"
                                placeholder="Rediger l'article !" rows="3" required></textarea>
                            <div class="mb-3">
                                <label for="imageUpload" class="form-label">Default file input example</label>
                                <input class="form-control" type="file" id="imageUpload">
                            </div>
                            <div class="col-auto mt-4">
                                <button type="submit" name="createArticle" class="btn btn-primary mb-3">creer
                                    l'article</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>