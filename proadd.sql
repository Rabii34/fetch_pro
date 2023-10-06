-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 07:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profetch`
--

-- --------------------------------------------------------

--
-- Table structure for table `proadd`
--

CREATE TABLE `proadd` (
  `pid` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pcategory` varchar(255) NOT NULL,
  `pdescription` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `pstatus` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proadd`
--

INSERT INTO `proadd` (`pid`, `pname`, `pcategory`, `pdescription`, `pimage`, `pstatus`) VALUES
(1, 'Pink Rose', 'Flower', 'Fresh rose', '', 1),
(2, 'Ring', 'Jewellery', 'Diamond ring', '', 1),
(3, 'red rose', 'flower', 'fresh rose', ' redrose.jpg', 0),
(5, 'Necklace', 'Jewellery', 'Gold necklace', '', 1),
(9, 'banana', 'fruit', 'fresh banana', ' pexels-vanessa-loring-5966630.jpg', 1),
(10, 'banana', 'fruit', 'fresh banana', ' pexels-vanessa-loring-5966630.jpg', 0),
(12, 'Pink Rose', 'Flower', 'Fresh rose', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proadd`
--
ALTER TABLE `proadd`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proadd`
--
ALTER TABLE `proadd`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
