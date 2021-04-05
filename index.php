<!-- Menambahkan skrip php -->
<?php
// Menambahkan file config.php
include_once("config.php");
// Memanggil data pegawai menggunakan query sql dan ekstensi mysqli
$result = mysqli_query($mysqli, "SELECT * FROM pegawai ORDER BY id DESC");
?>
<!-- Mendefinisikan tipe dokumen html -->
<html>
<head>
    <!-- Memberikan judul pada tab browser  -->
    <title>Beranda</title>
</head>
<body>
    <!-- Menuju ke tautan add.php -->
    <a href="add.php">Tambah Data Pegawai</a><br/><br/>
    <!-- Membuat table -->
    <table width='100%' border=1>
        <!-- Mengisi sel -->
    <tr>
        <!-- Mendefinisikan sel header -->
        <th>ID Pegawai</th> <th>Nama Lengkap</th> <th>Email</th> <th>Nomor HP</th> <th>Pilihan</th>
    </tr>
    <?php
    // Menggunakan method post dengan ekstensi mysql dan array 
    $posts = array();
    while($user_data = mysqli_fetch_array($result)){
        // Menampilkan isi sel dengan data array yang akan dimasukkan pada add.php dan menuju ke tautan pada tombol ubah dan hapus ketika diklik
        echo "<tr>
        <td>".$user_data['id_pegawai']."</td>
        <td>".$user_data['nama']."</td>
        <td>".$user_data['email']."</td>
        <td>".$user_data['nomor']."</td>
        <td><a href='edit.php?id=$user_data[id]'>Ubah</a> | <a href='delete.php?id=$user_data[id]'>Hapus</a></td></tr>";
    }
    ?>
    </table>
</body>
</html>