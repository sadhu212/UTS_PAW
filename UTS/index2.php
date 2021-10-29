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
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
            <link rel="stylesheet" type="text/css"   href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <title>Order</title>
    </head>

<body>
    <style>
        /* Navbar container */
.navbar {
    overflow: hidden;
    background-color: rgb(180, 57, 57);
    font-family: Arial;
  }
  
  /* Links inside the navbar */
  .navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  /* The dropdown container */
  .dropdown {
    float: left;
    overflow: hidden;
  }
  
  /* Dropdown button */
  .dropdown .dropbtn {
    font-size: 16px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit; /* Important for vertical align on mobile phones */
    margin: 0; /* Important for vertical align on mobile phones */
  }
  
  /* Add a red background color to navbar links on hover */
  .navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
  }
  
  /* Dropdown content (hidden by default) */
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  /* Links inside the dropdown */
  .dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }
  
  /* Add a grey background color to dropdown links on hover */
  .dropdown-content a:hover {
    background-color: #ddd;
  }
  
  /* Show the dropdown menu on hover */
  .dropdown:hover .dropdown-content {
    display: block;
  }
    </style>

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
    <center><h1>Order</h1></center>
</div>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Form Tambah Data Dinamis</div>
    <div class="panel-body">
      <!-- membuat form  -->
      <!-- gunakan tanda [] untuk menampung array  -->
        <form action="proses.php" method="POST">
          <div class="control-group after-add-more">
            <label>Nama Pengirim</label>
            <input type="text" name="nama pengirim[]" class="form-control">
            <label>Lokasi Pengirim</label>
            <select class="form-control" name="lokasi pengirim[]">
                <option>Jakarta</option>
                <option>Bali</option>
                <option>Bandung</option>
                <option>Yogyakarta</option>
                <option>Semarang</option>
                <option>Papua</option>
              </select>
            <label>Nama Penerima</label>
            <input type="text" name="nama penerima[]" class="form-control">
            <label>Lokasi Penerima</label>
            <select class="form-control" name="lokasi penerima[]">
                <option>Jakarta</option>
                <option>Bali</option>
                <option>Bandung</option>
                <option>Yogyakarta</option>
                <option>Semarang</option>
                <option>Papua</option>
              </select>
            <label>Tanggal Pengiriman</label>
            </br><input type="date" name="tanggal pengiriman[]" required>
            </br><label>Harga</label>
            <input type="int" name="harga[]" class="form-control">
            <br>
            <button class="btn btn-success add-more" type="button">
              <i class="glyphicon glyphicon-plus"></i> Add
            </button>
            <hr>
          </div>
          <button class="btn btn-success" type="submit">Submit</button>
        </form>

        <!-- class hide membuat form disembunyikan  -->
        <!-- hide adalah fungsi bootstrap 3, klo bootstrap 4 pake invisible  -->
        <div class="copy hide">
            <div class="control-group">
            <label>Nama Pengirim</label>
            <input type="text" name="nama pengirim[]" class="form-control">
            <label>Lokasi Pengirim</label>
            <select class="form-control" name="lokasi pengirim[]">
                <option>Jakarta</option>
                <option>Bali</option>
                <option>Bandung</option>
                <option>Yogyakarta</option>
                <option>Semarang</option>
                <option>Papua</option>
              </select>
            <label>Nama Penerima</label>
            <input type="text" name="nama penerima[]" class="form-control">
            <label>Lokasi Penerima</label>
            <select class="form-control" name="lokasi penerima[]">
                <option>Jakarta</option>
                <option>Bali</option>
                <option>Bandung</option>
                <option>Yogyakarta</option>
                <option>Semarang</option>
                <option>Papua</option>
              </select>
            <label>Tanggal Pengiriman</label>
            </br><input type="date" name="tanggal pengiriman[]" required>
            </br><label>Harga</label>
            <input type="int" name="harga[]" class="form-control">
              <br>
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
              <hr>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<!-- fungsi javascript untuk menampilkan form dinamis  -->
<!-- penjelasan :
saat tombol add-more ditekan, maka akan memunculkan div dengan class copy -->
<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });

      // saat tombol remove dklik control group akan dihapus 
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
</body> 
</html>  