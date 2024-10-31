<?php
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

function getContentImages($pdo){

    $query=$pdo->prepare("SELECT chemin,id FROM `images` ") ;
    $query->execute() ; 
    $contentimages=$query->fetchAll(PDO::FETCH_ASSOC) ;
    return $contentimages;
};

function getAnimaux($pdo){

    $query=$pdo->prepare("SELECT * FROM `animaux` LEFT JOIN images on images.id= animaux.images;") ;
    $query->execute() ; 
    $animaux=$query->fetchAll(PDO::FETCH_ASSOC) ;
    return $animaux;
};
function getAnimauxCom($pdo){

    $query=$pdo->prepare("SELECT * FROM animaux ;") ;
    $query->execute() ; 
    $animauxcom=$query->fetchAll(PDO::FETCH_ASSOC) ;
    return $animauxcom;
};
function getAnimauxSavane($pdo){

    $query=$pdo->prepare("SELECT * FROM `animaux` 
LEFT JOIN rapport on rapport.detail_animal = animaux.id
LEFT JOIN images on images.id = animaux.images WHERE animaux.habitat= 1;") ;
    $query->execute() ; 
    $animauxSavane=$query->fetchAll(PDO::FETCH_ASSOC) ;
    return $animauxSavane;
};
function getAnimauxJungle($pdo){

    $query=$pdo->prepare("SELECT * FROM `animaux` 
LEFT JOIN rapport on rapport.detail_animal = animaux.id
LEFT JOIN images on images.id = animaux.images WHERE animaux.habitat= 2;") ;
    $query->execute() ; 
    $animauxJungle=$query->fetchAll(PDO::FETCH_ASSOC) ;
    return $animauxJungle;
};
function getAnimauxMarais($pdo){

    $query=$pdo->prepare("SELECT * FROM `animaux` 
LEFT JOIN rapport on rapport.detail_animal = animaux.id
LEFT JOIN images on images.id = animaux.images WHERE animaux.habitat= :3;") ;
    $query->execute() ; 
    $animauxMarais=$query->fetchAll(PDO::FETCH_ASSOC) ;
    return $animauxMarais;
};

function getArticleById(PDO $pdo, int $id)
{
    $sql = "SELECT * FROM contenu WHERE id = :id";

    $query = $pdo->prepare($sql);
    
    $query->bindValue(":id", $id, PDO::PARAM_INT);


    $query->execute();
    $article = $query->fetch(PDO::FETCH_ASSOC);

    return $article;
}

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
function createUser($pdo,) {
    $query = $pdo->prepare("SELECT * FROM habitat 
            LEFT JOIN animaux ON animaux.habitat = habitat.id 
            LEFT JOIN images ON images.id = animaux.images 
            LEFT JOIN rapport ON rapport.detail_animal = animaux.id
            WHERE habitat.id = :id");
   
    $query->execute();
    
    $animauxById=$query->fetchAll(PDO::FETCH_ASSOC);
    return $animauxById;
};

function getRapport($pdo) {
    $query = $pdo->prepare("SELECT * FROM rapport

    ;");
    $query->execute();
    $rapports=$query->fetchAll(PDO::FETCH_ASSOC);
    return $rapports;

};


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
    $query = $pdo->prepare("SELECT animaux.id AS animal_id,     animaux.prénom, 
    animaux.race,  habitat.titre AS habitat_titre, 
    avis_veto.commentaire AS commentaire_veto, avis_veto.date_creation AS date_avis, 
    images.chemin AS image_path FROM habitat LEFT JOIN animaux ON animaux.habitat = habitat.id LEFT JOIN images ON images.id = animaux.images LEFT JOIN avis_veto ON avis_veto.animal_id = animaux.id WHERE habitat.id = :id ;
        
    ");
    $query->bindValue(":id",  $id, PDO::PARAM_INT);
    $query->execute();
    
    $animauxById=$query->fetchAll(PDO::FETCH_ASSOC);
    return $animauxById;
};

function createAvis($pdo){

    $query = $pdo->prepare("INSERT INTO avis_veto ( animal_id, commentaire) VALUES (:idanimal, :commentaire )");
    $query->bindValue(":idanimal",  $_POST['idanimal'], PDO::PARAM_INT);
    $query->bindValue(":commentaire",  $_POST['commentaire'], PDO::PARAM_STR);
    $query->execute();
    $createAvis= $query;
    return $createAvis;
}


function getCommentaire($pdo) {
    $query = $pdo->prepare("SELECT * FROM avis_veto LEFT JOIN animaux on animaux.id=avis_veto.idanimal;

    ;");
    $query->execute();
    $commentaireveto=$query->fetchAll(PDO::FETCH_ASSOC);
    return $commentaireveto;

};
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
    $query = $pdo->prepare("UPDATE contenu SET titre = :titre, descriptions = :descriptions, chemin = :chemin WHERE id = :titreid");
    $query->bindValue(":titreid",  $_POST['titreid'], PDO::PARAM_INT);
    $query->bindValue(":titre",  $_POST['titre'], PDO::PARAM_INT);
    $query->bindValue(":descriptions",  $_POST['descriptionsArticle'], PDO::PARAM_STR);
    $query->bindValue(":chemin",  $_POST['chemin'], PDO::PARAM_STR);
    $query->execute();
    $updatesArticles= $query;
    return $updatesArticles;
};