-- CREATE DATABASE zooarcadia;

-- USE zooarcadia;

-- CREATE TABLE roles
-- (
--     id_role integer AUTO_INCREMENT PRIMARY KEY,
--     nom varchar(250) not null UNIQUE
-- );
-- CREATE TABLE users
-- (
--     id_user integer AUTO_INCREMENT PRIMARY KEY,
--     email varchar(250) not null UNIQUE,
--     user_Password varchar(250) not null,
--     role_id integer,
--     foreign key (role_id) references roles(id_role)

-- );
-- CREATE TABLE images
-- (
--     id_images integer AUTO_INCREMENT PRIMARY KEY,
--     chemin varchar(250) null,
--     infos varchar(250)
-- );

-- CREATE TABLE habitat
-- (
--     id_Habitat integer AUTO_INCREMENT PRIMARY KEY,
--     habitat_nom  varchar(250) not null,
--     descriptions text,
--     liens varchar(255)
-- );

-- CREATE TABLE service
-- (
--     id integer AUTO_INCREMENT PRIMARY KEY,
--     serviceNom varchar(250) not null,
--     descriptionService text not null,
--     liens varchar(255)
-- );

-- CREATE TABLE animaux
-- (
--     id_animal integer AUTO_INCREMENT PRIMARY KEY,
--     prénom varchar(250) not null,
--     race varchar(250) not null ,
--     nom_habitat  integer,
--     images_path  integer,
--     foreign key (nom_habitat) REFERENCES habitat(id_Habitat),
--     foreign key (images_path) REFERENCES images(id_images)
-- );

-- CREATE TABLE rapport
-- (
--     id_rapport integer AUTO_INCREMENT PRIMARY KEY,
--     etat varchar(250) null,
--     nourriture varchar(250),
--     grammage varchar(250),
--     dates date not null ,
--     detail_animal integer,
--     commentaire text,
--     id_veto integer,
--     foreign key (detail_animal) REFERENCES animaux(id_animal),
--     foreign key (id_veto) REFERENCES users(id_user)
-- );

-- CREATE TABLE animal_images 
-- (
--     id_animal  integer ,
--     id_images  integer ,
--     primary key (id_animal, id_images),
--     foreign key (id_images) references animaux(id_animal),
--     foreign key (id_animal) references animaux(images_path)
-- );

-- CREATE USER 'admin'@'localhost' IDENTIFIED BY 'OK';
-- GRANT SELECT, INSERT, UPDATE, DELETE ON zooarcadia.* TO 'admin'@'localhost';

-- CREATE TABLE contenu
-- (
--     id_contenu integer AUTO_INCREMENT PRIMARY KEY,
--     titre varchar(250) not null,
--     descriptions text,
--     liens varchar(250)
-- );
-- CREATE TABLE contenu_images
-- (
--     contenu_id integer ,
--     image_id integer ,
--     primary key (contenu_id, image_id),
--     foreign key (contenu_id) REFERENCES contenu(id_contenu),
--     foreign key (image_id) REFERENCES images(id_images)
-- );
-- CREATE TABLE habitat_images
-- (
--     idHabitat integer,
--     idImages integer,
--     primary key (idHabitat,idImages),
--     foreign key (idHabitat) REFERENCES habitat(id_Habitat),
--     foreign key (idImages) REFERENCES images(id_images)
-- );

