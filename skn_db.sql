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
-- Table structure for table `_admin_`
--

CREATE TABLE `_admin_` (
  `User` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_admin_`
--

INSERT INTO `_admin_` (`User`, `Password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `_complaints_`
--

CREATE TABLE `_complaints_` (
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
-- Dumping data for table `_complaints_`
--

INSERT INTO `_complaints_` (`ID`, `Name`, `Department`, `Position`, `Year`, `Division`, `Roll`, `Phone`, `Email`, `Subject`, `Concern`, `Detail`, `Date`, `Time`, `Confirmed`, `Resolved`) VALUES
(93, 'Tandale Shubham Parmeshwar', 'CSE', 'Student', 'Third Year', '-', '60', '7875175975', 'tsp@outlook.in', 'Study Related', 'Library Related', 'Less books available of techmax', '25/08/18', '09:46:43am', '0', '0'),
(94, 'Bhure Rushikesh Madhukar', 'Mechanical', 'Student', 'Third Year', 'C', '4', '7756963801', 'rmbhure829@gmail.com', 'Campus', 'Campus Related', 'there is no study environement as like other college', '25/08/18', '09:59:21am', '0', '1'),
(96, 'Tandale Saurabh Parmeshwar', 'Electrical', 'Student', 'First Year', 'D', '1', '9579809745', 'tsp@gmail.com', 'Teachers', 'Faculty Related', 'Teachers are not teaching well', '25/08/18', '10:10:18am', '0', '1'),
(97, 'saurabh', 'mech', 'other', '', '', '', '4654198748', 'gsag@guydag.ciuh', 'hfdjfd', 'hiugfjhugf', 'jhbfhdsbjhf', '', '', '0', '0'),
(98, 'tandale saurabh parmeshwar', 'Mechanical', 'Other Stakeholder', '', '', '', '9579809742', 'saurabh@gmail.com', 'study', 'Library Related', 'fdmjnhgmknhgmkljnfknogfhdh', '29/08/18', '11:18:54am', '0', '1'),
(99, 'tandale saurabh parmeshwar', 'Mechanical', 'Other Stakeholder', '', '', '', '9579809742', 'saurabh@gmail.com', 'study', 'Library Related', 'fdmjnhgmknhgmkljnfknogfhdh', '29/08/18', '11:23:41am', '0', '1'),
(100, 'tandale shubham parmeshwar', 'CSE', 'Student', 'Second Year', 'D', '65', '7875175975', 'saurabh@gmail.com', 'study', 'Faculty Related', 'vduygbfduyhgfdsuygfdbuhyjkfdsbguydstfguydhf', '29/08/18', '05:35:02pm', '1', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `_complaints_`
--
ALTER TABLE `_complaints_`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `_complaints_`
--
ALTER TABLE `_complaints_`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
