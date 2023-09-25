<?php
include 'koneksi.php'; // Sertakan file koneksi.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nomer telepon= $_POST['nomer telepon'];


    $sql = "INSERT INTO pemesan (nama, email, nomer telepon) VALUES ('$nama', '$email','$nomer telepon')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
