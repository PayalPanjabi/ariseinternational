<?php 
if(isset($_POST['job-enquiry-submit'])){
	    $name=$_POST['name'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$qualification=$_POST['qualification'];
        $post=$_POST['post'];
		$cover_letter=$_POST['cover_letter'];
        $resume=$_POST['resume'];
 

	$to='ppanjabi43@gmail.com';
	// Receiver Email ID, Replace with your email ID
	$subject='Job Enquiry Form Submission';
	$message="Name :".$name."\n"."Email :".$email."\n"."Mobile :".$mobile."\n".
    "Qualification :".$qualification."\n"."Post :".$post."\n"."Cover letter :".$cover_letter.
    "\n"."Resume :".$resume;

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

<!-- <div class="page-banner-area">
 <div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="page-banner-content">
<h2>Job Enquiry</h2>
<ul>
<li>
<a href="index.html">Home</a>
</li>
<li>Job Enquiry</li>
</ul>
</div>
</div>
</div>
</div>
</div> -->


<section class="login-area ptb-100 banner-img">
<div class="container">
<div class="login-form">
<h2>Job Enquiry</h2>
        <form  class="form-horizontal" method="POST" action="" id="jobEnquiryForm"
         target="_blank" enctype="">
                    <div class="form-group">
                        <label class="control-label col-sm-4">Candidate's Name *</label>
                        <div class="col-sm-12 form-inline">
                            <input class="form-control" id="job_name" name="name" type="text" size="40" placeholder="Candidate's Name" required=""> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4">Candidate's Email *</label>
                        <div class="col-sm-12 form-inline">
                            <input class="form-control" id="job_email" name="email" type="email" size="40" placeholder="Candidate's Email" required=""> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4">Contact No. *</label>
                        <div class="col-sm-12 form-inline">
                            <input class="form-control" id="job_mobile" name="mobile" type="tel" size="40" placeholder="Contact No." required=""> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4">Highest Qualification *</label>
                        <div class="col-sm-8 form-inline">
                            <input class="form-control" id="job_qualification" name="qualification" type="text" size="40" placeholder="Highest Qualification" required=""> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4">Applying For Post *</label>
                        <div class="col-sm-12 form-inline">
                        	<select name="post" class="form-control" id="job_post" required="" style="width: 76%;">
                                <option value="">Select Any One</option>
                                <option value="PRT">PRT</option>
                                <option value="TGT">TGT</option>
                                <option value="KG">KG teacher</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4">Cover Letter *</label>
                        <div class="col-sm-12 form-inline">
                            <input class="form-control" id="job_cover_letter" name="cover_letter" type="text" size="40" placeholder="Cover Letter" required=""> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4">Resume *</label>
                        <div class="col-sm-12 form-inline">
                            <input class="form-control" id="job_resume" name="resume" type="file" size="40" placeholder="Resume" required="" style="border: none !important;box-shadow: none;">
                        </div>
                    </div>

                    <div class="form-group">        
                        <div class="col-sm-offset-4 col-sm-8">
                            <input type="submit" name="job-enquiry-submit" class="default-btn" 
                            value="Submit Enquiry" >
                        </div>
                    </div>
                    <input name="cmd" type="hidden" value="addJobEnquiry"> 
                </form>
<!-- <div class="important-text">
<p>Don't have an account? <a href="register.html">Register now!</a></p>
</div> -->
</div>
</div>
</section>




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