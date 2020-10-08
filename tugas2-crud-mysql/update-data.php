<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$golongan_darah = $_POST['golongan_darah'];
$sql = "UPDATE tugas2 set nik='$nik', nama='$nama', nim='$nim', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', golongan_darah='$golongan_darah' WHERE id='$id'";
$insert = mysqli_query($conn,$sql);

if ($insert === TRUE) {
    echo "Update record successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>

<a href="crud-mysql.php">klik disini buat kembali ke awal</a>