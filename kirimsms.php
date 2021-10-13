<?php
include 'koneksi.php';
$phonenumber = $_REQUEST['phonenumber'];
$port = $_REQUEST['port'];
$user_id = $_REQUEST['user_id'];
$id_pelanggan = $_REQUEST['id_pelanggan'];


$sql ="INSERT INTO sms_data(id_trx, phonenumber, port, user_id, id_pelanggan) VALUES('', '$phonenumber', '$port', '$user_id','$id_pelanggan')";
if(mysqli_query($conn, $sql)){
    echo "Data Berhasil ditambahkan!";
}else{
    echo"data gagal ditambah".mysqli_error($conn);
}

?>