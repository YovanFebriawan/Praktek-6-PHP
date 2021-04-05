<!-- Menambahkan skrip php -->
<?php
	// Menyimpan nilai ke dalam fungsi
	$servername = "localhost";
	$username = "root";
	$password = "";
	// Menghubungkan php dengan mysql menggunakan metode mysqli
	$conn = mysqli_connect($servername, $username, $password);
	// Melakukan pengecekan
	if (!$conn) {
		// Menampilkan teks connection failed dan keluar dari perulangan if
		die("Connection failed: ".mysqli_connect_error());
	}
	// Menyimpan perintah/query ke dalam fungsi
	$sql = "CREATE DATABASE myDB";
	// Melakukan pengecekan
	if (mysqli_query($conn, $sql)) {
		// Menampilkan teks database created successfully
		echo "Database created successfully";
	// Dieksekusi ketika tidak sesuai dengan parameter
	} else {
		// Menampilkan teks error creating database
		echo "Error creating database: ".mysqli_error($conn);
	}
	// menutup koneksi database
	mysqli_close($conn);
?>