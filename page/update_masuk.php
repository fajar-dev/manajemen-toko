<?php
//include('dbconnected.php');
include('../koneksi.php');

$id = $_GET['id'];
$nama = $_GET['barang'];
$awal = $_GET['awal'];
$akhir = $_GET['eceran'];

//query update
$query =  "UPDATE harga SET barang='$nama' , awal='$awal', akhir='$akhir' WHERE id='$id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header('location: barang.php');
?>