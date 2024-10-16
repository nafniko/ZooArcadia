<?php 
    require_once  "/xampp/htdocs/ZooArcadia/templates/_header.php"; 
    require "/xampp/htdocs/ZooArcadia/lib/content-index.php";
   
?>
 
<h1 class="text-center text-white pt-4 mb-4">Les restaurants</h1>
<div class="pb-3 ">
    
    <div class=" block-contain container rounded-4 mb-3">
        <div class="d-flex justify-content-evenly  ">
          
            <div class="col-md-3 mb-md-0 p-md-4">
                        <img src="/asset/<?= $contentHabitats[0]["image"] ?>" class="img-fluid" alt="image du zoo">
                        <h2 class="text-center text-white">Resto savane</h2>
                        <p class="text-white ">
Entrées <br>

<br>Salade exotique de mangue et avocat - 8,50 €<br>
<br>Brochette de crevettes grillées au piment doux - 10,00 €<br>
<br>Plats<br>

<br>Filet de bœuf grillé aux épices de la savane - 18,50 €<br>
<br>Poulet mariné à l’ananas et noix de coco - 16,00 €<br>
<br>Desserts<br>

<br>Tarte banane-caramel - 7,00 €<br>
<br>Coupe de fruits tropicaux - 6,50 €</p>

            </div> 
            <div class="col-md-3 mb-md-0 p-md-4 ">
                        <img src="/asset/<?= $contentHabitats[0]["image"] ?>" class="img-fluid" alt="image du zoo">
                        <h2 class="text-center text-white">Jungle buger</h2>
                        <p class="text-white ">Burgers<br>

                                                <br>Jungle Classic (steak, cheddar, laitue, tomate) - 12,00 €<br>
                                                <br>Volcano Burger (steak épicé, sauce piquante, oignons grillés) - 13,50 €<br>
                                                <br>Veggie Delight (galette végétale, avocat, pousses d’épinard) - 11,00 €<br>
                                                <br>Accompagnements<br>

                                                <br>Frites de patates douces - 4,50 €<br>
                                                <br>Salade de quinoa et légumes grillés - 5,00 €<br>
                                                <br>Boissons<br>

                                                <br>Smoothie mangue-passion - 5,00 €<br>
                                                <br>Limonade maison - 4,00 €</p>

            </div>
            <div class="col-md-3 mb-md-0 p-md-4 ">
                        <img src="/asset/<?= $contentHabitats[0]["image"] ?>" class="img-fluid" alt="image du zoo">
                        <h2 class="text-center text-white">Le Marais écrémé</h2>
                        <p class="text-white ">
                                                Entrées<br>

                                                <br>Velouté de courge au lait de coco - 7,50 €<br>
                                                <br>Tartare de saumon et pommes Granny - 9,00 €<br>
                                                <br>Plats<br>

                                                <br>Bar rôti à la crème de fenouil - 19,50 €<br>
                                                <br>Risotto crémeux aux champignons des bois - 17,00 €<br>
                                                <br>Desserts<br>

                                                <br>Crème brûlée à la vanille Bourbon - 6,50 €<br>
                                                <br>Soufflé glacé au citron vert - 7,50 €</p>

            </div>
        </div>
</div>
</div>



  <?php  require_once "/xampp/htdocs/ZooArcadia/templates/_footer.php"; 