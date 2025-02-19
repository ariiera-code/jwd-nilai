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

      header("Location: boot1.php");
    }

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
  <html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edit Data Siswa</title>
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
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
  </head>

  <body>
    <!-- Start Header Top Area -->
    <div class="header-top-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="logo-area">
              <a href="boot1.php">
                <h3 style="margin:0; color:#fff;padding-top:0.2rem;">Kelompok 3</h3>
              </a>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 d-lg-none">
            <div class="header-top-menu">
              <ul class="nav navbar-nav notika-top-nav">
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-support"></i></span></a>
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
                      <a href="https://github.com/ariiera-code/jwd-nilai" target="__blank">
                        <div class="hd-message-sn">
                          <div class="hd-message-img chat-img">
                            <img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" alt="" />
                          </div>
                          <div class="hd-mg-ctn">
                            <h3>Repository (Drop star, thanks)</h3>
                            <p>https://github.com/ariiera-code/jwd-nilai</p>
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
                      <li><a href="boot1.php">Nilai</a></li>
                      <li><a href="#">User</a></li>
                    </ul>
                  </li>
                  <li><a data-toggle="collapse" data-target="#democrou" href="#">Profile</a>
                    <ul id="democrou" class="collapse dropdown-header-top">
                      <li><a href="#">My Profile</a></li>
                      <li><a href="logout.php">Logout</a></li>
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
                      <h2>Form Edit Data</h2>
                      <p>Pengeditan Data ada disini</p>
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


    <div class="breadcomb-area" style="margin-bottom:0;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="breadcomb-list">
              <form action="edit.php" method="POST">
                <div class="form-example-int">
                  <div class="form-group">
                    <label>NIM</label>
                    <div class="nk-int-st">
                      <input type="text" name="nim" class="form-control input-sm" placeholder="ex. JWD009" value="<?= $nim; ?>">
                    </div>
                  </div>
                </div>
                <div class="form-example-int">
                  <div class="form-group">
                    <label>Nama</label>
                    <div class="nk-int-st">
                      <input type="text" name="nama" class="form-control input-sm" placeholder="ex. Kevin" value="<?= $nama; ?>">
                    </div>
                  </div>
                </div>
                <div class="form-example-int">
                  <div class="form-group">
                    <label>Alamat</label>
                    <div class="nk-int-st">
                      <textarea class="form-control auto-size" name="alamat" rows="2" placeholder="Masukkan alamat siswa..."><?= $alamat; ?></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-example-int">
                  <div class="form-group">
                    <label>Nilai Harian</label>
                    <div class="nk-int-st">
                      <input type="number" name="n1" class="form-control input-sm" placeholder="0 - 100" value="<?= $n1; ?>">
                    </div>
                  </div>
                </div>
                <div class="form-example-int">
                  <div class="form-group">
                    <label>Nilai Mid Test</label>
                    <div class="nk-int-st">
                      <input type="number" name="n2" class="form-control input-sm" placeholder="0 - 100" value="<?= $n2; ?>">
                    </div>
                  </div>
                </div>
                <div class="form-example-int">
                  <div class="form-group">
                    <label>Nilai Funal Test</label>
                    <div class="nk-int-st">
                      <input type="number" name="n3" class="form-control input-sm" placeholder="0 - 100" value="<?= $n3; ?>">
                    </div>
                  </div>
                </div>

                <div class="form-example-int mg-t-15">
                  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                  <button type="submit" name="update" value="update" class="btn" data-type="success">Submit</button>
                  <a href="boot1.php"><button type="button" class="btn btn-danger">Cancel</button></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Start Footer area-->
    <div class="footer-copyright-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="footer-copy-right">
              <p>Copyright © 2021
                <span><a href="https://github.com/ariiera-code/jwd-nilai">DTS Kelompok 3</a></span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- autosize JS
		============================================ -->
    <script src="js/autosize.min.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
  </body>

  </html>
<?php
}
?>