CREATE DATABASE login;

USE login;

CREATE TABLE IF NOT EXISTS `usuarios` (
      `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
      `nome` VARCHAR( 50 ) NOT NULL ,
      `email` VARCHAR( 100 ) NOT NULL ,
      `senha` VARCHAR( 40 ) NOT NULL ,
      PRIMARY KEY (`id`),
      UNIQUE KEY `email` (`email`)
  ) ENGINE=MyISAM ;