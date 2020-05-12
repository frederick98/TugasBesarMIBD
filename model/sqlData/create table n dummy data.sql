-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 01:14 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

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
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `minReview` int(10) NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`minReview`, `rating`) VALUES
(3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `dibuatdi`
--

CREATE TABLE `dibuatdi` (
  `idRamen` int(20) NOT NULL,
  `idRestoran` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `dibuatdi`
--

INSERT INTO `dibuatdi` (`idRamen`, `idRestoran`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 2),
(5, 2),
(6, 2),
(7, 3),
(8, 3),
(9, 3),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `idKota` int(20) NOT NULL,
  `idNegara` int(20) NOT NULL,
  `namaKota` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`idKota`, `idNegara`, `namaKota`) VALUES
(1, 1, 'Jakarta'),
(2, 1, 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `negara`
--

CREATE TABLE `negara` (
  `idNegara` int(20) NOT NULL,
  `namaNegara` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `negara`
--

INSERT INTO `negara` (`idNegara`, `namaNegara`) VALUES
(1, 'Indonesia'),
(2, 'Singapura');

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
(1, 'admin', 'admin', 'Admin 1', 'admin@ramenku.com', 0),
(2, 'volkz', 'volkz', 'Volkz', 'volkz@ramenku.com', 1),
(3, 'suneo27', 'suneo27', 'Thomas Christian', 'suneogiantnobita@blabla.com', 1),
(4, 'elle787', 'elle787', 'Elle', 'elle787@mail.com', 1),
(5, 'verra89', 'verra89', 'Verra Tan', 'verra89@gmail.com', 1),
(6, 'gerald2009', 'gerald2009', 'Gerald', 'gerald2009@mail.com', 1),
(7, 'Nairobiii', 'Nairobiii', 'Nairobiii', 'Nairobiii@gmail.com', 1),
(8, 'Jevalesta99', 'Jevalesta99', 'Jevalesta', 'Jevalesta99@gmail.com', 1),
(9, 'Helsinki_88', 'Helsinki_88', 'Helsinki', 'Helsinki_88@gmail.com', 1),
(10, 'YulianaC_1998', 'YulianaC_1998', 'Yuliana', 'YulianaC_1998@gmail.com', 1),
(11, 'Bo098', 'Bo098', 'Bobby', 'Bo098@gmail.com', 1),
(12, '1208_Keynandra', '1208_Keynandra', 'Nandra', '1208_Keynandra@gmail.com', 1),
(13, 'Zeinan77', 'Zeinan77', 'Zeinan', 'Zeinan77@gmail.com', 1),
(14, 'Bebebebe', 'Bebebebe', 'Bebe', 'Bebebebe@gmail.com', 1),
(15, 'Ilvianti78', 'Ilvianti78', 'Livia', 'Ilvianti78@gmail.com', 1),
(16, 'Christianty99', 'Christianty99', 'Christian', 'Christianty99@gmail.com', 1),
(17, 'Itsmestella', 'Itsmestella', 'Stella', 'Itsmestella@gmail.com', 1),
(18, 'Fufi_777', 'Fufi_777', 'Fufi', 'Fufi_777@gmail.com', 1),
(19, 'Raymund99', 'Raymund99', 'Raymond', 'raymund99@gmail.com', 1),
(20, 'Doniq99', 'Doniq99', 'Doni', 'doniq99@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ramen`
--

CREATE TABLE `ramen` (
  `idRamen` int(20) NOT NULL,
  `namaRamen` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `ramen`
--

INSERT INTO `ramen` (`idRamen`, `namaRamen`, `harga`) VALUES
(1, 'Chicken TantanMen', 25000),
(2, 'Pork TantanMen', 28000),
(3, 'Chicken Shoyu', 22000),
(4, 'Tonkotsu Ramen', 40000),
(5, 'ToriShio Ramen', 30000),
(6, 'Tori Shoyu Ramen', 28000),
(7, 'Curry Ramen', 27000),
(8, 'Shoyu Ramen', 20000),
(9, 'Shio Ramen', 30000),
(10, 'Spicy MisoRamen', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `idRestoran` int(20) NOT NULL,
  `idKota` int(20) NOT NULL,
  `namaRestoran` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`idRestoran`, `idKota`, `namaRestoran`) VALUES
(1, 1, 'Ippudo'),
(2, 1, 'Menya Sakura'),
(3, 1, 'Nanami Ramen'),
(4, 1, 'Seirock Ya'),
(5, 2, 'Gokana Ramen & Teppan');

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
-- Dumping data for table `review`
--

INSERT INTO `review` (`idReview`, `idUser`, `idRamen`, `review`, `tglReview`, `rating`) VALUES
(1, 4, 1, 'gila enak banget!', '2020-05-04 12:20:22', 9.5),
(2, 5, 2, 'lumayan memuaskan!', '2020-05-03 16:39:33', 8.5),
(3, 6, 3, 'sesuai dengan harganya!', '2020-05-02 16:26:39', 7),
(4, 7, 4, 'Wahhh enak sekali ini Ramen. Juara lah', '2020-05-10 06:57:00', 9),
(5, 8, 5, 'Mantep nih Ramen Guys', '2020-05-10 12:00:00', 8),
(6, 9, 6, 'Rekomend banget nih ramen sis dan bro', '2020-05-09 08:00:00', 8.5),
(7, 10, 7, 'Rekomend banget nih', '2020-05-12 12:30:00', 7),
(8, 11, 8, 'Yah lumayan lah', '2020-05-06 10:00:00', 5),
(9, 12, 9, 'Ga enak guys rasanya hambar banget kaya minum air', '2020-05-12 06:00:00', 4),
(10, 13, 10, 'Cukup enak, Asin nya pas dan rasanya lumayan enak', '2020-05-11 10:00:00', 7);

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
  MODIFY `idKota` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `negara`
--
ALTER TABLE `negara`
  MODIFY `idNegara` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `idUser` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ramen`
--
ALTER TABLE `ramen`
  MODIFY `idRamen` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `restoran`
--
ALTER TABLE `restoran`
  MODIFY `idRestoran` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `idReview` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
