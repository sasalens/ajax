<?php
include "koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

if($nama){
    $query = mysqli_query($koneksi,"INSERT INTO `table`(nama,alamat) VALUES ('$nama', '$alamat')");
    if($query){
        echo json_encode([
            'hasil' => true,
            'nama' => $nama
        ]);
    }
}

// if(isset($_POST['submit'])){
//     mysqli_query($koneksi,"INSERT INTO `table`(nama,alamat) VALUES ('$nama', '$alamat')");

//     header("location:index.php");
// }

?>