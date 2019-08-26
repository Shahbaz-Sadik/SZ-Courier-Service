-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2019 at 08:22 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier`
--

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `pickup` varchar(200) NOT NULL,
  `delivar` varchar(200) NOT NULL,
  `quantity` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `ddate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`id`, `fname`, `lname`, `email`, `type`, `pickup`, `delivar`, `quantity`, `status`, `date`, `ddate`) VALUES
(7, 'patwary', 'sadik', 'pat@gmail.com', 'Local', 'Dhaka', 'Khulna', 3, 'Delivard', 'August 24, 2019 22:48:56 ', 'August 24, 2019 22:49:28 '),
(8, 'sdk', 'dk', 'pat@gmail.com', 'International', 'Dhaka', 'Kolkata', 4, 'pending', 'August 24, 2019 22:55:20 ', ''),
(9, 'sohel', 'sddda', 'sadik@gmail.com', 'Local', 'Dhaka', 'Khulna', 3, 'Delivard', 'August 25, 2019 08:02:25 ', 'August 25, 2019 08:20:10 '),
(10, 'sid', 'kd', 'sadik@gmail.com', 'International', 'Dhaka', 'Dubai', 2, 'pending', 'August 25, 2019 08:03:26 ', ''),
(11, 'kd', 'dk', 'kd@gmail.com', 'Local', 'Dhaka', 'Naogaon', 4, 'pending', 'August 25, 2019 08:09:10 ', ''),
(12, 'kd', 'dk', 'kd@gmail.com', 'International', 'Ctg', 'Dubai', 4, 'pending', 'August 25, 2019 08:10:21 ', ''),
(13, 'brave', 'dj', 'brave@gmail.com', 'Local', 'Dhaka', 'Raj', 4, 'Delivard', 'August 25, 2019 08:15:14 ', 'August 25, 2019 08:17:38 '),
(14, 'brave', 'dj', 'brave@gmail.com', 'International', 'Dhaka', 'London', 5, 'pending', 'August 25, 2019 08:17:10 ', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `type`) VALUES
(1, 'saad', 'saad@gmail.com', '1234', 'Admin'),
(2, 'shahbaz', 'sadik@gmail.com', '1234', 'User'),
(3, 'sid', 'sid@gmail.com', '1234', 'User'),
(4, 'Patwary', 'pat@gmail.com', '1234', 'User'),
(5, 'kD', 'kd@gmail.com', '1234', 'User'),
(6, 'brave', 'brave@gmail.com', '1234', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
