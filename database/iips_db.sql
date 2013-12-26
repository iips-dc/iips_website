-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2013 at 01:01 PM
-- Server version: 5.5.32
-- PHP Version: 5.3.10-1ubuntu3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iips_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Alumni_Info`
--

CREATE TABLE IF NOT EXISTS `Alumni_Info` (
  `User_ID` int(6) NOT NULL,
  `Enrollment_Number` varchar(10) NOT NULL,
  `Roll_Number` varchar(10) NOT NULL,
  `Current_Company` text,
  `Job_Description` longtext,
  `Previous_Job` longtext,
  `Experience` mediumint(3) DEFAULT NULL,
  `Area_Of_Interest` mediumtext,
  `Enrollment_Year` year(4) NOT NULL,
  `Batch_ID` varchar(10) NOT NULL,
  `Alternate_Email` varchar(40) DEFAULT NULL,
  `Last_Qualification` text,
  `Last_Institute` text,
  `Univ_Board` text,
  `Web_Link` varchar(40) DEFAULT NULL,
  `Github_Link` varchar(40) DEFAULT NULL,
  `Blog_Link` varchar(40) NOT NULL,
  `LinkedIn_Link` varchar(40) NOT NULL,
  `Facebook_Link` varchar(40) NOT NULL,
  `Googleplus_Link` varchar(40) NOT NULL,
  `Picture` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Course_Info`
--

