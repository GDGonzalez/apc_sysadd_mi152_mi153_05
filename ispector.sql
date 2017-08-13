-- MySQL Script generated by MySQL Workbench
-- Sun Aug 13 12:30:27 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ispector
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ispector
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ispector` DEFAULT CHARACTER SET utf8 ;
USE `ispector` ;

-- -----------------------------------------------------
-- Table `ispector`.`POSITION`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ispector`.`POSITION` (
  `id` INT NOT NULL,
  `pos_decription` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ispector`.`DEPARTMENT`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ispector`.`DEPARTMENT` (
  `id` INT NOT NULL,
  `department_name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ispector`.`EMPLOYEE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ispector`.`EMPLOYEE` (
  `id` INT NOT NULL,
  `emp_no` INT NULL,
  `emp_lname` VARCHAR(45) NULL,
  `emp_fname` VARCHAR(45) NULL,
  `emp_mname` VARCHAR(45) NULL,
  `DEPARTMENT_id` INT NOT NULL,
  `POSITION_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_EMPLOYEE_DEPARTMENT1`
    FOREIGN KEY (`DEPARTMENT_id`)
    REFERENCES `ispector`.`DEPARTMENT` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EMPLOYEE_POSITION1`
    FOREIGN KEY (`POSITION_id`)
    REFERENCES `ispector`.`POSITION` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ispector`.`HOUSEKEEPING_CHECKLIST`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ispector`.`HOUSEKEEPING_CHECKLIST` (
  `id` INT NOT NULL,
  `checklist_description` VARCHAR(45) NULL,
  `checklist_result` VARCHAR(45) NULL,
  `checklist_comments` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ispector`.`ASSESSMENT`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ispector`.`ASSESSMENT` (
  `id` INT NOT NULL,
  `date_assessment_start` DATETIME NULL,
  `date_assessment_end` DATETIME NULL,
  `assessment_summary` VARCHAR(45) NULL,
  `assessment_recommendation` VARCHAR(45) NULL,
  `housekeepingsupervisor` INT NOT NULL,
  `housekeeping_staff` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_ASSESSMENT_EMPLOYEE1`
    FOREIGN KEY (`housekeepingsupervisor`)
    REFERENCES `ispector`.`EMPLOYEE` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ASSESSMENT_EMPLOYEE2`
    FOREIGN KEY (`housekeeping_staff`)
    REFERENCES `ispector`.`EMPLOYEE` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ispector`.`WORKSCHEDULE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ispector`.`WORKSCHEDULE` (
  `id` INT NOT NULL,
  `shift_name` VARCHAR(45) NULL,
  `shift_start_time` TIME(5) NULL,
  `shift_end_time` TIME(5) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ispector`.`ROOM_TYPE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ispector`.`ROOM_TYPE` (
  `id` INT NOT NULL,
  `room_type` VARCHAR(45) NULL,
  `room_description` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ispector`.`ROOM`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ispector`.`ROOM` (
  `id` INT NOT NULL,
  `room_no` VARCHAR(45) NULL,
  `ROOM_TYPE_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_ROOM_ROOM_TYPE1`
    FOREIGN KEY (`ROOM_TYPE_id`)
    REFERENCES `ispector`.`ROOM_TYPE` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ispector`.`INSPECTION_CHECKLIST`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ispector`.`INSPECTION_CHECKLIST` (
  `id` INT NOT NULL,
  `checklist_description` INT NOT NULL,
  `checklist_comments` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ispector`.`EMPLOYEE_CLEANS_ROOM`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ispector`.`EMPLOYEE_CLEANS_ROOM` (
  `id` INT NOT NULL,
  `ROOM_room_id` INT NOT NULL,
  `HOUSEKEEPING_CHECKLIST_id` INT NOT NULL,
  `INSPECTION_CHECKLIST_id` INT NOT NULL,
  `room_inspected` VARCHAR(1) NULL,
  `hkeeping_timein` TIMESTAMP(5) NULL,
  `hkeeping_timeout` TIMESTAMP(5) NULL,
  `inspection_timein` TIMESTAMP(5) NULL,
  `inspection_timeout` TIMESTAMP(5) NULL,
  `inspect_room` VARCHAR(45) NULL,
  `houkeepingsupervisor` INT NOT NULL,
  `housekeeping_staff` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_EMPLOYEE_has_ROOM_ROOM1`
    FOREIGN KEY (`ROOM_room_id`)
    REFERENCES `ispector`.`ROOM` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EMPLOYEE_CLEANS_ROOM_CHECKLIST1`
    FOREIGN KEY (`HOUSEKEEPING_CHECKLIST_id`)
    REFERENCES `ispector`.`HOUSEKEEPING_CHECKLIST` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EMPLOYEE_CLEANS_ROOM_INSPECTION_CHECKLIST1`
    FOREIGN KEY (`INSPECTION_CHECKLIST_id`)
    REFERENCES `ispector`.`INSPECTION_CHECKLIST` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EMPLOYEE_CLEANS_ROOM_EMPLOYEE1`
    FOREIGN KEY (`houkeepingsupervisor`)
    REFERENCES `ispector`.`EMPLOYEE` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EMPLOYEE_CLEANS_ROOM_EMPLOYEE2`
    FOREIGN KEY (`housekeeping_staff`)
    REFERENCES `ispector`.`EMPLOYEE` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ispector`.`EMPLOYEE_has_WORKSCHEDULE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ispector`.`EMPLOYEE_has_WORKSCHEDULE` (
  `EMPLOYEE_id` INT NOT NULL,
  `WORKSCHEDULE_id` INT NOT NULL,
  `time_in` DATETIME NULL,
  `time_out` DATETIME NULL,
  CONSTRAINT `fk_EMPLOYEE_has_WORKSCHEDULE_EMPLOYEE1`
    FOREIGN KEY (`EMPLOYEE_id`)
    REFERENCES `ispector`.`EMPLOYEE` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EMPLOYEE_has_WORKSCHEDULE_WORKSCHEDULE1`
    FOREIGN KEY (`WORKSCHEDULE_id`)
    REFERENCES `ispector`.`WORKSCHEDULE` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;