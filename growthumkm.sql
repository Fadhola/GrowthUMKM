-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 07:34 AM
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
-- Database: `growthumkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `telp_admin` varchar(12) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `pass_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `telp_admin`, `username_admin`, `pass_admin`) VALUES
(1, 'ibnu arbianto ', '083123131', 'arbiantoadmin', 'arbiantoadmin'),
(2, 'superadmin', '45', 'superadmin', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gaji`
--

CREATE TABLE `tb_gaji` (
  `id_gaji` int(11) NOT NULL,
  `periode` varchar(20) NOT NULL,
  `tgl_gaji` date NOT NULL,
  `nominal_gaji` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_gaji`
--

INSERT INTO `tb_gaji` (`id_gaji`, `periode`, `tgl_gaji`, `nominal_gaji`, `id_user`, `id_karyawan`) VALUES
(2, 'Januari', '2023-12-06', 1700000, 31, 7),
(3, 'November', '2023-12-06', 1500000, 31, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `telp_karyawan` varchar(25) NOT NULL,
  `nik_karyawan` varchar(50) NOT NULL,
  `tgl_kerja` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `nama_karyawan`, `role`, `telp_karyawan`, `nik_karyawan`, `tgl_kerja`, `id_user`) VALUES
(3, 'Andri Putra', 'staff', '56565', '28494420526267999163450896', '2023-11-19', 12),
(4, 'Gangsa Saputra', 'staff', '0898214981942', '78322045959808309464801023', '2023-11-20', 12),
(5, 'Umaya Hutagalung', 'Kepala Staff', '08967455666', '13800583531873164773418647', '2023-11-21', 12),
(7, 'Assandi Putra', 'Staff', '0831287391873', '1278412748178', '2023-11-29', 31),
(8, 'Danendra', 'staff', '0834657574', '721486814647', '2023-12-06', 31);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Pengeluaran'),
(2, 'Pemasukan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keuangan`
--

CREATE TABLE `tb_keuangan` (
  `id_keuangan` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `tanggal` date NOT NULL,
  `nominal` varchar(20) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_keuangan`
--

INSERT INTO `tb_keuangan` (`id_keuangan`, `catatan`, `tanggal`, `nominal`, `id_kategori`, `id_user`) VALUES
(11, 'beli bahan ', '2023-11-28', '25000', 1, 12),
(12, 'beli bahan 2', '2023-11-28', '75000', 1, 12),
(13, 'hasil jual shift 1', '2023-11-28', '55000', 2, 12),
(14, 'hasil jual shift 2', '2023-11-28', '105000', 2, 12),
(15, 'beli bahan 3', '2023-11-28', '150000', 1, 12),
(17, 'Hasil Jual Shift 1', '2023-11-29', '30000', 2, 31),
(18, 'Beli Bahan 2', '2023-11-29', '50000', 1, 31),
(19, 'Hasil Jual Shift 1', '2023-11-29', '150000', 2, 31),
(20, 'Beli Bahan 1', '2023-11-29', '50000', 1, 31),
(21, 'r', '2023-11-28', '50000', 2, 31),
(22, 'r', '2023-11-28', '34000', 1, 31);

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(11) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `waktu`, `harga`) VALUES
(1, 'default (tidak aktif)', 0),
(2, '1 bulan', 10000),
(11, '6 bulan', 55000),
(12, '1 tahun', 110000),
(13, '1.5 tahun', 50000),
(16, '2 tahun', 195000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `nominal_transaksi` int(11) NOT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `tgl_validasi` date DEFAULT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_user`, `id_paket`, `nominal_transaksi`, `tgl_bayar`, `tgl_validasi`, `id_admin`) VALUES
(1, 5, 2, 12500, '2023-11-13', '2023-11-14', 1),
(3, 5, 13, 57500, '2023-11-13', '0000-00-00', 1),
(4, 6, 12, 12500, '2023-11-14', '0000-00-00', 1),
(6, 7, 12, 23000, '2023-11-15', '2023-11-16', 1),
(9, 9, 2, 102500, '2023-11-14', '2023-11-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `namatoko_user` varchar(50) DEFAULT NULL,
  `alamat_user` varchar(100) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `telp_user` varchar(12) DEFAULT NULL,
  `username_user` varchar(25) NOT NULL,
  `pass_user` varchar(255) NOT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `tgl_awal` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `id_paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `namatoko_user`, `alamat_user`, `email`, `telp_user`, `username_user`, `pass_user`, `tgl_daftar`, `tgl_awal`, `tgl_akhir`, `id_paket`) VALUES
(2, 'test', NULL, 'test', 'test@gmail.com', '2555446', 'test123', 'test123', '2023-11-12', '0000-00-00', '0000-00-00', 1),
(5, 'dummy 1', NULL, 'dummy 1', 'dummy1@gmail.com', '2313', 'dummy 12', 'dummy 1', '2023-11-13', '0000-00-00', '0000-00-00', 1),
(6, 'user', NULL, 'saaas', 'userme@gmail.com', '2555446', 'user', 'user', '2023-11-15', '0000-00-00', '0000-00-00', 12),
(7, 'kul', NULL, 'kul', 'kul@gmail.com', '124134', 'kul', 'kul', '2023-11-16', '0000-00-00', '0000-00-00', 11),
(9, 'ac', NULL, 'ac', 'ac@gmail.com', '676', 'ac123', 'ac123', '2023-11-15', '0000-00-00', '0000-00-00', 1),
(12, 'Cengkir Wahna', 'UMKM KITA TAHU', '', 'cengkir@gmail.com', '09875631231', 'cengkir123', '$2y$10$zLnM0xtJPtMM5MI/CY8AQOioCUa8lGXlZhulHj5igITFr0xgVY96i', '2023-11-20', '2023-11-20', '2023-11-30', 2),
(15, 'Daru Rajasa', NULL, NULL, 'waluyo69@rajata.go.id', NULL, 'daruraasa', '$2y$10$zGbtcGXqWZXC0DaOgBIpuOxdUbk52xjLks6N0iTkZ0c0D2HS137vq', '2023-11-21', NULL, NULL, 1),
(16, 'Mahfud Habibi', NULL, NULL, 'mahfudbi@gmail.com', NULL, 'mahfudbi', '$2y$10$qk8hCWWiwqS0odIqr.dbjesNq6Ej/ixvGnTYgTLg/K59nIH.LNgQK', '2023-11-21', NULL, NULL, 1),
(18, 'Prabawa Halim', NULL, NULL, 'prabawim@yahoo.co.id', NULL, 'prabawim', '$2y$10$n1eakSERepMIYVV5gbxMWO373Cmjs9ksveq7enmWhdzM.VMQFzD8a', '2023-11-21', NULL, NULL, 1),
(22, 'Gilang Dongoran', NULL, '', 'gilanran@gmail.com', '', 'gilanran', '$2y$10$3.1flyMlZexr.PllkRRfYOMgL2IHrPkrFwEPbCfDOjdS3jennvh1G', '2023-11-21', '2023-11-21', '2023-11-30', 2),
(31, 'Ibnu Arbianto Pratama', 'JUARA PECEL', NULL, 'ibnuar@gmail.com', '028130130183', 'ibnuar', '$2y$10$8ZrDT4rfd95Wuy47mKRWaundBNSehHZnu7uPeRsZHLnfYUw7.teg2', '2023-11-29', '2023-11-29', '2023-12-29', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD PRIMARY KEY (`id_gaji`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD UNIQUE KEY `nik_karyawan` (`nik_karyawan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  ADD PRIMARY KEY (`id_keuangan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_paket` (`id_paket`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_paket` (`id_paket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_gaji`
--
ALTER TABLE `tb_gaji`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  MODIFY `id_keuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD CONSTRAINT `tb_gaji_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_gaji_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `tb_karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD CONSTRAINT `tb_karyawan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  ADD CONSTRAINT `tb_keuangan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_keuangan_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_transaksi_ibfk_3` FOREIGN KEY (`id_admin`) REFERENCES `tb_admin` (`id_admin`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
