<?php 
if(isset($_POST['enquiry-submit'])){
	    $session=$_POST['session'];
		$className=$_POST['className'];
		$childFname=$_POST['childFname'];
		$childLname=$_POST['childLname'];
        $fatherName=$_POST['fatherName'];
		$mobileNumber=$_POST['mobileNumber'];
        $email=$_POST['prefEmail'];
        $message=$_POST['message'];
 

	$to='ppanjabi43@gmail.com';
	// Receiver Email ID, Replace with your email ID
	$subject='Admission Enquiry Form Submission';
	$message="Session :".$session."\n"."Class Name :".$className."\n"."Child First name :".$childFname."\n".
    "Child Last name :".$childLname."\n"."Father Name :".$fatherName."\n"."Mobile Number :".$mobileNumber.
    "\n"."Email :".$email."\n"."Message :".$message;

	$headers="From: ".$email;

	if(mail($to, $subject, $message, $headers)){
		echo "<script>alert('Sent Successfully! Thank you, We will contact you shortly!')</script>";
	}
	else{
		echo "<script>alert('Failed');</script>";
	}
	}
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

<!-- 
<div class="page-banner-area item-bg44">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="page-banner-content">
<h2>Account Details</h2>
<ul>
<li>
<a href="index.html">Home</a>
</li>
<li>Account Details</li>
</ul>
</div>
</div>
</div>
</div>
</div> -->


<section class="quote-area bg-item ptb-100">
<div class="container">
<div class="quote-item item-two">
<div class="content">
<span>Get a Quote</span>
<h3>Online Enquiry Form</h3>
</div>
<form class="form-horizontal" id="idFormAdmission">

                	<div class="form-group">
                        <label class="control-label col-sm-4">Session *</label>
                        <div class="col-sm-12">
                            <select name="session" class="form-control" id="session" required="">
                                <option value="2021-2022">2021-2022</option>
                                <option value="2022-2023">2022-2023</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Application for Class *</label>
                        <div class="col-sm-12">
                            <select name="className" class="form-control" id="className" required="">
                                <option value="">SELECT</option>
                                <option value="Nursery">Nursery</option>
                                <option value="CLASS 1">CLASS 1</option>
                                <option value="CLASS 2">CLASS 2</option>
                                <option value="CLASS 3">CLASS 3</option>
                                <option value="CLASS 4">CLASS 4</option>
                                <option value="CLASS 5">CLASS 5</option>
                                <option value="CLASS 6">CLASS 6</option>
                                <option value="CLASS 7">CLASS 7</option>
                                <option value="CLASS 8">CLASS 8</option>
                                <option value="Sr.Kg">Sr.Kg</option>
                                <option value="Jr.KG">Jr.KG</option>
                                <option value="PLAYGROUP">PLAYGROUP</option>
                                <option value="Class 9">Class 9</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-4">Child Name *</label>
                        
                        <div class="row">
                            <div class="col-sm-6 form-inline">
                                <input class="form-control" name="childFname" 
                                id="childFname" type="text" size="20" placeholder="First Name" required=""> 
                            </div>
                            <div class="col-sm-6 form-inline">
                                <input class="form-control" name="childLname"
                                 id="childLname" type="text" size="20" placeholder="Last Name" required="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
				        <label class="control-label col-sm-4">Father’s Name *</label>
				        <div class="col-sm-12 form-inline">
				            <input class="form-control" placeholder="Father's Name"
                             name="fatherName" id="fatherName" type="text" size="39" required="">
				        </div>
				    </div>
				    <div class="form-group">
				        <label class="control-label col-sm-4">Mobile Number *</label>
				        <div class="col-sm-8 form-inline">
				            <input class="form-control" placeholder="Mobile Number" name="mobileNumber" id="mobileNum" type="tel" maxlength="10" required="">
				        </div>
				    </div>

				    <div class="form-group">
				        <label class="control-label col-sm-4">Email Id *</label>
				        <div class="col-sm-8 form-inline">
				            <input class="form-control" placeholder="Email Id" name="prefEmail" id="prefEmail" type="email" size="39" required="">
				        </div>
				    </div>
				    <div class="form-group">
				        <label class="control-label col-sm-12">Message *</label>
				        <div class="col-sm-12 form-inline">
				        	<textarea name="message" class="form-control" id="message" required=""></textarea>
				        </div>
				    </div>
				    <div class="form-group">        
                        <div class="col-sm-offset-4 col-sm-12">
                        	<input type="hidden" name="category" value="Admission">
                            <input type="submit" name="enquiry-submit" class="default-btn" value="Submit"/>
                        </div>
                    </div>
                </form>
<!-- <form>
<div class="form-group">
<input type="text" class="form-control" placeholder="Your Name">
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Email Address">
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Studying Class">
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Type Your Requirements">
</div>
<button type="submit" class="default-btn">
Submit Now
</button>
</form> -->
</div>
</div>
</section>

<?php include("footer.php");?>

<div class="go-top">
<i class='bx bx-up-arrow-alt'></i>
</div>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
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