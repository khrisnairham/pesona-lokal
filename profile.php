<?php
session_start();

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION["email"])) {
  // Jika belum login, redirect ke halaman login dan hentikan eksekusi skrip PHP
  header("Location: loginSignUp.php");
  die();
}
 $host = "localhost";
$username = "root";
$database = "pesona_lokal";
$password = "";

$conn = new mysqli($host , $username, $password, $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

  // Tambahkan fitur pembaruan nomor telepon
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Perbarui nomor telepon
  if (isset($_POST["no_hp"])) {
    $newPhone = $_POST["no_hp"];

    // Update nomor telepon di database
    $email = $_SESSION["email"];
    $query = "UPDATE Users SET no_hp='$newPhone' WHERE email='$email'";
    mysqli_query($conn, $query);
 $_SESSION["no_hp"] = $newPhone;
    
  }
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Perbarui nomor telepon
  if (isset($_POST["nama_depan"])) {
    $nama_depan = $_POST["nama_depan"];

    // Update nomor telepon di database
    $email = $_SESSION["email"];
    $query = "UPDATE Users SET no_ktp='$nama_depan' WHERE email='$email'";
    mysqli_query($conn, $query);
 $_SESSION["nama_depan"] = $nama_depan;
    
  }
}
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Perbarui nomor telepon
  if (isset($_POST["nama_belakang"])) {
    $nama_belakang = $_POST["nama_belakang"];

    // Update nomor telepon di database
    $email = $_SESSION["email"];
    $query = "UPDATE Users SET nama_belakang='$nama_belakang' WHERE email='$email'";
    mysqli_query($conn, $query);
 $_SESSION["nama_belakang"] = $nama_belakang;
    
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Perbarui nomor telepon
  if (isset($_POST["no_ktp"])) {
    $no_ktp = $_POST["no_ktp"];

    // Update nomor telepon di database
    $email = $_SESSION["email"];
    $query = "UPDATE Users SET no_ktp='$no_ktp' WHERE email='$email'";
    mysqli_query($conn, $query);
 $_SESSION["no_ktp"] = $no_ktp;
    
  }
}
//   // Perbarui nomor telepon
//   if (isset($_POST["nama_depan"])) {
//     $nama_depan = $_POST["nama_depan"];

//     // Update nomor telepon di database
//     $email = $_SESSION["email"];
//     $query = "UPDATE Users SET nama_depan='$nama_depan' WHERE email='$email'";
//     mysqli_query($conn, $query);
//  $_SESSION["nama_depan"] = $nama_depan;
    
//   }
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   // Perbarui nomor telepon
//   if (isset($_POST["nama_belakang"])) {
//     $nama_belakang = $_POST["nama_belakang"];

//     // Update nomor telepon di database
//     $email = $_SESSION["email"];
//     $query = "UPDATE Users SET nama_belakang='$nama_belakang' WHERE email='$email'";
//     mysqli_query($conn, $query);
//  $_SESSION["nama_belakang"] = $nama_belakang;
    
//   }
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   // Perbarui nomor telepon
//   if (isset($_POST["no_ktp"])) {
//     $no_ktp = $_POST["no_ktp"];

//     // Update nomor telepon di database
//     $email = $_SESSION["email"];
//     $query = "UPDATE Users SET no_ktp='$no_ktp' WHERE email='$email'";
//     mysqli_query($conn, $query);
//  $_SESSION["no_ktp"] = $no_ktp;
    
//   }
// }
//  if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   // Perbarui email
//   if (isset($_POST["email"])) {
//     $newEmail = $_POST["email"];

//     // Update email pengguna di database
//     $email = $_SESSION["email"];
//     $query = "UPDATE Users SET email='$newEmail' WHERE email='$email'";
//     if (!mysqli_query($conn, $query)) {
//       echo "Error: " . mysqli_error($conn);
//     } else {
//       // Update session dengan email yang baru
//       $_SESSION["email"] = $newEmail;
       
//     }
//   }
//  }
// // Perbarui nomor telepon
//   if (isset($_POST["no_hp"])) {
//     $newPhone = $_POST["no_hp"];

