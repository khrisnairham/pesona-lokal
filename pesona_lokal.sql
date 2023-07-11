-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 10:32 AM
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
-- Table structure for table `home_title_rekomen`
--

CREATE TABLE `home_title_rekomen` (
  `id_title` int(11) NOT NULL,
  `title_rekomendasi` text NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi_rekomendasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_title_rekomen`
--

INSERT INTO `home_title_rekomen` (`id_title`, `title_rekomendasi`, `gambar`, `deskripsi_rekomendasi`) VALUES
(1, 'Menikmati Kemegahan Gunung Merapi', 'https://raw.githubusercontent.com/khrisnairham/pesona-lokal/main/assets/Rectangle%20157.png', 'Selain Bukit Klangon, ada pula spot camping di dekat Gunung Merapi yang juga menawarkan keindahan dan sensasi berkemah yang menarik, namanya adalah Nawang Jagad.'),
(2, 'Bersantai bersama orang tercinta di HeHa Sky View', '', 'Salah satu destinasi wisata favorit yang menawarkan pemandangan terbaik kota Yogyakarta dan sekitarnya “dari lantai 2”. Terletak di kawasan perbukitan Gunungkidul, HeHa Sky View hanya berjarak 40 menit dari pusat Kota Yogyakarta.'),
(3, 'Rasakan kesegaran di sungai berwarna biru', '', 'Taman Sungai Mudal, sebuah objek wisata alam terbuka yang terletak di Kabupaten Kulon Progo, yang menawarkan pesona sebuah kolam pemandian yang bersumber dari mata air alami.');

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
(1, 'Pantai Baron dan sekitarnya', '', 'Kunjungi Banyak Pantai', 'Rp.10.000', ''),
(2, 'Bunker Kaliadem', '', 'Nikmati Kemegahan Merapi', 'Rp.10.000', ''),
(3, 'Tamansari', '', 'Pemandian para raja dan ratu', 'Rp.10.000', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `verification_code` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kode_unik` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `verification_code`, `kode_unik`) VALUES
(1, 'we', 'sdf', 'sdf', '', ''),
(80, 'sd221', 'we11@gmail.com', 'Qwer123', '', ''),
(81, 'samb3lwelut', 'sambelwelut@sambel.com', 'Samb3lwelut', '', ''),
(82, 'Rr1', 'aldrin.pratama01@gmail.com', 'Kkkkkk1', '', ''),
(83, 'weww1', 'wahyau6969@gmail.com', 'Qwerty12', NULL, ''),
(84, 'egiktrihatmokooo555', 'reemptive2@gmail.com', 'Cek900', '725684', ''),
(85, 'tole666', 'helloham310@gmail.com', 'Pesonalokal0', NULL, ''),
(86, 'Endah1', 'Endah1@gmail.com', 'Endah1234', NULL, ''),
(87, 'egiktrihatmokooow323', 'haha@gmail.com', 'Qwerty123', NULL, ''),
(88, 'egiktrihatmokooo88888', 'admin@blynk.cc', 'Qwerty123', NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_title_rekomen`
--
ALTER TABLE `home_title_rekomen`
  ADD PRIMARY KEY (`id_title`);

--
-- Indexes for table `home_title_tiket`
--
ALTER TABLE `home_title_tiket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_title_rekomen`
--
ALTER TABLE `home_title_rekomen`
  MODIFY `id_title` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_title_tiket`
--
ALTER TABLE `home_title_tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
