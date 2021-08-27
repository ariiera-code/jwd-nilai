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
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Layout 1 Kolom</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>

  </head>

  <body>

    <header class="container bg-primary text-white">
      <div class="row">
        <div class="col-12 py-4 text-center">
          <h1 class="display-1">Login Level 1</h1>
          <p class="lead">Panduan Belajar Bootstrap untuk Pemula</p>
        </div>
      </div>
    </header>

    <main class="container border">
      <div class="row">
        <div class="col-12 py-5">
          <p><?php echo $_SESSION['username']; ?></p>
          <p><?php echo $_SESSION['level'] ?></p>
          <p><a class="btn btn-danger btn-md" href="logout.php" role="button"> Logout</a></p>
          <div style="padding: 1rem 2rem;">
            <h2 style="color:brown; text-align:center;">REKAP DATA NILAI SISWA DTS KOMINFO – JWD 2021</h2>
            <a href="add.php">Add New User</a><br /><br />

            <table class="datatable table table-striped table-bordered" data-striped="true" data-bordered="true" data-full-pagination="true" data-edit="true" data-sm="true" data-border-color="dark" id="tabel_data">
              <thead>
                <tr>
                  <th class="col">NO</th>
                  <th class="col">NIM</th>
                  <th class="col">NAMA</th>
                  <th class="col">ALAMAT</th>
                  <th class="col">N. HARIAN</th>
                  <th class="col">NILAI MID</th>
                  <th class="col">NILAI FINAL</th>
                  <th class="col">DENGAN HURUF</th>
                  <th class="col">PREDIKAT</th>
                  <th class="col">ACTION</th>
                </tr>
              </thead>
              <tbody>

                <!-- ini yang akan di ulang-->
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
                    <th scope="row" class="text-center"><?= $no++; ?></th>
                    <td><?= $user_data['nim']; ?></td>
                    <td><?= $user_data['nama']; ?></td>
                    <td><?= $user_data['alamat']; ?></td>
                    <td><?= $n1; ?></td>
                    <td><?= $n2; ?></td>
                    <td><?= $n3; ?></td>
                    <td><?= $grade; ?></td>
                    <td><?= $predikat; ?></td>
                    <td>
                      <a href='edit.php?id=$user_data[id]'>Edit</a>
                      <a href='delete.php?id=$user_data[id]'>Delete</a>
                    </td>
                  </tr>
                <?php
                  }
                  ?>
                <!--akhir dari data yang diulang-->

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>

    <footer class="container bg-light">
      <div class="row">
        <div class="col-12 py-4">
          &copy; 2021 Tutorial Bootstrap
        </div>
      </div>
    </footer>

    <script>
      $(document).ready(function() {
        $('#tabel_data').DataTable();
      });
    </script>
  </body>

  </html>
<?php
}
?>