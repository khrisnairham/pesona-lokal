-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2023 pada 15.04
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `destinasi_sub`
--

CREATE TABLE `destinasi_sub` (
  `id_des_sub` int(11) NOT NULL,
  `nama_des` text NOT NULL,
  `img_des` text NOT NULL,
  `desk_des_sub` text NOT NULL,
  `desk2_des_sub` text NOT NULL,
  `lokasi_des_sub` text NOT NULL,
  `rute_des` text NOT NULL,
  `rute2_des` text NOT NULL,
  `harga_tiket_des` text NOT NULL,
  `nama_des_tiket` text NOT NULL,
  `tiket_des_sub` text NOT NULL,
  `maps_des_sub` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `destinasi_sub`
--

INSERT INTO `destinasi_sub` (`id_des_sub`, `nama_des`, `img_des`, `desk_des_sub`, `desk2_des_sub`, `lokasi_des_sub`, `rute_des`, `rute2_des`, `harga_tiket_des`, `nama_des_tiket`, `tiket_des_sub`, `maps_des_sub`) VALUES
(1, 'Pesona Pantai Indrayanti, Serasa Pantai di Bali', '', 'Tidak hanya berhiaskan pasir putih, bukit karang, dan air biru jernih yang seolah memanggil-manggil wisatawan untuk menceburkan diri ke dalamnya, Pantai Indrayanti juga dilengkapi restoran dan cafe serta deretan penginapan yang akan memanjakan wisatawan. Beragam menu mulai dari hidangan laut hingga nasi goreng bisa di pesan di restoran yang menghadap ke pantai ini. Pada malam hari, gazebo-gazebo yang ada di bibir pantai akan terlihat cantik karena diterangi kerlip sinar lampu. Menikmati makan malam di cafe ini ditemani desau angin dan alunan debur ombak akan menjadi pengalaman romantis yang tak terlupa.', 'Penyebutan nama Pantai Indrayanti sebelumnya menuai banyak kontraversi. Indrayanti bukanlah nama pantai, melainkan nama pemilik cafe dan restoran. Berhubung nama Indrayanti yang terpampang di papan nama cafe dan restoran pantai, akhirnya masyarakat menyebut pantai ini dengan nama Pantai Indrayanti. Sedangkan pemerintah menamai pantai ini dengan nama Pantai Pulang Syawal. Namun nama Indrayanti jauh lebih populer dan lebih sering disebut daripada Pulang Syawal. Keterlibatan pihak swasta dalam pengelolaan Pantai Indrayanti rupanya turut membawa dampak positif. ', 'Pantai Indrayanti berada di Ds Tepus, Kec Tepus, Gunung Kidul, Yogyakarta. Jalan menuju Pantai indrayanti bisa melalui rute :', '- Dari Jogja menuju ke jalan Wonosari (ringroad timur), lalu menuju ke arah Piyungan – Patuk – Wonosari – Karangrejek – Hargosari – Tepus. Dari tepus tinggal ikuti petunjuk jalan ke arah pantai.', '- Rute alternatif lain yang bisa digunakan; via jalan Imogiri – Siluk – Panggang – Saptosari – Trowono – Baron. Dari pantai Baron lanjut ke arah timur kurang lebih 10 KM untuk sampai ke Indrayanti.', ' Destinasi wisata ini mempunyai harga tiket masuk yang tergolong sangat murah. Untuk harga tiket masuk pantai indrayanti tersebut adalah harga tiket masuk untuk 3 buah destinasi wisata pantai sekaligus. Tentu saja wisata pantai optional merupakan destinasi wisata pantai yang masih berada di dalam satu kompleks dengan pantai ini, dengan pilihan dari wisata pantai bebas. Jangan khawatir Anda dapat memesan dan membeli tiket melalui Pesona Lokal. ', 'Pantai Indrayanti dan sekitarnya', 'Harga Rp. 10.000', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `destinasi_sub`
--
ALTER TABLE `destinasi_sub`
  ADD PRIMARY KEY (`id_des_sub`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `destinasi_sub`
--
ALTER TABLE `destinasi_sub`
  MODIFY `id_des_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
