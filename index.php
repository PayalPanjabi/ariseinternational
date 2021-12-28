<!doctype html>
<html lang="zxx">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
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
<title>ARISE International</title>
<link rel="icon" type="image/png" href="assets/img/logo_white.jpg">
<link rel="stylesheet" rel="preload" href="assets/css/slider.css" as="style" onload="this.rel='stylesheet'" />
<style>
    .mySlides {display: none;}
/* img {vertical-align: middle;} */

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

.active {
  /* background-color: #717171; */
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

@media only screen and (max-width: 800px) {
			.main-contenter {
			    margin-top: 936px;
			}
			.main-slider-img {
				height: 250px;
			}
			.info-box {
				margin-top: 259px;
				width: 100% !important;
			}
			.info-box .info-title{
				font-size: 2.7rem;
			}
			.mob-center{
				text-align: center;
			}
			.nav-fill .nav-item{
				width: 50%;
			} 
		}

#mainSlider{
		display: block;
	}
	#mainSliderM{
		/* display: none; */
	}
@media (max-width: 800px) {
	#mainSlider{
		/* display: none !important; */
	}
	#mainSliderM{
		display: block !important;
	}
.nav-link {
    display: block;
    padding: .5rem 0;
}
}
.top-notice-bar{
  background: #E21826;
    /* padding: 20px; */
    /* border-radius: 5px; */
    height: 59px;
    color: #fff;
}
.carousel-content{
    text-align: center;
    margin-top: 281px;
    font-size: 57px;
    color: #fff;
    /* padding-bottom: 43px; */
    margin-left: 438px;
    background-color: rgb(46 38 38 / 40%);
    width: 484px;
    padding: 39px;
}

/*  */
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
/*.modal-content {*/
/*  background-color: #fefefe;*/
/*  margin: auto;*/
/*  padding: 20px;*/
/*  border: 1px solid #888;*/
/*  width: 93%;*/
/*}*/

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
/* desktop */
@media only screen and (min-width: 992px) {
     .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 36%;
    }
    video{
        width:400px;
    }
}
@media only screen and (max-width: 600px) {
    .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 93%;
    }
    video{
        width:100%;
    }
}
</style>
</head>
<body>
<?php include("header.php");?>

<div id="mainSlider" class="carousel slide main-slider pos-fixed" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#mainSlider" data-slide-to="0" class="active"></li>
								<li data-target="#mainSlider" data-slide-to="1"></li>
                <!-- <li data-target="#mainSlider" data-slide-to="2"></li>						 -->
              	</ol>
								<div class="carousel-inner">
                    <div class="carousel-item">
                      <!-- <div class="carousel-content">
                        <div>
                          <h2 style="color: #fff;">ARISE International School</h2>
                         
                        </div>
                      </div>
                    </div> -->
                    <img src="assets/img/child-img/AriseBuilding.png" 
                    class="d-block main-slider-img imgpren w-100" height="277" alt="Ganga Utopia Image 1" srcset="" >
                    
                 
								</div>							
								<!-- <div class="carousel-item">
									<img src="assets/img/slider2.png" 
                  class="d-block main-slider-img imgpren w-100" height="277" alt="Prestige Waterford Image 1" 									srcset=""  >
								</div> -->
								<div class="carousel-item">
									<img src="assets/img/child-img/slider2.png" 
                  class="d-block main-slider-img imgpren w-100" height="50%" alt="Prestige Waterford Image 1" 									srcset=""  >
								</div>
						
											 </div>
                      
                 </div>


    <div class="top-notice-bar" >
      <marquee scrolldelay="0" width="100%" direction="left" vspace="0"     onmouseover="this.stop();" onmouseout="this.start();">
          <h3 style="color:white;padding-top:17px;"> Admissions Open from KG to XI Std for Academic Year 2022-23</h3>
          <h1 dir="ltr" id="docs-internal-guid-62ddc8fa-7fff-bab9-81ed-a576f13acd13" style="line-height: 1.656; margin-top: 18pt; margin-bottom: 4pt; text-align: justify;">
            &nbsp;</h1>
          <p>
            &nbsp;</p>
        </marquee>
    </div>

<section class="who-we-are ptb-100">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="who-we-are-image">
<img src="assets/img/child-img/about.png" alt="image">
</div>
</div>
<div class="col-lg-6">
<div class="who-we-are-content">
<!-- <span>About Us</span> -->
  <h3>About Us</h3>
  <p><b style="font-weight:bold;">Arise International School</b> is founded in the year 2019-20 under the aegis of JSPM (Jaykranti Shikshan Prasark Mandal Latur) established by Hon’ Shri. Shivajirao Patil Kavehkar an ex-MLA Latur, a visionary educator, banker, spiritualist and a social crusader. The JSPM Group is a premier group of institutes redefining education in the sectors of pre-schools, high schools, Jr. colleges, Polytechnic, Nursing, UG and PG colleges.

    <a href="about.php" style="color:red;">Read More</a>
