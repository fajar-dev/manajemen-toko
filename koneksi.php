<?php
$host = "localhost";
$user = "chanoffi_hidayah";
$pass = "chanoffi_hidayah";
$name = "chanoffi_hidayah";

$koneksi = mysqli_connect($host,  $user,  $pass) or die("Koneksi ke database gagal!");
mysqli_select_db($koneksi, $name) or die("Tidak ada database yang dipilih!");
?>