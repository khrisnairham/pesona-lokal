<?php
session_start();

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION["email"])) {
  // Jika belum login, redirect ke halaman login dan hentikan eksekusi skrip PHP
  header("Location: loginSignUp.php");
  die();
}

// Koneksi ke database
// Koneksi ke database
// Koneksi ke database
// $host = "localhost";
// $username = "id20751189_pesonalokal2023";
// $database = "id20751189_pesonalokal";
// $password = "Pesonalokal2023.";
 $host = "localhost";
$username = "id20751189_pesonalokal2023";
$database = "id20751189_pesonalokal";
$password = "Pesonalokal2023.";

$conn = new mysqli($host , $username, $password, $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tampilkan data profil pengguna
echo "Halo, " . $_SESSION["email"] . "! Selamat datang di halaman profil Anda.";

// Tambahkan fitur pembaruan email dan nomor telepon
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Perbarui email
  if (isset($_POST["new_email"])) {
    $newEmail = $_POST["new_email"];

    // Update email pengguna di database
    $email = $_SESSION["email"];
    $query = "UPDATE Users SET email='$newEmail' WHERE email='$email'";
  if (!mysqli_query($conn, $query)) {
      echo "Error: " . mysqli_error($koneksi);
    } else {
      // Update session dengan email yang baru
      $_SESSION["email"] = $newEmail;
      echo "Email berhasil diperbarui!";
    }
  }
  // Perbarui nomor telepon
  if (isset($_POST["new_phone"])) {
    $newPhone = $_POST["new_phone"];

    // Update nomor telepon pengguna di database
    $email = $_SESSION["email"];
    $query = "UPDATE Users SET no_hp='$newPhone' WHERE email='$email'";
    mysqli_query($koneksi, $query);

    echo "Nomor telepon berhasil diperbarui!";
  }
}
?>

<!-- Form pembaruan email -->
<form action="" method="POST">
  <label for="new_email">Email baru:</label>
  <input type="email" name="new_email" id="new_email" required>
  <input type="submit" value="Perbarui Email">
</form>

<!-- Form pembaruan nomor telepon -->
<form action="" method="POST">
  <label for="new_phone">Nomor telepon baru:</label>
  <input type="text" name="new_phone" id="new_phone" required>
  <input type="submit" value="Perbarui Nomor Telepon">
</form>