</p>
<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
<br>
<div class="event-box-item" style="background: #66aef4;color: white;">
    <div class="row align-items-center">
        <div class="col-md-8">
            <div class="event-content">
                <h3>
                <a href="#" style="color:white;">Admissions Open For The Session</a>
                </h3>
                
                <h3  style="color:white;">2022-23</h3>
               
            </div>
        </div>
        <div class="col-md-4">
            <div class="event-date">
                <!-- <h4>12</h4> -->
                <!-- <button style="padding: 11px; background: white;border: white;color: black;
                font-weight: 900;"><a href="admission.php">Enquire Now</button> -->
                <a href="admission.php" class="default-btn">Enquire Now</a>
            </div>
        </div>
    </div>
</div>
<!--  -->
<div class="event-box-item" style="background: #66aef4;
    color: white;
    padding: 11px;">
    <div class="row align-items-center">
        <div class="col-md-8">
            <!-- <div class="event-content"> -->
                <h3>
                <a href="#" style="color:white;">ARISE SCHOOL VIRTUAL TOUR</a>
                </h3>
               
            <!-- </div> -->
        </div>
        <div class="col-md-4">
            <div class="event-date">
                <!-- <h4>12</h4> -->
                <!-- <button style="padding: 11px; background: white;border: white;color: black;
                font-weight: 900;"><a href="admission.php">Enquiry Now</button> -->
                <a id="myBtn" class="default-btn">Play &nbsp;<i class="fa fa-play" aria-hidden="true"></i>
</a>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>

<div class="who-we-are-shape">
<img src="assets/img/main-banner/banner-shape-2.png" alt="image">
</div>
</section>

<section class="class-area bg-dcf2f1 pt-100 pb-70" >
<div class="container">
<div class="section-title">

</div>
<div class="row">

<div class="col-lg-3 col-md-6">
<div class="single-class">
<div class="class-image">
<a href="#">
<img src="assets/img/news-presentation.png" alt="image">
</a>
</div>
 <div class="class-content lg-device-content">
<h3>
<a href="#">News & Presentations</a>
</h3>
<p>One Child One Tree.</p>
<br>
<div class="class-btn">
<a href="news.php" class="default-btn">Read More</a>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="single-class">
<div class="class-image">
<a href="#">
<img src="assets/img/child-img/IMG_1815.JPG" alt="image" class="thoughts-img">
</a>
</div>
    <div class="class-content lg-device-content">
    <!-- <div class="price">$790</div> -->
    <h3>
    <a href="#">Circulars</a>
    </h3>

    <ul style="list-style: none;margin-left: -31px;font-size: 14px;">
        <li style="border-bottom: 1px solid lightgray;padding-bottom: 7px;">
            <a href="">Online Classes Circular. Online Classes ...</a>
        </li>
        <li style="border-bottom: 1px solid lightgray;padding-bottom: 7px;">
            <a href="">Learn At Home. 
                Learn At Home
            </a>
        </li>
        <li style="border-bottom: 1px solid lightgray;padding-bottom: 7px;">
        <a href="">Dance and Ramp Walk Circular. Dance an..</a>
        </li>
    </ul>
    <div class="class-btn">
    <a href="presentations.php" class="default-btn">Read More</a>
    </div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="single-class">
<div class="thoughts-cbsc-img class-image" >
<a href="#">
<img src="assets/img/child-img/cbse.png" alt="image" >
</a>
</div>
    <div class="class-content lg-device-content">
    <!-- <div class="price">$790</div> -->
    <h3>
    <!-- <a href="#">Admission Policies</a> -->
    <a href="#">Why CBSE ?</a>
    </h3>

    <p>The Central Board of Secondary Education is popularly known as CBSE is one of the most prestigious educational boards in India..</p>
    <div class="class-btn">
    <a href="whycbse.php" class="default-btn">Read More</a>
    </div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 offset-lg-0 offset-md-3">
    <div class="single-class">
        <div class="class-image">
            <a href="#">
            <img src="assets/img/notice-board.png" alt="image">
            </a>
        </div>
        <div class="class-content lg-device-content">
            <!-- <div class="price">$590</div> -->
            <h3>
            <a href="#">Notice Board</a>
            </h3>
            <div class="white-box-content">
                <marquee class="marquee-notice" scrolldelay="0" height="130" direction="up" vspace="0" onmouseover="this.stop();" onmouseout="this.start();">
                        <h2 style="color: blue;font-size:15px;">
                    School Timing</h2>
                    <p>
                        &nbsp;</p>
                    <p>
                        <!--<tt><span style="">-->
                            Pre- Primary
                            <!--</span></tt>-->
                            </p>
                    <p>
                        <!--<tt><span style="">-->
                            9: 30 AM To 12:30 PM
                            <!--</span></tt>-->
                            </p>
                    <p>
                    <!--<tt><span style="">&nbsp;<br>-->
                    <!--<br>-->
                    Primary &amp; Middle School<br>
                    8:00 AM To 2:30 PM
                    <!--</span></tt>-->
                    </p>

                </marquee>
            </div>
            
            <!-- <div class="class-btn">
            <a href="#" class="default-btn">Join Class</a>
            </div> -->
        </div>
    </div>
