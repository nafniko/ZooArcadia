

DROP TABLE IF EXISTS `animal_images`;

CREATE TABLE `animal_images` (
  `id_animal` int(11) NOT NULL,
  `id_images` int(11) NOT NULL,
  PRIMARY KEY (`id_animal`,`id_images`),
  KEY `id_images` (`id_images`),
  CONSTRAINT `animal_images_ibfk_1` FOREIGN KEY (`id_images`) REFERENCES `animaux` (`id`),
  CONSTRAINT `animal_images_ibfk_2` FOREIGN KEY (`id_animal`) REFERENCES `animaux` (`images`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


LOCK TABLES `animal_images` WRITE;

UNLOCK TABLES;



DROP TABLE IF EXISTS `animaux`;

CREATE TABLE `animaux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pr├®nom` varchar(250) NOT NULL,
  `race` varchar(250) NOT NULL,
  `habitat` int(11) DEFAULT NULL,
  `images` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `habitat` (`habitat`),
  KEY `images` (`images`),
  CONSTRAINT `animaux_ibfk_1` FOREIGN KEY (`habitat`) REFERENCES `habitat` (`id`),
  CONSTRAINT `animaux_ibfk_2` FOREIGN KEY (`images`) REFERENCES `images` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


LOCK TABLES `animaux` WRITE;

INSERT INTO `animaux` VALUES (1,'Giny','Girafe Masai',1,22),(2,'zaza','zebre ',1,32),(3,'eli','Elephant Loxodonta africana',1,20),(4,'leo','lion de l\'Atlas',1,25),(5,'Adi','Aigle',1,14),(6,'Bagy','Guepard',1,24),(7,'Penny','Panthere',2,27),(8,'Doudou','ours ',2,26),(9,'Paco','Perroquet ',2,15),(10,'Gary','Gorilles ',2,23),(11,'Sily','Serpent ',2,17),(12,'Papito','Parresseux',2,28),(13,'Camille','ca├»man noir ',3,19),(14,'Brutus','buffle',3,18),(15,'Rachelle','Ragondin ',3,29),(16,'Flamy','Flament rose ',3,21),(17,'Samy','Salamandre ',3,31),(18,'Rene','Rainette ',3,30),(19,'chacha','pingouin',1,33);
/*!40000 ALTER TABLE `animaux` ENABLE KEYS */;
UNLOCK TABLES;



DROP TABLE IF EXISTS `avis_veto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avis_veto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `veto_id` int(11) NOT NULL,
  `animal_id` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `date_creation` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `animal_id` (`animal_id`),
  CONSTRAINT `avis_veto_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animaux` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Dumping data for table `avis_veto`
--

LOCK TABLES `avis_veto` WRITE;
/*!40000 ALTER TABLE `avis_veto` DISABLE KEYS */;
/*!40000 ALTER TABLE `avis_veto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contenu`
--

DROP TABLE IF EXISTS `contenu`;

CREATE TABLE `contenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(250) NOT NULL,
  `descriptions` text DEFAULT NULL,
  `images` int(11) DEFAULT NULL,
  `liens` varchar(250) DEFAULT NULL,
  `idHabitat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images` (`images`),
  CONSTRAINT `contenu_ibfk_1` FOREIGN KEY (`images`) REFERENCES `images` (`id`)
)


--
-- Dumping data for table `contenu`
--

LOCK TABLES `contenu` WRITE;

INSERT INTO `contenu` VALUES (1,'Le Zoo','D├®couvrez un monde fascinant o├╣ la nature prend vie ! Nich├® au c┼ôur de Plouah, notre zoo est un v├®ritable sanctuaire pour plus de 300 animaux repr├®sentant 150 esp├¿ces venant des quatre coins du globe. Du majestueux lion d\'Afrique ├á l\'├®l├®gant panda g├®ant, chaque visite vous transporte dans un voyage unique ├á travers les diff├®rents ├®cosyst├¿mes de notre plan├¿te.',2,NULL,NULL),(2,'Les services','Au Zoo Arcadia, nous mettons ├á votre disposition plusieurs services pour rendre votre visite inoubliable, tout en respectant notre engagement ├®cologique. Restauration ├®co-responsable : Faites une pause gourmande dans notre espace de restauration, o├╣ nous privil├®gions des produits locaux et biologiques. Profitez de plats savoureux tout en contribuant ├á la r├®duction de notre empreinte environnementale. Visites guid├®es des habitats : Explorez les diff├®rents habitats du zoo avec un guide expert, gratuitement. D├®couvrez les esp├¿ces animales dans leur environnement recr├®├®, et apprenez-en plus sur leurs comportements et les efforts de conservation. Balade en petit train : Montez ├á bord de notre petit train ├®cologique pour une visite relaxante ├á travers le zoo. Une mani├¿re amusante et tranquille de d├®couvrir tous nos animaux sans trop marcher !',3,'/pages/services.php',NULL),(3,'Les animaux','├Ç la rencontre des animaux du Zoo Arcadia\r\n                    Le Zoo Arcadia vous invite ├á d├®couvrir la richesse de la faune ├á travers trois ├®cosyst├¿mes fascinants : la savane, le marais et la jungle.\r\n\r\n                    Les animaux de la savane\r\n                    Traversez les vastes ├®tendues de la savane et rencontrez ses majestueux habitants. Du lion, roi des animaux, aux ├®l├®phants imposants en passant par les ├®l├®gantes girafes, chaque esp├¿ce vous fascine par son adaptation ├á cet environnement aride.\r\n\r\n                    Les habitants des marais\r\n                    Dans les marais, un monde discret mais captivant vous attend. Observez les crocodiles se pr├®lassant au soleil, les oiseaux aquatiques glissant sur l\'eau, et d├®couvrez la faune surprenante des zones humides, o├╣ la biodiversit├® est riche et vari├®e.\r\n\r\n                    Les cr├®atures de la jungle\r\n                    P├®n├®trez dans lÔÇÖ├®paisse v├®g├®tation tropicale de la jungle pour y d├®couvrir des esp├¿ces color├®es et exotiques. Singes agiles, serpents myst├®rieux et oiseaux multicolores font de cet environnement une aventure inoubliable, o├╣ chaque pas r├®v├¿le une nouvelle esp├¿ce fascinante.',9,'/pages/animaux.php',NULL),(4,'Visite guid├® des habitats','Visite Guid├®e des Habitats au Zoo Arcadia\r\nProfitez d\'une exp├®rience unique avec notre visite guid├®e gratuite des habitats au Zoo Arcadia !\r\nExplorez les diff├®rents ├®cosyst├¿mes du zoo avec nos guides passionn├®s qui vous plongeront au c┼ôur de la biodiversit├®. Chaque visite vous offre l\'occasion d\'en apprendre davantage sur les animaux qui y r├®sident et leur habitat naturel.Au cours de cette exp├®rience enrichissante, vous d├®couvrirez les adaptations ├®tonnantes des esp├¿ces, leurs comportements et les efforts de conservation d├®ploy├®s pour prot├®ger ces animaux dans la nature. Que vous soyez un amoureux des animaux ou simplement curieux d\'en savoir plus, cette visite guid├®e est l\'occasion parfaite pour explorer et appr├®cier la beaut├® de la faune.Rejoignez-nous pour une aventure ├®ducative et inoubliable au Zoo Arcadia !',5,'#',NULL),(5,'Les Restaurants','Nos Restaurants au Zoo Arcadia\r\nLors de votre visite au Zoo Arcadia, profitez d\'une exp├®rience culinaire unique gr├óce ├á nos trois restaurants th├®matiques, chacun inspir├® par un ├®cosyst├¿me naturel.Au Marais\r\nImmergez-vous dans lÔÇÖatmosph├¿re paisible des zones humides tout en savourant des plats ├á base de produits locaux et frais. Ce restaurant propose une cuisine saine, id├®ale pour les amateurs de nature et de tranquillit├®.\r\n├Ç la Savane\r\nVoyagez au c┼ôur de lÔÇÖAfrique avec une cuisine aux saveurs ├®pic├®es et exotiques. Ce restaurant est parfait pour les aventuriers ├á la recherche de plats qui ├®voquent la chaleur et les traditions des grandes plaines africaines.\r\nDans la Jungle\r\nEntrez dans une ambiance tropicale, o├╣ vous pourrez d├®guster des plats exotiques, riches en fruits et l├®gumes. Ce restaurant est un v├®ritable voyage sensoriel, au milieu d\'une v├®g├®tation luxuriante.',4,'/pages/Restaurants.php',NULL),(6,'Visitez avec le petit train','Visite du Zoo en Petit Train\r\nEnvie de d├®couvrir le Zoo Arcadia de mani├¿re ludique et confortable ? Montez ├á bord de notre petit train et laissez-vous guider ├á travers les diff├®rents habitats !\r\n\r\nCette promenade paisible est id├®ale pour toute la famille. Vous traverserez la savane, les marais et la jungle tout en profitant de vues imprenables sur les animaux et la nature environnante. Les guides pr├®sents ├á bord vous fourniront des informations fascinantes sur les esp├¿ces que vous croiserez, rendant cette visite ├á la fois amusante et ├®ducative.\r\n\r\nMontez ├á bord du petit train et partez pour une aventure inoubliable ├á travers le monde fascinant des animaux au Zoo Arcadia !',7,'#',NULL),(7,'Les Habitats','Visite Guid├®e des Habitats au Zoo Arcadia. Profitez d\'une exp├®rience unique avec notre visite guid├®e gratuite des habitats au Zoo Arcadia ! Explorez les diff├®rents ├®cosyst├¿mes du zoo avec nos guides passionn├®s qui vous plongeront au c┼ôur de la biodiversit├®. Chaque visite vous offre l\'occasion d\'en apprendre davantage sur les animaux qui y r├®sident et leur habitat naturel.',NULL,'/pages/habitat.php',NULL),(8,'Voici la galerie des animaux','D├®couvrez un monde fascinant o├╣ la nature prend vie ! Nich├® au c┼ôur de Plouah, notre zoo est un v├®ritable sanctuaire pour plus de 300 animaux repr├®sentant 150 esp├¿ces venant des quatre coins du globe. Du majestueux lion d\'Afrique ├á l\'├®l├®gant panda g├®ant, chaque visite vous transporte dans un voyage unique ├á travers les diff├®rents ├®cosyst├¿mes de notre plan├¿te.',NULL,'/pages/animaux.php?id=2',NULL),(9,'La savane','Explorez la Savane au Zoo Arcadia. La savane est un ├®cosyst├¿me vaste et ouvert, rempli de vie sauvage fascinante. Lors de votre visite, vous aurez l\'occasion de rencontrer des animaux embl├®matiques tels que les lions majestueux, les ├®l├®phants imposants et les ├®l├®gantes girafes.',10,'#',NULL),(10,'La jungle','Immersion dans la Jungle. Entrez dans le monde luxuriant de la jungle au Zoo Arcadia, un habitat tropical riche en biodiversit├®. Ici, la v├®g├®tation dense abrite une multitude d\'esp├¿ces color├®es et exotiques.',6,'#',NULL),(11,'Le marais','├Ç la D├®couverte du Marais. Le marais, avec son ├®cosyst├¿me humide et riche, est un habitat unique ├á explorer au Zoo Arcadia.',8,'#',NULL),(12,'Resto savane','Entr├®es\r\n\r\nSalade exotique de mangue et avocat - 8,50 Ôé¼\r\n\r\nBrochette de crevettes grill├®es au piment doux - 10,00 Ôé¼\r\n\r\nPlats\r\n\r\nFilet de b┼ôuf grill├® aux ├®pices de la savane - 18,50 Ôé¼\r\n\r\nPoulet marin├® ├á lÔÇÖananas et noix de coco - 16,00 Ôé¼\r\n\r\nDesserts\r\n\r\nTarte banane-caramel - 7,00 Ôé¼\r\n\r\nCoupe de fruits tropicaux - 6,50 Ôé¼',2,'#',NULL),(13,'Jungle buger','Burgers\r\n\r\nJungle Classic (steak, cheddar, laitue, tomate) - 12,00 Ôé¼\r\n\r\nVolcano Burger (steak ├®pic├®, sauce piquante, oignons grill├®s) - 13,50 Ôé¼\r\n\r\nVeggie Delight (galette v├®g├®tale, avocat, pousses dÔÇÖ├®pinard) - 11,00 Ôé¼\r\n\r\nAccompagnements\r\n\r\nFrites de patates douces - 4,50 Ôé¼\r\n\r\nSalade de quinoa et l├®gumes grill├®s - 5,00 Ôé¼\r\n\r\nBoissons\r\n\r\nSmoothie mangue-passion - 5,00 Ôé¼\r\n\r\nLimonade maison - 4,00 Ôé¼',2,'#',NULL),(14,'Le Marais ├®cr├®m├®','Entr├®es\r\n\r\nVelout├® de courge au lait de coco - 7,50 Ôé¼\r\n\r\nTartare de saumon et pommes Granny - 9,00 Ôé¼\r\n\r\nPlats\r\n\r\nBar r├┤ti ├á la cr├¿me de fenouil - 19,50 Ôé¼\r\n\r\nRisotto cr├®meux aux champignons des bois - 17,00 Ôé¼\r\n\r\nDesserts\r\n\r\nCr├¿me br├╗l├®e ├á la vanille Bourbon - 6,50 Ôé¼\r\n\r\nSouffl├® glac├® au citron vert - 7,50 Ôé¼',2,'#',NULL);

UNLOCK TABLES;

DROP TABLE IF EXISTS `contenu_habitat`;

CREATE TABLE `contenu_habitat` (
  `id_contenu` int(11) NOT NULL,
  `id_habitat` int(11) NOT NULL,
  PRIMARY KEY (`id_contenu`,`id_habitat`),
  KEY `id_habitat` (`id_habitat`),
  CONSTRAINT `contenu_habitat_ibfk_1` FOREIGN KEY (`id_contenu`) REFERENCES `contenu` (`id`),
  CONSTRAINT `contenu_habitat_ibfk_2` FOREIGN KEY (`id_habitat`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


LOCK TABLES `contenu_habitat` WRITE;

UNLOCK TABLES;


DROP TABLE IF EXISTS `contenu_service`;

CREATE TABLE `contenu_service` (
  `id_contenu` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  PRIMARY KEY (`id_contenu`,`id_service`),
  KEY `id_service` (`id_service`),
  CONSTRAINT `contenu_service_ibfk_1` FOREIGN KEY (`id_contenu`) REFERENCES `contenu` (`id`),
  CONSTRAINT `contenu_service_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


LOCK TABLES `contenu_service` WRITE;

UNLOCK TABLES;



DROP TABLE IF EXISTS `habitat`;

CREATE TABLE `habitat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(250) NOT NULL,
  `images` int(11) DEFAULT NULL,
  `liens` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images` (`images`),
  CONSTRAINT `habitat_ibfk_1` FOREIGN KEY (`images`) REFERENCES `images` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--

LOCK TABLES `habitat` WRITE;

INSERT INTO `habitat` VALUES (1,'savane',10,'/pages/habitats.php?id=1'),(2,'jungle',6,'/pages/habitats.php?id=2'),(3,'marais',8,'/pages/habitats.php?id=3');

UNLOCK TABLES;



DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chemin` varchar(250) DEFAULT NULL,
  `infos` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


LOCK TABLES `images` WRITE;

INSERT INTO `images` VALUES (1,'/asset/zoo arcadia(2)1.png','logo'),(2,'/asset/zoo-arcadia-accueil.png','contenu zoo'),(3,'/asset/service.png','cover service'),(4,'/asset/unsplash_yhn4okt6ci0-1.png','cover resto'),(5,'/asset/zoo arcadia (5) 1-1.png','cover visite guide'),(6,'/asset/zoo arcadia (5) 1.png','cover jungle'),(7,'/asset/zoo arcadia (6) 1-1.png','cover train'),(8,'/asset/zoo arcadia (6) 1.png','cover marais'),(9,'/asset/singe.png','cover habitat'),(10,'/asset/gazelle.png','cover savane'),(11,'/asset/caroussel-jungle.png','caroussel-jungle'),(12,'/asset/caroussel-marais.png','caroussel-marais'),(13,'/asset/caroussel-savane.png','caroussel-savane'),(14,'/asset/aigle.jpg','animal savane'),(15,'/asset/perroquet.jpeg','animal jungle'),(16,'/asset/salamandre.jpeg','animal marais'),(17,'/asset/anacounda.jpeg','animal jungle'),(18,'/asset/buffle.jpeg','animal marais'),(19,'/asset/caiman.jpeg','animal marais'),(20,'/asset/elephant.webp','animal savane'),(21,'/asset/flament.jpeg','animal marais'),(22,'/asset/girafe.webp','animal savane'),(23,'/asset/gorille.jpeg','animal jungle'),(24,'/asset/guepard.jpeg','animal savane'),(25,'/asset/lion.jpeg','animal savane'),(26,'/asset/ours.jpeg','animal jungle'),(27,'/asset/panthere.jpeg','animal jungle'),(28,'/asset/parresseux.jpg','animal jungle'),(29,'/asset/ragondin.jpg','animal marais'),(30,'/asset/rainette.jpeg','animal marais'),(31,'/asset/salamandre.jpeg','animal marais'),(32,'/asset/zebre.webp','animal savane'),(33,'/asset/',NULL);

UNLOCK TABLES;


DROP TABLE IF EXISTS `rapport`;

CREATE TABLE `rapport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(250) DEFAULT NULL,
  `race` varchar(250) DEFAULT NULL,
  `etat` varchar(250) DEFAULT NULL,
  `nourriture` varchar(250) DEFAULT NULL,
  `grammage` varchar(250) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `date_creation` datetime DEFAULT current_timestamp(),
  `detail_animal` int(11) DEFAULT NULL,
  `commentaire` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detail_animal` (`detail_animal`),
  CONSTRAINT `rapport_ibfk_1` FOREIGN KEY (`detail_animal`) REFERENCES `animaux` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `rapport` WRITE;

INSERT INTO `rapport` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,'2024-11-04 20:23:43',NULL,NULL),(2,'choisir un animal','choisir une race','','','','0000-00-00','2024-11-07 10:53:59',NULL,'ok'),(3,'choisir un animal','choisir une race','','','','0000-00-00','2024-11-07 10:55:58',NULL,'ok'),(4,'choisir un animal','choisir une race','','','','0000-00-00','2024-11-07 10:56:50',NULL,'ok'),(5,'choisir un animal','choisir une race','','','','0000-00-00','2024-11-07 11:02:23',NULL,'ok');

UNLOCK TABLES;



DROP TABLE IF EXISTS `repas`;

CREATE TABLE `repas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `repas` varchar(255) DEFAULT NULL,
  `animal_id` int(11) DEFAULT NULL,
  `nourriture` varchar(255) NOT NULL,
  `quantite` int(11) NOT NULL,
  `date_repas` datetime NOT NULL,
  `employe_id` int(11) DEFAULT NULL,
  `commentaire` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `animal_id` (`animal_id`),
  CONSTRAINT `repas_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `animaux` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


LOCK TABLES `repas` WRITE;

INSERT INTO `repas` VALUES (1,NULL,1,'banane',50,'2024-11-04 20:18:56',NULL,NULL),(2,NULL,2,'pomme',50,'2024-11-05 00:00:00',NULL,NULL),(3,NULL,7,'pomme',12,'2024-11-14 00:00:00',NULL,NULL);

UNLOCK TABLES;


DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


LOCK TABLES `roles` WRITE;

INSERT INTO `roles` VALUES (3,'admin'),(2,'employee'),(1,'veterinaire');

UNLOCK TABLES;


DROP TABLE IF EXISTS `service`;

CREATE TABLE `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(250) NOT NULL,
  `liens` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


LOCK TABLES `service` WRITE;

UNLOCK TABLES;



DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `Passwords` varchar(250) NOT NULL,
  `roles` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `roles` (`roles`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roles`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `users` WRITE;

INSERT INTO `users` VALUES (1,'veto@zoo.com','$2y$10$U/XvmUFZjeGcLj2WX0mUV.jkIRV5Y3q/OovAJO7Ox2LgCJldwcua2',1),(2,'emp@zoo.com','$2y$10$SRwKHIJZA.etsB2ywT5cIuwQDYQnPms2WBCX/45uQ75eAy3.c.pb.',2),(3,'admin@zoo.com','$2y$10$ffxdhIlHgPjmDjrPdZy47OFPB02zcZoNRZKTw0OQlH8FacyTOUV6i',3);

UNLOCK TABLES;
