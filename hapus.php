<?php 
include "koneksi.php";

$id=$_POST['id'];
$hapus = mysqli_query($koneksi,"DELETE FROM `table` WHERE `table` . id='$id'");

?>