-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 03:20 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spark`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `balance`) VALUES
(1001, 'Tanya Soni', 'tan29@gmail.com', 7480),
(1002, 'Muskan Sethi', 'musk27@gmail.com', 6459),
(1003, 'Manya Rai', 'man30@gmail.com', 9135),
(1004, 'Aditi Dwivedi', 'aditi31@gmail.com', 5200),
(1005, 'Ankur Kushwaha', 'ankur20@gmail.com', 5087),
(1006, 'Reetika Sahu', 'reet03@gmail.com', 6800),
(1007, 'Ritika Verma', 'riti22@gmail.com', 6200),
(1008, 'Subhadra Singh', 'subhu11@gmail.com', 6400),
(1009, 'Tanya Srivastava', 'tan30@gmail.com', 7810),
(1010, 'Vaishnavi Singh', 'vaish22@gmail.com', 8016);

-- --------------------------------------------------------

--
-- Table structure for table `tranhis`
--

CREATE TABLE `tranhis` (
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tranhis`
--

INSERT INTO `tranhis` (`sender`, `receiver`, `balance`) VALUES
('Manya Rai', 'Aditi Dwivedi', 700),
('Vaishnavi Singh', 'Subhadra Singh', 1000),
('Muskan Sethi', 'Tanya Soni', 1200);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

