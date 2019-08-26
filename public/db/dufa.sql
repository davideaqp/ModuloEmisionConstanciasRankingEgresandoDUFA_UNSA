CREATE DATABASE dufa;
USE dufa;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


DROP TABLE IF EXISTS `alumno`;
CREATE TABLE IF NOT EXISTS `alumno` (
  `Alu_Cod` INT NOT NULL AUTO_INCREMENT,
  `Alu_Cui` INT NULL,
  `Alu_Nom` VARCHAR(100) NULL,
  PRIMARY KEY (`Alu_Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `alumno_escuela`;
CREATE TABLE IF NOT EXISTS `alumno_escuela` (
  `Alu_Esc_Cod` INT NOT NULL AUTO_INCREMENT,
  `Alu_Esc_Ing` VARCHAR(45) NULL,
  `Escuela_Esc_Cod` INT NOT NULL,
  `Alumno_Alu_Cod` INT NOT NULL,
  PRIMARY KEY (`Alu_Esc_Cod`),
  KEY `fk_Alumno_Escuela_Escuela1_idx` (`Escuela_Esc_Cod`),
  KEY `fk_Alumno_Escuela_Alumno1_idx` (`Alumno_Alu_Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `autoridad`;
CREATE TABLE IF NOT EXISTS `autoridad`(
  `Aut_Cod` INT NOT NULL AUTO_INCREMENT,
  `Aut_Nom` VARCHAR(100) NULL,
  `Aut_Est` INT NULL,
  PRIMARY KEY (`Aut_Cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `constancia_egresado`;
CREATE TABLE IF NOT EXISTS `constancia_egresado` (
  `Cons_Cod` INT NOT NULL AUTO_INCREMENT,
  `Cons_Fec_Tra` DATE NULL,
  `Cons_Mes` VARCHAR(45) NULL,
  `Cons_Obs` VARCHAR(100) NULL,
  `Cons_Est` INT NULL,
  `Director_Dir_Cod` INT NOT NULL,
  `Autoridad_Aut_Cod` INT NOT NULL,
  `Egresado_Egr_Cod` INT NOT NULL,
  `Operador_Ope_Cod` INT NOT NULL,
  PRIMARY KEY (`Cons_Cod`),
  KEY `fk_Constancia_Egresado_Director1` (`Director_Dir_Cod`),
  KEY `fk_Constancia_Egresado_Autoridad1` (`Autoridad_Aut_Cod`),
  kEY `fk_Constancia_Egresado_Egresado1` (`Egresado_Egr_Cod`),
  KEY `fk_Constancia_Egresado_Operador1` (`Operador_Ope_Cod`)
  )ENGINE=InnoDB DEFAULT CHARSET=utf8;

  DROP TABLE IF EXISTS `constancia_ranking`;
  CREATE TABLE IF NOT EXISTS `constancia_ranking` (
    `Cons_Ran_Cod` INT NOT NULL AUTO_INCREMENT,
    `Cons_Ran_Cor` VARCHAR(45) NULL,
    `Cons_Ran_Fec` DATE NULL,
    `Cons_Ran_Rec` VARCHAR(10) NULL,
    `Operador_Ope_Cod` INT NOT NULL,
    `Det_Ranking_Escuela_Det_Ran_Esc_Cod` INT NOT NULL,
    PRIMARY KEY (`Cons_Ran_Cod`),
    KEY `fk_Constancia_Ranking_Operador1` (`Operador_Ope_Cod`),
    KEY `fk_Constancia_Ranking_Det_Ranking_Escuela1` (`Det_Ranking_Escuela_Det_Ran_Esc_Cod`)
    )ENGINE=InnoDB DEFAULT CHARSET=utf8;


    DROP TABLE IF EXISTS `det_ranking_escuela`;
    CREATE TABLE IF NOT EXISTS `det_ranking_escuela`(
      `Det_Ran_Esc_Cod` INT NOT NULL AUTO_INCREMENT,
      `Det_Ran_Esc_Pue` INT NULL,
      `Det_Ran_Esc_Pon` DECIMAL NULL,
      `Det_Ran_Esc_Cre` DECIMAL NULL,
      `Det_Ran_Esc_Cur` INT NULL,
      `Det_Ran_Esc_Mat` INT NULL,
      `Det_Ran_Esc_Anio` INT NULL,
      `Det_Ran_Esc_Tot` INT NULL,
      `Det_Ran_Esc_Gra` INT NULL,
      `Alumno_Escuela_Alu_Esc_Cod` INT NOT NULL,
      PRIMARY KEY (`Det_Ran_Esc_Cod`),
      KEY `fk_Det_Ranking_Escuela_Alumno_Escuela1` (`Alumno_Escuela_Alu_Esc_Cod`)
      )ENGINE=InnoDB DEFAULT CHARSET=utf8;


      DROP TABLE IF EXISTS `director`;
      CREATE TABLE IF NOT EXISTS `director`(
        `Dir_Cod` INT NOT NULL AUTO_INCREMENT,
        `Dir_Nom` VARCHAR(100) NULL,
        `Dir_Est` INT NULL,
        PRIMARY KEY (`Dir_Cod`)
      )ENGINE=InnoDB DEFAULT CHARSET=utf8;

      DROP TABLE IF EXISTS `egresado`;
      CREATE TABLE IF NOT EXISTS `egresado` (
        `Egr_Cod` INT NOT NULL AUTO_INCREMENT,
        `Egr_Cor` VARCHAR(45) NULL,
        `Egr_Nombre` VARCHAR(100) NULL,
        `Egre_Cre` DECIMAL(4,1) NULL,
        `Egr_Grado` VARCHAR(100) NULL,
        `Egr_Fec` DATE NULL,
        `Tipo_Tip_Cod` INT NOT NULL,
        `Escuela_Esc_Cod` INT NOT NULL,
        PRIMARY KEY (`Egr_Cod`),
        KEY `fk_Egresado_Tipo1` (`Tipo_Tip_Cod`),
        KEY `fk_Egresado_Escuela1` (`Escuela_Esc_Cod`)
      )ENGINE=InnoDB DEFAULT CHARSET=utf8;

      DROP TABLE IF EXISTS `escuela`;
      CREATE TABLE IF NOT EXISTS `escuela`(
        `Esc_Cod` INT NOT NULL AUTO_INCREMENT,
        `Esc_Nom` VARCHAR(45) NULL,
        `Esc_Acr` VARCHAR(45) NULL,
        `Esc_Est` INT NULL,
        `Facultad_Fac_Cod` INT NOT NULL,
        PRIMARY KEY (`Esc_Cod`),
        KEY `fk_Escuela_Facultad1` (`Facultad_Fac_Cod`)
        )ENGINE=InnoDB DEFAULT CHARSET=utf8;


        DROP TABLE IF EXISTS `especialidad`;
        CREATE TABLE IF NOT EXISTS `especialidad`(
          `Esp_Cod` INT NOT NULL AUTO_INCREMENT,
          `Esp_Nom` VARCHAR(100) NULL,
          `Esp_Est` INT NULL,
          `Escuela_Esc_Cod` INT NOT NULL,
          PRIMARY KEY (`Esp_Cod`),
          KEY `fk_Especialidad_Escuela1` (`Escuela_Esc_Cod`)
          )ENGINE=InnoDB DEFAULT CHARSET=utf8;

          DROP TABLE IF EXISTS `facultad`;
          CREATE TABLE IF NOT EXISTS `facultad`(
            `Fac_Cod` INT NOT NULL AUTO_INCREMENT,
            `Fac_Nom` VARCHAR(100) NULL,
            `Fac_Acr` VARCHAR(45) NULL,
            `Fac_Est` INT NULL,
            PRIMARY KEY (`Fac_Cod`)
          )ENGINE=InnoDB DEFAULT CHARSET=utf8;


          DROP TABLE IF EXISTS `operador`;
          CREATE TABLE IF NOT EXISTS `operador`(
            `Ope_Cod` INT NOT NULL AUTO_INCREMENT,
            `Ope_Nom` VARCHAR(100) NULL,
            `Ope_User` VARCHAR(45) NULL,
            `Ope_Pas` VARCHAR(45) NULL,
            `Ope_Mail` VARCHAR(45) NULL,
            `Ope_Per` INT NULL,
            `Ope_Est` INT NULL,
            PRIMARY KEY (`Ope_Cod`)
          )ENGINE=InnoDB DEFAULT CHARSET=utf8;


          DROP TABLE IF EXISTS `tipo`;
          CREATE TABLE IF NOT EXISTS `tipo`(
            `Tip_Cod` INT NOT NULL AUTO_INCREMENT,
            `Tip_Nombre` VARCHAR(100) NULL,
            `Tip_Est` INT NULL,
            PRIMARY KEY (`Tip_Cod`)
          )ENGINE=InnoDB DEFAULT CHARSET=utf8;


          DROP TABLE IF EXISTS `grado`;
          CREATE TABLE IF NOT EXISTS `grado` (
            `Gra_Cod` INT NOT NULL AUTO_INCREMENT,
            `Gra_Nom` VARCHAR(100) NULL,
            `Gra_Est` INT NULL,
            `Escuela_Esc_Cod` INT NOT NULL,
            PRIMARY KEY (`Gra_Cod`),
            KEY `fk_Grado_Escuela1` (`Escuela_Esc_Cod`)
          )ENGINE=InnoDB DEFAULT CHARSET=utf8;

          DROP TABLE IF EXISTS `segunda_especialidad`;
          CREATE TABLE IF NOT EXISTS `segunda_especialidad` (
            `Seg_Esp_Cod` INT NOT NULL AUTO_INCREMENT,
            `Seg_Esp_Nom` VARCHAR(100) NULL,
            `Seg_Est` INT NULL,
            `Escuela_Esc_Cod` INT NOT NULL,
            PRIMARY KEY (`Seg_Esp_Cod`),
            KEY `fk_Segunda_Especialidad_Escuela1` (`Escuela_Esc_Cod`)
          )ENGINE=InnoDB DEFAULT CHARSET=utf8;


          DROP TABLE IF EXISTS `grado_seg`;
          CREATE TABLE IF NOT EXISTS `grado_seg` (
            `Gra_Seg_Cod` INT NOT NULL AUTO_INCREMENT,
            `Gra_Seg_Nom` VARCHAR(100) NULL,
            `Gra_Seg_Est` INT NULL,
            `Segunda_Especialidad_Seg_Esp_Cod` INT NOT NULL,
            PRIMARY KEY (`Gra_Seg_Cod`),
            KEY  `fk_Grado_Seg_Segunda_Especialidad1` (`Segunda_Especialidad_Seg_Esp_Cod`)
          )ENGINE=InnoDB DEFAULT CHARSET=utf8;



ALTER TABLE `alumno_escuela`
ADD CONSTRAINT `fk_Alumno_Escuela_Escuela1` FOREIGN KEY (`Escuela_Esc_Cod`) REFERENCES `escuela` (`Esc_Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Alumno_Escuela_Alumno1`  FOREIGN KEY (`Alumno_Alu_Cod`) REFERENCES `alumno` (`Alu_Cod`) ON DELETE NO ACTION   ON UPDATE NO ACTION;

ALTER TABLE `constancia_egresado`
ADD CONSTRAINT `fk_Constancia_Egresado_Director1` FOREIGN KEY (`Director_Dir_Cod`) REFERENCES `director` (`Dir_Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Constancia_Egresado_Autoridad1` FOREIGN KEY (`Autoridad_Aut_Cod`) REFERENCES `autoridad` (`Aut_Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Constancia_Egresado_Egresado1` FOREIGN KEY (`Egresado_Egr_Cod`) REFERENCES `egresado` (`Egr_Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Constancia_Egresado_Operador1` FOREIGN KEY (`Operador_Ope_Cod`) REFERENCES `operador` (`Ope_Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `constancia_ranking`
ADD CONSTRAINT `fk_Constancia_Ranking_Operador1` FOREIGN KEY (`Operador_Ope_Cod`) REFERENCES `operador` (`Ope_Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Constancia_Ranking_Det_Ranking_Escuela1` FOREIGN KEY (`Det_Ranking_Escuela_Det_Ran_Esc_Cod`) REFERENCES `det_ranking_escuela` (`Det_Ran_Esc_Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `det_ranking_escuela`
ADD CONSTRAINT `fk_Det_Ranking_Escuela_Alumno_Escuela1` FOREIGN KEY (`Alumno_Escuela_Alu_Esc_Cod`) REFERENCES `alumno_escuela` (`Alu_Esc_Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `egresado`
ADD CONSTRAINT `fk_Egresado_Tipo1` FOREIGN KEY (`Tipo_Tip_Cod`) REFERENCES `tipo` (`Tip_Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Egresado_Escuela1` FOREIGN KEY (`Escuela_Esc_Cod`) REFERENCES `escuela` (`Esc_Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `escuela`
ADD CONSTRAINT `fk_Escuela_Facultad1` FOREIGN KEY (`Facultad_Fac_Cod`) REFERENCES `facultad` (`Fac_Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `especialidad`
ADD CONSTRAINT `fk_Especialidad_Escuela1` FOREIGN KEY (`Escuela_Esc_Cod`) REFERENCES `escuela` (`Esc_Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `grado`
ADD CONSTRAINT `fk_Grado_Escuela1` FOREIGN KEY (`Escuela_Esc_Cod`) REFERENCES `escuela` (`Esc_Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `segunda_especialidad`
ADD CONSTRAINT `fk_Segunda_Especialidad_Escuela1` FOREIGN KEY (`Escuela_Esc_Cod`) REFERENCES `escuela` (`Esc_Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `grado_seg`
ADD CONSTRAINT `fk_Grado_Seg_Segunda_Especialidad1` FOREIGN KEY (`Segunda_Especialidad_Seg_Esp_Cod`) REFERENCES `segunda_especialidad` (`Seg_Esp_Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;