</div>

<!-- <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
    <div class="single-class">
        <div class="class-image">
            <a href="#">
            <img src="assets/img/class/class-3.jpg" alt="image">
            </a>
        </div>
        <div class="class-content">
            <div class="price">$590</div>
            <h3>
            <a href="#">Drawing</a>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <ul class="class-list">
            <li>
            <span>Age:</span>
            3-5 Year
            </li>
            <li>
            <span>Time:</span>
            8-10 AM
            </li>
            <li>
            <span>Seat:</span>
            25
            </li>
            </ul>
            <div class="class-btn">
            <a href="#" class="default-btn">Join Class</a>
            </div>
        </div>
    </div>
</div> -->
</div>
</div>
<!-- <div class="class-shape">
  <div class="shape-1">
    <img src="assets/img/class/class-shape-1.png" alt="image">
  </div>
  <div class="shape-2">
    <img src="assets/img/class/class-shape-2.png" alt="image">
  </div>
</div> -->
</section>
<!-- <section class="value-area ptb-100">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="value-image">
<img src="assets/img/value/value-1.png" alt="image">
</div>
</div>
<div class="col-lg-6">
<div class="value-item">
<div class="value-content">
<span>Our Core Values</span>
<h3>We are Refunding Early Childcare Education</h3>
</div>
<div class="value-inner-content">
<div class="number">
<span>01</span>
</div>
<h4>Active Learning</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
<div class="value-inner-content">
<div class="number">
<span class="bg-2">02</span>
</div>
<h4>Safe Environment</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
<div class="value-inner-content">
<div class="number">
<span class="bg-3">03</span>
</div>
<h4>Fully Equipment</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
</div>
</div>
</div>
</div>
<div class="value-shape">
<div class="shape-1">
<img src="assets/img/value/value-shape-1.png" alt="image">
</div>
<div class="shape-2">
<img src="assets/img/value/value-shape-2.png" alt="image">
</div>
<div class="shape-3">
<img src="assets/img/value/value-shape-3.png" alt="image">
</div>
</div>
</section> -->

<!--  virtual tool -->
<!-- <section class="blog-area pt-100 pb-70">
  <div class="container">
    <div class="section-title">
      <span>Video</span>
      <h2>  Virtual Tool </h2>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6" style="text-align: center;">
          
          <video width="400" controls>
            <source src="assets/img/VIRTUAL_TOUR.mp4" type="video/mp4">
            Your browser does not support HTML video.
          </video>
          <h4 style="color: #ea512e;">ARISE SCHOOL VIRTUAL TOUR</h4>
      </div>
      <div class="col-lg-6 col-md-6" style="text-align: center;">
          
          <video width="400" controls>
            <source src="assets/img/VIRTUAL_TOUR.mp4" type="video/mp4">
            Your browser does not support HTML video.
          </video>
          <h4 style="color: #ea512e;">ARISE ANNUAL DAY 2019 20</h4>
      </div>
    </div>
  </div>
</section> -->

<!-- <section class="testimonials-area pt-100 pb-100">
  <div class="container">
    <div class="section-title">
      <span>Video</span>
      <h2> Virtual Tool</h2>
    </div>
    <div class="testimonials-slides owl-carousel owl-theme">
      <div class="testimonials-item">
        <div class="testimonials-image">
          <h4>ARISE SCHOOL VIRTUAL TOUR</h4>
          <video width="400" controls>
            <source src="https://youtu.be/wMeIfxiPR7E" type="video/mp4">
            Your browser does not support HTML video.
          </video>
         
        </div>
      </div>
      <div class="testimonials-item">
        <div class="testimonials-image">
          <video width="400" controls>
            <source src="https://youtu.be/wMeIfxiPR7E" type="video/mp4">
            Your browser does not support HTML video.
          </video>
        </div>
      </div>
      <div class="testimonials-item">
        <div class="testimonials-image">
          <video width="400" controls>
            <source src="assets/img/mov_bbb.mp4" type="video/mp4">
            Your browser does not support HTML video.
          </video>
        </div>
      </div>
    </div>
  </div>
