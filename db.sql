-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2018 at 12:38 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skn_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `skn_grievance_admin`
--

CREATE TABLE `skn_grievance_admin` (
  `User` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skn_grievance_admin`
--

INSERT INTO `skn_grievance_admin` (`User`, `Password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `skn_grievance_complaints`
--

CREATE TABLE `skn_grievance_complaints` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Department` varchar(12) NOT NULL,
  `Position` varchar(20) NOT NULL,
  `Year` varchar(12) NOT NULL,
  `Division` varchar(1) NOT NULL,
  `Roll` varchar(3) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Concern` varchar(30) NOT NULL,
  `Detail` varchar(1000) NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Time` varchar(15) NOT NULL,
  `Confirmed` varchar(1) NOT NULL,
  `Resolved` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skn_grievance_complaints`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skn_grievance_complaints`
--
ALTER TABLE `skn_grievance_complaints`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skn_grievance_complaints`
--
ALTER TABLE `skn_grievance_complaints`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
