<?php
require('../config/koneksi.php');
$id_inventaris = $_POST['id_inventaris'];
$id_pc = $_POST['id_pc'];
$id_user = $_POST['id_user'];
header('Content-Type: text/xml');
$query = mysqli_query($koneksi, "UPDATE tbl_inventaris SET id_pc = '$id_pc', id_user = '$id_user' WHERE id_inventaris = '$id_inventaris'");
if ($query) {
    $respons = [
        'success' => 1,
        'message' => "berhasil update"
    ];
    echo json_encode($respons);
} else {
    $respons = [
        'success' => 0,
        'message' => "gagal update"
    ];
    echo json_encode($respons);
}