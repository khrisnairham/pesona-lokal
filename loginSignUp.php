
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignUp Register Page - Pesona Lokal</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
  </script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/login.css">
<!--<!DOCTYPE html>-->
<!--<html>-->
    <!-- <script type="text/javascript">-->
    <!--    function prevenBack(){window.history.forward()};-->
    <!--    setTimeout("prevenBack()",0);-->
    <!--    window.onunload=function(){null;}-->
    <!--</script>-->
<!--</html>   -->
</head>

<body>

<div class="wrapper">
  <div class="text-center"><a href="home.html"><img src="./assets/Header_Pesona Lokal.png" alt=""></a></div>
      <div class="title-text">
        <!-- <div class="title signup">Form Registrasi</div> -->
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Daftar</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
              

          <form id="loginform" action="login.php" method="POST" class="login">
            <pre>
            </pre>
            <div id="loginAlertContainer"></div>
            <div class="field">
              <input type="text" name="email" placeholder="Masukan Email " required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Masukan Password" required>
            </div>
            <div class="pass-link"><a href="lupaPass.html">Lupa password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit"  value="Login" >
            </div>
          </form>
          
          <form  method="POST" id="registerForm" action="register.php" class="signup" >
                     <div id="registerAlertContainer"></div>

            <div class="field">
               
              <input name='nama' type="text"  placeholder="Masukan Nama" required>
            </div>
            <div class="field">
              <input  type="text" name="email" placeholder="Masukan Email" required>
            </div>
            <div class="field"> 
              <input type="password" name="password" id="password" placeholder="Masukan Password" required>
            </div>
            <div class="field">
                
              <input type="password" id="confirm_password" name="confirm_password" placeholder="Ulangi password" required>
            </div>

            <!-- ADD Kode -->
            <div class="field">
                
              <input type="password" id="confirm_id" name="confirm_id" placeholder="Masukan Kode Unik Admin" required>
            </div>

            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Dafftar">
            </div>
            <div class="signup-link">Sudah punya akun? <a href="">Login</a></div>
          </form>
          <p id="error_message" style="color: red;"></p>
        </div>
      </div>
    </div>
  <script>
            document.getElementById("loginform").addEventListener("submit", function(event) {
            event.preventDefault(); // Mencegah pengiriman form secara default
            loginUser();  });
            
            document.getElementById("registerForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Mencegah pengiriman form secara default
            registerUser();
            });
    //dinggo login
        function loginUser() {
            var form = document.getElementById("loginform");
            var formData = new FormData(form);

            var loginAlertContainer = document.getElementById("loginAlertContainer");
            loginAlertContainer.innerHTML = ""; // Menghapus semua alert login sebelumnya

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "login.php", true);
            xhr.onload = function() {
                 if (xhr.status === 200) {
            var response = xhr.responseText.trim();
                if {
                    showAlert("danger", "Registrasi gagal. " + response, registerAlertContainer);
                    }
                } else {
                    showAlert("danger", "Terjadi kesalahan. Silakan coba lagi.", registerAlertContainer);
                    }
                };
            xhr.send(formData);
        }

    //fungsi dinggo register
    function registerUser() {
            var form = document.getElementById("registerForm");
            var formData = new FormData(form);

            var registerAlertContainer = document.getElementById("registerAlertContainer");
            registerAlertContainer.innerHTML = ""; // Menghapus semua alert registrasi sebelumnya
        
            var xhr = new XMLHttpRequest();
             xhr.open("POST", "register.php", true);
            xhr.onload = function() {
                if (xhr.status === 200) {
            var response = xhr.responseText.trim();
                if (response === 'Registrasi berhasil!') {
                window.location.href = "loginSignUp.html"; // Mengarahkan ke halaman selanjutnya
                } else {
                    showAlert("danger", "Registrasi gagal. " + response, registerAlertContainer);
                    }
                } else {
                    showAlert("danger", "Terjadi kesalahan. Silakan coba lagi.", registerAlertContainer);
                    }
                };
        xhr.send(formData);
    }
        //dinggo nampilke pesan eror 
         function showAlert(type, message, container) {
 
            // membuat  elemen Alert Bootstrap
            var alertElement = document.createElement("div");
            alertElement.classList.add("alert", "alert-" + type, "alert-dismissible", "fade", "show");
            alertElement.setAttribute("role", "alert");

            // Tambahkan pesan dan tombol close ke dalam elemen Alert
            alertElement.innerHTML =
                '<strong>' + message + '</strong>' +
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                '<span aria-hidden="true">&times;</span>' +
                '</button>';

            // Tambahkan elemen Alert ke dalam container
             container.appendChild(alertElement);
        }
</script>
  <script  src="./js/login.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
      </script>
      <script> $(document).ready(function() {
        $('[title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."]').hide();
      });</script>

</body>
</html>