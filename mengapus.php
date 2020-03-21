<?php

// mengkoneksikan
include 'penyambungan.php';

// mencarikan ke databasenya
$ID_User = $_GET['id'];

// membuat query untuk kedatabasenya
$query = "DELETE FROM data WHERE id = '$ID_User'";

$result = mysqli_query($connect,$query);

$num = mysqli_affected_rows($connect);

if ($num > 0 ) {
    echo "Berhasil Hapus Data <br>";
} else {
    echo "Gagal Hapus Data <br>";
}
echo "<a href='menampilkan.php'>Lihat Data</a>"
?>