//     // Update nomor telepon pengguna di database berdasarkan email yang sedang login
//     $email = $_SESSION["email"];
//     $query = "UPDATE Users SET no_hp='$newPhone' WHERE email='$email'";
//     if (!mysqli_query($conn, $query)) {
//       echo "Error: " . mysqli_error($conn);
//     } else {
//       echo "Nomor telepon berhasil diperbarui!";
//     }
//   }
// else {
//   // Ambil nomor telepon dari database berdasarkan email yang sedang login
//   $email = $_SESSION["email"];
//   $query = "SELECT no_hp FROM Users WHERE email='$email'";
//   $result = mysqli_query($conn, $query);
//   $row = mysqli_fetch_assoc($result);
//   $noHp = $row["no_hp"];

 
//  }
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil Pengguna - Pesona Lokal</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <!-- Feathere Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />

    <!-- My styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./css/boot.css">
    <link rel="stylesheet" href="./css/template.css">
    <link rel="stylesheet" href="./css/strap.css">
    <link rel="stylesheet" href="./css/bootmin.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />

    <style>  
    .container h2{
      color: #012467;
      font-size: xx-large;
      font-weight: 600;
    }</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar2">
      <a href="home-login.html" class="navbar2-logo"><img src="./assets/pesona.PNG" alt=""></a>

      <div class="navbar2-nav">
        <a href="destinasi.html" style="text-decoration: none;">Destinasi</a>
        <a href="reservasi.html" style="text-decoration: none;">Reservasi</a>
        <a href="petaWisata.html" style="text-decoration: none;">Peta Wisata</a>
       <div class="btn-group" style="padding-left: -200px;">
          <button type="button" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fas fa-user-circle fa-lg" style="font-size: 30px; padding-left: 20px;color: #012467;"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
            <a class="dropdown-item text-decoration-none" href="home.html" style="width: fit-content;"><i class="fas fa-home" style="color: #012467;"></i>&ensp;Home</a>
            <a class="dropdown-item text-decoration-none" href="profile.html" style="width: fit-content;"><i class="fas fa-user" style="color: #012467;"></i>&ensp;Akun</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-decoration-none" href="logout.php" style="width: fit-content;"><i class="fas fa-sign-out" style="color: #012467;"></i>&ensp;Keluar</a>
          </div>
        </div>
        <!-- <a href="#" style="color: #FF8E2B; text-decoration: none;">Masuk</a> -->
      </div>

      <div class="navbar2-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- MAIN -->
    <div class="user container-fluid d-flex">
      <div class="row d-flex justify-content-start ms-5 ps-5">
        <div class="heading col ms-5 ps-5">
          <div class="container">
          <h2>Profil Pengguna</h2>
        </div></div>
      </div>
    </div>
    <div class="container-fluid ms-5 me-5">
      <div class="row d-flex justify-content-center ps-5 pe-5 ms-5 me-5">
        <div class="col-3 border border-2 border-secondary-subtle rounded-4 d-flex flex-column ms-3 me-5 pb-3">
          <div class="p-2"><p class="fw-semibold display-6 ps-2 pb-3 pt-3 mb-5 mt-2" style="word-break: break-word;">Panggah Mencintaimu</p></div>
          <div class="opt p-2">
            <div class="row">
              <div class="col-2 d-flex justify-content-center"><i class="far fa-user border align-self-center" style="color: #4f65c5;"></i></div>
              <div class="col-3 d-flex justify-content-start"><p class="m-0 fs-4"> <a class="text-decoration-none" href="profile.html" style="color: #4f65c5;">Akun</a></p></div>   
            </div>
          </div>
          <div class="opt p-2">
            <div class="row">
              <div class="col-2 d-flex justify-content-center"><i class="far fa-credit-card align-self-center" style="color: #666666;"></i></div>
             <div class="col-3 d-flex justify-content-start"><p class="m-0 fs-4"> <a class="text-decoration-none" href="profileOrder.html" style="color: #666666;">Order</a></p></div>
            </div>
          </div>
          <div class="opt p-2">
            <div class="row">
              <div class="col-2 d-flex justify-content-center"><i class="far fa-edit align-self-center" style="color: #666666;"></i></div>
              <div class="col-3 d-flex justify-content-start"><p class="m-0 fs-4"> <a class="text-decoration-none" href="profileReview.html" style="color: #666666;">Review</a></p></div>
            </div>
          </div>
          <div class="opt p-2 mb-5">
            <div class="row d-flex align-items-center">
              <div class="col-2 d-flex justify-content-center"><i class="fas fa-sliders-h align-self-center" style="color: #666666;"></i></div>
             <div class="col-3 d-flex justify-content-start"><p class="m-0 fs-4"> <a class="text-decoration-none" href="profileSett.html" style="color: #666666;">Pengaturan</a></p></div>
            </div>
          </div>
          <hr class="mt-5"> 
          <div class="opt p-2">
            <div class="row d-flex align-items-center">
              <div class="col-2 d-flex justify-content-center"><i class="fas fa-sign-out align-self-center" style="color: #666666;"></i></div>
              <div class="col-3 d-flex justify-content-start"><p class="m-0 fs-4"> <a class="text-decoration-none" href='logout.php' style="color: #666666;">Keluar</a></p></div>
            </div>
          </div>
        </div>
        <div class="col-6 border border-2 border-secondary-subtle rounded-4 ms-5 me-3">
          <div class="row"  >
              <form action="" method="POST">
            <div class="col-4 d-flex justify-content-center mt-4 pt-1">
              <img src="assets/pp.png" alt="" style="height: min-content;">
            </div>
            <div class="col-8 d-flex justify-content-center flex-column mt-2">
              <div class="mt-4 ms-3 text-secondary"><p class="mb-0 fs-5">Email</p></div>

              <div class="mb-3 ms-3">
                <form action="" method="POST"  >
                  <div class="input-group">
                    <input disabled name="email"  type="text" class="form-control" style="height: 35px;"   value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>">              
                  </div>
                </form>
              </div>
              <div class="ms-3 text-secondary"><p class="mb-0 fs-5">Nomor Ponsel</p></div>
              <div class="mb-3 ms-3">
                <form action=" " method="POST">
                  <div class="input-group">
                    <input   type="text" class="form-control" style="height: 35px;" name="no_hp" id="no_hp" value="<?php echo isset($_SESSION['no_hp']) ? $_SESSION['no_hp'] : ''; ?>">                    
                  </div>
                    <div class="field btn">
               
                </form>
              </div>
              <div class="ms-3 text-secondary"><p class="mb-0 fs-5">Nama Depan</p></div>
              <div class="mb-3 ms-3">
                <form action="" method="POST">
                  <div class="input-group">
                    <input type="text" id=="n" class="form-control" style="height: 35px;" name="nama_depan" id="nama_depan" value="<?php echo isset($_SESSION['nama_depan']) ? $_SESSION['nama_depan'] : ''; ?>">                                
                  </div>
                </form>
              </div>
              <div class="ms-3 text-secondary"><p class="mb-0 fs-5">Nama Belakang</p></div>
              <div class="mb-3 ms-3">
                <form action="" method="POST">
                  <div class="input-group">
                    <input type="text" class="form-control" style="height: 35px;" name="nama_belakang" id="nama_belakang" value="<?php echo isset($_SESSION['nama_belakang']) ? $_SESSION['nama_belakang'] : ''; ?>">                                
                  </div>
                </form>
              </div>
              <div class="ms-3 text-secondary"><p class="mb-0 fs-5">No. KTP</p></div>
              <div class="ms-3 mb-5">
                <form action=" " method="POST">
                  <div class="input-group">
                    <input type="text" class="form-control" style="height: 35px;" name="no_ktp" id="no_ktp" value="<?php echo isset($_SESSION['no_ktp']) ? $_SESSION['no_ktp'] : ''; ?>">                                
                  </div>
                </form>
                <div class="btn-layer"></div>
              <input type="submit" value="Dafftar">
            </div>
                 </form>
              </div>

                            <button class="btn btn-primary mt-3 rounded-4 align-self-end me-4"  id="modalBtn" style="width: 100px; height: 40px; --bs-btn-font-size: 1.3rem;" data-toggle="modal" data-target="#inputModal">Simpan</button>

              
               <!--Modal -->
              <div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="myModalLabel">Konfirmasi</h5>
                      <button id="close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Yakin Ingin Menyimpan?
                    </div>
                    <div class="modal-footer">
                      <button id="close4" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <form action=" ">
                      <input type="submit" class="btn btn-primary">Save changes</button></form>
                    </div>
                  </div>
                </div>
              </div>
                              <!--</form>-->

