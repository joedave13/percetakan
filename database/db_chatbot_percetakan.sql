-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 01:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_chatbot_percetakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`) VALUES
(1, 'Joshua Davian', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokumen`
--

CREATE TABLE `tb_dokumen` (
  `id` int(11) NOT NULL,
  `dokumen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dokumen`
--

INSERT INTO `tb_dokumen` (`id`, `dokumen`) VALUES
(1, 'selamat pagi'),
(2, 'percetakan radja printing buka jam 07.00'),
(12, 'mencetak banner korea harganya 30000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_index`
--

CREATE TABLE `tb_index` (
  `id` int(11) NOT NULL,
  `term` varchar(255) NOT NULL,
  `id_doc` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_index`
--

INSERT INTO `tb_index` (`id`, `term`, `id_doc`, `jumlah`, `bobot`) VALUES
(1, 'selamat', 1, 1, 0),
(2, 'pagi', 1, 1, 0),
(3, 'cetak', 2, 1, 0),
(4, 'radja', 2, 1, 0),
(5, 'printing', 2, 1, 0),
(6, 'buka', 2, 1, 0),
(7, 'jam', 2, 1, 0),
(8, '07', 2, 1, 0),
(9, '00', 2, 1, 0),
(10, 'cetak', 12, 1, 0),
(11, 'banner', 12, 1, 0),
(12, 'korea', 12, 1, 0),
(13, 'harga', 12, 1, 0),
(14, '30000', 12, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_stem`
--

CREATE TABLE `tb_stem` (
  `id` int(11) NOT NULL,
  `term` varchar(255) NOT NULL,
  `stem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_stem`
--

INSERT INTO `tb_stem` (`id`, `term`, `stem`) VALUES
(1, 'percetakan', 'cetak'),
(2, 'mencetak', 'cetak'),
(3, 'harganya', 'harga'),
(4, 'membeli', 'beli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_index`
--
ALTER TABLE `tb_index`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_stem`
--
ALTER TABLE `tb_stem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_index`
--
ALTER TABLE `tb_index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_stem`
--
ALTER TABLE `tb_stem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
