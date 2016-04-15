-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2016 at 10:29 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `biddetails`
--

CREATE TABLE IF NOT EXISTS `biddetails` (
`bidid` int(5) NOT NULL,
  `productid` int(5) NOT NULL,
  `bid` varchar(25) NOT NULL,
  `bidder` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biddetails`
--

INSERT INTO `biddetails` (`bidid`, `productid`, `bid`, `bidder`) VALUES
(7, 14, '550', 6),
(8, 15, '100011', 6);

-- --------------------------------------------------------

--
-- Table structure for table `bidparticipation`
--

CREATE TABLE IF NOT EXISTS `bidparticipation` (
`id` int(5) NOT NULL,
  `productid` int(5) NOT NULL,
  `userid` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidparticipation`
--

INSERT INTO `bidparticipation` (`id`, `productid`, `userid`) VALUES
(24, 14, 6),
(25, 14, 6),
(26, 14, 6),
(27, 14, 6),
(28, 14, 6),
(29, 14, 6),
(30, 14, 6),
(31, 14, 6),
(32, 14, 6),
(33, 14, 6),
(34, 14, 6),
(35, 14, 6),
(36, 14, 6),
(37, 14, 6),
(38, 14, 6),
(39, 14, 6),
(40, 14, 6),
(41, 14, 6),
(42, 14, 6),
(43, 15, 7),
(44, 15, 6);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(5) NOT NULL,
  `cat` varchar(20) NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat`, `descr`) VALUES
(1, 'Stamps', 'Old Stamp Collection'),
(2, 'Antique', 'This is antiques\r\n                                                '),
(3, 'Automobiles', 'Fresh Automotives\r\n                                                ');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`msgid` int(5) NOT NULL,
  `msgto` int(5) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=298 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msgid`, `msgto`, `msg`) VALUES
