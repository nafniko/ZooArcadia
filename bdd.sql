CREATE DATABASE zooarcadia;

USE zooarcadia;

CREATE TABLE users
(
    id integer AUTO_INCREMENT PRIMARY KEY,
    email varchar(250) not null UNIQUE,
    userPassword varchar(250) not null   
);

CREATE TABLE habitat
(
    id integer AUTO_INCREMENT PRIMARY KEY,
    habitat varchar(250) not null
   
);

CREATE TABLE service
(
    id integer AUTO_INCREMENT PRIMARY KEY,
    serviceNom varchar(250) not null,
    descriptionService varchar(250) not null
);


CREATE TABLE images
(
    id integer AUTO_INCREMENT PRIMARY KEY,
    chemin varchar(250) null,
    pages varchar(250)

);

CREATE TABLE animaux
(
    id integer AUTO_INCREMENT PRIMARY KEY,
    prénom varchar(250) not null,
    race varchar(250) not null ,
    rapportVeto varchar(250)  null,
    habitat integer  not null ,
    imagesId integer,
    foreign key (habitat) REFERENCES habitat(id),
    foreign key (imagesId) REFERENCES images(id)
    
);

CREATE TABLE role
(
    id integer AUTO_INCREMENT PRIMARY KEY,
    leRole varchar(250) not null UNIQUE
);

CREATE TABLE rapportVeto
(
    id integer AUTO_INCREMENT PRIMARY KEY,
    etat varchar(250) null,
    nourriture varchar(250),
    grammage varchar(250),
    detail varchar(250)
);

CREATE USER 'admin'@'localhost' IDENTIFIED BY 'OK';
GRANT SELECT, INSERT, UPDATE, DELETE ON zooarcadia.users TO 'admin'@'localhost';

