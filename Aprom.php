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
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Promosi Kamar</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
  }
  header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1em;
  }
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2em;
  }
  .promo {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 1em;
    margin-bottom: 1em;
    display: flex;
  }
  .promo img {
    max-width: 300px;
    margin-right: 1em;
  }
  .promo-content {
    flex: 1;
  }
  .proma {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 1em;
    margin-bottom: 1em;
    display: flex;
  }
  .proma img {
    max-width: 300px;
    margin-right: 1em;

  }
  .proma-content {
    flex: 1;
  }
</style>
</head>
<body>
<header>
  <h1>Promosi Hotel</h1>
</header>
<div class="container">
  <div class="promo">
    <img src="std.jpg" alt="Hotel Image 1">
    <div class="promo-content">
      <h2>Standard Room</h2>
      <p>Standard room merupakan tipe kamar terbawah yang ada di hotel. Biasanya di tipe kamar ini hanya terdapat satu single bed saja dengan fasilitas standar, seperti televisi, AC, telepon, toiletteries, kopi, dan teh.</p>
      <a href="Atambah.php" class="button">Pesan Sekarang</a>
    </div>
  </div>
  <div class="promo">
    <img src="deluxe.jpg" alt="Hotel Image 2">
    <div class="promo-content">
      <h2>Deluxe Room</h2>
      <p>Tipe kamar diatas superior adalah deluxe room. Perbedaannya terletak pada ukuran kamar. Kamar deluxe room biasanya berukuran hingga 40 m2. Sama seperti superior, deluxe room juga mempunyai pilihan double bed atau twin bed.</p>
      <a href="Atambah.php" class="button">Pesan Sekarang</a>
    </div>
  </div>
  

<div class="proma">
    <img src="suite.jpg" alt="Hotel Image 1">
    <div class="proma-content">
      <h2>Suite Room</h2>
      <p>Di dalam suite room juga terdapat ruang tamu dan dapur. Kamar ini layaknya apartemen yang berkelas dengan desain super wah.</p>
      <a href="Atambah.php" class="button">Pesan Sekarang</a>
    </div>
  </div>
</body>
</html>
