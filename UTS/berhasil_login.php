<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
 
 <!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<body>

<!-- Navigation -->
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

<!-- Slide Show -->
<section>
  <img class="mySlides" src="images/background4.jpeg"
  style="width:100%">
  <img class="mySlides" src="images/background5.jpeg"
  style="width:100%">
  <img class="mySlides" src="images/background6.jpeg"
  style="width:100%">
</section>

<center><h2>PW Cepat</h2></center>
<center><p class="w3-opacity"><i>Mengirimkan barang anda dengan cepat</i></p></center>
<p>PAW CEPAT adalah jasa pengiriman barang terpercaya nomor 1 di Indonesia dan sudah berdiri sejak tahun 1999. Jasa pengiriman barang ini didirikan oleh 2 mahasiswa Atma Jaya Yogyakarta yang bernama Maria Elvina Siti dan I Gusti Putu Pramudya Sadhu Dharma. Jasa pengiriman ini sudah banyak dipercaya oleh masyarakat Indonesia dan menjadikan jasa pengiriman yang paling laris dan mempunyai banyak keuntungan..</p>
<!-- Band Description --

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">
  </p>
</footer>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>

</body>
</html>