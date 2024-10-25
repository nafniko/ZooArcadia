<?php 
require_once "/xampp/htdocs/ZooArcadia/lib/config.php";
require_once "/xampp/htdocs/ZooArcadia/lib/pdo.php";
require_once "/xampp/htdocs/ZooArcadia/lib/content-index.php";
require_once "/xampp/htdocs/ZooArcadia/admin/templates/header.php";

$contents= getContents($pdo);


?>
<div class="container">
<h1 class="text-white">Bienvenue sur le dasboard</h1>
<a href="/index.php">acceuil</a>
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
        <td>Modifier|Supprimer</td>
        
      </tr>
   
      <?php }?>
      
    </tbody>
  </table>
</div>
  

<?php 
require_once "/xampp/htdocs/ZooArcadia/admin/templates/footer.php";
?>
