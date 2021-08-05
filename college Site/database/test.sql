SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `mydb`;

-- -----------------------------------------------------
-- Table `mydb`.`student`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`student` (
  `std_id` INT NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  `fname` VARCHAR(45) NULL ,
  PRIMARY KEY (`std_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`academic`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`academic` (
  `class` INT NOT NULL ,
  `rollno` INT NOT NULL ,
  `mrks` VARCHAR(45) NOT NULL ,
  `student_std_id` INT NOT NULL ,
  INDEX `fk_academic_student` (`student_std_id` ASC) ,
  CONSTRAINT `fk_academic_student`
    FOREIGN KEY (`student_std_id` )
    REFERENCES `mydb`.`student` (`std_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
