# Home

That is my home page, where i can see my favorites / more used pages, and I can add new words that i learn, so i can practice later.

![](/images/capture.png)


### Base de datos:
Para poder utilizar **Home** necesitas una base de datos MySQL o MariaDB, en ella
crea una base de datos: 'mydictionary', y agrega una tabla 'word':

CREATE DATABASE `mydictionary`;

CREATE TABLE `mydictionary`.`word` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `word` VARCHAR(30) NOT NULL,
    `mean` VARCHAR(60) NOT NULL,
    PRIMARY KEY  (`id`)
) ENGINE = InnoDB;


