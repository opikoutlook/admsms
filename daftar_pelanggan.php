<?php
include 'koneksi.php';


$id_pelanggan = $_POST['id'];
$nama_pelanggan = $_POST['nama'];
$tgl_transaksi = $_POST['tgl'];
$saldo_awal = $_POST['saldo_awal'];

// echo $id_pelanggan;
// echo $nama_pelanggan;
// echo $tgl_transaksi;
// echo $saldo_awal;



$sql = "INSERT INTO pelanggan (id_tb, id_pelanggan, nama_pelanggan, tgl_transaksi, saldo_awal) VALUES('','$id_pelanggan','$nama_pelanggan', '$tgl_transaksi', '$saldo_awal')";
if(mysqli_query($conn, $sql)){
	echo "Berhasil tambah data";
	header('Location: tambah_pelanggan.php');
} else{
	echo "Data gagal di input";
}

?>