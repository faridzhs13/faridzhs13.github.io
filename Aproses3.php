<?php
include 'koneksi.php'; // Sertakan file koneksi.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_pemesan = $_POST['id_pemesan'];
    $nomer kamar = $_POST['nomer kamar'];
    $tipe kamar = $_POST['tipe kamar'];
    $harga kamar = $_POST['harga kamar'];

    $sql = "INSERT INTO pemesan (id_pemesan, nomer kamar, tipe kamar, harga kamar) VALUES ('$id_pemesan', '$nomer kamar','$tipe kamar','$harga kamar')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
