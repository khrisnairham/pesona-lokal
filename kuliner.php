<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kuliner - Pesona Lokal</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
  </script>
  <!-- Feathere Icons --> 
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet" />

  <!-- My styles -->

  <link rel="stylesheet" href="./css/strap.css">
  <link rel="stylesheet" href="./css/kuliner.css">
  <link rel="stylesheet" href="./css/bootmin.css">
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./css/boot.css">
  <style>
    body {
      color: #1C1C1C;
    }
  </style>
</head>

<body>
  <!-- Navbar start -->
  <nav class="navbar2">
    <a href="home.html" class="navbar2-logo"><img src="./assets/pesona.PNG" alt=""></a>

    <div class="navbar2-nav">
      <a href="destinasi.html" style="text-decoration: none;">Destinasi</a>
      <a href="reservasi.html" style="text-decoration: none;">Reservasi</a>
      <a href="petaWisata.html" style="text-decoration: none;">Peta Wisata</a>
      <a href="loginSignUp.html" style="color: #FF8E2B; text-decoration: none;">Masuk</a>
    </div>

    <div class="navbar2-extra">
      <a href="#" id="search"><i data-feather="search"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>
  </nav>
  <!-- Navbar end -->

  <?php
  // Koneksi ke database
  $host = "localhost";
  $username = "root";
  $database = "pesona_lokal";
  $password = "";

  $conn = new mysqli($host, $username, $password, $database);
  if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
  }

  ?>
  <!-- MAIN -->
  <section class="mt-custom-15">
    <main class="content p-4 ms-5 ps-5">
      <div class="container">
        <h2> Kuliner</h2>
        <p class="m-0 fs-2 mb-5 ms-5">Informasi seputar kuliner yang dapat anda kunjungi</p>
      </div>
    </main>
  </section>

  <div class="container">
    <!--search-->
    <div class="row mb-5 pb-4 justify-content-end mb-4">
      <form action="/action_page.php" style="width: 550px; content: '\f099';">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari kuliner" name="search" style="font-size: 16px; letter-spacing: 2px;">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
          </div>
        </div>
      </form>
    </div>
    <!--end search-->
    <form action="search.php" method="GET">
    <input type="text" name="keyword" placeholder="Masukkan kata kunci...">
    <input type="submit" value="Cari">
