-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 27, 2020 at 05:35 PM
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
-- Database: `shipping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '2017-05-13 11:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `Tracking` varchar(30) NOT NULL,
  `UserName` varchar(80) NOT NULL,
  `Password` varchar(80) NOT NULL,
  `FirstName` varchar(80) DEFAULT NULL,
  `LastName` varchar(80) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `DepositDate` varchar(50) NOT NULL,
  `NextOfKin` varchar(80) NOT NULL,
  `AssertType` varchar(80) NOT NULL,
  `AssertStatus` varchar(10) NOT NULL,
  `ChargePerMonth` varchar(20) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `Tracking`, `UserName`, `Password`, `FirstName`, `LastName`, `PhoneNumber`, `Address`, `DepositDate`, `NextOfKin`, `AssertType`, `AssertStatus`, `ChargePerMonth`, `CreationDate`, `UpdationDate`) VALUES
(10, '123456', 'holy', '827ccb0eea8a706c4c34a16891f84e7b', 'Fabrice', 'Dogbey', '0249972440', 'Diabase Street', '2020-08-27', 'Holy', 'Car', 'Active', '299', '2020-08-11 12:43:51', '2020-08-27 06:21:16'),
(22, '3236611', 'berrydeblaq', 'db70e9a5493a6d933d8409cd7885e6c1', 'Abdullah', 'Anaman', '+233249972440', 'Diabase St, Lapaz', '2020-08-27', 'Salamatu', 'Private Jet', 'Active', '50000', '2020-08-27 06:22:51', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
