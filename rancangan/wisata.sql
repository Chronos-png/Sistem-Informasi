-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 05:17 PM
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
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `namaAdmin` varchar(128) NOT NULL,
  `alamatAdmin` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `idVisitor` int(11) DEFAULT NULL,
  `idAdmin` int(11) DEFAULT NULL,
  `idWisata` int(11) NOT NULL,
  `isiKomentar` varchar(256) NOT NULL,
  `waktuKomentar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `idVisitor` int(11) NOT NULL,
  `namaVisitor` varchar(128) NOT NULL,
  `alamatVisitor` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `idWisata` int(11) NOT NULL,
  `namaWisata` varchar(128) NOT NULL,
  `nilaiWisata` float NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`idWisata`, `namaWisata`, `nilaiWisata`, `gambar`) VALUES
(1, 'Desa Ambender', 0.09388, 'ambender.jpeg'),
(2, 'Desa Bulungan Barat', 0.09233, 'bulunganBarat.jpeg'),
(3, 'Desa Bulungan Branta', 0.08679, 'bulunganBranta.jpeg'),
(4, 'Desa Bulungan Haji', 0.08945, 'bulunganHaji.jpeg'),
(5, 'Desa Bulungan Timur', 0.08945, 'bulanganTimur.jpeg'),
(6, 'Desa Palesanggar', 0.0941, 'palesanggar.png'),
(7, 'Desa Pasanggar', 0.09345, 'pasanggar.jpg'),
(8, 'Desa Plakpak', 0.10319, 'plakpak.jpeg'),
(9, 'Desa Tebul Timur', 0.08767, 'tebulTimur.jpg'),
(10, 'Desa Tebul Barat', 0.08745, 'tebulBarat.jpeg'),
(11, 'Desa Tlagah', 0.0839, 'tlagah.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD KEY `komentarVisitor` (`idVisitor`),
  ADD KEY `komentarAdmin` (`idAdmin`),
  ADD KEY `wisataDikomentar` (`idWisata`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`idVisitor`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`idWisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `idVisitor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `idWisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentarAdmin` FOREIGN KEY (`idAdmin`) REFERENCES `admin` (`idAdmin`),
  ADD CONSTRAINT `komentarVisitor` FOREIGN KEY (`idVisitor`) REFERENCES `visitor` (`idVisitor`),
  ADD CONSTRAINT `wisataDikomentar` FOREIGN KEY (`idWisata`) REFERENCES `wisata` (`idWisata`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
