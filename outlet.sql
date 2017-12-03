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
-- Table structure for table `outlet`
--

CREATE TABLE `outlet` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `pemilik` varchar(50) NOT NULL,
  `pengelola` varchar(50) NOT NULL,
  `jalur_distribusi` int(3) NOT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kelurahan` varchar(50) DEFAULT NULL,
  `kabupaten` char(4) NOT NULL,
  `propinsi` char(2) DEFAULT NULL,
  `negara` int(11) NOT NULL,
  `tipe` int(3) NOT NULL,
  `ukuran` int(3) NOT NULL,
  `bangunan` int(3) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `kodepos` int(10) DEFAULT NULL,
  `telp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outlet`
--

INSERT INTO `outlet` (`id`, `nama`, `email`, `alamat`, `foto`, `pemilik`, `pengelola`, `jalur_distribusi`, `kecamatan`, `kelurahan`, `kabupaten`, `propinsi`, `negara`, `tipe`, `ukuran`, `bangunan`, `lokasi`, `kodepos`, `telp`) VALUES
(1, 'Sumber Mas', 'goldsource@sbrmas.com', 'Jalan Kapten Piere Tendean 61', 'monster2.jpg', 'Full Moon', 'Full Moon', 1, 'Sumber Sari', 'Karangrejo', '3509', '35', 101, 3, 1, 1, 'Lampu merah pasar belok kanan, lurus sampai jembat', 0, 331323472),
(2, 'Tambak Mas', '', 'Jalan Banyu Urip Wetan 61', 'monster3.jpg', 'Tugimin', 'Ngatemin', 5, 'Karangasem', 'Bungursari', '3673', '31', 101, 2, 2, 2, 'Bumi', 0, 31356967),
(3, 'Toko Mahmud', '', 'Jalan Ahmad Yani 33', 'chicago.jpg', 'Anjay', 'Anjay', 3, 'Banten', 'Serang', '3604', '32', 101, 3, 1, 1, 'Bumi', 0, 21596812),
(4, 'Getorade', 'geto@getorede.com', 'Jalan Ambur Adul 123', 'ny.jpg', 'Ujang', 'Ujang', 1, 'Karang Mesem', 'Banyu Urip', '3273', '32', 101, 2, 1, 1, 'Bumi', 36542, 54312346),
(5, 'Toko Deni', '', 'Jalan Trujoyo 131', 'download.jpg', 'Eric', 'Eric', 7, 'Tembakan', 'Kaseman', '3578', '35', 101, 1, 3, 3, 'Bumi', 0, 331772791);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `outlet`
--
ALTER TABLE `outlet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
