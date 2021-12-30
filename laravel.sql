-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 30, 2021 at 12:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `polladmin`
--

CREATE TABLE `polladmin` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `polladmin`
--

INSERT INTO `polladmin` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `status`) VALUES
(6, 'In 2022 who may be PM', 'NarendraModi', 'RahulGandhi', 'Kejriwal', 'amitShah', 1),
(8, 'faivorate Hero', 'akshaykumar', 'ajaydevgan', 'govinda', 'hritikroshan', 0),
(9, 'From following in which you are more intested', 'MachineLearning', 'WebDevelopment', 'IOS', 'Android', 0),
(10, 'From where you want to get your MCA degree', 'VNSGU', 'EURO', 'IGNU', 'GTU', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pollvote`
--

CREATE TABLE `pollvote` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `optionName` varchar(100) NOT NULL,
  `vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pollvote`
--

INSERT INTO `pollvote` (`id`, `question`, `optionName`, `vote`) VALUES
(9, 'From following in which you are more intested', 'MachineLearning', 1),
(12, 'From following in which you are more intested', 'WebDevelopment', 4),
(13, 'From following in which you are more intested', 'IOS', 2),
(18, 'From following in which you are more intested', 'Android', 2),
(20, 'In 2022 who may be PM', 'Kejriwal', 3),
(21, 'In 2022 who may be PM', 'NarendraModi', 2),
(26, 'faivorate Hero', 'govinda', 5),
(27, 'faivorate Hero', 'hritikroshan', 1),
(28, 'faivorate Hero', 'ajaydevgan', 2),
(29, 'faivorate Hero', 'akshaykumar', 3),
(30, 'In 2022 who may be PM', 'amitShah', 1),
(31, 'In 2022 who may be PM', 'RahulGandhi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblregister`
--

CREATE TABLE `tblregister` (
  `rid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblregister`
--

INSERT INTO `tblregister` (`rid`, `name`, `gender`, `email`, `phone`, `password`) VALUES
(2, 'shyam', 'female', 'vishua@gmail.com', '7818926831', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polladmin`
--
ALTER TABLE `polladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pollvote`
--
ALTER TABLE `pollvote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblregister`
--
ALTER TABLE `tblregister`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `polladmin`
--
ALTER TABLE `polladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pollvote`
--
ALTER TABLE `pollvote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tblregister`
--
ALTER TABLE `tblregister`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
