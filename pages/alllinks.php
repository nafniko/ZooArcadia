<?php 





require_once "/xampp/htdocs/ZooArcadia/templates/_header.php"; 
require "/xampp/htdocs/ZooArcadia/lib/content-index.php"; 


$error = false;

$article = getArticleById($pdo, $id);
    $_GET["id"];
    $id = $_GET["id"];
    
   

?>

<h2 class="text-center text-white pt-4 mb-4"><?= $conten["title"] ?></h2>
<div class="d-flex justify-content-center mb-4" >
    
    <div class="d-flex justify-content-center block-contain container rounded-4">
        <div class="row g-0  position-relative align-items-center">
            <div class="col-md-6 mb-md-0 p-md-4 ">
                <img src="/asset/<?= $conten["image"] ?>" class="w-100 " alt="image du zoo">
            </div>
            <div class="col-md-6 p-4 ps-md-0">
                <p class="text-white "><?= $conten["content"] ?></p>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <a href="/index.php" class="lien-buttons  text-center btn align-middle mb-4">Retour</a>
            </div>
        </div>
    </div>
</div>

<?php 
require_once "/xampp/htdocs/ZooArcadia/templates/_footer.php"; 

?>

