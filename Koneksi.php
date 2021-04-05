<!-- Mendefinisikan tipe dokumen berupa html -->
<html>
<head>
	<!-- Membuat judul pada tab browser -->
	<title>Koneksi Database MySQL</title>
</head>
<body>
	<!-- Mendefinisikan judul pada halaman browser -->
	<h1>Demo Koneksi database MySQL</h1>
	<!-- Menambahkan skrip php -->
	<?php
	// Menghubungkan php dengan mysql
	$con = mysqli_connect("localhost","root","","my_db");
	// Melakukan pengecekan
	if (mysqli_connect_errno()) {
		// Menampilkan teks failed to connect to mysql
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
		// Keluar dari perulangan/pengecekan
		exit();
	}
	?>
</body>
</html>