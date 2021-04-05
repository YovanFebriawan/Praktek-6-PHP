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
	$dbname = "latihan_modul_6";
	// Menghubungkan php dengan mysql menggunakan metode mysqli
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Melakukan pengecekan
	if (!$conn) {
		// Menampilkan teks connection failed dan keluar dari perulangan if
		die("Connection failed: ".mysqli_connect_error());
	}
	// Menyimpan perintah/query ke dalam fungsi
	$sql = "CREATE TABLE buku_tamu (ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,\n"

    . "                        NAMA VARCHAR(200) NOT NULL,\n"

    . "                        EMAIL VARCHAR(50) NOT NULL,\n"

    . "                        ISI TEXT)";
    // Menyimpan perintah/query ke dalam fungsi
	$tabel = mysqli_query($conn, $sql);
	// Melakukan pengecekan
	if (!$tabel) {
		// Menampilkan teks gagal membuat tabel
		die('Gagal Membuat Tabel: '.mysql_error($conn));
	// Dieksekusi ketika tidak sesuai dengan parameter
	} else {
		// Menampilkan teks error
		echo "Tabel Berhasil Dibuat";
	}
	// menutup koneksi database
	mysqli_close($conn);
?>
</body>
</html>