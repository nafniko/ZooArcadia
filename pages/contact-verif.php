<?php 
require_once "/xampp/htdocs/ZooArcadia/lib/config.php";

require_once  "/xampp/htdocs/ZooArcadia/templates/_header.php"; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$emailregex = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";


if(isset($_POST["submit"]) && isset($_POST["email"]) && isset($_POST["message"])&& isset($_POST["objet"])) {


    $email = htmlentities($_POST["email"]);

    $sendmessage = $email . htmlentities($_POST["message"]);

    $objet = htmlentities($_POST["objet"]);

    if (preg_match($emailregex, $email)) {

        try {

        $mail = new PHPMailer (true);
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "smtp-relay.sendinblue.com";
        $mail->Port = 587;
        $mail->Username = "7f7095001@smtp-brevo.com";
        $mail->Password = 'rjUImBqN7QMgXT5P' ;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->isHTML(true);
        $mail->Subject = $objet;
        $mail->Body = $sendmessage;
        $mail->setFrom("zooarcadianiko1960@gmail.com",'zoo'); 
        $mail->addAddress("zooarcadianiko1960@gmail.com",'zoo'); 
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';
        $mail->send();
        }catch (Exception $e) {
            echo "Mailer Error: ".$e->getMessage();
        }

  
       ?> 
       <br>
       <br>
       <br>
       <br>
       
       <div class="d-flex justify-content-center">
    
    <div class="d-flex justify-content-center flex-column block-contain container m-4 rounded-4 align-items-center">
           
            <div class=" p-4 ps-md-0 ">
                <p class="text-white fs-3 "> votre message a bien été envoyer</p>
             
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