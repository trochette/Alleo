-- DROP DATABASE alleo;

CREATE DATABASE alleo;

USE alleo;

/* DROP TABLE IF EXISTS profils;
DROP TABLE IF EXISTS retroactions;
DROP TABLE IF EXISTS commentaires;
DROP TABLE IF EXISTS matchs;
DROP TABLE IF EXISTS offres;
DROP TABLE IF EXISTS demandes;
DROP TABLE IF EXISTS trajets;
DROP TABLE IF EXISTS lieux;
DROP TABLE IF EXISTS vehicules;
DROP TABLE IF EXISTS utilisateurs; */


CREATE TABLE  utilisateurs (
courriel VARCHAR( 250 ) NOT NULL PRIMARY KEY,
mot_de_passe CHAR(32) NOT NULL,
prenom VARCHAR( 50 ) NOT NULL ,
nom VARCHAR( 50 ) NOT NULL ,
sexe ENUM ('M', 'F') NOT NULL,
points INT DEFAULT 0
) ENGINE = INNODB;


CREATE TABLE  profils (
utilisateur VARCHAR( 250 ) NOT NULL PRIMARY KEY ,
texte TEXT ,
preference_fumeur ENUM('O', 'N', 'N/A') NOT NULL DEFAULT 'N/A',
preference_sexe ENUM('M', 'F', 'N/A') NOT NULL DEFAULT 'N/A',
preference_musique VARCHAR( 30 ) NULL DEFAULT NULL,
preference_type ENUM ('Chauffeur', 'Passager'),
FOREIGN KEY (utilisateur) REFERENCES utilisateurs(courriel)
) ENGINE = INNODB;


CREATE TABLE  vehicules (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
utilisateur VARCHAR( 250 ) NOT NULL ,
marque VARCHAR( 20 ) NULL ,
modele VARCHAR( 30 ) NULL ,
annnee YEAR NULL ,
couleur VARCHAR( 20 ) NULL ,
immatriculation VARCHAR(10) NULL,
manger BOOLEAN NULL DEFAULT NULL,
photo BLOB NULL,
extension_photo ENUM('jpg', 'png'),
FOREIGN KEY (utilisateur) REFERENCES utilisateurs(courriel)
) ENGINE = INNODB;

-- Commentaires généraux
CREATE TABLE  commentaires (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
utilisateur VARCHAR( 250 ) NOT NULL ,
prenom VARCHAR( 250 ) NOT NULL ,
FOREIGN KEY (utilisateur) REFERENCES utilisateurs(courriel)
) ENGINE = INNODB;

CREATE TABLE lieux (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
alias VARCHAR(100) NOT NULL,
adresse VARCHAR(250) NOT NULL,
utilisateur VARCHAR(250) NOT NULL,
FOREIGN KEY (utilisateur) REFERENCES utilisateurs(courriel) 
) ENGINE = INNODB;


CREATE TABLE  trajets (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
nom VARCHAR ( 50 ) ,
lieu_1 INT NOT NULL,
lieu_2 INT NOT NULL,
utilisateur VARCHAR( 250 ) ,
prix_suggere FLOAT(5,2),
FOREIGN KEY (utilisateur) REFERENCES utilisateurs(courriel),
FOREIGN KEY (lieu_1) REFERENCES lieux(id),
FOREIGN KEY (lieu_2) REFERENCES lieux(id)
) ENGINE = INNODB;


CREATE TABLE  demandes (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
trajet_id INT NOT NULL ,
utilisateur VARCHAR( 250 ) NOT NULL ,
date_heure DATETIME NOT NULL,
description VARCHAR( 250 ) NOT NULL ,
FOREIGN KEY (utilisateur) REFERENCES utilisateurs(courriel),
FOREIGN KEY (trajet_id) REFERENCES trajets(id)
) ENGINE = INNODB;

CREATE TABLE  offres (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
trajet_id INT NOT NULL ,
utilisateur VARCHAR( 250 ) NOT NULL ,
description VARCHAR( 250 ) NOT NULL ,
date_heure DATETIME NOT NULL,
vehicule_id INT NOT NULL,
FOREIGN KEY (utilisateur) REFERENCES utilisateurs(courriel),
FOREIGN KEY (trajet_id) REFERENCES trajets(id),
FOREIGN KEY (vehicule_id) REFERENCES vehicules(id)
) ENGINE = INNODB;

CREATE TABLE  matchs (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
offre_id INT NOT NULL ,
demande_id INT NOT NULL ,
confirmation BOOLEAN NULL ,
FOREIGN KEY (offre_id) REFERENCES offres(id),
FOREIGN KEY (demande_id) REFERENCES demandes(id)
) ENGINE = INNODB;

CREATE TABLE retroactions (
match_id INT NOT NULL,
utilisateur VARCHAR( 250 ) NOT NULL,
texte TEXT NOT NULL,
FOREIGN KEY (utilisateur) REFERENCES utilisateurs(courriel)
) ENGINE = INNODB;

-- INSERT INTO utilisateurs (courriel, mot_de_passe, prenom, nom, sexe, points) VALUES('alleo@alleo.ca', MD5('alleo'), 'Monsieur', 'Alleo', 'M', 2150);
