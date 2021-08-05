-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 25, 2011 at 06:48 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE IF NOT EXISTS `academic` (
  `per_class` varchar(15) NOT NULL,
  `per_rollNO` int(11) NOT NULL,
  `obtain_marks` int(11) NOT NULL,
  `total_marks` int(11) NOT NULL,
  `board` varchar(20) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `year` int(11) NOT NULL,
  `regNO` varchar(20) NOT NULL,
  `std_id` int(11) NOT NULL,
  PRIMARY KEY (`regNO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic`
--


-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uname` varchar(20) NOT NULL,
  `upass` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `upass`) VALUES
('admin', 'admin'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admission_detail`
--

CREATE TABLE IF NOT EXISTS `admission_detail` (
  `admission_id` int(11) NOT NULL AUTO_INCREMENT,
  `prog_id` varchar(10) NOT NULL,
  `seats` int(11) NOT NULL,
  `last_date` date NOT NULL,
  `first_merit` date NOT NULL,
  `second_merit` date NOT NULL,
  `third_merit` date NOT NULL,
  PRIMARY KEY (`admission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `admission_detail`
--


-- --------------------------------------------------------

--
-- Table structure for table `combination`
--

CREATE TABLE IF NOT EXISTS `combination` (
  `comb_id` varchar(20) NOT NULL,
  `subject1` varchar(15) NOT NULL,
  `subject2` varchar(15) NOT NULL,
  `subject3` varchar(15) NOT NULL,
  `prog_id` varchar(15) NOT NULL,
  PRIMARY KEY (`comb_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `combination`
--

INSERT INTO `combination` (`comb_id`, `subject1`, `subject2`, `subject3`, `prog_id`) VALUES
('1', 'Physics', 'Chemistry', 'Biology', 'p1'),
('2', 'Physics', 'Chemistry', 'Math', 'p1'),
('3', 'Islamiyat', 'History', 'Education', 'p2'),
('4', 'Islamiyat', 'History', 'English Litratu', 'p2'),
('5', 'Islamiyat', 'History', 'Arbi', 'p2'),
('6', 'Islamiyat', 'History', 'Pharsi', 'p2'),
('7', 'Islamiyat', 'History', 'Computer', 'p2'),
('8', 'Islamiyat', 'Geographia', 'Education', 'p2'),
('9', 'Islamiyat', 'Geographia', 'Arbi', 'p2'),
('10', 'Islamiyat', 'Geographia', 'Pharsi', 'p2'),
('11', 'Islamiyat', 'Economics', 'Education', 'p2'),
('12', 'Islamiyat', 'English Litratu', 'Economics', 'p2'),
('13', 'Physics', 'Math', 'Computer', 'p3'),
('14', 'Economics', 'Math', 'Math', 'p3'),
('15', 'test', 'test', 'test', 'p1'),
('17', 'af', 'ad', 'dg', 'p4'),
('18', 'test', 'test', 'test', 'p5');

-- --------------------------------------------------------

--
-- Table structure for table `combination_has_subject`
--

CREATE TABLE IF NOT EXISTS `combination_has_subject` (
  `subject_id` varchar(20) NOT NULL,
  `comb_id` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `combination_has_subject`
--

INSERT INTO `combination_has_subject` (`subject_id`, `comb_id`) VALUES
('1', '1'),
('1', '2'),
('1', '3'),
('2', '1'),
('2', '2'),
('2', '4'),
('3', '7'),
('3', '9'),
('3', '12'),
('4', '7'),
('4', '9'),
('4', '13'),
('5', '7'),
('5', '9'),
('5', '15'),
('6', '7'),
('6', '9'),
('6', '14'),
('7', '5'),
('7', '7'),
('7', '9'),
('8', '7'),
('8', '10'),
('8', '12'),
('9', '7'),
('9', '10'),
('9', '15'),
('10', '7'),
('10', '10'),
('10', '14'),
('11', '6'),
('11', '7'),
('11', '12'),
('12', '6'),
('12', '11'),
('12', '13'),
('13', '1'),
('13', '4'),
('13', '5'),
('14', '4'),
('14', '5'),
('14', '6');

-- --------------------------------------------------------

--
-- Table structure for table `merit list`
--

CREATE TABLE IF NOT EXISTS `merit list` (
  `list_no` int(11) NOT NULL,
  `date` date NOT NULL,
  `prog_name` varchar(45) NOT NULL,
  `fee_date` date NOT NULL,
  `student_std_id` int(11) NOT NULL,
  PRIMARY KEY (`list_no`,`date`),
  KEY `fk_merit list_student1` (`student_std_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merit list`
--


-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `Description`, `date`) VALUES
(5, 'News', 'this is new news', '0000-00-00'),
(4, 'News', '', '0000-00-00'),
(6, 'BSCS', 'Admission for BSCS open\r\n', '0000-00-00'),
(7, 'News', 'this is new news', '0000-00-00'),
(9, 'Results', 'results will be anouced in janurary', '0000-00-00'),
(15, 'Results', 'adsfsdf', '2011-10-28');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE IF NOT EXISTS `program` (
  `prog_id` varchar(30) NOT NULL,
  `prog_name` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  PRIMARY KEY (`prog_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`prog_id`, `prog_name`, `description`) VALUES
('p1', 'F.Sc.', 'Faculty of science'),
('p2', 'F.A', 'Faculty of Arts'),
('p3', 'I.C.S', 'Intermadiate computer science'),
('p4', 'B.Sc', 'Bachelor of Science'),
('p5', 'B.A', 'Bachelor of Arts');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `std_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_name` varchar(25) NOT NULL,
  `std_fname` varchar(25) NOT NULL,
  `std_nic` varchar(15) NOT NULL,
  `std_dob` date NOT NULL,
  `std_email_Id` varchar(30) NOT NULL,
  `std_religion` varchar(15) NOT NULL,
  `domicile` varchar(15) NOT NULL,
  `std_nationality` varchar(15) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `hafiz` varchar(5) NOT NULL,
  `prog_id` varchar(10) NOT NULL,
  `comb_id` varchar(10) NOT NULL,
  `address` varchar(35) NOT NULL,
  PRIMARY KEY (`std_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `student`
--


-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `name`) VALUES
('1', 'Physics'),
('2', 'Chemistry'),
('3', 'Biology'),
('4', 'Math'),
('5', 'Computer'),
('6', 'Economics'),
('7', 'Islamiyat'),
('8', 'Physical Eduction'),
('9', 'History'),
('10', 'Geographia'),
('11', 'Library Science'),
('12', 'Education'),
('13', 'English Litrartural'),
('14', 'Pharsi'),
('15', 'Arbi'),
('16', 'Advance Urdu'),
('17', 'Math A&B'),
('18', 'General Math'),
('19', 'Sociology'),
('20', 'Zoology'),
('21', 'Botany');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `nic` varchar(45) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(45) NOT NULL,
  `email_id` varchar(45) NOT NULL,
  `bps` int(11) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `qualification` varchar(45) NOT NULL,
  `subject_id` varchar(20) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

