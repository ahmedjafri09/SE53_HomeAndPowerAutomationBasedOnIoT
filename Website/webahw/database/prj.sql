-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 11:50 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prj`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appliance_record`
--

CREATE TABLE `appliance_record` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `wattage` int(11) NOT NULL,
  `control` text,
  `consumption` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appliance_record`
--

INSERT INTO `appliance_record` (`id`, `name`, `type`, `wattage`, `control`, `consumption`) VALUES
(1, 'Fan', 'light', 50, 'On', 44),
(2, 'AC', 'heavy', 60, 'On', 55),
(4, 'Fridge', 'heavy', 77, 'Off', 0),
(5, 'Tv', 'heavy', 77, 'Off', 0);

-- --------------------------------------------------------

--
-- Table structure for table `automate_app`
--

CREATE TABLE `automate_app` (
  `id` int(50) NOT NULL,
  `automate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `automate_app`
--

INSERT INTO `automate_app` (`id`, `automate`) VALUES
(5, 'Off'),
(6, 'On'),
(7, 'Off'),
(8, 'On'),
(9, 'On'),
(10, 'Off'),
(11, 'On'),
(12, 'Off'),
(13, 'Off'),
(14, 'Off'),
(15, 'Off');

-- --------------------------------------------------------

--
-- Table structure for table `smart`
--

CREATE TABLE `smart` (
  `id` int(11) NOT NULL,
  `temperature` int(150) NOT NULL,
  `minimum_temp` int(150) NOT NULL,
  `maximum_temp` int(150) NOT NULL,
  `smart` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smart`
--

INSERT INTO `smart` (`id`, `temperature`, `minimum_temp`, `maximum_temp`, `smart`) VALUES
(4, 33, 22, 44, 'On');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `subject` text NOT NULL,
  `content` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`user_name`, `user_email`, `subject`, `content`) VALUES
('motu', 'motu123@gmail.com', 'issue', 'i am bsdk.'),
('bug', 'bug123@gmail.com', 'heavy issue', 'somone kick my ass!'),
('bug', 'bug123@gmail.com', 'heavy issue', 'somone kick my ass!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'wajeeh', 'wajdocs@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appliance_record`
--
ALTER TABLE `appliance_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `automate_app`
--
ALTER TABLE `automate_app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smart`
--
ALTER TABLE `smart`
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appliance_record`
--
ALTER TABLE `appliance_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `automate_app`
--
ALTER TABLE `automate_app`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `smart`
--
ALTER TABLE `smart`
  ADD CONSTRAINT `smart_ibfk_1` FOREIGN KEY (`id`) REFERENCES `appliance_record` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
