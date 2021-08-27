<?php
session_start();
include 'koneksi.php';
if ($_SESSION['username'] == '' || $_SESSION['level'] != '1') {
  ?>
  <script language="JavaScript">
    document.location = 'index.php';
  </script>
<?php
} else {
  ?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Form Components | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
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
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- summernote CSS
		============================================ -->
    <link rel="stylesheet" href="css/summernote/summernote.css">
    <!-- Range Slider CSS
		============================================ -->
    <link rel="stylesheet" href="css/themesaller-forms.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- bootstrap select CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap-select/bootstrap-select.css">
    <!-- datapicker CSS
		============================================ -->
    <link rel="stylesheet" href="css/datapicker/datepicker3.css">
    <!-- Color Picker CSS
		============================================ -->
    <link rel="stylesheet" href="css/color-picker/farbtastic.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/chosen/chosen.css">
    <!-- notification CSS
		============================================ -->
    <link rel="stylesheet" href="css/notification/notification.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
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
</head>

<body>
  <!-- Start Header Top Area -->
  <div class="header-top-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="logo-area">
              <a href="#">
                <h3 style="margin:0; color:#fff;padding-top:0.2rem;">Kelompok 3</h3>
              </a>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 d-lg-none">
            <div class="header-top-menu">
              <ul class="nav navbar-nav notika-top-nav">
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-chat"></i></span></a>
                  <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                    <div class="hd-mg-tt">
                      <h2>Profile</h2>
                    </div>
                    <div class="hd-message-info">
                      <a href="#">
                        <div class="hd-message-sn">
                          <div class="hd-message-img chat-img">
                            <img src="img/post/1.jpg" alt="" />
                          </div>
                          <div class="hd-mg-ctn">
                            <h3><?php echo $_SESSION['username']; ?></h3>
                            <p>Role : <?php echo $_SESSION['level'] ?></p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="hd-mg-va">
                      <a href="logout.php">Logout</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="mobile-menu">
              <nav id="dropdown">
                <ul class="mobile-menu-nav">
                  <li><a href="boot1.php">Home</a>
                  </li>
                  <li><a data-toggle="collapse" data-target="#demoevent" href="#">Data</a>
                    <ul id="demoevent" class="collapse dropdown-header-top">
                      <li><a href="inbox.html">Nilai</a></li>
                      <li><a href="view-email.html">User</a></li>
                    </ul>
                  </li>
                  <li><a data-toggle="collapse" data-target="#democrou" href="#">Profile</a>
                    <ul id="democrou" class="collapse dropdown-header-top">
                      <li><a href="animations.html">My Profile</a></li>
                      <li><a href="google-map.html">Logout</a></li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Breadcomb area Start-->
    <div class="breadcomb-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="breadcomb-list">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="breadcomb-wp">
                    <div class="breadcomb-icon">
                      <i class="notika-icon notika-windows"></i>
                    </div>
                    <div class="breadcomb-ctn">
                      <h2>Form Tambah Data</h2>
                      <p>Pendaftaran Data ada disini</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcomb area End-->

  <div class="breadcomb-area">
  <div class="container">  
  <form action="add.php" method="POST">  
    <div class="form-element-list">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group float-lb">
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="nim" value=<?php echo $nim; ?>>
                                        <label class="nk-label">NIM</label>
                                    </div>
                                </div>
                            </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group float-lb">
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="nama" value=<?php echo $nama; ?>>
                                        <label class="nk-label">Nama</label>
                                    </div>
                                </div>
                            </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group float-lb">
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="alamat" value=<?php echo $alamat; ?>>
                                        <label class="nk-label">Alamat</label>
                                    </div>
                                </div>
                            </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group float-lb">
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="n1" value=<?php echo $n1; ?>>
                                        <label class="nk-label">Nilai Harian</label>
                                    </div>
                                </div>
                            </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group float-lb">
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="n2" value=<?php echo $n2; ?>>
                                        <label class="nk-label">Nilai MID TEST</label>
                                    </div>
                                </div>
                            </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group float-lb">
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="n3" value=<?php echo $n3; ?>>
                                        <label class="nk-label">Nilai Final TEST</label>
                                    </div>
                                </div>
                            </div>
    <div class="breadcomb-report" style="text-align: left; padding-left: 1rem;">     
    <button type="submit" name="update" value="update" class="btn notika-btn-success">Update</button>
    <a href="boot1.php"><button type="button" class="btn btn-danger">Cancel</button></a>
    </div>
  </form>
  </div>
  <?php
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $n1 = $_POST['n1'];
  $n2 = $_POST['n2'];
  $n3 = $_POST['n3'];

  // update user data
  $result = mysqli_query($konek, "UPDATE nilais SET nim='$nim',nama='$nama',alamat='$alamat',n1='$n1',n2='$n2',n3='$n3' WHERE id=$id");

  // Redirect to homepage to display updated user in list
  header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($konek, "SELECT * FROM nilais WHERE id=$id");


while ($user_data = mysqli_fetch_array($result)) {
  $nim = $user_data['nim'];
  $nama = $user_data['nama'];
  $alamat = $user_data['alamat'];
  $n1 = $user_data['n1'];
  $n2 = $user_data['n2'];
  $n3 = $user_data['n3'];
}
?>
  </div>
  <!-- End Footer area-->
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
    <!-- Input Mask JS
		============================================ -->
    <script src="js/jasny-bootstrap.min.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- rangle-slider JS
		============================================ -->
    <script src="js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="js/rangle-slider/rangle-active.js"></script>
    <!-- datapicker JS
		============================================ -->
    <script src="js/datapicker/bootstrap-datepicker.js"></script>
    <script src="js/datapicker/datepicker-active.js"></script>
    <!-- bootstrap select JS
		============================================ -->
    <script src="js/bootstrap-select/bootstrap-select.js"></script>
    <!--  color-picker JS
		============================================ -->
    <script src="js/color-picker/farbtastic.min.js"></script>
    <script src="js/color-picker/color-picker.js"></script>
    <!--  notification JS
		============================================ -->
    <script src="js/notification/bootstrap-growl.min.js"></script>
    <script src="js/notification/notification-active.js"></script>
    <!--  summernote JS
		============================================ -->
    <script src="js/summernote/summernote-updated.min.js"></script>
    <script src="js/summernote/summernote-active.js"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  chosen JS
		============================================ -->
    <script src="js/chosen/chosen.jquery.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>
<?php
}
?>