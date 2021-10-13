<?php
include 'koneksi.php';

$id_pelanggan = $_POST['id'];
$tgl_transaksi = $_POST['tgl'];
$jumlah_topup = (int)$_POST['jumlah_topup'];




$sql ="INSERT INTO topup (id_topup, id_pelanggan, tgl_topup, isi_saldo) VALUES('','$id_pelanggan', '$tgl_transaksi', '$jumlah_topup')";
if(mysqli_query($conn, $sql)){
	echo "Berhasil tambah data";
	header('Location: index.php');
} else{
	echo "Data gagal di input";
	header('Location: index.php');
}

?>