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
            <title>About Us</title>
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

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/profil.jpeg" alt="Maria" style="width:100%">
      <div class="container">
        <h2>Elvina</h2>
        <p class="title">CEO & Founder</p>
        <p>Seorang founder aplikasi PW Cepat</p>
        <p>elvina@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/profil2.jpg" alt="Shadu" style="width:100%">
      <div class="container">
        <h2>Shadu</h2>
        <p class="title">CEO & FOunder</p>
        <p>Seorang founder aplikasi PW Cepat</p>
        <p>shadu@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</body>