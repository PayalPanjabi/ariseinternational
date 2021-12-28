
<!doctype html>
<html lang="zxx">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.min.css">

<link rel="stylesheet" href="assets/css/meanmenu.css">

<link rel="stylesheet" href="assets/css/boxicons.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">

<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="assets/css/odometer.min.css">

<link rel="stylesheet" href="assets/css/magnific-popup.min.css">

<link rel="stylesheet" href="assets/css/imagelightbox.min.css">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/responsive.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<title>ARISE International</title>
<link rel="icon" type="image/png" href="assets/img/logo_white.jpg">

<style>
	/* .testimonials-item img{
		width: 609.333px;
	} */

	<style>
* {box-sizing: border-box;}
/* body {font-family: Verdana, sans-serif;} */
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.dot:active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
<?php include("header.php");?>

<!-- <div class="page-banner-area">
 <div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="page-banner-content">
<h2>News</h2>
<ul>
<li>
<a href="index.html">Home</a>
</li>
<li>News</li>
</ul>
</div>
</div>
</div>
</div>
</div> -->

<!-- <div class="lg-device newsletter-area ptb-70 banner-img">
	<div class="container">
		
		<div class="row align-items-center">
			<div class="col-lg-1"></div>
			<div class="col-lg-3" style="box-shadow: 0 2px 28px 0 rgb(190 191 192);padding: 20px;background: white;">
			<h3 style="text-align:center;">One Child One Tree</h3>
				<img src="assets/img/newsletter/School News oc ot.copy1.jpg" />
			
			</div>
			<div class="col-lg-3" style="box-shadow: 0 2px 28px 0 rgb(190 191 192);padding: 20px;background: white;">
			<h3 style="text-align:center;">One Child One Tree</h3>
				<img src="assets/img/newsletter/IMG-20211024-WA0000.jpg" />
			
			</div>
			<div class="col-lg-3" style="box-shadow: 0 2px 28px 0 rgb(190 191 192);padding: 20px;background: white;">
			<h3 style="text-align:center;">One Child One Tree</h3>
				<img src="assets/img/newsletter/IMG-20211026-WA0002.jpg" />
			
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-3" style="box-shadow: 0 2px 28px 0 rgb(190 191 192);padding: 20px;background: white;">
			<h3 style="text-align:center;">One Child One Tree</h3>
				<img src="assets/img/newsletter/IMG-20211025-WA0000.jpg" />
			
			</div>
		</div>
	</div>

</div> -->

<section class="banner-img">
	<br>
<h2 style="text-align:center;">Media Coverage</h2> 
	<div class="slideshow-container">

	<div class="mySlides fade" style="padding:20px;item-align:center;">
		<img src="assets/img/newsletter/School News oc ot.copy1.jpg" style="border: 2px solid black;"/>
	</div>

	<div class="mySlides fade" style="padding:20px;">
		<img src="assets/img/newsletter/IMG-20211024-WA0000.jpg" style="border: 2px solid black;"/>
	</div>

	<div class="mySlides fade" style="padding:20px;">
		<img src="assets/img/newsletter/IMG-20211026-WA0002.jpg" style="border: 2px solid black;"/>

	</div>
	<div class="mySlides fade" style="margin-left:20px">
		<img src="assets/img/newsletter/IMG-20211025-WA0000.jpg" style="border: 2px solid black;"/>

	</div>
	

	<div style="text-align:center">
	<span class="dot"></span> 
	<span class="dot"></span> 
	<span class="dot"></span>
	<span class="dot"></span> 
	</div>
</section>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


<?php include("footer.php");?>

<div class="go-top">
<i class='bx bx-up-arrow-alt'></i>
</div>

<body>
</html>