<?php
require('../config/koneksi.php');
$id_divisi = $_POST['id_divisi'];
header('Content-Type: text/html');
$query = mysqli_query($koneksi, "DELETE FROM tbl_divisi WHERE id_divisi = '$id_divisi'");
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