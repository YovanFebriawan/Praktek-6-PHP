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
	$sql = "INSERT INTO liga (kode, negara, champion) VALUES ('Jer', 'Jerman','4'), ('Spa', 'Spanyol', '3'), ('Eng', 'English', '3')";
	
	// Melakukan pengecekan
	if (mysqli_query($conn, $sql)) {
		// Menampilkan teks new record created successfully
		echo "New record created successfully";
	// Dieksekusi ketika tidak sesuai dengan parameter
	} else {
		// Menampilkan teks error
		echo "Error: ". $sql . "<br>" . mysqli_error($conn);
	}
	// menutup koneksi database
	mysqli_close($conn);
?>