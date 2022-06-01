<?php
require('../config/koneksi.php');
$id_karyawan = $_POST['id_karyawan'];
header('Content-Type: text/html');
$query = mysqli_query($koneksi, "DELETE FROM tbl_karyawan WHERE id_karyawan = '$id_karyawan'");
if ($query) {
    $respons = [
        'success' => 1,
        'message' => "berhasil delete"
    ];
    echo json_encode($respons);
} else {
    $respons = [
        'success' => 0,
        'message' => "gagal delete"
    ];
    echo json_encode($respons);
}