</section>  -->

<section class="teacher-area bg-ffffff pt-100 pb-70">
<div class="container-fluid">
<div class="section-title">
 <span>Our</span>
<h2>THOUGHTS</h2>
</div>
<div class="row">
<div class="col-lg-3 col-md-6">
<div class="single-teacher">
<div class="image">
<img src="assets/img/THOUGHTS/01 JSPM.jpg" alt="image" style="height: 331px;width: 337px;">
<!-- <ul class="social">
<li>
<a href="#" target="_blank">
<i class='bx bxl-facebook'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-twitter'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-linkedin'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-instagram'></i>
</a>
</li>
</ul> -->
</div>
<div class="content">
<h4>FROM THE DESK OF PRESIDENT</h4>
<!-- <span>Mr. Shivajirao Patil Kavhekar Founder President ARISE INTERNATIONAL
     SCHOOL is a vision driven school committed to meet the educational needs of our...</span> -->
<p style="text-align:center;">Mr. Shivajirao Patil Kavhekar Founder President ARISE INTERNATIONAL
     SCHOOL is a vision driven school committed to meet the educational needs of our...</p>
     <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->
      <!-- Modal -->

    <span><a href="persident.php">Read More</a></span>
 
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="single-teacher">
<div class="image">
<img src="assets/img/THOUGHTS/ajeetsinh.png" alt="image" style="height: 331px;width: 337px;">
<!-- <ul class="social">
<li>
<a href="#" target="_blank">
<i class='bx bxl-facebook'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-twitter'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-linkedin'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-instagram'></i>
</a>
</li>
</ul> -->
</div>
<div class="content">
<h4>FROM THE DESK OF VICE PRESIDENT</h4>
<p style="text-align:center;">Mr. Ajeetsinh Patil Kavhekar Vice President J.S.P.M. Latur (India) AIS is launched in 
    2019 with a vision of being the best school in Maha...</p>
<span><a href="managing-director.php">Read More</a></span>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="single-teacher">
<div class="image">
<img src="assets/img/THOUGHTS/02 JSPM.jpg" alt="image" style="height: 331px;width: 337px;">
<!-- <ul class="social">
<li>
<a href="#" target="_blank">
<i class='bx bxl-facebook'></i>
 </a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-twitter'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-linkedin'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-instagram'></i>
</a>
</li>
</ul> -->
</div>
<div class="content">
<h4>FROM THE DESK OF SECRETARY</h4>
<p style="text-align:center;">Mrs.Pratibha Shivajirao Patil Kavhekar Secretary J.S.P.M. Latur (India) ARISE INTERNATIONAL SCHOOL. 
    Today school education plays a very important r...</p>
<span><a href="secretary.php">Read More</a></span>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="single-teacher">
<div class="image">
<img src="assets/img/THOUGHTS/04 JSPM.jpg" alt="image" style="height: 331px;width: 337px;">
<!-- <ul class="social">
<li>
<a href="#" target="_blank">
<i class='bx bxl-facebook'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-twitter'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-linkedin'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-instagram'></i>
</a>
</li>
</ul> -->
</div>
<div class="content">
<h4>FROM THE DESK OF PRINCIPAL</h4>
<p style="text-align:center;">The Roots of Education Are Bitter, But The Fruits Are Sweet -Aristotle. Mr. Jitendra
     Khairnar (Principal) I heartily welcome you in the mini world...</p>
     <span><a href="principal.php">Read More</a></span>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Testimonials -->
