<?php    
require_once __DIR__ . '/../lib/stats.php';


require_once __DIR__ . '/../templates/_header.php';


$contents = getContents($pdo);
$contentimages = getContentImages($pdo);
$getAnimal = getAnimal($pdo);


foreach ($contents as $key => $content) {
    if ($key === 7) {
        require_once __DIR__ . '/../templates/_content.php';


    }
}


require_once __DIR__ . '/../templates/_animaux.php';
require_once __DIR__ . '/../templates/_footer.php';



