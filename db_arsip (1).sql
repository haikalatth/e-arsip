-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 04:54 AM
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
-- Database: `db_arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_disposisi`
--

CREATE TABLE `tb_disposisi` (
  `id_disposisi` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `id_pengirim` varchar(50) NOT NULL,
  `id_penerima` varchar(50) NOT NULL,
  `pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_disposisi`
--

INSERT INTO `tb_disposisi` (`id_disposisi`, `id_surat`, `id_pengirim`, `id_penerima`, `pesan`) VALUES
(3, 9, 'alx', 'int', 'asssasa'),
(9, 9, 'alx', 'int', 'Ini coba saja');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'ADMIN'),
(2, 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_peminjaman`
--

INSERT INTO `tb_peminjaman` (`id_peminjaman`, `id_surat`, `tgl_pinjam`, `tgl_kembali`, `username`, `status`) VALUES
(2, 9, '2021-11-04', '2021-11-11', 'alx', 'dikembalikan<br>2021-11-04 ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat`
--

CREATE TABLE `tb_surat` (
  `id_surat` int(11) NOT NULL,
  `tgl_arsip` date NOT NULL,
  `ket` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat`
--

INSERT INTO `tb_surat` (`id_surat`, `tgl_arsip`, `ket`, `no_surat`, `perihal`, `tanggal`, `asal`, `file`) VALUES
(9, '2021-10-01', 1, 'XXX9812983X', 'COBA', '2021-10-31', 'SUPARDI', '1983790292_Bisnis Proses PT Ari Jaya Bahagia.pdf'),
(15, '2021-10-01', 2, 'XXX9812983XA', 'assa', '2021-11-06', 'ARI JAYA TOUR', '1480528632_basdat1.pdf'),
(18, '2021-11-05', 1, 'asass2121sa', 'iasdojsioa', '2021-11-05', 'ARI JAYA TOUR', '408908276_Sistem Pemesanan Paket Wisata Pada PT. ARI JAYA BAHAGIA.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `jabatan`, `nama`, `password`) VALUES
('alx', 1, 'ALEX SUPRAPTO', 'password'),
('haikal', 1, 'MUHAMMAD HAIKAL ATTHORIQ', 'Password'),
('int', 2, 'INTANA PERMATA', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_disposisi`
--
ALTER TABLE `tb_disposisi`
  ADD PRIMARY KEY (`id_disposisi`),
  ADD KEY `id_surat` (`id_surat`),
  ADD KEY `id_penerima` (`id_penerima`),
  ADD KEY `id_pengirim` (`id_pengirim`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_surat` (`id_surat`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `jabatan` (`jabatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_disposisi`
--
ALTER TABLE `tb_disposisi`
  MODIFY `id_disposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_disposisi`
--
ALTER TABLE `tb_disposisi`
  ADD CONSTRAINT `tb_disposisi_ibfk_1` FOREIGN KEY (`id_surat`) REFERENCES `tb_surat` (`id_surat`),
  ADD CONSTRAINT `tb_disposisi_ibfk_2` FOREIGN KEY (`id_penerima`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `tb_disposisi_ibfk_3` FOREIGN KEY (`id_pengirim`) REFERENCES `user` (`username`);

--
-- Constraints for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD CONSTRAINT `tb_peminjaman_ibfk_1` FOREIGN KEY (`id_surat`) REFERENCES `tb_surat` (`id_surat`),
  ADD CONSTRAINT `tb_peminjaman_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`jabatan`) REFERENCES `tb_jabatan` (`id_jabatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
