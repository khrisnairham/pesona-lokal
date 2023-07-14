<?php
if (isset($_FILES['gambar'])) {
    // Mendapatkan informasi file yang diunggah
    $namaFile = $_FILES['gambar']['name'];
    $tmpFile = $_FILES['gambar']['tmp_name'];

    // Menentukan direktori tujuan penyimpanan
    $direktoriTujuan = 'assets/';

    // Memindahkan file ke direktori tujuan
    $tujuanFile = $direktoriTujuan . $namaFile;
    move_uploaded_file($tmpFile, $tujuanFile);

    // Membaca konten gambar sebagai string
    $gambarString = file_get_contents($tujuanFile);

    // Mengkodekan gambar menjadi base64
    $gambarBase64 = base64_encode($gambarString);

    // Melakukan koneksi ke database dan melakukan operasi INSERT
    $conn = mysqli_connect('localhost', 'root', '', 'pesona_lokal');
    $query = "INSERT INTO tabel_gambar (gambar) VALUES ('$gambarBase64')";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}
