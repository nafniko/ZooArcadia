<?php 
  require_once  "/xampp/htdocs/ZooArcadia/templates/_header.php"; 
$emailregex = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";


if(isset($_POST["submit"]) && isset($_POST["email"]) && isset($_POST["message"])) {
    
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    if (preg_match($emailregex, $email,)) {

        htmlentities($message);
        htmlentities($email);
        
       ?> 
       <br>
       <br>
       <br>
       <br>
       
       <div class="d-flex justify-content-center">
    
    <div class="d-flex justify-content-center flex-column block-contain container m-4 rounded-4 align-items-center">
           
            <div class=" p-4 ps-md-0 ">
                <p class="text-white fs-3 "> votre message a bien été envoyer</p>
                <p class="text-white ">Veuillez entrée un email valide </p>
                <p class="text-white ">veuillez entrée un email et mettre un message</p>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <a href="/index.php" class="lien-buttons  text-center btn align-middle mb-4">retour a l'acceuil</a>
            </div>
    </div>
</div>
<br>
<br>
<br>
    <?php
    }
    else{

        ?> 
        <br>
        <br>
        <br>
        <br>
        
        <div class="d-flex justify-content-center">
     
     <div class="d-flex justify-content-center flex-column block-contain container m-4 rounded-4 align-items-center">
            
             <div class=" p-4 ps-md-0 ">
                 <p class="text-white fs-3">Veuillez entrée un email valide </p>
             </div>
             <div class="d-flex justify-content-center align-items-center">
                 <a href="/pages/contact.php" class="lien-buttons  text-center btn align-middle mb-4">retour</a>
             </div>
     </div>
 </div>
 <br>
 <br>
 <br>
     <?php

    }
}
else{

    ?> 
    <br>
    <br>
    <br>
    <br>
    
    <div class="d-flex justify-content-center">
 
 <div class="d-flex justify-content-center flex-column block-contain container m-4 rounded-4 align-items-center">
        
         <div class="p-4 ps-md-0 ">
           
             <p class="text-white fs-3 ">veuillez entrée un email et mettre un message</p>
         </div>
         <div class="d-flex justify-content-center align-items-center">
             <a href="/pages/contact.php" class="lien-buttons  text-center btn align-middle mb-4">retour </a>
         </div>
 </div>
</div>
<br>
<br>
<br>
 <?php
};

require_once "/xampp/htdocs/ZooArcadia/templates/_footer.php";