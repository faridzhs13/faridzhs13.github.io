<!DOCTYPE html>
<html>
<head>
    <title>FARID</title>
    <style>
        /* Reset margin dan padding default */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Gaya untuk navbar */
        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        /* Gaya untuk tautan di dalam navbar */
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Gaya tautan saat dihover */
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>

<div class="navbar">
<a href="Aindex.php">BERANDA</a>
    <a href="Aprom.php">KAMAR</a>
    <a href="AHubungi.php">HUBUNGI KAMI</a>
    <a href="Agabungan.php">DATA</a>
    <a href="Atampil2.php">DATA PEMESAN</a>
    <a href="Atampil3.php">DATA KAMAR</a>
    <a href="Atampil.php">DATA RESERVASI</a>
    <a href="ALogout.php">LOGOUT</a>
</div>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>Data Tabel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .add-button {
            background-color: #4CAF50;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none; /* Hapus underline */
        }
    </style>
</head>
<body>
    
<?php
// Koneksi ke database MySQL
$servername = "localhost"; // Ganti dengan hostname server MySQL Anda
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$database = "dbreservasihotel"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari view
$sql = "SELECT * FROM vreservasi";
$result = $conn->query($sql);

?>

<h1>Data Tabel</h1>

<!-- Tambahkan tombol Print -->
<button class="add-button" onclick="window.print()">CETAK LAPORAN</button>

<table border="1">
    <tr>
        <th>id</th>
        <th>nama</th>
        <th>email</th>
        <th>nomer_kamar</th>
        <th>tipe_kamar</th>
        <th>tanggal_check_in</th>
        <th>tanggal_check_out</th>
         <!-- Tambah kolom Action -->
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nama"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["nomer_kamar"] . "</td>";
            echo "<td>" . $row["tipe_kamar"] . "</td>";
            echo "<td>" . $row["tanggal_check_in"] . "</td>";
            echo "<td>" . $row["tanggal_check_out"] . "</td>";
            
            // Tambahkan tautan aksi "Tambah Data" di sebelah "tanggal_check_out"
            
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Tidak ada data dalam view.</td></tr>";
    }
    ?>
</table>

</body>
</html>

<?php
// Tutup koneksi
$conn->close();
?>

