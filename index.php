<?php
    require_once "./lib/content.php";

    require_once "./templates/_header.php";
 ?>
 <br>
<h1 class="container text-white ">Bienvenue Au Zoo Arcadia</h1>
  
<?php    
    foreach ($contents as $key=>$content) {
        if ($key===0 || $key===1) {
            require "./templates/_content.php";
                }
    } 
?>
 
<?php    
        foreach ($carousselHabits as $key=>$carousselHabit) {

            require "./templates/_caroussel.php";

        }
    
       
?>
<?php    
    foreach ($contents as $key=>$content) {
        if ($key===2) {
    require "./templates/_content.php";
        }
    } 
?>      
            
            <?php require_once "templates/_avis.php";?>
        
      
            <?php require_once "templates/_footer.php";?>


