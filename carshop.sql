-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 01:13 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `carowner`
--

CREATE TABLE `carowner` (
  `carOwner_id` int(11) NOT NULL,
  `carOwner_fullName` varchar(32) NOT NULL,
  `carOwner_address` varchar(32) NOT NULL,
  `carOwner_contact` varchar(32) NOT NULL,
  `user` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carowner`
--

INSERT INTO `carowner` (`carOwner_id`, `carOwner_fullName`, `carOwner_address`, `carOwner_contact`, `user`, `pass`, `email`, `flag`) VALUES
(1, 'Allysha', 'Stressa ba ani', '63935541252', ' day', 'mon', 'brix.does@gmail.com', 1),
(2, 'Jose Enjamemar A. Moraga', 'Li-loan City, Cebu', '639525541287', 'test1', '', 'je@gmail.com', 1),
(3, 'Jairus Albano', 'Talamban, Cebu City', '639286532302', '', '', 'mileyjairus@gmail.com', 1),
(4, 'Test 3', 'codecs', '0923394958', 'testuser', 'testpass', 'test@email.com', 0),
(7, 'Dili', 'Duljo,', '09192585156', ' test', 'test', 'jomart_bayot@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `carunit`
--

CREATE TABLE `carunit` (
  `carUnit_id` int(11) NOT NULL,
  `carUnitType` enum('SUV','TRUCK','SEDAN','SPORTS CAR','MULTICAB','PICK UP') DEFAULT NULL,
  `car_brand` varchar(32) DEFAULT NULL,
  `car_model` varchar(32) DEFAULT NULL,
  `car_modelyear` year(4) NOT NULL,
  `carOwner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carunit`
--

INSERT INTO `carunit` (`carUnit_id`, `carUnitType`, `car_brand`, `car_model`, `car_modelyear`, `carOwner_id`) VALUES
(1, 'SUV', 'MITSUBISHI', 'MONTEROSPORT', 2015, 0),
(2, 'TRUCK', 'TATA', 'Tata Truck', 2016, 0),
(3, '', 'SunStar', '2017', 0000, 1),
(4, 'SPORTS CAR', 'Accent', '2015', 0000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `defectedcarparts`
--

CREATE TABLE `defectedcarparts` (
  `dcp_id` int(11) NOT NULL,
  `dcp_brand` varchar(32) DEFAULT NULL,
  `dcp_model` varchar(32) DEFAULT NULL,
  `dcp_part` varchar(32) DEFAULT NULL,
  `carUnit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `defectedcarparts`
--

INSERT INTO `defectedcarparts` (`dcp_id`, `dcp_brand`, `dcp_model`, `dcp_part`, `carUnit_id`) VALUES
(1, 'Toyota', 'Vios', 'Carburator', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mechanic`
--

CREATE TABLE `mechanic` (
  `mechanic_id` int(11) NOT NULL,
  `mechanicFullname` varchar(32) DEFAULT NULL,
  `mechanicAddress` varchar(32) DEFAULT NULL,
  `mechanicContact` varchar(32) DEFAULT NULL,
  `mechanicEmail` varchar(32) DEFAULT NULL,
  `shop_id` int(11) NOT NULL,
  `repaird_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messagetemplate`
--

CREATE TABLE `messagetemplate` (
  `message_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `message_title` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messagetemplate`
--

INSERT INTO `messagetemplate` (`message_id`, `message`, `message_title`) VALUES
(1, 'This is to Notify the Car Owner of the Progress of the car.', 'Test Message'),
(2, 'This is to Verify the Car Owners Cellphone Number', 'Test Message 2'),
(3, 'Message Testing 3', 'Test Message 3');

-- --------------------------------------------------------

--
-- Table structure for table `repair`
--

CREATE TABLE `repair` (
  `dcp_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `sms_id` int(11) NOT NULL,
  `repaird_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL,
  `shopName` varchar(32) DEFAULT NULL,
  `shopType` varchar(32) DEFAULT NULL,
  `shopOwner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shopowner`
--

CREATE TABLE `shopowner` (
  `shopOwner_id` int(11) NOT NULL,
  `shopOwnerFullname` varchar(32) DEFAULT NULL,
  `shopOwnerContact` varchar(32) DEFAULT NULL,
  `shopOwnerAddress` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `sms_id` int(11) NOT NULL,
  `message` text,
  `number` varchar(32) DEFAULT NULL,
  `sentTime` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carowner`
--
ALTER TABLE `carowner`
  ADD PRIMARY KEY (`carOwner_id`);

--
-- Indexes for table `carunit`
--
ALTER TABLE `carunit`
  ADD PRIMARY KEY (`carUnit_id`);

--
-- Indexes for table `defectedcarparts`
--
ALTER TABLE `defectedcarparts`
  ADD PRIMARY KEY (`dcp_id`);

--
-- Indexes for table `mechanic`
--
ALTER TABLE `mechanic`
  ADD PRIMARY KEY (`mechanic_id`);

--
-- Indexes for table `messagetemplate`
--
ALTER TABLE `messagetemplate`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `repair`
--
ALTER TABLE `repair`
  ADD PRIMARY KEY (`repaird_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `shopowner`
--
ALTER TABLE `shopowner`
  ADD PRIMARY KEY (`shopOwner_id`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`sms_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carowner`
--
ALTER TABLE `carowner`
  MODIFY `carOwner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `carunit`
--
ALTER TABLE `carunit`
  MODIFY `carUnit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `defectedcarparts`
--
ALTER TABLE `defectedcarparts`
  MODIFY `dcp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mechanic`
--
ALTER TABLE `mechanic`
  MODIFY `mechanic_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messagetemplate`
--
ALTER TABLE `messagetemplate`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `repair`
--
ALTER TABLE `repair`
  MODIFY `repaird_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shopowner`
--
ALTER TABLE `shopowner`
  MODIFY `shopOwner_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `sms_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
