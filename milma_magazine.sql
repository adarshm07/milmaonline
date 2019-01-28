-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 28, 2019 at 05:52 PM
-- Server version: 5.7.23
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `milma_magazine`
--

-- --------------------------------------------------------

--
-- Table structure for table `empreg`
--

DROP TABLE IF EXISTS `empreg`;
CREATE TABLE IF NOT EXISTS `empreg` (
  `empid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `designation` varchar(15) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `doj` date NOT NULL,
  PRIMARY KEY (`empid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empreg`
--

INSERT INTO `empreg` (`empid`, `name`, `address`, `dob`, `gender`, `email`, `mobile`, `designation`, `pwd`, `image`, `doj`) VALUES
(1, 'employee', 's', '2018-11-29', 'Female', '151017@chintech.ac.in', '454', 'manager', '202cb962ac59075b964b', 'favicon.ico', '2018-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `feedb`
--

DROP TABLE IF EXISTS `feedb`;
CREATE TABLE IF NOT EXISTS `feedb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `feedb` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedb`
--

INSERT INTO `feedb` (`id`, `name`, `category`, `feedb`) VALUES
(1, '', 'Product', ''),
(2, 'adnla', 'Product', 'aldknka');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

DROP TABLE IF EXISTS `loan`;
CREATE TABLE IF NOT EXISTS `loan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `on` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `ano` varchar(25) NOT NULL,
  `reason` varchar(20) NOT NULL,
  `amt` varchar(20) NOT NULL,
  `dn` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`id`, `name`, `on`, `dob`, `ano`, `reason`, `amt`, `dn`) VALUES
(1, '', '', '0000-00-00', '', '', '', ''),
(2, 'soumya', 'manager', '2019-01-16', '2464', 'home', '50000', '12');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product` varchar(20) NOT NULL,
  `qty` varchar(12) NOT NULL,
  `address` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `product`, `qty`, `address`, `status`) VALUES
(1, 'milk', '500', 'sample', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `ordermilk`
--

DROP TABLE IF EXISTS `ordermilk`;
CREATE TABLE IF NOT EXISTS `ordermilk` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `status` varchar(10) DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordermilk`
--

INSERT INTO `ordermilk` (`id`, `product`, `qty`, `address`, `status`) VALUES
(1, 'Milk', '500 ml', 'sample', 'pending'),
(2, 'Curd', '1 l', 'addresss', 'pending'),
(3, 'Milk', '', 'jadnlk', ''),
(4, 'Milk', '', 'aj', ''),
(5, 'Milk', '', 'aldjbajla', 'pending'),
(6, 'Milk', '', 'ahbkadj', 'pending'),
(7, 'Milk', '', 'aldnald', 'pending'),
(8, 'Milk', '', 'bjka nd', 'pending'),
(9, 'Milk', '', '', 'pending'),
(10, 'Milk', '', 'yigkbj', 'pending'),
(11, 'Milk', '', 'bkjda', 'pending'),
(12, 'Milk', '', 'ndla', 'pending'),
(13, 'Milk', '', 'jbdka', 'pending'),
(14, 'Milk', '', 'kdjan', 'pending'),
(15, 'Milk', '', '', 'pending'),
(16, 'Milk', '', 'nkad', 'pending'),
(17, 'Milk', '', 'bdjka', 'pending'),
(20, 'Milk', '', 'jka', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `uname`, `lname`, `email`, `pwd`, `image`, `type`) VALUES
(2, 'admin', '', 'admin@gmail.com', '123', '', 'admin'),
(4, 'user', '', '', '123', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
