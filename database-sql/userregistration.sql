-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 11:14 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `msize`
--

CREATE TABLE `msize` (
  `mwaist` int(255) NOT NULL,
  `mheight` int(255) NOT NULL,
  `mshould` int(255) NOT NULL,
  `mchest` int(255) NOT NULL,
  `mtorso` int(255) NOT NULL,
  `marm` int(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sizetable`
--

CREATE TABLE `sizetable` (
  `wwaist` int(255) NOT NULL,
  `wheight` int(255) NOT NULL,
  `wshould` int(255) NOT NULL,
  `wbust` int(255) NOT NULL,
  `whip` int(255) NOT NULL,
  `warm` int(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`username`, `email`, `password`, `password2`) VALUES
('1234', 'mitravinda462@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234'),
('mitra', 'mitra@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234'),
('mitra123466', 'mitravinda462@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234'),
('Mitravinda', 'mitravinda462@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234'),
('prathima', 'prath@gmail.com', '58ea41b7b2bf98a8eee9aa2ede2d023a', 'prath'),
('user1', 'mitra@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234'),
('user123', 'mitravinda462@gmail.com', '202cb962ac59075b964b07152d234b70', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msize`
--
ALTER TABLE `msize`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `sizetable`
--
ALTER TABLE `sizetable`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
