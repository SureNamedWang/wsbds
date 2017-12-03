-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2017 at 09:17 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `koordinat`
--

CREATE TABLE `koordinat` (
  `key` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `x` varchar(50) NOT NULL,
  `y` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `koordinat`
--

INSERT INTO `koordinat` (`key`, `id`, `x`, `y`) VALUES
(2, 1, '-7.322396', '112.770815'),
(5, 2, '-7.325756', '112.779902'),
(3, 3, '-7.317877', '112.756731'),
(1, 4, '-8.190103', '113.728975'),
(4, 5, '-8.176991', '113.717742'),
(7, 6, '-8.172474', '113.702031'),
(8, 7, '-7.812143', '110.366249'),
(9, 8, '-6.995297', '110.421727'),
(10, 9, '-6.201523', '106.782531'),
(6, 10, '-6.338023', '106.187694'),
(11, 12, '-6.917464', '107.619123'),
(12, 13, '-6.597147', '106.806039'),
(13, 11, '-6.402484', '106.794241'),
(14, 14, '-7.479734', '110.217694'),
(15, 16, '-6.889836', '109.674592'),
(16, 15, '-7.424278', '109.239637'),
(17, 18, '-7.732521', '110.402376'),
(18, 17, '-6.816207', '107.622796'),
(19, 20, '-6.886038', '109.064026'),
(20, 19, '-6.826046', '110.843811');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
