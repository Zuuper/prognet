<?php
$serverName = "localhost";
$username = "id15019256_1805551145";
$password = "Adityaersa13!!";
$database = "id15019256_prognet";

$conn = new mysqli($serverName,$username,$password,$database);

if($conn ->connect_error){
    die('koneksi gagal cuk :'. $conn->connect_error);
}