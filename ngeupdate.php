<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Badan Pusat Statistik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <?php

// menyambungkan
include 'penyambungan.php';

// mendapatkan data
$ID_User = $_GET['id'];

// mengecekan data atau eyeleksi
$query = "SELECT * FROM data WHERE id = '$ID_User'";

// menyambungkan ke database
$result = mysqli_query($connect,$query);

// meanampilkan jumlah data
$row = $result -> fetch_assoc();
// while( $row = mysqli_fetch_array ($result))
// {
    // $row = mysqli_fetch_assoc($result);
?>

<form action="uppdate.php" method="post">
        <table>
            <!-- membuat tabel untuk nama -->
            <tr>
                <td><label for="nik">NIK User</label></td>
                <td>:</td>
                <td><input type="text" name="nik" id="Nama_User" value ="<?php echo $row['nik'];?>"></td>
            </tr>
            <!-- membuat tabel untuk nama -->
            <tr>
                <td><label for="nama">Nama User</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="Nama_User" value ="<?php echo $row['nama'];?>"></td>
            </tr>
            <!-- membuat tabel alamat user -->
            <tr>
                <td><label for="alamat">Alamat User</label></td>
                <td>:</td>
                <td><input type="text" name="alamat" id="Alamat_User" value ="<?php echo $row['alamat'];?>"></td>
            </tr>
            <!-- membuat tabel Telepon user -->
            <tr>
                <td><label for="telepon">Telepon User</label></td>
                <td>:</td>
                <td><input type="text" name="telepon" id="Telp_User" value ="<?php echo $row['telepon'];?>"></td>
            </tr>
        <!-- tabel akhir -->
            <tr>
                <td></td>
                <td><input type="hidden" name="id" value ="<?php echo $row['id'];?>"></td>
                <td><input type="submit" value="Simpan" name="btnSimpan"></td>
            </tr>
        </table>
    </form>

</body>
</html>