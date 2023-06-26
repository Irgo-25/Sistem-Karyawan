-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 06:20 PM
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
-- Database: `sik`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `id_karyawan` int(20) NOT NULL,
  `nik` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `umur` int(11) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`id_karyawan`, `nik`, `nama`, `umur`, `dept`, `jabatan`, `alamat`, `tanggal_masuk`) VALUES
(101, 46433213, 'Fafa', 22, 'IT', 'Supervisor', 'Giri', '2023-04-07'),
(102, 5455663, 'Gaha', 23, 'HRD', 'Staff', 'Pekunden', '2023-03-03'),
(103, 2598563, 'Irgo Satya Gemiwang', 22, 'IT', 'Staff', 'Pekunden', '2023-01-30'),
(104, 56525323, 'Gaya', 22, 'Accounting', 'Manajer', 'Slamet', '2023-03-13'),
(105, 7865633, 'Lana', 22, 'Accounting', 'Manajer', 'baris', '2023-02-27');

-- --------------------------------------------------------

--
-- Table structure for table `gaji_karyawan`
--

CREATE TABLE `gaji_karyawan` (
  `id_karyawan` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `id_gapok` int(25) NOT NULL,
  `tunjangan` int(65) DEFAULT NULL,
  `total_gaji` int(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gaji_pokok`
--

CREATE TABLE `gaji_pokok` (
  `id_gapok` int(25) NOT NULL,
  `gaji_utama` int(25) NOT NULL,
  `jabatan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gaji_pokok`
--

INSERT INTO `gaji_pokok` (`id_gapok`, `gaji_utama`, `jabatan`) VALUES
(34, 7000000, 'Staff'),
(38, 7800000, 'Supervisor'),
(39, 10000000, 'Manajer');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'Irgo', '$2y$10$pummWqNODhw1YmawdgB/hugGVzMtueUbplB1THWEAOMilcMnlzc4W'),
(4, 'Ragil', '$2y$10$SzWTE.nO.hHq994nXPLrjuQPu3oSmtg8jP9M3qo6bv28h8z/MKNUe'),
(7, '', '$2y$10$Hvh4DGWSr5cvZ8/iXIdGnuwlaatwAYOe5WXD6MHJLhnzwbCNX59HG'),
(8, 'gudang', '$2y$10$pce1TkIYhMJzl.eDb4.G9ejeELFCLacvJJLpJ/.f5PIQ576ty89D.'),
(9, 'admin', '$2y$10$EL0iZRXdS8uVFvrfl8Z99eMsSLsEIkp7DZ7QVv5wAFhcFJV./0G/G'),
(10, 'coba', '$2y$10$.5uF3EG/Vhb0FpmLV5qvvuv8tn7Fs35uV4SRx7fCwrEtWM5gF4dza'),
(11, 'ika', '$2y$10$OFFkVaab7G0J46xBtgtXmOEYl9yucQmLesZDUawumq7lllB2NlE4y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `gaji_karyawan`
--
ALTER TABLE `gaji_karyawan`
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_gapok` (`id_gapok`);

--
-- Indexes for table `gaji_pokok`
--
ALTER TABLE `gaji_pokok`
  ADD PRIMARY KEY (`id_gapok`),
  ADD UNIQUE KEY `jabatan` (`jabatan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  MODIFY `id_karyawan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `gaji_pokok`
--
ALTER TABLE `gaji_pokok`
  MODIFY `id_gapok` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gaji_karyawan`
--
ALTER TABLE `gaji_karyawan`
  ADD CONSTRAINT `gaji_karyawan_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `data_karyawan` (`id_karyawan`),
  ADD CONSTRAINT `gaji_karyawan_ibfk_2` FOREIGN KEY (`id_gapok`) REFERENCES `gaji_pokok` (`id_gapok`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