(105, 6, 'A user Raised Bid amount By &#8377; 600For Product with Product id14 Please Rise your bid ASAP'),
(106, 6, 'A user Raised Bid amount By &#8377; 501<a href="viewsingleproduct.php?prodid=14"For Product with Product id14 Please Rise your bid ASAP'),
(107, 6, 'A user Raised Bid amount By &#8377; 501<a href="viewsingleproduct.php?prodid=14"For Product with Product id14 Please Rise your bid ASAP'),
(108, 6, 'A user Raised Bid amount By &#8377; 504<a href="viewsingleproduct.php?prodid=14"For Product with Product id14 Please Rise your bid ASAP'),
(109, 6, 'A user Raised Bid amount By &#8377; 504<a href="viewsingleproduct.php?prodid=14"For Product with Product id14 Please Rise your bid ASAP'),
(110, 6, 'A user Raised Bid amount By &#8377; 504<a href="viewsingleproduct.php?prodid=14"For Product with Product id14 Please Rise your bid ASAP'),
(111, 6, 'A user Raised Bid amount By &#8377; 510<a href="viewsingleproduct.php?prodid=14"For Product with Product id14 Please Rise your bid ASAP'),
(112, 6, 'A user Raised Bid amount By &#8377; 510<a href="viewsingleproduct.php?prodid=14"For Product with Product id14 Please Rise your bid ASAP'),
(113, 6, 'A user Raised Bid amount By &#8377; 510<a href="viewsingleproduct.php?prodid=14"For Product with Product id14 Please Rise your bid ASAP'),
(114, 6, 'A user Raised Bid amount By &#8377; 510<a href="viewsingleproduct.php?prodid=14"For Product with Product id14 Please Rise your bid ASAP'),
(115, 6, 'A user Raised Bid amount By &#8377; 510<a href="viewsingleproduct.php?prodid=14">For Product with Product id14</a> Please Rise your bid ASAP'),
(116, 6, 'A user Raised Bid amount By &#8377; 510<a href="viewsingleproduct.php?prodid=14">For Product with Product id14</a> Please Rise your bid ASAP'),
(117, 6, 'A user Raised Bid amount By &#8377; 510<a href="viewsingleproduct.php?prodid=14">For Product with Product id14</a> Please Rise your bid ASAP'),
(118, 6, 'A user Raised Bid amount By &#8377; 510<a href="viewsingleproduct.php?prodid=14">For Product with Product id14</a> Please Rise your bid ASAP'),
(119, 6, 'A user Raised Bid amount By &#8377; 510<a href="viewsingleproduct.php?prodid=14">For Product with Product id14</a> Please Rise your bid ASAP'),
(120, 6, 'A user Raised Bid amount By &#8377; 513<a href="viewsingleproduct.php?prodid=14">For Product with Product id14</a> Please Rise your bid ASAP'),
(121, 6, 'A user Raised Bid amount By &#8377; 513<a href="viewsingleproduct.php?prodid=14">For Product with Product id14</a> Please Rise your bid ASAP'),
(122, 6, 'A user Raised Bid amount By &#8377; 513<a href="viewsingleproduct.php?prodid=14">For Product with Product id14</a> Please Rise your bid ASAP'),
(123, 6, 'A user Raised Bid amount By &#8377; 513<a href="viewsingleproduct.php?prodid=14">For Product with Product id14</a> Please Rise your bid ASAP'),
(124, 6, 'A user Raised Bid amount By &#8377; 513<a href="viewsingleproduct.php?prodid=14">For Product with Product id14</a> Please Rise your bid ASAP'),
(125, 6, 'A user Raised Bid amount By &#8377; 513<a href="viewsingleproduct.php?prodid=14">For Product with Product id14</a> Please Rise your bid ASAP'),
(126, 6, 'A user Raised Bid amount By &#8377; 520<a href="../viewsingleproduct.php?prodid=14">For Product with Product id14</a> Please Rise your bid ASAP'),
(127, 6, 'A user Raised Bid amount By &#8377; 520<a href="../viewsingleproduct.php?prodid=14">For Product with Product id14</a> Please Rise your bid ASAP'),
(128, 6, 'A user Raised Bid amount By &#8377; 520<a href="../viewsingleproduct.php?prodid=14">For Product with Product id14</a> Please Rise your bid ASAP'),
(129, 6, 'A user Raised Bid amount By &#8377; 520<a href="../viewsingleproduct.php?prodid=14">For Product with Product id14</a> Please Rise your bid ASAP'),
(130, 6, 'A user Raised Bid amount By &#8377; 520<a href="../viewsingleproduct.php?prodid=14">For Product with Product id14</a> Please Rise your bid ASAP'),
(131, 6, 'A user Raised Bid amount By &#8377; 520<a href="../viewsingleproduct.php?prodid=14">For Product with Product id14</a> Please Rise your bid ASAP'),
(132, 6, 'A user Raised Bid amount By &#8377; 520<a href="../viewsingleproduct.php?prodid=14">For Product with Product id14</a> Please Rise your bid ASAP'),
(133, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(134, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(135, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(136, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(137, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(138, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(139, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(140, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(141, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(142, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(143, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(144, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(145, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(146, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(147, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(148, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(149, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(150, 6, 'A user Raised Bid amount By &#8377; 501<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(151, 6, 'A user Raised Bid amount By &#8377; 501<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(152, 6, 'A user Raised Bid amount By &#8377; 501<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(153, 6, 'A user Raised Bid amount By &#8377; 501<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(154, 6, 'A user Raised Bid amount By &#8377; 501<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(155, 6, 'A user Raised Bid amount By &#8377; 501<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(156, 6, 'A user Raised Bid amount By &#8377; 501<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(157, 6, 'A user Raised Bid amount By &#8377; 501<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(158, 6, 'A user Raised Bid amount By &#8377; 501<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(159, 6, 'A user Raised Bid amount By &#8377; 501<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(160, 6, 'A user Raised Bid amount By &#8377; 506<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(161, 6, 'A user Raised Bid amount By &#8377; 506<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(162, 6, 'A user Raised Bid amount By &#8377; 506<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(163, 6, 'A user Raised Bid amount By &#8377; 506<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(164, 6, 'A user Raised Bid amount By &#8377; 506<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(165, 6, 'A user Raised Bid amount By &#8377; 506<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(166, 6, 'A user Raised Bid amount By &#8377; 506<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(167, 6, 'A user Raised Bid amount By &#8377; 506<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(168, 6, 'A user Raised Bid amount By &#8377; 506<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(169, 6, 'A user Raised Bid amount By &#8377; 506<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(170, 6, 'A user Raised Bid amount By &#8377; 506<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(171, 6, 'A user Raised Bid amount By &#8377; 510<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(172, 6, 'A user Raised Bid amount By &#8377; 510<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(173, 6, 'A user Raised Bid amount By &#8377; 510<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(174, 6, 'A user Raised Bid amount By &#8377; 510<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(175, 6, 'A user Raised Bid amount By &#8377; 510<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(176, 6, 'A user Raised Bid amount By &#8377; 510<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(177, 6, 'A user Raised Bid amount By &#8377; 510<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(178, 6, 'A user Raised Bid amount By &#8377; 510<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(179, 6, 'A user Raised Bid amount By &#8377; 510<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(180, 6, 'A user Raised Bid amount By &#8377; 510<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(181, 6, 'A user Raised Bid amount By &#8377; 510<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(182, 6, 'A user Raised Bid amount By &#8377; 510<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(183, 6, 'A user Raised Bid amount By &#8377; 519<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(184, 6, 'A user Raised Bid amount By &#8377; 519<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(185, 6, 'A user Raised Bid amount By &#8377; 519<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(186, 6, 'A user Raised Bid amount By &#8377; 519<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(187, 6, 'A user Raised Bid amount By &#8377; 519<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(188, 6, 'A user Raised Bid amount By &#8377; 519<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(189, 6, 'A user Raised Bid amount By &#8377; 519<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(190, 6, 'A user Raised Bid amount By &#8377; 519<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(191, 6, 'A user Raised Bid amount By &#8377; 519<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(192, 6, 'A user Raised Bid amount By &#8377; 519<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(193, 6, 'A user Raised Bid amount By &#8377; 519<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(194, 6, 'A user Raised Bid amount By &#8377; 519<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(195, 6, 'A user Raised Bid amount By &#8377; 519<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(196, 6, 'A user Raised Bid amount By &#8377; 526<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(197, 6, 'A user Raised Bid amount By &#8377; 526<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(198, 6, 'A user Raised Bid amount By &#8377; 526<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(199, 6, 'A user Raised Bid amount By &#8377; 526<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(200, 6, 'A user Raised Bid amount By &#8377; 526<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(201, 6, 'A user Raised Bid amount By &#8377; 526<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(202, 6, 'A user Raised Bid amount By &#8377; 526<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(203, 6, 'A user Raised Bid amount By &#8377; 526<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(204, 6, 'A user Raised Bid amount By &#8377; 526<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(205, 6, 'A user Raised Bid amount By &#8377; 526<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(206, 6, 'A user Raised Bid amount By &#8377; 526<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(207, 6, 'A user Raised Bid amount By &#8377; 526<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(208, 6, 'A user Raised Bid amount By &#8377; 526<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(209, 6, 'A user Raised Bid amount By &#8377; 526<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(210, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(211, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(212, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(213, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(214, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(215, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(216, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(217, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(218, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(219, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(220, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(221, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(222, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(223, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(224, 6, 'A user Raised Bid amount By &#8377; 530<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(225, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(226, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(227, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(228, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(229, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(230, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(231, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(232, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(233, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(234, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(235, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(236, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(237, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(238, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(239, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(240, 6, 'A user Raised Bid amount By &#8377; 535<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(241, 6, 'A user Raised Bid amount By &#8377; 540<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(242, 6, 'A user Raised Bid amount By &#8377; 540<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(243, 6, 'A user Raised Bid amount By &#8377; 540<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(244, 6, 'A user Raised Bid amount By &#8377; 540<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(245, 6, 'A user Raised Bid amount By &#8377; 540<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(246, 6, 'A user Raised Bid amount By &#8377; 540<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(247, 6, 'A user Raised Bid amount By &#8377; 540<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(248, 6, 'A user Raised Bid amount By &#8377; 540<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(249, 6, 'A user Raised Bid amount By &#8377; 540<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(250, 6, 'A user Raised Bid amount By &#8377; 540<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(251, 6, 'A user Raised Bid amount By &#8377; 540<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(252, 6, 'A user Raised Bid amount By &#8377; 540<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(253, 6, 'A user Raised Bid amount By &#8377; 540<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(254, 6, 'A user Raised Bid amount By &#8377; 540<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(255, 6, 'A user Raised Bid amount By &#8377; 540<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(256, 6, 'A user Raised Bid amount By &#8377; 540<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(257, 6, 'A user Raised Bid amount By &#8377; 540<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(258, 6, 'A user Raised Bid amount By &#8377; 545<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(259, 6, 'A user Raised Bid amount By &#8377; 545<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(260, 6, 'A user Raised Bid amount By &#8377; 545<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(261, 6, 'A user Raised Bid amount By &#8377; 545<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(262, 6, 'A user Raised Bid amount By &#8377; 545<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(263, 6, 'A user Raised Bid amount By &#8377; 545<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(264, 6, 'A user Raised Bid amount By &#8377; 545<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(265, 6, 'A user Raised Bid amount By &#8377; 545<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(266, 6, 'A user Raised Bid amount By &#8377; 545<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(267, 6, 'A user Raised Bid amount By &#8377; 545<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(268, 6, 'A user Raised Bid amount By &#8377; 545<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(269, 6, 'A user Raised Bid amount By &#8377; 545<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(270, 6, 'A user Raised Bid amount By &#8377; 545<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(271, 6, 'A user Raised Bid amount By &#8377; 545<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(272, 6, 'A user Raised Bid amount By &#8377; 545<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(273, 6, 'A user Raised Bid amount By &#8377; 545<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(274, 6, 'A user Raised Bid amount By &#8377; 545<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(275, 6, 'A user Raised Bid amount By &#8377; 545<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(276, 6, 'A user Raised Bid amount By &#8377; 550<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(277, 6, 'A user Raised Bid amount By &#8377; 550<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(278, 6, 'A user Raised Bid amount By &#8377; 550<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(279, 6, 'A user Raised Bid amount By &#8377; 550<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(280, 6, 'A user Raised Bid amount By &#8377; 550<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(281, 6, 'A user Raised Bid amount By &#8377; 550<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(282, 6, 'A user Raised Bid amount By &#8377; 550<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(283, 6, 'A user Raised Bid amount By &#8377; 550<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(284, 6, 'A user Raised Bid amount By &#8377; 550<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(285, 6, 'A user Raised Bid amount By &#8377; 550<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(286, 6, 'A user Raised Bid amount By &#8377; 550<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(287, 6, 'A user Raised Bid amount By &#8377; 550<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(288, 6, 'A user Raised Bid amount By &#8377; 550<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(289, 6, 'A user Raised Bid amount By &#8377; 550<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(290, 6, 'A user Raised Bid amount By &#8377; 550<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(291, 6, 'A user Raised Bid amount By &#8377; 550<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(292, 6, 'A user Raised Bid amount By &#8377; 550<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(293, 6, 'A user Raised Bid amount By &#8377; 550<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(294, 6, 'A user Raised Bid amount By &#8377; 550<a href="../viewsingleproduct.php?prodid=14"> for the product with Product id14</a> Please Rise your bid ASAP'),
(295, 7, 'A user Raised Bid amount By &#8377; 100001<a href="../viewsingleproduct.php?prodid=15"> for the product with Product id15</a> Please Rise your bid ASAP'),
(296, 7, 'A user Raised Bid amount By &#8377; 100011<a href="../viewsingleproduct.php?prodid=15"> for the product with Product id15</a> Please Rise your bid ASAP'),
(297, 6, 'A user Raised Bid amount By &#8377; 100011<a href="../viewsingleproduct.php?prodid=15"> for the product with Product id15</a> Please Rise your bid ASAP');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`id` int(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `descr` text NOT NULL,
  `category` int(2) NOT NULL,
  `minbid` int(10) NOT NULL,
  `pic1` text NOT NULL,
  `pic2` text NOT NULL,
  `pic3` text NOT NULL,
  `pic4` text NOT NULL,
  `pic5` text NOT NULL,
  `seller` int(5) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `visibility` int(2) NOT NULL,
  `bidstartdate` date NOT NULL,
  `bidenddate` date NOT NULL,
  `bidstatus` varchar(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `descr`, `category`, `minbid`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5`, `seller`, `unit`, `visibility`, `bidstartdate`, `bidenddate`, `bidstatus`) VALUES
(14, 'Shobi', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 500, '13118267-USA-vintage-postage-stamp-showing-an-image-of-Uncle-Sam-from-World-War-One-saying-I-want-you--Stock-Photo.jpg', 'abraham-lincoln-postage-stamp-howard-hershon.jpg', 'Cardamom-and-its-medicinal-uses.png', 'ADSXL-1.jpg', 'coriander-seeds-1S-670.jpg', 6, 'Kg', 1, '2016-03-13', '2016-03-15', '6'),
(15, 'Car', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3, 10000, 'car1.jpg', 'car2 - Copy.jpg', 'car2.jpg', 'car3 - Copy.jpg', 'car3.jpg', 7, 'Nos', 1, '2016-03-13', '2016-03-16', '6'),
(16, 'Admin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3, 10000, 'car1.jpg', 'car2 - Copy.jpg', 'car2.jpg', 'car3 - Copy.jpg', 'car3.jpg', 7, 'Nos', 1, '2016-03-13', '2016-04-30', '');

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
  `phone` int(15) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `userlevel`, `name`, `pic`, `phone`, `address`) VALUES
(1, 'admin', 'admin', 'admin@nowhere.com', 1, 'Admin', '', 2147483647, 'Debra Becker\r\nSr. Marketing Director\r\nIDG World Expo/IDG Enterprise Events'),
(2, 'user', 'user', 'user@user.com', 3, 'user', '', 0, 'Debra Becker\r\nSr. Marketing Director\r\nIDG World Expo/IDG Enterprise Events'),
(3, 'user1', 'user1', '', 3, 'User1', '', 454564, 'Debra Becker\r\nSr. Marketing Director\r\nIDG World Expo/IDG Enterprise Events'),
(5, 'saranya', 'saranya', 'saranya1019@gmail.com', 3, 'Saranya', '', 2147483647, 'Debra Becker\r\nSr. Marketing Director\r\nIDG World Expo/IDG Enterprise Events'),
(6, 'shobi', 'shobi', 'shobi@shobi.com', 3, 'Shobi', '', 2147483647, 'Debra Becker\r\nSr. Marketing Director\r\nIDG World Expo/IDG Enterprise Events'),
(7, 'nikhil', 'nikhil', 'nikhil@nikhil.com', 3, 'Nikhil', '', 2147483647, 'Debra Becker\r\nSr. Marketing Director\r\nIDG World Expo/IDG Enterprise Events');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biddetails`
--
ALTER TABLE `biddetails`
 ADD PRIMARY KEY (`bidid`);

--
-- Indexes for table `bidparticipation`
--
ALTER TABLE `bidparticipation`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`msgid`);

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
-- AUTO_INCREMENT for table `biddetails`
--
ALTER TABLE `biddetails`
MODIFY `bidid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `bidparticipation`
--
ALTER TABLE `bidparticipation`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
MODIFY `msgid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=298;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
