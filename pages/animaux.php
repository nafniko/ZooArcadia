<?php
require_once  '../lib/config.php';
require_once  '../lib/pdo.php';
require_once  '../lib/session.php';
require_once  '../lib/mongodb.php';
require_once  '../lib/route.php';
require_once  '../lib/content-index.php';
require_once  '../templates/_header.php';


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



