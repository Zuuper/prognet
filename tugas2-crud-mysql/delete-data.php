<?php 
include 'koneksi.php';
    $id = $_GET['id'];

    $delete = mysqli_query($conn,"DELETE FROM tugas2 WHERE id='$id'");
 
    if ($delete === TRUE) {
        echo "Delete data successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
?>

<a href="crud-mysql.php">klik disini buat kembali ke awal</a>