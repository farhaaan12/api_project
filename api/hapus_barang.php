<?php
require('../config/koneksi.php');
$id_inventaris = $_POST['id_inventaris'];
header('Content-Type: text/html');
$query = mysqli_query($koneksi, "DELETE FROM tbl_inventaris WHERE id_inventaris = '$id_inventaris'");
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