<?php 
include 'koneksi.php';

//sql2 untuk menampilkan id_pelanggan, nama_pelanggan dari tabel pelanggan dan
// menampilkan saldo akhir dari tabel saldo_transaksi

$sql2 = "SELECT pelanggan.`id_pelanggan`, pelanggan.`nama_pelanggan`, saldo_transaksi.`sisa_saldo` FROM `pelanggan` INNER JOIN `saldo_transaksi` ON pelanggan.`id_pelanggan` = saldo_transaksi.`id_pelanggan` ";

//$sql = "SELECT * FROM pelanggan";
$result = mysqli_query($conn, $sql2);
?>
<table class="table">
<tr>
	<th>No</th>
	<th>ID Pelanggan</th>
	<th>Nama Pelanggan</th>
	<th>Sisa Saldo</th>
</tr>

<?php
$s=1;
while ($data = mysqli_fetch_assoc($result)) {
	echo "<tr>";
	echo "<td>".$s."</td>";
	echo "<td>".$data['id_pelanggan']."</td>";
	echo "<td>".$data['nama_pelanggan']."</td>";
	echo "<td>".$data['sisa_saldo']."</td>";
	echo "</tr>";
$s++;
};

?>

</table>
