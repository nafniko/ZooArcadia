<?php 





require_once "/xampp/htdocs/ZooArcadia/templates/_header.php"; 
require "/xampp/htdocs/ZooArcadia/lib/content-index.php"; 



$id = $_GET["id"];

$conten =$contents[$id];

$savanes= [[
    ""=> "",
]]

?>

<h1 class="text-center text-white pt-4 mb-4">Les Marais</h1>
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
    <div class="row g-0  position-relative align-items-center text-center w-75">
    <div class="col-md-6 mb-md-0 p-md-4 d-flex justify-content-center align-items-center flex-column p-3 ">
        <div class="card mycard" style="width: 20rem;">
            <img src="/asset/caiman.jpeg" class="card-img-top imgcontents" alt="...">
            <h3>Camille</h3>
            <div class="card-body">
                <p class="card-text">Race caïman noir<br> Habitat : Marais</p>
            </div>
            <div><p>l'avis du veterinaire : cette animal est genial </p></div>
        </div>
    </div>    
    <div class="col-md-6 mb-md-0 p-md-4 d-flex justify-content-center align-items-center flex-column ">

    <div class=" card mycard" style="width: 20rem;">
                <img src="/asset/buffle.jpeg" class=" imgcontents  " alt="...">
                <h3>Brutus</h3>
             <div class="card-body">
                <p class="card-text">Race : buffle<br> Habitat : Marais</p>
            </div>
            <div><p>l'avis du veterinaire : cette animal est genial </p></div>
        </div>
</div>
<div class="col-md-6 mb-md-0 p-md-4 d-flex justify-content-center align-items-center flex-column p-3 ">
        <div class="card mycard" style="width: 20rem;">
            <img src="/asset/ragondin.jpg" class="card-img-top imgcontents" alt="...">
            <h3>Rachelle</h3>
            <div class="card-body">
                <p class="card-text">Race : Ragondin <br> Habitat : Marais</p>
            </div>
            <div><p>l'avis du veterinaire : cette animal est genial </p></div>
        </div>
    </div>    
    <div class="col-md-6 mb-md-0 p-md-4 d-flex justify-content-center align-items-center flex-column ">

    <div class=" card mycard" style="width: 20rem;">
                <img src="/asset/flament.jpeg" class=" imgcontents  " alt="...">
                <h3>Flamy</h3>
             <div class="card-body">
                <p class="card-text">Race :Flament rose <br> Habitat : Marais</p>
            </div>
            <div><p>l'avis du veterinaire : cette animal est genial </p></div>
        </div>
        
    </div>  
    <div class="col-md-6 mb-md-0 p-md-4 d-flex justify-content-center align-items-center flex-column ">

<div class=" card mycard" style="width: 20rem;">
            <img src="/asset/salamandre.jpeg" class=" imgcontents  " alt="...">
            <h3>Samy</h3>
         <div class="card-body">
            <p class="card-text">Race :Salamandre <br> Habitat : Marais</p>
        </div>
        <div><p>l'avis du veterinaire : cette animal est genial </p></div>
    </div>
    
</div>
<div class="col-md-6 mb-md-0 p-md-4 d-flex justify-content-center align-items-center flex-column ">

<div class=" card mycard" style="width: 20rem;">
            <img src="/asset/rainette.jpeg" class=" imgcontents  " alt="...">
            <h3>Rene</h3>
         <div class="card-body">
            <p class="card-text">Race : Rainette <br> Habitat : Marais</p>
        </div>
        <div><p>l'avis du veterinaire : cette animal est genial </p></div>
    </div>
    
</div> 

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

