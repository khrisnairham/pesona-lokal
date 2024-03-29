<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pantai Indrayanti - Pesona Lokal</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
  </script>
  <!-- Feathere Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet" />

  <!-- My styles -->
  <link rel="stylesheet" href="../css/boot.css">
  <link rel="stylesheet" href="../css/template.css">
  <link rel="stylesheet" href="../css/strap.css">
  <link rel="stylesheet" href="../css/bootmin.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/bootstrap.css">

</head>

<body>
  <!-- Navbar start -->
  <nav class="navbar2">
    <a href="../home.html" class="navbar2-logo"><img src="../assets/pesona.PNG" alt=""></a>

    <div class="navbar2-nav">
      <a href="../destinasi.html" style="text-decoration: none;">Destinasi</a>
      <a href="../tiket.html" style="text-decoration: none;">Reservasi</a>
      <a href="../petaWisata.html" style="text-decoration: none;">Peta Wisata</a>
      <a href="../loginSignUp.html" style="color: #FF8E2B; text-decoration: none;">Masuk</a>
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
  <!-- <section class="hero" id="home">
      <main class="content"> -->
  <div class="container">
    <?php
    $query = "SELECT * FROM destinasi_sub where id_des_sub = '1'"; // Ganti dengan nama tabel Anda
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <h1 style="margin-top: 150px;"><?php echo $row['nama_des']; ?></h1>
      <br> <img class="mx-auto d-block" src="../assets/indrayantiGbr.png" alt="">
      <br><br><br>
      <p style="font-size: x-large; font-weight: 500;">
        Deskripsi
      </p>
      <p class="paragrafIsi">
        <?php echo $row['desk_des_sub']; {
          echo "<br>";
        } ?>
        <br>
        <?php echo $row['desk2_des_sub']; ?>
      </p> <br><br>
      <p style="font-size: x-large; font-weight: 500;">
        Lokasi
      </p>
      <p class="paragrafIsi"><?php echo $row['lokasi_des_sub']; ?></p>

      <p class="paragrafIsi">&emsp; <?php echo $row['rute_des']; ?></p>

      <p class="paragrafIsi">&emsp; <?php echo $row['rute2_des']; ?></p>

      <p class="paragrafIsi">Rute melalui Wonosari lebih banyak direkomendasikan, karena lebih mudah untuk diikuti oleh pengunjung dari luar Yogya. Santai aja berkendaranya ya, jalannya cukup bagus tapi relatif kecil..
      </p><br><br>
      <iframe class="mx-auto d-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.51465121446!2d110.61037731478035!3d-8.150788644132968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bba2bebcb0c7f%3A0x854daae21d9d9724!2sIndrayanti%20Beach!5e0!3m2!1sen!2sid!4v1688730975623!5m2!1sen!2sid" width="800" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <br><br><br>
      <p style="font-size: x-large; font-weight: 500;">
        Harga Tiket
      </p>
      <p style=" width: auto; font-size: 16px;"><?php echo $row['harga_tiket_des']; ?>
      </p><br><br>
      <div class="col-3 mt-5 mb-5 mx-auto d-block">
        <div class="border border-dark text-center">
          <h5 class="fw-bold"><?php echo $row['nama_des_tiket']; ?></h5>
          <hr>
          <h5 style="color: red;"><?php echo $row['tiket_des_sub']; ?></h5>
          <a href="../tiket.html"><button class="btn btn-primary mt-3 rounded-4 align-self-end me-4" style="width: max-content; height: 35px; --bs-btn-font-size: 1.3rem;">Pesan Sekarang</button></a>
        </div>
      </div> <?php
            }     ?>
  </div>
  <!-- </main>
    </section> -->
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
                <img src="../assets/tiktok-brands.svg" width="60%">
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
  <script src="../js/template.js"></script>

  <script>
    $(document).ready(function() {
      $('[title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."]').hide();
    });
  </script>

</body>

</html>