<section class="lg-device testimonials-area pt-100 pb-100">
  <div class="container">
    <div class="section-title">
     
      <h2>Testimonials</h2>
    </div>
    <div class="testimonials-slides owl-carousel owl-theme">
    <div class="testimonials-item">
      <div class="testimonials-item-box">
          <div class="icon">
            <img src="assets/img/testimonials/MsMayuriKapure.JPG" alt="image">
          </div>
           <p>“School culture is very nice, teaching staff is attentive, enthusiastic, energetic and takes care of my child. Principal sir personally looks after the children’s well-being and always motivates them to do more in each area. Guides all students in every domain and tries to enhance the skill of all students.” </p>
          <div class="info-box">
            <h3>Ms. Mayuri Kapure</h3>
            <span>Parent </span>
          </div>
        </div>
    </div>
    <div class="testimonials-item">
      <div class="testimonials-item-box">
          <div class="icon">
            <img src="assets/img/testimonials/gopal.png" alt="image">
          </div>
           <p>“Good school infrastructure for classroom ventilation day light comes in all classrooms. Location is accessible. Even though the school is just two years old school top management experience in this field visible in all planning along with professional school principal and teachers.”  </p><br>
          <div class="info-box">
            <h3>Mr. Mahadeo Gopale</h3>
            <span>Parent </span>
          </div>
        </div>
    </div>
    <div class="testimonials-item">
      <div class="testimonials-item-box ">
          <div class="icon">
            <img src="assets/img/testimonials/MsRakhiVS.JPG" alt="image">
          </div>
           <p>“The school is creating a niche for itself, with concepts and ideas which are generating interest & involvement in the community.
          The children are encouraged to be curious learners with hand-on experiences.”  Arise is the most happening place for me and my kids.”  
          </p><br>
          <div class="info-box">
            <h3>Ms. Rakhi VS</h3>
            <span>Teacher  </span>
          </div>
        </div>
    </div>
    <div class="testimonials-item">
      <div class="testimonials-item-box ">
          <div class="icon">
            <img src="assets/img/testimonials/MsDeepikaChowrey.jpeg" alt="image">
          </div>
           <p>“Arise International School provides a good and healthy working environment. The school is setting higher standards of education. The school is committed to provide education that helps to develop children into balanced personalities.”
          </p><br><br>
          <div class="info-box">
            <h3>Ms. Deepika Chowrey</h3>
            <span>Teacher  </span>
          </div>
        </div>
    </div>
    <div class="testimonials-item">
      <div class="testimonials-item-box">
          <div class="icon">
            <img src="assets/img/testimonials/student2.jpg" alt="image">
          </div>
           <p>“ I love playing basketball on the school basketball court and our sports ground where I can challenge the boys to a good game. I admire my teachers who take a lot of efforts to teach us. Our school conducts a lot of extracurricular activities and my friends and me love participating in each and every one of them”.
          </p><br>
          <div class="info-box">
            <h3>Samiksha Saini</h3>
            <span>Student   </span>
          </div>
        </div>
    </div>
    <div class="testimonials-item">
      <div class="testimonials-item-box">
          <div class="icon">
           <img src="assets/img/testimonials/student.jpg" alt="image">
          </div><br>
           <p>"I like participating in all school activities, my teachers constantly motivate me to give my best. Our teachers make learning a fun. I love playing various games on our school's ground. I enjoy being in school more than being at home".
          </p><br><br><br>
          <div class="info-box">
            <h3>Pradney Guruchal</h3>
            <span>Student   </span>
          </div>
        </div>
    </div>
    
    </div>
  </div>
</section> 

<section class="sm-device">
	<br>
