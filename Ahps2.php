<?php
	include 'Akoneksi.php';

	$id = $_GET['id'];
	mysqli_query($koneksi, "delete from kamar where id='$id'"); //hapus barang dengat _GET id
	header("Location: Atampil3.php?hapus=sukses");
exit();
?>