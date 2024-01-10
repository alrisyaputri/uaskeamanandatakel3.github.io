<?php

// Include file konfigurasi
include "../_config/config.php";

// Mendapatkan ID file
if (isset($_GET['id_file'])) {
    $file_id = (int) $_GET['id_file'];
} else {
    // ID file tidak valid
    echo 'ID file tidak valid.';
    exit;
}

// Mengambil data file dari database
$query = mysqli_query($con, "SELECT * FROM file WHERE id_file = $file_id");
if (mysqli_num_rows($query) == 0) {
    // File tidak ditaemukan
    echo 'File tidak ditemukan.';
    exit;
}

$data = mysqli_fetch_array($query);

// Mengakses informasi file
$file_path = $data['file_url'];
$file_name = $data['file_name_finish'];

// Memeriksa keberadaan file
if (!file_exists($file_path)) {
    // File tidak ditemukan
    echo 'File tidak ditemukan.';
    exit;
}

// Menyiapkan header untuk download
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . $file_name . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file_path));

// Membaca dan mengirim file
readfile($file_path);
exit;
?>