<!DOCTYPE html>
<html>

<head>
    <title>Tampilan Website</title>
</head>

<body>
    <?php
    // Melakukan koneksi ke database dan menjalankan kueri SELECT
    $conn = mysqli_connect('localhost', 'root', '', 'pesona_lokal');
    $query = "SELECT gambar FROM tabel_gambar ORDER BY id_gambar DESC LIMIT 1";
    // Ubah nama_tabel dan kondisi sesuai dengan kebutuhan Anda
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $gambarBase64 = $row['gambar'];
    ?>
        <img src="data:image/png;base64,<?php echo $gambarBase64; ?>" alt="Gambar">
    <?php
    }

    mysqli_close($conn);
    ?>
</body>

</html>