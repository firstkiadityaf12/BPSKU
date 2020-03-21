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
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
    <!-- menyambungkan ke bootstrap css jss -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- membuat class container -->
    <div class="container">
        <h4 class="text-center">FORM LOGIN</h4>
<br>
        <!-- form login -->
        <form action="pengecekan.php" method="POST">
            <!-- untuk username -->
            <div class="from-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <!-- untuk password -->
            <div class="from-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
    <br>
            <!-- button -->
            <button type="submit" class="btn btn-primary" value="LOGIN">LOGIN</button>
        </form>
    </div>

    </body>
</html>