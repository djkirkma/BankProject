-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 06:16 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `AccountNumber` int(4) NOT NULL,
  `FirstName` varchar(256) NOT NULL,
  `LastName` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Balance` int(4) NOT NULL,
  `AccType` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`AccountNumber`, `FirstName`, `LastName`, `Email`, `Balance`, `AccType`) VALUES
(1, 'Doug', 'Kirkman', 'ABC@gmail.com', 0, 'Savings'),
(3, 'Doug', 'Kirkman', 'djkirkma@gmail.com', 0, ''),
(4, 'Doug', 'Kirkman', 'djkirkma@gmail.com', 0, ''),
(5, 'Doug', 'Kirkman', 'djkirkma@gmail.com', 0, ''),
(6, 'Doug', 'Kirkman', 'djkirkma@gmail.com', 0, ''),
(7, 'Doug', 'Kirkman', 'djkirkma@gmail.com', 0, ''),
(8, 'Doug', 'Kirkman', 'djkirkma@gmail.com', 0, ''),
(9, 'Doug', 'Kirkman', 'djkirkma@gmail.com', 0, ''),
(10, 'Doug', 'Kirkman', 'djkirkma@gmail.com', 0, ''),
(11, 'Dou', 'Kirkm', 'djkirkma@gmail.com', 0, ''),
(12, 'Test', 'test', 'TEST@GMAIL.COM', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `ID` int(11) NOT NULL,
  `Name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`ID`, `Name`) VALUES
(1, 'Deposit'),
(2, 'Transfer'),
(3, 'Create Account');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`AccountNumber`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `AccountNumber` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
