-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 08:04 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hck`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Qualification` varchar(255) NOT NULL,
  `Number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `username`, `password`, `name`, `Qualification`, `Number`, `email`) VALUES
(1, 'csp', 'csp', 'csp', 'csp', 'csp', 'csp');

-- --------------------------------------------------------

--
-- Table structure for table `nurses`
--

CREATE TABLE `nurses` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurses`
--

INSERT INTO `nurses` (`id`, `username`, `password`, `name`, `mobile`, `village`, `email`) VALUES
(1, 'a', 'm', 'abhay', '1234567891', 'delhi', 'abmish@gmail.com'),
(2, 'csp', 'cspsunny', 'dv', 'dsv', 'dv', 'dsv');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bg` varchar(10) NOT NULL,
  `weight` int(11) NOT NULL,
  `report` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `treat` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `age`, `mobile`, `email`, `bg`, `weight`, `report`, `remarks`, `treat`) VALUES
(1, 'nitesh', 22, '78946123', 'nit@g.com', 'a+', 80, '7', 'good', 0),
(2, 'csp', 0, 'afaf', 'cspsunny512@gmail.com', '', 0, '0', '3', 0),
(3, 'nitya', 23, '789456123', 'cspsunny512@gmail.com', '', 0, '0', 'chu', 0),
(4, 'nitya', 23, '789456123', 'cspsunny512@gmail.com', '', 0, '0', 'chu', 1),
(5, 'nitya', 23, '789456123', 'cspsunny512@gmail.com', '', 0, '0', 'chu', 0),
(6, 'nitya', 23, '789456123', 'cspsunny512@gmail.com', '', 0, './reports/nitya.jpg', 'chu', 0),
(7, 'nitya', 23, '789456123', 'cspsunny512@gmail.com', '', 0, '', 'chu', 0),
(8, 'nitya', 23, '456', 'cspsunny512@gmail.com', 'a+', 12, 'Screenshot (22).png', 'sss', 0),
(9, 'nitya', 23, '789465', 'cspsunny512@gmail.com', 'a+', 56, '', 'sss', 0),
(10, 'nitya', 23, '4654516', 'cspsunny512@gmail.com', 'a+', 45, './reports/nitya.jpg', 'aaa', 0),
(11, 'csp', 45, '4545454', 'cspsunny512@gmail.com', 'a+', 78, './reports/csp.jpg', 'dcsdc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id` int(11) NOT NULL,
  `rx` varchar(255) NOT NULL,
  `required_tests` varchar(255) NOT NULL,
  `report_result` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurses`
--
ALTER TABLE `nurses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nurses`
--
ALTER TABLE `nurses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
