<?php
require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/Models/Models.php';
require_once __DIR__ . '/../src/Models/Animal.php';




use Controllers\AnimalControllers;
use Controllers\ContentControllers;

require_once __DIR__ . '/../src/Vues/_header.php';

$content = new ContentControllers();
$content->index();


require_once __DIR__ . '/../src/Vues/_footer.php';
