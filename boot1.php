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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

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

            <table class="table table-striped table-bordered" id="tabel-data">
              <thead class="table-dark">
                <tr>
                  <th class="col">NO</th>
                  <th class="col">NIM</th>
                  <th class="col">NAMA</th>
                  <th class="col">ALAMAT</th>
                  <th class="col">N. HARIAN(N1)</th>
                  <th class="col">NILAI MID TEST(N2)</th>
                  <th class="col">NILAI FINAL TEST(N3)</th>
                  <th class="col">DENGAN HURUF</th>
                  <th class="col">PREDIKAT</th>
                  <th class="col">ACTION</th>
                </tr>
              </thead>
              <tbody>

                <!-- ini yang akan di ulang-->
                <?php
                  $no = 0;
                  while ($getdata = mysqli_fetch_assoc($ambil_data)) {
                    $no++;
                    ?>
                  <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $getdata['nim'] ?></td>
                    <td><?php echo $getdata['nama'] ?></td>
                    <td><?php echo $getdata['datelog'] ?></td>
                  </tr>
                <?php
                  }
                  ?>
                <!--akhir dari data yang diulang-->

              </tbody>
            </table>
            <table width='100%' border="1" style="font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;">

              <tr>
                <th class="tengah">NO</th>
                <th class="tengah">NIM</th>
                <th class="tengah">NAMA</th>
                <th class="tengah">ALAMAT</th>
                <th class="tengah">N. HARIAN(N1)</th>
                <th class="tengah">NILAI MID TEST(N2)</th>
                <th class="tengah">NILAI FINAL TEST(N3)</th>
                <th class="tengah">DENGAN HURUF</th>
                <th class="tengah">PREDIKAT</th>
                <th class="tengah">ACTION</th>
              </tr>
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
                  echo "<tr>";
                  echo "<td class='tengah'>" . $no++ .  "</td>";
                  echo "<td class='kiri'>" . $user_data['nim'] . "</td>";
                  echo "<td class='kiri'>" . $user_data['nama'] . "</td>";
                  echo "<td class='kiri'>" . $user_data['alamat'] . "</td>";
                  echo "<td class='tengah'>" . $n1 . "</td>";
                  echo "<td class='tengah'>" . $n2 . "</td>";
                  echo "<td class='tengah'>" . $n3 . "</td>";
                  echo "<td class='tengah'>" . $grade . "</td>";
                  echo "<td class='tengah'>" . $predikat . "</td>";
                  echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                }
                ?>
            </table>
            <p>Total Siswa adalah: <?= $total ?> Orang</p>
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

  </body>

  </html>
<?php
}
?>