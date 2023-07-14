-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 01:15 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesona_lokal`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_title_tiket`
--

CREATE TABLE `home_title_tiket` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` text NOT NULL,
  `title_kuliner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_title_tiket`
--

INSERT INTO `home_title_tiket` (`id`, `title`, `gambar`, `deskripsi`, `harga`, `title_kuliner`) VALUES
(1, 'Pantai Baron dan sekitarnya', '', 'Kunjungi Banyak Pantai', 'Rp.10.000', 'Gudeg khas Jogja'),
(2, 'Bunker Kaliadem', '', 'Nikmati Kemegahan Merapi', 'Rp.10.000', 'Nyantai diKopi Klotok'),
(3, 'Tamansari', '', 'Pemandian para raja dan ratu', 'Rp.10.000', 'Sate Klatak yang Menggoda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_title_tiket`
--
ALTER TABLE `home_title_tiket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_title_tiket`
--
ALTER TABLE `home_title_tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
