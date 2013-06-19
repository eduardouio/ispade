-- --------------------------------------------------------------------------------
-- Modelo de Base de datos del proyecto de Fin de carrera 
-- @autor eduardouio@hotmail.es <@eduardouio> 
-- @version 1.0
-- @descripcion Modelo de la base de datos del proyecto CMS de ISPADE, este modelo 
-- contiene entidades que representan al CMS, se usar� el servidor de liposerve.com
-- para subir el modelo al igual que la appweb en http://isp.liposerve.com
-- La documentacion de este modelo se encuentra tanto en borradores fisicos como en 
-- Los commits de github en https://github.com/eduardouio/ispade/modelo
-- --------------------------------------------------------------------------------

  -- -----------------------------------------------------
  -- Base Datos
  -- -----------------------------------------------------

  CREATE SCHEMA liposerv_ispade;
  USE liposerv_ispade;

  -- -----------------------------------------------------
  -- Table `Liposerv_ispade`.`usuario`
  -- -----------------------------------------------------
  CREATE  TABLE IF NOT EXISTS `liposerv_ispade`.`user` (
    `id_usuario` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT ,
    `usuario` VARCHAR(40) NOT NULL ,
    `pass` VARCHAR(200) NOT NULL ,        
    `last_failure` DATETIME ,
    `failure_count` SMALLINT UNSIGNED ,
    `last_login` DATETIME ,
    `create` DATETIME ,
    `last_update` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
    PRIMARY KEY (`usuario`) ,
    UNIQUE INDEX `id_usuario_UNIQUE` (`id_usuario` ASC) 
    )
  ENGINE = InnoDB
  AUTO_INCREMENT = 1
  COMMENT = 'Tabla de usuarios, encargados de ingresar a la base de datos';

  -- -----------------------------------------------------
  -- Table `Liposerv_ispade`.`Paginas`
  -- -----------------------------------------------------    
  CREATE TABLE IF NOT EXISTS `liposerv_ispade`.`page`(
    `id_page` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,    
    `title` VARCHAR(500) NOT NULL,
    `url` VARCHAR(50) NOT NULL UNIQUE COMMENT 'Se acorta el título de la página para controlar que no se repita, se almacena el nombre del controlador de la página',
    `keywords` VARCHAR(500) NOT NULL,
    `create_date` DATETIME NOT NULL,
    `last_update` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id_page`)
    )
  ENGINE = InnoDB
  AUTO_INCREMENT = 1
  COMMENT = 'Listado de paginas del sitio, lás paginas se almacenan en forma de registros';

  -- -----------------------------------------------------
  -- Table `Liposerv_ispade`.`formulario`
  -- -----------------------------------------------------    
  CREATE TABLE IF NOT EXISTS `liposerv_ispade`.`form`(
    `id_form` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,    
    `names` VARCHAR(100) ,
    `email` VARCHAR(100) ,
    `empresa` VARCHAR(50) ,
    `telefono` VARCHAR(25) ,
    `asunto` VARCHAR(100) ,
    `descripcion` VARCHAR(1000),
    `browser` VARCHAR(250),
    `ip` VARCHAR(20),
    `pais` VARCHAR(50),
    `create_date` DATETIME,
    `last_update` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id_form`)
    )
  ENGINE = InnoDB
  AUTO_INCREMENT = 1
  COMMENT = 'Listado de paginas del sitio, lás paginas se almacenan en forma de registros';

  -- -----------------------------------------------------
  -- Table `Liposerv_ispade`.`formulario`
  -- -----------------------------------------------------    
  CREATE TABLE IF NOT EXISTS  `sessions` (
  session_id varchar(40) DEFAULT '0' NOT NULL,
  ip_address varchar(45) DEFAULT '0' NOT NULL,
  user_agent varchar(120) NOT NULL,
  last_activity int(10) unsigned DEFAULT 0 NOT NULL,
  user_data text NOT NULL,
  PRIMARY KEY (session_id),
  KEY `last_activity_idx` (`last_activity`)
);



  -- -----------------------------------------------------
  -- Table `Liposerv_ispade`.`articulos`
  -- -----------------------------------------------------  
  CREATE TABLE IF NOT EXISTS `liposerv_ispade`.`article`(    
    `id_article` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,    
    `id_page` SMALLINT UNSIGNED NOT NULL,    
    `title` VARCHAR(500) NOT NULL,
    `url` VARCHAR(300) NOT NULL COMMENT 'Se acorta el título de la página para controlar que no se repita, se almacena solo el nombre del articulo sin caracteres especiales separando las palabras por guines bajos',
    `image` VARCHAR(300) NOT NULL,        
    `content` MEDIUMTEXT NOT NULL,
    `counter` SMALLINT UNSIGNED NOT NULL,
    `visible` SMALLINT UNSIGNED NOT NULL COMMENT 'booleano que inidica si un articulo es visible o no',
    `create_date` DATETIME NOT NULL,
    `last_update` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `publish_down` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
    PRIMARY KEY (`id_article`),
    INDEX `fk_id_page_idx` (`id_page` ASC) ,
    CONSTRAINT `fk_id_page`
    FOREIGN KEY (`id_page` )
    REFERENCES `liposerv_ispade`.`page` (`id_page` )
    ON DELETE RESTRICT
    ON UPDATE CASCADE
)
  ENGINE = InnoDB
  AUTO_INCREMENT = 1
  COMMENT = 'Tabla encargada de manejar los articulos de la pagina, en imagen va el link de una imágen o un video'
;


-- =====================================================
-- -----------------------------------------------------
--  Vistas Que ayudan a manejar la base
-- -----------------------------------------------------
-- =====================================================

-- -----------------------------------------------------
--  Vistas que muestra los 10 articulos mas leidos
-- -----------------------------------------------------
CREATE VIEW v_ratings
AS
SELECT 
id_article, title, counter 
FROM article 
ORDER BY counter 
DESC LIMIT 10;

-- -----------------------------------------------------
--  Vistas que muestra el listado de noticias general
-- -----------------------------------------------------
CREATE VIEW v_tablon
as
SELECT 
id_article, id_page, url, title, CONCAT(LEFT(content,240),'...') AS content, counter, create_date 
FROM liposerv_ispade.article;