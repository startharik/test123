-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2017 at 06:40 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lecturedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

CREATE TABLE `usertb` (
  `Username` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `College` varchar(10) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Info` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertb`
--

INSERT INTO `usertb` (`Username`, `Name`, `Email`, `Gender`, `Phone`, `Address`, `College`, `Password`, `Info`) VALUES
('qwert', 'Testing', 'noone@mail.com', 'Male', '01348546', 'Bangi', 'CSIT', 'qwert', 'no'),
('admin', 'admin', 'admin@gmail.com', 'Male', '019999999', 'Bangi', 'CSIT', '12345', 'admin'),
('asdfgh', 'qwetrty', 'rtuyuiyt@qwer.com', 'Male', '012345874', 'qweqwe				', 'Masters', '12345', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertb`
--
ALTER TABLE `usertb`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Username` (`Username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
