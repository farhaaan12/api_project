<?php
require('../config/koneksi.php');
$id_kontrak = $_POST['id_kontrak'];
header('Content-Type: text/html');
$query = mysqli_query($koneksi, "DELETE FROM tbl_kontrak WHERE id_kontrak = '$id_kontrak'");
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