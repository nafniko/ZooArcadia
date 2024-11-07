<?php
$navLinks =[
    "index.php"=>[
       
        "path"=> "/index.php",
        "head_title"=> "Acceuil : Zoo Arcadia",
        "title"=> "Acceuil",
        "meta-description"=>"Découvrez le Zoo Arcadia, un espace écologique dédié à la préservation des espèces et à l’éducation environnementale. Visitez des habitats naturels recréés et soutenez nos initiatives de conservation durable.",
        "icons"=>'<i class="bi bi-house-door"></i>'
    
    ],
    "services.php"=>[
        "path"=> "/pages/services.php",
        "head_title"=> "Services : Zoo Arcadia",
        "title"=> "Services",
        "meta-description"=>"Profitez des services du Zoo Arcadia : restauration éco-responsable, visites guidées gratuites des habitats et balades en petit train pour explorer notre zoo engagé dans la conservation.",
        "icons"=>'<i class="bi bi-activity"></i>'
    ],

    "habitat.php"=>[
        "path"=> "/pages/habitat.php",
        "head_title"=> "Habitats : Zoo Arcadia",
        "title"=> "Habitats",
        "meta-description"=>"Profitez des services du Zoo Arcadia : restauration éco-responsable, visites guidées gratuites des habitats et balades en petit train pour explorer notre zoo engagé dans la conservation.",
        "icons"=>'<i class="bi bi-app"></i>'
    ],

    "contact.php"=>[
        "path"=> "/pages/contact.php",
        "head_title"=> "Contacts : Zoo Arcadia",
        "title"=> "Contact",
        "meta-description"=>"Profitez des services du Zoo Arcadia : restauration éco-responsable, visites guidées gratuites des habitats et balades en petit train pour explorer notre zoo engagé dans la conservation.",
        "icons"=>'<i class="bi bi-send"></i>'
    ],

];

function getContents($pdo){

    $query=$pdo->prepare("SELECT contenu.id AS idcontent,titre,descriptions,images.chemin,liens FROM `contenu` Left JOIN images on contenu.images =images.id;") ;
    $query->execute() ; 
    $contents=$query->fetchAll(PDO::FETCH_ASSOC) ;
    return $contents;
};
function getContentHabitat($pdo){

    $query=$pdo->prepare("SELECT * FROM habitat Left JOIN images on habitat.images =images.id;") ;
    $query->execute() ; 
    $contentHabitats=$query->fetchAll(PDO::FETCH_ASSOC) ;
    return $contentHabitats;
};
function getHabitat($pdo){

    $query=$pdo->prepare("SELECT * FROM habitat ") ;
    $query->execute() ; 
    $contentHabitats=$query->fetchAll(PDO::FETCH_ASSOC) ;
    return $contentHabitats;
};

function getContentImages($pdo){

    $query=$pdo->prepare("SELECT chemin,id FROM `images` ") ;
    $query->execute() ; 
    $getHabitat=$query->fetchAll(PDO::FETCH_ASSOC) ;
    return $getHabitat;
};

