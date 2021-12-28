<?php 
//if(isset($_POST['contact-form'])){
	//     $name=$_POST['name'];
	// 	$email=$_POST['email'];
	// 	$phone_number=$_POST['phone_number'];
	// 	$subjects=$_POST['subjects'];
    //     $message=$_POST['message'];
 

	// $to='ppanjabi43@gmail.com';
	
	// $subject='Contact Form Submission';
	// $message="Name :".$name."\n"."Email :".$email."\n"."Phone Number :".$phone_number."\n".
    // "subjects :".$subjects."\n"."Message :".$message;
    
	// $headers="From: ".$email;

	// if(mail($to, $subject, $message, $headers)){
	// 	echo "<script>alert('Sent Successfully! Thank you, We will contact you shortly!')</script>";
	// }
	// else{
	// 	echo "<script>alert('Failed');</script>";
	// }
	// }
?>
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
<title>ARISE International</title>
<link rel="icon" type="image/png" href="assets/img/logo_white.jpg">
</head>
<body>
<?php include("header.php");?>

<div class="page-banner-area15">
 <div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="page-banner-content">
<!-- <h2>Contact</h2>
<ul>
<li>
<a href="index.html">Home</a>
</li>
<li>Contact</li>
</ul> -->
</div>
</div>
</div>
</div>
</div>


<section class="contact-area ptb-90">
<div class="container">
    <br> <br>
    <!-- <h2 style="text-align:center;padding-top: 20px;">Contact Us</h2><br> -->
    <div class="row align-items-center">
        <div class="col-lg-4 col-md-12">
            <div class="card1 single-footer-widget">
                <h3 style="color:#000;">Phone</h3>
                <ul class="footer-contact-info">
                <li>
                <i class='bx bxs-phone'></i>
                
                <a href="tel:91- 8390795376" style="color:#000;font-weight: 600;">
                91- 8390795376, 96657 95376
                </a>
                </li>
                
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card1 single-footer-widget">
                <h3 style="color:#000;">Email</h3>
                <ul class="footer-contact-info">
                <li>
                <i class='bx bx-envelope'></i>
               
                <a href=""><span style="font-size: 17px;color:#000;"> admission.arise@gmail.com
                </span></a>
                </li>
               
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card1 single-footer-widget">
                <h3 style="color:#000;">Website</h3>
                <ul class="footer-contact-info">
                <li>
                <i class='bx bx-globe'></i>
               
                <a href="http://www.ariseinternational.in/">
                <span style="font-size: 17px;color:#000;"> http://www.ariseinternational.in/
                </span></a>
                </li>
                </ul>
            </div>
        </div>
        <!-- <div class="col-lg-6 col-md-12"><br>
            <div class="card3 single-footer-widget">
                <h3 style="color:#000;">Pre-Primary Section</h3>
                <ul class="footer-contact-info">
                <li style="font-size: 17px;color:#000;">
                <i class='bx bxs-time'></i>
                
                Reporting Time: 9: 30 AM &nbsp; | &nbsp;
                Departure Time: 12:30 PM
                </li>
                
                </ul>
            </div>
        </div>
        <div class="col-lg-6 col-md-12"><br>
            <div class="card3 single-footer-widget">
                <h3 style="color:#000;">Pre-Primary Section</h3>
                <ul class="footer-contact-info">
                <li style="font-size: 17px;color:#000;">
                <i class='bx bxs-time'></i>
                
                Reporting Time: 9: 30 AM &nbsp; | &nbsp;
                Departure Time: 12:30 PM
                </li>
                
                </ul>
            </div>
        </div> -->
    </div><br><br>
<div class="row align-items-center">
<!-- <div class="col-lg-6 col-md-12">
<div class="contact-form">
<h3>Ready to Get Started?</h3>

<form id="contactForm">
<div class="row">
<div class="col-lg-12 col-md-6">
<div class="form-group">
<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-6">
<div class="form-group">
<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your email address">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<input type="text" name="phone_number" id="phone_number" class="form-control" required data-error="Please enter your phone number" placeholder="Your phone number">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<input type="text" name="subjects" id="subjects" class="form-control" required data-error="Please enter your subjects" placeholder="Subjects">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<textarea name="message" id="message" cols="30" rows="5" required data-error="Please enter your message" class="form-control" placeholder="Write your message..."></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<input type="submit" name="contact-form" class="default-btn" value="Send Message" />
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
 </div> -->

