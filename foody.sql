-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 11:14 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foody`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `adminUsrname` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `userType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminUsrname`, `adminPass`, `userType`) VALUES
(1, 'Hana', 'Na1', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `general_user`
--

CREATE TABLE `general_user` (
  `generalUsrID` int(11) NOT NULL,
  `generalUsrName` varchar(255) NOT NULL,
  `generalUsrPass` varchar(255) NOT NULL,
  `userType` varchar(100) NOT NULL,
  `usrFname` varchar(255) DEFAULT NULL,
  `usrEmail` varchar(255) DEFAULT NULL,
  `usrPhoneNo` varchar(255) DEFAULT NULL,
  `usrDeliveryAddress` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_user`
--

INSERT INTO `general_user` (`generalUsrID`, `generalUsrName`, `generalUsrPass`, `userType`, `usrFname`, `usrEmail`, `usrPhoneNo`, `usrDeliveryAddress`) VALUES
(1, 'Fiz', 'Fiz2703', 'General User', 'Fizi', 'fizi98@gmail.com', '0199870988', 'Blok A'),
(2, 'Nad', 'Nad3@', 'General User', 'nadirah', 'nad@gmail.com', '0122334455', 'Blok H'),
(3, 'Hafizah', 'fizah345@', 'General User', 'Hafizah', 'fizah@gmail.com', '0198765432', 'Blok I'),
(4, 'Fifi', 'fifi678$', 'General User', 'Fifi', 'fifi@gmail.com', '0147852369', 'Blok G');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_owner`
--

CREATE TABLE `restaurant_owner` (
  `restaurantOwnerID` int(11) NOT NULL,
  `restaurantOwnerUsrname` varchar(255) NOT NULL,
  `restaurantOwnerPass` varchar(255) NOT NULL,
  `userType` varchar(100) NOT NULL,
  `restaurantName` varchar(255) DEFAULT NULL,
  `restaurantLocation` varchar(255) DEFAULT NULL,
  `restaurantTimeOperation` varchar(255) DEFAULT NULL,
  `restaurantContactNo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant_owner`
--

INSERT INTO `restaurant_owner` (`restaurantOwnerID`, `restaurantOwnerUsrname`, `restaurantOwnerPass`, `userType`, `restaurantName`, `restaurantLocation`, `restaurantTimeOperation`, `restaurantContactNo`) VALUES
(1, 'CikYah', 'yah50', 'Restaurant Owner', NULL, NULL, NULL, NULL),
(2, 'CikRozita', 'Zita40', 'Restaurant Owner', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rider`
--

CREATE TABLE `rider` (
  `riderID` int(11) NOT NULL,
  `riderUname` varchar(255) NOT NULL,
  `riderPass` varchar(255) NOT NULL,
  `userType` varchar(100) NOT NULL,
  `riderPhoneNo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rider`
--

INSERT INTO `rider` (`riderID`, `riderUname`, `riderPass`, `userType`, `riderPhoneNo`) VALUES
(1, 'Shafiq', 'R001', 'Rider', '0134567890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `general_user`
--
ALTER TABLE `general_user`
  ADD PRIMARY KEY (`generalUsrID`);

--
-- Indexes for table `restaurant_owner`
--
ALTER TABLE `restaurant_owner`
  ADD PRIMARY KEY (`restaurantOwnerID`);

--
-- Indexes for table `rider`
--
ALTER TABLE `rider`
  ADD PRIMARY KEY (`riderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_user`
--
ALTER TABLE `general_user`
  MODIFY `generalUsrID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `restaurant_owner`
--
ALTER TABLE `restaurant_owner`
  MODIFY `restaurantOwnerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rider`
--
ALTER TABLE `rider`
  MODIFY `riderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
