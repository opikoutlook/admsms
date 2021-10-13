<?php
include 'koneksi.php';

$id_pelanggan = $_POST['id'];
$tgl_transaksi = $_POST['tgl'];
$refund = (int)$_POST['refund'];
$keterangan = $_POST['keterangan'];


$sql ="INSERT INTO refund (id_refund, id_pelanggan, tgl_refund, refund, keterangan) VALUES('','$id_pelanggan', '$tgl_transaksi', '$refund', '$keterangan')";
if(mysqli_query($conn, $sql)){
	echo "Berhasil tambah data";
	header('Location: index.php');
} else{
	echo "Data gagal di input". mysqli_error($conn);
	//header('Location: index.php');
}

?>