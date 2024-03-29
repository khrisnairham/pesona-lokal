<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HomeUser - Pesona Lokal</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <!-- Feathere Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <?php
    // Koneksi ke database
     $host = "localhost";
$username = "id20751189_pesonalokal2023";
$database = "id20751189_pesonalokal";
$password = "Pesonalokal2023.";

$conn = new mysqli($host , $username, $password, $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

    ?>
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
    <link rel="stylesheet" href="./css/main.css">
 
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar2">
        <a href="home.html" class="navbar2-logo"><img src="./assets/pesona.PNG" alt=""></a>

      <div class="navbar2-nav">
        <a href="destinasi.html" style="text-decoration: none;">Destinasi</a>
        <a href="tiket.html" style="text-decoration: none;">Reservasi</a>
        <a href="petaWisata.html" style="text-decoration: none;">Peta Wisata</a>
        <div class="btn-group" style="padding-left: -200px;">
          <button type="button" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fas fa-user-circle fa-lg" style="font-size: 30px; padding-left: 20px;color: #012467;"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
            <a class="dropdown-item text-decoration-none" href="home.html" style="width: fit-content;"><i class="fas fa-home" style="color: #012467;"></i>&ensp;Home</a>
            <a class="dropdown-item text-decoration-none" href="profile.html" style="width: fit-content;"><i class="fas fa-user" style="color: #012467;"></i>&ensp;Akun</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-decoration-none" href="loginSignUp.html" style="width: fit-content;"><i class="fas fa-sign-out" style="color: #012467;"></i>&ensp;Keluar</a>
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
  <section class="hero" id="home">
    <main class="content">
      <div class="slider">
        <div class="container">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="./assets/rectangle-3.png" alt="TUGU" style="width:100%;">
                <?php
    $query = "SELECT * FROM home_title_komen where id = '1'"; // Ganti dengan nama tabel Anda
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="carousel-caption">
                  <p class="text-white"><?php echo $row['tit_slider']; ?></p>
                </div>
        <?php
        }    ?>
               
              </div>
        
              <div class="item">
                <img src="./assets/gbrslider (1).png" alt="Pantai" style="width:100%;">
                <?php
    $query = "SELECT * FROM home_title_komen where id = '2'"; // Ganti dengan nama tabel Anda
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="carousel-caption">
                  <p class="text-white"><?php echo $row['tit_slider']; ?></p>
                </div>
        <?php
        }    ?>
                
              </div>
            
              <div class="item">
                <img src="./assets/gbrslider.png" alt="Kraton" style="width:100%;">
                <?php
    $query = "SELECT * FROM home_title_komen where id = '3'"; // Ganti dengan nama tabel Anda
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="carousel-caption">
                  <p class="text-white"><?php echo $row['tit_slider']; ?></p>
                </div>
        <?php
        }    ?>
            </div>
        
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </main>
  </section>
  <!-- PILIHAN FITUR -->
  <div class="container">
      <h2 id="h2">Kategori</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <a class="text-decoration-none" href="destinasi.html">
              <img src="./assets/rectangle-5.png" alt="Lights">
              <div class="caption" style="padding: 1px;">
                <p>Destinasi</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a class="text-decoration-none" href="kuliner.html">
              <img src="./assets/rectangle-6.png" alt="Nature">
              <div class="caption" style="padding: 1px;">
                <p>Kuliner</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a class="text-decoration-none" href="akomo.html">
              <img src="./assets/rectangle-7.png" alt="Fjords">
              <div class="caption" style="padding: 1px;">
                <p>Akomodasi</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a class="text-decoration-none" href="tiket.html">
              <img src="./assets/image-21.png" alt="Fjords" >
              <div class="caption" style="padding: 1px;">
                <p>Tiket</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a class="text-decoration-none" href="souvenir.html">
              <img src="./assets/rectangle-10.png" alt="Fjords">
              <div class="caption" style="padding: 1px;">
                <p>Souvenir</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a class="text-decoration-none" href="event.html">
              <img src="./assets/rectangle-8.png" alt="Fjords">
              <div class="caption" style="padding: 1px;">
                <p>Event</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- END OF PILIHAN FITUR -->
    

    <!-- REKOMENDASI WISATA  -->
    <div class="container my-5 backg">
      <h2>Rekomendasi Wisata</h2>       
      <?php
        $query = "SELECT * FROM home_title_rekomen where id_title = '1'"; // Ganti dengan nama tabel Anda
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
?>
          <div class="row opacity-100 shadow p-3 mb-5 bg-white" style="background: #ffffffb9; border-radius: 10px;">
        <div class="col-md-4" style="margin-left: inherit;">
        <img class="w-100 shadow" alt="Responsive image" src="./assets/Rectangle 157.png" />
        </div>
        <div class="col-md-8">
          <div class="p-5 mt-4">
              <!-- <h1 id="titleHome" class="display-5" style="padding-bottom: 30px;">Menikmati Kemegahan Gunung Merapi</h1> -->
            <h1 id="titleHome" class="display-5" style="padding-bottom: 30px;"><?php echo $row['title_rekomendasi']; ?></h1>      
            <p class="lead"><?php echo $row['deskripsi_rekomendasi']; ?></p>
      <?php
        }     ?>     
              
              <a href="#" class="btn btn-outline-dark">Read More</a>
            </div>
        </div>
    </div>        
              
      <?php
        $query = "SELECT * FROM home_title_rekomen where id_title = '2'"; // Ganti dengan nama tabel Anda
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="row opacity-100 shadow p-3 mb-5 bg-white" style="background: #ffffffb9; border-radius: 10px;">
        <div class="col-md-4" style="margin-left: inherit;">
          <img class="w-100 shadow" alt="Responsive image" src="./assets/Rectangle 40.png" />
        </div>
        <div class="col-md-8">
          <div class="p-5 mt-4">
            <h1 id="titleHome" class="display-5" style="padding-bottom: 30px;"><?php echo $row['title_rekomendasi']; ?></h1>      
            <p class="lead"><?php echo $row['deskripsi_rekomendasi']; ?></p>
      <?php
        }     ?>     
              
              <a href="#" class="btn btn-outline-dark">Read More</a>
            </div>
        </div>
    </div>
              
      <?php
        $query = "SELECT * FROM home_title_rekomen where id_title = '3'"; // Ganti dengan nama tabel Anda
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="row opacity-100 shadow p-3 mb-5 bg-white" style="background: #ffffffb9; border-radius: 10px;">
        <div class="col-md-4" style="margin-left: inherit;">
          <img class="w-100 shadow" alt="Responsive image" src="./assets/Rectangle 158.png" />
        </div>
        <div class="col-md-8">
          <div class="p-5 mt-4">
            <h1 id="titleHome" class="display-5" style="padding-bottom: 30px;"><?php echo $row['title_rekomendasi']; ?></h1>      
            <p class="lead"><?php echo $row['deskripsi_rekomendasi']; ?></p>
      <?php
        }    ?>     
              
              <a href="#" class="btn btn-outline-dark">Read More</a>
            </div>
        </div>
    </div>
  </div>

    <!-- END OF REKOMENDASI WISATA -->

    <!-- Pesan Tiket Tujuan -->
    <?php
        $query = "SELECT * FROM home_title_tiket where id = '1'"; // Ganti dengan nama tabel Anda
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="container">
      <h2>Pesan Tiket Wisata Tujuanmu !!</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <a class="text-decoration-none" href="./assets/pesantiket (1).jpg" target="_blank">
              <img src="./assets/pesantiket (1).jpg" alt="Lights" style="width:100%">
              <div class="caption">
                  <p class="pesantiket1"><?php echo $row['title']; ?></p>
                  <p class="pesantiket"><?php echo $row['deskripsi']; ?></p><br>
                  <span><?php echo $row['harga']; ?></span>
              </div>
            </a>
          </div>
        </div>
        <?php
        }    ?>
        <?php
        $query = "SELECT * FROM home_title_tiket where id = '2'"; // Ganti dengan nama tabel Anda
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
        <div class="col-md-4">
          <div class="thumbnail">
            <a class="text-decoration-none" href="./assets/pesantiket (2).png" target="_blank">
              <img src="./assets/pesantiket (2).png" alt="Nature" style="width:100%">
              <div class="caption">
                  <p class="pesantiket1"><?php echo $row['title']; ?></p>
                  <p class="pesantiket"><?php echo $row['deskripsi']; ?></p><br>
                  <span><?php echo $row['harga']; ?></span>
              </div>
            </a>
          </div>
        </div>
        <?php
        }    ?>
        <?php
        $query = "SELECT * FROM home_title_tiket where id = '3'"; // Ganti dengan nama tabel Anda
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
        <div class="col-md-4">
          <div class="thumbnail">
            <a class="text-decoration-none" href="./assets/pesantiket (1).png" target="_blank">
              <img src="./assets/pesantiket (1).png" alt="Fjords" style="width:100%">
              <div class="caption">
                  <p class="pesantiket1"><?php echo $row['title']; ?></p>
                <p class="pesantiket"><?php echo $row['deskripsi']; ?></p><br>
                <span><?php echo $row['harga']; ?></span>
              </div>
            </a>
          </div>
        </div>
        <?php
        }    ?>
      </div>
    </div>
     
    
    <!-- END of Pesan Tiket Tujuan -->

    <!-- KULINER -->
    <div class="container">
      <h2>Ada Rekomendasi Makanan Favorit Nihh</h2>
      <div class="row">
    <?php
    $query = "SELECT * FROM home_title_tiket where id = '1'"; // Ganti dengan nama tabel Anda
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
               <div class="col-md-4">
          <div class="thumbnail">
            <a class="text-decoration-none" href="./assets/kuner (1).png" target="_blank">
              <img src="./assets/kuner (1).png" alt="Lights" style="width:100%">
              <div class="caption">
                  <p class="kuliner"><?php echo $row['title_kuliner']; ?></p>
              </div>
            </a>
          </div>
        </div>
        <?php
        }    ?>
         <?php
    $query = "SELECT * FROM home_title_tiket where id = '2'"; // Ganti dengan nama tabel Anda
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
               <div class="col-md-4">
          <div class="thumbnail">
            <a class="text-decoration-none" href="./assets/kuner (2).png" target="_blank">
              <img src="./assets/kuner (2).png" alt="Lights" style="width:100%">
              <div class="caption">
                  <p class="kuliner"><?php echo $row['title_kuliner']; ?></p>
              </div>
            </a>
          </div>
        </div>
        <?php
        }    ?>
         <?php
    $query = "SELECT * FROM home_title_tiket where id = '3'"; // Ganti dengan nama tabel Anda
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
               <div class="col-md-4">
          <div class="thumbnail">
            <a class="text-decoration-none" href="./assets/kuner (3).png" target="_blank">
              <img src="./assets/kuner (3).png" alt="Lights" style="width:100%">
              <div class="caption">
                  <p class="kuliner"><?php echo $row['title_kuliner']; ?></p>
              </div>
            </a>
          </div>
        </div>
        <?php
        }    ?>
      </div>
    </div>
    <!-- END KULINER -->

    <!-- APAKATA MEREKA  -->\
    <div class="container my-5 backg">
      <h2>Apa Kata Mereka?</h2>
    <?php
    $query = "SELECT * FROM home_title_komen where id = '1'"; // Ganti dengan nama tabel Anda
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
               <div class="row opacity-100" style="background: #ffffffb9; border-radius: 10px;">
        <div class="col-md-4" style="margin-left: inherit;">
          <img class="w-20 mx-auto d-block" style="margin-top: 15px;" alt="Responsive image" src="./assets/mereka (1).png" />
        </div>
        <div class="col-md-8">
          <div class="p-5 mt-0">
              <p class="lead" style="margin-left: -90px; font-size: 22px; font-weight: 300;"><?php echo $row['title']; ?></p>
            </div>
        </div>
    </div>
    <div class="row opacity-100" style="background: #ffffffb9; border-radius: 10px;">
        <div class="col-md-4" style="margin-left: inherit;">
          <img class="w-20 mx-auto d-block" style="margin-top: 15px;" alt="Responsive image" src="./assets/mereka (2).png" />
        </div>
        <div class="col-md-8">
          <div class="p-5 mt-0">
              <p class="lead" style="margin-left: -90px; font-size: 22px; font-weight: 300;"><?php echo $row['title']; ?></p>
            </div>
        </div>
    </div>
    <div class="row opacity-100" style="background: #ffffffb9; border-radius: 10px;">
        <div class="col-md-4" style="margin-left: inherit;">
          <img class="w-20 mx-auto d-block" style="margin-top: 15px;" alt="Responsive image" src="./assets/mereka (3).png" />
        </div>
        <div class="col-md-8">
          <div class="p-5 mt-0">
              <p class="lead" style="margin-left: -90px; font-size: 22px; font-weight: 300;"><?php echo $row['title']; ?></p>
            </div>
        </div>
    </div>
        <?php
        }    ?>

  </div>

    <!-- END OF APAKATA MEREKA -->
  <!-- END OF MAIN -->


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
        
    <script> $(document).ready(function() {
      $('[title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."]').hide();
  });</script>
   
</body>
</html>
