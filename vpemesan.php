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

      </style>
      </head>
      

	  <h2>DATA</h2>
	<br/>
	<a href="vtambah.php">+ TAMBAH DATA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
        <th>no</th> 
		<th>id</th>
			<th>email</th>
			<th>nomer_kamar</th>
			<th>tipe_kamar</th>
            <th>tanggal_check_in</th>
            <th>tanggal_check_out</th>
			
			
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from vreservasi");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
        
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['nomer_kamar']; ?></td>
                <td><?php echo $d['tipe_kamar']; ?></td>
                <td><?php echo $d['tanggal_check_in']; ?></td>
                <td><?php echo $d['tanggal_check_out']; ?></td>
				<td>
        
                </td>
            </tr>
            <?php 
        }
        ?>
    </table>

    <script>
        function confirmEdit(id) {
            var confirmEdit = confirm("Apakah Anda yakin ingin mengedit?");
            if (confirmEdit) {
                window.location.href = "edit.php?id=" + id;
            }
            
        }

        function confirmDelete(id) {
            var confirmDelete = confirm("Apakah Anda yakin ingin menghapus?");
            if (confirmDelete) {
                window.location.href = "hps.php?id=" + id;
            }
        }
        function showNotification(message) {
            alert(message);
        }

        <?php
        // Mengecek apakah query parameter 'hapus' ada pada URL
        if (isset($_GET['edit']) && $_GET['edit'] == 'sukses') {
            echo "showNotification('Data Anda Telah Diedit');";
        }
        ?>
        function showNotification(message) {
            alert(message);
        }

        <?php
        // Mengecek apakah query parameter 'hapus' ada pada URL
        if (isset($_GET['hapus']) && $_GET['hapus'] == 'sukses') {
            echo "showNotification('Data Anda Telah Dihapus');";
        }
        ?>
    </script>
</body>
</html>