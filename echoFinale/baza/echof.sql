-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 05:56 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `echof`
--

-- --------------------------------------------------------

--
-- Table structure for table `dogadjaji`
--

CREATE TABLE `dogadjaji` (
  `id` int(5) NOT NULL,
  `naziv` varchar(100) NOT NULL,
  `opis` varchar(700) NOT NULL,
  `datum` varchar(100) NOT NULL,
  `id_k` int(5) NOT NULL,
  `slika` varchar(100) NOT NULL,
  `adresa` varchar(100) NOT NULL,
  `grad` varchar(100) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lng` varchar(100) NOT NULL,
  `kategorija_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategorije`
--

CREATE TABLE `kategorije` (
  `id` int(5) NOT NULL,
  `naziv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategorije`
--

INSERT INTO `kategorije` (`id`, `naziv`) VALUES
(1, 'sport'),
(2, 'umetnost'),
(3, 'knjizevnost'),
(4, 'kultura');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(5) NOT NULL,
  `ime` varchar(100) NOT NULL,
  `prezime` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `k_ime` varchar(100) NOT NULL,
  `sifra` varchar(100) NOT NULL,
  `balance` int(10) NOT NULL,
  `admin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kor_dogadjaj`
--

CREATE TABLE `kor_dogadjaj` (
  `id_kor` int(5) NOT NULL,
  `id_dogadjaj` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dogadjaji`
--
ALTER TABLE `dogadjaji`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_k` (`id_k`),
  ADD KEY `kategorija_id` (`kategorija_id`);

--
-- Indexes for table `kategorije`
--
ALTER TABLE `kategorije`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `k_ime` (`k_ime`);

--
-- Indexes for table `kor_dogadjaj`
--
ALTER TABLE `kor_dogadjaj`
  ADD PRIMARY KEY (`id_kor`,`id_dogadjaj`),
  ADD KEY `id_dogadjaj` (`id_dogadjaj`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dogadjaji`
--
ALTER TABLE `dogadjaji`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kategorije`
--
ALTER TABLE `kategorije`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dogadjaji`
--
ALTER TABLE `dogadjaji`
  ADD CONSTRAINT `dogadjaji_ibfk_1` FOREIGN KEY (`id_k`) REFERENCES `korisnici` (`id`),
  ADD CONSTRAINT `dogadjaji_ibfk_2` FOREIGN KEY (`kategorija_id`) REFERENCES `kategorije` (`id`);

--
-- Constraints for table `kor_dogadjaj`
--
ALTER TABLE `kor_dogadjaj`
  ADD CONSTRAINT `kor_dogadjaj_ibfk_1` FOREIGN KEY (`id_kor`) REFERENCES `korisnici` (`id`),
  ADD CONSTRAINT `kor_dogadjaj_ibfk_2` FOREIGN KEY (`id_dogadjaj`) REFERENCES `dogadjaji` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
