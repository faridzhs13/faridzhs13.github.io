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

    if (isset($_POST['ubahNomer'])) {
        $id = $_POST['ubah_id'];
        $QuerynomerkamarUbah = mysqli_real_escape_string($koneksi, $_POST['ubah_nomer_kamar']);
        $QuerytipekamarUbah = mysqli_real_escape_string($koneksi, $_POST['ubah_tipe_kamar']);
        $QueryhargakamarUbah = mysqli_real_escape_string($koneksi, $_POST['ubah_harga_kamar']);
    

        $query = "UPDATE kamar SET nomer_kamar='$QuerynomerkamarUbah', tipe_kamar='$QuerytipekamarUbah', harga_kamar='$QueryhargakamarUbah' WHERE id = '$id'";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Gagal Di Ubah " . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
        } else {
            header("Location: Atampil3.php?edit=sukses");
exit();
        }
    }

    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM kamar WHERE id='$id'");
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

      <div class="page-content p-5" id="content">
        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>
<div class="container-fluid">
    <form method="post" action="">
        <div class="mb-3">
            <label class="form-label">id</label>
            
            <input name="ubah_id" type="text" class="form-control" value="<?php echo $tampil["id"]; ?>" hidden>
        </div>
        <div class="mb-3">
            <label class="form-label">Nomer</label>
            <input name="ubah_nomer_kamar" type="text" class="form-control" value="<?php echo $tampil["nomer_kamar"]; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">tipe</label>
            <input name="ubah_tipe_kamar" type="text" class="form-control" value="<?php echo $tampil["tipe_kamar"]; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">harga</label>
            <input name="ubah_harga_kamar" type="text" class="form-control" value="<?php echo $tampil["harga_kamar"]; ?>">
        </div>
        
        <button name="ubahNomer" type="submit" class="btn btn-sm btn-primary">Simpan</button>
    </form>
</div>
<script src="js/js.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>