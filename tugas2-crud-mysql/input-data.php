<?php 
include 'koneksi.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$golongan_darah = $_POST['golongan_darah'];
$hobby = implode(",", $_POST['hobi']);

$sql = "INSERT INTO tugas2 (nik,nama,nim,tempat_lahir,tanggal_lahir,jenis_kelamin,golongan_darah,hobby) VALUES('$nik','$nama','$nim','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$golongan_darah','$hobby')";


  $insert = mysqli_query($conn,$sql);
  if ($insert === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>

<a href="crud-mysql.php">klik disini buat kembali ke awal</a>