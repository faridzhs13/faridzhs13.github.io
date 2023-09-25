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
      

	  <h2>DATA KAMAR</h2>
	<br/>
	<a class="add-button" href="tambah3.php">+ TAMBAH DATA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
		
			<th>id_pemesan</th>
			<th>nomer kamar</th>
			<th>tipe kamar</th>
            <th>harga kamar</th>
			<th>opsi</th>
			
		</tr>
		<?php 
		include 'Akoneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from kamar");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				
				<td><?php echo $d['nomer_kamar']; ?></td>
				<td><?php echo $d['tipe_kamar']; ?></td>
				<td><?php echo $d['harga_kamar']; ?></td>
				<td>
        <a href="#" onclick="confirmEdit(<?php echo $d['id']; ?>)" class="button-edit" >EDIT</a>
                    <a href="#" onclick="confirmDelete(<?php echo $d['id']; ?>)"  class="button-hapus">HAPUS</a>
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
                window.location.href = "Aedit2.php?id=" + id;
            }
        }

        function confirmDelete(id) {
            var confirmDelete = confirm("Apakah Anda yakin ingin menghapus?");
            if (confirmDelete) {
                window.location.href = "Ahps2.php?id=" + id;
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
