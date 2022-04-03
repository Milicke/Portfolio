-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 04:31 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recnik`
--

-- --------------------------------------------------------

--
-- Table structure for table `reci`
--

CREATE TABLE `reci` (
  `id` int(10) NOT NULL,
  `srpski` varchar(50) COLLATE utf8_bin NOT NULL,
  `engleski` varchar(50) COLLATE utf8_bin NOT NULL,
  `opis` varchar(1024) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `reci`
--

INSERT INTO `reci` (`id`, `srpski`, `engleski`, `opis`) VALUES
(2, 'kuca', 'house', 'Kuca-dom'),
(3, 'macka', 'cat', ''),
(4, 'stol', 'desk', ''),
(5, 'pas', 'dog', 'pas-ljubimac');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reci`
--
ALTER TABLE `reci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reci`
--
ALTER TABLE `reci`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
