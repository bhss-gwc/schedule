-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2020 at 04:53 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhss_schedule`
--

-- --------------------------------------------------------

--
-- Table structure for table `introduce_responses`
--

CREATE TABLE `introduce_responses` (
  `id` int(6) NOT NULL,
  `clubname` varchar(30) NOT NULL,
  `clubsponsorname` varchar(30) NOT NULL,
  `clubsponsoremail` varchar(30) NOT NULL,
  `clubmeetinglocation` varchar(30) NOT NULL,
  `clubmeetingdescription` varchar(30) NOT NULL,
  `clubpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `introduce_responses`
--

INSERT INTO `introduce_responses` (`id`, `clubname`, `clubsponsorname`, `clubsponsoremail`, `clubmeetinglocation`, `clubmeetingdescription`, `clubpassword`) VALUES
(10, 'Coding Club', 'Mr. Pizzo', 'spizzo@mccsc.net', 'A325', 'Do stuf', 'abc123'),
(12, 'Freee Debate Case', 'Katrina', 'Katrina', 'Katrina', 'Katrina', 'freestuf'),
(13, 'sdga', 'wrtqw', 'qrtqe', 'ertqet', 'ertqe', 'af'),
(14, 'admin', 'Mr. Pizzo', 'spizzo@mccsc.net', 'A325', 'do stuff', 'admin'),
(15, 'overseer', 'Mr. Pizzo', 'spizzo@mccsc.net', 'A325', 'do stuff', 'overseer');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` int(6) NOT NULL,
  `meetingdate` varchar(30) NOT NULL,
  `starttime` varchar(30) NOT NULL,
  `stoptime` varchar(30) NOT NULL,
  `clubmeetinglocation` varchar(30) NOT NULL,
  `clubmeetingdescription` varchar(30) NOT NULL,
  `clubname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `meetingdate`, `starttime`, `stoptime`, `clubmeetinglocation`, `clubmeetingdescription`, `clubname`) VALUES
(26, '12/6/18', '3 pm', '4 pm', 'A325', 'Do stuf', ''),
(27, '12/6/18', '3 pm', '4 pm', '', '', ''),
(28, 'right now', 'right now', 'as soon as i get the case', 'Katrina', 'Katrina', ''),
(29, '12/6/18', '3 pm', '4 pm', 'A325', 'Do stuf', ''),
(30, '12/6/18', '3 pm', '4 pm', 'A325', 'Do stuf', ''),
(31, 'right now', 'right now', 'as soon as i get the case', 'Katrina', 'Katrina', ''),
(32, '12/6/18', '3 pm', '4 pm', 'A325', 'Do stuf', ''),
(33, '12/6/18', '3 pm', '4 pm', 'A325', 'Do stuf', ''),
(34, '1/7/19', '10:15', '11:00', 'A325', 'Fun stuf', ''),
(35, '12/6/18', '3 pm', 'as soon as i get the case', 'A325', 'Do stuf', 'Coding Club'),
(36, 'right now', 'right now', 'as soon as i get the case', 'Katrina', 'Katrina', 'Coding Club'),
(37, 'right now', 'right now', 'as soon as i get the case', 'A325', 'Do stuf', 'Coding Club'),
(38, 'right now', 'right now', 'as soon as i get the case', 'A325', 'Do stuf', 'Coding Club'),
(39, '1/7/19', '10:15', '11:00', 'Katrina', 'Fun stuf', 'Coding Club'),
(40, 'right now', '3 pm', '4 pm', 'A325', 'Do stuf', 'Coding Club'),
(41, 'right now', 'right now', 'as soon as i get the case', 'Katrina', 'Katrina', 'Freee Debate Case'),
(42, '1/17/19', '2 am', '11 pm', 'A325', 'Do stuf', 'Coding Club'),
(43, '1/20/19', '2 am', '11 pm', 'A325', 'Do stuf', 'Coding Club');

-- --------------------------------------------------------

--
-- Table structure for table `schedulechange`
--

CREATE TABLE `schedulechange` (
  `id` int(6) NOT NULL,
  `schedule_type` varchar(30) NOT NULL,
  `1stperiodstart` varchar(30) NOT NULL,
  `1stperiodstop` varchar(30) NOT NULL,
  `2ndperiodstart` varchar(30) NOT NULL,
  `2ndperiodstop` varchar(30) NOT NULL,
  `3rdperiodstart` varchar(30) NOT NULL,
  `3rdperiodstop` varchar(30) NOT NULL,
  `4thperiodstart` varchar(30) NOT NULL,
  `4thperiodstop` varchar(30) NOT NULL,
  `5thperiodstart` varchar(30) NOT NULL,
  `5thperiodstop` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedulechange`
--

INSERT INTO `schedulechange` (`id`, `schedule_type`, `1stperiodstart`, `1stperiodstop`, `2ndperiodstart`, `2ndperiodstop`, `3rdperiodstart`, `3rdperiodstop`, `4thperiodstart`, `4thperiodstop`, `5thperiodstart`, `5thperiodstop`) VALUES
(1, '', '8 am - 8:50 am', '0', '8:55 am - 9:05 am', '', '9:10 am - 2 pm', '', '2:05 pm - 2:30 pm', '', '', ''),
(2, '', '8 am - 8:50 am', '0', '8:55 am - 9:05 am', '', '9:10 am - 2 pm', '', '2:05 pm - 2:30 pm', '', '', ''),
(3, '', '8 am - 8:50 am', '0', '8:55 am - 9:05 am', '', '9:10 am - 2 pm', '', '2:05 pm - 2:30 pm', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `weirdschedules`
--

CREATE TABLE `weirdschedules` (
  `month` varchar(15) NOT NULL,
  `day` int(11) NOT NULL,
  `schedule_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weirdschedules`
--

INSERT INTO `weirdschedules` (`month`, `day`, `schedule_type`) VALUES
('Nov', 1, 'istep math part 1'),
('Dec', 18, 'ap testing'),
('Dec', 18, 'ap testing'),
('Dec', 18, 'ap testing'),
('Dec', 17, 'ap testing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `introduce_responses`
--
ALTER TABLE `introduce_responses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedulechange`
--
ALTER TABLE `schedulechange`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `introduce_responses`
--
ALTER TABLE `introduce_responses`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `schedulechange`
--
ALTER TABLE `schedulechange`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
