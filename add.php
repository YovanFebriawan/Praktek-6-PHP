<!-- Mendefinisikan tipe dokumen html -->
<html>
<head>
	<!-- Membuat judul pada tab browser -->
	<title>Tambah Data Pegawai</title>
</head>
<body>
	<!-- Menuju ke tautan index.php -->
	<a href="index.php">Kembali Ke Beranda</a>
	<br/><br/>
	<!-- Membuat form dengan method post -->
	<form action="add.php" method="post" name="form1">
		<!-- membuat tabel -->
		<table width="25%" border="0">
			<!-- Membuat input text untuk id pegawai -->
			<tr> 
				<td>ID Pegawai</td>
				<td><input type="number" name="id_pegawai"></td>
			</tr>
			<tr> 
			<!-- Membuat input text untuk nama -->
			<tr> 
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
			<!-- Membuat input text untuk email -->
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr> 
			<!-- Membuat input text untuk nomor hp -->
				<td>Nomor HP</td>
				<td><input type="number" name="nomor"></td>
			</tr>
			<tr> 
			<!-- membuat button input tambah data pegawai -->
				<td></td>
				<td><input type="submit" name="Submit" value="Simpan"><input type="reset" name="reset" value="Bersihkan"></td>
			</tr>
		</table>
	</form>
	<?php
	// Mengecek apakah form berhasil ditambahkan dan memasukkan data baru ke database.
	if(isset($_POST['Submit'])) {
		$id_pegawai = $_POST['id_pegawai'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$nomor = $_POST['nomor'];
		// Menambahkan file config.php
		include_once("config.php");		
		// Memasukkan data pegawai baru ke database
		$result = mysqli_query($mysqli, "INSERT INTO pegawai(id_pegawai,nama,email,nomor) VALUES('$id_pegawai','$nama','$email','$nomor')");
		// Menampilkan teks data berhasil ditambahkan
		echo "Data berhasil ditambahkan"."<br> <a href='index.php'>Lihat Data Pegawai</a>";
	}
	?>
</body>
</html>