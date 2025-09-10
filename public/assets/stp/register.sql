-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 03:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `nama_pengusul` varchar(50) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `no_telepon` int(11) NOT NULL,
  `alamat_email` varchar(100) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `jenis_hki` text NOT NULL,
  `submit_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`nama_pengusul`, `nama_produk`, `tanggal_daftar`, `no_telepon`, `alamat_email`, `alamat`, `jenis_hki`, `submit_time`) VALUES
('n', 'a', '2024-12-20', 2147483647, 'djahdjkhj@gmail.com', 'bnsdbjdsakjs', 'Paten', '12:44:03am'),
('n', 'a', '0000-00-00', 2147483647, 'djahdjkhj@gmail.com', 'bnsdbjdsakjs', 'Paten', '12:50:32am'),
('ha', 'ga', '2024-10-18', 2147483647, 'ba@gmail.com', 'bali', 'Paten', '11:17:01am'),
('ga', 'jha', '2024-10-25', 2147483647, 'ga@gmail.com', 'jakarta', 'Paten', ''),
('ga', 'ga', '2024-10-26', 2147483647, 'ga@gmail.com', 'gah', 'Paten', '10:20:17pm'),
('ca', 'ca', '2024-10-26', 2147483647, 'ca@gmail.com', 'bali', 'Paten', '2024-10-26 22:30:16'),
('ca', 'ca', '2024-10-26', 2147483647, 'ca@gmail.com', 'bali', 'Paten', '2024-10-26 23:08:29'),
('ca', 'ga', '2024-10-26', 2147483647, 'ha@gmail.com', 'jakarta', 'Paten', '2024-10-26 23:08:59'),
('ca', 'ca', '2024-10-26', 2147483647, 'ca@gmail.com', 'jakarta', 'Paten', '2024-10-26 23:37:52'),
('caca', 'cas', '2024-10-26', 2147483647, 'ca@gmail.com', 'jkt', 'Paten', '2024-10-26 23:38:52'),
('caca', 'buku', '2024-10-26', 2147483647, 'caa@gmail.com', 'jakarta', 'Hak Cipta', '2024-10-27 00:23:35'),
('last', 'last', '2024-10-19', 2147483647, 'lasr@gmail.com', 'jakarta', 'Paten', '2024-10-27 00:42:42'),
('c', 'c', '2024-10-28', 2147483647, 'lasr@gmail.com', 'jakarta', 'Paten', '2024-10-28 10:11:29'),
('c', 'c', '2024-10-28', 3535688, 'j@gamil.com', 'j', 'Paten', '2024-10-28 10:32:14'),
('c', 'c', '2024-10-28', 2147483647, 'c@gmail.com', 'b', 'Paten', '2024-10-28 14:16:46'),
('sa', 'sasa', '2024-10-28', 2147483647, 'sa@gmail.com', 'bali', 'Paten', '2024-10-28 15:03:27'),
('sa', 'saa', '2024-10-28', 2147483647, 'saa@gmail.com', 'jakartaa', 'Paten', '2024-10-28 15:04:08'),
('c', 'c', '2024-12-02', 2131456879, 'c@gmail.com', 'n', 'Paten', '2024-12-03 21:03:38'),
('y', 'h', '2024-12-02', 285789681, 'v@gmail.com', 'n', 'Paten', '2024-12-03 21:52:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD UNIQUE KEY `nama_pengusul` (`nama_pengusul`,`nama_produk`,`tanggal_daftar`,`no_telepon`,`alamat_email`,`alamat`,`jenis_hki`,`submit_time`) USING HASH,
  ADD UNIQUE KEY `daftar` (`submit_time`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
