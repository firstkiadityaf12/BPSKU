<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Badan Pusat Statistik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <!-- menyambungkan ke bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="Shortcut icon" href="img/bps-logo.jpg">
</head>

<!-- syntax php -->
<?php
include 'penyambungan.php';
// menyeleksi data mengambil data
$query = "SELECT * FROM data";
// mengeksikusi query yang di select
$result = mysqli_query($connect, $query);
// hasil eksekusi mengetahui jumlah baris
$num =  mysqli_num_rows($result);
?>

<body>
    <!-- menyambungkan ke bootstrap css jss -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <!-- membuat navbar -->

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!-- div container -->
              <div class="container">  
                <a class="navbar-brand" href="#">BADAN PUSAT STATISTIK</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="landingadmin.php">Home </a>
                        <a class="nav-item nav-link" href="inputdata.php">Memasukan Data</a>
                        <a class="nav-item nav-link active" href="menampilkan.php">Opsi Lanjutan<span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a>
                    </div>
                </div>
                <!-- tutup div class container -->
            </div>
          </nav>
          <div class="container">
<br>
          <table border='2'>
    <h2> DATA KEPENDUDUKAN</h2>
        <tr>
            <th>ID</th>
            <th>NIK</th>
            <th>Nama User</th>
            <th>Alamat User</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>
    <!-- php dari registernya -->
<?php
    if($num > 0){
        $no =1;
        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
                echo "<td>".$data['id']."</td>";
                echo "<td>".$data['nik']."</td>";
                echo "<td>".$data['nama']."</td>";
                echo "<td>".$data['alamat']."</td>";
                echo "<td>".$data['telepon']."</td>";
                echo "<td><a href='ngeupdate.php?id=".$data['id']."'>EDIT</a> |";
                echo "<td><a href='mengapus.php?id=".$data['id']."'onclick='return confirm(\"Apakah anda ingin menghapus data?\")'>DELETE</a></td>";
            echo "</tr>";
        }
    }
    ?>
    </table>
</div>
</body>
</html>