# Home

My homepage, it has a small dictionary of English-Spanish words, and includes my favorite and most used sites.

![](/images/capture.png)



### Base de datos:

Para poder utilizar **Home** necesitas una base de datos MySQL o MariaDB, en ella

crea una base de datos: 'mydictionary', y agrega una tabla 'word':

``` sql
CREATE DATABASE `mydictionary`;

CREATE TABLE `mydictionary`.`word` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `word` VARCHAR(30) NOT NULL,
    `mean` VARCHAR(60) NOT NULL,
    PRIMARY KEY  (`id`)
) ENGINE = InnoDB;

```





