-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 08:25 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

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
-- Table structure for table `tb_cache`
--

CREATE TABLE `tb_cache` (
  `id` int(11) NOT NULL,
  `query` varchar(255) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_cache`
--

INSERT INTO `tb_cache` (`id`, `query`, `doc_id`, `nilai`) VALUES
(1, 'selamat pagi', 1, 0.999999),
(4, 'jam berapa toko buka', 2, 0.285453),
(5, 'jam toko buka', 2, 0.285453),
(6, 'harga banner korea', 12, 0.851645),
(7, 'harga art paper', 12, 0.491698),
(53, 'harga cetak banner glossy', 2, 0.0113149),
(54, 'harga cetak banner glossy', 12, 0.305589),
(55, 'harga cetak banner glossy', 13, 0.0116249),
(56, 'harga cetak banner glossy', 14, 0.787619),
(57, 'harga cetak banner glossy', 15, 0.0956988),
(58, 'cetak stiker cina', 2, 0.0101516),
(59, 'cetak stiker cina', 12, 0.0129304),
(60, 'cetak stiker cina', 13, 0.0104297),
(61, 'cetak stiker cina', 14, 0.0129304),
(62, 'cetak stiker cina', 15, 0.794041),
(63, 'hai', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cetakan`
--

CREATE TABLE `tb_cetakan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_cetakan`
--

INSERT INTO `tb_cetakan` (`id`, `nama`, `harga`) VALUES
(1, 'Banner Biasa', 18000),
(2, 'Banner Glossy', 25000),
(3, 'Banner Korea', 30000),
(5, 'Stiker Cina', 55000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `detail_id` int(11) NOT NULL,
  `detail_transaksi` int(11) NOT NULL,
  `detail_barang` int(11) NOT NULL,
  `detail_panjang` int(11) NOT NULL,
  `detail_lebar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_transaksi`
--

INSERT INTO `tb_detail_transaksi` (`detail_id`, `detail_transaksi`, `detail_barang`, `detail_panjang`, `detail_lebar`) VALUES
(32, 28, 1, 5, 5),
(33, 28, 2, 5, 5),
(38, 30, 5, 1, 1),
(39, 30, 1, 5, 5),
(46, 29, 1, 5, 5),
(47, 29, 2, 5, 5),
(48, 29, 5, 1, 1);

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
(2, 'percetakan radja printing buka jam 7 pagi'),
(12, 'mencetak banner korea harganya 30000'),
(13, 'halo, selamat datang di percetakan radja printing'),
(14, 'mencetak banner glossy harga 25000'),
(15, 'cetak stiker cina harganya 55000'),
(16, 'selamat sore');

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
(1, 'selamat', 1, 1, 0.847298),
(2, 'pagi', 1, 1, 1.25276),
(3, 'cetak', 2, 1, 0.336472),
(4, 'radja', 2, 1, 1.25276),
(5, 'printing', 2, 1, 1.25276),
(6, 'buka', 2, 1, 1.94591),
(7, 'jam', 2, 1, 1.94591),
(8, '7', 2, 1, 1.94591),
(9, 'pagi', 2, 1, 1.25276),
(10, 'cetak', 12, 1, 0.336472),
(11, 'banner', 12, 1, 1.25276),
(12, 'korea', 12, 1, 1.94591),
(13, 'harga', 12, 1, 0.847298),
(14, '30000', 12, 1, 1.94591),
(15, 'halo', 13, 1, 1.94591),
(16, 'selamat', 13, 1, 0.847298),
(17, 'datang', 13, 1, 1.94591),
(18, 'di', 13, 1, 1.94591),
(19, 'cetak', 13, 1, 0.336472),
(20, 'radja', 13, 1, 1.25276),
(21, 'printing', 13, 1, 1.25276),
(22, 'cetak', 14, 1, 0.336472),
(23, 'banner', 14, 1, 1.25276),
(24, 'glossy', 14, 1, 1.94591),
(25, 'harga', 14, 1, 0.847298),
(26, '25000', 14, 1, 1.94591),
(27, 'cetak', 15, 1, 0.336472),
(28, 'stiker', 15, 1, 1.94591),
(29, 'cina', 15, 1, 1.94591),
(30, 'harga', 15, 1, 0.847298),
(31, '55000', 15, 1, 1.94591),
(32, 'selamat', 16, 1, 0.847298),
(33, 'sore', 16, 1, 1.94591);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `pelanggan_id` int(11) NOT NULL,
  `pelanggan_nama` varchar(255) NOT NULL,
  `pelanggan_jk` varchar(50) NOT NULL,
  `pelanggan_alamat` text NOT NULL,
  `pelanggan_hp` varchar(128) NOT NULL,
  `pelanggan_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`pelanggan_id`, `pelanggan_nama`, `pelanggan_jk`, `pelanggan_alamat`, `pelanggan_hp`, `pelanggan_email`) VALUES
(1, 'Joshua Davian', 'Pria', 'Jl. Adi Sucipto Gg. Jinitren No. 82 Kediri', '082325182769', 'joshuadavian@gmail.com'),
(4, 'Yohana Bernike', 'Wanita', 'Kediri', '082325182769', 'yohanabernike@gmail.com'),
(5, 'Trianta Almira', 'Wanita', 'Probolinggo', '082325182769', 'trianta@gmail.com');

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

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_tgl` date NOT NULL,
  `transaksi_pelanggan` int(11) NOT NULL,
  `transaksi_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`transaksi_id`, `transaksi_tgl`, `transaksi_pelanggan`, `transaksi_status`) VALUES
(28, '2020-06-07', 5, 2),
(29, '2020-06-08', 1, 1),
(30, '2020-06-08', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_vektor`
--

CREATE TABLE `tb_vektor` (
  `doc_id` int(11) NOT NULL,
  `panjang` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_vektor`
--

INSERT INTO `tb_vektor` (`doc_id`, `panjang`) VALUES
(1, 1.51239),
(2, 4.02258),
(12, 3.15811),
(13, 3.91531),
(14, 3.15811),
(15, 3.49154),
(16, 2.12238);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_cache`
--
ALTER TABLE `tb_cache`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cetakan`
--
ALTER TABLE `tb_cetakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD PRIMARY KEY (`detail_id`);

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
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indexes for table `tb_stem`
--
ALTER TABLE `tb_stem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indexes for table `tb_vektor`
--
ALTER TABLE `tb_vektor`
  ADD PRIMARY KEY (`doc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_cache`
--
ALTER TABLE `tb_cache`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tb_cetakan`
--
ALTER TABLE `tb_cetakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_index`
--
ALTER TABLE `tb_index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_stem`
--
ALTER TABLE `tb_stem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_vektor`
--
ALTER TABLE `tb_vektor`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
