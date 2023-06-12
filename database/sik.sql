-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 05:11 PM
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
  `posisi` varchar(200) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`id_karyawan`, `nik`, `nama`, `umur`, `dept`, `posisi`, `alamat`, `tanggal_masuk`) VALUES
(49, 20221212, 'Satya', 22, 'GA', 'Supervisor', 'Slamet', '2023-04-15'),
(54, 23213221, 'sasa', 22, 'IT', 'Supervisor', 'sds', '2023-06-04'),
(60, 1212121214, 'Fajar', 22, 'Accounting', 'Manajer', 'Daci', '2023-06-07'),
(62, 6666666, 'sano', 22, 'IT', 'Supervisor', 'Gajah', '2023-02-26'),
(63, 88888888, 'dani', 22, 'IT', 'Supervisor', 'Gajah', '2023-01-29'),
(79, 2147483647, 'Sari', 21, 'Accounting', 'Manajer', 'baris', '2023-05-14'),
(80, 12365, 'Zeze', 23, 'Accounting', 'Manajer', 'Slamet', '2023-05-14'),
(90, 5254546, 'Babu', 23, 'IT', 'Supervisor', 'Gajah', '2023-03-15'),
(91, 5454639, 'Caca', 22, 'IT', 'Supervisor', 'Gajah', '2023-04-05'),
(92, 1236549, 'Gisel', 22, 'GA', 'Supervisor', 'baris', '2023-02-08'),
(93, 20232563, 'Dandy', 52, 'Accounting', 'Manajer', 'baris', '2023-04-12'),
(94, 20201363, 'stria', 25, 'Accounting', 'Manajer', 'baris', '2023-04-05'),
(95, 7845123, 'David Ca', 24, 'IT', 'Manajer', 'Slamet', '2023-03-29'),
(96, 6366532, 'Fada', 25, 'IT', 'Supervisor', 'Gajah', '2023-02-27');

-- --------------------------------------------------------

--
-- Table structure for table `gaji_karyawan`
--

CREATE TABLE `gaji_karyawan` (
  `id_karyawan` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gaji_pokok` int(65) NOT NULL,
  `tunjangan` int(65) NOT NULL,
  `total_gaji` int(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gaji_pokok`
--

CREATE TABLE `gaji_pokok` (
  `id_gaji` int(25) NOT NULL,
  `gaji_pokok` int(25) NOT NULL,
  `jabatan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  ADD PRIMARY KEY (`id_karyawan`),
  ADD UNIQUE KEY `NIK` (`nik`);

--
-- Indexes for table `gaji_karyawan`
--
ALTER TABLE `gaji_karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD UNIQUE KEY `gaji_pokok` (`gaji_pokok`);

--
-- Indexes for table `gaji_pokok`
--
ALTER TABLE `gaji_pokok`
  ADD PRIMARY KEY (`id_gaji`),
  ADD UNIQUE KEY `gaji_pokok` (`gaji_pokok`);

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
  MODIFY `id_karyawan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
