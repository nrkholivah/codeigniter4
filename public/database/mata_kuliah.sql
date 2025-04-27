-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2025 at 05:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id` int(10) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `link_cr` varchar(255) NOT NULL,
  `link_wa` varchar(50) NOT NULL,
  `informasi_dosen` varchar(50) NOT NULL,
  `hasil_pembelajaran` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id`, `nama_kelas`, `deskripsi`, `link_cr`, `link_wa`, `informasi_dosen`, `hasil_pembelajaran`, `gambar`) VALUES
(1, 'Pemrograman Website 2', 'Mata kuliah Pemrograman Website membahas teknik dan praktik dalam pengembangan aplikasi web. Mahasis', 'https://classroom.google.com/c/NzU0NTY3MzAzODMw', 'https://chat.whatsapp.com/LYGm7ovtK7CGnZbUo9KDZU', 'Pak Miftah & Pak Fajrul', 'Memahami dasar-dasar pemrograman web.\r\nMampu merancang dan mengembangkan aplikasi web interaktif.\r\nMengetahui teknik pengujian dan debugging aplikasi web.', 'pemweb.jpg'),
(2, 'Metodologi Penelitian SI', 'Mata kuliah Metodologi Penelitian Sistem Informasi membahas teknik dan pendekatan dalam melakukan pe', 'https://classroom.google.com/c/NzU0NTY3MzAzODMw', 'https://chat.whatsapp.com/LYGm7ovtK7CGnZbUo9KDZU', 'Yosi Agustiawan', 'Memahami konsep dasar metodologi penelitian.\r\nMampu merancang proposal penelitian yang baik.\r\nMengetahui teknik analisis data dalam penelitian sistem informasi.', 'metopen.jpeg'),
(3, 'Sistem Informasi Manajemen', 'Mata kuliah Sistem Informasi Manajemen membahas konsep dan praktik dalam pengelolaan sistem informas', 'https://classroom.google.com/c/NzU0NTY3MzAzODMw', 'https://chat.whatsapp.com/LYGm7ovtK7CGnZbUo9KDZU', 'Eddy Kurniawan', 'Memahami konsep dasar sistem informasi manajemen.\r\nMampu menganalisis kebutuhan informasi dalam organisasi.\r\nMengetahui cara merancang dan mengimplementasikan sistem informasi.', 'sim.jpeg'),
(5, 'Rekayasa Perangkat Lunak', 'Mata kuliah Rekayasa Perangkat Lunak membahas prinsip dan praktik dalam pengembangan perangkat lunak', 'https://classroom.google.com/c/NzU0NTY3MzAzODMw', 'https://chat.whatsapp.com/LYGm7ovtK7CGnZbUo9KDZU', 'Mukhamad Masrur, M.Kom', 'Memahami konsep dasar rekayasa perangkat lunak.Mampu menganalisis dan merancang sistem perangkat lunak.Mengetahui teknik pengujian dan pemeliharaan perangkat lunak.', 'rpl.jpeg'),
(6, 'Visualisai Data dan Informasi', 'Mata kuliah Visualisasi Data dan Informasi membahas teknik dan alat untuk menyajikan data secara vis', 'https://classroom.google.com/c/NzU0NTY3MzAzODMw', 'https://chat.whatsapp.com/LYGm7ovtK7CGnZbUo9KDZU', 'Teguh', 'Memahami konsep dasar visualisasi data.Mampu menggunakan perangkat lunak untuk visualisasi data.Mengetahui teknik terbaik dalam komunikasi data visual.', 'Visualisasi.jpg'),
(7, 'Manajemen Basis Data', 'Mata kuliah Manajemen Basis Data membahas konsep dasar, desain, dan pengelolaan basis data. Mahasisw', 'https://classroom.google.com/c/NzU0NTY3MzAzODMw', 'https://chat.whatsapp.com/LYGm7ovtK7CGnZbUo9KDZU', 'Nufan Balafif', 'Memahami konsep dasar manajemen basis data.Mampu merancang dan membangun basis data menggunakan SQL.Mengetahui teknik pengoptimalkan dan pemeliharaan basis data.', 'mbd.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
