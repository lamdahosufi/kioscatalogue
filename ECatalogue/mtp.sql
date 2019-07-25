-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 12:33 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtp`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE `data_barang` (
  `id_barang` varchar(18) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `qty_barang` int(11) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `tgl_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`id_barang`, `nama_barang`, `qty_barang`, `harga_barang`, `tgl_add`) VALUES
('0123', 'TEH', 15, 3000, '2018-03-27 17:00:00'),
('1', 'KOPI', 40, 10000, '2018-03-27 17:00:00'),
('10', '10', 10, 10, '2018-03-27 17:00:00'),
('11', '11', 11, 11, '2018-03-27 17:00:00'),
('14110', 'E', 1, 1, '2018-03-08 17:00:00'),
('5', '5', 5, 5, '2018-03-27 17:00:00'),
('6', '6', 6, 6, '2018-03-27 17:00:00'),
('7', '7', 7, 7, '2018-03-27 17:00:00'),
('8', '8', 8, 8, '2018-03-27 17:00:00'),
('9', '9', 9, 9, '2018-03-27 17:00:00'),
('K1S4', '1', 1, 1, '2018-03-27 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `data_pesan`
--

CREATE TABLE `data_pesan` (
  `id_pesan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_barang` varchar(18) NOT NULL,
  `qty_pesan` int(11) NOT NULL,
  `harga_pesan` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `total_pesan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pesan`
--

INSERT INTO `data_pesan` (`id_pesan`, `id_barang`, `qty_pesan`, `harga_pesan`, `total_harga`, `total_pesan`) VALUES
('2018-03-28 12:19:55', '10', 15, 1000, 15000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `data_pesan`
--
ALTER TABLE `data_pesan`
  ADD KEY `id_barang` (`id_barang`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_pesan`
--
ALTER TABLE `data_pesan`
  ADD CONSTRAINT `data_pesan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `data_barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
