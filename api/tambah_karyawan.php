<?php
require('../config/koneksi.php');
$nama = $_POST['nama_karyawan'];
$username = $_POST['username'];
$divisi = $_POST['divisi'];
$gender = $_POST['gender'];
$password= md5($_POST['password']);
$lvl = $_POST['level'];
header('Content-Type: text/xml');
$query = mysqli_query($koneksi, "INSERT INTO tbl_karyawan(nama_karyawan,username,divisi,gender,password,level) VALUES('$nama','$username','$divisi','$gender','$password','$lvl')");
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
