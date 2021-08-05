SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `mydb`;

-- -----------------------------------------------------
-- Table `mydb`.`program`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`program` (
  `prog_id` VARCHAR(10) NOT NULL ,
  `prog_name` VARCHAR(45) NOT NULL ,
  `description` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`prog_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`student`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`student` (
  `std_id` INT NOT NULL ,
  `std_name` VARCHAR(45) NOT NULL ,
  `std_fname` VARCHAR(45) NOT NULL ,
  `std_nic` VARCHAR(45) NOT NULL ,
  `std_dob` DATE NOT NULL ,
  `std_email_id` VARCHAR(45) NULL ,
  `std_religion` VARCHAR(45) NOT NULL ,
  `std_nationality` VARCHAR(45) NOT NULL ,
  `phone_no` VARCHAR(45) NULL ,
  `hafiz` VARCHAR(45) NULL ,
  `program_prog_id` VARCHAR(10) NOT NULL ,
  PRIMARY KEY (`std_id`) ,
  INDEX `fk_student_program` (`program_prog_id` ASC) ,
  CONSTRAINT `fk_student_program`
    FOREIGN KEY (`program_prog_id` )
    REFERENCES `mydb`.`program` (`prog_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`academic`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`academic` (
  `per_class` INT NOT NULL ,
  `per_rollNO` INT NOT NULL ,
  `obtain_marks` INT NOT NULL ,
  `total_marks` INT NOT NULL ,
  `board` VARCHAR(45) NOT NULL ,
  `grade` VARCHAR(45) NOT NULL ,
  `year` INT NOT NULL ,
  `student_std_id` INT NOT NULL ,
  PRIMARY KEY (`per_class`) ,
  INDEX `fk_academic_student1` (`student_std_id` ASC) ,
  CONSTRAINT `fk_academic_student1`
    FOREIGN KEY (`student_std_id` )
    REFERENCES `mydb`.`student` (`std_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`subject`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`subject` (
  `subject_id` VARCHAR(20) NOT NULL ,
  `name` VARCHAR(45) NULL ,
  PRIMARY KEY (`subject_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`teacher`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`teacher` (
  `teacher_id` INT NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  `fname` VARCHAR(45) NOT NULL ,
  `nic` VARCHAR(45) NOT NULL ,
  `dob` DATE NOT NULL ,
  `address` VARCHAR(45) NOT NULL ,
  `email_id` VARCHAR(45) NOT NULL ,
  `bps` INT NOT NULL ,
  `phone_no` INT NOT NULL ,
  `qualification` VARCHAR(45) NOT NULL ,
  `subject_subject_id` INT NOT NULL ,
  PRIMARY KEY (`teacher_id`) ,
  INDEX `fk_teacher_subject1` (`subject_subject_id` ASC) ,
  CONSTRAINT `fk_teacher_subject1`
    FOREIGN KEY (`subject_subject_id` )
    REFERENCES `mydb`.`subject` (`subject_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`combination`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`combination` (
  `comb_id` VARCHAR(20) NOT NULL ,
  `subject1` VARCHAR(45) NOT NULL ,
  `subject2` VARCHAR(45) NOT NULL ,
  `subject3` VARCHAR(45) NOT NULL ,
  `program_prog_id` VARCHAR(10) NOT NULL ,
  PRIMARY KEY (`comb_id`) ,
  INDEX `fk_combination_program1` (`program_prog_id` ASC) ,
  CONSTRAINT `fk_combination_program1`
    FOREIGN KEY (`program_prog_id` )
    REFERENCES `mydb`.`program` (`prog_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`combination_has_subject`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`combination_has_subject` (
  `combination_comb_id` VARCHAR(20) NOT NULL ,
  `subject_subject_id` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`combination_comb_id`, `subject_subject_id`) ,
  INDEX `fk_combination_has_subject_combination1` (`combination_comb_id` ASC) ,
  INDEX `fk_combination_has_subject_subject1` (`subject_subject_id` ASC) ,
  CONSTRAINT `fk_combination_has_subject_combination1`
    FOREIGN KEY (`combination_comb_id` )
    REFERENCES `mydb`.`combination` (`comb_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_combination_has_subject_subject1`
    FOREIGN KEY (`subject_subject_id` )
    REFERENCES `mydb`.`subject` (`subject_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`merit list`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`merit list` (
  `list_no` INT NOT NULL ,
  `date` DATE NOT NULL ,
  `prog_name` VARCHAR(45) NOT NULL ,
  `fee_date` DATE NOT NULL ,
  `student_std_id` INT NOT NULL ,
  PRIMARY KEY (`list_no`, `date`) ,
  INDEX `fk_merit list_student1` (`student_std_id` ASC) ,
  CONSTRAINT `fk_merit list_student1`
    FOREIGN KEY (`student_std_id` )
    REFERENCES `mydb`.`student` (`std_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
