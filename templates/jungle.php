<?php 
require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
require "/xampp/htdocs/ZooArcadia/lib/content-index.php";
require_once "/xampp/htdocs/ZooArcadia/templates/_header.php"; 
$animauxJungle=getAnimauxJungle($pdo);
?>

<h1 class="text-center text-white pt-4 mb-4"><?=$contentHabitats[1]["title"] ?></h1>
<div class="d-flex justify-content-center">
    
    <div class="d-flex justify-content-center block-contain container rounded-4">
        <div class="row g-0  position-relative align-items-center">
            <div class="col-md-6 mb-md-0 p-md-4 ">
                <img src="/asset/<?= $contentHabitats[2]["image"] ?>" class="w-100 " alt="image du zoo">
            </div>
            <div class="col-md-6 p-4 ps-md-0">
                <p class="text-white "><?= $contentHabitats[2]["content"] ?></p>
            </div>
            
        </div>
    </div>
</div>

<h2 class="text-center text-white pt-4 mb-4"> Voici les Animaux du Park</h2>
<div class="d-flex justify-content-center mb-4">
 
<div class="d-flex justify-content-center block-contain container rounded-4">
    <div class="row g-0 position-relative align-items-center text-center w-75">
<?php    
        foreach ($animauxJungle as $key=>$animalJungle) {
            ?>
<div class="col-md-6 mb-md-0 p-md-4 d-flex justify-content-center align-items-center flex-column ">
<div class=" card mycard mb-4 mt-4" style="width: 20rem;">
            <img src="<?= $animalJungle["chemin"]?>" class="imgcontents img-fluid " alt="...">
            <h3><?= $animalJungle["prénom"]?></h3>
         <div class="card-body">
            <p class="card-text">Race :<br> <?= $animalJungle["race"]?></p>
        </div>
        <div><p>l'avis du veterinaire :<br> <?= $animalJungle["commentaire"]?></p></div>
    </div>
</div> 
<?php 
 };
?>

        <div class="d-flex justify-content-evenly">

            <a href="/templates/savane.php" class="lien-buttons text-center btn align-middle mb-4">Savane</a>
            <a href="/templates/jungle.php" class="lien-buttons text-center btn align-middle mb-4">jungle</a>
            <a href="/templates/marais.php" class="lien-buttons text-center btn align-middle mb-4">marais</a>
        </div>
            
            
        </div>
    </div>
</div>

<?php 
require_once "/xampp/htdocs/ZooArcadia/templates/_footer.php"; 
?>

