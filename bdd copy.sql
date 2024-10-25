CREATE DATABASE Zooarcadia2;

USE Zooarcadia2;

CREATE TABLE roles
(
    id integer AUTO_INCREMENT PRIMARY KEY,
    nom varchar(250) not null UNIQUE
);
CREATE TABLE users
(
    id integer AUTO_INCREMENT PRIMARY KEY,
    email varchar(250) not null UNIQUE,
    Passwords varchar(250) not null,
    roles integer,
    foreign key (roles) references roles(id)

);
CREATE TABLE images
(
    id integer AUTO_INCREMENT PRIMARY KEY,
    chemin varchar(250) null,
    infos varchar(250)
);

CREATE TABLE habitat
(
    id integer AUTO_INCREMENT PRIMARY KEY,
    titre varchar(250) not null,
    images integer,
    liens varchar(250),
    foreign key (images) REFERENCES images(id)
);

CREATE TABLE service
(
    id integer AUTO_INCREMENT PRIMARY KEY,
    titre varchar(250) not null,
    liens varchar(250)
);

CREATE TABLE animaux
(
    id integer AUTO_INCREMENT PRIMARY KEY,
    prénom varchar(250) not null,
    race varchar(250) not null ,
    habitat integer,
    images integer,
    foreign key (habitat) REFERENCES habitat(id),
    foreign key (images) REFERENCES images(id)
);

CREATE TABLE rapport
(
    id integer AUTO_INCREMENT PRIMARY KEY,
    etat varchar(250) null,
    nourriture varchar(250),
    grammage varchar(250),
    dates date not null ,
    detail_animal integer,
    commentaire text,
    veto integer,
    employee integer,
    foreign key (detail_animal) REFERENCES animaux(id),
    foreign key (employee) REFERENCES users(id),
    foreign key (veto) REFERENCES users(id)
);

CREATE TABLE animal_images 
(
    id_animal integer ,
    id_images integer ,
    primary key (id_animal, id_images),
    foreign key (id_images) references animaux(id),
    foreign key (id_animal) references animaux(images)
);

-- CREATE USER 'admin'@'localhost' IDENTIFIED BY 'OK';
-- GRANT SELECT, INSERT, UPDATE, DELETE ON zooarcadia.* TO 'admin'@'localhost';

CREATE TABLE contenu
(
    id integer AUTO_INCREMENT PRIMARY KEY,
    titre varchar(250) not null,
    descriptions text,
    images integer,
    liens varchar(250),
    idHabitat int
    foreign key (images) REFERENCES images(id)

);
CREATE TABLE contenu_service
(
    id_contenu integer,
    id_service integer,
    primary key (id_contenu , id_service),
    foreign key (id_contenu) REFERENCES contenu(id),
    foreign key (id_service) REFERENCES service(id)

);

CREATE TABLE contenu_habitat
(
    id_contenu integer,
    id_habitat integer,
    primary key (id_contenu , id_habitat),
    foreign key (id_contenu) REFERENCES contenu(id),
    foreign key (id_habitat) REFERENCES service(id)

);

INSERT INTO images (chemin, infos) VALUES 
('/asset/zoo arcadia(2)1.png', 'logo') ,
('/asset/zoo-arcadia-accueil.png','contenu zoo'),
('/asset/service.png','cover service'),
('/asset/unsplash_yhn4okt6ci0-1.png','cover resto') ,
('/asset/zoo arcadia (5) 1-1.png', 'cover visite guide') ,
('/asset/zoo arcadia (5) 1.png', 'cover jungle') ,
('/asset/zoo arcadia (6) 1-1.png', 'cover train'), 
('/asset/zoo arcadia (6) 1.png', 'cover marais') ,
('/asset/singe.png','cover habitat'),
('/asset/gazelle.png', 'cover savane') ,
('/asset/caroussel-jungle.png','caroussel-jungle'), 
('/asset/caroussel-marais.png','caroussel-marais'), 
('/asset/caroussel-savane.png','caroussel-savane'), 
('/asset/aigle.jpg', 'animal savane'),
('/asset/perroquet.jpeg','animal jungle'),
('/asset/salamandre.jpeg','animal marais'),
('/asset/anacounda.jpeg','animal jungle'),
('/asset/buffle.jpeg','animal marais') , 
('/asset/caiman.jpeg','animal marais') ,
('/asset/elephant.webp','animal savane'), 
('/asset/flament.jpeg','animal marais') ,
('/asset/girafe.webp', 'animal savane') ,
('/asset/gorille.jpeg','animal jungle') ,
('/asset/guepard.jpeg','animal savane') ,
('/asset/lion.jpeg', 'animal savane') ,
('/asset/ours.jpeg','animal jungle') ,
('/asset/panthere.jpeg','animal jungle'), 
('/asset/parresseux.jpg','animal jungle'), 
('/asset/ragondin.jpg','animal marais') ,
('/asset/rainette.jpeg','animal marais') ,
('/asset/salamandre.jpeg','animal marais'), 
('/asset/zebre.webp','animal savane');


