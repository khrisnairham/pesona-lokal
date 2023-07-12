-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 10:42 AM
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
-- Table structure for table `home_title_komen`
--

CREATE TABLE `home_title_komen` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tit_slider` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_title_komen`
--

INSERT INTO `home_title_komen` (`id`, `title`, `gambar`, `deskripsi`, `tit_slider`) VALUES
(1, 'Website yang sangat membantu terutama bagi saya yang sangat awam saat ingin pergi berwisata ke Jogja', '', '', 'Tugu Yogyakarta'),
(2, '', '', '', 'Pantai Indrayanti'),
(3, '', '', '', 'Keraton Yogyakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_title_komen`
--
ALTER TABLE `home_title_komen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_title_komen`
--
ALTER TABLE `home_title_komen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
