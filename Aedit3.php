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
</div>

</body>
</html>
              
          

<?php
    include 'Akoneksi.php';

    if (isset($_POST['ubahTanggal'])) {
        $id = $_POST['ubah_id'];
        $Queryid_kamar_Ubah = mysqli_real_escape_string($koneksi, $_POST['Ubah_id_kamar']);
        
        $Querytanggal_check_in_Ubah = mysqli_real_escape_string($koneksi, $_POST['Ubah_tanggal_check_in']);
        $Querytanggal_check_out_Ubah = mysqli_real_escape_string($koneksi, $_POST['Ubah_tanggal_check_out']);

        $query = "UPDATE reservasi SET id_kamar='$Queryid_kamar_Ubah',tanggal_check_in='$Querytanggal_check_in_Ubah', tanggal_check_out='$Querytanggal_check_out_Ubah'  WHERE id = '$id'";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Gagal Di Ubah " . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
        } else {
            header("Location: Atampil.php?edit=sukses");
exit();
        }
    }

    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM reservasi WHERE id='$id'");
    while ($tampil = mysqli_fetch_array($data)) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | web </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style3.css">
</head>
<body>

<div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card">
            <div class="card-header">
                EDIT
            </div>

            <div class="card-body">
         
   
            <form action="" method="POST">
            <div class="form-group">
                    <input type="number" class="form-control" name="ubah_id" placeholder="Masukkan id">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="Ubah_id_kamar" placeholder="Masukkan id kamar">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="Ubah_tanggal_check_in" placeholder="Masukkan ">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="Ubah_tanggal_check_out" placeholder="Masukkan ">
                </div>
                <button name="ubahTanggal" type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
<script src="js/js.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>