<h2 style="text-align:center;">Testimonials</h2> 
	<div class="slideshow-container">

	<div class="mySlides fade" style="padding:20px;item-align:center;">
    <div class="testimonials-item">
      <div class="testimonials-item-box">
          <div class="icon">
            <img src="assets/img/testimonials/MsMayuriKapure.JPG" alt="image">
          </div>
           <p>“School culture is very nice, teaching staff is attentive, enthusiastic, energetic and takes care of my child. Principal sir personally looks after the children’s well-being and always motivates them to do more in each area. Guides all students in every domain and tries to enhance the skill of all students.” </p>
          <div class="info-box">
            <h3>Ms. Mayuri Kapure</h3>
            <span>Parent </span>
          </div>
        </div>
    </div>
	</div>

	<div class="mySlides fade" style="padding:20px;">
	  <div class="testimonials-item">
      <div class="testimonials-item-box">
          <div class="icon">
            <img src="assets/img/testimonials/gopal.png" alt="image">
          </div>
           <p>“Good school infrastructure for classroom ventilation day light comes in all classrooms. Location is accessible. Even though the school is just two years old school top management experience in this field visible in all planning along with professional school principal and teachers.”  </p><br>
          <div class="info-box">
            <h3>Mr. Mahadeo Gopale</h3>
            <span>Parent </span>
          </div>
        </div>
    </div>
	</div>

	<div class="mySlides fade" style="padding:20px;">
    <div class="testimonials-item">
      <div class="testimonials-item-box ">
          <div class="icon">
            <img src="assets/img/testimonials/MsRakhiVS.JPG" alt="image">
          </div>
           <p>“The school is creating a niche for itself, with concepts and ideas which are generating interest & involvement in the community.
          The children are encouraged to be curious learners with hand-on experiences.”  Arise is the most happening place for me and my kids.”  
          </p><br>
          <div class="info-box">
            <h3>Ms. Rakhi VS</h3>
            <span>Teacher  </span>
          </div>
        </div>
    </div>
	</div>

	<div class="mySlides fade" style="margin-left:20px">
  <div class="testimonials-item">
      <div class="testimonials-item-box ">
          <div class="icon">
            <img src="assets/img/testimonials/MsDeepikaChowrey.jpeg" alt="image">
          </div>
           <p>“Arise International School provides a good and healthy working environment. The school is setting higher standards of education. The school is committed to provide education that helps to develop children into balanced personalities.”
          </p><br><br>
          <div class="info-box">
            <h3>Ms. Deepika Chowrey</h3>
            <span>Teacher  </span>
          </div>
        </div>
    </div>
	</div>

  <div class="mySlides fade" style="margin-left:20px">
    <div class="testimonials-item">
      <div class="testimonials-item-box">
          <div class="icon">
            <img src="assets/img/testimonials/student2.jpg" alt="image">
          </div>
           <p>“ I love playing basketball on the school basketball court and our sports ground where I can challenge the boys to a good game. I admire my teachers who take a lot of efforts to teach us. Our school conducts a lot of extracurricular activities and my friends and me love participating in each and every one of them”.
          </p><br>
          <div class="info-box">
            <h3>Samiksha Saini</h3>
            <span>Student   </span>
          </div>
        </div>
    </div>
	</div>

  <div class="mySlides fade" style="margin-left:20px">
    <div class="testimonials-item">
      <div class="testimonials-item-box">
          <div class="icon">
           <img src="assets/img/testimonials/student.jpg" alt="image">
          </div><br>
           <p>"I like participating in all school activities, my teachers constantly motivate me to give my best. Our teachers make learning a fun. I love playing various games on our school's ground. I enjoy being in school more than being at home".
          </p><br><br><br>
          <div class="info-box">
            <h3>Pradney Guruchal</h3>
            <span>Student   </span>
          </div>
        </div>
    </div>
	</div>

	<div style="text-align:center">
	<span class="dot"></span> 
	<span class="dot"></span> 
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


<!-- <div class="partner-area ptb-100">
  <div class="container">
    <div class="partner-slider owl-carousel owl-theme">
      <div class="partner-item">
        <img src="assets/img/partner/partner-1.png" alt="image">
      </div>
      <div class="partner-item">
        <img src="assets/img/partner/partner-2.png" alt="image">
      </div>
      <div class="partner-item">
        <img src="assets/img/partner/partner-3.png" alt="image">
      </div>
      <div class="partner-item">
        <img src="assets/img/partner/partner-4.png" alt="image">
      </div>
      <div class="partner-item">
        <img src="assets/img/partner/partner-5.png" alt="image">
      </div>
    </div>
  </div>
</div> -->

<section class="blog-area pt-50 pb-40" style="background: aliceblue;">
  <div class="container">
    <div class="section-title">
     <br> <span>Our</span>
      <h2> Quality Associates </h2>
    </div>
    <div class="row">
      <div class="col-lg-1 col-md-6"></div>
      <div class="col-lg-2 col-md-6">
        <div class="single-blog-item">
        <img src="assets/img/partner/CBSlogo-board.png" alt="image" class="partners-icon">
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="single-blog-item">
        <img src="assets/img/partner/oxford-advantage.png" alt="image" class="partners-icon">
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="single-blog-item">
        <img src="assets/img/partner/karaddipath.png" alt="image" class="partners-icon" style="">
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="single-blog-item">
        <img src="assets/img/partner/Prodigy.png" alt="image" class="partners-icon" style="">
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="single-blog-item">
        <img src="assets/img/partner/Codexxa.png" alt="image" class="partners-icon" style="">
        </div>
      </div>
      <div class="col-lg-1 col-md-6"></div>
      <!-- <div class="col-lg-2 col-md-6">
        <div class="single-blog-item">
        <img src="assets/img/partner/partner-5.png" alt="image">
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <div class="single-blog-item">
        <img src="assets/img/partner/partner-3.png" alt="image">
        </div>
      </div> -->

    </div>
  </div>
