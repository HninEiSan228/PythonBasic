-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 07, 2019 at 01:45 PM
-- Server version: 5.0.67
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `weddingproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
  `orderID` int(30) NOT NULL auto_increment,
  `userName` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(30) NOT NULL,
  `price` int(30) NOT NULL,
  `total` int(30) NOT NULL,
  PRIMARY KEY  (`orderID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`orderID`, `userName`, `name`, `quantity`, `price`, `total`) VALUES
(85, 'pite pite htwe', 'card3', 10000, 1000, 10000000),
(84, 'pite pite htwe', 'gift3', 10000, 500, 5000000),
(83, 'pite pite htwe', 'Couple15', 1, 1400000, 1400000),
(82, 'pite pite htwe', 'GY', 1, 600000, 600000),
(49, 'Zin Zin Htike', 'Swan', 1, 1100000, 1100000),
(50, 'Zin Zin Htike', 'My Emperor', 1, 100000, 100000),
(51, 'Zin Zin Htike', 'Hanlin', 1, 500000, 500000),
(52, 'Zin Zin Htike', 'GY', 1, 600000, 600000),
(53, 'Zin Zin Htike', 'Couple3', 1, 800000, 800000),
(54, 'Zin Zin Htike', 'card4', 1, 1200, 1200),
(97, 'Pan Pan', 'My Dear', 1, 900000, 900000),
(96, 'Aye', 'Hazel Hotel', 1, 9000000, 9000000),
(65, 'Htet Htet Hlaing', 'gift2', 1, 400, 400),
(64, 'Htet Htet Hlaing', 'card4', 1, 1200, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `userID` int(20) NOT NULL auto_increment,
  `userName` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY  (`userID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userID`, `userName`, `password`, `email`, `phone`, `address`, `date`) VALUES
(26, 'Aye ', 'aye', 'aye123@gmail.com', '09251456301', 'Mandalay', '2029-06-05'),
(24, 'pite pite htwe', '733553', 'pite@gmail.com', '09456215064', 'myingyan', '2021-08-26'),
(25, 'Hnin', 'h123', 'eisan123@gmail.com', '09966511436', 'pyin oo lwin', '2019-12-18'),
(18, 'Thae Myat Su', 'susu', 'lisar3706@gmail.com', '09426703381', 'Shwe Bo', '2031-11-06'),
(19, 'Thin Zar Thein Lwin', '2002', 'thinzartheinlwin123@gmail.com', '09970651017', 'Shante/Meiltila', '2032-02-22'),
(20, 'Zin Zin Htike', 'zin', 'zinzin6431@gmail.com', '09785879176', 'Myingyan', '2025-12-25'),
(22, 'Htet Htet Hlaing', '306084', 'thaehtethtet28@gmail.com', '09967662719', 'Pakokku', '2030-08-26'),
(23, 'Yoong J', 'sonyuhshidae', 'yoongj@gmail.com', '09769545905', 'Seoul,Korea', '2026-01-16'),
(27, 'Pan Pan', '123456', 'panpan@gmail.com', '09770387738', 'Mandalay', '2028-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(50) NOT NULL auto_increment,
  `img` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `img`, `name`, `price`, `size`, `address`, `description`) VALUES
(1, 'hazel.jpg', 'Hazel Hotel', 9000000, '', 'Conor of 53rd and 37th Street', 'venue'),
(2, 'oriental.jpg', 'Oriental House', 1000000, '', '64th,bet 27x28 ', 'venue'),
(3, 'swan.jpg', 'Swan', 1100000, '', 'Conor of 26th & 68th Streets', 'venue'),
(4, 'card1.jpg', 'card1', 500, '', '', 'card'),
(5, 'card2.jpg', 'card2', 800, '', '', 'card'),
(6, 'card3.jpg', 'card3', 1000, '', '', 'card'),
(7, 'card4.jpg', 'card4', 1200, '', '', 'card'),
(8, 'cattleya.jpg', 'Cattleya', 300000, '', '', 'floral'),
(9, 'win.jpg', 'Win', 400000, '', '', 'floral'),
(10, 'hanlin.jpg', 'Hanlin', 500000, '', '', 'floral'),
(11, 'amaramg.jpg', 'Amara Maung', 500000, '', '', 'makeup'),
(12, 'gy.jpg', 'GY', 600000, '', '', 'makeup'),
(13, 'yu.jpg', 'Yu', 700000, '', '', 'makeup'),
(14, 'aungkhantkyaw.jpg', 'Aung Khank Kyaw', 800000, '', '', 'photo'),
(15, 'mydear.jpg', 'My Dear', 900000, '', '', 'photo'),
(16, 'myemperor.jpg', 'My Emperor', 100000, '', '', 'photo'),
(17, 'g300.jpg', 'gift1', 300, '', '', 'gift'),
(18, 'g400.jpg', 'gift2', 400, '', '', 'gift'),
(19, 'g500.jpg', 'gift3', 500, '', '', 'gift'),
(36, 'couple7.jpg', 'Couple7', 1000000, 'free', '', 'dress'),
(35, 'couple6.jpg', 'Couple6', 900000, 'free', '', 'dress'),
(34, 'couple5.jpg', 'Couple5', 900000, 'free', '', 'dress'),
(33, 'couple4.jpg', 'Couple4', 800000, 'free', '', 'dress'),
(32, 'couple3.jpg', 'Couple3', 800000, 'free', '', 'dress'),
(31, 'couple2.jpg', 'Couple2', 700000, 'free', '', 'dress'),
(30, 'couple1.jpg', 'Couple1', 700000, 'free', '', 'dress'),
(37, 'couple8.jpg', 'Couple8', 1000000, 'free', '', 'dress'),
(50, 'couple9.jpg', 'Couple9', 1000000, 'free', '', 'dress'),
(39, 'couple10.jpg', 'Couple10', 1200000, 'free', '', 'dress'),
(52, 'couple11.jpg', 'Couple11', 1200000, 'free', '', 'dress'),
(57, 'couple16.jpg', 'Couple16', 1500000, 'free', '', 'dress'),
(56, 'couple15.jpg', 'Couple15', 1400000, 'free', '', 'dress'),
(55, 'couple14.jpg', 'Couple14', 1400000, 'free', '', 'dress'),
(54, 'couple13.jpg', 'Couple13', 1300000, 'free', '', 'dress'),
(53, 'couple12.jpg', 'Couple12', 1300000, 'free', '', 'dress'),
(65, 'couple17.jpg', 'Couple17', 1500000, 'free', '', 'dress'),
(107, '3.jpg', 'venue', 1000000, '', 'Mandalay', 'venue');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
