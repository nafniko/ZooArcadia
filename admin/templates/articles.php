<?php 
require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
require_once "/xampp/htdocs/ZooArcadia/lib/content-index.php";
require_once "/xampp/htdocs/ZooArcadia/admin/templates/header.php";

$contents= getContents($pdo);


if(isset($_POST['updateArticle'])){
    $updatesArticles= updatesArticles($pdo);
 
  // $updatesArticles= updatesArticles($pdo);
//   var_dump($_POST);
  // var_dump($_FILES);

}

if(isset($_POST['updateimg'])){

$updatesImage= updatesImage($pdo);
}
 

?>



<div class="container text-center">
    <div class="row mb-4">
        <div class="col">
            <h1 class="text-white">Bienvenue sur le dasboard</h1>
        </div>

    </div>
    <div class="row">
        <div class="col mb-4">
            <div class=" table-responsive container block-contain rounded-4 ">
                <h2 class="text-white">Listes des articles</h2>



                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">titre</th>
                            <th scope="col-3">descriptions</th>
                            <th scope="col">image</th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php 
foreach ($contents as $key=>$content) {
   
        ?>
                            <th scope="row"><?= $content["idcontent"] ?></th>
                            <td><?= $content["titre"] ?></td>
                            <td><?= $content["descriptions"] ?></td>
                            <td><img class="w-50 h-25" src="<?= $content["chemin"]?>" </td>
                        </tr>

                        <?php }?>

                    </tbody>
                </table>
            </div>
        </div>
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
                                <option value="<?= $content["idcontent"] ?>"><?= $content["titre"] ?>

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
        <div class="col-4">
            <div class=" container block-contain rounded-4">

                <form method="post" class=" text-white">
                    <div class="mb-3 pt-3">
                        <label for="titreid" class="form-label">article</label>
                        <select class="form-select" name="titreid" id="titreid">
                            <option selected>choisir l'article a modifier</option>
                            <?php 
     foreach ($contents as $key=>$content) {  ?>
                            <option value="<?= $content["idcontent"] ?>"><?= $content["titre"] ?>

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

    <div class="col-4">
        <div class=" container block-contain rounded-4">

            <form method="post" enctype="multipart/form-data" class=" text-white">
                <div class="mb-3 pt-3">
                    <label for="titreid" class="form-label">article</label>
                    <select class="form-select" name="titreid" id="titreid">
                        <option selected>choisir l'article a modifier</option>
                        <?php 
     foreach ($contents as $key=>$content) {  ?>
                        <option value="<?= $content["idcontent"] ?>"><?= $content["titre"] ?>

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
            </form>
        </div>
    </div>
</div>
<?php 
require_once "/xampp/htdocs/ZooArcadia/admin/templates/footer.php";
?>
