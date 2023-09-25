<?php
include 'koneksi.php'; // Sertakan file koneksi.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_pemesan = $_POST['id_pemesan'];
    $id_kamar = $_POST['id_kamar'];
    $tanggal check-in= $_POST['tanggal check-in'];
    $tanggal check-out = $_POST['tanggal check-out'];


    $sql = "INSERT INTO reservasi (id_pemesan, id_kamar, tanggal check-in, tanggal check-out) VALUES ('$id_pemesan', '$id_kamar','$tanggal check-in','$tanggal check-out')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
