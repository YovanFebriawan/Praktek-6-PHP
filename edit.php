<!-- Menambahkan skrip php -->
<?php
// Menambahkan file config.php
include_once("config.php");
 
// Mengecek apakah form sudah dikirim dan menuju ke beranda setelah update
if(isset($_POST['update'])){	
	$id = $_POST['id'];
	$id_pegawai=$_POST['id_pegawai'];
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$nomor=$_POST['nomor'];
		
	// Menyimpan query update data ke fungsi result
	$result = mysqli_query($mysqli, "UPDATE pegawai SET nama='$nama',email='$email',nomor='$nomor' WHERE id=$id");
	
	// Menuju ke beranda
	header("Location: index.php");
}
?>
<?php
// Menampilkan data sesuai dengan id (array) 
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM pegawai WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result)){
	$id_pegawai=$user_data['id_pegawai'];
	$nama = $user_data['nama'];
	$email = $user_data['email'];
	$nomor = $user_data['nomor'];
}
?>
<!-- Mendefinisikan tipe dokumen html -->
<html>
<head>
	<!-- Membuat judul pada tab browser -->
	<title>Ubah Data Pegawai</title>
</head>
 
<body>
	<!-- Menuju ke tautan index.php -->
	<a href="index.php">Beranda</a>
	<!-- Membuat baris baru -->
	<br/><br/>
	<!-- Membuat form dengan method post -->
	<form name="update_user" method="post" action="edit.php">
		<!-- Membuat tabel -->
		<table border="0">
			<!-- Mendefinisikan baris -->
			<tr> 
				<!-- Membuat input untuk nama -->
				<td>Name</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<!-- Membuat input untuk email -->
				<td>Email</td>
				<td><input type="email" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<!-- Membuat input untuk nomor hp -->
				<td>Nomor HP</td>
				<td><input type="number" name="nomor" value=<?php echo $nomor;?>></td>
			</tr>
			<tr>
				<!-- Menyimpan urutan array/index array -->
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Ubah"></td>
			</tr>
		</table>
	</form>
</body>
</html>