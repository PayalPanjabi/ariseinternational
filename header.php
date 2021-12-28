<!doctype html>
<html lang="zxx">
<head>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

<style>



.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 104;
  top: 0;
  right: 0;
  background-color:#f5f5f0 ;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 80px;
}

.sidenav a {
    padding: 6px 6px 6px 6px;
    text-decoration: none;
    font-size: 25px;
    color: #fff;
    display: block;
    transition: 0.3s;
}
.sidenav a.acc {
color:#000;
margin-top:-65px;
margin-bottom:30px;
margin-left:50px;
font-size:14px;
background-color:#F25822;
border-radius:50px;
color:#fff;
padding-left:30px;
padding-right:30px;
padding-top:12px;
padding-bottom:12px;
width:150px;
}
.sidenav a.refer {
font-size:19px;
background: linear-gradient(to bottom, #003366 0%, #000000 44%);
color:#fff;
width:100%;
margin-left:20px;
padding-top:10px;
padding-bottom:10px;
}


.sidenav .closebtn {
  position: absolute;
  top: 0;
  font-size: 35px;
  margin-left: 250px;
  color:#000 ;
 
}
.sidenav a.closebtn {
    margin-right: -5px;
}
#navia .fa-chevron-down {
  transition: all 0.5s ease;
}
.rtoate180 {
  transform: rotate(180deg);
}

#navia{
margin-top:10px;
margin-bottom:10px;
margin-left:20px;

height:40px;
padding-right:50px;
overflow:hidden;
background-color:#fff;
font-size:16px;
text-align:left;
width:fir to content;
}
 
#navia i{
position:absolute;
margin-left: 283px;
margin-top: -44px;
color:#F25822;
font-size:12px;
background-color:#fff;
z-index:1;
font-size:16px;


}
 
#navigationa{
margin-left:15px;
width:fir to content;
overflow:hidden;
font-size:16px;
background-color:#f5f5f0;
height:auto;
display:none;
}
#navigationa a{
margin-left:15px;
font-size:18px;
color:#000;
text-decoration:none;
padding-left:10px;
font-weight:400;

}
#navigationa a:hover{
color:#F25822;
}
#navigationa ul{
list-style:none;
} 
#navigationa li {
margin-top: 10px;

}

#navia .fa-chevron-down {
  transition: all 0.5s ease;
}
#navia a {
 color:#000;
 font-size:20px;
 text-decoration:none;
 font-weight:400;
 padding-bottom: 10px;
 margin-bottom: 10px;
}

.rtoate180 {
  transform: rotate(180deg);
}

.menu{
    margin-top: 10px;
    margin-bottom: 10px;
    margin-left: 20px;
    height: 40px;
    padding-right: 50px;
    overflow: hidden;
    background-color: #fff;
    font-size: 16px;
    text-align: left;
}
.nav-btn{
    font-size:30px;
    cursor: pointer;
    color:#000;    
    padding: 8px;
    padding-right: 0px;
    margin-top: -60px;
    float:right;
    
}
/*  */
.dropbtn {
    background-color: #fff;
    color: #000;
    padding: 8px;
    font-size: 19px;
    text-align: start;
    width: 331px;
    border: none;
    margin-left: 20px;
}

