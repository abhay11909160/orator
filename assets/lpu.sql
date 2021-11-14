-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 14, 2021 at 03:08 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lpu`
--

-- --------------------------------------------------------

--
-- Table structure for table `ab`
--

DROP TABLE IF EXISTS `ab`;
CREATE TABLE IF NOT EXISTS `ab` (
  `name` int(10) NOT NULL,
  `email` int(13) NOT NULL,
  `mobile` int(13) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userid`, `password`) VALUES
(1, 'oratorlpu.pi@gmail.com', 'orator@123');

-- --------------------------------------------------------

--
-- Table structure for table `alumini`
--

DROP TABLE IF EXISTS `alumini`;
CREATE TABLE IF NOT EXISTS `alumini` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desg` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ld` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tw` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumini`
--

INSERT INTO `alumini` (`id`, `name`, `desg`, `ld`, `fb`, `tw`, `image`) VALUES
(4, 'Mohammed Ashil', 'Founder', 'https://www.linkedin.com/in/imashil/', 'https://www.facebook.com/imashil96', 'The fire within to do something led me to start Orator. Honestly, the Orator that you see today is the hardwork of my team back then and the exceptional leaders who followed after us. Being a part of such a team and all the learning that I could gather has played a very significant role in shaping me as a person who I am today.', 'f.jpg'),
(5, 'Monika Pani', 'Former President', 'https://www.linkedin.com/in/monika-pani-720b7b116/', 'https://www.facebook.com/pani.monika147', 'Being involved in Orator Team has better prepared me from my future because it has allowed me to step out of my comfort zone and take on new experiences that I never would have dreamed of doing.The best part of being a student leader of Orator Family is the people that you meet and the relationships that you build. Best wishes to Team Orator.', 'fp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `future` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

DROP TABLE IF EXISTS `form`;
CREATE TABLE IF NOT EXISTS `form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lputab`
--

DROP TABLE IF EXISTS `lputab`;
CREATE TABLE IF NOT EXISTS `lputab` (
  `Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Age` int(2) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lputab`
--

INSERT INTO `lputab` (`Name`, `email`, `Password`, `Age`) VALUES
('John', 'john@example.com', '123@sd', 12);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `desg` varchar(100) NOT NULL,
  `ld` varchar(300) NOT NULL,
  `ing` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `desg`, `ld`, `ing`, `email`, `image`) VALUES
(1, 'Soumya Bhol', 'Chief Executive Officer', 'https://www.linkedin.com/in/soumya-bhol-88992b195', 'https://www.instagram.com/photobaaaz/', 'soumyadfd@gmail.com', 'ceo.jpg'),
(2, 'Barsa Jha', 'Co-Chief Executive Officer1', 'https://www.linkedin.com/in/barsa-jha-6a80291a2', 'https://instagram.com/03_jhabarsa_02?utm_medium=copy_link', 'jhabarsa@gmail.com', 'coceo1.jpg'),
(3, 'Ishita Omar', 'Co-Chief Executive Officer2', 'https://www.linkedin.com/in/ishita-omar-1160651a2', 'https://www.instagram.com/classyissy/', 'ishitaissu60@gmail.com', 'coceo2.jpg'),
(4, 'Siddharth Sen', 'HR Manager', 'https://www.linkedin.com/in/siddharth-sen-8040601a2', 'https://instagram.com/sid_.sen?utm_medium=copy_link', 'siddharthsen2031@gmail.com', 'hr.jpg'),
(5, 'Kiran Sona Puthan', 'Assistant HR Manager', 'https://www.linkedin.com/in/kiran-sona-puthan-6a9086190', 'https://instagram.com/k1rans0na?igshid=1afhcr9zu5zy3', 'kiransona866@gmail.com', 'ahr.jpg'),
(6, 'M Atul Kalyan', 'Event Manager', 'https://www.linkedin.com/in/m-atul-kalyan-572036195', 'https://www.instagram.com/theturbomanatul', 'atulkalyan950@gmail.com', 'em.jpg'),
(7, 'Pragya Kumari', 'Assistant Event Manager', 'https://www.linkedin.com/in/pragya-kumari-3b858418a', 'https://instagram.com/hearty_.smile?utm_medium=copy_link', 'pragyamishra10501@gmail.com', 'aem.jpg'),
(8, 'Antariksh Das', 'PR Manager', 'https://www.linkedin.com/in/antariksh-das-603227192', 'https://instagram.com/das_antariksh?utm_medium=copy_link', 'antariksh.d.das@gmail.com', 'pr.jpg'),
(9, 'Ishika Aggarwal', 'Project Manager', 'https://www.linkedin.com/in/ishika-aggarwal-163024191', 'https://www.instagram.com/p/CIqKkrujtXj3b4LZgxY7TFgQqJz-1uo_EWmTw40/?utm_medium=copy_link', 'aggarwalishika33@gmail.com', 'pm.jpg'),
(10, 'Harsh Maheshwari', 'Marketing Manager', 'https://www.linkedin.com/in/harsh-maheshwari-535233136', 'https://www.instagram.com/jr._maheshwari_/', 'hmaheshwari92@gmail.com', 'mm.jpg'),
(11, 'Shubham Joshi', 'Database Manager', '', 'https://instagram.com/shubhamjoshi9170?igshid=1irbknbw7wvwd', 'shubhamjoshi3004@gmail.com', 'dm.jpg'),
(12, 'Abhay Raj', 'Technical Head', 'https://www.linkedin.com/in/abhay-raj-gupta-89b501190/', 'https://www.instagram.com/abhay231101/', 'gabhayraj1@gmail.com', 'th.jpg'),
(13, 'Muskan Kumari ', 'Administrative Manager', 'https://www.linkedin.com/in/muskan-kumari-a55b14190', 'https://www.instagram.com/muskanmk07', 'muskanmk0728@gmail.com', 'am.jpg'),
(14, 'Nimisha choudhary', 'Strategy Manager', 'https://www.linkedin.com/in/nimisha-choudhary-053a2a1b4', '', 'cnimisha22@gmail.com', 'sm.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
