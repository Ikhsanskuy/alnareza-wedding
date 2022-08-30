<?php

include "../koneksi.php";
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $paket = $_POST['paket'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];

    $query = mysqli_query($conn, "INSERT INTO `wo` (`nama`,`paket`,`email`,`telp`) 
                                            VALUES ('$nama','$paket','$email','$telp')");

    if ($query) {
        echo "<script>alert('Data yang anda masukkan telah tersimpan, Kami akan menghubungi anda');
        location.href='../index.html'</script>";
    } else {
        echo "<script>alert('Gagal register');
        location.href='wp.php';</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/styles.css" rel="stylesheet" media="all" />
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST">
                        <div class="row row-space">


                            <!-- name -->
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Full Name</label>
                                    <input class="input--style-4" type="text" name="nama" required>
                                </div>
                            </div>


                            <!-- paket -->
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">paket</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Paket A
                                            <input type="radio" value="A" name="paket">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Paket B
                                            <input type="radio" value="B" name="paket">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Paket C
                                            <input type="radio" value="C" name="paket">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <!-- email -->
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>


                            <!-- no telpon -->
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">No Telp</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="telp" required>
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>


                            <!-- submit -->
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue text-center" name="submit" type="submit">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->