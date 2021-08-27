<html>

<head>
  <title>Add Data SIswa</title>
</head>

<style>
  h4 {
    margin: 1rem 0;
  }

  form {
    border: 1px solid black;
    margin: 1rem;
    padding: 1rem;
  }
</style>

<body>
  <a href="index.php">Go to Home</a>
  <br /><br />

  <form action="add.php" method="POST">
    <h1 style=" position:absolute; top:20; background-color:white;">Silahkan Masukkan Data Sesuai Petunjuk</h1>
    <br>
    <h4>NIM</h4>
    <input type="text" name="nim" placeholder="XXXXX">
    <h4>Nama</h4>
    <input type="text" name="nama" placeholder="min 20 char" maxlength="20">
    <h4>Alamat</h4>
    <input type="text" name="alamat" placeholder="max 30 char" maxlength="30">
    <h4>Nilai Harian</h4>
    <input type="number" name="n1" placeholder="Nilai antara 0 s.d 100" min="1" max="100">
    <h4>Nilai MID TEST</h4>
    <input type="number" name="n2" placeholder="Nilai antara 0 s.d 100" min="1" max="100">
    <h4>Nilai FINAL TEST</h4>
    <input type="number" name="n3" placeholder="Nilai antara 0 s.d 100" min="1" max="100"><br><br>
    <button type="submit" name="Submit" value="Submit">PROCCESS</button>
    <button type="reset">CANCEL</button>
  </form>

  <?php

  // Check If form submitted, insert form data into users table.
  if (isset($_POST['Submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    // include database connection file
    include_once("koneksi.php");

    // Insert user data into table
    $ambil_id = mysqli_query($konek, "SELECT id FROM nilais ORDER BY id DESC LIMIT 1");
    $row_id = mysqli_fetch_array($ambil_id);
    $hasil_id = $row_id['id'];
    $id = $hasil_id + 1;
    $result = mysqli_query($konek, "INSERT INTO nilais(id,nim,nama,alamat,n1,n2,n3) VALUES('$id','$nim','$nama','$alamat','$n1','$n2','$n3')");


    // Show message when user added
    echo "User added successfully. <a href='boot1.php'>View Data</a>";
  }
  ?>
</body>

</html>