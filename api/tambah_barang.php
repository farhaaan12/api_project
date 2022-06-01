<?php
require('../config/koneksi.php');
$id_pc = $_POST['id_pc'];
$id_user = $_POST['id_user'];

header('Content-Type: text/xml');
    $query = mysqli_query($koneksi, "INSERT INTO tbl_inventaris(id_pc,id_user) VALUES('$id_pc','$id_user')");
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