INSERT INTO contenu (titre, descriptions,images, liens) VALUES
('Le Zoo', 'Découvrez un monde fascinant où la nature prend vie ! Niché au cœur de Plouah, notre zoo est un véritable sanctuaire pour plus de 300 animaux représentant 150 espèces venant des quatre coins du globe. Du majestueux lion d''Afrique à l''élégant panda géant, chaque visite vous transporte dans un voyage unique à travers les différents écosystèmes de notre planète.',2, NULL),

('Les services', 'Au Zoo Arcadia, nous mettons à votre disposition plusieurs services pour rendre votre visite inoubliable, tout en respectant notre engagement écologique. Restauration éco-responsable : Faites une pause gourmande dans notre espace de restauration, où nous privilégions des produits locaux et biologiques. Profitez de plats savoureux tout en contribuant à la réduction de notre empreinte environnementale. Visites guidées des habitats : Explorez les différents habitats du zoo avec un guide expert, gratuitement. Découvrez les espèces animales dans leur environnement recréé, et apprenez-en plus sur leurs comportements et les efforts de conservation. Balade en petit train : Montez à bord de notre petit train écologique pour une visite relaxante à travers le zoo. Une manière amusante et tranquille de découvrir tous nos animaux sans trop marcher !',3, '/pages/services.php'),

