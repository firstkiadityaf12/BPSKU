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
<body>
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
                        <a class="nav-item nav-link" href="landingadmin.php">Home</a>
                        <a class="nav-item nav-link active" href="inputdata.php">Memasukan Data<span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="menampilkan.php">Opsi Lanjutan</a>
                        <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a>
                    </div>
                </div>
                <!-- tutup div class container -->
            </div>
          </nav>
<br>
    <!-- membuat class container -->
        <div class="container">
            <h4 class="text-center">FORM LOGIN</h4>
<br>
        <!-- form data -->
        <form action="membuat.php" method="POST">
            <!-- untuk nik -->
            <div class="from-group">
                <label>Masukan Nik :</label>
                <input type="text" name="nik" class="form-control">
            </div>
            <!-- untuk nama -->
            <div class="from-group">
                <label>Masukan nama :</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <!-- untuk alamat -->
            <div class="from-group">
                <label>Masukan alamat :</label>
                <input type="text" name="alamat" class="form-control">
            </div>
            <!-- untuk Telepon -->
            <div class="from-group">
                <label>No Telepon :</label>
                <input type="text" name="telepon" class="form-control">
            </div>
    <br>
            <!-- button -->
            <button type="submit" class="btn btn-primary" value="LOGIN">SUBMIT</button>
        </form>
    </div>

</body>
</html>