<style>
  .modal {
    margin-top: 300px;
  }
</style>
              </script>

            </div>
          </div>
        </div>        
      </div>
    </div>
    <!-- ENF OF MAIN -->


    <!-- FOOTER -->
    <div>
        <section class="footer-page" >
              <div class="container">
                <div class="row content justify-content-between">
                  <div class="col-lg-4 col-sm-12 logo-wrapper flex-column align-items-center text-lg-start text-center align-items-lg-start">
                    <!-- <img height="70px" class="ms-lg-4 ps-lg-3" src="./page-assets/pesona11.png" alt=""/> -->
        
                    <h2 style=" color: white; font-weight: 700 !important; font-size: 30px;">Pesona Lokal</h2>
                    <p style="color: rgba(255, 255, 255, 0.747);width: 300px; margin-top: 5px;margin-bottom: 90px; font-family: monsterart; font-size: 15px;">Platform destinasi wisata Daerah Istimewa Yogyakarta sebagai promosi citra daerah, dengan beragam fitur menarik.</p>
        
                    
                    <div class="d-flex social mt-4">
                        <a target="_blank" href="//www.facebook.com/pesona.lokal.official " title="Facebook" class="social-link">
                          <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a target="_blank" href="//twitter.com/pesonalokal" title="Twitter" class="social-link">
                          <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a target="_blank" href="//instagram.com/pesona.lokal/" title="Instagram" class="social-link">
                          <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a target="_blank" href="//www.youtube.com/c/pesonalokalofficial" title="Youtube" class="social-link">
                          <i class="fa-brands fa-youtube"></i>
                        </a>
                        <a target="_blank" href="https://www.tiktok.com/@pesonalokaljogja" title="Tiktok" class="social-link">
                            <img src="./assets/tiktok-brands.svg" width="60%">
                        </a>
                    </div>
                  </div>
                    <div class="col-lg-8 col-sm-12 flex-wrap text-center d-flex links justify-content-center justify-content-lg-end align-items-center footer-revamp-link">
                        
                             <div class="microsite-links row align-items-center w-100">
        
                            <div class="maps">
                                
                                <div class="mapouter"><div class="gmap_canvas">
                                    <p class="txt">Kantor Kami</p>
                                    <iframe width="210" height="160" id="gmap_canvas" src="https://maps.google.com/maps?q=amikom yogyakarta&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        
                                </div></div>
                            </div>
                             
                    </div>
                    <div class="nav-footer">
                      <a href="#">Home</a>
                      <a href="#">Destinasi</a>
                      <a href="#">Bantuan</a>
                      <a href="#">Kritik dan Saran</a>
                      <a href="#">Tentang Kami</a>
                  </div>                   
                </div>
        
        
              </div>
        
            <div class="row mx-0 pt-5 mb-n4 footer-text mt-5 justify-content-center align-items-center" style="border-top : #ffffff solid 1px">
              <div class="col-9 text-center">
                <div class="container" style="height: 50px;">
                  <p class="explanation mx-n4">
                           Copyright <i class="fa-regular fa-copyright"></i> Togog 2023. All rights reserved
                  </p>
                </div>
              </div>
            </div>
            </section>
        </div>
        <!-- FOOTER END -->

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- EXTERNAL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <!-- My JavaScript -->
      <script src="./js/template.js"></script>
      <script type="text/javascript" src="./js/modal.js"></script>
      

      <script> $(document).ready(function() {
        $('[title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."]').hide();
      });</script>
  </body>
</html>
