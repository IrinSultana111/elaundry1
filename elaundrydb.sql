-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 01:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elaundrydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `username` varchar(100) NOT NULL,
  `paymentmethod` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `timeslot` varchar(100) NOT NULL,
  `items` varchar(100) NOT NULL,
  `addcomment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`username`, `paymentmethod`, `total`, `date`, `timeslot`, `items`, `addcomment`) VALUES
('Farhan1', 'bkash', '320', '12/10/19', '6PM-10PM', 'shirt,apron', ''),
('salehin1', 'cash on delivery', '260', '12/11/19', '9AM-1PM', 'safari top, sleeping suit', ''),
('shuvro', 'bkash', '160', '12/9/19', '6PM-10PM', 'Shirt,Safari Top,', ''),
('salehin1', 'bkash', '320', '10/10/19', '6PM-10PM', 'Shirt,Apron', ''),
('shuvro', 'bkash', '260', '9/11/19', '9AM-1PM', 'Car seat cover', 'it will be appreciated if the product is delivered within 12pm.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cno` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `fullname`, `email`, `cno`, `address`, `area`, `pass`) VALUES
('sabera', 'saberasultana', 'sabera@gmail.com', '0154444488', '11/8,borobagh', 'Gulshan', '1234'),
('Irin', 'Irin Sultana', 'irin@gmailcom', '0158676868', '6/8,borobagh', 'Banani', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