<div class="col-lg-6 col-md-12">
    <div class="contact-information">
        <h3>Bhosari Branch - </h3>
        <ul class="contact-list">
        <li><i class='bx bx-map'></i> Location: <span>Sector 7, Indrayani Nagar, 
            Anandrao Lande Road, <br>Bhosari- 411026</span></li>
        <!-- <li><i class='bx bx-phone-call'></i> Call Us: <a href="tel:+01321654214">+91- 8390795376</a></li>
        <li><i class='bx bx-envelope'></i> Email Us: <a href="">admission.arise@gmail.com</a></li> -->
       
        </ul><br>
        <div id="map">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9476519598093!2d-73.99185268459418!3d40.74117737932881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a3f81d549f%3A0xb2a39bb5cacc7da0!2s175%205th%20Ave%2C%20New%20York%2C%20NY%2010010%2C%20USA!5e0!3m2!1sen!2sbd!4v1588746137032!5m2!1sen!2sbd"></iframe> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.513894991964!2d73.83814891441844!3d18.640921670348675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b8765f020c35%3A0x5476fe2ff1730ecb!2sAnandrao%20Lande%20Rd%2C%20Sector%20Number%207%2C%20Bhosari%2C%20Pimpri-Chinchwad%2C%20Maharashtra%20411026!5e0!3m2!1sen!2sin!4v1633936330441!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <br>
       
    </div>
</div>

<div class="col-lg-6 col-md-12">
    <div class="contact-information">
        <h3>Ravet Branch -</h3>
        <ul class="contact-list">
        <li><i class='bx bx-map'></i> Location: <span>Sector 29, Shinde Vasti, Ravet High St, Opp. Flora Hospital , Next to D-Mart, Ravet- 411044</span></li>
        <!-- <li><i class='bx bx-phone-call'></i> Call Us: <a href="tel:+01321654214">+91- 8390795376</a></li>
        <li><i class='bx bx-envelope'></i> Email Us: <a href="">admission.arise@gmail.com</a></li> -->
       
        </ul><br>
        <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.382297751239!2d73.75372526441848!3d18.646833120168232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9371498ec5f%3A0x7ebb60295748dba!2sArise%20International%20School!5e0!3m2!1sen!2sin!4v1633936411712!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9476519598093!2d-73.99185268459418!3d40.74117737932881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a3f81d549f%3A0xb2a39bb5cacc7da0!2s175%205th%20Ave%2C%20New%20York%2C%20NY%2010010%2C%20USA!5e0!3m2!1sen!2sbd!4v1588746137032!5m2!1sen!2sbd"></iframe> -->
        </div><br>
        <!-- <h3>Opening Hours:</h3>
        <ul class="opening-hours">
        <li><span>Monday:</span> 8AM - 6AM</li>
        <li><span>Tuesday:</span> 8AM - 6AM</li>
        <li><span>Wednesday:</span> 8AM - 6AM</li>
        <li><span>Thursday:</span> 8AM - 6AM</li>
        <li><span>Friday:</span>8AM - 6AM </li>
        <li><span>Saturday:</span>Closed</li>
        <li><span>Sunday:</span>Closed</li>
        </ul> -->
    </div>
</div>

<div class="col-lg-6 col-md-12"><br>
            <div class="card3 single-footer-widget">
                <h3 style="color:#000;">Pre-Primary Section</h3>
                <ul class="footer-contact-info">
                <li style="font-size: 17px;color:#000;">
                <i class='bx bxs-time'></i>
                
                Reporting Time: 9: 30 AM &nbsp; | &nbsp;
                Departure Time: 12:30 PM
                </li>
                
                </ul>
            </div>
        </div>
        <!-- <div class="col-lg-6 col-md-12"><br>
            <div class="card3 single-footer-widget">
                <h3 style="color:#000;">Pre-Primary Section</h3>
                <ul class="footer-contact-info">
                <li style="font-size: 17px;color:#000;">
                <i class='bx bxs-time'></i>
                
                Reporting Time: 9: 30 AM &nbsp; | &nbsp;
                Departure Time: 12:30 PM
                </li>
                
                </ul>
            </div>
        </div> -->

</div>
</div>
</section>

<br>


<?php include("footer.php");?>

<div class="go-top">
<i class='bx bx-up-arrow-alt'></i>
</div>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>

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
</body>
</html>