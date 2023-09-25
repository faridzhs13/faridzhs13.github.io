<?php
	include 'Akoneksi.php';

	$id = $_GET['id'];
	mysqli_query($koneksi, "delete from reservasi where id='$id'"); //hapus barang dengat _GET id
	header("Location: Atampil.php?hapus=sukses");
exit();
?>