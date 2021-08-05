-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2012 at 08:05 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE IF NOT EXISTS `academic` (
  `per_class` varchar(15) NOT NULL,
  `group` varchar(15) NOT NULL,
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

INSERT INTO `academic` (`per_class`, `group`, `per_rollNO`, `obtain_marks`, `total_marks`, `board`, `grade`, `year`, `regNO`, `std_id`) VALUES
('matric', 'Arts', 123416, 560, 850, 'D.G.Khan', '1st', 2005, '16-dg43-2003', 76),
('matric', 'Arts', 123415, 450, 850, 'D.G.Khan', '2nd', 2005, '15-dg43-2003', 75),
('matric', 'Arts', 123414, 551, 850, 'D.G.Khan', '1st', 2004, '14-dg43-2003', 74),
('matric', 'Arts', 123413, 530, 850, 'D.G.Khan', '1st', 2004, '13-dg43-2003', 73),
('matric', 'Arts', 123412, 618, 850, 'D.G.Khan', '1st', 2005, '12-dg43-2003', 72),
('matric', 'Arts', 123411, 400, 850, 'D.G.Khan', '2nd', 2005, '11-dg42-2003', 71),
('matric', 'Science', 123410, 613, 850, 'D.G.Khan', '1st', 2004, '10-dg42-2002', 70),
('matric', 'Science', 123409, 580, 850, 'D.G.Khan', '1st', 2004, '09-dg42-2002', 69),
('matric', 'Science', 123408, 460, 850, 'D.G.Khan', '2nd', 2005, '08-dg42-2003', 68),
('matric', 'Science', 123407, 462, 850, 'D.G.Khan', '2nd', 2004, '07-dg42-2002', 67),
('matric', 'Science', 123406, 546, 850, 'D.G.Khan', '1st', 2003, '06-dg40-2001', 66),
('matric', 'Science', 12305, 661, 850, 'D.G.Khan', '1st', 2004, '05-dg40-2001', 65),
('matric', 'Science', 123465, 630, 850, 'D.G.Khan', '1st', 2004, '04-dg40-2002', 64),
('matric', 'Science', 21435, 652, 850, 'D.G.Khan', '1st', 2004, '03-dg42-2002', 63),
('matric', 'Science', 21345, 455, 850, 'D.G.Khan', '2nd', 2003, '02-dg42-2001', 62),
('matric', 'Arts', 12345, 710, 850, 'D.G.Khan', '1st', 2002, '01-dg42-2000', 61),
('matric', 'Arts', 123417, 538, 850, 'D.G.Khan', '1st', 2005, '17-dg43-2003', 77),
('matric', 'Science', 123418, 610, 850, 'D.G.Khan', '1st', 2004, '18-dg44-2003', 78),
('matric', 'Science', 123419, 520, 850, 'D.G.Khan', '1st', 2004, '19-dg42-2003', 79),
('matric', 'Science', 123420, 501, 850, 'D.G.Khan', '2nd', 2004, '20-dg42-2002', 80),
('matric', 'Science', 123421, 450, 850, 'D.G.Khan', '2nd', 2004, '21-dg42-2002', 81),
('matric', 'Science', 123422, 515, 850, 'D.G.Khan', '1st', 2004, '22-dg42-2002', 82),
('matric', 'Science', 123423, 610, 850, 'D.G.Khan', '1st', 2004, '23-dg42-2002', 83),
('matric', 'Science', 123423, 510, 850, 'D.G.Khan', '1st', 2004, '24-dg42-2002', 84),
('matric', 'Science', 12326, 512, 850, 'D.G.Khan', '1st', 2004, '25-dg42-2002', 85),
('Intermediate', 'Science', 32126, 740, 1100, 'D.G.Khan', '1st', 2006, '25-dg44-2004', 85),
('matric', 'Science', 123425, 556, 850, 'D.G.Khan', '1st', 2004, '26-dg42-2002', 86),
('Intermediate', 'Science', 32126, 801, 1100, 'D.G.Khan', '1st', 2006, '26-dg44-2004', 86),
('matric', 'Science', 12328, 490, 850, 'D.G.Khan', '2nd', 2003, '27-dg42-2002', 87),
('Intermediate', 'Science', 32127, 872, 1100, 'D.G.Khan', '1st', 2003, '27-dg44-2004', 87),
('matric', 'Science', 12329, 567, 850, 'D.G.Khan', '1st', 2003, '28-dg42-2002', 88),
('Intermediate', 'Science', 32128, 630, 1100, 'D.G.Khan', '2nd', 2005, '28-dg44-2004', 88),
('matric', 'Science', 123429, 581, 850, 'D.G.Khan', '1st', 2003, '29-dg42-2002', 89),
('matric', 'Science', 12330, 630, 850, 'Multan', '1st', 2004, '30-dg42-2002', 90),
('Intermediate', 'Science', 32130, 745, 1100, 'D.G.Khan', '1st', 2006, '30-dg44-2004', 90),
('matric', 'Science', 123431, 444, 850, 'D.G.Khan', '2nd', 2004, '31-dg42-2002', 91),
('Intermediate', 'Science', 32131, 723, 1100, 'Multan', '1st', 2006, '31-dg44-2004', 91),
('matric', 'Science', 123432, 510, 850, 'D.G.Khan', '1st', 2003, '32-dg42-2002', 92),
('Intermediate', 'Science', 32132, 680, 1100, 'Multan', '1st', 2006, '32-dg44-2004', 92),
('matric', 'Science', 123434, 457, 850, 'D.G.Khan', '2nd', 2004, '34-dg42-2002', 93),
('Intermediate', 'Science', 32134, 745, 1100, 'D.G.Khan', '1st', 2006, '34-dg44-2004', 93),
('matric', 'Arts', 12335, 534, 850, 'Multan', '1st', 2003, '35-dg42-2002', 94),
('Intermediate', 'Arts', 32135, 830, 1100, 'D.G.Khan', '1st', 2006, '35-dg44-2004', 94),
('matric', 'Arts', 123436, 532, 850, 'Sahiwall', '1st', 2004, '36-dg42-2002', 95),
('Intermediate', 'Arts', 321236, 740, 1100, 'D.G.Khan', '1st', 2006, '36-dg44-2004', 95),
('matric', 'Arts', 123436, 555, 850, 'D.G.Khan', '1st', 2003, '37-dg42-2002', 96),
('Intermediate', 'Arts', 321237, 666, 1100, 'D.G.Khan', '1st', 2006, '37-dg44-2004', 96),
('matric', 'Arts', 123437, 620, 850, 'D.G.Khan', '1st', 2003, '38-dg42-2002', 97),
('Intermediate', 'Arts', 321238, 578, 1100, 'D.G.Khan', '2nd', 2005, '38-dg44-2004', 97),
('matric', 'Arts', 12339, 523, 850, 'D.G.Khan', '1st', 2004, '39-dg42-2002', 98),
('Intermediate', 'Arts', 321239, 700, 1100, 'Multan', '1st', 2006, '39-dg44-2004', 98),
('matric', 'Arts', 123440, 512, 850, 'D.G.Khan', '2nd', 2004, '40-dg42-2002', 99),
('Intermediate', 'Arts', 321240, 670, 1100, 'D.G.Khan', '1st', 2006, '40-dg44-2004', 99),
('matric', 'Arts', 123441, 457, 850, 'D.G.Khan', '2nd', 2004, '41-dg42-2002', 100),
('Intermediate', 'Arts', 321241, 680, 1100, 'D.G.Khan', '1st', 2005, '41-dg44-2004', 100);

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
-- Table structure for table `admission`
--

CREATE TABLE IF NOT EXISTS `admission` (
  `admission_id` int(11) NOT NULL AUTO_INCREMENT,
  `prog_id` varchar(15) NOT NULL,
  `seats` int(11) NOT NULL,
  `fee_date` date NOT NULL,
  `list_category` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`admission_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=144 ;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`admission_id`, `prog_id`, `seats`, `fee_date`, `list_category`, `date`) VALUES
(122, 'p1', 4, '2011-11-30', 'third', '2011-10-01'),
(121, 'p1', 4, '2011-11-30', 'second', '2011-11-26'),
(120, 'p1', 4, '2011-11-30', 'first', '2011-11-25'),
(115, 'p2', 4, '2012-01-10', 'first', '2011-12-01'),
(123, 'p2', 2, '2011-11-30', 'second', '2011-11-25'),
(125, 'p2', 1, '2011-11-30', 'third', '2011-11-25'),
(126, 'p3', 3, '2011-11-30', 'first', '2011-11-25'),
(127, 'p3', 2, '2011-11-30', 'second', '2011-11-26'),
(128, 'p3', 2, '2011-11-30', 'third', '2011-11-26'),
(129, 'p5', 3, '2011-11-30', 'first', '2011-11-26'),
(130, 'p5', 3, '2011-11-30', 'second', '2011-11-25'),
(131, 'p5', 2, '2011-11-30', 'third', '2011-11-25'),
(132, 'p4', 3, '2012-01-10', 'first', '2011-12-01'),
(133, 'p4', 3, '2012-01-10', 'second', '2011-12-01'),
(134, 'p4', 3, '2011-01-10', 'third', '2011-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `admission_detail`
--

CREATE TABLE IF NOT EXISTS `admission_detail` (
  `admission_id` int(11) NOT NULL AUTO_INCREMENT,
  `prog_id` varchar(10) NOT NULL,
  `last_date` date NOT NULL,
  PRIMARY KEY (`admission_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `admission_detail`
--

INSERT INTO `admission_detail` (`admission_id`, `prog_id`, `last_date`) VALUES
(22, 'p3', '2011-12-01'),
(21, 'p3', '2011-12-30'),
(23, 'p3', '2011-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `combination`
--

CREATE TABLE IF NOT EXISTS `combination` (
  `comb_id` int(20) NOT NULL AUTO_INCREMENT,
  `subject1` varchar(15) NOT NULL,
  `subject2` varchar(15) NOT NULL,
  `subject3` varchar(15) NOT NULL,
  `prog_id` varchar(15) NOT NULL,
  PRIMARY KEY (`comb_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `combination`
--

INSERT INTO `combination` (`comb_id`, `subject1`, `subject2`, `subject3`, `prog_id`) VALUES
(1, 'Physics', 'Chemistry', 'Biology', 'p1'),
(2, 'Physics', 'Math', 'Computer', 'p3'),
(3, 'Economics', 'Math', 'Computer', 'p3'),
(4, 'Islamiyat', 'History', 'Eduction', 'p2'),
(5, 'Islamiyat', 'History', 'English', 'p2'),
(6, 'Islamiyat', 'History', 'Arbi', 'p2'),
(7, 'Physics', 'Chemistry', 'General Math', 'p4'),
(8, 'Islamiyat', 'Economics', 'Eduction', 'p2'),
(9, 'Education', 'Arbi', 'Islamiyat', 'p5'),
(10, 'math', 'phy', 'chem', 'p6'),
(13, 'Physics', 'Chemistry', 'Math', 'p1');

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
-- Table structure for table `datesheet`
--

CREATE TABLE IF NOT EXISTS `datesheet` (
  `sheet_id` int(11) NOT NULL AUTO_INCREMENT,
  `prog_id` varchar(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `room_no` varchar(200) DEFAULT NULL,
  `time` varchar(200) DEFAULT NULL,
  `dated` date DEFAULT NULL,
  PRIMARY KEY (`sheet_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `datesheet`
--

INSERT INTO `datesheet` (`sheet_id`, `prog_id`, `subject_id`, `room_no`, `time`, `dated`) VALUES
(2, 'p3', 1, '1', '8:00 Pm', '2011-12-01'),
(3, 'p3', 2, '8', '8:00 Pm', '2011-12-30'),
(4, 'p1', 3, '3', '1:00 Pm', '2011-12-01'),
(5, 'p3', 5, '4', '8:00 am', '2011-12-01'),
(6, 'p1', 1, '1', '1:00 Pm', '2011-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `h_academic`
--

CREATE TABLE IF NOT EXISTS `h_academic` (
  `per_class` varchar(15) NOT NULL,
  `group` varchar(15) NOT NULL,
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
-- Dumping data for table `h_academic`
--


-- --------------------------------------------------------

--
-- Table structure for table `h_student`
--

CREATE TABLE IF NOT EXISTS `h_student` (
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
  `documents` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`std_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `h_student`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `Description`, `date`) VALUES
(17, 'News1', 'Detail of news', '2011-11-13'),
(16, 'Admission Open', 'Admission open', '2011-11-01');

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
('p3', 'I.C.S', 'Intermadiate computer science'),
('p1', 'F.Sc', 'Faculty of Science'),
('p2', 'F.A', 'Faculty of Arts'),
('p4', 'B.Sc', 'Bachelor of Science'),
('p5', 'B.A', 'Bachelor of Arts');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `roll_no` varchar(11) NOT NULL,
  `std_id` int(11) DEFAULT NULL,
  `std_name` varchar(20) NOT NULL,
  `login_name` varchar(200) NOT NULL DEFAULT '',
  `password` varchar(200) DEFAULT NULL,
  `session_start` date DEFAULT NULL,
  `session_end` date DEFAULT NULL,
  PRIMARY KEY (`roll_no`,`login_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`roll_no`, `std_id`, `std_name`, `login_name`, `password`, `session_start`, `session_end`) VALUES
('13', 88, 'saqib sattar', 'saqib', 'saqib', '2011-01-10', '2013-10-01'),
('12', 83, 'Dilshad Ahmed', 'dilshad_ahmed', 'dilsshad', '2011-01-10', '2013-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `results_id` int(11) NOT NULL AUTO_INCREMENT,
  `roll_no` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `obtainMarks` int(11) DEFAULT NULL,
  `totalMarks` int(11) DEFAULT NULL,
  PRIMARY KEY (`results_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`results_id`, `roll_no`, `subject_id`, `obtainMarks`, `totalMarks`) VALUES
(1, 10, 2, 70, 100),
(2, 10, 3, 70, 100),
(3, 11, 6, 60, 100),
(5, 12, 1, 60, 100),
(6, 12, 2, 70, 100);

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
  `documents` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`std_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `std_name`, `std_fname`, `std_nic`, `std_dob`, `std_email_Id`, `std_religion`, `domicile`, `std_nationality`, `phone_no`, `hafiz`, `prog_id`, `comb_id`, `address`, `documents`, `status`) VALUES
(82, 'Nosheen Nazar', 'Muhammad Ahmad', '31401-1234522-1', '1988-12-30', 'nosheen@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p3', '2', 'jampur distt Rajanpur', '', 2),
(81, 'Iram Abbas', 'Muhammad Abbas', '31401-1234521-1', '1986-03-13', 'iram@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'yes', 'p3', '2', 'jampur distt Rajanpur', '', 3),
(80, 'Aiman Nazneen', 'M.Aamir Khan', '31401-12345020-', '1986-02-20', 'aiman_12@yahoo.com', 'Islam', 'D.G.Khan', 'Pakistan', 2147483647, 'no', 'p3', '2', 'jampur distt Rajanpur', '', 3),
(79, 'Tayyaba Anam', 'M.Tahir', '31401-12345019-', '1986-12-19', 'tayyabanum@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'yes', 'p3', '2', 'jampur distt Rajanpur', '', 1),
(78, 'Noreen Ghaffar', 'Abdul Ghaffar', '31401-12345018-', '1986-03-13', 'noreenghaffar@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p3', '2', 'jampur distt Rajanpur', '', 1),
(77, 'Shafaq Iqbal', 'Iqbal Ahmed', '31401-12345017-', '1986-03-17', 'shafaq_iqbal@gmail.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p2', '2', 'jampur distt Rajanpur', '', 1),
(76, 'Kanwal Iqbal', 'Iqbal Ahmed', '31401-12345014-', '1986-03-16', 'kanwal.iqbal@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'yes', 'p2', '2', 'jampur distt Rajanpur', '', 1),
(75, 'Hamza Liquat', 'Muhammad Liquat', '31401-12345015-', '1986-03-14', 'hamza@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p2', '2', 'jampur distt Rajanpur', '', 2),
(74, 'Sara Iftikhar', 'Iftikhar Ahmed', '31401-1234513-2', '1988-09-13', 'sara@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p2', '2', 'jampur distt Rajanpur', '', 1),
(73, 'Aysha Jahangir', 'M.Jahangir', '31401-12345013-', '1986-03-13', 'aysah_123@yahoo.com', 'Islam', 'D.G.Khan', 'Pakistan', 2147483647, 'yes', 'p2', '2', 'jampur distt Rajanpur', '', 2),
(72, 'Mamuna Rafique', 'Rafique Ahmed', '31401-1234511-2', '1986-11-25', 'mamunarafique@gmail.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p2', '2', 'jampur distt Rajanpur', '', 1),
(71, 'Qamar Farid', 'Abdul Farid', '31401-1234511-1', '1987-11-12', 'qamar_farid@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'yes', 'p2', '2', 'jampur distt Rajanpur', '', 3),
(70, 'Javeria Aamir', 'M.Aamir Khan', '31401-1234509-1', '1987-10-20', 'javeria@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p1', '2', 'jampur distt Rajanpur', '', 2),
(69, 'Tayyaba Naz', 'Altaf hussain', '31401-1234508-1', '1989-09-12', 'tayyabanaz_301@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'yes', 'p1', '2', 'jampur distt Rajanpur', '', 2),
(68, 'Fehda Malik', 'Malik Hussain', '32402-3819408-1', '1989-03-08', 'fehda123@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p1', '2', 'jampur distt Rajanpur', '', 3),
(67, 'Sana Maqbool', 'Muhammad Ahmad', '31401-1234507-3', '1986-10-01', 'sana@gmail.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p1', '2', 'jampur distt Rajanpur', '', 2),
(66, 'Noreen Fatima', 'M.Tahir', '31401-1234506-3', '1988-01-30', 'noreen_fatima@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p1', '2', 'jampur distt Rajanpur', '', 2),
(65, 'Mamuna Munawer', 'Munawer Ahmed', '31401-1234567-2', '1988-01-30', 'mumuna_12@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'yes', 'p1', '2', 'jampur distt Rajanpur', '', 1),
(64, 'Khazeema Anum', 'M.Saeed Ahmad', '32402-12345627-', '1989-08-12', 'khazeema_8@gmail.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p1', '2', 'jampur distt Rajanpur', '', 1),
(63, 'Tehreem zahra', 'Muhammad Kamal', '32402-2143457-1', '1989-08-02', 'tehreem@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p1', '2', 'jampur distt Rajanpur', '', 1),
(62, 'Muhammad Safder', 'M.safder', '32402-2134457-1', '1988-10-01', 'safder@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'yes', 'p1', '2', 'jampur distt Rajanpur', '', 3),
(61, 'Shajeeah Sharif', 'M.Sharif', '32402-1234567-1', '1988-01-23', 'shajeeah@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p1', '2', 'jampur distt Rajanpur', '', 1),
(83, 'Maria Hussain', 'Hussain Ahmed', '31401-12345023-', '1988-12-18', 'maria@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p3', '2', 'jampur distt Rajanpur', '', 1),
(84, 'Hafza maryam', 'M.Aamir Khan', '31401-12345023-', '1988-08-30', 'hafza@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p3', '2', 'jampur distt Rajanpur', '', 2),
(85, 'Mahreen Altaf Gill', 'Altaf Gill', '32402-1234525-2', '1986-12-20', 'mahreen@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'yes', 'p4', '2', 'jampur distt Rajanpur', '', 2),
(86, 'Memoona Waheed', 'Abdul Waheed', '31401-1234525-1', '1986-10-20', 'memoona@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'yes', 'p4', '2', 'jampur distt Rajanpur', '', 1),
(87, 'Tayyba Gilani', 'M.Saeed Ahmad', '32402-12345624-', '1986-03-13', 'tayyabagilani@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p4', '2', 'jampur distt Rajanpur', '', 1),
(88, 'Ayesha Safder', 'Safder Khan', '31401-12345028-', '1988-09-30', 'ayesh@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p4', '2', 'jampur distt Rajanpur', '', 3),
(89, 'Ayesha Noreen', 'M.Aamir Khan', '31401-12345029-', '1988-11-15', 'noreenaysha@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'yes', 'p4', '2', 'jampur distt Rajanpur', '', 3),
(90, 'Sonia Rafique', 'M.Rafique Ahmed', '31401-12345030-', '1988-07-12', 'rafique_sonia@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'yes', 'p4', '2', 'jampur distt Rajanpur', '', 1),
(91, 'Iram Khan', 'Muhammad Shafqat', '31401-12345031-', '1985-01-10', 'khan_iram@yahoo.cocm', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p4', '2', 'jampur distt Rajanpur', '', 2),
(92, 'Numan Tahir', 'Muhammad Ahmad', '31401-12345032-', '1986-03-13', 'numan_124@gmail.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p4', '2', 'jampur distt Rajanpur', '', 3),
(93, 'Sidra Shafiq', 'Shafiq Ahmed', '31401-12345033-', '1986-10-23', 'sidrashafiq@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'yes', 'p4', '2', 'jampur distt Rajanpur', '', 2),
(94, 'Noreen Ghaffar', 'M.Jahangir', '31401-12345035-', '1988-10-24', 'ghaffarnoreen@gmail.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'yes', 'p5', '2', 'jampur distt Rajanpur', '', 1),
(95, 'Hamza Liquat', 'Liquat', '31401-12345036-', '1989-10-22', 'liquathamza@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'yes', 'p5', '2', 'jampur distt Rajanpur', '', 1),
(96, 'Numan Tahir', 'M.Tahir', '31401-12345036-', '1989-06-24', 'tahirNuman@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p5', '2', 'jampur distt Rajanpur', '', 2),
(97, 'Sonia khan', 'Muhammad Kamal khan', '31401-12345037-', '1986-03-22', 'khan_142@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p5', '2', 'jampur distt Rajanpur', '', 3),
(98, 'Hafza maryam', 'Muhammad Kamal', '31401-12345038-', '1986-10-01', 'hamza_28@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'yes', 'p5', '2', 'jampur distt Rajanpur', '', 1),
(99, 'Sidra Iqbal', 'Iqbal Ahmed', '31401-12345040-', '1986-03-13', 'iqbal_sidra@yahoo.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'yes', 'p5', '2', 'jampur distt Rajanpur', '', 2),
(100, 'Umair Shafqat', 'Shafiq Ahmed', '31401-12345041-', '1988-01-30', 'abc_umair@gmail.com', 'Islam', 'Rajanpur', 'Pakistan', 2147483647, 'no', 'p5', '2', 'jampur distt Rajanpur', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` varchar(20) NOT NULL,
  `subject_name` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`) VALUES
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
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `nic` varchar(45) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(45) NOT NULL,
  `email_id` varchar(45) NOT NULL,
  `bps` int(11) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `qualification` varchar(45) NOT NULL,
  `subject_id` varchar(20) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `name`, `fname`, `nic`, `dob`, `address`, `email_id`, `bps`, `phone_no`, `qualification`, `subject_id`) VALUES
(10, 'Nusrat Parveen', 'Abdull Samad', '32403-1234567-2', '1976-10-20', 'jampur Distt Rajanpur', 'nusrat_parveen@yahoo.com', 17, '0303546734', 'M.A(Arbi)', '15'),
(11, 'Najma Nesar Ali', 'Muhammad Ali', '32403-7654321-2', '1974-10-20', 'jampur Distt Rajanpur', 'najmaAli@gmail.com', 18, '0333546734', 'M.A(Education)', '12');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `table_id` int(11) NOT NULL AUTO_INCREMENT,
  `prog_id` varchar(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `time` varchar(200) DEFAULT NULL,
  `dated` date DEFAULT NULL,
  `room_no` int(11) DEFAULT NULL,
  PRIMARY KEY (`table_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`table_id`, `prog_id`, `subject_id`, `teacher_id`, `time`, `dated`, `room_no`) VALUES
(64, 'p2', 8, 10, '8:00 Pm', '2011-12-01', 1),
(63, 'p3', 5, 10, '8:00 Pm', '2011-12-30', 3),
(62, 'p1', 2, 11, '8:00 Pm', '2011-12-01', 8),
(61, 'p3', 1, 10, '8:00 Pm', '2011-12-01', 1);
