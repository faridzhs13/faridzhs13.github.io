<?php

$host = "localhost"; // Ganti dengan host Anda
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$database = "reservasi"; // Ganti dengan nama database Anda


// Membuat koneksi
$conn = new mysqli($localhost, $root, $password, $reservasi);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel
$sql = "SELECT * FROM pemesan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nama"] . "</td><td>" . $row["email"] . "</td></tr>". $row["nomer telepon"] . "</td><td>";
    }
} else {
    echo "<tr><td colspan='3'>Tidak ada data.</td></tr>";
}

// Menutup koneksi
$conn->close();
?>
