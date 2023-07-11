<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$database = "pesona_lokal";
$password = "";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}


// Langkah 1: Verifikasi apakah gambar diunggah
if (isset($_POST['submit'])) {
    $gambar = $_FILES['gambar']['Rectangle%20157.png'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];

    // Langkah 2: Simpan gambar ke direktori penyimpanan
    $target_dir = "http://home.pesonalokal.site/assets/"; // Ganti dengan direktori penyimpanan Anda
    $target_file = $target_dir . basename($gambar);
    move_uploaded_file($gambar_tmp, $target_file);

    // Langkah 3: Perbarui database atau lakukan tindakan lain yang sesuai
    // ...

    // Langkah 4: Tampilkan gambar yang baru diubah
    echo '<img src="' . $target_file . '" alt="Gambar Baru">';

    // Langkah 5: Hapus gambar lama (opsional)
    // ...
}
?>