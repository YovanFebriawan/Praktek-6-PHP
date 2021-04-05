<!-- Mendefinisikan tipe dokumen berupa html -->
<html>
<head>
	<!-- Memberikan judul pada tab browser -->
	<title></title>
</head>
<body>
<!-- Menambahkan skrip php -->
<?php
	// Menyimpan nilai ke dalam fungsi
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";
	// Menghubungkan php dengan mysql menggunakan metode mysqli
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Melakukan pengecekan
	if (!$conn) {
		// Menampilkan teks connection failed dan keluar dari perulangan if
		die("Connection failed: ".mysqli_connect_error());
	}
	// Menyimpan perintah/query ke dalam fungsi
	$sql = "SELECT kode, negara, champion FROM liga";
	$result = mysqli_query($conn, $sql);
	
	// Melakukan pengecekan
	if (mysqli_num_rows($result) > 0) {
		// Mengakses data setiap baris
		while ($row = mysqli_fetch_assoc($result)) {
			// Menampilkan teks 
			echo "kode: ".$row["kode"]." - Negara: ".$row["negara"]." ".$row["champion"]."<br>";
		}
	// Dieksekusi ketika tidak sesuai dengan parameter
	} else {
		// Menampilkan teks error
		echo "0 results";
	}
	// menutup koneksi database
	mysqli_close($conn);
?>
</body>
</html>