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
  -- Table `Liposerv_ispade`.`usuario`
  -- -----------------------------------------------------
  CREATE  TABLE IF NOT EXISTS `liposerv_ispade`.`usuario` (
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



CREATE TABLE IF NOT EXISTS `liposerv_ispade`.`articulo`(
id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
fecha DATETIME NOT NULL,
last_update TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

) ENGINE = InnoDB;
