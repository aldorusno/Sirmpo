-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 06:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirmpo`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id_antrian` int(11) NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `tgl_antrian` date NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id_antrian`, `no_antrian`, `tgl_antrian`, `nama_lengkap`, `email`) VALUES
(104, 1, '2021-04-30', 'Aldo Martino', 'aldorusno@gmail.com'),
(105, 2, '2021-04-30', 'Wahyu Hidayat', 'administrasi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `berobat`
--

CREATE TABLE `berobat` (
  `id_berobat` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `tgl_berobat` date NOT NULL,
  `keluhan_pasien` varchar(256) NOT NULL,
  `hasil_diagnosa` varchar(256) NOT NULL,
  `penatalaksanaan` enum('Rawat Jalan','Rawat Inap','Rujuk','Lainnya') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berobat`
--

INSERT INTO `berobat` (`id_berobat`, `id_pasien`, `id_dokter`, `tgl_berobat`, `keluhan_pasien`, `hasil_diagnosa`, `penatalaksanaan`) VALUES
(6, 6, 6, '2021-01-11', 'Mata sakit dan merah', 'Iritasi pada mata', 'Rawat Jalan'),
(7, 5, 8, '2021-01-11', 'Pusing di kepala sebelah dan pilek', 'Migrain dan Flu', 'Rawat Jalan'),
(9, 6, 8, '2021-02-15', 'Pusing', 'Migrain', 'Rawat Jalan'),
(12, 10, 14, '2021-04-30', 'Mata Buram', 'Mata mengalami iritasi', 'Rawat Jalan');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `spesialis` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `no_telp` varchar(128) NOT NULL,
  `hari_kerja` varchar(128) NOT NULL,
  `nip` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `spesialis`, `jenis_kelamin`, `alamat`, `no_telp`, `hari_kerja`, `nip`) VALUES
(6, 'dr. Dani Januar Sp.M', 'LASIK', 'Laki-Laki', 'Purbalingga', '08111222333', 'Senin, Rabu, Jumat', '10001 10002 10003'),
(7, 'dr. Rani Sriayu Sp.M', 'Glaukoma', 'Perempuan', 'Purwokerto', '08111222444', 'Selasa, Kamis', '10002 10003 10004'),
(8, 'dr. Bareto Jordan Sp.M', 'Oftamologi Umum', 'Laki-Laki', 'Puwokerto', '08212211111', 'Sabtu, Minggu', '10003 10004 10005'),
(14, 'dr. Bareto Hidayat Sp.M', 'Katarak', 'Laki-Laki', 'Purbalingga', '08111222333', 'Kamis', '100 200 300 320');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `kode` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama`, `jumlah`, `keterangan`, `kode`) VALUES
(7, 'Ketotifen', 30, 'Butir', 'X001'),
(8, 'Neomycin', 5, 'Lembar', 'X002'),
(9, 'Eyevit', 13, 'Butir', 'X003'),
(10, 'Rohto 10ml', 8, 'Botol', 'X004'),
(13, 'Cendo Xitrol', 20, 'Butir', 'X005'),
(16, 'Vit. A', 15, 'Dus', 'X123');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(256) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `no_ktp` int(11) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `no_telp` varchar(128) NOT NULL,
  `no_rm` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `jenis_kelamin`, `tanggal`, `no_ktp`, `alamat`, `no_telp`, `no_rm`) VALUES
(4, 'Maman Sudarman', 'Laki-laki', '2021-01-08', 102030405, 'Bogor', '0821212121', 'XA001'),
(5, 'Rey Audrey', 'Perempuan', '2021-01-10', 12312321, 'Purwokerto', '0811122233', 'XA002'),
(6, 'Nanda Harina', 'Perempuan', '2021-01-11', 10101010, 'Jambi', '0821010101', 'XA003'),
(10, 'Aldo Martino', 'Laki-laki', '2021-04-29', 1020304051, 'Bogor', '0821212121', 'XA004');

-- --------------------------------------------------------

--
-- Table structure for table `resep_obat`
--

CREATE TABLE `resep_obat` (
  `id_resep` int(11) NOT NULL,
  `id_berobat` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resep_obat`
--

INSERT INTO `resep_obat` (`id_resep`, `id_berobat`, `id_obat`) VALUES
(10, 7, 7),
(11, 7, 8),
(12, 6, 10),
(14, 9, 8),
(16, 9, 9),
(22, 12, 16),
(23, 12, 13),
(24, 12, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `no_ktp` varchar(128) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_created` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `no_ktp`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `email`, `password`, `date_created`, `is_active`, `role_id`) VALUES
(1, '0001', 'Admin ADMINISTRASI', 'Laki-laki', 'Purwokerto', 'administrasi@gmail.com', '$2y$10$f1X3.5C8nqxUlC4IZtRgWuXzIA3XSFws63AiTo.JFrKt7pPSRPy5S', 1600150671, 1, 1),
(2, '0002', 'Admin REKAM MEDIS', 'Laki-laki', 'Purbalingga', 'rekam_medis@gmail.com', '$2y$10$7sWSaJG8sv7C4MNU9BUUm.aSspLFAWzsn9v.d9LwgR6mrYwGB35oy', 1600151050, 1, 2),
(3, '0003', 'Pasien', 'Laki-Laki', 'Bogor', 'pasien@gmail.com', '$2y$10$2Xdjy3cQwI93pu1JAzwhzuCQqb1OSbvx1ZV33BwFlfzROkhigC686', 1600151210, 1, 3),
(22, '01020304051', 'Aldo Martino Armand', 'Laki-Laki', 'Purwokerto', 'aldorusno@gmail.com', '$2y$10$Jz8psbKgwzH8pqzhTSX9n.AuocFNHWP8XYbQYWYXUZ3ikIFr3c4x2', 1619678683, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Petugas Administrasi'),
(2, 'Petugas Rekam Medis'),
(3, 'Pasien');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(28, 'aldorusno@gmail.com', 's28nK9zMuKx46G5EgoGau4pCg5SK4Yg36Bt7RLlahJk=', 1619679155);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indexes for table `berobat`
--
ALTER TABLE `berobat`
  ADD PRIMARY KEY (`id_berobat`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `id_berobat` (`id_berobat`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `berobat`
--
ALTER TABLE `berobat`
  MODIFY `id_berobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `resep_obat`
--
ALTER TABLE `resep_obat`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berobat`
--
ALTER TABLE `berobat`
  ADD CONSTRAINT `berobat_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON UPDATE CASCADE,
  ADD CONSTRAINT `berobat_ibfk_2` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON UPDATE CASCADE;

--
-- Constraints for table `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD CONSTRAINT `resep_obat_ibfk_1` FOREIGN KEY (`id_berobat`) REFERENCES `berobat` (`id_berobat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `resep_obat_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
