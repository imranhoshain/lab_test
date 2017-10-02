-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2017 at 07:34 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `gender`, `detail`, `image`) VALUES
(211, 'pent', '500', 'male', 'Reference site about Lorem Ipsum, giving information on its origins, ', '822466c375.jpg'),
(212, 'Shari', '5000', 'female', 'Reference site about Lorem Ipsum, giving information on its origins, ', '5c8b3c8c11.jpeg'),
(213, '3 Quater', '222', 'male', 'Reference site about Lorem Ipsum, giving information on its origins, ', '65dc6eeeea.jpg'),
(214, 'Pent', '2500', 'male', 'Reference site about Lorem Ipsum, giving information on its origins, ', '0079890513.jpg'),
(215, 'Jamdani', '5000', 'female', 'Reference site about Lorem Ipsum, giving information on its origins, ', '50079c0d3d.jpg'),
(216, 'Baby Frock', '100', 'female', 'Reference site about Lorem Ipsum, giving information on its origins, ', '08a680b57b.jpg'),
(217, 'Baby Frock', '200', 'baby', 'Reference site about Lorem Ipsum, giving information on its origins, ', 'ec5090492a.jpg'),
(218, 'pent xl', '2500', 'male', 'Reference site about Lorem Ipsum, giving information on its origins, ', 'e0f6ffd0c1.jpg'),
(219, 'Frock', '2500', 'female', 'Reference site about Lorem Ipsum, giving information on its origins, ', '316655523c.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
