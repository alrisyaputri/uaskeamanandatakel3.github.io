<?php
$servername = "localhost";
$database = "db_uas";
$username = "root";
$password = "";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$con = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

session_start();

function base_url($url = null) {
    $base_url = "http://localhost/keamanandata";
    if($url != null) {
        return $base_url."/".$url;
    } else {
        return $base_url;
    }
}

define('ALLOWED_FOLDER', 'dashboard.php');
?>