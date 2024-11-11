<?php 

require_once __DIR__ . '/../templates/_header.php';



$contents= getContents($pdo);
?>
<h1 class="text-center text-white mb-4">Nos Services</h1>

<?php 
    foreach ($contents as $key=>$content) {
        if( $key===3 || $key===4 || $key===5){
          
            require_once __DIR__ . '/../templates/_content.php';
    };
};

require_once __DIR__ . '/../templates/_footer.php';