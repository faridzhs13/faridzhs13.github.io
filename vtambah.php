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
    <a href="index.php">Beranda</a>
    <a href="Hubungi.php">Hubungi Kami</a>
    <a href="tampil2.php">Tampil Data Pemesan</a>
    <a href="tampil3.php">Tampil Data Kamar</a>
    <a href="tampil.php">Tampil Data Reservasi</a>
    <a href="Login.php">Login</a>
</div>

</body>
</html>

              
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

<?php
	include 'koneksi.php';
	
	
	if( isset($_POST['getdata']) ){
        $id = $_POST['id'];
        $email = $_POST['email'];
		$nomer_kamar = $_POST['nomer_kamar'];
		$tipe_kamar = $_POST['tipe_kamar'];
		$tanggal_check_in = $_POST['tanggal_check_in'];
        $tanggal_check_out = $_POST['tanggal_check_out'];
		

		$sql = "INSERT INTO vreservasi (id, email, nomer_kamar, tipe_kamar, tanggal_check_in, tanggal_check_out ) VALUES ('$id','$email', '$nomer_kamar', '$tipe_kamar', '$tanggal_check_in', '$tanggal_check_out')";
		$result = mysqli_query($koneksi, $sql);

		if (!$result) {
			die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
		} else {
			header("Location: vpemesan.php");
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
     

    <div class="content-container">
            <h2>Form Data Pemesan</h2>
            <form action="" method="POST">
            <div class="form-group">
                    <input type="text" class="form-control" name="id" placeholder="Masukkan id">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Masukkan email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="nomer_kamar" placeholder="Masukkan nomer kamar">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="tipe_kamar" placeholder="Masukkan tipe kamar">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="tanggal_check_in" placeholder="Masukkan tanggal check in">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="tanggal_check_out" placeholder="Masukkan tanggal check out">
                </div>
                
                <button name="getdata" type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
    <script src="js/js.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
