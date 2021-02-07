-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 11:35 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beyart-jpg`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_profile`
--

CREATE TABLE `about_profile` (
  `about_ID` int(11) NOT NULL,
  `profile` varchar(200) NOT NULL,
  `info` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_profile`
--

INSERT INTO `about_profile` (`about_ID`, `profile`, `info`) VALUES
(4, 'Profile.jpeg', 'Hi! I am Beya, a freelance illustrator located in Quezon City, Philippines.');

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_ID`, `name`, `username`, `password`, `email`) VALUES
(1, 'Bea', 'beya', '1234', 'beyartjpg@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cart_table`
--

CREATE TABLE `cart_table` (
  `cart_ID` int(5) NOT NULL,
  `order_ID` int(5) NOT NULL,
  `user_ID` int(5) NOT NULL,
  `subtotal` float NOT NULL,
  `total` float NOT NULL,
  `mop` varchar(10) NOT NULL,
  `agree` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `client_table`
--

CREATE TABLE `client_table` (
  `client_ID` int(5) NOT NULL,
  `user_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commission_table`
--

CREATE TABLE `commission_table` (
  `comm_ID` int(5) NOT NULL,
  `picture_ID` int(5) NOT NULL,
  `type_comm` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commsheet`
--

CREATE TABLE `commsheet` (
  `comm_ID` int(11) NOT NULL,
  `comm_type` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `comm_desc` varchar(1000) NOT NULL,
  `additional` int(11) NOT NULL,
  `date_uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commsheet`
--

INSERT INTO `commsheet` (`comm_ID`, `comm_type`, `price`, `image`, `comm_desc`, `additional`, `date_uploaded`) VALUES
(1, 'PORTRAIT', 25, 'comms-portrait.png', 'A portrait commission crops the character from head to shoulder.\r\n\r\nIt only comes with a simple solid/gradient color background.', 15, '0000-00-00 00:00:00'),
(2, 'BUST UP', 35, 'comms-bustup.png', 'A bust up commission crops the character from head to bust.\r\n\r\nIt only comes with a simple solid/gradient color background.', 20, '0000-00-00 00:00:00'),
(3, 'HALF BODY', 40, 'home97-half.png', 'A half body commission shows the character from the hip/thigh area and up.\r\n\r\nIt only comes with a simple solid/gradient color background.', 25, '0000-00-00 00:00:00'),
(4, 'FULL BODY', 50, 'comms-full.png', 'A full body commission shows the full body of the character. Pose may vary.\r\n\r\nIt only comes with a simple solid/gradient color background.', 30, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `name`, `password`, `level`) VALUES
('admin', 'beya', 'admin', 'Admin'),
('user1', 'bea', '12345', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_ID` int(5) NOT NULL,
  `client_ID` int(5) NOT NULL,
  `comm_type` varchar(20) NOT NULL,
  `background` varchar(20) NOT NULL,
  `addons` varchar(10) NOT NULL,
  `props` varchar(50) NOT NULL,
  `enhance` varchar(50) NOT NULL,
  `deadline` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `picture_table`
--

CREATE TABLE `picture_table` (
  `picture_ID` int(11) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `picture_table`
--

INSERT INTO `picture_table` (`picture_ID`, `picture`, `uploaded`) VALUES
(1, 'home1.JPG', '0000-00-00 00:00:00'),
(2, 'home1.JPG', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `question_table`
--

CREATE TABLE `question_table` (
  `question_ID` int(5) NOT NULL,
  `questions` longtext NOT NULL,
  `answers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `user_ID` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `type` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`user_ID`, `name`, `email`, `password`, `username`, `type`) VALUES
(1, 'user beya ', 'beyauser@gmail.com', 'beya1234', 'beyauser', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `cart_table`
--
ALTER TABLE `cart_table`
  ADD PRIMARY KEY (`cart_ID`),
  ADD KEY `order_ID` (`order_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `client_table`
--
ALTER TABLE `client_table`
  ADD PRIMARY KEY (`client_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `commission_table`
--
ALTER TABLE `commission_table`
  ADD PRIMARY KEY (`comm_ID`),
  ADD KEY `picture_ID` (`picture_ID`);

--
-- Indexes for table `commsheet`
--
ALTER TABLE `commsheet`
  ADD PRIMARY KEY (`comm_ID`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `client_ID` (`client_ID`);

--
-- Indexes for table `picture_table`
--
ALTER TABLE `picture_table`
  ADD PRIMARY KEY (`picture_ID`);

--
-- Indexes for table `question_table`
--
ALTER TABLE `question_table`
  ADD PRIMARY KEY (`question_ID`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart_table`
--
ALTER TABLE `cart_table`
  MODIFY `cart_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_table`
--
ALTER TABLE `client_table`
  MODIFY `client_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commission_table`
--
ALTER TABLE `commission_table`
  MODIFY `comm_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commsheet`
--
ALTER TABLE `commsheet`
  MODIFY `comm_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `picture_table`
--
ALTER TABLE `picture_table`
  MODIFY `picture_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `question_table`
--
ALTER TABLE `question_table`
  MODIFY `question_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `user_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
