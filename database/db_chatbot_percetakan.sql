-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2020 at 06:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(90, 'harga stiker oneway', 27, 0.0473697),
(91, 'harga banner', 19, 0.359829),
(92, 'harga banner', 20, 0.359829),
(93, 'harga banner', 21, 0.359829),
(94, 'harga banner', 22, 0.00883167),
(95, 'harga banner', 23, 0.0101068),
(96, 'harga banner', 24, 0.00883167),
(97, 'harga banner', 25, 0.00883167),
(98, 'harga banner', 26, 0.0101068),
(99, 'harga banner', 27, 0.00883167),
(100, 'hai', 0, 0),
(101, 'cetak x banner', 19, 0.173994),
(102, 'cetak x banner', 20, 0.173994),
(103, 'cetak x banner', 21, 0.173994),
(104, 'cetak x banner', 22, 0.030308),
(105, 'cetak x banner', 23, 0.0332678),
(106, 'cetak x banner', 24, 0.0332678),
(107, 'cetak x banner', 25, 0.0332678),
(108, 'cetak x banner', 26, 0.0332678),
(109, 'cetak x banner', 27, 0.0332678),
(110, 'cetak x banner', 37, 0.750147),
(111, 'cetak x banner', 38, 0.173994),
(112, 'cetak x banner', 41, 0.0317185),
(113, 'harga pigura a3', 19, 0.00034698),
(114, 'harga pigura a3', 20, 0.00034698),
(115, 'harga pigura a3', 21, 0.00034698),
(116, 'harga pigura a3', 22, 0.000351056),
(117, 'harga pigura a3', 23, 0.00038534),
(118, 'harga pigura a3', 24, 0.00038534),
(119, 'harga pigura a3', 25, 0.00038534),
(120, 'harga pigura a3', 26, 0.00038534),
(121, 'harga pigura a3', 27, 0.00038534),
(122, 'harga pigura a3', 28, 0.000384247),
(123, 'harga pigura a3', 29, 0.000384247),
(124, 'harga pigura a3', 30, 0.000384247),
(125, 'harga pigura a3', 31, 0.000411244),
(126, 'harga pigura a3', 32, 0.000384247),
(127, 'harga pigura a3', 33, 0.000384247),
(128, 'harga pigura a3', 34, 0.000294436),
(129, 'harga pigura a3', 35, 0.000337564),
(130, 'harga pigura a3', 36, 0.000367702),
(131, 'harga pigura a3', 37, 0.00034698),
(132, 'harga pigura a3', 38, 0.00034698),
(133, 'harga pigura a3', 39, 0.848869),
(134, 'harga pigura a3', 40, 0.323697),
(135, 'harga pigura a3', 41, 0.000367395),
(140, 'harga banner glossy', 19, 0.150844),
(141, 'harga banner glossy', 20, 0.73671),
(142, 'harga banner glossy', 21, 0.150844),
(143, 'harga banner glossy', 22, 0.000839342),
(144, 'harga banner glossy', 23, 0.000920186),
(145, 'harga banner glossy', 24, 0.000920186),
(146, 'harga banner glossy', 25, 0.000920186),
(147, 'harga banner glossy', 26, 0.000920186),
(148, 'harga banner glossy', 27, 0.000920186),
(149, 'harga banner glossy', 28, 0.000913639),
(150, 'harga banner glossy', 29, 0.000913639),
(151, 'harga banner glossy', 30, 0.000913639),
(152, 'harga banner glossy', 31, 0.000978051),
(153, 'harga banner glossy', 32, 0.000913639),
(154, 'harga banner glossy', 33, 0.000913639),
(155, 'harga banner glossy', 34, 0.000702875),
(156, 'harga banner glossy', 35, 0.000803935),
(157, 'harga banner glossy', 36, 0.00087411),
(158, 'harga banner glossy', 37, 0.150844),
(159, 'harga banner glossy', 38, 0.150844),
(160, 'harga banner glossy', 39, 0.000840883),
(161, 'harga banner glossy', 40, 0.000840883),
(162, 'harga banner glossy', 41, 0.000879625),
(165, 'percetakan buka pukul berapa', 44, 0.227448),
(167, 'jam buka percetakan', 0, 0);

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
(52, 29, 5, 1, 1),
(53, 32, 3, 5, 5),
(54, 33, 3, 5, 5);

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
(27, 'Harga Cetak Stiker Transparan Rp. 80.000'),
(28, 'Harga Art Paper 120 Rp. 3.500'),
(29, 'Harga Art Paper 150 Rp. 3.500'),
(30, 'Harga Art Paper 230 Rp. 3.500'),
(31, 'Harga Art Paper 260 Rp. 4.000'),
(32, 'Harga Art Paper Bontax Rp. 4.500'),
(33, 'Harga Art Paper Jasmine Rp. 4.500'),
(34, 'Harga Art Paper BC TIK Rp. 5.000'),
(35, 'Harga Art Paper Vinyl Susu Rp. 8.000'),
(36, 'Harga Art Paper Vinyl Transparan Rp. 8.000'),
(37, 'Harga Cetak X Banner Rp. 40.000'),
(38, 'Harga Cetak Roll Banner Rp. 180.000'),
(39, 'Harga Pigura A3 Rp. 45.000'),
(40, 'Harga Pigura A4 Rp, 60.000'),
(41, 'Harga Cetak Brosur Rp. 175.000'),
(44, 'Percetakan Buka Pukul 7 Pagi sampai Pukul 10 Malam');

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
(1, 'halo', 17, 1, 3.2581),
(2, 'selamat', 18, 1, 3.2581),
(3, 'pagi', 18, 1, 2.56495),
(4, 'harga', 19, 1, 0.122602),
(5, 'cetak', 19, 1, 0.693147),
(6, 'banner', 19, 1, 1.64866),
(7, 'biasa', 19, 1, 3.2581),
(8, 'rp', 19, 1, 0.122602),
(9, '18', 19, 1, 3.2581),
(10, '000', 19, 1, 0.367725),
(11, 'harga', 20, 1, 0.122602),
(12, 'cetak', 20, 1, 0.693147),
(13, 'banner', 20, 1, 1.64866),
(14, 'glossy', 20, 1, 3.2581),
(15, 'rp', 20, 1, 0.122602),
(16, '25', 20, 1, 3.2581),
(17, '000', 20, 1, 0.367725),
(18, 'harga', 21, 1, 0.122602),
(19, 'cetak', 21, 1, 0.693147),
(20, 'banner', 21, 1, 1.64866),
(21, 'korea', 21, 1, 3.2581),
(22, 'rp', 21, 1, 0.122602),
(23, '30', 21, 1, 3.2581),
(24, '000', 21, 1, 0.367725),
(25, 'harga', 22, 1, 0.122602),
(26, 'cetak', 22, 1, 0.693147),
(27, 'stiker', 22, 1, 1.46634),
(28, 'cina', 22, 1, 3.2581),
(29, 'rp', 22, 1, 0.122602),
(30, '55', 22, 1, 3.2581),
(31, '000', 22, 1, 0.367725),
(32, 'harga', 23, 1, 0.122602),
(33, 'cetak', 23, 1, 0.693147),
(34, 'stiker', 23, 1, 1.46634),
(35, 'ritrama', 23, 1, 3.2581),
(36, 'rp', 23, 1, 0.122602),
(37, '75', 23, 1, 2.56495),
(38, '000', 23, 1, 0.367725),
(39, 'harga', 24, 1, 0.122602),
(40, 'cetak', 24, 1, 0.693147),
(41, 'stiker', 24, 1, 1.46634),
(42, 'luster', 24, 1, 3.2581),
(43, 'rp', 24, 1, 0.122602),
(44, '60', 24, 1, 2.56495),
(45, '000', 24, 1, 0.367725),
(46, 'harga', 25, 1, 0.122602),
(47, 'cetak', 25, 1, 0.693147),
(48, 'stiker', 25, 1, 1.46634),
(49, 'cloth', 25, 1, 3.2581),
(50, 'rp', 25, 1, 0.122602),
(51, '45', 25, 1, 2.56495),
(52, '000', 25, 1, 0.367725),
(53, 'harga', 26, 1, 0.122602),
(54, 'cetak', 26, 1, 0.693147),
(55, 'stiker', 26, 1, 1.46634),
(56, 'oneway', 26, 1, 3.2581),
(57, 'rp', 26, 1, 0.122602),
(58, '75', 26, 1, 2.56495),
(59, '000', 26, 1, 0.367725),
(60, 'harga', 27, 1, 0.122602),
(61, 'cetak', 27, 1, 0.693147),
(62, 'stiker', 27, 1, 1.46634),
(63, 'transparan', 27, 1, 2.56495),
(64, 'rp', 27, 1, 0.122602),
(65, '80', 27, 1, 3.2581),
(66, '000', 27, 1, 0.367725),
(67, 'harga', 28, 1, 0.122602),
(68, 'art', 28, 1, 1.06087),
(69, 'paper', 28, 1, 1.06087),
(70, '120', 28, 1, 3.2581),
(71, 'rp', 28, 1, 0.122602),
(72, '3', 28, 1, 2.15948),
(73, '500', 28, 1, 1.64866),
(74, 'harga', 29, 1, 0.122602),
(75, 'art', 29, 1, 1.06087),
(76, 'paper', 29, 1, 1.06087),
(77, '150', 29, 1, 3.2581),
(78, 'rp', 29, 1, 0.122602),
(79, '3', 29, 1, 2.15948),
(80, '500', 29, 1, 1.64866),
(81, 'harga', 30, 1, 0.122602),
(82, 'art', 30, 1, 1.06087),
(83, 'paper', 30, 1, 1.06087),
(84, '230', 30, 1, 3.2581),
(85, 'rp', 30, 1, 0.122602),
(86, '3', 30, 1, 2.15948),
(87, '500', 30, 1, 1.64866),
(88, 'harga', 31, 1, 0.122602),
(89, 'art', 31, 1, 1.06087),
(90, 'paper', 31, 1, 1.06087),
(91, '260', 31, 1, 3.2581),
(92, 'rp', 31, 1, 0.122602),
(93, '4', 31, 1, 2.15948),
(94, '000', 31, 1, 0.367725),
(95, 'harga', 32, 1, 0.122602),
(96, 'art', 32, 1, 1.06087),
(97, 'paper', 32, 1, 1.06087),
(98, 'bontax', 32, 1, 3.2581),
(99, 'rp', 32, 1, 0.122602),
(100, '4', 32, 1, 2.15948),
(101, '500', 32, 1, 1.64866),
(102, 'harga', 33, 1, 0.122602),
(103, 'art', 33, 1, 1.06087),
(104, 'paper', 33, 1, 1.06087),
(105, 'jasmine', 33, 1, 3.2581),
(106, 'rp', 33, 1, 0.122602),
(107, '4', 33, 1, 2.15948),
(108, '500', 33, 1, 1.64866),
(109, 'harga', 34, 1, 0.122602),
(110, 'art', 34, 1, 1.06087),
(111, 'paper', 34, 1, 1.06087),
(112, 'bc', 34, 1, 3.2581),
(113, 'tik', 34, 1, 3.2581),
(114, 'rp', 34, 1, 0.122602),
(115, '5', 34, 1, 3.2581),
(116, '000', 34, 1, 0.367725),
(117, 'harga', 35, 1, 0.122602),
(118, 'art', 35, 1, 1.06087),
(119, 'paper', 35, 1, 1.06087),
(120, 'vinyl', 35, 1, 2.56495),
(121, 'susu', 35, 1, 3.2581),
(122, 'rp', 35, 1, 0.122602),
(123, '8', 35, 1, 2.56495),
(124, '000', 35, 1, 0.367725),
(125, 'harga', 36, 1, 0.122602),
(126, 'art', 36, 1, 1.06087),
(127, 'paper', 36, 1, 1.06087),
(128, 'vinyl', 36, 1, 2.56495),
(129, 'transparan', 36, 1, 2.56495),
(130, 'rp', 36, 1, 0.122602),
(131, '8', 36, 1, 2.56495),
(132, '000', 36, 1, 0.367725),
(133, 'harga', 37, 1, 0.122602),
(134, 'cetak', 37, 1, 0.693147),
(135, 'x', 37, 1, 3.2581),
(136, 'banner', 37, 1, 1.64866),
(137, 'rp', 37, 1, 0.122602),
(138, '40', 37, 1, 3.2581),
(139, '000', 37, 1, 0.367725),
(140, 'harga', 38, 1, 0.122602),
(141, 'cetak', 38, 1, 0.693147),
(142, 'roll', 38, 1, 3.2581),
(143, 'banner', 38, 1, 1.64866),
(144, 'rp', 38, 1, 0.122602),
(145, '180', 38, 1, 3.2581),
(146, '000', 38, 1, 0.367725),
(147, 'harga', 39, 1, 0.122602),
(148, 'pigura', 39, 1, 2.56495),
(149, 'a3', 39, 1, 3.2581),
(150, 'rp', 39, 1, 0.122602),
(151, '45', 39, 1, 2.56495),
(152, '000', 39, 1, 0.367725),
(153, 'harga', 40, 1, 0.122602),
(154, 'pigura', 40, 1, 2.56495),
(155, 'a4', 40, 1, 3.2581),
(156, 'rp', 40, 1, 0.122602),
(157, '60', 40, 1, 2.56495),
(158, '000', 40, 1, 0.367725),
(159, 'harga', 41, 1, 0.122602),
(160, 'cetak', 41, 1, 0.693147),
(161, 'brosur', 41, 1, 3.2581),
(162, 'rp', 41, 1, 0.122602),
(163, '175', 41, 1, 3.2581),
(164, '000', 41, 1, 0.367725),
(165, 'cetak', 44, 1, 0.693147),
(166, 'buka', 44, 1, 3.2581),
(167, 'pukul', 44, 2, 6.51619),
(168, '7', 44, 1, 3.2581),
(169, 'pagi', 44, 1, 2.56495),
(170, 'sampai', 44, 1, 3.2581),
(171, '10', 44, 1, 3.2581),
(172, 'malam', 44, 1, 3.2581);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jawaban_tidak_ketemu`
--

CREATE TABLE `tb_jawaban_tidak_ketemu` (
  `jawaban_id` int(11) NOT NULL,
  `jawaban_query` varchar(255) NOT NULL,
  `jawaban_jawaban` varchar(255) NOT NULL,
  `jawaban_tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(5, 'berharga', 'harga'),
