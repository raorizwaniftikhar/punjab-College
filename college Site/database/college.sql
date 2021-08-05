SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 ;
USE `mydb`;

-- -----------------------------------------------------
-- Table `mydb`.`student`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`student` (
  `std_id` VARCHAR(20) NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  `fname` VARCHAR(45) NOT NULL ,
  `nic` VARCHAR(45) NOT NULL ,
  `dob` DATE NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `nationality` VARCHAR(45) NOT NULL ,
  `phone_no` INT NOT NULL ,
  PRIMARY KEY (`std_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`student`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`student` (
  `std_id` VARCHAR(20) NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  `fname` VARCHAR(45) NOT NULL ,
  `nic` VARCHAR(45) NOT NULL ,
  `dob` DATE NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `nationality` VARCHAR(45) NOT NULL ,
  `phone_no` INT NOT NULL ,
  PRIMARY KEY (`std_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`acadmic`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`acadmic` (
  `std_id` VARCHAR(20) NOT NULL ,
  `per_class` VARCHAR(45) NOT NULL ,
  `per_roll_no` INT NOT NULL ,
  `obtain_marks` INT NOT NULL ,
  `total_marks` INT NOT NULL ,
  `board` VARCHAR(45) NOT NULL ,
  `grade` VARCHAR(45) NOT NULL ,
  `year` INT NOT NULL ,
  `student_std_id` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`per_class`) ,
  INDEX `fk_acadmic_student` (`student_std_id` ASC) ,
  CONSTRAINT `fk_acadmic_student`
    FOREIGN KEY (`student_std_id` )
    REFERENCES `mydb`.`student` (`std_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
