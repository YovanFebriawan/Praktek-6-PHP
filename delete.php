<!-- Menambahkan skrip php -->
<?php
// Menambahkan file config.php
include_once("config.php");
// Menghapus id yang sebagai 
$id = $_GET['id'];
// Menghapus pegawai berdasarkan id
$result = mysqli_query($mysqli, "DELETE FROM pegawai WHERE id=$id");
// Setelah menghapus menuju ke beranda, sehingga daftar pegawai terbaru ditampilkan.
header("Location:index.php");
?>