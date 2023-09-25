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

              
        

<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan Database</title>
</head>
<body>
 


<style>
        body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
          background-color: #f5f5f5;
        }
        .container {
          max-width: 1200px;
          margin: 0 auto;
          padding: 2em;
        }
        .table-container {
          max-width: 800px;
          margin: 0 auto;
          background-color: #fff;
          border-radius: 8px;
          padding: 1em;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        table {
          width: 100%;
          border-collapse: collapse;
        }
        table, th, td {
          border: 1px solid black;
          padding: 8px;
        }
        th {
          background-color: #333;
          color: white;
        }
        form {
          max-width: 400px;
          margin: 20px auto;
          padding: 10px;
          background-color: #fff;
          border-radius: 8px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
          display: block;
          margin-top: 10px;
          font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"] {
          width: 100%;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 4px;
          margin-top: 5px;
        }

        .button-edit {
            background-color: blue;
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 4px;
        }

        /* Ganti warna tombol edit saat dihover */
        .button-edit:hover {
            background-color: darkwhite;
        }

        /* Ganti warna latar belakang tombol saat tombol dihover */
.button-hapus {
    background-color: red;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 4px;
    text-decoration: none;
    cursor: pointer;
}

.button-hapus:hover {
    background-color:darkwhite ;
}

.add-button {
            background-color: green;
            color: white;
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 4px;
            margin: 10px;
        }

        /* Ganti warna tombol saat dihover */
        .add-button:hover {
            background-color: black;
        }

</style>
      </head>
      

	  <h2>DATA PEMESAN</h2>
	<br/>
  <a class="add-button" href="tambah.php">+ TAMBAH DATA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
		<th>id</th>
			<th>nama</th>
			<th>email</th>
			<th>nomer telepon</th>
			
			
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from pemesan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
        
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['nomer_telepon']; ?></td>
				<td>
        
                </td>
            </tr>
            <?php 
        }
        ?>
    </table>

</body>
</html>