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
<link rel="stylesheet" href="assets/css/form.css">
<link rel="stylesheet" href="assets/css/jquery-ui-1.8.6.custom.css">
<link rel="stylesheet" href="assets/css/d046fa8bf021f50c9e20803edd787b55.css">

<link rel="stylesheet" href="assets/css/responsive.css">
<title>ARISE International</title>
<link rel="icon" type="image/png" href="assets/img/logo_white.jpg">

<style>
   /* .tablink {
    text-align: center;
    border: 1px solid #ededed;
    font-size: 13px;
    color: #fff;
    background: #59a0e6;
    border-radius: 5px;
    margin-right: 5px;
    width: 188px;
    height: 26px;
    } */
</style>
</head>
<body>
<?php include("header.php");?>
<br>
<!-- mobile view -->
<section class="sm-device" style="padding:20px">
    <div class="row">
        <div class="col-sm-12">
            <!-- <div class="registration-launch-page"> -->
                <div style="padding-bottom: 10px; text-align: center; color: #4f81bd;">
                    <h1 style="font-size: 16px;"><b>Online Enquiry Form</b></h1>
                </div>  
                <!--<div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix" style="width: 99%;-->
                <!--    margin-left: 6px;">        -->
                <!--    <span class="ui-dialog-title" style="float: right;color:white;" id="ui-dialog-title-6">Already Applied? &nbsp;&nbsp;<a href="login.php" style="text-decoration: underline;">Log In</a></span>-->
                <!--</div>-->
            <!-- </div> -->
        </div>

        
    </div>
    <br>
    <div class="row" style="border: 1px solid lightgray;overflow: hidden;">
            <!--<div class="head-message" style="height:30px;    border-bottom: 1px #d7d7d7 solid !important;font-size: 12px !important;text-align: center !important;padding: 5px 0 !important;">Sign in to fill the form</div>-->
            <div class="col-sm-12" style="background:#f9f9f9;width: 100%;">
                <div style="font-weight: bold;text-align: center; ">Child Details</div>
            
                <div style="float: left; width: 400px;margin-top:10px;padding-right: 20px;" class="dialog-sign-in">            
            
                    <table width="100%" class="signin-fields">
                    <tr>
                        <td class="label" style="width: 110px"><span class="required">*</span> Academic Year</td>
                        <td class="field" align="left">                    
                            <select id="admission_session" name="admission_session" class="login-page-2-select _required" style="margin-left: 7px;width: 150px;" onchange="registrationSelectedYear(this, 0)">
                                                    <option value=""></option>
                                
                                <option value="2021-2022" >2021-2022</option>
                                                                        </select>
                        </td>
                        </tr>
                    <tr>
                        <tr>
                        <td class="label" style="width: 110px"><span class="required">*</span><span id="student_name">First Name</span></td>
                        <td class="field">
                            <input type="text" id="child_first_name" name="child_first_name" class="login-page-2-input _required" />
                        </td>
                        </tr>
                                        <tr class="hideLastName " >
                        <td class="label" style="width: 110px">Middle Name</td>
                        <td class="field">
                            <input type="text" id="child_middle_name" name="child_middle_name" class="login-page-2-input " />
                        </td>
                        </tr>
                                        <tr class="hideLastName ">
                        <td class="label" style="width: 110px"><span class="required">*</span>Last Name</td>
                        <td class="field">
                            <input type="text" id="child_last_name" name="child_last_name" class="login-page-2-input _required" />
                        </td>
                        </tr> 
                                
                        <tr>
                        <td class="label" style="width: 110px"><span class="required">*</span>Date of birth</td>
                        <td class="field">
                            <input type="text" id="date_of_birth" readonly="readonly" name="date_of_birth" class="login-page-2-input date-picker _required" />
                        </td>
                        </tr>
                        <tr>
                        <td class="label" style="width: 110px"></td>
                        <td class="field row" style="font-size: 10px; padding-left: 10px; text-align: left;">                    
                        </td>
                        </tr>               
                        <tr>                  
                        <td colspan="2" id="date_of_birth_error_box" style="color: red; font-size: 10px; padding-left: 10px; text-align: left;">                    
                        </td>
                        </tr>
                                                        <tr>
                        <td class="label" style="width: 110px"><span class="required">*</span>Admission Sought In</td>
                        <td class="field" align="left">
                            <select id="class_applied" name="class_applied" class="login-page-2-select _required" style="margin-left: 7px;width: 150px;">
                            <option value="-1-1" data-cut_off_date="">--Select Class--</option>
                                                    <option value="Nursery" data-cut_off_date="">Nursery / Play Group</option>
                                                    <option value="Prekindergarten" data-cut_off_date="">LKG</option>
                                                    <option value="Kindergarten" data-cut_off_date="">UKG</option>
                                                    <option value="1st-to-10th-std" data-cut_off_date="">1st to 10th std</option>
                                                    <option value="XI" data-cut_off_date="">XI Science</option>
                                                    <option value="XI Commerce" data-cut_off_date="">XI Commerce</option>
                                                </select>
                        </td>
                        </tr>
                                        <!-- <tr>
                            <td class="" colspan="2">
                                <p style='color:red;font-size:12px;text-align:justify;'>Note: Afternoon shift is applicable only for Classes Nursery, LKG and UKG. School will have standard shift for all students from Class 1.</p>                            
                            </td>
                        </tr> -->
                                        <tr>
                    </table>
                    <br/><br/>
                    <!-- <span style="font-weight:bold; text-align:center;">NOTE: We recommend you to use Google Chrome or Mozilla Firefox browsers to avoid any technical issues.
                    Please refrain from using Safari/Microsoft Edge/Internet Explorer.</span>
                    <br/><br/><br/><br/> -->
                </div>
            </div>
            <!-- <div class="col-sm-12" style="background:#f9f9f9;">
                <div style="font-weight: bold;text-align: center;">Parent Details</div>
                <br>
                <div class="tab-gallery">
                    <div class="upper">
                        <button class="tablink" onclick="openPage('first', this)" id="defaultOpen" style="padding-top: 7px;
    padding-bottom: 24px;">New Parent</button>
                        <button class="tablink" onclick="openPage('second', this)" id="defaultOpen" style="padding-top: 7px;
    padding-bottom: 24px;">Register For Second Child</button>
                        
                    </div>
                    <br>
                </div>

                <div id="first" class="tabcontent">
                    <table class="site-signup-page-inner-table" width="100%">
                        <tr class="signup-row already_account_row">
                        <th scope="row" class="inner-table-left-td">
                            <div class="login-page-2-field-label"><span class="required">*</span><span id="parent_name">First Name</span>: </div>
                        </th>
                        <td class="login-page-2-field-value">
                            <input type="text" id="parent_first_name" name="parent_first_name" class="login-page-2-input _required" maxlength="30">
                        </td>
                        </tr>                               
                        <tr class="signup-row  already_account_row"><td colspan="2" class="spacer"></td></tr>
                                        <tr class="signup-row  already_account_row hideLastName">
                        <th scope="row" class="inner-table-left-td">
                            <div class="login-page-2-field-label"><span class="required">*</span>Last Name: </div>
                        </th>
                        <td class="login-page-2-field-value">
                            <input type="text" id="parent_last_name" name="parent_last_name" class="login-page-2-input _required" maxlength="30">
                        </td>
                        </tr>
                                        <tr class="signup-row"><td colspan="2" class="spacer"></td></tr>
                        <tr class="your_email">
                        <th scope="row" class="inner-table-left-td">
                            <span class="required">*</span><span class="login-page-2-field-label" id="your_email" >Your Email: </span>
                        </th>
                        <td class="login-page-2-field-value">
                            <input type="text" id="user_email" name="user_email" class="login-page-2-input _required" value="">
                        </td>
                        </tr>
                        <tr class="signup-row"><td colspan="2" class="spacer"></td></tr>
                        <tr class="signup-row">
                        <th scope="row" class="inner-table-left-td">
                            <div class="login-page-2-field-label"><span class="required">*</span>Password: </div>
                        </th>
                        <td class="login-page-2-field-value">
                            <input type="password" id="user_password" name="user_password" class="login-page-2-input _required" maxlength="30">
                        </td>
                        </tr>
                        <tr class="signup-row">
                        <td colspan="2" class="inner-table-left-td">
                            <div style="padding-bottom: 10px; padding-right: 25px; font-size:9px; color:#333333;" class="help-message">
                            <span style="margin-left: 10px;">6 characters minimum atleast one number and a character</span>
                            </div>
                        </td>
                        </tr>
                        
                        <tr class="signup-row already_account_row">
                        <th scope="row" class="inner-table-left-td"><span class="login-page-2-field-label"><span class="required">*</span>Mobile Number: </span></th>
                        <td class="login-page-2-field-value">
                            <input type="text" id="contact_num_country_code" maxlength="2" name="contact_num_country_code" style="width:90px" placeholder="Country Code" class="login-page-2-input numeric_only">
                            <input type="text" id="contact_num" maxlength="10" name="contact_num" style="width:145px" placeholder="10 digits number" class="login-page-2-input numeric_only">
                            <br>
                        </td>
                        </tr>
                        <tr class="signup-row"><td colspan="2" class="spacer" style="display:none;"></td></tr>
                        <tr class="signup-row  already_account_row">
                        <th scope="row" class="inner-table-left-td"><span class="login-page-2-field-label"><span class="required">*</span>I am: </span></th>
                        <td align="left" style="padding-left:14px" class="login-page-2-field-value">
                            <select style="width:145px" id="parent_gender" name="parent_gender" class="login-page-2-select _required">
                            <option value="">Select Gender:</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            </select>
                            <br>
                        </td>
                        </tr>
                                                            
                        <tr class="signup-row">
                        <td colspan="2" class="inner-table-left-td">
                            <div style="padding-bottom: 25px; padding-right: 77px; font-size:9px; color:#333333;" class="help-message">
                            <a href="/default/terms">Terms of service</a> and <a href="/default/privacy">Privacy Policy</a> available
                            </div>
                        </td>
                        </tr>
                    </table>
                </div>
                <div id="second" class="tabcontent">
                    <table class="site-signup-page-inner-table" width="100%"  >
                        <tr class="your_email">
                        <th scope="row" class="inner-table-left-td">
                            <span class="required">*</span><span class="login-page-2-field-label" id="your_email">Your Email / Username</span>
                        </th>
                        <td class="login-page-2-field-value">
                            <input type="text" id="user_email" name="user_email" class="login-page-2-input _required" value="">
                        </td>
                        </tr>
                        <tr class="signup-row"><td colspan="2" class="spacer"></td></tr>
                        <tr class="signup-row">
                        <th scope="row" class="inner-table-left-td">
                            <div class="login-page-2-field-label"><span class="required">*</span>Password: </div>
                        </th>
                        <td class="login-page-2-field-value">
                            <input type="password" id="user_password" name="user_password" class="login-page-2-input _required" maxlength="30">
                        </td>
                        </tr>
                        <tr class="signup-row">
                        <td colspan="2" class="inner-table-left-td">
                            <div style="padding-bottom: 10px; padding-right: 25px; font-size:9px; color:#333333;" class="help-message">
                            <span style="margin-left: 10px;">6 characters minimum atleast one number and a character</span>
                            </div>
                        </td>
                        </tr>
                    </table>
                    <br>
                </div>  
                <div class="ui-dialog-buttonset" style="margin-left: 75px;">
                    <button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only by-button-dark-green signup-button" type="button" style="margin-top: 0px;">
                        <span class="ui-button-text">Register for Online Application</span>
                    </button>              
                    &nbsp;&nbsp;&nbsp;
                    <span><a style="font-size: 10px;color: #2D76B9;" href="">Forgot Password</a></span>
                </div>

            </div> -->
            <div class="ui-dialog-buttonset" style="margin-left: 44px;padding-top: 12px;">
                    <button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only by-button-dark-green signup-button" type="button" style="margin-top: 0px;">
                        <span class="ui-button-text">Register for Online Application</span>
                    </button>              
                    &nbsp;&nbsp;&nbsp;
                    <span><a style="font-size: 10px;color: #2D76B9;" href="">Forgot Password</a></span>
                </div>
        </div>
        <!-- <div class="row" >
            <div class="col" style="background:#f9f9f9;border: 1px solid lightgray;">
                <div class="ui-dialog-buttonpane ui-helper-clearfix">
                    <div class="ui-dialog-buttonset" style='text-align: left;'>          
                        <div style="padding:20px;">
                            <strong style=" ">For the Following Classes, Select A Class</strong><br/>
                            <span style="font-weight:bold;">Note: </span> 
                            <span style="color:red;">Admissions are not available in the following.</span>
                            <span style="">However you can leave your information by filling up the enquiry form. so that we can inform you when there is vacancy in your desired standard                </span>
                                <br/>
                                <input type="radio" name="class_select_query"   value="I"> I <br>
                                <input type="radio" name="class_select_query"   value="II"> II <br>
                                <input type="radio" name="class_select_query"   value="III"> III <br>
                                <input type="radio" name="class_select_query"   value="IV"> IV <br>
                                <input type="radio" name="class_select_query"   value="V"> V <br>
                                <input type="radio" name="class_select_query"   value="VI"> VI <br>
                                <input type="radio" name="class_select_query"   value="VII"> VII <br>
                                <input type="radio" name="class_select_query"   value="VIII"> VIII <br>
                                <input type="radio" name="class_select_query"   value="IX"> IX <br>
                                <input type="radio" name="class_select_query"   value="X"> X <br>
                                <input type="radio" name="class_select_query"   value="XII Science"> XII Science <br>
                                <input type="radio" name="class_select_query"   value="XII Commerce"> XII Commerce <br>
                                <a href="#"  style="border:solid 0px green !important;padding:6px 10px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only by-button-dark-green signup-button">Click Here</a>
                        </div>  
                    </div>
                </div>  
            </div>
        </div> -->
