-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 05:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waste`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(255) NOT NULL DEFAULT 'admin',
  `password` varchar(255) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('Riva', 'Riva');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `wastetype` varchar(20) NOT NULL,
  `location` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`FirstName`, `LastName`, `phone`, `email`, `wastetype`, `location`, `status`, `id`) VALUES
('Isha', 'Bodara', 9898156800, 'ishabodara2002@gmail.com', 'Wet Waste', 'Surat', 'Completed', 15),
('Riva', 'Dhameliya', 9106363871, 'dhameliyariva1106@gmail.c', 'Dry Waste', 'Surat', 'pending', 17),
('Riva', 'Dhameliya', 9856321485, 'abc@gmail.com', 'Wet Waste', 'Surat', 'pending', 19),
('Riva', 'nkefn', 9898156800, 'priyasood@gmail.com', 'Wet Waste', 'Surat', 'pending', 21),
('bbb', 'nnn', 7899912340, 'vbn@qwe.com', 'Medical Waste', 'ss', 'pending', 22);

-- --------------------------------------------------------

--
-- Table structure for table `garbageinfo`
--

CREATE TABLE `garbageinfo` (
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(220) NOT NULL,
  `mobile` bigint(15) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `wastetype` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `garbageinfo`
--

INSERT INTO `garbageinfo` (`FirstName`, `LastName`, `mobile`, `email`, `wastetype`, `location`, `status`, `id`) VALUES
('Riva', 'WSGERFW', 9898156800, 'priyasood@gmail.com', 'E-waste', 'Surat', 'please do valid complain', 22),
('ppp', 'ooo', 9234567890, 'yui@qwe.com', 'E-waste', 'abad', 'pending', 23);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(25) NOT NULL,
  `password` varchar(18) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `Name`) VALUES
('test@gmail.com', '12345', ''),
('', '12345', ''),
('ha@gmail.com', '12345', 'Harry '),
('test@gmail.com', '12345', 'Nishant'),
('test@gmail.com', '23456', 'Nishant'),
('test@gmail.com', '12345', ''),
('test@gmail.com', '12345', ''),
('test@gmail.com', '12345', ''),
('test@gmail.com', '23456', 'Nishant'),
('nishant@mail.com', '123', 'Nishant'),
('nishant@mail.com', '123', 'Nishant'),
('nishant@mail.com', '123', ''),
('riva@mail.com', '12345', 'riva'),
('riva1@mail.com', '1234', 'riva'),
('rn@gmail.com', '1234', 'Riva new'),
('zvxfgntd@gmail.com', '1234567890', 'Riva'),
('ishabodara2002@gmail.com', 'IISSHHAA2882', 'Isha Bodara'),
('priyasood@gmail.com', '6544688464', 'Riva Dhameliya'),
('asd@asd.com', '1234', 'abcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `garbageinfo`
--
ALTER TABLE `garbageinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `garbageinfo`
--
ALTER TABLE `garbageinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