(6, 'dibeli', 'beli'),
(8, 'dicetak', 'cetak'),
(10, 'membeli', 'beli');

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
(29, '2020-06-08', 1, 2),
(32, '2020-06-20', 6, 1),
(33, '2020-06-20', 1, 1);

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
(17, 3.2581),
(18, 4.14659),
(19, 4.95926),
(20, 4.95926),
(21, 4.95926),
(22, 4.90167),
(23, 4.47103),
(24, 4.47103),
(25, 4.47103),
(26, 4.47103),
(27, 4.47103),
(28, 4.50307),
(29, 4.50307),
(30, 4.50307),
(31, 4.20651),
(32, 4.50307),
(33, 4.50307),
(34, 5.85336),
(35, 5.11755),
(36, 4.70671),
(37, 4.95926),
(38, 4.95926),
(39, 4.89269),
(40, 4.89269),
(41, 4.6772),
(44, 10.129);

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
-- Indexes for table `tb_jawaban_tidak_ketemu`
--
ALTER TABLE `tb_jawaban_tidak_ketemu`
  ADD PRIMARY KEY (`jawaban_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `tb_cetakan`
--
ALTER TABLE `tb_cetakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_index`
--
ALTER TABLE `tb_index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `tb_jawaban_tidak_ketemu`
--
ALTER TABLE `tb_jawaban_tidak_ketemu`
  MODIFY `jawaban_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_stem`
--
ALTER TABLE `tb_stem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_vektor`
--
ALTER TABLE `tb_vektor`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
