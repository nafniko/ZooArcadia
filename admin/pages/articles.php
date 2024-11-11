<?php 

require_once "/xampp/htdocs/ZooArcadia/admin/templates/header.php";

$contents= getContents($pdo);
?>

<div class="container text-center">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-white">Bienvenue sur le dasboard</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class=" table-responsive container block-contain rounded-4 ">
                <h2 class="text-white">Listes des articles</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">titre</th>
                            <th scope="col">descriptions</th>
                            <th scope="col">image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php 
foreach ($contents as $key=>$content) { ?>
                            <th class="col-1 col-md-1" scope="row"><?= htmlentities($content["idcontent"] )?></th>
                            <td class="col-1 col-md-1"><?= htmlentities($content["titre"]) ?></td>
                            <td class="col-3 col-md-2">
                                <p class="d-inline-flex gap-1">
                                    <a class="btn btn-primary" data-bs-toggle="collapse"
                                        href="#collapseExample<?= htmlentities($content["idcontent"] )?>" role="button"
                                        value="<?= htmlentities($content["idcontent"] )?>" aria-expanded="false"
                                        aria-controls="collapseExample<?= htmlentities($content["idcontent"] )?>">
                                        descriptions
                                    </a>
                                </p>
                                <div class="collapse" id="collapseExample<?= htmlentities($content["idcontent"] )?>">
                                    <div>
                                        <?= htmlentities($content["descriptions"]) ?>
                                    </div>
                                </div>
                            </td>
                            <td class="col-3 col-md-2"><img class="w-25" src="<?= htmlentities($content["chemin"])?>"
                                    alt="image"></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row ">

        </div>
        <div class="col-sm-12 col-lg-6">
            <div class=" container block-contain rounded-4">
                <form method="post" class=" text-white">
                    <div class="mb-3 pt-3">
                        <label for="titreid" class="form-label">article</label>
                        <select class="form-select" name="titreid" id="titreid">
                            <option selected>choisir l'article a modifier</option>
                            <?php 
     foreach ($contents as $key=>$content) {  ?>
                            <option value="<?= htmlentities($content["idcontent"]) ?>">
                                <?= htmlentities($content["titre"] )?>
                                <?php };?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="titre" class="form-label">titre</label>
                        <input type="text" class="form-control" id="titre" name="titre"
                            placeholder="choisir un nouveau titre">
                    </div>
                    <div class="mb-3 pt-3">
                        <label for="descriptionsArticle" class="form-label">contenu</label>
                        <textarea class="form-control" id="descriptionsArticle" name="descriptionsArticle"
                            placeholder="Rediger l'article !" rows="3" required></textarea>
                        <div class="mb-3">
                            <label for="imageUpload" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="imageUpload" name="upload_image">
                        </div>

                        <div class="col-auto mt-4">
                            <button type="submit" name="updateArticle" class="btn btn-primary mb-3">modifier
                                l'article</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6">
        <div class=" container block-contain rounded-4">

            <form method="post" enctype="multipart/form-data" class=" text-white">
                <div class="mb-3 pt-3">
                    <label for="titreid" class="form-label">article</label>
                    <select class="form-select" name="titreid" id="titreid">
                        <option selected>choisir l'article a modifier</option>
                        <?php 
     foreach ($contents as $key=>$content) {  ?>
                        <option value="<?= htmlentities($content["idcontent"]) ?>">
                            <?= htmlentities($content["titre"]) ?>

                            <?php };?>
                    </select>
                </div>
                <div class="mb-3 pt-3">

                    <div class="mb-3">
                        <label for="imageUpload" class="form-label">image</label>
                        <input class="form-control" type="file" id="imageUpload" name="imageUpload">
                    </div>
                    <div class="col-auto mt-4">
                        <button type="submit" name="updateimg" class="btn btn-primary mb-3">modifier
                            l'image</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
require_once "/xampp/htdocs/ZooArcadia/admin/templates/footer.php";
?>