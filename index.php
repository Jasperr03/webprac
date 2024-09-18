<?php
require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebPractice</title>
    <link href="assets/img/webpracLogo.png" rel="icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootstrap-icons-1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="sb-nav-fixed">
    <!-- ========== Navigation ========== -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary px-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/img/webpracLogo.png" alt="webpracLogo" style="height: 0.3in;">
                WebPrac
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="true">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse hide" id="main_nav">
                <div class="navbar-collapse flex-grow-1 text-right" style="padding-left: 20px">
                    <?php include 'nav/nav_main.php' ?>
                </div>
            </div>
        </div>
    </nav>
    <!-- ========== Main Content ========== -->
    <div>
        <div>
            <main>
                <div id="maincontent" class="container-fluid px-2">
                    <!--Load Main Data Here-->
                    <div class="row">
                        <div class="col-12" style="text-align: -webkit-center;">
                            <img src="assets/img/webpracLogo.png" style="height: 1.5in; margin-top: 100px; font-family: fantasy;color: #002d54 !important;">
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>