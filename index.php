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
</head>

<body class="sb-nav-fixed">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/img/webpracLogo.png" alt="webpracLogo" style="height: 0.3in;">
                WebPrac
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-expanded="true">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse hide" id="">
                <div class="navbar-collapse flex-grow-1 text-right" style="padding-left: 20px">
                    <?php include 'nav/nav_main.php' ?>
                </div>
            </div>
        </div>
    </nav>

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>