<?php
	include 'Akoneksi.php';

	$id = $_GET['id'];
	mysqli_query($koneksi, "delete from pemesan where id='$id'"); //hapus barang dengat _GET id
	header("Location: Atampil2.php?hapus=sukses");
exit();
?>