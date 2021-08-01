-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 11:54 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reporting`
--

-- --------------------------------------------------------

--
-- Table structure for table `rform`
--

CREATE TABLE `rform` (
  `names` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `address` varchar(45) NOT NULL,
  `phone` text NOT NULL,
  `occupation` varchar(40) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rform`
--

INSERT INTO `rform` (`names`, `email`, `address`, `phone`, `occupation`, `message`) VALUES
('manzi emmy', 'manziemmy@gmail.com', 'musanze', '0785666666', 'student', 'i want a help'),
('manzi emmy', 'manziemmy@gmail.com', 'musanze', '0785666666', 'student', 'i want a help'),
('mpomaluma jules', 'mpmppala12@gmail.com', 'canada', '+11255621566', 'police', 'reporting kidnapping'),
('nibishaka paul', 'paulizo12@gmail.com', 'kirehe', '0782663367', 'umucuruzi', 'reporting lobbing');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
