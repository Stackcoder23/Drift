-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2020 at 12:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

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

CREATE TABLE `appointments` (
  `apid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `modid` int(11) NOT NULL,
  `date` date NOT NULL,
  `tcost` int(11) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(15) NOT NULL,
  `userid` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `total_amount` int(15) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `userid` int(11) NOT NULL,
  `fullname` char(50) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `gender` enum('male','female') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(1) DEFAULT NULL COMMENT '0-customer 1-admin',
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`userid`, `fullname`, `address`, `photo`, `phone`, `gender`, `email`, `password`, `type`, `deleted`) VALUES
(1, 'nikhil', 'pernem', NULL, 1234567890, 'male', 'nikhil@mail.com', '12345', 1, 0),
(3, 'nik', 'pernem', '3_1.png', 1234567899, 'male', 'nik123@mail.com', '12345', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cust_memb`
--

CREATE TABLE `cust_memb` (
  `id` int(15) NOT NULL,
  `mid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `plan` enum('silver','gold','platinum') NOT NULL,
  `regno` int(11) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `userid` int(11) NOT NULL,
  `type` enum('customer','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `userid`, `type`) VALUES
('nikhil@mail.com', '123456', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `mid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `modification`
--

CREATE TABLE `modification` (
  `modid` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `type` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `total_amount` int(15) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `total_amount` int(15) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `proid` int(11) NOT NULL,
  `proname` char(40) NOT NULL,
  `price` int(11) NOT NULL,
  `sizecode` int(11) DEFAULT NULL,
  `grip` char(40) DEFAULT NULL,
  `type` enum('tyre','accessory') NOT NULL,
  `pimage` varchar(255) DEFAULT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`proid`, `proname`, `price`, `sizecode`, `grip`, `type`, `pimage`, `deleted`) VALUES
(1, 'Michelin Energy XM2-145/80 R12 74T_Tubel', 3325, 145, 'Wet and Dry grip', 'tyre', '4_XM2_145_80_R12_74T.PNG', 0),
(5, 'Michelin Energy XM2-155/70 R13 75T Tubel', 3740, 155, 'Wet and Dry grip', 'tyre', '5_XM2_155.PNG', 0),
(6, 'Michelin Energy XM2-155/65 R13 73T Tubel', 3710, 155, 'Wet and Dry grip', 'tyre', '6_xm2_155_65.PNG', 0),
(7, 'Michelin Energy XM2-165/65 R13 77T Tubel', 4025, 165, 'Wet and Dry grip', 'tyre', '7_XM2_165.PNG', 0),
(8, 'Michelin Energy XM2-165/70 R14 81T Tubel', 4020, 165, 'Wet and Dry grip', 'tyre', '8_XM2_165_70_R14_81T.PNG', 0),
(9, 'Michelin Energy XM2-175/70 R13 82T Tubel', 4980, 175, 'Wet and Dry grip', 'tyre', '9_XM2_175.PNG', 0),
(10, 'Michelin Energy XM2-185/70 R14 88H Tubel', 5035, 185, 'Wet and Dry grip', 'tyre', '10_XM2_185.PNG', 0),
(11, 'Michelin Energy XM2-185/70 R13 86T Tubel', 5745, 185, 'Wet and Dry grip', 'tyre', '11_XM2_185_70_R13_86T.PNG', 0),
(12, 'Michelin Energy XM2-195/60 R14 86H Tubel', 6610, 195, 'Wet and Dry grip', 'tyre', '12_XM2_195.PNG', 0),
(14, 'Michelin Energy XM2-195/55 R16 87V Tubel', 8445, 195, 'Wet and Dry grip', 'tyre', '14_XM2_195_55_R16_87V.PNG', 0),
(15, 'Michelin Energy XM2-195/55 R15 85V Tubel', 5815, 195, 'Wet and Dry grip', 'tyre', '15_XM2_195_60_R14_86H.PNG', 0),
(16, 'Michelin Energy XM2-205/60 R15 91V Tubel', 8520, 205, 'Wet and Dry grip', 'tyre', '16_XM2_205.PNG', 0),
(17, 'Michelin Primacy 3 ST-225/50 R17 94V Tub', 11500, 225, 'Wet and Dry grip', 'tyre', '17_ST_225_50_R17_94V.PNG', 0),
(18, 'Michelin Primacy 3 ST-195/60 R15 88V Tub', 6585, 195, 'Wet and Dry grip', 'tyre', NULL, 0),
(19, 'Michelin Primacy 3 ST-215/55 R16 97W Tub', 14430, 215, 'Wet and Dry grip', 'tyre', '19_ST_225_50_R17_94V.PNG', 0),
(20, 'Michelin Primacy 3 ST-245/45 R17 99W Tub', 16260, 245, 'Wet and Dry grip', 'tyre', '20_245_45_r17_99w.PNG', 0),
(21, 'Michelin Primacy 3 ST-225/45 R17 94W Tub', 11400, 225, 'Wet and Dry grip', 'tyre', '21_225_45_R17_94w.PNG', 0),
(22, 'Michelin Primacy 3 ST-215/45 R17 Tubeles', 9830, 215, 'Wet and Dry grip', 'tyre', '22_215_45_r17.PNG', 0),
(23, 'Michelin LTX Force-235/75 R15 Tubeless', 9275, 235, 'Wet and Dry grip', 'tyre', '23_LTX_235_75_R15.PNG', 0),
(24, 'Michelin LTX Force-235/70 R16 Tubeless', 8955, 235, 'Wet and Dry grip', 'tyre', '24_LTX_235_75_R15.PNG', 0),
(25, 'Michelin LTX Force-215/65 R16 Tubeless', 9900, 215, 'Wet and Dry grip', 'tyre', '25_LTX_235_75_R15.PNG', 0),
(26, 'Michelin LTX Force-245/70 R16 Tubeless', 12000, 245, 'Wet and Dry grip', 'tyre', '26_LTX_235_75_R15.PNG', 0),
(27, 'Michelin LTX Force-265/70 R15 Tubeless', 11160, 265, 'Wet and Dry grip', 'tyre', '27_LTX_235_75_R15.PNG', 0),
(28, 'Michelin LTX Force-31x10.5 R15 Tubeless', 11405, 31, 'Wet and Dry grip', 'tyre', '28_LTX_235_75_R15.PNG', 0),
(29, 'Michelin LTX Force-275/70 R16 114T Tubel', 11490, 275, 'Wet and Dry grip', 'tyre', '29_LTX_235_75_R15.PNG', 0),
(30, 'Michelin Primacy SUV-225/65 R17 Tubeless', 13960, 225, 'Wet and Dry grip', 'tyre', '30_suv.PNG', 0),
(31, 'Michelin Primacy SUV-215/65 R16 Tubeless', 9900, 0, 'Wet and Dry grip', 'tyre', '31_suv.PNG', 0),
(32, 'Michelin Primacy SUV-265/60 R18 Tubeless', 17910, 0, 'Wet and Dry grip', 'tyre', '32_suv.PNG', 0),
(33, 'Michelin Primacy SUV-235/60 R17 Tubeless', 18710, 0, 'Wet and Dry grip', 'tyre', '33_suv.PNG', 0),
(34, 'Michelin Primacy SUV-285/60 R18 Tubeless', 22260, 0, 'Wet and Dry grip', 'tyre', '34_suv.PNG', 0),
(35, 'Michelin Pilot Sport 4 SUV-235/65 R17 10', 15515, 0, 'Wet and Dry grip', 'tyre', '35_pilot suv sport.PNG', 0),
(36, 'Michelin Pilot Sport 4 SUV-255/55 R18 10', 18875, 0, 'Wet and Dry grip', 'tyre', '36_suv pilot sport.PNG', 0),
(37, 'Michelin Pilot Sport 4 SUV-235/55 R19 10', 21905, 0, 'Wet and Dry grip', 'tyre', '37_pilot suv sport.PNG', 0),
(38, 'Michelin Pilot Sport 4 SUV-265/50 R19 11', 20980, 0, 'Wet and Dry grip', 'tyre', '38_pilot suv sport.PNG', 0),
(39, 'Michelin Pilot Sport 4 SUV-275/55 R19 11', 22620, 0, 'Wet and Dry grip', 'tyre', '39_suv pilot sport.PNG', 0),
(40, 'Michelin Pilot Sport 4 SUV-275/40 R20 10', 23955, 0, 'Wet and Dry grip', 'tyre', '40_suv pilot sport.PNG', 0),
(41, 'Michelin Pilot Sport 4 SUV-295/40 R20 11', 23615, 0, 'Wet and Dry grip', 'tyre', '41_pilot suv sport.PNG', 0),
(42, 'Michelin Pilot Sport 4 SUV-295/35 R21 10', 35430, 0, 'Wet and Dry grip', 'tyre', '42_suv pilot sport.PNG', 0),
(43, 'Michelin PRIMACY HP-235/55 R17 99W MO Tu', 17005, 235, 'Wet and Dry grip', 'tyre', '43_primacy.PNG', 0),
(44, 'Michelin PRIMACY HP-255/45 R18 99Y MO Tu', 25580, 255, 'Wet and Dry grip', 'tyre', '44_primacy.PNG', 0),
(45, 'Michelin CITY PRO-90/100 R10 53J Tubeles', 2138, 90, 'Dry grip', 'tyre', '45_bike.PNG', 0),
(46, 'Michelin CITY PRO-2.75 R18 48P', 1650, 3, 'Dry grip', 'tyre', '46_bike.PNG', 0),
(47, 'Michelin CITY PRO-3.00 R17 50P Tubeless', 1750, 3, 'Dry grip', 'tyre', '47_bike.PNG', 0),
(48, 'Michelin CITY PRO-80/100 R18 47P', 2230, 80, 'Dry grip', 'tyre', '48_bike.PNG', 0),
(49, 'Michelin CITY PRO-3.00 R17 50P', 1750, 3, 'Wet and Dry grip Tube', 'tyre', '49_bike.PNG', 0),
(50, 'Michelin PILOT SPORTY-100/80 R17 52P Tub', 1700, 100, 'Wet and Dry grip', 'tyre', '50_bike1.PNG', 0),
(51, 'Michelin PILOT SPORTY-120/80 R17 61P Tub', 2400, 120, 'Wet and Dry grip', 'tyre', '51_bike1.PNG', 0),
(52, 'Michelin PILOT SPORTY-100/90 R17 55P', 2500, 100, 'Wet and Dry grip', 'tyre', '52_bike1.PNG', 0),
(53, 'Michelin Scorcher 31-100/90 B19 57H Tube', 11600, 100, 'Wet and Dry grip', 'tyre', '53_bike3.PNG', 0),
(54, 'Michelin Scorcher 31-150/80 B16 77H Tube', 14130, 150, 'Wet and Dry grip', 'tyre', '54_bike3.PNG', 0),
(55, 'Michelin Scorcher 11-100/80 R17 52H Tube', 8840, 100, 'Wet and Dry grip', 'tyre', '55_bike4.PNG', 0),
(56, 'Michelin Scorcher 11-200/55 R17 78V Tube', 21100, 200, 'Wet and Dry grip', 'tyre', '56_bike4.PNG', 0),
(57, 'MRF ZEC-135/70 R12 65L Tubeless', 1630, 135, 'Wet and Dry grip', 'tyre', '57_mrf.PNG', 0),
(58, 'MRF ZEC-155/65 R12 71S Tubeless', 2110, 155, 'Wet and Dry grip', 'tyre', '58_mrf.PNG', 0),
(59, 'MRF ZEC-155/80 R13 79T Tubeless', 2745, 155, 'Wet and Dry grip', 'tyre', '59_mrf.PNG', 0),
(60, 'MRF SW99-4.5/12', 2165, 5, 'Wet and Dry grip', 'tyre', '60_mrf1.PNG', 0),
(61, 'MRF SW99-5.65/12', 1985, 6, 'Wet and Dry grip', 'tyre', '61_mrf1.PNG', 0),
(62, 'MRF ZCC-155/80 R13 79S Tubeless', 2650, 155, 'Wet and Dry grip', 'tyre', '62_mrf3.PNG', 0),
(63, 'MRF ZCC-145/70 R12 Tubeless', 2100, 145, 'Wet and Dry grip', 'tyre', '63_mrf3.PNG', 0),
(64, 'MRF ZCC-155/80 R13 Tubeless', 3357, 155, 'Wet and Dry grip', 'tyre', '64_mrf3.PNG', 0),
(65, 'MRF Zapper FG-90/90 R12', 850, 90, 'Wet and Dry grip', 'tyre', '65_bikemrf.PNG', 0),
(66, 'MRF Zapper FG-90/90 R12 Tubeless', 1770, 90, 'Wet and Dry grip', 'tyre', '66_bikemrf.PNG', 0),
(67, 'MRF Nylogrip Plus-2.75/18', 1375, 3, 'Wet and Dry grip', 'tyre', '67_mrfb.PNG', 0),
(68, 'Apollo ACTIGRIP S3-90/100 R10', 1680, 90, 'Wet and Dry grip', 'tyre', '68_apollo.PNG', 0),
(69, 'Apollo ACTIGRIP S4-90/100 R10', 1640, 90, 'Wet and Dry grip', 'tyre', '69_ap.PNG', 0),
(70, 'Apollo ACTIZIP S1-90/100 R10 Tubeless', 1690, 90, 'Dry grip', 'tyre', '70_apollo.PNG', 0),
(71, 'Apollo ACTIZIP R3-100/90 R18 Tubeless', 2460, 0, 'Wet and Dry grip', 'tyre', '71_ap1.PNG', 0),
(72, 'Apollo ACTIZIP R3-100/90 R17 Tubeless', 2120, 100, 'Wet and Dry grip', 'tyre', '72_ap1.PNG', 0),
(73, 'Apollo Amazer 3G-145/70 R12 69T Tubeless', 1800, 145, 'Wet and Dry grip', 'tyre', '73_apcar.PNG', 0),
(74, 'Apollo Amazer 3G-145/70 R13 71T Tubeless', 2280, 145, 'Wet and Dry grip', 'tyre', '74_apcar.PNG', 0),
(75, 'Apollo Amazer 3G-155/65 R14 75T Tubeless', 2725, 155, 'Wet and Dry grip', 'tyre', '75_apcar.PNG', 0),
(76, 'Apollo Amazer 3G-155/70 R13 75T Tubeless', 3523, 155, 'Wet and Dry grip', 'tyre', '76_apcar.PNG', 0),
(77, 'Apollo Amazer 3G-165/80 R14 85T Tubeless', 2600, 165, 'Wet and Dry grip', 'tyre', '77_apcar.PNG', 0),
(78, 'Apollo Amazer 4G-145/80 R12 74T Tubeless', 2950, 145, 'Wet and Dry grip', 'tyre', NULL, 0),
(79, 'Apollo Amazer 4G-175/70 R13 82T Tubeless', 3300, 175, 'Wet and Dry grip', 'tyre', '79_apol.PNG', 0),
(80, 'Apollo Amazer 4G-185/70 R14 88T Tubeless', 3300, 185, 'Wet and Dry grip', 'tyre', '80_apol.PNG', 0),
(81, 'Apollo Amazer 3G Maxx-195/65 R14 89T Tub', 8480, 195, 'Wet and Dry grip', 'tyre', '81_apol.PNG', 0),
(82, 'CEAT Milaze X3-165/65 R13 77T Tubeless', 3150, 165, 'Wet and Dry grip', 'tyre', '82_ceat.PNG', 0),
(83, 'CEAT Milaze X3-165/65 R14 79T Tubeless', 3650, 165, 'Wet and Dry grip', 'tyre', '83_ceat.PNG', 0),
(84, 'CEAT Milaze X3-175/65 R15 84T Tubeless', 4685, 175, 'Wet and Dry grip', 'tyre', '84_ceat1.PNG', 0),
(85, 'CEAT Milaze X3-185/70 R14 88T Tubeless', 4045, 185, 'Wet and Dry grip', 'tyre', '85_ceat.PNG', 0),
(86, 'CEAT CZAR H/T-215/75 R15 100S Tubeless', 6105, 215, 'Wet and Dry grip', 'tyre', '86_c1.PNG', 0),
(87, 'CEAT CZAR HP-205/60 R16 92H Tubeless', 7605, 205, 'Wet and Dry grip', 'tyre', '87_cc1.PNG', 0),
(88, 'CEAT CZAR HP-235/65 R17 104H Tubeless', 10240, 235, 'Wet and Dry grip', 'tyre', '88_cc1.PNG', 0),
(89, 'CEAT CZAR HP-205/65 R16 95H Tubeless', 6965, 205, 'Wet and Dry grip', 'tyre', '89_ceat.PNG', 0),
(90, 'CEAT CZAR Sports-215/65 R16 98H Tubeless', 7850, 215, 'Wet and Dry grip', 'tyre', '90_caa.PNG', 0),
(91, 'CEAT Milaze (Scooter)-90/100 R10 53J', 1000, 90, 'Wet and Dry grip', 'tyre', '91_bkceat.PNG', 0),
(92, 'CEAT Milaze (Scooter)-90/90 R12 54J Tube', 905, 90, 'Wet and Dry grip', 'tyre', '92_bkceat.PNG', 0),
(93, 'CEAT Milaze (Scooter)-3.50/R10 51J', 1000, 4, 'Wet and Dry grip', 'tyre', '93_bkceat.PNG', 0),
(94, 'CEAT Gripp (Scooter)-90/100 R10 53J', 1025, 90, 'Wet and Dry grip', 'tyre', '94_cearb.PNG', 0),
(95, 'CEAT Gripp (Scooter)-90/90 R12 54J', 1025, 90, 'Wet and Dry grip', 'tyre', '95_cearb.PNG', 0),
(96, 'CEAT SECURA ZOOM F-80/100 R18 47P Tubele', 1445, 80, 'Wet and Dry grip', 'tyre', '96_c1b.PNG', 0),
(97, 'CEAT SECURA ZOOM F-90/90 R17 49P Tubeles', 1485, 90, 'Wet and Dry grip', 'tyre', '97_c2b.PNG', 0),
(98, 'CEAT SECURA ZOOM F-2.75/R18 42P', 1470, 3, 'Wet and Dry grip', 'tyre', '98_c1b.PNG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `regno` int(11) NOT NULL,
  `chassisno` int(11) NOT NULL,
  `type` enum('car','bike','suv','truck') NOT NULL,
  `model` char(50) NOT NULL,
  `userid` int(11) NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`regno`, `chassisno`, `type`, `model`, `userid`, `deleted`) VALUES
(123456, 1234585, 'car', 'suv', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_mod`
--

CREATE TABLE `vehicle_mod` (
  `regno` int(11) NOT NULL,
  `modid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_tyre`
--

CREATE TABLE `vehicle_tyre` (
  `model` char(50) NOT NULL,
  `proid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`apid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `modid` (`modid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `proid` (`proid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `cust_memb`
--
ALTER TABLE `cust_memb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mid` (`mid`,`userid`,`regno`),
  ADD KEY `userid` (`userid`),
  ADD KEY `regno` (`regno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `modification`
--
ALTER TABLE `modification`
  ADD PRIMARY KEY (`modid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `proid` (`proid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `oid` (`oid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`proid`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`regno`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `vehicle_mod`
--
ALTER TABLE `vehicle_mod`
  ADD KEY `regno` (`regno`),
  ADD KEY `modid` (`modid`);

--
-- Indexes for table `vehicle_tyre`
--
ALTER TABLE `vehicle_tyre`
  ADD KEY `proid` (`proid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `apid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cust_memb`
--
ALTER TABLE `cust_memb`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modification`
--
ALTER TABLE `modification`
  MODIFY `modid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `proid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

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
  ADD CONSTRAINT `vehicle_mod_ibfk_1` FOREIGN KEY (`regno`) REFERENCES `vehicle` (`regno`),
  ADD CONSTRAINT `vehicle_mod_ibfk_2` FOREIGN KEY (`modid`) REFERENCES `modification` (`modid`);

--
-- Constraints for table `vehicle_tyre`
--
ALTER TABLE `vehicle_tyre`
  ADD CONSTRAINT `vehicle_tyre_ibfk_1` FOREIGN KEY (`proid`) REFERENCES `product` (`proid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