function getAnimaux($pdo){

    $query=$pdo->prepare("SELECT * FROM `animaux` LEFT JOIN images on images.id= animaux.images;") ;
    $query->execute() ; 
    $animaux=$query->fetchAll(PDO::FETCH_ASSOC) ;
    return $animaux;
};
function getAnimauxList($pdo){

    $query=$pdo->prepare("SELECT animaux.id,animaux.prénom,animaux.race,habitat.titre FROM animaux LEFT JOIN habitat ON habitat.id=animaux.habitat;
") ;
    $query->execute() ; 
    $getAnimauxList=$query->fetchAll(PDO::FETCH_ASSOC) ;
    return $getAnimauxList;
};
function getAnimauxCom($pdo){

    $query=$pdo->prepare("SELECT * FROM animaux ;") ;
    $query->execute() ; 
    $animauxcom=$query->fetchAll(PDO::FETCH_ASSOC) ;
    return $animauxcom;
};
function getContentById(PDO $pdo, int $id): array|bool {
    $query = $pdo->prepare("SELECT * FROM contenu
            LEFT JOIN images ON contenu.images = images.id 
            WHERE contenu.id = :id");
    $query->bindValue(":id",  $id, PDO::PARAM_INT);
    $query->execute();
    $contentById=$query->fetch(PDO::FETCH_ASSOC);
    return $contentById;
};

function verifyUsers($pdo,$email,$password):array|bool {

    $query=$pdo->prepare("SELECT * FROM users where email= :email");
    $query->bindValue(":email",$email,PDO::PARAM_STR);
    $query->execute();
    $user=$query->fetch(PDO ::FETCH_ASSOC);
   
    if ($user && password_verify($password, $user["Passwords"])) {
       echo "ca marche";
        return $user;
    } else {
        echo 'ca marche pas';
        return false ;
    }
};
function getRapport($pdo) {
    $query = $pdo->prepare("SELECT * FROM rapport

    ;");
    $query->execute();
    $rapports=$query->fetchAll(PDO::FETCH_ASSOC);
    return $rapports;

};
function getRepas($pdo) {
    $query = $pdo->prepare("SELECT repas.animal_id, animaux.prénom, animaux.race, repas.nourriture, repas.quantite, repas.date_repas FROM repas LEFT JOIN animaux ON repas.animal_id = animaux.id;

    ;");
    $query->execute();
    $getRepas=$query->fetchAll(PDO::FETCH_ASSOC);
    return $getRepas;

};
function createRepas($pdo){

    $query = $pdo->prepare("INSERT INTO repas ( animal_id, nourriture, quantite, date_repas) VALUES (:animal_id, :nourriture, :quantite, :date_repas)");
    $query->bindValue(":animal_id",  $_POST['prenom'], PDO::PARAM_INT);
    $query->bindValue(":nourriture",  $_POST['nourritureRepas'], PDO::PARAM_STR);
    $query->bindValue(":quantite",  $_POST['quantiteRepas'], PDO::PARAM_INT);
    $query->bindValue(":date_repas",  $_POST['dates'], PDO::PARAM_STR);
    $query->execute();
    $createRepas= $query;
    return $createRepas;
}


function createRapport($pdo){

    $query = $pdo->prepare("INSERT INTO rapport ( prenom, race, etat, nourriture, grammage, dates, commentaire) VALUES (:prenom, :race, :etat, :nourriture ,:grammage , :dates ,:commentaire )");
    $query->bindValue(":prenom",  $_POST['prenom'], PDO::PARAM_STR);
    $query->bindValue(":race",  $_POST['race'], PDO::PARAM_STR);
    $query->bindValue(":etat",  $_POST['etat'], PDO::PARAM_STR);
    $query->bindValue(":nourriture",  $_POST['nourriture'], PDO::PARAM_STR);
    $query->bindValue(":grammage",  $_POST['grammage'], PDO::PARAM_STR);
    $query->bindValue(":dates",  $_POST['dates'], PDO::PARAM_STR);
    $query->bindValue(":commentaire",  $_POST['commentaire'], PDO::PARAM_STR);
    $query->execute();
    $newRapports= $query;
    return $newRapports;
}

function securitiesXss( $input){
    return htmlentities($input);

};
function getAnimauxById($pdo,$id) {
    $query = $pdo->prepare("SELECT animaux.id AS animal_id,animaux.prénom, 
    animaux.race,  habitat.titre AS habitat_titre, 
    avis_veto.commentaire AS commentaire_veto, avis_veto.date_creation AS date_avis, 
    images.chemin AS image_path FROM habitat LEFT JOIN animaux ON animaux.habitat = habitat.id LEFT JOIN images ON images.id = animaux.images LEFT JOIN avis_veto ON avis_veto.animal_id = animaux.id AND avis_veto.date_creation = ( SELECT MAX(date_creation) FROM avis_veto AS av WHERE av.animal_id = animaux.id ) WHERE habitat.id = :id ;
        
    ");
    $query->bindValue(":id",  $id, PDO::PARAM_INT);
    $query->execute();
    
    $animauxById=$query->fetchAll(PDO::FETCH_ASSOC);
    return $animauxById;
};
function getAnimal($pdo) {
    $query = $pdo->prepare("SELECT animaux.id AS animal_id, animaux.prénom, animaux.race, habitat.titre AS habitat_titre, avis_veto.commentaire AS commentaire_veto, avis_veto.date_creation AS date_avis, images.chemin AS image_path FROM habitat LEFT JOIN animaux ON animaux.habitat = habitat.id LEFT JOIN images ON images.id = animaux.images LEFT JOIN avis_veto ON avis_veto.animal_id = animaux.id AND avis_veto.date_creation = ( SELECT MAX(date_creation) FROM avis_veto AS av WHERE av.animal_id = animaux.id );
    ");
    $query->execute();
    
    $getAnimal=$query->fetchAll(PDO::FETCH_ASSOC);
    return $getAnimal;
};

function createAvis($pdo){

    $query = $pdo->prepare("INSERT INTO avis_veto ( animal_id, commentaire) VALUES (:idanimal, :commentaire )");
    $query->bindValue(":idanimal",  $_POST['idanimal'], PDO::PARAM_INT);
    $query->bindValue(":commentaire",  $_POST['commentaire'], PDO::PARAM_STR);
    $query->execute();
    $createAvis= $query;
    return $createAvis;
}


function getRapportAsc($pdo) {
    $query = $pdo->prepare("SELECT * FROM `rapport` ORDER BY `rapport`.`date_creation` DESC

    ;");
    $query->execute();
    $rapports=$query->fetchAll(PDO::FETCH_ASSOC);
    return $rapports;

};
function getRapportDesc($pdo) {
    $query = $pdo->prepare("SELECT * FROM `rapport` ORDER BY `rapport`.`date_creation` ASC

    ;");
    $query->execute();
    $rapports=$query->fetchAll(PDO::FETCH_ASSOC);
    return $rapports;

};
function getRapportRace($pdo) {
    $query = $pdo->prepare("SELECT * FROM `rapport` ORDER BY `rapport`.`race` ASC
    ;");
    $query->execute();
    $rapports=$query->fetchAll(PDO::FETCH_ASSOC);
    return $rapports;

};
function updatesArticles($pdo) {
    $query = $pdo->prepare("UPDATE contenu SET titre = :titre, descriptions = :descriptions  WHERE id = :titreid");
    $query->bindValue(":titreid",  $_POST['titreid'], PDO::PARAM_INT);
    $query->bindValue(":titre",  $_POST['titre'], PDO::PARAM_STR);
    $query->bindValue(":descriptions",  $_POST['descriptionsArticle'], PDO::PARAM_STR);
    $query->execute();
    $updatesArticles= $query;
    return $updatesArticles;
};
function updatesImage($pdo) {
    if(isset($_FILES['imageUpload'])){
        $image= basename($_FILES['imageUpload']['name']);
        $path='C:/xampp/htdocs/ZooArcadia/asset/';
        $upload=$path.$image;
        $chemin='/asset/'.$image;
        move_uploaded_file (  $_FILES['imageUpload']['tmp_name'] ,  $upload );
      
        $query = $pdo->prepare("INSERT INTO images (chemin) VALUES (:chemin)");
        $query->bindValue(":chemin",$chemin, PDO::PARAM_STR);
        $query->execute();
        
        $imageId = $pdo->lastInsertId();
        $query = $pdo->prepare("UPDATE contenu SET images = :images  WHERE id = :titreid");
        $query->bindValue(":images",  $imageId, PDO::PARAM_INT);
        $query->bindValue(":titreid",  $_POST['titreid'], PDO::PARAM_INT);
        $query->execute();
        $updatesImage= $query;
        return $updatesImage;

    }
};
function getrole($pdo){
    $query = $pdo->prepare(" SELECT * from roles  ");
    $query->execute();
    $getrole= $query;
    return $getrole;
};


 function createUser($pdo) {
    $passwordhash=password_hash($_POST['Passwords'],PASSWORD_DEFAULT);
    $query = $pdo->prepare("INSERT into users (email, Passwords, roles) values (:email, :passwords, :roles)");
    $query->bindValue(":email",  $_POST['email'], PDO::PARAM_STR);
    $query->bindValue(":passwords",  $passwordhash, PDO::PARAM_STR);
    $query->bindValue(":roles",  $_POST['role'], PDO::PARAM_INT);
    $query->execute();
    $createUser= $query;
    return $createUser;
};
function CreateAnimaux($pdo) {
    $query = $pdo->prepare("INSERT INTO animaux ( prénom, race, habitat) VALUES (:prenom, :race, :habitat )");
    $query->bindValue(":prenom",  $_POST['prenomAnimal'], PDO::PARAM_STR);
    $query->bindValue(":race",  $_POST['raceAnimal'], PDO::PARAM_STR);
    $query->bindValue(":habitat",  $_POST['habitats'], PDO::PARAM_INT);
    $query->execute();
    $animalId  = $pdo->lastInsertId();
    
    $image= basename($_FILES['imageUpload']['name']);
    $path='C:/xampp/htdocs/ZooArcadia/asset/';
    $upload=$path.$image;
    $chemin='/asset/'.$image;
    move_uploaded_file (  $_FILES['imageUpload']['tmp_name'] ,  $upload );

    $query = $pdo->prepare("INSERT INTO images (chemin) VALUES (:chemin)");
    $query->bindValue(":chemin",$chemin, PDO::PARAM_STR);
    $query->execute();
    $imageId  = $pdo->lastInsertId();

    $query = $pdo->prepare("UPDATE animaux SET images = :images  WHERE id = :id");
    $query->bindValue(":images",  $imageId , PDO::PARAM_INT);
    $query->bindValue(":id", $animalId, PDO::PARAM_INT);
    $query->execute();

    $CreateAnimaux= $query;
    return $CreateAnimaux;

    }

function getUser($pdo){
    $query = $pdo->prepare(" SELECT users.email,users.Passwords,roles.nom FROM `users` LEFT join roles on roles.id=users.roles; ");
    $query->execute();
    $getUser=$query->fetchAll(PDO::FETCH_ASSOC);
     return $getUser;
}

function deleteAnimaux($pdo) {
    $query = $pdo->prepare("DELETE FROM animaux WHERE animaux.id = :id »");
    $query->bindValue(":prenom",  $_POST['prenomAnimal'], PDO::PARAM_STR);
    $query->bindValue(":race",  $_POST['raceAnimal'], PDO::PARAM_STR);
    $query->bindValue(":id",  $_POST['id'], PDO::PARAM_INT);
    $query->execute();
    $deleteAnimaux =$query;
    return $deleteAnimaux;
}