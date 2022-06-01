<?php 
require('../config/koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM tbl_kontrak");
$respons = [];
while($data = mysqli_fetch_array($query)){
    $a = [
        'id_kontrak' => $data['id_kontrak'],
        'vendor' => $data['vendor'],
    ];
    array_push($respons, $a);
}
echo json_encode($respons);