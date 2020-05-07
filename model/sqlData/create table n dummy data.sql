-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 07:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasbesarmibdramen`
--

-- --------------------------------------------------------

--
-- Table structure for table `dibuatdi`
--

CREATE TABLE `dibuatdi` (
  `idRamen` int(20) NOT NULL,
  `idRestoran` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `idKota` int(20) NOT NULL,
  `idNegara` int(20) NOT NULL,
  `namaKota` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Table structure for table `negara`
--

CREATE TABLE `negara` (
  `idNegara` int(20) NOT NULL,
  `namaNegara` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idUser` int(20) NOT NULL,
  `username` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `kategori` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idUser`, `username`, `password`, `nama`, `email`, `kategori`) VALUES
(1, 'admin', 'admin', 'Admin 1', 'admin@ramenku.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ramen`
--

CREATE TABLE `ramen` (
  `idRamen` int(20) NOT NULL,
  `namaRamen` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `idRestoran` int(20) NOT NULL,
  `idKota` int(20) NOT NULL,
  `namaRestoran` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `idReview` int(20) NOT NULL,
  `idUser` int(20) NOT NULL,
  `idRamen` int(20) NOT NULL,
  `review` varchar(10000) COLLATE utf8_general_mysql500_ci NOT NULL,
  `tglReview` datetime NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dibuatdi`
--
ALTER TABLE `dibuatdi`
  ADD KEY `FK_DibuatDi_Ramen` (`idRamen`),
  ADD KEY `FK_DibuatDi_Restoran` (`idRestoran`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`idKota`),
  ADD KEY `FK_Kota_Negara` (`idNegara`);

--
-- Indexes for table `negara`
--
ALTER TABLE `negara`
  ADD PRIMARY KEY (`idNegara`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `ramen`
--
ALTER TABLE `ramen`
  ADD PRIMARY KEY (`idRamen`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`idRestoran`),
  ADD KEY `FK_Restoran_Kota` (`idKota`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`idReview`),
  ADD KEY `FK_Review_Ramen` (`idRamen`),
  ADD KEY `FK_Review_Pengguna` (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `idKota` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `negara`
--
ALTER TABLE `negara`
  MODIFY `idNegara` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `idUser` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ramen`
--
ALTER TABLE `ramen`
  MODIFY `idRamen` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restoran`
--
ALTER TABLE `restoran`
  MODIFY `idRestoran` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `idReview` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dibuatdi`
--
ALTER TABLE `dibuatdi`
  ADD CONSTRAINT `FK_DibuatDi_Ramen` FOREIGN KEY (`idRamen`) REFERENCES `ramen` (`idRamen`),
  ADD CONSTRAINT `FK_DibuatDi_Restoran` FOREIGN KEY (`idRestoran`) REFERENCES `restoran` (`idRestoran`);

--
-- Constraints for table `kota`
--
ALTER TABLE `kota`
  ADD CONSTRAINT `FK_Kota_Negara` FOREIGN KEY (`idNegara`) REFERENCES `negara` (`idNegara`);

--
-- Constraints for table `restoran`
--
ALTER TABLE `restoran`
  ADD CONSTRAINT `FK_Restoran_Kota` FOREIGN KEY (`idKota`) REFERENCES `kota` (`idKota`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FK_Review_Pengguna` FOREIGN KEY (`idUser`) REFERENCES `pengguna` (`idUser`),
  ADD CONSTRAINT `FK_Review_Ramen` FOREIGN KEY (`idRamen`) REFERENCES `ramen` (`idRamen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
