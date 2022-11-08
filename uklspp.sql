-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2022 at 05:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uklspp`
--

-- --------------------------------------------------------

--
-- Table structure for table `angkatan`
--

CREATE TABLE `angkatan` (
  `id_angkatan` int(11) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `tahun_angkatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `angkatan`
--

INSERT INTO `angkatan` (`id_angkatan`, `angkatan`, `tahun_angkatan`) VALUES
(1, 30, 2021),
(15, 31, 2022);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `jurusan` varchar(5) NOT NULL,
  `id_angkatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `jurusan`, `id_angkatan`) VALUES
(2, 'XI RPL 1', 'RPL', 1),
(4, 'XI RPL 2', 'RPL', 1),
(8, 'XI RPL 3', 'RPL', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nisn` char(10) NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bulan_spp` int(2) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `tahun_spp` int(4) NOT NULL,
  `foto_bukti` varchar(255) NOT NULL,
  `keterangan` enum('lunas','belum lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `jatuh_tempo`, `tgl_bayar`, `bulan_spp`, `id_spp`, `tahun_spp`, `foto_bukti`, `keterangan`) VALUES
(30, 0, '111', '2022-07-10', '2022-10-21', 7, 2, 2022, 'Screenshot (8).png', 'lunas'),
(31, 1, '111', '2022-08-10', '2022-10-21', 8, 2, 2022, 'Jajar Genjang_Naufal Fakhri Risnawa_Sertifikat Vaksinasi.jpeg', 'lunas'),
(32, 1, '111', '2022-09-10', '2022-10-24', 9, 2, 2022, 'airmineral.jpg', 'lunas'),
(33, 1, '111', '2022-10-10', '2022-10-24', 10, 2, 2022, '', 'lunas'),
(34, 1, '111', '2022-11-10', '2022-10-24', 11, 2, 2022, '', 'lunas'),
(35, 1, '111', '2022-12-10', '2022-10-24', 12, 2, 2022, '', 'lunas'),
(36, 0, '111', '2023-01-10', '0000-00-00', 1, 2, 2023, '', 'belum lunas'),
(37, 0, '111', '2023-02-10', '0000-00-00', 2, 2, 2023, '', 'belum lunas'),
(38, 0, '111', '2023-03-10', '0000-00-00', 3, 2, 2023, '', 'belum lunas'),
(39, 0, '111', '2023-04-10', '0000-00-00', 4, 2, 2023, '', 'belum lunas'),
(40, 0, '111', '2023-05-10', '0000-00-00', 5, 2, 2023, '', 'belum lunas'),
(41, 0, '111', '2023-06-10', '0000-00-00', 6, 2, 2023, '', 'belum lunas'),
(42, 6, '222', '2022-07-10', '2022-10-21', 7, 2, 2022, 'Logo Moklet Warna Atas Bawah.png', 'lunas'),
(43, 6, '222', '2022-08-10', '2022-10-21', 8, 2, 2022, 'DSCF4647.JPG', 'lunas'),
(44, 1, '222', '2022-09-10', '2022-10-24', 9, 2, 2022, '', 'lunas'),
(45, 1, '222', '2022-10-10', '2022-10-24', 10, 2, 2022, '', 'lunas'),
(46, 1, '222', '2022-11-10', '2022-10-24', 11, 2, 2022, '', 'lunas'),
(47, 1, '222', '2022-12-10', '2022-10-24', 12, 2, 2022, '', 'lunas'),
(48, 0, '222', '2023-01-10', '0000-00-00', 1, 2, 2023, '', 'belum lunas'),
(49, 0, '222', '2023-02-10', '0000-00-00', 2, 2, 2023, '', 'belum lunas'),
(50, 0, '222', '2023-03-10', '0000-00-00', 3, 2, 2023, '', 'belum lunas'),
(51, 0, '222', '2023-04-10', '0000-00-00', 4, 2, 2023, '', 'belum lunas'),
(52, 0, '222', '2023-05-10', '0000-00-00', 5, 2, 2023, '', 'belum lunas'),
(53, 0, '222', '2023-06-10', '0000-00-00', 6, 2, 2023, '', 'belum lunas'),
(54, 1, '333', '2022-07-10', '2022-10-21', 7, 2, 2022, '9.png', 'lunas'),
(55, 6, '333', '2022-08-10', '2022-10-24', 8, 2, 2022, 'beras.jpg', 'lunas'),
(56, 1, '333', '2022-09-10', '2022-10-24', 9, 2, 2022, 'airmineral.jpg', 'lunas'),
(57, 1, '333', '2022-10-10', '2022-10-24', 10, 2, 2022, 'marker oryza.jpg', 'lunas'),
(58, 1, '333', '2022-11-10', '2022-10-24', 11, 2, 2022, '', 'lunas'),
(59, 0, '333', '2022-12-10', '0000-00-00', 12, 2, 2022, '', 'belum lunas'),
(60, 0, '333', '2023-01-10', '0000-00-00', 1, 2, 2023, '', 'belum lunas'),
(61, 0, '333', '2023-02-10', '0000-00-00', 2, 2, 2023, '', 'belum lunas'),
(62, 0, '333', '2023-03-10', '0000-00-00', 3, 2, 2023, '', 'belum lunas'),
(63, 0, '333', '2023-04-10', '0000-00-00', 4, 2, 2023, '', 'belum lunas'),
(64, 0, '333', '2023-05-10', '0000-00-00', 5, 2, 2023, '', 'belum lunas'),
(65, 0, '333', '2023-06-10', '0000-00-00', 6, 2, 2023, '', 'belum lunas');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `level` enum('Petugas','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'ahmad', '0cc175b9c0f1b6a831c399e269772661', 'Ahmad', 'Admin'),
(6, 'farrel', '0cc175b9c0f1b6a831c399e269772661', 'Farrel', 'Petugas'),
(7, 'fikri', '0cc175b9c0f1b6a831c399e269772661', 'Fikri', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` char(10) NOT NULL,
  `nis` char(8) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `id` int(100) NOT NULL,
  `no_tlp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `id`, `no_tlp`) VALUES
('111', '2', 'Naufal Fakhri Risnawa', 2, 'Malang', 2131219868, '1234'),
('222', '3', 'Arlando', 4, 'Malang', 307972368, '3214'),
('333', '4', 'Zidane', 8, 'Malang', 381374631, '5412');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `id_angkatan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `id_angkatan`, `tahun`, `nominal`) VALUES
(2, 1, 2022, 600000),
(5, 15, 2023, 600000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angkatan`
--
ALTER TABLE `angkatan`
  ADD PRIMARY KEY (`id_angkatan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angkatan`
--
ALTER TABLE `angkatan`
  MODIFY `id_angkatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
