<?php

$contentHabitats = [

    [ 
        "title" =>"Les Habitats ",
   
        "content"=>"Visite Guidée des Habitats au Zoo Arcadia
                    Profitez d'une expérience unique avec notre visite guidée gratuite des habitats au Zoo Arcadia !

                    Explorez les différents écosystèmes du zoo avec nos guides passionnés qui vous plongeront au cœur de la biodiversité. Chaque visite vous offre l'occasion d'en apprendre davantage sur les animaux qui y résident et leur habitat naturel.

                    Au cours de cette expérience enrichissante, vous découvrirez les adaptations étonnantes des espèces, leurs comportements et les efforts de conservation déployés pour protéger ces animaux dans la nature. Que vous soyez un amoureux des animaux ou simplement curieux d'en savoir plus, cette visite guidée est l'occasion parfaite pour explorer et apprécier la beauté de la faune.

                    Rejoignez-nous pour une aventure éducative et inoubliable au Zoo Arcadia !",

        "image"=>"zoo-arcadia-accueil.png"
    ],

    [
        "title" =>"La savane",

        "content"=>"Explorez la Savane au Zoo Arcadia
                    La savane est un écosystème vaste et ouvert, rempli de vie sauvage fascinante. Lors de votre visite, vous aurez l'occasion de rencontrer des animaux emblématiques tels que les lions majestueux, les éléphants imposants et les élégantes girafes.

                    Les guides passionnés vous raconteront des anecdotes captivantes sur le comportement et l'écologie de ces espèces. Découvrez comment elles s'adaptent à leur environnement aride, se nourrissent et interagissent. Un véritable voyage au cœur de la savane vous attend, offrant un aperçu inoubliable de la faune sauvage !", 

        "image"=>"zoo-arcadia-accueil.png"
    ], 

    [ 
        "title" =>"La jungle",

        "content"=>"Immersion dans la Jungle
                    Entrez dans le monde luxuriant de la jungle au Zoo Arcadia, un habitat tropical riche en biodiversité. Ici, la végétation dense abrite une multitude d'espèces colorées et exotiques. Rencontrez des singes agiles se balançant dans les arbres, des oiseaux multicolores et des reptiles intrigants.

                    Nos visites guidées vous permettront d'explorer ce milieu fascinant tout en apprenant sur les adaptations uniques de chaque espèce. Découvrez également les défis de conservation auxquels font face ces animaux et comment nous travaillons pour protéger leur habitat naturel. Préparez-vous à une aventure sensorielle au cœur de la jungle !", 

        "image"=>"zoo-arcadia-accueil.png"
        
    ],

    [ 
        "title" =>"Le marais",

        "content"=>"À la Découverte du Marais
                    Le marais, avec son écosystème humide et riche, est un habitat unique à explorer au Zoo Arcadia. Cette zone abrite une variété d'animaux aquatiques et semi-aquatiques, tels que des grenouilles colorées, des crocodiles paisibles et de nombreux oiseaux aquatiques.

                    Lors de votre visite, nos guides vous expliqueront l'importance des zones humides pour la biodiversité et la santé de l'environnement. Vous apprendrez comment ces espèces se sont adaptées à leur habitat et pourquoi il est crucial de les protéger. Ne manquez pas cette occasion de découvrir la magie du marais et ses habitants fascinants !", 

        "image"=>"zoo-arcadia-accueil.png"
        
    ],


];

function getContents($pdo){

    $query=$pdo->prepare("SELECT * FROM `contenu` Left JOIN images on contenu.images =images.id;") ;
    $query->execute() ; 
    $contents=$query->fetchAll(PDO::FETCH_ASSOC) ;
    return $contents;
};
function getContentHabitat($pdo){

    $query=$pdo->prepare("SELECT * FROM `habitat` Left JOIN images on habitat.images =images.id;") ;
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

    $query=$pdo->prepare("SELECT * FROM `animaux` LEFT JOIN images on images.id_images= animaux.images_path;") ;
    $query->execute() ; 
    $animaux=$query->fetchAll(PDO::FETCH_ASSOC) ;
    return $animaux;
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
LEFT JOIN images on images.id = animaux.images WHERE animaux.habitat= 3;") ;
    $query->execute() ; 
    $animauxMarais=$query->fetchAll(PDO::FETCH_ASSOC) ;
    return $animauxMarais;
};


