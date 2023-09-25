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
<a href="index.php">BERANDA</a>
    <a href="prom.php">KAMAR</a>
    <a href="Hubungi.php">HUBUNGI KAMI</a>
    <a href="tampil2.php">DATA PEMESAN</a>
    <a href="tampil3.php">DATA KAMAR</a>
    <a href="tampil.php">DATA RESERVASI</a>
</div>

</body>
</html>

              
      

<?php
	include 'koneksi.php';
	
	
	if( isset($_POST['getreservasi']) ){
        $id = $_POST['id'];
		$id_kamar = $_POST['id_kamar'];
		$tanggal_check_in = $_POST['tanggal_check_in'];
		$tanggal_check_out = $_POST['tanggal_check_out'];
		

		$sql = "INSERT INTO reservasi (id, id_kamar, tanggal_check_in, tanggal_check_out ) VALUES ('$id','$id_kamar', '$tanggal_check_in', '$tanggal_check_out')";
		$result = mysqli_query($koneksi, $sql);

		if (!$result) {
			die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
		} else {
			header("Location: tampil.php");
			exit();
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemesan </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style3.css">
</head>
<body>
	
      <!-- End vertical navbar -->
      
      
      <!-- Page content holder -->
     
      <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card">
            <div class="card-header">
                Create
            </div>

            <div class="card-body">
         
   
            <form action="" method="POST">
            <div class="form-group">
                    <input type="number" class="form-control" name="id" placeholder="Masukkan id">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="id_kamar" placeholder="Masukkan id kamar">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="tanggal_check_in" placeholder="Masukkan ">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="tanggal_check_out" placeholder="Masukkan ">
                </div>
                <button name="getreservasi" type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
    
    <script src="js/js.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
