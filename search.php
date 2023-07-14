<?php
include 'kuliner.php';
// Mengambil kata kunci dari input pencarian
$keyword = $_GET['keyword'];

// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "pesona_lokal");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
    exit();
}

// Melakukan query pencarian
$query = "SELECT * FROM kuliner WHERE nama_kul LIKE '%$keyword%'";
$result = mysqli_query($koneksi, $query);

// Menampilkan hasil pencarian
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {?>
        <!-- // echo "Hasil: " . $row['nama_kul'] . "<br>"; -->
        <!-- <div> class="row mb-5 pb-4 pt-5"> -->
        <div class="row mb-5 pb-4 pt-5" style="position:relatif;z-index: 99;">
        <div class="col-2">
          <a href="#"><img src="assets/kuli1.png" alt=""></a>
        </div>
        <div class="col-3">
          <a href="#" class="text-decoration-none text-dark">
            <p class="fw-semibold fs-3"><?php echo $row['nama_kul']; ?></p>
          </a>
          <p class="fs-5 text-dark"><?php echo $row['desk_kul']; ?></p>
        </div>
        </div>

        <?php }
} else {
    echo "Tidak ditemukan hasil.";
}

// Menutup koneksi
mysqli_close($koneksi);
?>