</section>

<!-- <script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script> -->

<!-- desktop view -->
<div class="lg-device registration-launch-page">
    <div style="padding-bottom: 10px; text-align: center; color: #4f81bd;">
        <h1 style="font-size: 16px;"><b>Online Enquiry Form</b></h1>
    </div>  
    <!--<div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">        -->
    <!--    <span class="ui-dialog-title" style="float: right;color:white;" id="ui-dialog-title-6">Already Applied? &nbsp;&nbsp;<a href="login.php" style="text-decoration: underline;">Log In</a></span>-->
    <!--</div>-->

     
        <div class="row" style="border: 1px solid lightgray;">
            <!--<div class="head-message" style="height:30px;    border-bottom: 1px #d7d7d7 solid !important;font-size: 12px !important;text-align: center !important;padding: 5px 0 !important;">Sign in to fill the form</div>-->
            <div class="col-lg-12" style="background:#f9f9f9;">
                <div style="font-weight: bold;text-align: center; ">Child Details</div>
            
                <div style="float: left; width: 400px;margin-top:10px; padding-right: 20px;" class="dialog-sign-in">            
            
                    <table width="100%" class="signin-fields" style="margin-left:80%;">
                    <tr>
                        <td class="label" style="width: 110px">
                       
                        
                        <label style="width: inherit;"> <span class="required">*</span> Academic Year</label>

                        </td>
                        <td class="field" align="left">                    
                            <select id="admission_session" name="admission_session" class="login-page-2-select _required" style="margin-left: 13px;width: 252px;" onchange="registrationSelectedYear(this, 0)">
                                                    <option value=""></option>
                                
                                <option value="2021-2022" >2021-2022</option>
                                                                        </select>
                        </td>
                        </tr>
                    <tr>
                        <tr>
                        <td class="label" style="width: 110px"><span class="required">*</span><span id="student_name">First Name</span></td>
                        <td class="field">
                            <input type="text" id="child_first_name" name="child_first_name" class="login-page-2-input _required" />
                        </td>
                        </tr>
                                        <tr class="hideLastName " >
                        <td class="label" style="width: 110px">Middle Name</td>
                        <td class="field">
                            <input type="text" id="child_middle_name" name="child_middle_name" class="login-page-2-input " />
                        </td>
                        </tr>
                                        <tr class="hideLastName ">
                        <td class="label" style="width: 110px"><span class="required">*</span>Last Name</td>
                        <td class="field">
                            <input type="text" id="child_last_name" name="child_last_name" class="login-page-2-input _required" />
                        </td>
                        </tr> 
                                
                        <tr>
                        <td class="label" style="width: 110px"><span class="required">*</span>Date of birth</td>
                        <td class="field">
                            <input type="text" id="date_of_birth" readonly="readonly" name="date_of_birth" class="login-page-2-input date-picker _required" />
                        </td>
                        </tr>
                        <tr>
                        <td class="label" style="width: 110px"></td>
                        <td class="field row" style="font-size: 10px; padding-left: 10px; text-align: left;">                    
                        </td>
                        </tr>               
                        <tr>                  
                        <td colspan="2" id="date_of_birth_error_box" style="color: red; font-size: 10px; padding-left: 10px; text-align: left;">                    
                        </td>
                        </tr>
                                                        <tr>
                        <td class="label" style="width: 110px"><span class="required">*</span>Admission Sought In</td>
                        <td class="field" align="left">
                            <select id="class_applied" name="class_applied" class="login-page-2-select _required" style="margin-left: 24px;
    width: 252px;">
                                                    <option value="-1-1" data-cut_off_date="">--Select Class--</option>
                                                    <option value="Nursery" data-cut_off_date="">Nursery / Play Group</option>
                                                    <option value="Prekindergarten" data-cut_off_date="">LKG</option>
                                                    <option value="Kindergarten" data-cut_off_date="">UKG</option>
                                                    <option value="1st-standard" data-cut_off_date="">I standard</option>
                                                    <option value="2nd-standard" data-cut_off_date="">II standard</option>
                                                    <option value="3rd-standard" data-cut_off_date="">III standard</option>
                                                    <option value="4th-standard" data-cut_off_date="">IV standard</option>
                                                    <option value="5th-standard" data-cut_off_date="">V standard</option>
                                                    <option value="6th-standard" data-cut_off_date="">VI standard</option>
                                                    <option value="7th-standard" data-cut_off_date="">VII standard</option>
                                                    <option value="8th-standard" data-cut_off_date="">VIII standard</option>
                                                    <option value="9th-standard" data-cut_off_date="">IX standard</option>
                                                    <option value="10th-standard" data-cut_off_date="">X standard</option>
                                                  
                                                    <option value="XI" data-cut_off_date="">XI Science</option>
                                                    <option value="XI Commerce" data-cut_off_date="">XI Commerce</option>
                                                </select>
                        </td>
                        </tr>
                                        <!-- <tr>
                            <td class="" colspan="2">
                                <p style='color:red;font-size:12px;text-align:justify;'>Note: Afternoon shift is applicable only for Classes Nursery, LKG and UKG. School will have standard shift for all students from Class 1.</p>                            
                            </td>
                        </tr> -->
                                        <tr>
                    </table>
                    <br/><br/>
                    <!-- <span style="font-weight:bold; text-align:center;">NOTE: We recommend you to use Google Chrome or Mozilla Firefox browsers to avoid any technical issues.
                    Please refrain from using Safari/Microsoft Edge/Internet Explorer.</span>
                    <br/><br/><br/><br/> -->
                </div>
            </div>
            <!-- <div class="col" style="background:#f9f9f9;">
                <div style="font-weight: bold;text-align: center;">Parent Details</div>
                <br>
                <div class="tab-gallery">
                    <div class="upper">
                        <button class="tablink" onclick="openPage('first1', this)" id="defaultOpen1" style="margin-left: 30px; padding-top: 5px;">New Parent</button>
                        <button class="tablink" onclick="openPage('second1', this)" id="defaultOpen1" style="padding-top: 5px;">Register For Second Child</button>
                        
                    </div>
                    <br>
                </div>

                <div id="first1" class="tabcontent">
                    <table class="site-signup-page-inner-table" width="100%">
                        <tr class="signup-row already_account_row">
                        <th scope="row" class="inner-table-left-td">
                            <div class="login-page-2-field-label"><span class="required">*</span><span id="parent_name">First Name</span>: </div>
                        </th>
                        <td class="login-page-2-field-value">
                            <input type="text" id="parent_first_name" name="parent_first_name" class="login-page-2-input _required" maxlength="30">
                        </td>
                        </tr>                               
                        <tr class="signup-row  already_account_row"><td colspan="2" class="spacer"></td></tr>
                                        <tr class="signup-row  already_account_row hideLastName">
                        <th scope="row" class="inner-table-left-td">
                            <div class="login-page-2-field-label"><span class="required">*</span>Last Name: </div>
                        </th>
                        <td class="login-page-2-field-value">
                            <input type="text" id="parent_last_name" name="parent_last_name" class="login-page-2-input _required" maxlength="30">
                        </td>
                        </tr>
                                        <tr class="signup-row"><td colspan="2" class="spacer"></td></tr>
                        <tr class="your_email">
                        <th scope="row" class="inner-table-left-td">
                            <span class="required">*</span><span class="login-page-2-field-label" id="your_email" >Your Email: </span>
                        </th>
                        <td class="login-page-2-field-value">
                            <input type="text" id="user_email" name="user_email" class="login-page-2-input _required" value="">
                        </td>
                        </tr>
                        <tr class="signup-row"><td colspan="2" class="spacer"></td></tr>
                        <tr class="signup-row">
                        <th scope="row" class="inner-table-left-td">
                            <div class="login-page-2-field-label"><span class="required">*</span>Password: </div>
                        </th>
                        <td class="login-page-2-field-value">
                            <input type="password" id="user_password" name="user_password" class="login-page-2-input _required" maxlength="30">
                        </td>
                        </tr>
                        <tr class="signup-row">
                        <td colspan="2" class="inner-table-left-td">
                            <div style="padding-bottom: 10px; padding-right: 25px; font-size:9px; color:#333333;" class="help-message">
                            <span style="margin-left: 10px;">6 characters minimum atleast one number and a character</span>
                            </div>
                        </td>
                        </tr>
                        
                        <tr class="signup-row already_account_row">
                        <th scope="row" class="inner-table-left-td"><span class="login-page-2-field-label"><span class="required">*</span>Mobile Number: </span></th>
                        <td class="login-page-2-field-value">
                            <input type="text" id="contact_num_country_code" maxlength="2" name="contact_num_country_code" style="width:90px" placeholder="Country Code" class="login-page-2-input numeric_only">
                            <input type="text" id="contact_num" maxlength="10" name="contact_num" style="width:145px" placeholder="10 digits number" class="login-page-2-input numeric_only">
                        </td>
                        </tr>
                        <tr class="signup-row"><td colspan="2" class="spacer" style="display:none;"></td></tr>
                        <tr class="signup-row  already_account_row">
                        <th scope="row" class="inner-table-left-td"><span class="login-page-2-field-label"><span class="required">*</span>I am: </span></th>
                        <td align="left" style="padding-left:14px" class="login-page-2-field-value">
                            <select style="width:145px" id="parent_gender" name="parent_gender" class="login-page-2-select _required">
                            <option value="">Select Gender:</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            </select>
                        </td>
                        </tr>
                                                            
                        <tr class="signup-row">
                        <td colspan="2" class="inner-table-left-td">
                            <div style="padding-bottom: 25px; padding-right: 77px; font-size:9px; color:#333333;" class="help-message">
                            <a href="/default/terms">Terms of service</a> and <a href="/default/privacy">Privacy Policy</a> available
                            </div>
                        </td>
                        </tr>
                    </table>
                </div>
                <div id="second1" class="tabcontent">
                    <table class="site-signup-page-inner-table" width="100%"  >
                        <tr class="your_email">
                        <th scope="row" class="inner-table-left-td">
                            <span class="required">*</span><span class="login-page-2-field-label" id="your_email">Your Email / Username</span>
                        </th>
                        <td class="login-page-2-field-value">
                            <input type="text" id="user_email" name="user_email" class="login-page-2-input _required" value="">
                        </td>
                        </tr>
                        <tr class="signup-row"><td colspan="2" class="spacer"></td></tr>
                        <tr class="signup-row">
                        <th scope="row" class="inner-table-left-td">
                            <div class="login-page-2-field-label"><span class="required">*</span>Password: </div>
                        </th>
                        <td class="login-page-2-field-value">
                            <input type="password" id="user_password" name="user_password" class="login-page-2-input _required" maxlength="30">
                        </td>
                        </tr>
                        <tr class="signup-row">
                        <td colspan="2" class="inner-table-left-td">
                            <div style="padding-bottom: 10px; padding-right: 25px; font-size:9px; color:#333333;" class="help-message">
                            <span style="margin-left: 10px;">6 characters minimum atleast one number and a character</span>
                            </div>
                        </td>
                        </tr>
                    </table>
                    <br>
                </div>  
                <div class="ui-dialog-buttonset" style="margin-left: 75px;">
                    <button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only by-button-dark-green signup-button" type="button" style="margin-top: 0px;">
                        <span class="ui-button-text">Register for Online Application</span>
                    </button>              
                    &nbsp;&nbsp;&nbsp;
                    <span><a style="font-size: 10px;color: #2D76B9;" href="">Forgot Password</a></span>
                </div>

            </div> -->
            <div class="ui-dialog-buttonset" style="margin-left: 44px;padding-top: 12px;">
                    <button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only by-button-dark-green signup-button" type="button" style="margin-top: 0px;">
                        <span class="ui-button-text">Register for Online Application</span>
                    </button>              
                    &nbsp;&nbsp;&nbsp;
                    <span><a style="font-size: 10px;color: #2D76B9;" href="">Forgot Password</a></span>
                </div>

        </div>
        <!-- <div class="row" >
            <div class="col" style="background:#f9f9f9;border: 1px solid lightgray;">
                <div class="ui-dialog-buttonpane ui-helper-clearfix">
                    <div class="ui-dialog-buttonset" style='text-align: left;'>          
                        <div style="padding:20px;">
                            <strong style=" ">For the Following Classes, Select A Class</strong><br/>
                            <span style="font-weight:bold;">Note: </span> 
                            <span style="color:red;">Admissions are not available in the following.</span>
                            <span style="">However you can leave your information by filling up the enquiry form. so that we can inform you when there is vacancy in your desired standard                </span>
                                <br/>
                                <input type="radio" name="class_select_query"   value="I"> I <br>
                                <input type="radio" name="class_select_query"   value="II"> II <br>
                                <input type="radio" name="class_select_query"   value="III"> III <br>
                                <input type="radio" name="class_select_query"   value="IV"> IV <br>
                                <input type="radio" name="class_select_query"   value="V"> V <br>
                                <input type="radio" name="class_select_query"   value="VI"> VI <br>
                                <input type="radio" name="class_select_query"   value="VII"> VII <br>
                                <input type="radio" name="class_select_query"   value="VIII"> VIII <br>
                                <input type="radio" name="class_select_query"   value="IX"> IX <br>
                                <input type="radio" name="class_select_query"   value="X"> X <br>
                                <input type="radio" name="class_select_query"   value="XII Science"> XII Science <br>
                                <input type="radio" name="class_select_query"   value="XII Commerce"> XII Commerce <br>
                                <a href="#"  style="border:solid 0px green !important;padding:6px 10px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only by-button-dark-green signup-button">Click Here</a>
                        </div>  
                    </div>
                </div>  
            </div>
        </div> -->
</div>
   
<!-- ---------------------------- -->

                            
     <!-- <input type="hidden" name="school_id" id="school_id" value="299611" />   -->
     <script>
     function getLeadsURl(){
      var getselectedClass=  $("input[name='class_select_query']:checked").val();
      if(typeof getselectedClass == 'undefined') {
        alert('Please Select a Class to Fill the Enquiry Form');
      } else {
        var urlNew = "/school/tlsh/leads";     
        window.location = urlNew;
      }
      
     }
     function hideLastName(){
                                            
     }
     hideLastName();
     </script> 
                                         
</div>
<br/><br/>




<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
document.getElementById("defaultOpen1").click();
</script>


<!-- Start of Google Code -->
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54109894-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- End of Google Code -->


<?php include("footer.php");?>

<div class="go-top">
<i class='bx bx-up-arrow-alt'></i>
</div>


<!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
<script src="assets/js/jquery.min.js"></script>

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