</section>
<!--
<section class="event-area bg-ffffff pt-100 pb-70">
<div class="container">
<div class="section-title">
<span>Events</span>
<h2>Upcoming Events</h2>
</div>
<div class="event-box-item">
<div class="row align-items-center">
<div class="col-md-4">
<div class="event-image">
<a href="#"><img src="assets/img/event/event-1.png" alt="image"></a>
</div>
</div>
<div class="col-md-5">
<div class="event-content">
<h3>
<a href="#">Annual Cultural Programme</a>
</h3>
<ul class="event-list">
<li>
<i class='bx bx-time'></i>
8:00 AM - 10:00 PM
</li>
<li>
<i class='bx bxs-map'></i>
New York 56 Glassford Street Glasgow
</li>
</ul>
</div>
</div>
<div class="col-md-3">
<div class="event-date">
<h4>12</h4>
<span>September</span>
</div>
</div>
</div>
</div>
<div class="event-box-item">
<div class="row align-items-center">
<div class="col-md-4">
<div class="event-image">
<a href="#"><img src="assets/img/event/event-2.png" alt="image"></a>
</div>
</div>
<div class="col-md-5">
<div class="event-content">
<h3>
<a href="#">World Kids Day</a>
</h3>
<ul class="event-list">
<li>
<i class='bx bx-time'></i>
8:00 AM - 10:00 PM
</li>
<li>
<i class='bx bxs-map'></i>
New York 56 Glassford Street Glasgow
</li>
</ul>
</div>
 </div>
<div class="col-md-3">
<div class="event-date">
<h4>18</h4>
<span>January</span>
</div>
</div>
</div>
</div>
<div class="event-box-item">
<div class="row align-items-center">
<div class="col-md-4">
<div class="event-image">
<a href="#"><img src="assets/img/event/event-3.png" alt="image"></a>
</div>
</div>
<div class="col-md-5">
<div class="event-content">
<h3>
<a href="#">World Drawing Day</a>
</h3>
<ul class="event-list">
<li>
<i class='bx bx-time'></i>
8:00 AM - 10:00 PM
</li>
<li>
<i class='bx bxs-map'></i>
New York 56 Glassford Street Glasgow
</li>
</ul>
</div>
</div>
<div class="col-md-3">
<div class="event-date">
<h4>25</h4>
<span>March</span>
</div>
</div>
</div>
</div>
<div class="event-box-item">
<div class="row align-items-center">
<div class="col-md-4">
<div class="event-image">
<a href="#"><img src="assets/img/event/event-4.png" alt="image"></a>
</div>
</div>
<div class="col-md-5">
<div class="event-content">
<h3>
<a href="#">Teachers Day</a>
</h3>
<ul class="event-list">
<li>
<i class='bx bx-time'></i>
8:00 AM - 10:00 PM
</li>
<li>
<i class='bx bxs-map'></i>
New York 56 Glassford Street Glasgow
</li>
</ul>
</div>
</div>
<div class="col-md-3">
<div class="event-date">
<h4>30</h4>
<span>April</span>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="blog-area pt-100 pb-70">
<div class="container">
<div class="section-title">
<span>News and Blog</span>
<h2>Latest News</h2>
</div>
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="single-blog-item">
<div class="blog-image">
<a href="#">
<img src="assets/img/blog/blog-1.jpg" alt="image">
</a>
</div>
<div class="blog-content">
<ul class="post-meta">
<li>
<span>By Admin:</span>
<a href="#">Jack John</a>
</li>
<li>
<span>Date:</span>
25 Dec 2021
</li>
</ul>
<h3>
<a href="blog-details.php">Red Green Color Blindness</a>
</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<div class="blog-btn">
<a href="#" class="default-btn">Read More</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-blog-item">
<div class="blog-image">
<a href="#">
<img src="assets/img/blog/blog-2.jpg" alt="image">
</a>
</div>
<div class="blog-content">
<ul class="post-meta">
<li>
<span>By Admin:</span>
<a href="#">Glims Bond</a>
</li>
<li>
<span>Date:</span>
26 Dec 2021
</li>
</ul>
<h3>
<a href="blog-details.php">8 Ways to Learning Lesson</a>
</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<div class="blog-btn">
<a href="#" class="default-btn">Read More</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
<div class="single-blog-item">
<div class="blog-image">
<a href="#">
<img src="assets/img/blog/blog-3.jpg" alt="image">
</a>
</div>
<div class="blog-content">
<ul class="post-meta">
<li>
<span>By Admin:</span>
<a href="#">Smith Broke</a>
</li>
<li>
<span>Date:</span>
27 Dec 2021
</li>
</ul>
<h3>
<a href="blog-details.php">Full-Day Session With Activities</a>
</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<div class="blog-btn">
<a href="#" class="default-btn">Read More</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section> -->

 <!-- <section class="testimonials">
	<div class="container">

      <div class="row">
        <div class="col-sm-12">
          <div id="customers-testimonials" class="owl-carousel">

           
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">EMILIANO AQUILANI</div>
            </div>
           
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">ANNA ITURBE</div>
            </div>
            
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">LARA ATKINSON</div>
            </div>
           
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">IAN OWEN</div>
            </div>
           
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">MICHAEL TEDDY</div>
            </div>
          
          </div>
        </div>
      </div>
      </div>
    </section>  -->
    <!-- END OF TESTIMONIALS -->

