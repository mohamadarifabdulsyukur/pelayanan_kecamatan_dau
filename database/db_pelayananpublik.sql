-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2023 at 04:40 PM
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
-- Database: `db_pelayananpublik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'KTP-el'),
(2, 'KK (Kartu Keluarga)'),
(3, 'KIA (Kartu Identitas Anak)'),
(4, 'Akta Perkawinan'),
(5, 'Akta Kelahiran'),
(6, 'Akta Kematian'),
(7, 'Surat Keterangan'),
(8, 'Kewarganegaraan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelayanan`
--

CREATE TABLE `tb_pelayanan` (
  `id_pelayanan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_pelayanan` datetime NOT NULL,
  `persyaratan` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelayanan`
--

INSERT INTO `tb_pelayanan` (`id_pelayanan`, `nama`, `id_kategori`, `tgl_pelayanan`, `persyaratan`, `status`, `keterangan`) VALUES
(3, 'Mega Aulia Septi', 2, '2023-07-31 00:00:00', 'Lengkap', 'Selesai', 'Sudah Diambil'),
(17, 'Farida Dwi Rahmawati', 8, '2023-07-31 00:00:00', 'Lengkap', 'Selesai', 'Belum Diambil'),
(21, 'Nurul Aulia Fitriani', 6, '2023-07-31 00:00:00', 'Tidak Lengkap', 'Belum Selesai', 'Belum Diambil'),
(22, 'Meli Febriyanti Putri', 3, '2023-07-31 00:00:00', 'Tidak Lengkap', 'Belum Selesai', 'Belum Diambil'),
(23, 'Gempur Angkara Lubis', 4, '2023-07-31 00:00:00', 'Lengkap', 'Selesai', 'Belum Diambil'),
(24, 'Ramadani Rahmat', 5, '2023-07-31 00:00:00', 'Lengkap', 'Selesai', 'Sudah Diambil');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `username`, `password`, `email`, `alamat`, `no_hp`) VALUES
(6, 'hhhhh', '12345', 'masyarakat@gmail.com', 'Jl. Sengkaling', '089987654312'),
(7, 'admin', 'admin', 'Admin@gmail.com', 'Jl. Sengkaling', '089987654312'),
(8, 'sdngff', '21232f297a57a5a743894a0e4a801fc3', 'ssss@mail.com', 'jl. akukamu', '089987654312'),
(9, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin@gmail.com', 'Jl. Sengkaling', '089987654312'),
(10, 'Syukur', '5bb2c5a0b679690aabd7ba025ef6e66c', 'masyarakat@gmail.com', 'jl. akukamu', '09876543212'),
(11, 'syukur', '$2y$10$e/FACS36e4WrboDKcCFmNOsWNUdMGJF.Hh/kd7wOlXZ9.PJa6TuUy', 'syukur@gmail.com', 'jalan jalan aja', '09876543212'),
(12, 'eko', '$2y$10$rwNch9THuun9eumHW4x/yuVxHlfZRP34UUoWpW4SEoVB.WnxM3jau', 'eko@gmail.com', 'jalanin aja yaaa', '09098909877'),
(13, 'Arif', '$2y$10$gdNZfHd6U3hjvpYPXXLUXew9jZ2xF760DMWjtIH3BciTt02B..2qq', 'arif@gmail.com', 'jalan yuk', '089976'),
(14, 'Administrator Pelayanan Publik', '$2y$10$bnSL.kfZSPNTzkgJJf6OWu1xEn/quL7f7G.vSXXBrEhPd8w95ESe6', 'Admin@gmail.com', 'Jl. Raya Sengkaling No.200, Sengkaling, Mulyoagung, Kec. Dau, Kabupaten Malang, Jawa Timur 65151', '089987666'),
(15, 'Admin Pelayanan', '$2y$10$2px83427rUHtza8Hnk0O1eLDkxFbD5Du6xlyDCivTkP2AwA4rQ0Re', 'admindau@gmail.com', 'Jl. Raya Sengkaling No.200, Sengkaling, Mulyoagung, Kec. Dau, Kabupaten Malang, Jawa Timur 65151', '098788999'),
(16, 'Meli Febri', '$2y$10$oyPz98Q3Wenw8vb4.BfLteU0uQfcdIh9egYWTj2TuCjkh2z1eDsF2', 'mellyfebri@gmail.com', 'Jl. Kenangan Indah', '085646168264');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_pelayanan`
--
ALTER TABLE `tb_pelayanan`
  ADD PRIMARY KEY (`id_pelayanan`),
  ADD KEY `tb_pelayanan_ibfk_1` (`id_kategori`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_pelayanan`
--
ALTER TABLE `tb_pelayanan`
  MODIFY `id_pelayanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pelayanan`
--
ALTER TABLE `tb_pelayanan`
  ADD CONSTRAINT `tb_pelayanan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
