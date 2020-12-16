-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 05:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_connect`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `S.No` int(10) NOT NULL,
  `Places` varchar(20) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Location` varchar(20) NOT NULL,
  `Tickets` varchar(20) NOT NULL,
  `Timings` varchar(20) NOT NULL,
  `Nearest Metro Station` varchar(10) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Official Website` varchar(10) NOT NULL,
  `Nearest Places` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`S.No`, `Places`, `Description`, `Location`, `Tickets`, `Timings`, `Nearest Metro Station`, `Contact`, `Official Website`, `Nearest Places`) VALUES
(1, 'INDIA GATE', 'India Gate is one monument that defines Delhi or India for that matter. It was built in 1931 as a me', 'RAJPATH MARG, NEW DE', 'Free', 'Open 24*7', 'CENTRAL SE', '', '', 'National Gallery of '),
(2, 'QUTUB MINAR', 'Among the other places to visit in Delhi, Qutub Minar stands tall with its 73 meter tall brick minar', 'MEHRAULI, NEW DELHI', 'Free for children un', '10:00 AM - 5:00 PM. ', 'QUTUB MINA', '', '', 'Chattarpur Temple');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
