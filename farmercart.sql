-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2016 at 07:06 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmercart`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(5) NOT NULL,
  `cat` varchar(20) NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat`, `descr`) VALUES
(1, 'test', 'testEnter a description for your category\r\n                                                '),
(2, 'Spices', 'Wayanadan Spices'),
(3, 'Wild Foods', 'Food items directly from wild                                          '),
(4, 'Machines', 'This is just cateegory\r\n                                                '),
(5, 'rice', 'rice category\r\n                                                ');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `descr` text NOT NULL,
  `category` int(2) NOT NULL,
  `price` int(10) NOT NULL,
  `offerprice` int(10) NOT NULL,
  `pic1` text NOT NULL,
  `pic2` text NOT NULL,
  `pic3` text NOT NULL,
  `pic4` text NOT NULL,
  `pic5` text NOT NULL,
  `seller` int(5) NOT NULL,
  `qty` int(25) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `visibility` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `descr`, `category`, `price`, `offerprice`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5`, `seller`, `qty`, `unit`, `visibility`) VALUES
(1, 'test', 'test', 2147483647, 2147483647, 2147483647, '222', '222', '22', '22', '22', 2147483647, 2147483647, 'kg', 1),
(2, 'fsd', 'sfffffffffffffff', 3, 3, 3, '3', '3', '', '', '', 0, 0, '', 0),
(3, '', '', 0, 0, 0, 'sfc.jpg', 'saurav.jpg', 'marshal.jpg', 'logo2.png', 'business-logo-9.jpg', 1, 0, '', 0),
(4, 'testsb', 'ajsgdhfgasjdgf ajsdgjhgas jfagsjd kfg', 2, 234, 2344, '', '', '', '', '', 1, 34241, 'Kg', 1),
(5, 'testsb', 'ajsgdhfgasjdgf ajsdgjhgas jfagsjd kfg', 2, 234, 2344, '', '', '', '', '', 1, 34241, 'Kg', 1),
(6, 'testsb', 'ajsgdhfgasjdgf ajsdgjhgas jfagsjd kfg', 2, 234, 2344, 'Desert.jpg', 'Hydrangeas.jpg', 'Jellyfish.jpg', 'Jellyfish.jpg', 'Koala.jpg', 1, 34241, 'Kg', 1),
(7, 'testsb', 'ajsgdhfgasjdgf ajsdgjhgas jfagsjd kfg', 2, 234, 2344, 'Desert.jpg', 'Hydrangeas.jpg', 'Jellyfish.jpg', 'Jellyfish.jpg', 'Koala.jpg', 1, 34241, 'Kg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(80) NOT NULL,
  `userlevel` int(3) NOT NULL,
  `name` varchar(40) NOT NULL,
  `pic` varchar(40) NOT NULL,
  `phone` int(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `userlevel`, `name`, `pic`, `phone`) VALUES
(1, 'admin', 'admin', 'admin@nowhere.com', 1, 'Admin', '', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
