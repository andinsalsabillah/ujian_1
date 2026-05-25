<?php
$host     = "localhost";
$username = "root";
$password = "";
$database = "db_ujian";

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

  echo "Koneksi berhasil"; 
?>