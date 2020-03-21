<?php
// mengconnect kan database nya
$connect = mysqli_connect("localhost","root","","BPSKU");
    
    // jika error
    if (mysqli_connect_error()) {
        echo "Koneksi Gagal: " . mysqli_connect_error();
    }
?>