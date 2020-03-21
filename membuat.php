<?php

//mengkoneksikan
include 'penyambungan.php';

    $Nik = $_POST['nik'];
    $Nama =  $_POST['nama'];
    $Alamat =  $_POST['alamat'];
    $Telp =  $_POST['telepon'];

// memasukan data atau menyeleksikan
$query = "INSERT INTO data (nik,nama,alamat,telepon) VALUES ('$Nik','$Nama','$Alamat','$Telp')";

// menampiilkan hasilnya menghubungkan ke databasenya
$result = mysqli_query($connect,$query);

// menghasilkan jumlah baris
$numc= mysqli_affected_rows($connect);

if ($numc > 0) {
    echo "Berhasil Tambah Data";
} else {
    echo "Gagal Tambah Data".mysqli_error($connect);
}

echo "<a href='menampilkan.php'>Lihat Data</a>";
?>