</form>

    <?php
    $query = "SELECT * FROM kuliner where id_kul = '1'"; // Ganti dengan nama tabel Anda
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <div class="row mb-5 pb-4 pt-5">
        <div class="col-2">
          <a href="#"><img src="assets/kuli1.png" alt=""></a>
        </div>
        <div class="col-3">
          <a href="#" class="text-decoration-none text-dark">
            <p class="fw-semibold fs-3"><?php echo $row['nama_kul']; ?></p>
          </a>
          <p class="fs-5 text-dark"><?php echo $row['desk_kul']; ?></p>
        </div>
      <?php
    }     ?>

      <?php
      $query = "SELECT * FROM kuliner where id_kul = '2'"; // Ganti dengan nama tabel Anda
      $result = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <div class="offset-2 col-2">
          <a href="#"><img src="assets/kuli2.png" alt=""></a>
        </div>
        <div class="col-3">
          <a href="#" class="text-decoration-none text-dark">
            <p class="fw-semibold fs-3"><?php echo $row['nama_kul']; ?></p>
          </a>
          <p class="fs-5"><?php echo $row['desk_kul']; ?></p>
        </div>
      </div> <?php
            }     ?>

    <?php
    $query = "SELECT * FROM kuliner where id_kul = '3'"; // Ganti dengan nama tabel Anda
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <div class="row mb-5 pb-4">
        <div class="col-2">
          <a href="#"><img src="assets/kuli3.png" alt=""></a>
        </div>
        <div class="col-3">
          <a href="#" class="text-decoration-none text-dark">
            <p class="fw-semibold fs-3"><?php echo $row['nama_kul']; ?></p>
          </a>
          <p class="fs-5"><?php echo $row['desk_kul']; ?></p>
        </div> <?php
              }     ?>
      <?php
      $query = "SELECT * FROM kuliner where id_kul = '4'"; // Ganti dengan nama tabel Anda
      $result = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <div class="offset-2 col-2">
          <a href="#"><img src="assets/kuli4.png" alt=""></a>
        </div>
        <div class="col-3">
          <a href="#" class="text-decoration-none text-dark">
            <p class="fw-semibold fs-3"><?php echo $row['nama_kul']; ?></p>
          </a>
          <p class="fs-5"><?php echo $row['desk_kul']; ?></p>
        </div>
      </div><?php
          }     ?>

    <?php
    $query = "SELECT * FROM kuliner where id_kul = '5'"; // Ganti dengan nama tabel Anda
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <div class="row mb-5 pb-4">
        <div class="col-2">
          <a href="#"><img src="assets/kuli5.png" alt=""></a>
        </div>
        <div class="col-3">
          <a href="#" class="text-decoration-none text-dark">
            <p class="fw-semibold fs-3"><?php echo $row['nama_kul']; ?></p>
          </a>
          <p class="fs-5"><?php echo $row['desk_kul']; ?></p>
        </div> <?php
              }     ?>
      <?php
      $query = "SELECT * FROM kuliner where id_kul = '6'"; // Ganti dengan nama tabel Anda
      $result = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <div class="offset-2 col-2">
          <a href="#"><img src="assets/kuli6.png" alt=""></a>
        </div>
        <div class="col-3">
          <a href="#" class="text-decoration-none text-dark">
            <p class="fw-semibold fs-3"><?php echo $row['nama_kul']; ?></p>
          </a>
          <p class="fs-5"><?php echo $row['desk_kul']; ?></p>
        </div>
      </div> <?php
            }     ?>

    <?php
    $query = "SELECT * FROM kuliner where id_kul = '7'"; // Ganti dengan nama tabel Anda
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <div class="row mb-5 pb-4">
        <div class="col-2">
          <a href="#"><img src="assets/kuli7.png" alt=""></a>
        </div>
        <div class="col-3">
          <a href="#" class="text-decoration-none text-dark">
            <p class="fw-semibold fs-3"><?php echo $row['nama_kul']; ?></p>
          </a>
          <p class="fs-5"><?php echo $row['desk_kul']; ?></p>
        </div> <?php
              }     ?>
      <?php
      $query = "SELECT * FROM kuliner where id_kul = '8'"; // Ganti dengan nama tabel Anda
      $result = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <div class="offset-2 col-2">
          <a href="#"><img src="assets/kuli8.png" alt=""></a>
        </div>
        <div class="col-3">
          <a href="#" class="text-decoration-none text-dark">
            <p class="fw-semibold fs-3"><?php echo $row['nama_kul']; ?></p>
          </a>
          <p class="fs-5"><?php echo $row['desk_kul']; ?></p>
        </div>
      </div> <?php
            }     ?>

    <?php
    $query = "SELECT * FROM kuliner where id_kul = '9'"; // Ganti dengan nama tabel Anda
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <div class="row mb-5 pb-4">
        <div class="col-2">
          <a href="#"><img src="assets/kuli9.png" alt=""></a>
        </div>
        <div class="col-3">
          <a href="#" class="text-decoration-none text-dark">
            <p class="fw-semibold fs-3"><?php echo $row['nama_kul']; ?></p>
          </a>
          <p class="fs-5"><?php echo $row['desk_kul']; ?></p>
        </div> <?php
              }     ?>
      <?php
      $query = "SELECT * FROM kuliner where id_kul = '10'"; // Ganti dengan nama tabel Anda
      $result = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <div class="offset-2 col-2">
          <a href="#"><img src="assets/kuli10.png" alt=""></a>
        </div>
        <div class="col-3">
          <a href="#" class="text-decoration-none text-dark">
            <p class="fw-semibold fs-3"><?php echo $row['nama_kul']; ?></p>
          </a>
          <p class="fs-5"><?php echo $row['desk_kul']; ?></p>
        </div>
      </div> <?php
            }     ?>

    <?php
    $query = "SELECT * FROM kuliner where id_kul = '11'"; // Ganti dengan nama tabel Anda
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <div class="row mb-5 pb-4">
        <div class="col-2">
          <a href="#"><img src="assets/kuli11.png" alt=""></a>
        </div>
        <div class="col-3">
          <a href="#" class="text-decoration-none text-dark">
            <p class="fw-semibold fs-3"><?php echo $row['nama_kul']; ?></p>
          </a>
          <p class="fs-5"><?php echo $row['desk_kul']; ?></p>
        </div> <?php
              }     ?>
      <?php
      $query = "SELECT * FROM kuliner where id_kul = '12'"; // Ganti dengan nama tabel Anda
      $result = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <div class="offset-2 col-2">
          <a href="#"><img src="assets/kuli12.png" alt=""></a>
        </div>
        <div class="col-3">
          <a href="#" class="text-decoration-none text-dark">
            <p class="fw-semibold fs-3"><?php echo $row['nama_kul']; ?></p>
          </a>
          <p class="fs-5"><?php echo $row['desk_kul']; ?></p>
        </div>
      </div> <?php
            }     ?>

    <?php
    $query = "SELECT * FROM kuliner where id_kul = '13'"; // Ganti dengan nama tabel Anda
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <div class="row mb-5 pb-4">
        <div class="col-2">
          <a href="#"><img src="assets/kuli13.png" alt=""></a>
        </div>
        <div class="col-3">
          <a href="#" class="text-decoration-none text-dark">
            <p class="fw-semibold fs-3"><?php echo $row['nama_kul']; ?></p>
          </a>
          <p class="fs-5"><?php echo $row['desk_kul']; ?></p>
        </div> <?php
              }     ?>
      <?php
      $query = "SELECT * FROM kuliner where id_kul = '14'"; // Ganti dengan nama tabel Anda
      $result = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <div class="offset-2 col-2">
          <a href="#"><img src="assets/kuli14.png" alt=""></a>
        </div>
        <div class="col-3">
          <a href="#" class="text-decoration-none text-dark">
            <p class="fw-semibold fs-3"><?php echo $row['nama_kul']; ?></p>
          </a>
          <p class="fs-5"><?php echo $row['desk_kul']; ?></p>
        </div>
      </div> <?php
            }     ?>

    <?php
    $query = "SELECT * FROM kuliner where id_kul = '15'"; // Ganti dengan nama tabel Anda
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <div class="row mb-5 pb-4">
        <div class="col-2">
          <a href="#"><img src="assets/kuli15.png" alt=""></a>
        </div>
        <div class="col-3">
          <a href="#" class="text-decoration-none text-dark">
            <p class="fw-semibold fs-3"><?php echo $row['nama_kul']; ?></p>
          </a>
          <p class="fs-5"><?php echo $row['desk_kul']; ?></p>
        </div> <?php
              }     ?>
      <?php
      $query = "SELECT * FROM kuliner where id_kul = '16'"; // Ganti dengan nama tabel Anda
      $result = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <div class="offset-2 col-2">
          <a href="#"><img src="assets/kuli16.png" alt=""></a>
        </div>
        <div class="col-3">
          <a href="#" class="text-decoration-none text-dark">
            <p class="fw-semibold fs-3"><?php echo $row['nama_kul']; ?></p>
          </a>
          <p class="fs-5"><?php echo $row['desk_kul']; ?></p>
        </div>
      </div><?php
          }     ?>

    <?php
    $query = "SELECT * FROM kuliner where id_kul = '17'"; // Ganti dengan nama tabel Anda
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <div class="row mb-5 pb-4">
        <div class="col-2">
          <a href="#"><img src="assets/kuli17.png" alt=""></a>
        </div>
        <div class="col-3">
          <a href="#" class="text-decoration-none text-dark">
            <p class="fw-semibold fs-3"><?php echo $row['nama_kul']; ?></p>
          </a>
          <p class="fs-5"><?php echo $row['desk_kul']; ?></p>
        </div> <?php
              }     ?>
      <?php
      $query = "SELECT * FROM kuliner where id_kul = '18'"; // Ganti dengan nama tabel Anda
      $result = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <div class="offset-2 col-2">
          <a href="#"><img src="assets/kuli18.png" alt=""></a>
        </div>
        <div class="col-3">
          <a href="#" class="text-decoration-none text-dark">
            <p class="fw-semibold fs-3"><?php echo $row['nama_kul']; ?></p>
          </a>
          <p class="fs-5"><?php echo $row['desk_kul']; ?></p>
        </div>
      </div><?php
          }     ?>
  </div>



  <!-- ENF OF MAIN -->


  <!-- FOOTER -->
  <div>
    <section class="footer-page">
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

                <div class="mapouter">
                  <div class="gmap_canvas">
                    <p class="txt">Kantor Kami</p>
                    <iframe width="210" height="160" id="gmap_canvas" src="https://maps.google.com/maps?q=amikom yogyakarta&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                  </div>
                </div>
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
              <p class="explanation mx-n4" style=" padding-right: 280px;">
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

  <script>
    $(document).ready(function() {
      $('[title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."]').hide();
    });
  </script>

</body>

</html>