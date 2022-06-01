<?php
require('../config/koneksi.php');
$id_divisi = $_POST['id_divisi'];
$nama_divisi = $_POST['nama_divisi'];
header('Content-Type: text/xml');
$query = mysqli_query($koneksi, "UPDATE tbl_divisi SET nama_divisi = '$nama_divisi' WHERE id_divisi = '$id_divisi'");
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