<?php include("footer.php");?>
<!-- <section class="footer-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-3 col-sm-6">
<div class="single-footer-widget">
<div class="logo">
<h2>
<a href="index.php">Ketan</a>
</h2>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<ul class="social">
<li>
<a href="#" target="_blank">
<i class='bx bxl-facebook'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-twitter'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-pinterest-alt'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-linkedin'></i>
</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single-footer-widget">
<h3>Contact Us</h3>
<ul class="footer-contact-info">
<li>
<i class='bx bxs-phone'></i>
<span>Phone</span>
<a href="tel:882569756">882-569-756</a>
</li>
<li>
<i class='bx bx-envelope'></i>
<span>Email</span>
<a href="/#1179747d7d7e517a7465707f3f727e7c"><span class="__cf_email__" data-cfemail="ddb5b8b1b1b29db6b8a9bcb3f3beb2b0">[email&#160;protected]</span></a>
</li>
<li>
<i class='bx bx-map'></i>
<span>Address</span>
175 5th Ave Premium Area, New York, NY 10010, United States
</li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single-footer-widget pl-5">
<h3>Activities</h3>
<ul class="quick-links">
<li>
<a href="#">Maths Olympiad</a>
</li>
<li>
<a href="#">Art Competition</a>
</li>
<li>
<a href="#">English Novels</a>
</li>
<li>
<a href="#">Science Competition</a>
</li>
<li>
 <a href="#">Teachers Day</a>
</li>
<li>
<a href="#">World Kids Day</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single-footer-widget">
<h3>Photo Gallery</h3>
<ul class="photo-gallery-list">
<li>
<div class="box">
<img src="assets/img/footer-gallery/footer-gallery-1.jpg" alt="image">
<a href="#" target="_blank" class="link-btn"></a>
</div>
</li>
<li>
<div class="box">
<img src="assets/img/footer-gallery/footer-gallery-2.jpg" alt="image">
<a href="#" target="_blank" class="link-btn"></a>
</div>
</li>
<li>
<div class="box">
<img src="assets/img/footer-gallery/footer-gallery-3.jpg" alt="image">
<a href="#" target="_blank" class="link-btn"></a>
</div>
</li>
<li>
<div class="box">
<img src="assets/img/footer-gallery/footer-gallery-4.jpg" alt="image">
<a href="#" target="_blank" class="link-btn"></a>
</div>
</li>
<li>
<div class="box">
<img src="assets/img/footer-gallery/footer-gallery-5.jpg" alt="image">
<a href="#" target="_blank" class="link-btn"></a>
</div>
</li>
<li>
<div class="box">
<img src="assets/img/footer-gallery/footer-gallery-6.jpg" alt="image">
<a href="#" target="_blank" class="link-btn"></a>
</div>
</li>
<li>
<div class="box">
<img src="assets/img/footer-gallery/footer-gallery-1.jpg" alt="image">
<a href="#" target="_blank" class="link-btn"></a>
</div>
</li>
<li>
<div class="box">
<img src="assets/img/footer-gallery/footer-gallery-2.jpg" alt="image">
<a href="#" target="_blank" class="link-btn"></a>
</div>
</li>
<li>
<div class="box">
<img src="assets/img/footer-gallery/footer-gallery-3.jpg" alt="image">
<a href="#" target="_blank" class="link-btn"></a>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</section>
<div class="copyright-area">
<div class="container">
<div class="copyright-area-content">
<p>
Copyright © 2021 Ketan. All Rights Reserved by
<a href="https://envytheme.com/" target="_blank">
EnvyTheme
</a>
</p>
</div>
</div>
</div> -->


<div class="go-top">
<i class='bx bx-up-arrow-alt'></i>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="row">
      <div class="col-lg-12 col-md-6" style="text-align: center;">
          
          <video  controls>
            <source src="assets/img/VIRTUAL_TOUR.mp4" type="video/mp4">
            Your browser does not support HTML video.
          </video>
          <h4 style="color: #ea512e;">ARISE SCHOOL VIRTUAL TOUR</h4>
      </div></div>
  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>



<script data-cfasync="false" src="js/email-decode.min.js"></script>
<!-- <script src="assets/js/jquery.min.js"></script> -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/app-1-min.js"></script>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></script> -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.meanmenu.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/imagelightbox.min.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.js"></script>
<script src="assets/js/main.js"></script>
<!-- <center><font size="2">This is the free demo result. For a full version of this website, please go to  <a href="https://www6.waybackmachinedownloader.com/website-downloader-online/scrape-all-files/">Website Downloader</a></font></center></body> -->
</html>