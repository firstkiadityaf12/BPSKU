<?php
// mengaktifkan session php
session_start();

// menghubungkan ke connection
include 'penyambungan.php';

// menangkap data yang diisi di form
$user = $_POST['username'];
$pass = $_POST['password'];

// menyeleksi database admin
$query = mysqli_query($connect,"select * from admin where username = '$user' and password = '$pass'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $username ;
    $_SESSION['status'] = "login";
    header("location: landingadmin.php");
} else {
    header("location: admin.php?pesan=gagal");
}
?>