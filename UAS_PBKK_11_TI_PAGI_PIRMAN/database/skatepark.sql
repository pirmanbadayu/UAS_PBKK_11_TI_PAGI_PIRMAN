-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 02:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futsal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin123'),
(2, 'Ade Maysa', 'admin2', '1234'),
(3, 'Agustian', 'admin3', '12345'),
(4, 'Andika Muhammad', 'admin4', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `id_user` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `waktu_bermain` enum('1 jam','2 jam','3 jam') NOT NULL,
  `lapangan` enum('lapangan 1','lapangan 2') NOT NULL,
  `harga` varchar(225) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `id_user`, `nama`, `tanggal`, `jam`, `waktu_bermain`, `lapangan`, `harga`, `gambar`) VALUES
(76, '34', 'Ade Maysa', '2022-07-19', '19:34:00', '1 jam', 'lapangan 1', 'Rp 120.000,00', '62dfd13786572.png'),
(77, '34', 'Ade Maysa', '2022-07-28', '10:00:00', '1 jam', 'lapangan 2', 'Rp 140.000,00', '62dfd16f3cacc.png'),
(78, '35', 'Andika Muhammad', '2022-07-28', '20:00:00', '2 jam', 'lapangan 1', 'Rp 170.000,00', '62dfd1e362817.png'),
(79, '33', 'Agustian', '2022-07-30', '21:00:00', '3 jam', 'lapangan 2', 'Rp 240.000,00', '62dfd21e0ae4c.png'),
(80, '33', 'Agustian', '2022-07-31', '23:00:00', '1 jam', 'lapangan 2', 'Rp 140.000,00', '62dfd246e8217.png'),
(82, '35', 'Andika Muhammad', '2022-08-03', '23:00:00', '2 jam', 'lapangan 2', 'Rp 190.000,00', ''),
(83, '35', 'Andika Muhammad', '2022-07-25', '21:13:00', '1 jam', 'lapangan 1', 'Rp 120.000,00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(33, 'Agustian', 'agus', '$2y$10$PWyQx.S4tNqGqhqZ/umVF.Ea4aSkNufX1vVtv5WV5YLxIxS5eQPNy'),
(34, 'Ade Maysa', 'ade', '$2y$10$PIjAY3OvKT270eVFsqWhJemAdRa5UMdKT2M3lO0Un4nCIzjqqWI4q'),
(35, 'Andika Muhammad', 'andika', '$2y$10$Gs5pLIVy6tB.yIGxl652/O7yZJeoWh.aHJjlTen0TaLXeEiO.BLai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
