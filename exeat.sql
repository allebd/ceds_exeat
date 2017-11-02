-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2017 at 12:45 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exeat`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminInfo`
--

CREATE TABLE `adminInfo` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminInfo`
--

INSERT INTO `adminInfo` (`id`, `username`, `password`) VALUES
(1, 'admin', 'sssss'),
(2, 'adminxyz', 'sssss');

-- --------------------------------------------------------

--
-- Table structure for table `exeatinfo`
--

CREATE TABLE `exeatinfo` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `sname` text NOT NULL,
  `gender` text NOT NULL,
  `hall` text NOT NULL,
  `roomNo` text NOT NULL,
  `mNumber` text NOT NULL,
  `level` text NOT NULL,
  `depart` text NOT NULL,
  `course` text NOT NULL,
  `Dcontact` text NOT NULL,
  `OContact` text NOT NULL,
  `email` text NOT NULL,
  `reason` text NOT NULL,
  `Dleaving` text NOT NULL,
  `Tleaving` text NOT NULL,
  `TReturning` text NOT NULL,
  `ExeatType` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exeatinfo`
--

INSERT INTO `exeatinfo` (`id`, `fname`, `sname`, `gender`, `hall`, `roomNo`, `mNumber`, `level`, `depart`, `course`, `Dcontact`, `OContact`, `email`, `reason`, `Dleaving`, `Tleaving`, `TReturning`, `ExeatType`, `status`) VALUES
(1, 's', 's', 'Male', 's', 's', 's', 's', 's', 's', 'ss', 's', 'simialuko24@gmail.com', '', 's', 's', 's', 'Day', 'accepted'),
(2, 'a', 'a', 'Male', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'simi@gmail.com', 's', 's', 's', 's', 'Day', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `id` int(11) NOT NULL,
  `usern` text NOT NULL,
  `passwrd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `usern`, `passwrd`) VALUES
(1, '14cj016747', 'sssss'),
(2, '14cj016748', 'aaaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminInfo`
--
ALTER TABLE `adminInfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exeatinfo`
--
ALTER TABLE `exeatinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminInfo`
--
ALTER TABLE `adminInfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `exeatinfo`
--
ALTER TABLE `exeatinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
