<?php
$error_code = isset($_GET['error']) ? $_GET['error'] : 'Inconnu';



$message = "Une erreur est survenue. Veuillez réessayer plus tard.";
if ($error_code == E_USER_ERROR || $error_code == E_ERROR) {
    $message = "Erreur critique ! Impossible de traiter votre demande.";
} elseif ($error_code == E_WARNING || $error_code == E_USER_WARNING) {
    $message = "Attention : Un problème a été détecté.";
} elseif ($error_code == E_NOTICE || $error_code == E_USER_NOTICE) {
    $message = "Remarque : Une légère erreur est survenue.";
}
if ($error_code == 'erreur' ) {
    $message = "Vous n'êtes pas autorisé à accéder à cette page. ";
}
if ($error_code == '404' ) {
    $message = "La page est introuvable. ";
}




require_once __DIR__ . '/../templates/_header.php';



?>
<div class="d-flex justify-content-center mb-4">
    <div class="d-flex justify-content-center block-contain container rounded-4">
        <div class="row g-0  position-relative align-items-center">
            <h1 class="text-center text-white pt-4 mb-5">Une erreur est survenue</h1>
            <div class="col-md-6 p-4 ps-md-0">
            <p class="text-white "><?php echo htmlspecialchars($error_code); ?></p>
            <p class="text-white "> <?php echo htmlspecialchars($message); ?></p>
            </div>
          
        </div>
    </div>
</div>
<?php
require_once __DIR__ . '/../templates/_footer.php';

?>