.dropdown {
  position: relative;
  display: inline-block;
  margin-bottom: 20px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 349px;
    margin-left: 20px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 3;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.menu-link a{
    background-color: #fff;color: #000;
        padding: 1px;font-size: 19px;text-align: start;width: 331px;border: none;
        margin-left: 20px;
}
.menu-link:hover a{background-color: #06b292;}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #06b292;}

/* sub dropdrown */
/* The navigation menu */
.navbar1 {
  overflow: hidden;
  background-color: #333;
  width: 95%;
}

/* Navigation links */
.navbar1 a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The subnavigation menu */
.subnav {
  float: left;
  overflow: hidden;
}

/* Subnav button */
.subnav .subnavbtn {
    font-size: 16px;
    border: none;
    outline: none;
    margin: 48px;
    color: white;
    padding: 24px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: -10px;
}

/* Add a red background color to navigation links on hover */
.navbar1 a:hover, .subnav:hover .subnavbtn {
  background-color: #473535;
}

/* Style the subnav content - positioned absolute */
.subnav-content {
    display: none;
    position: absolute;
    left: 0;
    background-color: #ded8d8;
    margin-left: 3px;
    width: 100%;
    color: black;
    z-index: 1;
}

/* Style the subnav links */
.subnav-content a {
    text-align: left;
    width: 100%;
    color: #070707;
    text-decoration: none;
}

/* Add a grey background color on hover */
.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

/* When you move the mouse over the subnav container, open the subnav content */
.subnav:hover .subnav-content {
  display: block;
}
</style>
</head>
<body>

<!-- <div class="preloader">
    <div class="loader">
        <div class="wrapper">
            <div class="circle circle-1"></div>
            <div class="circle circle-1a"></div>
            <div class="circle circle-2"></div>
            <div class="circle circle-3"></div>
        </div>
    </div>
</div> -->
<div class="navbar-area" style="box-shadow: 7px 1px 2px 1px rgb(226 226 234 / 20%);">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/img/Arise new logo.png" alt="image">
                    </a>
                </div>
                <div class="nav-btn">
                    <span style="" onclick="openNav()">&#9776; </span>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar" >
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/Arise new logo.png" alt="image">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active">
                        HOME
                          </a>
                        
                    </li>
                    <li class="nav-item">
                    <a href="" class="nav-link">
                    ABOUT US 
                    <i class='bx bx-chevron-down'></i>
                    </a>
                    <ul class="dropdown-menu">
                    <li class="nav-item">
                    <a href="about.php" class="nav-link">
                    WHY ARISE
                    </a>
                    </li>
                    <!-- <li class="nav-item">
                    <a href="mission.php" class="nav-link">
                    MISSION
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="vision.php" class="nav-link">
                    VISION
                    </a>
                    </li> -->
                    <li class="nav-item">
                    <a href="persident.php" class="nav-link">
                    PRESIDENT
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="secretary.php" class="nav-link">
                    SECRETARY
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="managing-director.php" class="nav-link">
                    VICE PRESIDENT
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="principal.php" class="nav-link">
                    PRINCIPAL
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="arise-team.php" class="nav-link">
                    ARISE TEAM
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="our_institutions.php" class="nav-link">
                    OUR INSTITUTIONS
                   
                    </a>
                   
                    </li>
                    <li class="nav-item">
                    <a href="gallery1.php" class="nav-link">
                    GALLERY
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="news.php" class="nav-link">
                    MEDIA COVERAGE 
                    </a>
                    </li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a href="" class="nav-link">
                    ACADEMICS
                    <i class='bx bx-chevron-down'></i>
                    </a>
                    <ul class="dropdown-menu">
                    <li class="nav-item">
                    <a href="whycbse.php" class="nav-link">
                    Why CBSE
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="" class="nav-link">
                    ACADEMIC CURRICULUM
                    </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="preschool.php" class="nav-link">
                                 PRE SCHOOL
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="primary-school.php" class="nav-link">
                                 PRIMARY SCHOOL
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="middle-high-school.php" class="nav-link">
                                 MIDDLE AND HIGH SCHOOL
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item">
                    <a href="academic_session.php" class="nav-link">
                    ACADEMIC SESSION
                    </a>
                    </li> -->
                    <li class="nav-item">
                    <a href="" class="nav-link">
                    SCHOOL CALENDAR
                    </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="precalendar.php" class="nav-link">
                                 PRE CALENDAR
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="primarycalendar.php" class="nav-link">
                                 PRIMARY CALENDAR
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                    <a href="learning-resources.php" class="nav-link">
                    LEARNING RESOURCES 
                    </a>
                    </li>
                    <li class="nav-item">
                                <a href="competitive-exam.php" class="nav-link">
                                COMPETITIVE EXAM CELL 
                                </a>
                            </li>
                    
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a href="" class="nav-link">
                    SPORTS AND ACTIVITIES
                    <i class='bx bx-chevron-down'></i>
                    </a>
                    <ul class="dropdown-menu">
                    <li class="nav-item">
                    <a href="" class="nav-link">
                    SPORTS CURRICULUM
                    </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="kindergarten-childern.php" class="nav-link">
                                KINDERGARTEN  
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="primary-childern.php" class="nav-link">
                                PRIMARY  
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="middle-Secondary-Children.php" class="nav-link">
                                MIDDLE AND SECONDARY  
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="extracurricular-activities.php" class="nav-link">
                                EXTRACURRICULAR ACTIVITIES
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="nav-item">
                    <a href="clubs.php" class="nav-link">
                    CLUBS
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="yoga.php" class="nav-link">
                    YOGA
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="art_carft.php" class="nav-link">
                    ART AND CRAFT
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="dance.php" class="nav-link">
                    DANCE
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="music.php" class="nav-link">
                    MUSIC
                    </a>
                    </li>

                    </ul>
                    </li>
                    <li class="nav-item">
                    <a href="" class="nav-link">
                    INFRASTRUCTURE
                    <i class='bx bx-chevron-down'></i>
                    </a>
                    <ul class="dropdown-menu">
                    <li class="nav-item">
                    <a href="composite_science_lab.php" class="nav-link">
                    COMPOSITE SCIENCE LAB
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="library.php" class="nav-link">
                    LIBRARY
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="computer_lab.php" class="nav-link">
                    COMPUTER LAB
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="medical_room.php" class="nav-link">
                    MEDICAL ROOM
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="transportation.php" class="nav-link">
                    TRANSPORTATION
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="premises.php" class="nav-link">
                    PREMISES
                    </a>
                    </li>

                    </ul>
                    </li>
                    <li class="nav-item">
                    <a href="" class="nav-link">
                    ADMISSIONS
                    <i class='bx bx-chevron-down'></i>
                    </a>
                    <ul class="dropdown-menu">
                    <li class="nav-item">
                    <a href="registration.php" class="nav-link">
                    ENQUIRY FORM
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="fees_structure.php" class="nav-link">
                    FEES STRUCTURE
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="account_details.php" class="nav-link">
                    ACCOUNT DETAILS
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="jobEnquiry.php" class="nav-link">
                    WE ARE HIRING
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="playground_details.php" class="nav-link">
                    PLAYGROUND DETAILS
                    </a>
                    </li>
                    </ul>
                    </li>
                   
                    <li class="nav-item">
                        <a href="actionpolicies.php" class="nav-link">
                        GENERAL INFO
                        <i class='bx bx-chevron-down'></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="smc.php" class="nav-link">
                                SMC (SCHOOL MANAGEMENT COMMITTEE)
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="tc.php" class="nav-link">
                                TC SAMPLE
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="epta.php" class="nav-link">
                                EXECUTIVE PARENT TEACHER ASSOCIATION</a>
                            </li>
                        </ul>
                    </li>
                    </ul>
                    <div class="others-options d-flex align-items-center">
                     
                        <div class="option-item">
                            <a href="login.php" class="default-btn">Login</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <div class="dropdown language-switcher d-inline-block">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>Language <i class='bx bx-chevron-down'></i></span>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item d-flex align-items-center">
                                    <img src="assets/img/english.png" class="shadow-sm" alt="flag">
                                    <span>English</span>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex align-items-center">
                                    <img src="assets/img/arab.png" class="shadow-sm" alt="flag">
                                    <span>العربيّة</span>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex align-items-center">
                                    <img src="assets/img/germany.png" class="shadow-sm" alt="flag">
                                    <span>Deutsch</span>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex align-items-center">
                                    <img src="assets/img/portugal.png" class="shadow-sm" alt="flag">
                                    <span>Português</span>
                                    </a>
                                    <a href="#" class="dropdown-item d-flex align-items-center">
                                    <img src="assets/img/china.png" class="shadow-sm" alt="flag">
                                    <span>简体中文</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="option-item">
                        <a href="#" class="default-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    
    <div id="mySidenav" class="sidenav">
   
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   
            
    <div class="menu">
        
    <a href="index.php" style="color: #000;font-size: 19px;   text-decoration: none;
    font-weight: 400;padding-bottom: 10px;margin-bottom: 10px;margin-left: 4px;">HOME</a></div>
     <!-- <div class="dropdown">
        <button  class="dropbtn menu-link"><a href="index.php" style="" >HOME</a></button>
    </div> -->
    <div class="dropdown">
        <button class="dropbtn">ABOUT US<i class='bx bx-chevron-down' style="float: right;"></i></button>
        <div class="dropdown-content">
            <!-- <a href="about.php" style="font-size:16px;">ABOUT</a> -->
            <a href="about.php" style="font-size:16px;">WHY ARISE </a>
            <!-- <a href="why-arise.php" style="font-size:16px;">WHY ARISE</a> -->
            <!-- <a href="mission.php" style="font-size:16px;">MISSION</a>
            <a href="vision.php" style="font-size:16px;"> VISION</a> -->
            <a href="persident.php" style="font-size:16px;"> PRESIDENT</a>
            <a href="secretary.php" style="font-size:16px;">SECRETARY</a>
            <a href="managing-director.php" style="font-size:16px;">VICE PRESIDENT</a>
            <a href="principal.php" style="font-size:16px;"> PRINCIPAL </a>
            <a href="arise-team.php" style="font-size:16px;">ARISE TEAM </a>
            <a href="our_institutions.php" style="font-size:16px;">OUR INSTITUTIONS </a>
            <a href="gallery1.php" style="font-size:16px;"> GALLERY </a>
            <a href="news.php" style="font-size:16px;"> MEDIA COVERAGE </a>
        </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">ACADEMICS<i class='bx bx-chevron-down' style="float: right;"></i></button>
        <div class="dropdown-content">
            <!-- <div class="dropdown">
                <button class="dropbtn">ACADEMIC CURRICULUM<i class='bx bx-chevron-down' style="float: right;"></i></button>
                <div class="dropdown-content">
                    <a href="preschool.php" style="font-size:16px;"> PRE SCHOOL </a>
                    <a href="preschool.php" style="font-size:16px;"> PRE SCHOOL </a>
                    <a href="preschool.php" style="font-size:16px;"> PRE SCHOOL </a>
              
                </div>
            </div> -->
            <a href="whycbse.php" style="font-size:16px;"> Why CBSE</a>
            <div class="navbar1">
                <div class="subnav">
                    <button class="subnavbtn">ACADEMIC CURRICULUM
                        <i class="fa fa-caret-down" style="    margin-left: 114px;"></i></button>
                    <div class="subnav-content">
                        <a href="preschool.php" style="font-size:16px;"> PRE SCHOOL</a>
                        <a href="primary-school.php" style="font-size:16px;">  PRIMARY SCHOOL</a>
                        <a href="middle-high-school.php" style="font-size:16px;"> MIDDLE AND HIGH SCHOOL</a>

                    </div>
                </div>
            </div>
            
            <!-- <a href="academic_session.php" style="font-size:16px;"> ACADEMIC SESSION </a> -->
            <!-- <a href="school_calendar.php" style="font-size:16px;"> SCHOOL CALENDAR</a> -->
            <div class="navbar1">
                <div class="subnav">
                    <button class="subnavbtn">SCHOOL CALENDAR
                        <i class="fa fa-caret-down" style="margin-left: 114px;"></i></button>
                        <div class="subnav-content">
                            <a href="precalendar.php" style="font-size:16px;"> PRE CALENDAR</a>
                            <a href="primarycalendar.php" style="font-size:16px;"> PRIMARY CALENDAR</a>
                        </div>
                </div>
            </div>
            <a href="learning-resources.php" style="font-size:16px;"> LEARNING RESOURCES </a>
            <a href="competitive-exam.php" style="font-size:16px;"> COMPETITIVE EXAM CELL</a>
        </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">SPORTS AND ACTIVITIES<i class='bx bx-chevron-down' style="float: right;"></i></button>
        <div class="dropdown-content">
            
            <div class="navbar1">
                <div class="subnav">
                    <button class="subnavbtn">SPORTS CURRICULUM 
                        <i class="fa fa-caret-down" style="    margin-left: 114px;"></i></button>
                    <div class="subnav-content">
                        <a href="kindergarten-childern.php" style="font-size:16px;"> KINDERGARTEN </a>
                       <br> <a href="primary-childern.php" style="font-size:16px;"> PRIMARY  </a>
                        <a href="middle-Secondary-Children.php" style="font-size:16px;"> MIDDLE AND SECONDARY  </a>
                        <a href="extracurricular-activities.php" style="font-size:16px;"> EXTRACURRICULAR ACTIVITIES</a>
                       
                    </div>
                </div>
            </div>
            

            <a href="clubs.php" style="font-size:16px;"> CLUBS </a>
            <a href="yoga.php" style="font-size:16px;"> YOGA </a>
            <a href="art_carft.php" style="font-size:16px;">ART AND CRAFT</a>
            <a href="dance.php" style="font-size:16px;">DANCE</a>
            <a href="music.php" style="font-size:16px;"> MUSIC</a>
        </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">INFRASTRUCTURE<i class='bx bx-chevron-down' style="float: right;"></i></button>
        <div class="dropdown-content">
            <a href="composite_science_lab.php" style="font-size:16px;"> COMPOSITE SCIENCE LAB </a>
            <a href="library.php" style="font-size:16px;"> LIBRARY </a>
            <a href="computer_lab.php" style="font-size:16px;">COMPUTER LAB</a>
            <a href="medical_room.php" style="font-size:16px;">MEDICAL ROOM</a>
            <a href="transportation.php" style="font-size:16px;"> TRANSPORTATION</a>
            <a href="premises.php" style="font-size:16px;"> PREMISES </a>
        </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">ADMISSIONS<i class='bx bx-chevron-down' style="float: right;"></i></button>
        <div class="dropdown-content">
            <a href="registration.php" style="font-size:16px;"> ENQUIRY FORM </a>
            <a href="fees_structure.php" style="font-size:16px;">FEES STRUCTURE</a>
            <a href="account_details.php" style="font-size:16px;">ACCOUNT DETAILS</a>
            <a href="jobEnquiry.php" style="font-size:16px;">WE ARE HIRING</a>
            <a href="playground_details.php" style="font-size:16px;"> PLAYGROUND DETAILS </a>
            
            
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">GENERAL INFO
            <i class='bx bx-chevron-down' style="float: right;"></i></button>
        <div class="dropdown-content">
           <a href="smc.php" style="font-size:16px;">SMC (SCHOOL MANAGEMENT COMMITTEE) </a>
            <a href="tc.php" style="font-size:16px;"> TC SAMPLE</a>
            <a href="epta.php" style="font-size:16px;"> EXECUTIVE PARENT TEACHER ASSOCIATION</a>
                       
        </div>
    </div>
   
        <div class="option-item" style="padding: 20px;width: 168px;">
            <a href="login.php" class="default-btn">Login</a>
        </div>
    <!-- <div class="menu" id="navia"><a href="#">ABOUT US</a><i class='bx bx-chevron-down'></i></div>
    <div id="navigationa">
        <ul>
            <li> <a href="why-arise.php" class="nav-link">WHY ARISE</a></li>
            <li> <a href="mission.php" class="nav-link">MISSION</a></li>
            <li><a href="vision.php" class="nav-link"> VISION</a></li>
            <li><a href="persident.php" class="nav-link"> PRESIDENT</a></li>
            <li><a href="secretary.php" class="nav-link">SECRETARY</a></li>
            <li><a href="managing-director.php" class="nav-link">MANAGING DIRECTOR</a></li>
            <li><a href="principal.php" class="nav-link"> PRINCIPAL </a></li>
            <li><a href="arise-team.php" class="nav-link">ARISE TEAM </a></li>
            <li><a href="our_institutions.php" class="nav-link">OUR INSTITUTIONS </a></li>
            <li><a href="gallery.php" class="nav-link"> GALLERY </a></li>
            
        </ul>
    </div>
    <div class="menu" id="navia"><a href="#"> ACADEMICS</a>
    <i class='bx bx-chevron-down'></i>
    </div>
    <div id="navigationa">
        <ul>
            <li><a href="academic_cirrculum.php" class="nav-link"> ACADEMIC CURRICULUM </a></li>
            <li><a href="academic_session.php" class="nav-link"> ACADEMIC SESSION </a></li>
            <li><a href="school_calendar.php" class="nav-link"> SCHOOL CALENDAR</a></li>
            <li><a href="schooltimings.php" class="nav-link"> SCHOOL TIMINGS </a></li>
        
        </ul>
    </div>  -->
    <!-- <div class="menu" id="navia">
        <a href="" class="nav-link"> SPORTS AND ACTIVITIES <i class='bx bx-chevron-down'></i></a>
    </div>
    <div id="navigationa">
        <ul>
            <li><a href="clubs.php" class="nav-link"> CLUBS </a></li>
            <li><a href="yoga.php" class="nav-link"> YOGA </a></li>
            <li> <a href="art_carft.php" class="nav-link">ART AND CRAFT</a></li>
            <li> <a href="dance.php" class="nav-link">DANCE</a></li>
            <li><a href="music.php" class="nav-link"> MUSIC</a></li>
        </ul>
    </div>  -->
    <!-- <div class="menu" id="navia"><a href="" class="nav-link">INFRASTRUCTURE 
    <i class='bx bx-chevron-down'></i></a>
    </div>
    <div id="navigationa">
        <ul>
            <li><a href="composite_science_lab.php" class="nav-link"> COMPOSITE SCIENCE LAB </a></li>
            <li><a href="library.php" class="nav-link"> LIBRARY </a></li>
            <li><a href="computer_lab.php" class="nav-link">COMPUTER LAB</a></li>
            <li><a href="medical_room.php" class="nav-link">MEDICAL ROOM</a></li>
            <li><a href="transportation.php" class="nav-link"> TRANSPORTATION</a></li>
            <li><a href="premises.php" class="nav-link"> PREMISES </a></li>
         
        </ul>
    </div> -->
    <!-- <div class="menu" id="navia"><a href="" class="nav-link">ADMISSIONS 
         <i class='bx bx-chevron-down'></i> </a>
    </div>
    <div id="navigationa">
        <ul>
            <li> <a href="account_details.php" class="nav-link">ACCOUNT DETAILS</a></li>
            <li><a href="admission.php" class="nav-link"> APPLICATION FORM </a></li>
            <li><a href="covid_scholarship.php" class="nav-link"> COVID-19 RESILIENCE SCHOLARSHIP </a></li>
            <li><a href="school_calendar.php" class="nav-link">CALENDAR</a></li>
            <li><a href="smc.php" class="nav-link">SMC (SCHOOL MANAGEMENT COMMITTEE) </a></li>
            <li><a href="tc.php" class="nav-link"> TC SAMPLE</a></li>
            <li><a href="playground_details.php" class="nav-link"> PLAYGROUND DETAILS </a></li>
            <li><a href="fees_structure.php" class="nav-link">FEES STRUCTURE</a></li>
            <li> <a href="jobEnquiry.php" class="nav-link">WE ARE HIRING</a></li>
        </ul>
    </div> -->
    <!-- <div class="option-item">
        <a href="login.php" class="default-btn">Login</a>
    </div> -->
    
    </div>


   

    <script>
    $(document).ready(function(){
        $("#navia").click(function(){
            $("#navia .fa-chevron-down").toggleClass("rtoate180");
            $("#navigationa").stop().slideToggle(500);
        });
    });
    $(document).ready(function(){
        $("#navia1").click(function(){
            $("#navia1 .fa-chevron-down").toggleClass("rtoate180");
            $("#navigationa1").stop().slideToggle(500);
        });
    });
    </script>
    <script>
    function openNav() {
    document.getElementById("mySidenav").style.width = "360px";
    }

    function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    }
    </script>


</div>

</body>
</html>