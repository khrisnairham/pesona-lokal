-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2023 pada 13.55
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_bulan` int(11) NOT NULL,
  `event1` text NOT NULL,
  `event2` text NOT NULL,
  `event3` text NOT NULL,
  `event4` text NOT NULL,
  `event5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_bulan`, `event1`, `event2`, `event3`, `event4`, `event5`) VALUES
(1, 'Prambanan Jazz 2023', 'Untukmu Sebelas', 'ARTJOG 2023 ‘ Motif : Lamaran’', 'Wilapa Fair 2023 ', 'Karnaval Merdeka Belajar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_sub`
--

CREATE TABLE `event_sub` (
  `id_nomer` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `nama_event1` text NOT NULL,
  `desk_event1` text NOT NULL,
  `nama_event2` text NOT NULL,
  `desk_event2` text NOT NULL,
  `nama_event3` text NOT NULL,
  `desk_event3` text NOT NULL,
  `nama_event4` text NOT NULL,
  `desk_event4` text NOT NULL,
  `nama_event5` text NOT NULL,
  `desk_event5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `event_sub`
--

INSERT INTO `event_sub` (`id_nomer`, `id_bulan`, `nama_event1`, `desk_event1`, `nama_event2`, `desk_event2`, `nama_event3`, `desk_event3`, `nama_event4`, `desk_event4`, `nama_event5`, `desk_event5`) VALUES
(1, 1, 'Prambanan Jazz 2023', 'Prambanan Jazz Festival bakal kembali menyapa para penikmat musik di 2023 ini. Festival musik satu ini udah memulai perjalanan mereka sejak 2015 silam. Dengan tema “The Magical Experience”, disebutkan  kalo Prambanan Jazz Festival 2023 menjadi budaya baru dalam budaya populer masa depan Selengkapnya ...   ', 'Untukmu Sebelas', 'Bersiap-siaplah, teman musik Yogyakarta. “UNTUKMU SEBELAS” adalah sebuah music event festival yang diadakan di Stadion Maguwoharjo dengan menampilkan artis lokal dan nasional pada tanggal 16 Juli 2023.  Event dimana merayakan ulang tahun yang ke-11 BRONES. Selengkapnya ...', 'ARTJOG 2023 ‘ Motif : Lamaran’', 'ARTJOG 2023 akan berlangsung mulai 30 Juni - 27 Agustus 2023 di Jogja National Museum, Yogyakarta, dan dikurasi bersama oleh kurator dan penulis Hendro Wiyanto dan seniman Nadiah Bamadhaj. Program ARTJOG 2023 tidak terlalu berbeda dari tahun lalu, namun tentu banyak pembaruan yang disupport teman seniman dengan ide–ide. Selengkapnya ...', 'Wilapa Fair 2023 ', 'Wilapa Fair 2023 membuka kesempatan bagi siapapun yang ingin meraup keuntungan dengan membuka tenant di JNM Bloc pada bazar Wilapa 24-25 Juni. Wilapa Fair 2023 merupakan bazar UMKM Yogyakarta sebagai wadah untuk meningkatkan marketing promotional UMKM Selengkapnya ...', 'Pameran Seni “AKARA BARA”', 'Pameran tugas akhir siswa kelas XII SMKN 2 Sewon Bantul berlangsung tiga hari di Langgeng Art Foundation Mantrijeron Yogyakarta, Jumat - Minggu (16-18/6). Pameran tugas akhir tersebut diberi nama Akara Bara. Tema Akara Bara menggambarkan semangat yang membara dari seluruh Selengkapnya ...');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home_title_komen`
--

CREATE TABLE `home_title_komen` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tit_slider` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `home_title_komen`
--

INSERT INTO `home_title_komen` (`id`, `title`, `gambar`, `deskripsi`, `tit_slider`) VALUES
(1, 'Website yang sangat membantu terutama bagi saya yang sangat awam saat ingin pergi berwisata ke Jogja', '', '', 'Tugu Yogyakarta'),
(2, '', '', '', 'Pantai Indrayanti'),
(3, '', '', '', 'Keraton Yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home_title_rekomen`
--

CREATE TABLE `home_title_rekomen` (
  `id_title` int(11) NOT NULL,
  `title_rekomendasi` text NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi_rekomendasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `home_title_rekomen`
--

INSERT INTO `home_title_rekomen` (`id_title`, `title_rekomendasi`, `gambar`, `deskripsi_rekomendasi`) VALUES
(1, 'Menikmati Kemegahan Gunung Merapi', 'https://raw.githubusercontent.com/khrisnairham/pesona-lokal/main/assets/Rectangle%20157.png', 'Selain Bukit Klangon, ada pula spot camping di dekat Gunung Merapi yang juga menawarkan keindahan dan sensasi berkemah yang menarik, namanya adalah Nawang Jagad.'),
(2, 'Bersantai bersama orang tercinta di HeHa Sky View', '', 'Salah satu destinasi wisata favorit yang menawarkan pemandangan terbaik kota Yogyakarta dan sekitarnya “dari lantai 2”. Terletak di kawasan perbukitan Gunungkidul, HeHa Sky View hanya berjarak 40 menit dari pusat Kota Yogyakarta.'),
(3, 'Rasakan kesegaran di sungai berwarna biru', '', 'Taman Sungai Mudal, sebuah objek wisata alam terbuka yang terletak di Kabupaten Kulon Progo, yang menawarkan pesona sebuah kolam pemandian yang bersumber dari mata air alami.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home_title_tiket`
--

CREATE TABLE `home_title_tiket` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` text NOT NULL,
  `title_kuliner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `home_title_tiket`
--

INSERT INTO `home_title_tiket` (`id`, `title`, `gambar`, `deskripsi`, `harga`, `title_kuliner`) VALUES
(1, 'Pantai Baron dan sekitarnya', '', 'Kunjungi Banyak Pantai', 'Rp.10.000', ''),
(2, 'Bunker Kaliadem', '', 'Nikmati Kemegahan Merapi', 'Rp.10.000', ''),
(3, 'Tamansari', '', 'Pemandian para raja dan ratu', 'Rp.10.000', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuliner`
--

CREATE TABLE `kuliner` (
  `id_kul` int(11) NOT NULL,
  `nama_kul` varchar(50) NOT NULL,
  `desk_kul` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `kuliner`
--

INSERT INTO `kuliner` (`id_kul`, `nama_kul`, `desk_kul`, `img`) VALUES
(1, 'Gudeg Yu Djum', 'Lorem ipsun', ''),
(2, 'Bale Raos', 'Lorem ipsun', ''),
(3, 'Bakpia Tugu Jogja', 'Lorem ipsun', ''),
(4, 'Sate Klathak', 'Lorem ipsun', ''),
(5, 'Kopi Klotok', 'Lorem ipsun', ''),
(6, 'Gudeg Mercon Bu Tinah', 'Lorem ipsun', ''),
(7, 'House Of Raminten ', 'Lorem ipsun', ''),
(8, 'Bakmi Jowo Mbah Gito', 'Lorem ipsun', ''),
(9, 'Tengkleng Gajah', 'Lorem ipsun', ''),
(10, 'Soto Bathok', 'Lorem ipsun', ''),
(11, 'Mangut Lele Mbah Marto', 'Lorem ipsun', ''),
(12, 'Gudeg Pawon', 'Lorem ipsun', ''),
(13, 'Oseng-oseng Mercon Bu Narti ', 'Lorem ipsun', ''),
(14, 'Kopi Joss', 'Lorem ipsun', ''),
(15, 'Soto Kadipiro', 'Lorem ipsun', ''),
(16, 'Nasi Brongkos Handayani', 'Lorem ipsun', ''),
(17, 'Bakpia Pathuk', 'Lorem ipsun', ''),
(18, 'Bakmi Jawa Pak Pele', 'Lorem ipsun', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `souvenir`
--

CREATE TABLE `souvenir` (
  `id_sou` int(11) NOT NULL,
  `nama_sou` varchar(100) DEFAULT NULL,
  `lokasi_sou` text NOT NULL,
  `info_sou` text NOT NULL,
  `nomer_sou` text NOT NULL,
  `harga_sou` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `souvenir`
--

INSERT INTO `souvenir` (`id_sou`, `nama_sou`, `lokasi_sou`, `info_sou`, `nomer_sou`, `harga_sou`) VALUES
(1, 'Blankone Mas Monggo', 'Jl. Sungapan, Taman mas no 24 Tamantirto kasihan, Tamantirto, Jetis, Bantul Regency', 'GROSIR BLANGKON', '08985137879', 'Rp. 30.000'),
(2, 'Kerajinan Perak ꦏꦼꦫꦗꦶꦤꦤ꧀ꦥꦺꦫꦏ', 'Jl. Kemasan Gang Sawo KG. II/801A, Nyamplungan, Kec. Kotagede, Kota Yogyakarta, Daerah Istimewa Yogy', 'Kerajinan Perak', '081392197750', 'Rp. 70.000'),
(3, 'Kerajinan Kulit Pari', 'Kayen, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', 'Kerajinan Kulit Ikan Pari', '082233003301', 'Rp. 100.000'),
(4, 'Gerabah', 'Jalan Kasongan, Keloran, Bangunjiwo, Kec. Kasihan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 5518', 'Wisata Edukasi Yogyakarta', '085155151007', 'Rp. 30.000'),
(5, 'Yuan Art Batik Kayu Krebet', 'Krebet, Sendangsari, Kec. Bantul, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55751', 'Kerajinan batik kayu', '0818270657', 'Rp. 250.000'),
(6, 'Kaos Batik Khas Jogja', 'Jl. Karel Sasuit Tubun No.60, Ngampilan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55261', 'Batik & Kaos Oleh-Oleh', '0274586094', 'Rp. 60.000'),
(7, 'Tenun Lurik \"KURNIA\"', 'Krapyak Wetan No. 133 RT/RW. 55, Sewon, Krapyak Wetan, Panggungharjo, Kec. Sewon, Kabupaten Bantul, ', 'Kain Lurik Jogja', '0274586094', 'Rp. 30.000'),
(8, 'Batik Benang Ratu Yogyakarta', 'Jl. Brigjen Katamso No.78, Prawirodirjan, Kec. Gondomanan, Kota Yogyakarta, Daerah Istimewa Yogyakar', 'Batik Khas Jogja', '08812783344', 'Rp. 45.000'),
(9, 'Handicraft wayang Wayang Kulit', 'Jl. Nyi Adi Sari No.146, Rejowinangun, Kec. Kotagede, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55', 'Perwayangan', '087839406922', 'Rp. 120.000'),
(10, 'Sumekar Art Jual Beli Keris Dan Antik', 'Jalan Kasongan Utara, Nyemengan, Tirtonirmolo, Kec. Kasihan, Kabupaten Bantul, Daerah Istimewa Yogya', 'Keris', '081227519994', 'Rp. 500.000'),
(11, 'Akarwangi Gambas Newcraft', 'Gesikan 3, Gesikan II, Wijirejo, Kec. Pandak, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55761', 'Kerajinan Akar Wangi Yogyakarta', '085701204860', 'Rp. 30.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `verification_code` varchar(200) DEFAULT NULL,
  `kode_unik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
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
-- Indeks untuk tabel `destinasi_sub`
--
ALTER TABLE `destinasi_sub`
  ADD PRIMARY KEY (`id_des_sub`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indeks untuk tabel `event_sub`
--
ALTER TABLE `event_sub`
  ADD PRIMARY KEY (`id_nomer`),
  ADD KEY `id_bulan` (`id_bulan`);

--
-- Indeks untuk tabel `home_title_komen`
--
ALTER TABLE `home_title_komen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home_title_rekomen`
--
ALTER TABLE `home_title_rekomen`
  ADD PRIMARY KEY (`id_title`);

--
-- Indeks untuk tabel `home_title_tiket`
--
ALTER TABLE `home_title_tiket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id_kul`);

--
-- Indeks untuk tabel `souvenir`
--
ALTER TABLE `souvenir`
  ADD PRIMARY KEY (`id_sou`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `destinasi_sub`
--
ALTER TABLE `destinasi_sub`
  MODIFY `id_des_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id_bulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `event_sub`
--
ALTER TABLE `event_sub`
  MODIFY `id_nomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `home_title_komen`
--
ALTER TABLE `home_title_komen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `home_title_rekomen`
--
ALTER TABLE `home_title_rekomen`
  MODIFY `id_title` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `home_title_tiket`
--
ALTER TABLE `home_title_tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id_kul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `souvenir`
--
ALTER TABLE `souvenir`
  MODIFY `id_sou` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `event_sub`
--
ALTER TABLE `event_sub`
  ADD CONSTRAINT `event_sub_ibfk_1` FOREIGN KEY (`id_bulan`) REFERENCES `event` (`id_bulan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
