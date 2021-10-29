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
            <title>Lokasi</title>
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
<div class="nama">
    <center><h1>LOKASI</h1></center>
</div>

    
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15812.832835837213!2d110.38916178546589!3d-7.767732149984808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5911e7c55f5b%3A0xd8f2983b80b6ac84!2sJnT%20Express%20Selokan%20Mataram!5e0!3m2!1sid!2sid!4v1635152441795!5m2!1sid!2sid" width="900" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>
</body>   