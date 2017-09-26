-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2017 at 10:37 PM
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
(198, 'Jamdani', '5000', 'female', 'Reference site about Lorem Ipsum, giving information on its origins, ', '0034399_handloom-cotton-taant-shari-design-421.jpg'),
(199, 'Imran', '100', 'male', 'Reference site about Lorem Ipsum, giving information on its origins, ', 'maxresdefault.jpg'),
(200, 'Baby Frock', '200', 'baby', 'Reference site about Lorem Ipsum, giving information on its origins, ', '120G166.jpg'),
(201, 'Shari', '5000', 'female', 'Reference site about Lorem Ipsum, giving information on its origins, ', '0046333_exclusive-shari-for-women-cp-892.jpeg'),
(202, 'Jenes', '800', 'male', 'Reference site about Lorem Ipsum, giving information on its origins, ', 'HTB17TiOHXXXXXcoXFXXq6xXFXXXO.jpg'),
(203, '3 Quater', '350', 'male', 'Reference site about Lorem Ipsum, giving information on its origins, ', 'Ladies-Pent-Dark-Blue-Ladies-Cotton-Jeans-Pent-Cover-min-1.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
