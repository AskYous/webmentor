-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2013 at 10:39 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webmentordb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appt`
--

CREATE TABLE IF NOT EXISTS `appt` (
  `appt_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `mentorship_id` int(11) DEFAULT NULL,
  `g_link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`appt_id`),
  KEY `fk_appt_mentorship` (`mentorship_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `appt`
--


-- --------------------------------------------------------

--
-- Table structure for table `chatlog`
--

CREATE TABLE IF NOT EXISTS `chatlog` (
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `mentorship_id` int(11) NOT NULL DEFAULT '0',
  `chat_msg` blob,
  PRIMARY KEY (`mentorship_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chatlog`
--


-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `data` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`feedback_id`),
  KEY `fk_feedback` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `mentee`
--

CREATE TABLE IF NOT EXISTS `mentee` (
  `mentee_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `mentor_count` int(11) DEFAULT NULL,
  PRIMARY KEY (`mentee_id`),
  KEY `fk_menteeuserid` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mentee`
--

INSERT INTO `mentee` (`mentee_id`, `user_id`, `mentor_count`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE IF NOT EXISTS `mentor` (
  `mentor_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `mentee_count` int(11) DEFAULT NULL,
  PRIMARY KEY (`mentor_id`),
  KEY `fk_userid` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`mentor_id`, `user_id`, `mentee_count`) VALUES
(1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mentorship`
--

CREATE TABLE IF NOT EXISTS `mentorship` (
  `mentorship_id` int(11) NOT NULL AUTO_INCREMENT,
  `mentor_id` int(11) DEFAULT NULL,
  `mentee_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  PRIMARY KEY (`mentorship_id`),
  KEY `fk_mentee_mentorship` (`mentee_id`),
  KEY `fk_mentor_mentorship` (`mentor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mentorship`
--

INSERT INTO `mentorship` (`mentorship_id`, `mentor_id`, `mentee_id`, `start_date`) VALUES
(1, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `linkedinid` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `linkedinid` (`linkedinid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`firstname`, `lastname`, `dob`, `email`, `password`, `experience`, `id`, `linkedinid`) VALUES
('Test', 'Test', '1980-01-01', 'asdf', 'asdf', 'asdf', 1, 'www.linkaskahsuayu'),
('Yousef', 'Sh', '01/01/1980', 'Test2', 'asd', '', 2, 'asjdiuagsduagdiuoa'),
('scott', 'tiger', '1980-01-01', 'scott@tiger.com', 'tiger', 'yh8juki', 22, ''),
('jack', 'daniels', '10/26/1990', 'email@mail', 'pwd', 'exper', 33, 'none'),
('jack', 'daniels', '10/26/1990', 'email2@mail', 'pwd', 'exper', 99, 'none2');

-- --------------------------------------------------------

--
-- Table structure for table `user_subjects`
--

CREATE TABLE IF NOT EXISTS `user_subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_subject` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_subjects`
--

INSERT INTO `user_subjects` (`id`, `userid`, `subject`) VALUES
(5, 22, 'Physics');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appt`
--
ALTER TABLE `appt`
  ADD CONSTRAINT `fk_appt_mentorship` FOREIGN KEY (`mentorship_id`) REFERENCES `mentorship` (`mentorship_id`);

--
-- Constraints for table `chatlog`
--
ALTER TABLE `chatlog`
  ADD CONSTRAINT `fk_chatlog` FOREIGN KEY (`mentorship_id`) REFERENCES `mentorship` (`mentorship_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `fk_feedback` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `mentee`
--
ALTER TABLE `mentee`
  ADD CONSTRAINT `fk_menteeuserid` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `mentor`
--
ALTER TABLE `mentor`
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `mentorship`
--
ALTER TABLE `mentorship`
  ADD CONSTRAINT `fk_mentee_mentorship` FOREIGN KEY (`mentee_id`) REFERENCES `mentee` (`mentee_id`),
  ADD CONSTRAINT `fk_mentor_mentorship` FOREIGN KEY (`mentor_id`) REFERENCES `mentor` (`mentor_id`);

--
-- Constraints for table `user_subjects`
--
ALTER TABLE `user_subjects`
  ADD CONSTRAINT `fk_subject` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);
