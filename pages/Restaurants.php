<?php 
require_once __DIR__ . '/../templates/_header.php';

 $contents= getContents($pdo);

?>
<h1 class="text-center text-white pt-4 mb-4">Les Restaurants</h1>
<?php 
foreach ($contents as $key=>$content) {
        if ($key===11 ||$key===12||$key===13) {
           
            require_once __DIR__ . '/../templates/_content.php';

        }
    } 
    ?>


<?php  
require_once __DIR__ . '/../templates/_footer.php';