-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 03, 2019 at 08:30 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `milma_magazine`
--

-- --------------------------------------------------------

--
-- Table structure for table `empreg`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `empreg`
--

INSERT INTO `empreg` (`empid`, `name`, `address`, `dob`, `gender`, `email`, `mobile`, `designation`, `pwd`, `image`, `doj`) VALUES
(1, 'employee', 's', '2018-11-29', 'Female', '151017@chintech.ac.in', '454', 'manager', '202cb962ac59075b964b', 'favicon.ico', '2018-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product` varchar(20) NOT NULL,
  `qty` varchar(12) NOT NULL,
  `address` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `product`, `qty`, `address`, `status`) VALUES
(1, 'milk', '500', 'sample', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `ordermilk`
--

CREATE TABLE IF NOT EXISTS `ordermilk` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ordermilk`
--

INSERT INTO `ordermilk` (`id`, `product`, `qty`, `address`, `status`) VALUES
(1, 'Milk', '500 ml', 'sample', 'pending'),
(2, 'Curd', '1 l', 'addresss', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `uname`, `lname`, `email`, `pwd`, `image`, `type`) VALUES
(1, 'user', 'new', 'soumyat369@gmail.com', '0c74b7f78409a4022a2c', 'IMG_20170908_193315.jpg', 'user'),
(2, 'admin', '', '', '123', '', 'admin'),
(3, 'newuser', 'new', '151017@chintech.ac.i', '202cb962ac59075b964b', 'favicon.ico', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
