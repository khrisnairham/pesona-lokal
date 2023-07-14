// <!--<?php-->
// Koneksi ke database
<!--session_start();-->

<!-- $host = "localhost";-->
<!--$username = "id20751189_pesonalokal2023";-->
<!--$database = "id20751189_pesonalokal";-->
<!--$password = "Pesonalokal2023.";-->

<!--$conn = new mysqli($host , $username, $password, $database);-->
<!--if ($conn->connect_error) {-->
<!--    die("Koneksi gagal: " . $conn->connect_error);-->
<!--}-->
<!-- $no_hp= $_POST['no_hp']; -->
<!-- $email = $_SESSION['email'];-->
<!--$query = "SELECT no_hp FROM Users WHERE email='$email'";-->
<!--$result = mysqli_query($conn, $query);-->
 

// Simpan nomor telepon dalam session


<!--if ($_SERVER["REQUEST_METHOD"] == "POST") {-->
  // Perbarui email
<!--  if (isset($_POST["no_hp"])) {-->
<!--    $newEmail = $_POST["no_hp"];-->

    // Update email pengguna di database
   
<!--    $query = "UPDATE Users SET no_hp='$newEmail' WHERE email='$email'";-->
<!--    mysqli_query($conn, $query);-->

    // Update session dengan email yang baru
<!--    $_SESSION["no_hp"] = $newEmail;-->
    
<!-- }else if (isset($_POST["nama_depan"])) {-->
<!--     $newFirstname = $_POST["nama_depan"];-->

    // Update nama depan di database
<!--    $email = $_SESSION["email"];-->
<!--    $query = "UPDATE Users SET nama_depan='$newFirstname' WHERE email='$email'";-->
<!--    mysqli_query($conn, $query);-->

    // Update nilai session nama_depan
<!--    $_SESSION["nama_depan"] = $newFirstname;-->
<!--                   header("Location:profile.php");-->

<!--  }-->
//   else if (isset($_POST["nama_belakang"])) {
//      $nama_belakang = $_POST["nama_belakang"];

//     // Update nama depan di database
//     $email = $_SESSION["email"];
//     $query = "UPDATE Users SET nama_belakang='$newFirstname' WHERE email='$email'";
//     mysqli_query($conn, $query);

//     // Update nilai session nama_depan
//     $_SESSION["nama_belakang"] = $nama_belakang;
      
//   }else if (isset($_POST["no_ktp"])) {
<!--     $no_ktp = $_POST["no_ktp"];-->

    // Update nama depan di database
<!--    $email = $_SESSION["email"];-->
<!--    $query = "UPDATE Users SET no_ktp='$no_ktp' WHERE email='$email'";-->
<!--    mysqli_query($conn, $query);-->

    // Update nilai session nama_depan
<!--    $_SESSION["no_ktp"] = $no_ktp;-->
      
<!--  } -->
  
<!--                   header("Location:profile.php");-->

<!--} -->



<!--$conn->close();-->
<!--?>-->