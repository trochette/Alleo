use alleo;

DROP TABLE IF EXISTS profils;
DROP TABLE IF EXISTS retroactions;
DROP TABLE IF EXISTS commentaires;
DROP TABLE IF EXISTS matchs;
DROP TABLE IF EXISTS offres;
DROP TABLE IF EXISTS demandes;
DROP TABLE IF EXISTS trajets;
DROP TABLE IF EXISTS vehicules;
DROP TABLE IF EXISTS utilisateurs;


CREATE TABLE  alleo.utilisateurs (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
courriel VARCHAR( 150 ) NOT NULL ,
mot_de_passe CHAR(32) NOT NULL,
prenom VARCHAR( 50 ) NOT NULL ,
nom VARCHAR( 50 ) NOT NULL ,
sexe ENUM ('M', 'F') NOT NULL,
points INT DEFAULT 0,
UNIQUE (
courriel
)
) ENGINE = INNODB;


CREATE TABLE  alleo.profils (
utilisateur_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
adresse VARCHAR( 200 ) NOT NULL ,
code_postal CHAR( 6 ) NOT NULL ,
telephone CHAR( 10 ) NOT NULL ,
preference_fumeur ENUM('O', 'N', 'N/A') NOT NULL DEFAULT 'N/A',
preference_sexe ENUM('M', 'F', 'N/A') NOT NULL DEFAULT 'N/A',
preference_musique VARCHAR( 30 ) NULL DEFAULT NULL,
preference_type ENUM ('Chauffeur', 'Passager'),
FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id)
) ENGINE = INNODB;


CREATE TABLE  alleo.vehicules (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
utilisateur_id INT NOT NULL ,
marque VARCHAR( 20 ) NOT NULL ,
modele VARCHAR( 30 ) NOT NULL ,
annnee YEAR NOT NULL ,
couleur VARCHAR( 20 ) NOT NULL ,
immatriculation VARCHAR(10) NULL,
photo BLOB NULL,
extension_photo ENUM('jpg', 'png'),
FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id)
) ENGINE = INNODB;

-- Commentaires généraux
CREATE TABLE  alleo.commentaires (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
utilisateur_id INT NOT NULL ,
prenom VARCHAR( 250 ) NOT NULL ,
FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id)
) ENGINE = INNODB;


CREATE TABLE  alleo.trajets (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
point_a VARCHAR ( 250 ) NOT NULL ,
point_b VARCHAR ( 250 ) NOT NULL ,
prix_suggere FLOAT(5,2)
) ENGINE = INNODB;


CREATE TABLE  alleo.demandes (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
trajet_id INT NOT NULL ,
utilisateur_id INT NOT NULL ,
description VARCHAR( 250 ) NOT NULL ,
FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id),
FOREIGN KEY (trajet_id) REFERENCES trajets(id)
) ENGINE = INNODB;

CREATE TABLE  alleo.offres (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
trajet_id INT NOT NULL ,
utilisateur_id INT NOT NULL ,
description VARCHAR( 250 ) NOT NULL ,
vehicule_id INT NOT NULL,
FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id),
FOREIGN KEY (trajet_id) REFERENCES trajets(id),
FOREIGN KEY (vehicule_id) REFERENCES vehicules(id)
) ENGINE = INNODB;

CREATE TABLE  alleo.matchs (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
offre_id INT NOT NULL ,
demande_id INT NOT NULL ,
confirmation BOOLEAN NULL ,
FOREIGN KEY (offre_id) REFERENCES offres(id),
FOREIGN KEY (demande_id) REFERENCES demandes(id)
) ENGINE = INNODB;

CREATE TABLE alleo.retroactions (
match_id INT NOT NULL,
utilisateur_id INT NOT NULL,
texte TEXT NOT NULL
) ENGINE = INNODB;



































