<?php
//PDO Connections form dbs
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_webprac";

try {
    $webprac = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
    $webprac->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>