<?php 
$hostname = "localhost";
$database = "ajax";
$username = "root";
$password = "";
$koneksi = mysqli_connect($hostname, $username, $password, $database);
if (!$koneksi) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}

?>