-- INSERT INTO contenu (titre, descriptions, liens) VALUES
-- ('Le Zoo', 'Découvrez un monde fascinant où la nature prend vie ! Niché au cœur de Plouah, notre zoo est un véritable sanctuaire pour plus de 300 animaux représentant 150 espèces venant des quatre coins du globe. Du majestueux lion d''Afrique à l''élégant panda géant, chaque visite vous transporte dans un voyage unique à travers les différents écosystèmes de notre planète.', NULL),
-- ('Les services', 'Au Zoo Arcadia, nous mettons à votre disposition plusieurs services pour rendre votre visite inoubliable, tout en respectant notre engagement écologique. Restauration éco-responsable : Faites une pause gourmande dans notre espace de restauration, où nous privilégions des produits locaux et biologiques. Profitez de plats savoureux tout en contribuant à la réduction de notre empreinte environnementale. Visites guidées des habitats : Explorez les différents habitats du zoo avec un guide expert, gratuitement. Découvrez les espèces animales dans leur environnement recréé, et apprenez-en plus sur leurs comportements et les efforts de conservation. Balade en petit train : Montez à bord de notre petit train écologique pour une visite relaxante à travers le zoo. Une manière amusante et tranquille de découvrir tous nos animaux sans trop marcher !', '/pages/services.php'),
-- ("Les animaux","À la rencontre des animaux du Zoo Arcadia
--                     Le Zoo Arcadia vous invite à découvrir la richesse de la faune à travers trois écosystèmes fascinants : la savane, le marais et la jungle.

--                     Les animaux de la savane
--                     Traversez les vastes étendues de la savane et rencontrez ses majestueux habitants. Du lion, roi des animaux, aux éléphants imposants en passant par les élégantes girafes, chaque espèce vous fascine par son adaptation à cet environnement aride.

--                     Les habitants des marais
--                     Dans les marais, un monde discret mais captivant vous attend. Observez les crocodiles se prélassant au soleil, les oiseaux aquatiques glissant sur l'eau, et découvrez la faune surprenante des zones humides, où la biodiversité est riche et variée.

--                     Les créatures de la jungle
--                     Pénétrez dans l’épaisse végétation tropicale de la jungle pour y découvrir des espèces colorées et exotiques. Singes agiles, serpents mystérieux et oiseaux multicolores font de cet environnement une aventure inoubliable, où chaque pas révèle une nouvelle espèce fascinante.","#");


-- INSERT INTO service ( serviceNom, descriptionService,liens) VALUES
-- ('Visite guidé des habitats','Visite Guidée des Habitats au Zoo Arcadia
-- Profitez d''une expérience unique avec notre visite guidée gratuite des habitats au Zoo Arcadia !
-- Explorez les différents écosystèmes du zoo avec nos guides passionnés qui vous plongeront au cœur de la biodiversité. Chaque visite vous offre l''occasion d''en apprendre davantage sur les animaux qui y résident et leur habitat naturel.Au cours de cette expérience enrichissante, vous découvrirez les adaptations étonnantes des espèces, leurs comportements et les efforts de conservation déployés pour protéger ces animaux dans la nature. Que vous soyez un amoureux des animaux ou simplement curieux d''en savoir plus, cette visite guidée est l''occasion parfaite pour explorer et apprécier la beauté de la faune.Rejoignez-nous pour une aventure éducative et inoubliable au Zoo Arcadia !','#'),
-- ('Les Restaurants','Nos Restaurants au Zoo Arcadia
-- Lors de votre visite au Zoo Arcadia, profitez d''une expérience culinaire unique grâce à nos trois restaurants thématiques, chacun inspiré par un écosystème naturel.Au Marais
-- Immergez-vous dans l’atmosphère paisible des zones humides tout en savourant des plats à base de produits locaux et frais. Ce restaurant propose une cuisine saine, idéale pour les amateurs de nature et de tranquillité.
-- À la Savane
-- Voyagez au cœur de l’Afrique avec une cuisine aux saveurs épicées et exotiques. Ce restaurant est parfait pour les aventuriers à la recherche de plats qui évoquent la chaleur et les traditions des grandes plaines africaines.
-- Dans la Jungle
-- Entrez dans une ambiance tropicale, où vous pourrez déguster des plats exotiques, riches en fruits et légumes. Ce restaurant est un véritable voyage sensoriel, au milieu d''une végétation luxuriante.','/pages/Restaurants.php'),
-- ('Visitez avec le petit train','Visite du Zoo en Petit Train
-- Envie de découvrir le Zoo Arcadia de manière ludique et confortable ? Montez à bord de notre petit train et laissez-vous guider à travers les différents habitats !

-- Cette promenade paisible est idéale pour toute la famille. Vous traverserez la savane, les marais et la jungle tout en profitant de vues imprenables sur les animaux et la nature environnante. Les guides présents à bord vous fourniront des informations fascinantes sur les espèces que vous croiserez, rendant cette visite à la fois amusante et éducative.

-- Montez à bord du petit train et partez pour une aventure inoubliable à travers le monde fascinant des animaux au Zoo Arcadia !','#');


-- INSERT INTO habitat(habitat_nom, descriptions, liens) VALUES
-- ('Les Habitats', 'Visite Guidée des Habitats au Zoo Arcadia. Profitez d''une expérience unique avec notre visite guidée gratuite des habitats au Zoo Arcadia ! Explorez les différents écosystèmes du zoo avec nos guides passionnés qui vous plongeront au cœur de la biodiversité. Chaque visite vous offre l''occasion d''en apprendre davantage sur les animaux qui y résident et leur habitat naturel.', '/pages/habitat.php'),

-- ('Voici la galerie des animaux', 'Découvrez un monde fascinant où la nature prend vie ! Niché au cœur de Plouah, notre zoo est un véritable sanctuaire pour plus de 300 animaux représentant 150 espèces venant des quatre coins du globe. Du majestueux lion d''Afrique à l''élégant panda géant, chaque visite vous transporte dans un voyage unique à travers les différents écosystèmes de notre planète.', '/pages/alllinks.php?id=2'),

-- ('La savane', 'Explorez la Savane au Zoo Arcadia. La savane est un écosystème vaste et ouvert, rempli de vie sauvage fascinante. Lors de votre visite, vous aurez l''occasion de rencontrer des animaux emblématiques tels que les lions majestueux, les éléphants imposants et les élégantes girafes.', '#'),

-- ('La jungle', 'Immersion dans la Jungle. Entrez dans le monde luxuriant de la jungle au Zoo Arcadia, un habitat tropical riche en biodiversité. Ici, la végétation dense abrite une multitude d''espèces colorées et exotiques.', '#'),
-- ('Le marais', 'À la Découverte du Marais. Le marais, avec son écosystème humide et riche, est un habitat unique à explorer au Zoo Arcadia.', '#');


-- INSERT INTO images (chemin, infos) VALUES 
-- ('/asset/zoo arcadia(2)1.png', 'logo') ,
-- ('/asset/zoo-arcadia-accueil.png','contenu zoo'),
-- ('/asset/unsplash_yhn4okt6ci0-1.png','cover resto') ,
-- ('/asset/zoo arcadia (5) 1-1.png', ' cover visite guide') ,
-- ('/asset/zoo arcadia (5) 1.png', 'cover jungle') ,
-- ('/asset/zoo-arcadia-accueil.png', 'cover zoo'),
-- ('/asset/zoo arcadia (6) 1-1.png', 'cover train'), 
-- ('/asset/zoo arcadia (6) 1.png', 'cover marais') ,
-- ('/asset/singe.png','cover habitat'),
-- ('/asset/service.png','cover service'),
-- ('/asset/aigle.jpg', 'animal savane'),
-- ('/asset/perroquet.jpeg','animal jungle'),
-- ('/asset/salamandre.jpeg','animal marais'),
-- ('/asset/anacounda.jpeg','animal jungle'),
-- ('/asset/buffle.jpeg','animal marais') , 
-- ('/asset/caiman.jpeg','animal marais') ,
-- ('/asset/elephant.webp','animal savane'), 
-- ('/asset/flament.jpeg','animal marais') ,
-- ('/asset/gazelle.png', 'animal savane') ,
-- ('/asset/girafe.webp', 'animal savane') ,
-- ('/asset/gorille.jpeg','animal jungle') ,
-- ('/asset/guepard.jpeg','animal savane') ,
-- ('/asset/lion.jpeg', 'animal savane') ,
-- ('/asset/ours.jpeg','animal jungle') ,
-- ('/asset/panthere.jpeg','animal jungle'), 
-- ('/asset/parresseux.jpg','animal jungle'), 
-- ('/asset/ragondin.jpg','animal marais') ,
-- ('/asset/rainette.jpeg','animal marais') ,
-- ('/asset/salamandre.jpeg','animal marais'), 
-- ('/asset/caroussel-jungle.png','caroussel-jungle'), 
-- ('/asset/caroussel-marais.png','caroussel-marais'), 
-- ('/asset/caroussel-savane.png','caroussel-savane'), 
-- ('/asset/zebre.webp','animal savane');
 
-- INSERT INTO contenu_images (contenu_id, image_id)
-- VALUES 
-- (1, 2),(2,10),(3,9);

-- INSERT INTO habitat_images (idHabitat, idImages)
-- VALUES (1, 32),(1, 31),(1, 30); 
