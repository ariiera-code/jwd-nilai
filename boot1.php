<?php
session_start();
include 'koneksi.php';
// if ($_SESSION['username'] == '' || $_SESSION['level'] != '1') {
//   ?>
//   <script language="JavaScript">
//     document.location = 'index.php';
//   </script>
// <?php
// } else {
  ?>
  <!doctype html>
  <html class="no-js" lang="">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard Nilai</title>
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
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
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
                      <h2>Data Nilai Siswa DTS KOMINFO</h2>
                      <p>Selamat datang di Data Nilai Siswa DTS</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                  <div class="breadcomb-report">
                    <button type="button" data-toggle="modal" data-target="#myModalone" data-placement="left" title="Tambah Data" class="btn"><i class="notika-icon notika-sent"></i></button>
                    <div class="modal fade" id="myModalone" role="dialog">
                      <div class="modal-dialog modals-default">
                        <div class="modal-content" style="text-align: left;">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body">
                            <h2>Modal title</h2>
                            <p>Curabitur blandit mollis lacus. Nulla sit amet est. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Cras sagittis.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Save changes</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalone">Modal Default</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="data-table-list">
              <div class="table-responsive">
                <table id="data-table-basic" class="table table-striped">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>NIM</th>
                      <th>NAMA</th>
                      <th>ALAMAT</th>
                      <th>N. HARIAN</th>
                      <th>NILAI MID</th>
                      <th>NILAI FINAL</th>
                      <th>DENGAN HURUF</th>
                      <th>PREDIKAT</th>
                      <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $result = mysqli_query($konek, "SELECT * FROM nilais order by id ASC");
                      $total = $result->num_rows;
                      $no = 1;
                      while ($user_data = mysqli_fetch_array($result)) {
                        $n1 = $user_data['n1'];
                        $n2 = $user_data['n2'];
                        $n3 = $user_data['n3'];

                        $sum = floatval($n1) + floatval($n2) + floatval($n3);
                        $average = $sum / 3;
                        $grade;
                        $predikat;

                        if ($average > 89) {
                          $grade = "A";
                          $predikat = "MEMUASKAN";
                        } else if ($average > 79) {
                          $grade = "B";
                          $predikat = "BAIK";
                        } else if ($average > 69) {
                          $grade = "C";
                          $predikat = "CUKUP";
                        } else if ($average > 59) {
                          $grade = "D";
                          $predikat = "KURANG";
                        } else {
                          $grade = "E";
                          $predikat = "GAGAL";
                        }
                        ?>
                      <tr>
                        <th class="text-center"><?= $no++; ?></th>
                        <td><?= $user_data['nim']; ?></td>
                        <td><?= $user_data['nama']; ?></td>
                        <td><?= $user_data['alamat']; ?></td>
                        <td><?= $n1; ?></td>
                        <td><?= $n2; ?></td>
                        <td><?= $n3; ?></td>
                        <td><?= $grade; ?></td>
                        <td><?= $predikat; ?></td>
                        <td>
                          <a href='edit.php?id=<?= $user_data['id']; ?>'>Edit</a>
                          <a href='delete.php?id=<?= $user_data['id']; ?>'>Delete</a>
                        </td>
                      </tr>

                    <?php
                      }
                      ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>NO</th>
                      <th>NIM</th>
                      <th>NAMA</th>
                      <th>ALAMAT</th>
                      <th>N. HARIAN</th>
                      <th>NILAI MID</th>
                      <th>NILAI FINAL</th>
                      <th>DENGAN HURUF</th>
                      <th>PREDIKAT</th>
                      <th>ACTION</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Data Table area End-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="footer-copy-right">
              <p>Copyright © 2021
                Kelompok 3</p>
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
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
  </body>

  </html>

<?php
// }
?>