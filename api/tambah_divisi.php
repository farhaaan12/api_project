<?php
require('../config/koneksi.php');
$nama_divisi = $_POST['nama_divisi'];
header('Content-Type: text/xml');
$query = mysqli_query($koneksi, "INSERT INTO tbl_divisi(nama_divisi) VALUES('$nama_divisi')");
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