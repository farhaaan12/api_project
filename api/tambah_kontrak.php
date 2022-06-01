<?php
require('../config/koneksi.php');
$vendor = $_POST['vendor'];
header('Content-Type: text/xml');
$query = mysqli_query($koneksi, "INSERT INTO tbl_kontrak(vendor) VALUES('$vendor')");
if ($query) {
    $respons = [
        'success' => 1,
        'message' => "berhasil simpan"
    ];
    echo json_encode($respons);
} else {
    $respons = [
        'success' => 0,
        'message' => "gagal simpan"
    ];
    echo json_encode($respons);
}