<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login Register | Kelompok 3</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- font awesome CSS
		============================================ -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.css">
  <link rel="stylesheet" href="css/owl.transitions.css">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- wave CSS
		============================================ -->
  <link rel="stylesheet" href="css/wave/waves.min.css">
  <!-- Notika icon CSS
		============================================ -->
  <link rel="stylesheet" href="css/notika-custom-icon.css">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="css/main.css">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="style.css">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>


  <title>Login Form</title>

</head>


<body>
  <div class="login-content">
    <!-- Login -->
    <div class="nk-block toggled" id="l-login">
      <form id="login-form" class="form" method="post" action="cek.php">
        <div class="nk-form">
          <h3>Sign-in</h3>
          <p>Silahkan sign-in terlebih dahulu untuk melihat data.</p>
          <div class="input-group">
            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
            <div class="nk-int-st">
              <input type="text" class="form-control" placeholder="Username" name="username">
            </div>
          </div>
          <div class="input-group mg-t-15">
            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
            <div class="nk-int-st">
              <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
          </div>
          <div style="margin-top: 1rem;">
            <p style="color:grey;text-align:center;margin: 0 0;">username: admin | password: admin</p>
            <p style="color:grey;text-align:center;margin: 0 0;">username: user | password: user</p>
          </div>
          <button type="submit" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></button>
      </form>
    </div>

    <div class="nk-navigation nk-lg-ic">
      <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Register</span></a>
    </div>
  </div>

  <!-- Register -->
  <?php

  // include database connection file
  include_once "koneksi.php";

  // Check If form submitted, insert form data into users table.
  if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pasmd5 = md5($password);


    // Insert user data into table
    $ambil_id = mysqli_query($konek, "SELECT id FROM user ORDER BY id DESC LIMIT 1");
    $row_id = mysqli_fetch_array($ambil_id);
    $hasil_id = $row_id['id'];
    $id = $hasil_id + 1;
    $result = mysqli_query($konek, "INSERT INTO user VALUES('$id','$username','$pasmd5', 2)");
    header('location:index.php');
  }
  ?>
  <div class="nk-block" id="l-register">
    <div class="nk-form">
      <form id="login-form" class="form" method="post" action="index.php">
        <h3>Buat Akun</h3>
        <p>Silahkan buat akun jika belum mempunyai akun.</p>
        <div class="input-group">
          <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
          <div class="nk-int-st">
            <input type="text" class="form-control" placeholder="Username" name="username">
          </div>
        </div>

        <div class="input-group mg-t-15">
          <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
          <div class="nk-int-st">
            <input type="password" class="form-control" placeholder="Password" name="password">
          </div>
        </div>

        <button type="submit" name="register" value="Register" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></button>
      </form>
    </div>

    <div class="nk-navigation rg-ic-stl">
      <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Sign in</span></a>
    </div>
  </div>

  <!-- Login Register area End-->

  <!-- Login Register area End-->
  <!-- jquery
		============================================ -->
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <!-- bootstrap JS
		============================================ -->
  <script src="js/bootstrap.min.js"></script>
  <!-- wow JS
		============================================ -->
  <script src="js/wow.min.js"></script>
  <!-- price-slider JS
		============================================ -->
  <script src="js/jquery-price-slider.js"></script>
  <!-- owl.carousel JS
		============================================ -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- scrollUp JS
		============================================ -->
  <script src="js/jquery.scrollUp.min.js"></script>
  <!-- meanmenu JS
		============================================ -->
  <script src="js/meanmenu/jquery.meanmenu.js"></script>
  <!-- counterup JS
		============================================ -->
  <script src="js/counterup/jquery.counterup.min.js"></script>
  <script src="js/counterup/waypoints.min.js"></script>
  <script src="js/counterup/counterup-active.js"></script>
  <!-- mCustomScrollbar JS
		============================================ -->
  <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <!-- sparkline JS
		============================================ -->
  <script src="js/sparkline/jquery.sparkline.min.js"></script>
  <script src="js/sparkline/sparkline-active.js"></script>
  <!-- flot JS
		============================================ -->
  <script src="js/flot/jquery.flot.js"></script>
  <script src="js/flot/jquery.flot.resize.js"></script>
  <script src="js/flot/flot-active.js"></script>
  <!-- knob JS
		============================================ -->
  <script src="js/knob/jquery.knob.js"></script>
  <script src="js/knob/jquery.appear.js"></script>
  <script src="js/knob/knob-active.js"></script>
  <!--  Chat JS
		============================================ -->
  <script src="js/chat/jquery.chat.js"></script>
  <!--  wave JS
		============================================ -->
  <script src="js/wave/waves.min.js"></script>
  <script src="js/wave/wave-active.js"></script>
  <!-- icheck JS
		============================================ -->
  <script src="js/icheck/icheck.min.js"></script>
  <script src="js/icheck/icheck-active.js"></script>
  <!--  todo JS
		============================================ -->
  <script src="js/todo/jquery.todo.js"></script>
  <!-- Login JS
		============================================ -->
  <script src="js/login/login-action.js"></script>
  <!-- plugins JS
		============================================ -->
  <script src="js/plugins.js"></script>
  <!-- main JS
		============================================ -->
  <script src="js/main.js"></script>

</body>

</html>