CREATE TABLE IF NOT EXISTS `Course_Info` (
  `Course_ID` tinyint(2) NOT NULL AUTO_INCREMENT COMMENT 'Unique course Id for each course',
  `Course_Name` varchar(15) NOT NULL,
  `Number_Of_Semester` tinyint(2) NOT NULL COMMENT 'Total number of semester in a course',
  `Discipline` text NOT NULL COMMENT 'The discipline (computer or management)',
  PRIMARY KEY (`Course_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table includes basic info of each course in the institute.' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Faculty_Info`
--

CREATE TABLE IF NOT EXISTS `Faculty_Info` (
  `User_ID` int(6) NOT NULL COMMENT 'This is the user_id from User_master table.',
  `Discipline` text NOT NULL,
  `Post` text NOT NULL,
  `Responsibility` text NOT NULL,
  `DOJ` date NOT NULL COMMENT 'Date of Joining',
  `Area_Of_Interest` text,
  `Previous_Job` longtext,
  `Alternate_Email` varchar(40) NOT NULL,
  `Web_Link` varchar(40) DEFAULT NULL,
  `Blog_Link` varchar(40) DEFAULT NULL,
  `LinkedIn_Link` varchar(40) DEFAULT NULL,
  `Facebook_Link` varchar(40) DEFAULT NULL,
  `Googleplus_Link` varchar(40) DEFAULT NULL,
  `Twitter_Link` varchar(40) DEFAULT NULL,
  `Pitcture` varchar(11) NOT NULL COMMENT 'Link of the Picture',
  `Resume` varchar(40) DEFAULT NULL COMMENT 'Link to resume',
  PRIMARY KEY (`Pitcture`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table includes basic info of each faculty, in the system.';

-- --------------------------------------------------------

--
-- Table structure for table `Publications`
--

CREATE TABLE IF NOT EXISTS `Publications` (
  `User_ID` int(6) NOT NULL,
  `Pub_Title` text NOT NULL,
  `Pub_Year` year(4) NOT NULL,
  `Pub_Org` text NOT NULL,
  `Co_Authors` text,
  `Pub_Link` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Publications by the student/faculty in the system';

-- --------------------------------------------------------

--
-- Table structure for table `Staff_Info`
--

CREATE TABLE IF NOT EXISTS `Staff_Info` (
  `User_ID` int(6) NOT NULL,
  `Post` text NOT NULL,
  `Responsibility` text,
  `Web_Link` varchar(40) DEFAULT NULL,
  `Blog_Link` varchar(40) DEFAULT NULL,
  `Alternate_Email` varchar(40) DEFAULT NULL,
  `Linkedin_Link` varchar(40) DEFAULT NULL,
  `Facebook_Link` varchar(40) DEFAULT NULL,
  `Googleplus_Link` varchar(40) DEFAULT NULL,
  `Twitter_Link` varchar(40) DEFAULT NULL,
  `Picture` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table includes basic information about staff.';

-- --------------------------------------------------------

--
-- Table structure for table `Student_Info`
--

CREATE TABLE IF NOT EXISTS `Student_Info` (
  `User_ID` int(6) NOT NULL COMMENT 'This is the user_ID from User_Master table',
  `Enrollment_Number` varchar(10) NOT NULL,
  `Roll_Number` varchar(10) NOT NULL,
  `Current_Course` varchar(15) NOT NULL,
  `Current_Sem` tinyint(2) NOT NULL COMMENT 'This is the current semester in which the student is studying',
  `Enrollment_Year` year(4) NOT NULL,
  `Batch_ID` varchar(10) NOT NULL,
  `Alternate_Email` varchar(30) NOT NULL,
  `Last_Qualification` text NOT NULL COMMENT 'Higher secondary, graduate, post-graduate ,others',
  `Institute Name` text NOT NULL COMMENT 'Name of the institute last attended',
  `Univ_Board` text NOT NULL COMMENT 'The university or board of the institute last attended',
  `Area_Of_Interest` mediumtext COMMENT 'Area of interest for student',
  `Internship_Exp` smallint(3) DEFAULT NULL COMMENT 'Internship experience in months(if any)',
  `Picture` varchar(40) DEFAULT NULL COMMENT 'Link of the picture of the student',
  `Web_Link` varchar(50) DEFAULT NULL,
  `Blog_Link` varchar(50) DEFAULT NULL,
  `Github_Link` varchar(50) DEFAULT NULL,
  `LinkedIn_Link` varchar(50) DEFAULT NULL,
  `Facebook_Link` varchar(50) DEFAULT NULL,
  `Googleplus_Link` varchar(50) DEFAULT NULL,
  `Twitter_Link` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table includes basic info of each existing student in the system.';

-- --------------------------------------------------------

--
-- Table structure for table `User_Master`
--

CREATE TABLE IF NOT EXISTS `User_Master` (
  `User_ID` bigint(6) unsigned NOT NULL AUTO_INCREMENT COMMENT 'This is unique user id to identify a user in the system',
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Email` varchar(40) NOT NULL COMMENT '(Domain Specific Email)This is another identity of a user. Ex- username@iips.edu.in',
  `Father_Name` text NOT NULL,
  `Mother_Name` text NOT NULL,
  `DOB` date DEFAULT NULL COMMENT 'Date of Birth',
  `Mobile_Number` varchar(14) NOT NULL,
  `Telephone_Number` varchar(16) DEFAULT NULL,
  `Local_Address` varchar(40) NOT NULL,
  `Permanent_Address` varchar(40) NOT NULL,
  `Type` text NOT NULL COMMENT 'This is type of user like student, faculty , staff, alumni, admin',
  `Status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Status of user whether he is active(1) in the system or not(0). ',
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table includes basic info of each user exist/left in the system.' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `User_Temp`
--

CREATE TABLE IF NOT EXISTS `User_Temp` (
  `Temp_Transaction_ID` varchar(10) NOT NULL COMMENT 'This is a temporary transaction id of the user.',
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Father_Name` text,
  `Mother_Name` text,
  `Email` varchar(40) NOT NULL,
  `Type` text NOT NULL,
  `DOB` date DEFAULT NULL,
  `Local_Address` varchar(40) DEFAULT NULL,
  `Permanent_Address` varchar(40) DEFAULT NULL,
  `Mobile_Number` varchar(14) NOT NULL,
  `Telephone_Number` varchar(16) DEFAULT NULL,
  `Roll_Number` varchar(10) DEFAULT NULL,
  `Enrollment_Number` varchar(10) DEFAULT NULL,
  `Discipline` text,
  `Post` text,
  `Responsibility` text,
  `Batch_ID` varchar(8) DEFAULT NULL,
  `Course_ID` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`Temp_Transaction_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
