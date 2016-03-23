# Home

My homepage, it has a small dictionary of English-Spanish words, and includes my favorite and most used sites.

![](/images/screenshot.png)



### Base de datos:

Para el uso de la aplicación es necesario contar con una base de datos MySQL o MariaDB, dentro de ella crear el siguiente esquema:

``` sql
CREATE SCHEMA `mydictionary`;

CREATE TABLE `mydictionary`.`word` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `word` VARCHAR(30) NOT NULL,
    `mean` VARCHAR(60) NOT NULL,
    PRIMARY KEY  (`id`)
) ENGINE = InnoDB;

```


