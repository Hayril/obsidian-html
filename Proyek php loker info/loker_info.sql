-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 06:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loker_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `ardi`
--

CREATE TABLE `ardi` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ardi`
--

INSERT INTO `ardi` (`admin_id`, `username`, `password`, `created_at`) VALUES
(1, 'latto', '$2y$10$/aZ1CNp0JiOeXRQmOmq9ZOrFC2tRN2ZOf6TJ0erAz.5hBQw0Y2vnO', '2024-06-19 14:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `kontak_person` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`id`, `foto`, `deskripsi`, `jurusan`, `kontak_person`) VALUES
(1, 'uploads/loker.png', 'PT.MENCARI CINTA SEJATI\r\n', 'RPL', '089577892472'),
(3, 'uploads/kota.jpg', 'WISMA KALLA\r\n', 'AP', '089577892472'),
(4, 'uploads/BANK.jpeg', 'BANG SULSELBAR', 'AK', '089577892472'),
(5, 'uploads/LOPP.png', 'PT.BERIKAN CINTAMU SEPENUHNYA KE AKU', 'RPL', '081242716216');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ardi`
--
ALTER TABLE `ardi`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ardi`
--
ALTER TABLE `ardi`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
