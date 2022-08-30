<?php
session_start();
include "../../koneksi.php";

if (!isset($_SESSION['admin'])) {
    echo "<script>alert('Kamu login dulu yaachh');
        location.href= '../'
        </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<body style="background-image: url(../../images/service-bg.png); background-color:#6144b9; background-size: 100%;background-repeat:no-repeat;height:100vh;">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOME</title>

        <!-- Bootstrap Styles-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
        <link href="../assets/style.css" rel="stylesheet" />
    </head>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
        <a class="navbar-brand" href="#"><img src="../logo.jpg" style="width: 25px; border-radius:50%;" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link custom-font-home text-primary" href="index.php">Alnareza WO<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="../config/logout.php" onclick="return confirm('Apakah anda ingin keluar?')">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    </br>
    <div class="table-responsive container">
        <h2 style="text-align:center; color:#ffffff">Welcome To Alnareza Admin Page</h2>
        </br>

        <div class="panel-body">
            <div class="row" style="margin-top: 180px;">


                <!-- webinar -->
                <div class="col-sm">
                    <div class="panel panel-primary text-center no-boder bg-color-green thick-green-border">
                        <div class="panel-body">
                            <i class="fa fa-headset fa-5x" style="color:var(--white)"></i>
                            <h3 style="color: white;">
                                <?php
                                include "../../koneksi.php";
                                $tampil = "SELECT * FROM `wo`";
                                $query = mysqli_query($conn, $tampil);
                                $count = mysqli_num_rows($query);
                                echo "$count";
                                ?>
                            </h3>
                        </div>
                        <div class="panel-footer back-footer-green" style="color: white;">
                            Data Pendaftar Wedding Organizer :
                            <br>
                            <a href="wo.php" class="btn btn-primary" role="button" aria-pressed="true">Detail</a>

                        </div>
                    </div>
                </div>


                <!-- workshop -->
                <div class="col-sm">
                    <div class="panel panel-primary text-center no-boder bg-color-green thick-green-border">
                        <div class="panel-body">
                            <i class="fa fa-building fa-5x" style="color:var(--white)"></i>
                            <h3 style="color: white;">
                                <?php
                                include "../../koneksi.php";
                                $tampil = "SELECT * FROM `cp`";
                                $query = mysqli_query($conn, $tampil);
                                $count = mysqli_num_rows($query);
                                echo "$count";
                                ?>
                            </h3>
                        </div>
                        <div class="panel-footer back-footer-green" style="color: white;">
                            Data Pendaftar Catering Package :
                            <br>
                            <a href="cp.php" class="btn btn-primary" role="button" aria-pressed="true">Detail</a>
                        </div>
                    </div>
                </div>






            </div>
        </div>

    </div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        AOS.init();

        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>