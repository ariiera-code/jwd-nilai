<?php
// include database connection file
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
  $result = mysqli_query($konek, "UPDATE tsiswa_20 SET nim='$nim',nama='$nama',alamat='$alamat',n1='$n1',n2='$n2',n3='$n3' WHERE id=$id");

  // Redirect to homepage to display updated user in list
  header("Location: index.php");
}
?>
<?php
// Display selected user data based on id, JIKA DIKLIK TOMBOL EDIT AKAN TAMPIL DATANYA
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
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
  <title>Edit Data Siswa</title>
</head>

<body>
  <a href="index.php">Home</a>
  <br /><br />

  <form name="update_user" method="post" action="edit.php">
    <table border="0">
      <tr>
        <td>Nim</td>
        <td><input type="text" name="nim" value=<?php echo $nim; ?>></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value=<?php echo $nama; ?>></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
      </tr>
      <tr>
        <td>Nilai Harian</td>
        <td><input type="number" name="n1" value=<?php echo $n1; ?>></td>
      </tr>
      <tr>
        <td>Nilai Mid Test</td>
        <td><input type="number" name="n2" value=<?php echo $n2; ?>></td>
      </tr>
      <tr>
        <td>Nilai Final Test</td>
        <td><input type="number" name="n3" value=<?php echo $n3; ?>></td>
      </tr>
      <tr>
        <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
        <td><input type="submit" name="update" value="update"></td>
      </tr>
    </table>
  </form>
</body>

</html>