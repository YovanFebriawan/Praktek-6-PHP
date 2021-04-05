<!-- Menambahkan skrip php -->
<?php
// Mendefinisikan nama server
$dbHost = "localhost";
// Mendefinisikan nama database
$dbName = "tugas2";
// Mendefinisikan username
$dbUsername = "root";
// Mendefinisikan password
$dbPassword = "";
// Menghubungkan php dengan mysql menggunakan ekstensi mysqli
$mysqli = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
?>