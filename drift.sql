-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2020 at 06:08 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drift`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `apid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `modid` int(11) NOT NULL,
  `adate` date NOT NULL,
  `tcost` int(11) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`apid`),
  KEY `userid` (`userid`),
  KEY `modid` (`modid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`apid`, `userid`, `modid`, `adate`, `tcost`, `deleted`) VALUES
(1, 32, 1, '2020-06-06', 3000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `total_amount` int(15) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `proid` (`proid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `userid`, `proid`, `total_amount`, `deleted`) VALUES
(3, 33, 4, 1999, 1),
(4, 33, 7, 1799, 1),
(10, 32, 4, 1999, 1),
(12, 32, 8, 999, 1),
(13, 32, 6, 1499, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` char(50) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `gender` enum('male','female') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(1) DEFAULT NULL COMMENT '0-customer 1-admin',
  `deleted` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`userid`, `fullname`, `address`, `photo`, `phone`, `gender`, `email`, `password`, `type`, `deleted`) VALUES
(1, 'nikhil', 'pernem', NULL, 1234567890, 'male', 'nikhil@gmail.com', '123456', 1, 0),
(32, 'Mandar', 'mapusa', 'PicsArt_04-06-12.41.51.jpg', 7769042490, 'male', 'mjoshi23.mj@gmail.com', '3000', 0, 0),
(33, 'Tony', 'New york', 'Capture.PNG', 7769042490, 'male', 'ironman@gmail.com', '3000', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cust_memb`
--

DROP TABLE IF EXISTS `cust_memb`;
CREATE TABLE IF NOT EXISTS `cust_memb` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `mid` (`mid`,`userid`,`regno`),
  KEY `userid` (`userid`),
  KEY `regno` (`regno`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_memb`
--

INSERT INTO `cust_memb` (`id`, `mid`, `userid`, `regno`, `deleted`) VALUES
(8, 1, 33, '46789', 0),
(9, 2, 32, '6515165', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `userid` int(11) NOT NULL,
  `type` enum('customer','admin') NOT NULL,
  PRIMARY KEY (`email`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `userid`, `type`) VALUES
('nikhil@gmail.com', '123456', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

DROP TABLE IF EXISTS `membership`;
CREATE TABLE IF NOT EXISTS `membership` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `duration` varchar(20) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`mid`, `type`, `duration`) VALUES
(1, 'silver', '84days'),
(2, 'gold', '180days'),
(3, 'platinum', '365days');

-- --------------------------------------------------------

--
-- Table structure for table `modification`
--

DROP TABLE IF EXISTS `modification`;
CREATE TABLE IF NOT EXISTS `modification` (
  `modid` int(11) NOT NULL AUTO_INCREMENT,
  `type` char(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `m_cost` int(11) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`modid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modification`
--

INSERT INTO `modification` (`modid`, `type`, `message`, `m_cost`, `deleted`) VALUES
(1, 'paint single', 'change the color of the car (one color)', 3000, 0),
(2, 'paint multi', 'paint the car (multicolor) with your design', 6000, 0),
(3, 'paint bike', 'modify the looks of your bike with your own design', 4000, 0),
(4, 'car tuning and looks', 'tuning the car for better performance and complete makeover with hardware changes', 30000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `total_amount` int(15) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`oid`),
  KEY `userid` (`userid`),
  KEY `proid` (`proid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `userid`, `proid`, `total_amount`, `deleted`) VALUES
(6, 32, 4, 1999, 0),
(7, 32, 8, 999, 0),
(8, 33, 4, 1999, 0),
(9, 33, 7, 1799, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `oid` int(11) NOT NULL,
  `total_amount` int(15) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`pid`),
  KEY `oid` (`oid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `proid` int(11) NOT NULL AUTO_INCREMENT,
  `proname` char(40) NOT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `sizecode` int(11) DEFAULT NULL,
  `grip` char(40) DEFAULT NULL,
  `type` enum('tyre','accessory') NOT NULL,
  `pimage` varchar(50) DEFAULT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`proid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`proid`, `proname`, `brand`, `price`, `sizecode`, `grip`, `type`, `pimage`, `deleted`) VALUES
(4, 'Bridgestone', 'bridgestone', 1999, 16, 'directional', 'tyre', 'bs.jpg', 0),
(6, 'CEAT bike', 'ceat', 1499, 14, 'directional', 'tyre', 'ceatbike.jpg', 0),
(7, 'MRF', 'mrf', 1799, 16, 'directional', 'tyre', 'mrf.jpg', 0),
(8, 'Jack', '', 999, NULL, NULL, 'accessory', 'caracc.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE IF NOT EXISTS `vehicle` (
  `regno` varchar(20) NOT NULL,
  `chassisno` varchar(20) NOT NULL,
  `type` enum('car','bike','suv','truck') NOT NULL,
  `model` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`regno`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`regno`, `chassisno`, `type`, `model`, `userid`, `deleted`) VALUES
('46789', '456789', 'car', 'audi', 33, 0),
('6515165', '91651651', 'car', 'celerio', 32, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_mod`
--

DROP TABLE IF EXISTS `vehicle_mod`;
CREATE TABLE IF NOT EXISTS `vehicle_mod` (
  `regno` varchar(20) NOT NULL,
  `modid` int(11) NOT NULL,
  KEY `regno` (`regno`),
  KEY `modid` (`modid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_tyre`
--

DROP TABLE IF EXISTS `vehicle_tyre`;
CREATE TABLE IF NOT EXISTS `vehicle_tyre` (
  `model` char(50) NOT NULL,
  `proid` int(11) NOT NULL,
  KEY `proid` (`proid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `customer` (`userid`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`modid`) REFERENCES `modification` (`modid`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `customer` (`userid`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`proid`) REFERENCES `product` (`proid`);

--
-- Constraints for table `cust_memb`
--
ALTER TABLE `cust_memb`
  ADD CONSTRAINT `cust_memb_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `membership` (`mid`),
  ADD CONSTRAINT `cust_memb_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `customer` (`userid`),
  ADD CONSTRAINT `cust_memb_ibfk_3` FOREIGN KEY (`regno`) REFERENCES `vehicle` (`regno`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `customer` (`userid`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `customer` (`userid`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`proid`) REFERENCES `product` (`proid`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`oid`) REFERENCES `orders` (`oid`);

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `customer` (`userid`);

--
-- Constraints for table `vehicle_mod`
--
ALTER TABLE `vehicle_mod`
  ADD CONSTRAINT `vehicle_mod_ibfk_2` FOREIGN KEY (`modid`) REFERENCES `modification` (`modid`),
  ADD CONSTRAINT `vehicle_mod_ibfk_3` FOREIGN KEY (`regno`) REFERENCES `vehicle` (`regno`);

--
-- Constraints for table `vehicle_tyre`
--
ALTER TABLE `vehicle_tyre`
  ADD CONSTRAINT `vehicle_tyre_ibfk_1` FOREIGN KEY (`proid`) REFERENCES `product` (`proid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
