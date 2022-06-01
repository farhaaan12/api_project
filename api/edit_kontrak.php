<?php
require('../config/koneksi.php');
$id_kontrak = $_POST['id_kontrak'];
$vendor = $_POST['vendor'];
header('Content-Type: text/xml');
$query = mysqli_query($koneksi, "UPDATE tbl_kontrak SET vendor = '$vendor' WHERE id_kontrak = '$id_kontrak'");
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