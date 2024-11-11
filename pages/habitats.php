<?php
require_once "/xampp/htdocs/ZooArcadia/lib/stats.php";
require_once "/xampp/htdocs/ZooArcadia/templates/_header.php";

$_GET["id"];
$id = $_GET["id"]; 
$contentById=getContentById( $pdo,  $id);
$animauxById=getAnimauxById( $pdo,  $id);
$contentHabitats=getContentHabitat($pdo);
$contents= getContents($pdo);
$rapports=getRapport($pdo);


?>
<?php 
foreach ($contents as $key=>$content) {
    if (  $_GET["id"]==='1' && $key===8||$_GET["id"]==='2' && $key===9||$_GET["id"]==='3' && $key===10 ) {
        ?>
<h2 class="text-center text-white pt-4 mb-4"><?= htmlentities($content["titre"]) ?></h2>
<div class="d-flex justify-content-center">

    <div class="d-flex justify-content-center block-contain container rounded-4">
        <div class="row g-0  position-relative align-items-center">
            <div class="col-md-6 mb-md-0 p-md-4 ">
                <img src="<?= htmlentities($content["chemin"]) ?>" class="w-100 " alt="image du zoo">
            </div>
            <div class="col-md-6 p-4 ps-md-0">
                <p class="text-white "><?= htmlentities($content["descriptions"]) ?></p>
            </div>
        </div>
    </div>
</div>

<?php   };
} ;
 ?>


<h2 class="text-center text-white pt-4 mb-4"> Voici les Animaux du Park</h2>

<div class=" d-flex flex-wrap justify-content-center w-75 myhover container ">
    <?php foreach ($animauxById as $key => $animauxByIdx) { ?>
    <div class=" d-flex justify-content-center align-items-center flex-column">
        <div class="card mycard m-4 text-center rounded-4" onclick="toggleDetails(this, '<?= $getAnimals['animal_id'] ?>')">


            <img src="<?= htmlentities($animauxByIdx["image_path"])?>" class="imgcontents rounded-4  img-fluid" alt="...">
            <h3 class="mt-3"><?= htmlentities($animauxByIdx["prénom"])?></h3>


            <div class="details visually-hidden-focusable text-center ">

                <div class="card-body">
                    <p class="card-text ">Race :<br> <?=htmlentities($animauxByIdx["race"])?></p>
                </div>
                <div class="">
                    <p>L'avis du vétérinaire :<br> <?=htmlentities($animauxByIdx["commentaire_veto"])?></p>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<div class="d-flex justify-content-evenly mt-5">
    <?php    
        foreach ($contentHabitats as $key=>$contentHabitat) {
            ?>
    <a href="<?= $contentHabitat["liens"] ?>"
        class="lien-buttons text-center btn align-middle mb-4"><?= $contentHabitat["titre"] ?></a>
    <?php 
 };
 ?>
</div>




<?php 
require_once "/xampp/htdocs/ZooArcadia/templates/_footer.php"; 

?>