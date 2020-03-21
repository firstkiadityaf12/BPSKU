<!-- mengecekan edit -->
<?php

    // menyambungkan ke konek.php
    include 'penyambungan.php';

    $ID_User = $_POST['id'];
    $Nik = $_POST['nik'];
    $Nama =  $_POST['nama'];
    $Alamat =  $_POST['alamat'];
    $Telp =  $_POST['telepon'];

    // query untuk mmengupdate
    $query = "UPDATE data SET nik='$Nik', nama = '$Nama', alamat = '$Alamat',telepon = '$Telp' WHERE id = '$ID_User'";

    $result = mysqli_query($connect,$query);
    
    $num = mysqli_affected_rows($connect);

// pengecekan
    if ($num > 0) {
        echo "Berhasil Update Data <br>";
    } else {
        echo "Gagal Update Data <br>";
    }
    echo "<a href='menampilkan.php'>LIHAT DATA</a>"
    ?>