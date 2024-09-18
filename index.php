<?php
require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta>
    <title>WebPractice</title>
    <link href="assets/img/webpracLogo.png" rel="icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootstrap-icons-1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="sb-nav-fixed">
    <!-- ========== Navigation ========== -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-2">
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
                            <div class="card mb-3 border-0" style="max-width: 550px; margin-top: 100px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="assets/img/webpracLogo.png" class="img-fluid rounded-start" alt="webpracLogo.png">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Welcome to WebPrac!</h5>
                                            <p class="card-text " style="text-align: justify;">Welcome to WebPrac (Web Practice) — your go-to platform for mastering the art of web development!
                                                 At WebPrac, we focus on providing hands-on experience in building dynamic websites using core web technologies 
                                                 like CRUD operations, PHP, JavaScript, and jQuery. Whether you’re just starting out or looking to sharpen your 
                                                 development skills, WebPrac offers practical tutorials, code examples, and projects to help you create fully 
                                                 functional, data-driven websites. Join us and start practicing the essentials of modern web development today!
                                            </p>
                                            <p class="card-text"><small class="text-muted">By Jasper Ellevera</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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