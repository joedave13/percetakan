-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 02:15 PM
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
(70, 'halo', 17, 1),
(71, 'selamat pagi', 18, 1),
(72, 'harga banner biasa', 19, 0.654653),
(73, 'harga banner korea', 19, 0.172988),
(74, 'harga banner korea', 20, 0.172988),
(75, 'harga banner korea', 21, 0.748473),
(76, 'harga banner korea', 22, 0.00424584),
(77, 'harga banner korea', 23, 0.00485889),
(78, 'harga banner korea', 24, 0.00424584),
(79, 'harga banner korea', 25, 0.00424584),
(80, 'harga banner korea', 26, 0.00485889),
(81, 'harga banner korea', 27, 0.00424584),
(82, 'harga stiker oneway', 19, 0.00444159),
(83, 'harga stiker oneway', 20, 0.00444159),
(84, 'harga stiker oneway', 21, 0.00444159),
(85, 'harga stiker oneway', 22, 0.0473697),
(86, 'harga stiker oneway', 23, 0.0542093),
(87, 'harga stiker oneway', 24, 0.0473697),
(88, 'harga stiker oneway', 25, 0.0473697),
(89, 'harga stiker oneway', 26, 0.818796),
(90, 'harga stiker oneway', 27, 0.0473697);

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
(50, 29, 1, 5, 5),
(51, 29, 2, 5, 5),
(52, 29, 5, 1, 1);

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
(17, 'Halo'),
(18, 'Selamat Pagi'),
(19, 'Harga Cetak Banner Biasa Rp. 18.000'),
(20, 'Harga Cetak Banner Glossy Rp. 25.000'),
(21, 'Harga Cetak Banner Korea Rp. 30.000'),
(22, 'Harga Cetak Stiker Cina Rp. 55.000'),
(23, 'Harga Cetak Stiker Ritrama Rp. 75.000'),
(24, 'Harga Cetak Stiker Luster Rp. 60.000'),
(25, 'Harga Cetak Stiker Cloth Rp. 45.000'),
(26, 'Harga Cetak Stiker Oneway Rp. 75.000'),
(27, 'Harga Cetak Stiker Transparan Rp. 80.000');

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
(1, 'halo', 17, 1, 2.3979),
(2, 'selamat', 18, 1, 2.3979),
(3, 'pagi', 18, 1, 2.3979),
(4, 'harga', 19, 1, 0.200671),
(5, 'cetak', 19, 1, 0.200671),
(6, 'banner', 19, 1, 1.29928),
(7, 'biasa', 19, 1, 2.3979),
(8, 'rp', 19, 1, 0.200671),
(9, '18', 19, 1, 2.3979),
(10, '000', 19, 1, 0.200671),
(11, 'harga', 20, 1, 0.200671),
(12, 'cetak', 20, 1, 0.200671),
(13, 'banner', 20, 1, 1.29928),
(14, 'glossy', 20, 1, 2.3979),
(15, 'rp', 20, 1, 0.200671),
(16, '25', 20, 1, 2.3979),
(17, '000', 20, 1, 0.200671),
(18, 'harga', 21, 1, 0.200671),
(19, 'cetak', 21, 1, 0.200671),
(20, 'banner', 21, 1, 1.29928),
(21, 'korea', 21, 1, 2.3979),
(22, 'rp', 21, 1, 0.200671),
(23, '30', 21, 1, 2.3979),
(24, '000', 21, 1, 0.200671),
(25, 'harga', 22, 1, 0.200671),
(26, 'cetak', 22, 1, 0.200671),
(27, 'stiker', 22, 1, 0.606136),
(28, 'cina', 22, 1, 2.3979),
(29, 'rp', 22, 1, 0.200671),
(30, '55', 22, 1, 2.3979),
(31, '000', 22, 1, 0.200671),
(32, 'harga', 23, 1, 0.200671),
(33, 'cetak', 23, 1, 0.200671),
(34, 'stiker', 23, 1, 0.606136),
(35, 'ritrama', 23, 1, 2.3979),
(36, 'rp', 23, 1, 0.200671),
(37, '75', 23, 1, 1.70475),
(38, '000', 23, 1, 0.200671),
(39, 'harga', 24, 1, 0.200671),
(40, 'cetak', 24, 1, 0.200671),
(41, 'stiker', 24, 1, 0.606136),
(42, 'luster', 24, 1, 2.3979),
(43, 'rp', 24, 1, 0.200671),
(44, '60', 24, 1, 2.3979),
(45, '000', 24, 1, 0.200671),
(46, 'harga', 25, 1, 0.200671),
(47, 'cetak', 25, 1, 0.200671),
(48, 'stiker', 25, 1, 0.606136),
(49, 'cloth', 25, 1, 2.3979),
(50, 'rp', 25, 1, 0.200671),
(51, '45', 25, 1, 2.3979),
(52, '000', 25, 1, 0.200671),
(53, 'harga', 26, 1, 0.200671),
(54, 'cetak', 26, 1, 0.200671),
(55, 'stiker', 26, 1, 0.606136),
(56, 'oneway', 26, 1, 2.3979),
(57, 'rp', 26, 1, 0.200671),
(58, '75', 26, 1, 1.70475),
(59, '000', 26, 1, 0.200671),
(60, 'harga', 27, 1, 0.200671),
(61, 'cetak', 27, 1, 0.200671),
(62, 'stiker', 27, 1, 0.606136),
(63, 'transparan', 27, 1, 2.3979),
(64, 'rp', 27, 1, 0.200671),
(65, '80', 27, 1, 2.3979),
(66, '000', 27, 1, 0.200671);

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
(5, 'Trianta Almira', 'Wanita', 'Probolinggo', '082325182769', 'trianta@gmail.com'),
(6, 'Andi Hermawan', 'Pria', 'Jakarta', '086754678432', 'andi@gmail.com');

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
(29, '2020-06-08', 1, 2);

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
(17, 2.3979),
(18, 3.39114),
(19, 3.65364),
(20, 3.65364),
(21, 3.65364),
(22, 3.46819),
(23, 3.03061),
(24, 3.46819),
(25, 3.46819),
(26, 3.03061),
(27, 3.46819);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `tb_cetakan`
--
ALTER TABLE `tb_cetakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_index`
--
ALTER TABLE `tb_index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_stem`
--
ALTER TABLE `tb_stem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_vektor`
--
ALTER TABLE `tb_vektor`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
