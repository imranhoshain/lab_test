-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2017 at 09:00 PM
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
  `image` varchar(255) NOT NULL,
  `unique_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `gender`, `detail`, `image`, `unique_id`) VALUES
(19, 'Jamdani', '2500', 'female', 'one of the biggest Shari house in tangail. We have our own factory to build various Tangail Shari with unique design and price', '26441b0e60.jpeg', '357145b2480d58a496f6af045213790a'),
(20, 'cotton', '5000', 'female', 'One of the biggest Shari house in tangail. We have our own factory to build various Tangail Shari with unique design and price', 'b939f42de6.jpg', '628703348ec916eff703f7920dbc8750'),
(21, 'Halfsilk', '2500', 'female', ' one of the biggest Shari house in tangail. We have our own factory to build various Tangail Shari with unique design and price', '236a1313a9.jpg', '026f6cf4bce723db37d60e586da052e9'),
(22, 'Jenes', '1200', 'male', ' one of the biggest Shari house in tangail. We have our own factory to build various Tangail Shari with unique design and price', 'f31f255446.jpg', '7e9730f23d65b5a91826bd349538c8e2'),
(23, '3 Quater', '500', 'male', ' one of the biggest Shari house in tangail. We have our own factory to build various Tangail Shari with unique design and price', '11c9057239.jpg', 'db6184f16f89d4c3bef0f4121cdee990'),
(24, 'Baby Frock', '100', 'baby', ' one of the biggest Shari house in tangail. We have our own factory to build various Tangail Shari with unique design and price', '6eaee02f07.jpg', 'ed1861415eb65d13adf0e8d533f001b2'),
(25, 'Frock', '200', 'baby', ' one of the biggest Shari house in tangail. We have our own factory to build various Tangail Shari with unique design and price', 'db29c89d66.jpg', '1866d212102ae87feeda95b7553e6784');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
