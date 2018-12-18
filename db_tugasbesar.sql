-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 06:24 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tugasbesar`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_data_destana`
--

CREATE TABLE `m_data_destana` (
  `id_destana` int(11) NOT NULL,
  `nama_destana` varchar(100) NOT NULL,
  `nama_kepala_destana` varchar(100) NOT NULL,
  `jenis_destana` varchar(100) NOT NULL,
  `jumlah_penduduk` int(11) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kode_pos` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_data_destana`
--

INSERT INTO `m_data_destana` (`id_destana`, `nama_destana`, `nama_kepala_destana`, `jenis_destana`, `jumlah_penduduk`, `alamat`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `kode_pos`) VALUES
(7, 'Kimpulang', '', 'Belum Dikategorikan', 341, 'Jalan Kaliurang KM 14,5', 'Yogyakarta', 'Sleman', 'Sleman', '', 23123);

-- --------------------------------------------------------

--
-- Table structure for table `m_jawaban`
--

CREATE TABLE `m_jawaban` (
  `ya` int(11) NOT NULL,
  `tidak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_laporan`
--

CREATE TABLE `m_laporan` (
  `id_laporan` int(11) NOT NULL,
  `tanggal_laporan` date NOT NULL,
  `nama_fasilitator` varchar(100) NOT NULL,
  `nama_desa` varchar(100) NOT NULL,
  `jumlah_ya` int(11) NOT NULL,
  `jumlah_tidak` int(11) NOT NULL,
  `ya1` int(11) DEFAULT NULL,
  `ya2` int(11) NOT NULL,
  `ya3` int(11) NOT NULL,
  `ya4` int(11) NOT NULL,
  `ya5` int(11) NOT NULL,
  `ya6` int(11) NOT NULL,
  `ya7` int(11) NOT NULL,
  `tidak1` int(11) NOT NULL,
  `tidak2` int(11) NOT NULL,
  `tidak3` int(11) NOT NULL,
  `tidak4` int(11) NOT NULL,
  `tidak5` int(11) NOT NULL,
  `tidak6` int(11) NOT NULL,
  `tidak7` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_laporan`
--

INSERT INTO `m_laporan` (`id_laporan`, `tanggal_laporan`, `nama_fasilitator`, `nama_desa`, `jumlah_ya`, `jumlah_tidak`, `ya1`, `ya2`, `ya3`, `ya4`, `ya5`, `ya6`, `ya7`, `tidak1`, `tidak2`, `tidak3`, `tidak4`, `tidak5`, `tidak6`, `tidak7`) VALUES
(15, '2018-12-18', 'Patimura', 'Kimpulan', 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_not_users`
--

CREATE TABLE `m_not_users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomor_hp` int(12) NOT NULL,
  `peran` enum('fasilitator','bpbd') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_not_users`
--

INSERT INTO `m_not_users` (`id_user`, `nama`, `jenis_kelamin`, `email`, `username`, `password`, `alamat`, `nomor_hp`, `peran`) VALUES
(8, 'Suta Rahmadhani', 'Pria', '2018-12-04', 'suta', 'suta', 'Banjarmasin', 2147483647, 'fasilitator');

-- --------------------------------------------------------

--
-- Table structure for table `m_users`
--

CREATE TABLE `m_users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `usia` int(100) NOT NULL,
  `jenjang_pendidikan` varchar(100) NOT NULL,
  `alasan` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kode_pos` int(20) NOT NULL,
  `nomor_hp` int(12) NOT NULL,
  `peran` enum('fasilitator','bnpb') NOT NULL,
  `status` enum('nonaktif','aktif') NOT NULL,
  `kon_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_users`
--

INSERT INTO `m_users` (`id_user`, `nama`, `jenis_kelamin`, `usia`, `jenjang_pendidikan`, `alasan`, `email`, `password`, `alamat`, `kode_pos`, `nomor_hp`, `peran`, `status`, `kon_id`) VALUES
(1, 'BNPB Pusat', '', 0, '', '', 'bnpb@yahoo.com', '320496dba70303f2e3a1f7ee47e20f28', 'Jakarta', 0, 2712390, 'bnpb', 'aktif', 0),
(2, 'Muhammad Sauqi Khatami', '', 0, '', '', '17523142@students.uii.ac.id', 'f33f9d002da76eac709a6a81fe96aff5', '', 0, 0, '', 'aktif', 1),
(4, 'Rara Erlon', 'Pria', 0, '', '', 'hahaha@gmail.com', 'f33f9d002da76eac709a6a81fe96aff5', 'Ahmad Yani', 0, 2147483647, 'fasilitator', 'aktif', 2),
(5, 'Patimura', '', 0, '', '', 'patimura@gmail.com', 'b4162dc8e2b85460c47ebb1c315c46df', 'Maluku', 0, 147, 'fasilitator', 'aktif', 0),
(6, 'Rara Erlin', 'Pria', 0, '', '', '17523143@students.uii.ac.id', 'dcc2f5c0b7286413585f7ff7fa9f69e3', 'Banjarmasin', 0, 2147483647, 'fasilitator', 'aktif', 3),
(12, 'state', 'laki', 9, 'smp', 'qqqqqqqqqqq', 'esma@gmail.com', '9ed39e2ea931586b6a985a6942ef573e', 'Banjarbaru', 123123, 2193013, '', 'aktif', 0),
(16, 'asdasde', 'laki', 230, 'sd', 'Seru', '17523132@students.uii.ac.id', '7815696ecbf1c96e6894b779456d330e', 'Jakarta', 1111, 90123809, 'fasilitator', 'nonaktif', 0),
(17, 'Suta Rahmadhani', 'laki', 15, 'S1', 'ajikdako', 'sauqikhatami084@gmail.com', 'dae0b2d1d7d345571781a5c0b4546959', 'Jalan Ahmad Yani', 123123, 1231234213, 'fasilitator', 'nonaktif', 0),
(18, 'Deddy Cobuser', 'laki', 99, 'sd', 'loh\r\n', 'deddy@gmail.com', '0c09376372e339d44d3b5dadb56df2d5', 'Sumatra', 70341, 2147483647, 'fasilitator', 'nonaktif', 0),
(19, 'Harry Potter', 'laki', 25, 'S3', 'SSeru', 'hari@gmail.com', 'a9bcf1e4d7b95a22e2975c812d938889', 'Jawa', 123456, 2147483647, 'fasilitator', 'nonaktif', 0),
(20, 'Muhammad Rozi', 'laki', 15, 'smp', 'yipie\r\n', 'rozi@gmail.com', '6b77cfa7c0de00cd481b82dc5c5d99fe', 'Jawa', 70523, 2147483647, 'fasilitator', 'aktif', 0),
(25, 'Suta Rahmadhani Ahmad', 'laki', 21, 'sma', 'qf', 'ahmad@yahoo.com', '61243c7b9a4022cb3f8dc3106767ed12', 'Banjarmasin', 70523, 2193013, 'fasilitator', '', 0),
(26, 'Rizqi Az Zayyad', 'laki', 33, 'S2', 'Ya', 'rizkie@gmail.com', '1829d0dd8831dcd96a9219ecef50a0cd', 'Banjarbaru', 123123, 2147483647, 'fasilitator', '', 0),
(27, 'Riskayanti', 'perempuan', 12, 'S1', 'hee', 'riska@gmail.com', 'fb059ad1c514876b15b3ec40df1acdac', 'Banjarbaru', 123123, 2147483647, 'fasilitator', 'aktif', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_data_destana`
--
ALTER TABLE `m_data_destana`
  ADD PRIMARY KEY (`id_destana`);

--
-- Indexes for table `m_laporan`
--
ALTER TABLE `m_laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `m_not_users`
--
ALTER TABLE `m_not_users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `nomor_hp` (`nomor_hp`);

--
-- Indexes for table `m_users`
--
ALTER TABLE `m_users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `nomor_hp` (`nomor_hp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_data_destana`
--
ALTER TABLE `m_data_destana`
  MODIFY `id_destana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `m_laporan`
--
ALTER TABLE `m_laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `m_not_users`
--
ALTER TABLE `m_not_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `m_users`
--
ALTER TABLE `m_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