("Les animaux","À la rencontre des animaux du Zoo Arcadia
                    Le Zoo Arcadia vous invite à découvrir la richesse de la faune à travers trois écosystèmes fascinants : la savane, le marais et la jungle.

                    Les animaux de la savane
                    Traversez les vastes étendues de la savane et rencontrez ses majestueux habitants. Du lion, roi des animaux, aux éléphants imposants en passant par les élégantes girafes, chaque espèce vous fascine par son adaptation à cet environnement aride.

                    Les habitants des marais
                    Dans les marais, un monde discret mais captivant vous attend. Observez les crocodiles se prélassant au soleil, les oiseaux aquatiques glissant sur l'eau, et découvrez la faune surprenante des zones humides, où la biodiversité est riche et variée.

                    Les créatures de la jungle
                    Pénétrez dans l’épaisse végétation tropicale de la jungle pour y découvrir des espèces colorées et exotiques. Singes agiles, serpents mystérieux et oiseaux multicolores font de cet environnement une aventure inoubliable, où chaque pas révèle une nouvelle espèce fascinante.",9,"#"),

('Visite guidé des habitats','Visite Guidée des Habitats au Zoo Arcadia
Profitez d''une expérience unique avec notre visite guidée gratuite des habitats au Zoo Arcadia !
Explorez les différents écosystèmes du zoo avec nos guides passionnés qui vous plongeront au cœur de la biodiversité. Chaque visite vous offre l''occasion d''en apprendre davantage sur les animaux qui y résident et leur habitat naturel.Au cours de cette expérience enrichissante, vous découvrirez les adaptations étonnantes des espèces, leurs comportements et les efforts de conservation déployés pour protéger ces animaux dans la nature. Que vous soyez un amoureux des animaux ou simplement curieux d''en savoir plus, cette visite guidée est l''occasion parfaite pour explorer et apprécier la beauté de la faune.Rejoignez-nous pour une aventure éducative et inoubliable au Zoo Arcadia !',5,'#'),

('Les Restaurants','Nos Restaurants au Zoo Arcadia
Lors de votre visite au Zoo Arcadia, profitez d''une expérience culinaire unique grâce à nos trois restaurants thématiques, chacun inspiré par un écosystème naturel.Au Marais
Immergez-vous dans l’atmosphère paisible des zones humides tout en savourant des plats à base de produits locaux et frais. Ce restaurant propose une cuisine saine, idéale pour les amateurs de nature et de tranquillité.
À la Savane
Voyagez au cœur de l’Afrique avec une cuisine aux saveurs épicées et exotiques. Ce restaurant est parfait pour les aventuriers à la recherche de plats qui évoquent la chaleur et les traditions des grandes plaines africaines.
Dans la Jungle
Entrez dans une ambiance tropicale, où vous pourrez déguster des plats exotiques, riches en fruits et légumes. Ce restaurant est un véritable voyage sensoriel, au milieu d''une végétation luxuriante.',4,'/pages/Restaurants.php'),

('Visitez avec le petit train','Visite du Zoo en Petit Train
Envie de découvrir le Zoo Arcadia de manière ludique et confortable ? Montez à bord de notre petit train et laissez-vous guider à travers les différents habitats !

Cette promenade paisible est idéale pour toute la famille. Vous traverserez la savane, les marais et la jungle tout en profitant de vues imprenables sur les animaux et la nature environnante. Les guides présents à bord vous fourniront des informations fascinantes sur les espèces que vous croiserez, rendant cette visite à la fois amusante et éducative.

Montez à bord du petit train et partez pour une aventure inoubliable à travers le monde fascinant des animaux au Zoo Arcadia !',7,'#'),

('Les Habitats', 'Visite Guidée des Habitats au Zoo Arcadia. Profitez d''une expérience unique avec notre visite guidée gratuite des habitats au Zoo Arcadia ! Explorez les différents écosystèmes du zoo avec nos guides passionnés qui vous plongeront au cœur de la biodiversité. Chaque visite vous offre l''occasion d''en apprendre davantage sur les animaux qui y résident et leur habitat naturel.',NULL, '/pages/habitat.php'),

('Voici la galerie des animaux', 'Découvrez un monde fascinant où la nature prend vie ! Niché au cœur de Plouah, notre zoo est un véritable sanctuaire pour plus de 300 animaux représentant 150 espèces venant des quatre coins du globe. Du majestueux lion d''Afrique à l''élégant panda géant, chaque visite vous transporte dans un voyage unique à travers les différents écosystèmes de notre planète.',NULL, '/pages/alllinks.php?id=2'),

('La savane', 'Explorez la Savane au Zoo Arcadia. La savane est un écosystème vaste et ouvert, rempli de vie sauvage fascinante. Lors de votre visite, vous aurez l''occasion de rencontrer des animaux emblématiques tels que les lions majestueux, les éléphants imposants et les élégantes girafes.',10, '#'),

('La jungle', 'Immersion dans la Jungle. Entrez dans le monde luxuriant de la jungle au Zoo Arcadia, un habitat tropical riche en biodiversité. Ici, la végétation dense abrite une multitude d''espèces colorées et exotiques.',6, '#'),

('Le marais', 'À la Découverte du Marais. Le marais, avec son écosystème humide et riche, est un habitat unique à explorer au Zoo Arcadia.',8, '#'),

('Resto savane', 'Entrées

Salade exotique de mangue et avocat - 8,50 €

Brochette de crevettes grillées au piment doux - 10,00 €

Plats

Filet de bœuf grillé aux épices de la savane - 18,50 €

Poulet mariné à l’ananas et noix de coco - 16,00 €

Desserts

Tarte banane-caramel - 7,00 €

Coupe de fruits tropicaux - 6,50 €',2, '#'),

('Jungle buger', 'Burgers

Jungle Classic (steak, cheddar, laitue, tomate) - 12,00 €

Volcano Burger (steak épicé, sauce piquante, oignons grillés) - 13,50 €

Veggie Delight (galette végétale, avocat, pousses d’épinard) - 11,00 €

Accompagnements

Frites de patates douces - 4,50 €

Salade de quinoa et légumes grillés - 5,00 €

Boissons

Smoothie mangue-passion - 5,00 €

Limonade maison - 4,00 €',2, '#'),

('Le Marais écrémé', 'Entrées

Velouté de courge au lait de coco - 7,50 €

Tartare de saumon et pommes Granny - 9,00 €

Plats

Bar rôti à la crème de fenouil - 19,50 €

Risotto crémeux aux champignons des bois - 17,00 €

Desserts

Crème brûlée à la vanille Bourbon - 6,50 €

Soufflé glacé au citron vert - 7,50 €',2, '#');



INSERT INTO habitat (titre, images, liens)
VALUES 
('savane',10, '/pages/habitats.php?id=1'),
('jungle',6 , '/pages/habitats.php?id=2'),
('marais',8, '/pages/habitats.php?id=3');



INSERT INTO animaux (prénom, race, habitat, images)
VALUES 
('Giny', 'Girafe Masai', 1, 22),
('zaza', 'zebre ', 1, 32 ),
('eli', 'Elephant Loxodonta africana', 1, 20 ),
('leo', 'lion de l''Atlas', 1, 25 ),
('Adi', 'Aigle', 1, 14),
('Bagy', 'Guepard', 1, 24 ),
('Penny', 'Panthere', 2, 27 ),
('Doudou', 'ours ', 2,26 ),
('Paco', 'Perroquet ', 2, 15 ),
('Gary', 'Gorilles ', 2, 23 ),
('Sily', 'Serpent ', 2, 17 ),
('Papito', 'Parresseux', 2, 28),
('Camille', 'caïman noir ', 3, 19 ),
('Brutus', 'buffle', 3, 18 ),
('Rachelle', 'Ragondin ', 3, 29 ),
('Flamy', 'Flament rose ', 3, 21 ),
('Samy', 'Salamandre ', 3, 31 ),
('Rene', 'Rainette ', 3, 30 );


CREATE USER 'employee'@'localhost' IDENTIFIED BY 'OK';
GRANT SELECT, INSERT, UPDATE, DELETE ON zooarcadia.* TO 'employee'@'localhost';
GRANT ALL PRIVILEGES ON zooarcadia.* TO 'admin'@'localhost';

INSERT INTO roles (nom) 
VALUES
('veterinaire'),('employee'),('admin') ;


INSERT INTO users (email, Passwords, roles) 
VALUES
('veto@zoo.com', 'Azerty11@', 1),
('emp@zoo.com', 'Azerty12@', 2 ),
('admin@zoo.com', 'Azerty13@', 3);



INSERT INTO rapport (etat, nourriture, grammage, dates, detail_animal, commentaire, veto)
VALUES 
('En forme', 'poisson', '5kg', '1999-10-20', 1, 'cette animal pète la forme', 1),
('En forme', 'poisson', '5kg', '1999-10-20', 2, 'cette animal pète la forme', 1),
('En forme', 'poisson', '5kg', '1999-10-20', 3, 'cette animal pète la forme', 1),
('En forme', 'poisson', '5kg', '1999-10-20', 4, 'cette animal pète la forme', 1),
('En forme', 'poisson', '5kg', '1999-10-20', 5, 'cette animal pète la forme', 1),
('En forme', 'poisson', '5kg', '1999-10-20', 6, 'cette animal pète la forme', 1),
('En forme', 'poisson', '5kg', '1999-10-20', 7, 'cette animal pète la forme', 1),
('En forme', 'poisson', '5kg', '1999-10-20', 8, 'cette animal pète la forme', 1),
('En forme', 'poisson', '5kg', '1999-10-20', 9, 'cette animal pète la forme', 1),
('En forme', 'poisson', '5kg', '1999-10-20', 10, 'cette animal pète la forme', 1),
('En forme', 'poisson', '5kg', '1999-10-20', 11, 'cette animal pète la forme', 1),
('En forme', 'poisson', '5kg', '1999-10-20', 12, 'cette animal pète la forme', 1),
('En forme', 'poisson', '5kg', '1999-10-20', 13, 'cette animal pète la forme', 1),
('En forme', 'poisson', '5kg', '1999-10-20', 14, 'cette animal pète la forme', 1),
('En forme', 'poisson', '5kg', '1999-10-20', 15, 'cette animal pète la forme', 1),
('En forme', 'poisson', '5kg', '1999-10-20', 16, 'cette animal pète la forme', 1),
('En forme', 'poisson', '5kg', '1999-10-20', 17, 'cette animal pète la forme', 1),
('En forme', 'poisson', '5kg', '1999-10-20', 18, 'cette animal pète la forme', 1);

UPDATE users SET Passwords = '$2y$10$U/XvmUFZjeGcLj2WX0mUV.jkIRV5Y3q/OovAJO7Ox2LgCJldwcua2' WHERE users.id = 1;
UPDATE users SET Passwords = '$2y$10$SRwKHIJZA.etsB2ywT5cIuwQDYQnPms2WBCX/45uQ75eAy3.c.pb.' WHERE users.id = 2;
UPDATE users SET Passwords = '$2y$10$ffxdhIlHgPjmDjrPdZy47OFPB02zcZoNRZKTw0OQlH8FacyTOUV6i' WHERE users.id = 3;
