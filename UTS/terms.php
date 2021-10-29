<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

    <!doctype html>
    <html lang="en">
    <head>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		    <link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.ico">
            <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500&display=swap" rel="stylesheet">
            <script src="java.js"></script>
            <link rel="stylesheet" type="text/css" href="style2.css">
            <title>Terms</title>
    </head>

<body>
<div class="navbar">
  <a href="berhasil_login.php">Home</a>
  <a href="index2.php">Order</a>
  <div class="dropdown">
    <button class="dropbtn">Information
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="terms.php">Terms</a>
      <a href="location.php">Location</a>
    </div>
  </div>
  <a href="about.php">About Us</a>
</div>
<aside >   
<h2>
	<img src="images/information.jpg" width="600" height="200" style="display: block; margin: auto;">
	<p align="center">Terms and Condition</p>
</h2>

<div class="terms">
  <h3>Kententuan</h3>
  <p>1. Pengirim harus mengemas paket dengan benar untuk melindungi isi paket selama transportasi. Jika timbul kerugian karena pengemasan yang tidak tepat, maka kerugian tersebut menjadi tanggung jawab pengirim.</p>
  <p>2. Pengirim harus memberitahukan dengan jelas dan benar isi dan nilai paket. Informasi yang tidak benar mengenai hal ini sepenuhnya tanggung jawab pengirim</p>
  <p>3. PAW CEPAT melarang pengiriman barang seperti hewan, obat-obatan, senjata, dan bahan yang mudah terbakar.</p>
  <p>4. PAW CEPAT berhak namun tidak wajib unutk memeriksa pake pengirim yang ingin dikirim.</p>
  <p>5. Dalam proses pengiriman, PAW CEPAT tidak menjamin seluruh proses akan berjalan lancar, mungkin saja disebabkan oleh hal-hal yang tidak diinginkan</p>
  <p>6. Pengirim bertanggung jawab untuk melindungi paket dengan asuransi yang memadai</p>
  <p>7. PAW CEPAT tidak akan memberikan ganti rugi terhadap pengirim akibat kejadian atau hal-hal yang tidak diinginkan</p>
  <p>8. Jika tidak ada komplain dari penerima saat paket dikirimkan, maka paket dianggap telah diterima dengan baik dan benar.</p>
  <p>9. Pengaduan/tuntutan atas kehilangan atau kerusakan harus disampaikan oleh pengirim (bukan penerima) paling lambat 3 (tiga) hari sejak diterimanya barang beserta dokumen terkait.</p>
<div>
</body>   