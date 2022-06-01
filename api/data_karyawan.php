<?php 
require('../config/koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM tbl_karyawan");
$respons = [];
while($data = mysqli_fetch_array($query)){
    $a = [
        'id_karyawan' => $data['id_karyawan'],
        'nama_karyawan' => $data['nama_karyawan'],
        'divisi' => $data['divisi'],
        'gender' => $data['gender'],
        'level' => $data['level'],
        'username' => $data['username'],
        'password' => $data['password'],
    ];
    array_push($respons, $a);
}
echo json_encode($respons);
