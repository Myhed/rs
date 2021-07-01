DROP DATABASE IF EXISTS inscription;

CREATE DATABASE inscription;

use inscription;

CREATE TABLE users(
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    pseudo VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    date_naissance DATE,
    sexe ENUM('f', 'm', 'o') DEFAULT 'o',
    photo_profil VARCHAR(255) DEFAULT 'assets/img/unknown.png',
    description TINYTEXT DEFAULT ''  
) ENGINE = InnoDB;
