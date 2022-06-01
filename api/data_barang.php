<?php 
require('../config/koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM tbl_inventaris ");
$respons = [];
while($data = mysqli_fetch_array($query)){
    $a = [
        'id_inventaris' => $data['id_inventaris'],
        'id_pc' => $data['id_pc'],
        'id_user' => $data['id_user'],
    ];
    array_push($respons, $a);
}
echo json_encode($respons);
