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
                        <a class="nav-item nav-link active" href="landingadmin.php">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="inputdata.php">Memasukan Data</a>
                        <a class="nav-item nav-link" href="menampilkan.php">Opsi Lanjutan</a>
                        <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a>
                    </div>
                </div>
                <!-- tutup div class container -->
            </div>
          </nav>
        <!-- membuat gambar atau banner yang biasa disebut jumbotron -->
            <div class="jumbotron jumbotron-fluid">
                <div class="container text-center">
                  <!-- menambahkan gambar -->
                    <img src="img/kantorbps.jpg" width="300" height="300" class="rounded-circle">
                    <h1 class="display-4">" BADAN PUSAT STATISTIK "</h1>
                    <p class="lead">Selamat Datang di Website Badan Pusat Statistik menyediakan berbagai informasi tentang kependudukan data wilayah kependudukan dan selalu update sensus wilayah kependudukan.</p>
                </div>
            </div>
            <!-- membuat layouting -->
            <div class="container">
                <div class="row">
                    <div class="col-sm text-center">
                        <h1>About</h1>
                        <br>
                    </div>
                </div>
                <!-- isi dari about -->
                <div class="row">
                    <div class="col-sm text-justify">
                        <p>Badan Pusat Statistik adalah Lembaga Pemerintah Nonkementerian yang bertanggung jawab langsung kepada Presiden. Sebelumnya, BPS merupakan Biro Pusat Statistik, yang dibentuk berdasarkan UU Nomor 6 Tahun 1960 tentang Sensus dan UU Nomor 7 Tahun 1960 tentang Statistik. Sebagai pengganti kedua UU tersebut ditetapkan UU Nomor 16 Tahun 1997 tentang Statistik.</p>
                    </div>
                    <!-- p2 -->
                    <div class="col-sm text-justify">
                        <p>Berdasarkan UU ini yang ditindaklanjuti dengan peraturan perundangan dibawahnya, secara formal nama Biro Pusat Statistik diganti menjadi Badan Pusat Statistik.Tugas, fungsi dan kewenangan BPS telah ditetapkan berdasarkan Peraturan Presiden Nomor 86 Tahun 2007 tentang Badan Pusat Statistik dan Peraturan Kepala Badan Pusat Statistik Nomor 7 Tahun 2008 tentang Organisasi dan Tata Kerja Badan Pusat Statistik.</p>
                    </div>
                </div>
            <!-- div akhir layouting -->
            </div>
        <br>
        <!-- membuat jarak -->
            <div class="container">
                <div class="row">
                    <div class="col-sm text-center">
                        <h1>Berita TerUpdate</h1>
                        <br>
                    </div>
                </div>
            
        <!-- membuat bagian card board 1 -->
    <!-- div class row -->
    <div class="row">
        <!-- div class col -->
        <div class="col">
            <!-- div class card -->
                <div class="card">
                    <img src="img/Peresmian.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Peresmian Kantor BPS</h5>
                        <p class="card-text">Peresmian kantor Badan Pusat Statistik oleh pemerintah Kementerian.</p>
                        <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            <!-- akhiran col -->
            </div>
        <!-- membuat bagian card bard  2 -->
                <div class="col">
                        <!-- div class card -->
                            <div class="card">
                                <img src="img/berita2.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">BPS Catat Kota Tembilahan Bulan Oktober 2019 Alami Deflasi</h5>
                                    <p class="card-text">Badan Pusat Statistik Kabupaten Indragiri Hilir melaksanakan Pres Realese BRS Inflasi Kota Tembilahan bulan Oktober 2019 yang berlangsung di Aula BRS Kabupaten Indragiri Hilir, Jalan Bunga nomor 11 Tembilahan, Jum'at</p>
                                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                                </div>
                            </div>
                        <!-- akhiran col -->
                        </div>
        <!-- membuat bagian card bard  3 -->
                <div class="col">
                        <!-- div class card -->
                            <div class="card">
                                <img src="img/berita3.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Sensus Penduduk Online 2020 Hanya di bps.go.id dan Tak Ada Aplikasi</h5>
                                    <p class="card-text">Badan Pusat Statistik (BPS) mengingatkan masyarakat Indonesia bahwa pengisian sensus penduduk online tahun 2020 hanya dilakukan melalui situs web sensus.bps.go.id dan BPS tidak membuat aplikasi apapun untuk pelaksanaan sensus penduduk online ini.</p>
                                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                                </div>
                            </div>
                        <!-- akhiran col -->
                        </div>

        <!-- akhiran row -->
        </div>
    <!-- akhiran div container -->
    </div>    


    </body>
</html>