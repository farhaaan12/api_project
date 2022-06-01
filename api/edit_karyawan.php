<?php
require('../config/koneksi.php');
$id_karyawan = $_POST['id_karyawan'];
$nama_karyawan = $_POST['nama_karyawan'];
$divisi = $_POST['divisi'];
$gender = $_POST['gender'];
$level = $_POST['level'];
$username = $_POST['username'];
//$password = $_POST['password'];
header('Content-Type: text/xml');
$query = mysqli_query($koneksi, "UPDATE tbl_karyawan SET nama_karyawan = '$nama_karyawan', divisi = '$divisi', gender = '$gender',
                            level = '$level', username = '$username' WHERE id_karyawan = '$id_karyawan'");
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