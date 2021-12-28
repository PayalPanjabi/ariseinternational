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
<link rel="icon" type="image/png" href="assets/img/logo_white.png">
<style>
    .galleryItem{
        height: 167px;
        width: 282px;
        margin-bottom: 66px;
    border-radius: 29px;
    }

    .zoom {
  /* padding: 50px;
  background-color: green;
  transition: transform .2s; 
  width: 200px;
  height: 200px; */
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.7); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
/* .photo-gallery-thumb {
    width: 100%;
    height: 140px;
    background-size: cover;
    background-repeat: no-repeat;
    margin-bottom: 30px;
    background-position: center center;
} */
.tablink {
    text-align: center;
        border: 1px solid #ededed;
        font-size: 13px;
        color: #282526;
        padding: 12px;
        border-radius: 5px;
        margin-right: 5px;
        width: 150px;
        height: 50px;
        line-height: normal;
        letter-spacing: 2px;
        text-transform: uppercase;
      
      
    }
    
    .tablink:hover {
      background-color: #fff;
      color:red;
    }
    
    /* Style the tab content (and add height:100% for full page content) */
    .tabcontent {
      color: #000;
      display: none;
      padding: 60px 20px;
      height: 100%;
    }

    .upper{
        margin: 30px 180px;
        text-align: center;
    }
    .lower{
        margin: 30px 270px;
        text-align: center;
    }

    .f-14{
        margin-bottom: 30px!important;
        text-align: center!important;
        font-size: 28px!important;
    }

    @media only screen and (min-width: 600px) {
     .accordion-bral{
          display:none;
     }
}

    .accordion-bral {
  min-height: 0;
  min-width: 220px;
  width: 100%;
  height: 100%;
  background-color: #FFF;
 margin:20px 0px;
}
.accordion-bral .ac-label {
  font-family: Arial, sans-serif;
  padding: 5px 20px;
  position: relative;
  display: block;
  height: auto;
  cursor: pointer;
  color: #777;
  line-height: 33px;
  font-size: 19px;
  background: #fff;
  border: 1px solid #000;
  margin:5px 0px;
}
.accordion-bral .ac-label:hover {
  background: #eee;
}
.accordion-bral input + .ac-label  {
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.accordion-bral input:checked + .ac-label,
.accordion-bral input:checked + .ac-label:active {
  background-color: rgba(79, 79, 79, 0.5) !important;
  color: #FFF;
  box-shadow: 0px 0px 0px 1px rgba(155, 155, 155, 0.3), 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.accordion-bral input.ac-input {
  display: none;
}
.accordion-bral .article {
  background:#fff;
  overflow: hidden;
  height: 0px;
  max-height: auto;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.accordion-bral .article p {
  color: #000;
  line-height: 23px;
  font-size: 14px;
  padding: 20px;
}
.accordion-bral input:checked ~ .article i {
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}
.accordion-bral input:checked ~ .article.ac-content {
  height: auto;
}

.accordion-bral i {
  position: absolute;
  transform: translate(-30px, 0);
  margin-top: 16px;
  right: 0;
}
.accordion-bral input:checked ~ .ac-label i:before {
  transform: translate(2px, 0) rotate(-45deg);
}
.accordion-bral input:checked ~ .ac-label i:after {
  transform: translate(-2px, 0) rotate(45deg);
}
.accordion-bral i:before, .accordion-bral i:after {
  content: "";
  position: absolute;
  background-color: #000;
  width: 3px;
  height: 9px;
}
.accordion-bral i:before {
  transform: translate(-2px, 0) rotate(-45deg);
}
.accordion-bral i:after {
  transform: translate(2px, 0) rotate(45deg);
}
ul.ac-list {
  padding-left: 40px;
  list-style-type: disc;  
}

table.ac-table {
  margin: 20px 0 20px 20px;
}
table.ac-table th{
  text-align: left;
}

@media (max-width: 600px) {

  .tab-gallery{
          display:none;
     }

  .accordion-bral .ac-label {
  font-family: Arial, sans-serif;
  padding: 5px 20px;
  position: relative;
  display: block;
  height: auto;
  padding-right: 40px;
  cursor: pointer;
  color: #777;
  line-height: 33px;
  font-size: 19px;
  background: #EFEFEF;
  border: 1px solid #CCC;
}
  .accordion-bral i {
  position: absolute;
  transform: translate(-30px, 0);
  margin-top: 2%;
  right: 0;
}
.mbgallery{
     width:50%;
     max-width:50%;
}
.galleryItem{
     border-radius:0px!important;
     height:155px;
}
}
</style>
</head>
<body>
<?php include("header.php");?>



<!--<div class="page-banner-area item-bg1">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="page-banner-content">
<h2> Galleries for Academic Year 2019-2020</h2>
<ul>
<li>
<a href="index.php">Home</a>
</li>
<li>Gallery</li>
</ul>
</div>
</div>
</div>
</div>
</div>-->

<!-- tab section -->
<!-- <section class="banner-img"> -->
     <div class="tab-gallery">
          <div class="upper">
     <button class="tablink" onclick="openPage('first', this)" id="defaultOpen" style="margin-left: 30px; padding-top: 5px;">Annual Day</button>
     <button class="tablink" onclick="openPage('second', this)" id="defaultOpen" style="padding-top: 5px;">Dahihandi</button>
     <button class="tablink" onclick="openPage('third', this)" id="defaultOpen">Grand Parents Day</button>
     <button class="tablink" onclick="openPage('fourth', this)" id="defaultOpen">Marathwada Mukti Din</button>
     <button class="tablink" onclick="openPage('fifth', this)" id="defaultOpen">Masterchef Pre Primary</button>
     <button class="tablink" onclick="openPage('sixth', this)" id="defaultOpen" style="padding-top: 5px;">Open House</button>
     </div>
     <div class="lower">
     <button class="tablink" onclick="openPage('seventh', this)" 
     id="defaultOpen" style="margin-left: 15px;padding-top: 5px;">Sports Day</button>
     <!-- <button class="tablink" onclick="openPage('eighth', this)" style="padding-top: 5px;">Sports Tab</button> -->
     <button class="tablink" onclick="openPage('ninth', this)">Tech Exhibition</button>
     <button class="tablink" onclick="openPage('tenth', this)" id="defaultOpen">Visit to Anathalay</button>
     <button class="tablink" onclick="openPage('eleventh', this)" id="defaultOpen" style="padding-top: 5px;">Yellow Day</button>
     </div>
     <div id="first" class="tabcontent">
     <div class="gallery-area  pb-70">
     <div class="container">
     <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
     <div class="row">
          
          <div class="col-md-12">
               <h4 class="f-14">Annual Day Celebration </h4>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-4 zoom zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a1.png" 
                                                  data-group="67" class=" galleryItem">
                                                  
                                                  <!-- <div class="photo-gallery-thumb"
                                                  style="background-image: url(assets\img\gallery\photo1974_124591582868632.jpeg);"></div> -->
                                             </div>
                                             <div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a2.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a3.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a4.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a5.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a6.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a7.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a8.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a9.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a10.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a11.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a12.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a13.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a14.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a15.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a16.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a17.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a18.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a19.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a20.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a21.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a22.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a23.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a24.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a25.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a26.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a27.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\AnnualDay\a28.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div></div></div></div>
     </div>

     <div id="second" class="tabcontent">
     
     <div class="gallery-area  pb-70">
     <div class="container">
     <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
     <div class="row">
          
          <div class="col-md-12">
               <h4 class="f-14">Dahihandi Celebration </h4>
          </div>
                                             <!-- <div class="col-md-3 col-sm-4 col-xs-4 zoom zoom">
                                                  <img src="assets\img\gallery\Dahihandi\d1.png" 
                                                  data-group="67" class=" galleryItem">
                                                  
                                                  </div>
                                             <div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\Dahihandi\d2.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\Dahihandi\d3.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div> -->
                                             <div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\Dahihandi\d8.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div>
                                             <div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\Dahihandi\d4.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div>
                                             <!-- <div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\Dahihandi\d5.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div> -->
                                             <div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\Dahihandi\d6.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\Dahihandi\d7.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div>
                                        
                                        </div></div></div>
     </div>

     <div id="third" class="tabcontent">
     
     <div class="gallery-area  pb-70">
     <div class="container">
     <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
     <div class="row">
          
          <div class="col-md-12">
               <h4 class="f-14">Grand Parents Day Celebration </h4>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-4 zoom zoom">
                                                  <img src="assets\img\gallery\GrandParentsDay\g1.png" 
                                                  data-group="67" class=" galleryItem">
                                                  
                                                  <!-- <div class="photo-gallery-thumb"
                                                  style="background-image: url(assets\img\gallery\photo1974_124591582868632.jpeg);"></div> -->
                                             </div>
                                             <div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\GrandParentsDay\g2.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\GrandParentsDay\g3.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\GrandParentsDay\g4.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\GrandParentsDay\g5.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\GrandParentsDay\g6.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\GrandParentsDay\g7.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div></div></div></div>
     </div>
     <div id="fourth" class="tabcontent">
     
     <div class="gallery-area  pb-70">
     <div class="container">
     <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
     <div class="row">
          
          <div class="col-md-12">
               <h4 class="f-14">Marathwada Mukti Din </h4>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-4 zoom zoom">
                                                  <img src="assets\img\gallery\MarathwadaMuktiDin\m1.png" 
                                                  data-group="67" class=" galleryItem">
                                                  
                                                  <!-- <div class="photo-gallery-thumb"
                                                  style="background-image: url(assets\img\gallery\photo1974_124591582868632.jpeg);"></div> -->
                                             </div>
                                             <div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\MarathwadaMuktiDin\m2.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\MarathwadaMuktiDin\m3.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\MarathwadaMuktiDin\m4.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\MarathwadaMuktiDin\m5.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\MarathwadaMuktiDin\m6.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\MarathwadaMuktiDin\m7.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\MarathwadaMuktiDin\m8.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\MarathwadaMuktiDin\m9.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\MarathwadaMuktiDin\m10.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\MarathwadaMuktiDin\m11.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\MarathwadaMuktiDin\m12.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\MarathwadaMuktiDin\m13.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\MarathwadaMuktiDin\m14.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\MarathwadaMuktiDin\m15.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div></div></div></div>
     </div>
     <div id="fifth" class="tabcontent">
     
     <div class="gallery-area  pb-70">
     <div class="container">
     <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
     <div class="row">
          
          <div class="col-md-12">
               <h4 class="f-14">Masterchef pre primary</h4>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-4 zoom zoom">
                                                  <img src="assets\img\gallery\Masterchefpreprimary\c1.png" 
                                                  data-group="67" class=" galleryItem">
                                                  
                                                  <!-- <div class="photo-gallery-thumb"
                                                  style="background-image: url(assets\img\gallery\photo1974_124591582868632.jpeg);"></div> -->
                                             </div>
                                             <div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\Masterchefpreprimary\c2.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\Masterchefpreprimary\c3.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\Masterchefpreprimary\c4.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\Masterchefpreprimary\c5.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\Masterchefpreprimary\c6.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\Masterchefpreprimary\c7.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\Masterchefpreprimary\c8.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\Masterchefpreprimary\c9.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\Masterchefpreprimary\c10.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\Masterchefpreprimary\c11.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\Masterchefpreprimary\c12.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\Masterchefpreprimary\c13.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\Masterchefpreprimary\c14.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div></div></div></div>
     </div>
     <div id="sixth" class="tabcontent">
     
     <div class="gallery-area  pb-70">
     <div class="container">
     <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
     <div class="row">
          
          <div class="col-md-12">
               <h4 class="f-14">Open House</h4>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-4 zoom zoom">
                                                  <img src="assets\img\gallery\OpenHouse\o1.png" 
                                                  data-group="67" class=" galleryItem">
                                                  
                                                  <!-- <div class="photo-gallery-thumb"
                                                  style="background-image: url(assets\img\gallery\photo1974_124591582868632.jpeg);"></div> -->
                                             </div>
                                             <div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\OpenHouse\o2.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\OpenHouse\o3.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\OpenHouse\o4.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\OpenHouse\o5.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\OpenHouse\o6.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div></div></div></div>
     </div>
     <div id="seventh" class="tabcontent">
     
     <div class="gallery-area  pb-70">
     <div class="container">
     <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
     <div class="row">
          
          <div class="col-md-12">
               <h4 class="f-14">Sports Day</h4>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-4 zoom zoom">
                                                  <img src="assets\img\gallery\SportsDay\s1.JPG" 
                                                  data-group="67" class=" galleryItem">
                                                  
                                                  <!-- <div class="photo-gallery-thumb"
                                                  style="background-image: url(assets\img\gallery\photo1974_124591582868632.jpeg);"></div> -->
                                             </div>
                                             <div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s2.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s3.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s4.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s5.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s6.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s7.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s8.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s9.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s10.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s11.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s12.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s13.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s14.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s15.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s16.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s17.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s18.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s19.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s20.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s21.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s22.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s23.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s24.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s25.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s26.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s27.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s28.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsDay\s29.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div></div></div></div>
     </div>
     <div id="eighth" class="tabcontent">
     
     <div class="gallery-area  pb-70">
     <div class="container">
     <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
     <div class="row">
          
          <div class="col-md-12">
               <h4 class="f-14">Sports Tab</h4>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-4 zoom zoom">
                                                  <img src="assets\img\gallery\SportsTab\t1.png" 
                                                  data-group="67" class=" galleryItem">
                                                  
                                                  <!-- <div class="photo-gallery-thumb"
                                                  style="background-image: url(assets\img\gallery\photo1974_124591582868632.jpeg);"></div> -->
                                             </div>
                                             <div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsTab\t2.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsTab\t3.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsTab\t4.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsTab\t5.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsTab\t6.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\SportsTab\t7.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div></div></div></div>
     </div>
     <div id="ninth" class="tabcontent">
     
     <div class="gallery-area  pb-70">
     <div class="container">
     <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
     <div class="row">
          
          <div class="col-md-12">
               <h4 class="f-14">Tech Exhibition</h4>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-4 zoom zoom">
                                                  <img src="assets\img\gallery\TechExhibition\e1.png" 
                                                  data-group="67" class=" galleryItem">
                                                  
                                                  <!-- <div class="photo-gallery-thumb"
                                                  style="background-image: url(assets\img\gallery\photo1974_124591582868632.jpeg);"></div> -->
                                             </div>
                                             <div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\TechExhibition\e2.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\TechExhibition\e3.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\TechExhibition\e4.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\TechExhibition\e5.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\TechExhibition\e6.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\TechExhibition\e7.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\TechExhibition\e8.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\TechExhibition\e9.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\TechExhibition\e10.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\TechExhibition\e11.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\TechExhibition\e12.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\TechExhibition\e13.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\TechExhibition\e14.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\TechExhibition\e15.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\TechExhibition\e16.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\TechExhibition\e17.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\TechExhibition\e18.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div></div></div></div>
     </div>
     <div id="tenth" class="tabcontent">
     
     <div class="gallery-area  pb-70">
     <div class="container">
     <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
     <div class="row">
          
          <div class="col-md-12">
               <h4 class="f-14">Visit to Anathalay</h4>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-4 zoom zoom">
                                                  <img src="assets\img\gallery\VisittoAnathalay\v1.png" 
                                                  data-group="67" class=" galleryItem">
                                                  
                                                  <!-- <div class="photo-gallery-thumb"
                                                  style="background-image: url(assets\img\gallery\photo1974_124591582868632.jpeg);"></div> -->
                                             </div>
                                             <div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\VisittoAnathalay\v2.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\VisittoAnathalay\v3.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\VisittoAnathalay\v4.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div></div></div></div>
     </div>

     <div id="eleventh" class="tabcontent">
     <div class="gallery-area  pb-70">
     <div class="container">
     <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
     <div class="row">
          
          <div class="col-md-12">
               <h4 class="f-14">Yellow Day</h4>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-4 zoom zoom">
                                                  <img src="assets\img\gallery\YellowDay\y1.png" 
                                                  data-group="67" class=" galleryItem">
                                                  
                                                  <!-- <div class="photo-gallery-thumb"
                                                  style="background-image: url(assets\img\gallery\photo1974_124591582868632.jpeg);"></div> -->
                                             </div>
                                             <div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\YellowDay\y2.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\YellowDay\y3.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\YellowDay\y4.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\YellowDay\y5.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\YellowDay\y6.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\YellowDay\y7.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\YellowDay\y8.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                                  <img src="assets\img\gallery\YellowDay\y9.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                             </div></div></div></div>
     </div>



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
     </script>
     </div>
<!-- </section> -->





















<!-- end tab section -->
<!-- mobile gallery -->
<div class="accordion-bral">

  <div>
    <!-- accordion item 1 -- start -->
    <input class="ac-input" id="ac-1" name="accordion-1" type="checkbox"/>
    <label class="ac-label" for="ac-1">Annual Day Celebration<i></i></label>
    <div class="article ac-content">
      
      <div>
      <div class="gallery-area  pb-70">
<div class="container">
    <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
    <div class="row">
        
        
            <h4 class="f-14">Annual Day Celebration </h4>
        
        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery ">
                                             <img src="assets\img\gallery\AnnualDay\a1.png" 
                                             data-group="67" class=" galleryItem">
                                             
                                              <!-- <div class="photo-gallery-thumb"
                                               style="background-image: url(assets\img\gallery\photo1974_124591582868632.jpeg);"></div> -->
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a2.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a3.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a4.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a5.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a6.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a7.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a8.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a9.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a10.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a11.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a12.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a13.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a14.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a15.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a16.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a17.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a18.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a19.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a20.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a21.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a22.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a23.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a24.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a25.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a26.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a27.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\AnnualDay\a28.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div></div></div></div>
      </div>
      <br>
    </div>
  </div>
  <!-- accordion item 1 -- end -->

  <div>
    <!-- accordion item 2 -- start -->
    <input class="ac-input" id="ac-2" name="accordion-1" type="checkbox" />
    <label class="ac-label" for="ac-2">Dahihandi Celebration<i></i></label>
    <div class="article ac-content">
    <div class="gallery-area  pb-70">
<div class="container">
    <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
    <div class="row">
        
        <div class="col-md-12">
            <h4 class="f-14">Dahihandi Celebration </h4>
        </div>
                                        <!-- <div class="col-md-3 col-sm-4 col-xs-4 zoom zoom">
                                             <img src="assets\img\gallery\Dahihandi\d1.png" 
                                             data-group="67" class=" galleryItem">
                                             
                                               </div>
                                        <div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                             <img src="assets\img\gallery\Dahihandi\d2.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                             <img src="assets\img\gallery\Dahihandi\d3.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div> -->
                                        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\Dahihandi\d8.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\Dahihandi\d4.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div>
                                        <!-- <div class="col-md-3 col-sm-4 col-xs-4 zoom">
                                             <img src="assets\img\gallery\Dahihandi\d5.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div> -->
                                        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\Dahihandi\d6.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\Dahihandi\d7.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div>
                                      
                                   </div></div></div>
    </div>
  </div>
  <!-- accordion item 2 -- end -->

  <div>
    <!-- accordion item 3 -- start -->
    <input class="ac-input" id="ac-3" name="accordion-1" type="checkbox" />
    <label class="ac-label" for="ac-3">Grand Parents Day<i></i></label>
    <div class="article ac-content">
    <div class="gallery-area  pb-70">
<div class="container">
    <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
    <div class="row">
        
        <div class="col-md-12">
            <h4 class="f-14">Grand Parents Day Celebration </h4>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\GrandParentsDay\g1.png" 
                                             data-group="67" class=" galleryItem">
                                             
                                              <!-- <div class="photo-gallery-thumb"
                                               style="background-image: url(assets\img\gallery\photo1974_124591582868632.jpeg);"></div> -->
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\GrandParentsDay\g2.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\GrandParentsDay\g3.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\GrandParentsDay\g4.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\GrandParentsDay\g5.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\GrandParentsDay\g6.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\GrandParentsDay\g7.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div></div></div></div>
      <div>
        
      </div>
    </div>
  </div>
  <!-- accordion item 3 -- end -->

  <div>
    <!-- accordion item 4 -- start -->
    <input class="ac-input" id="ac-4" name="accordion-1" type="checkbox" />
    <label class="ac-label" for="ac-4">Marathwada Mukti Din<i></i></label>
    <div class="article ac-content">
    <div class="gallery-area  pb-70">
<div class="container">
    <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
    <div class="row">
        
        <div class="col-md-12">
            <h4 class="f-14">Marathwada Mukti Din </h4>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\MarathwadaMuktiDin\m1.png" 
                                             data-group="67" class=" galleryItem">
                                             
                                              <!-- <div class="photo-gallery-thumb"
                                               style="background-image: url(assets\img\gallery\photo1974_124591582868632.jpeg);"></div> -->
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\MarathwadaMuktiDin\m2.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\MarathwadaMuktiDin\m3.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\MarathwadaMuktiDin\m4.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\MarathwadaMuktiDin\m5.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\MarathwadaMuktiDin\m6.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\MarathwadaMuktiDin\m7.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\MarathwadaMuktiDin\m8.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\MarathwadaMuktiDin\m9.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\MarathwadaMuktiDin\m10.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\MarathwadaMuktiDin\m11.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\MarathwadaMuktiDin\m12.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\MarathwadaMuktiDin\m13.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\MarathwadaMuktiDin\m14.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\MarathwadaMuktiDin\m15.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div></div></div></div>
    </div>
  </div>
  <!-- accordion item 4 -- end -->
   <div>
    <!-- accordion item 5 -- start -->
    <input class="ac-input" id="ac-5" name="accordion-1" type="checkbox" />
    <label class="ac-label" for="ac-5">Masterchef pre primary<i></i></label>
    <div class="article ac-content">
    <div class="gallery-area  pb-70">
<div class="container">
    <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
    <div class="row">
        
        <div class="col-md-12">
            <h4 class="f-14">Masterchef pre primary</h4>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\Masterchefpreprimary\c1.png" 
                                             data-group="67" class=" galleryItem">
                                             
                                              <!-- <div class="photo-gallery-thumb"
                                               style="background-image: url(assets\img\gallery\photo1974_124591582868632.jpeg);"></div> -->
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\Masterchefpreprimary\c2.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\Masterchefpreprimary\c3.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\Masterchefpreprimary\c4.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\Masterchefpreprimary\c5.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\Masterchefpreprimary\c6.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\Masterchefpreprimary\c7.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\Masterchefpreprimary\c8.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\Masterchefpreprimary\c9.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\Masterchefpreprimary\c10.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\Masterchefpreprimary\c11.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\Masterchefpreprimary\c12.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\Masterchefpreprimary\c13.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\Masterchefpreprimary\c14.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div></div></div></div>
    </div>
  </div>
  <!-- accordion item 5 -- end -->
   <div>
    <!-- accordion item 6 -- start -->
    <input class="ac-input" id="ac-6" name="accordion-1" type="checkbox" />
    <label class="ac-label" for="ac-6">Open House<i></i></label>
    <div class="article ac-content">
    <div class="gallery-area  pb-70">
<div class="container">
    <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
    <div class="row">
        
        <div class="col-md-12">
            <h4 class="f-14">Open House</h4>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\OpenHouse\o1.png" 
                                             data-group="67" class=" galleryItem">
                                             
                                              <!-- <div class="photo-gallery-thumb"
                                               style="background-image: url(assets\img\gallery\photo1974_124591582868632.jpeg);"></div> -->
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\OpenHouse\o2.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\OpenHouse\o3.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\OpenHouse\o4.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallerym">
                                             <img src="assets\img\gallery\OpenHouse\o5.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\OpenHouse\o6.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div></div></div></div>
    </div>
  </div>
  <!-- accordion item 6 -- end -->
   <div>
    <!-- accordion item 7 -- start -->
    <input class="ac-input" id="ac-7" name="accordion-1" type="checkbox" />
    <label class="ac-label" for="ac-7">Sports Day<i></i></label>
    <div class="article ac-content">
    <div class="gallery-area  pb-70">
     <div class="container">
    <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
    <div class="row">
        
        <div class="col-md-12">
            <h4 class="f-14">Sports Day</h4>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s1.JPG" 
                                             data-group="67" class=" galleryItem">
                                             
                                              <!-- <div class="photo-gallery-thumb"
                                               style="background-image: url(assets\img\gallery\photo1974_124591582868632.jpeg);"></div> -->
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s2.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s3.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s4.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s5.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s6.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s7.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s8.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s9.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s10.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallerym">
                                             <img src="assets\img\gallery\SportsDay\s11.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s12.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s13.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallerym">
                                             <img src="assets\img\gallery\SportsDay\s14.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s15.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s16.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s17.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s18.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s19.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s20.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s21.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s22.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s23.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s24.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s25.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s26.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s27.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s28.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsDay\s29.JPG" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div></div></div></div>
    </div>
  </div>
  <!-- accordion item 7 -- end -->

   <!-- <div>
    <input class="ac-input" id="ac-8" name="accordion-1" type="checkbox" />
    <label class="ac-label" for="ac-8">Sports Tab<i></i></label>
    <div class="article ac-content">
    <div class="gallery-area  pb-70">
<div class="container">
    <div class="row">
        
        <div class="col-md-12">
            <h4 class="f-14">Sports Tab</h4>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsTab\t1.png" 
                                             data-group="67" class=" galleryItem">
                                             
                                             
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsTab\t2.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsTab\t3.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsTab\t4.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsTab\t5.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsTab\t6.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\SportsTab\t7.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div></div></div></div> 

                              
    
                                   </div>
  </div> -->
  <!-- accordion item 8 -- end -->

   <div>
    <!-- accordion item 9 -- start -->
    <input class="ac-input" id="ac-9" name="accordion-1" type="checkbox" />
    <label class="ac-label" for="ac-9">Tech Exhibition<i></i></label>
    <div class="article ac-content">
    <div class="gallery-area  pb-70">
<div class="container">
    <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
    <div class="row">
        
        <div class="col-md-12">
            <h4 class="f-14">Tech Exhibition</h4>
        </div>
       
        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\TechExhibition\e1.png" 
                                             data-group="67" class=" galleryItem">
                                             
                                              <!-- <div class="photo-gallery-thumb"
                                               style="background-image: url(assets\img\gallery\photo1974_124591582868632.jpeg);"></div> -->
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\TechExhibition\e2.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\TechExhibition\e3.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\TechExhibition\e4.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\TechExhibition\e5.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\TechExhibition\e6.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\TechExhibition\e7.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\TechExhibition\e8.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\TechExhibition\e9.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\TechExhibition\e10.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\TechExhibition\e11.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\TechExhibition\e12.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\TechExhibition\e13.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\TechExhibition\e14.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\TechExhibition\e15.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\TechExhibition\e16.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\TechExhibition\e17.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\TechExhibition\e18.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div></div></div></div>
    </div>
  </div>
  <!-- accordion item 9 -- end -->
   <div>
    <!-- accordion item 10 -- start -->
    <input class="ac-input" id="ac-10" name="accordion-1" type="checkbox" />
    <label class="ac-label" for="ac-10">Visit to Anathalay<i></i></label>
    <div class="article ac-content">
    <div class="gallery-area  pb-70">
<div class="container">
    <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
    <div class="row">
        
        <div class="col-md-12">
            <h4 class="f-14">Visit to Anathalay</h4>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\VisittoAnathalay\v1.png" 
                                             data-group="67" class=" galleryItem">
                                             
                                              <!-- <div class="photo-gallery-thumb"
                                               style="background-image: url(assets\img\gallery\photo1974_124591582868632.jpeg);"></div> -->
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\VisittoAnathalay\v2.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\VisittoAnathalay\v3.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\VisittoAnathalay\v4.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div></div></div></div>
    </div>
  </div>
  <!-- accordion item 10 -- end -->
   <div>
    <!-- accordion item 11 -- start -->
    <input class="ac-input" id="ac-11" name="accordion-1" type="checkbox" />
    <label class="ac-label" for="ac-11">Yellow Day<i></i></label>
    <div class="article ac-content">
    <div class="gallery-area  pb-70">
<div class="container">
    <!-- <h2>AnnualDay Celebration:------------------</h2><br> -->
    <div class="row">
        
        <div class="col-md-12">
            <h4 class="f-14">Yellow Day</h4>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\YellowDay\y1.png" 
                                             data-group="67" class=" galleryItem">
                                             
                                              <!-- <div class="photo-gallery-thumb"
                                               style="background-image: url(assets\img\gallery\photo1974_124591582868632.jpeg);"></div> -->
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\YellowDay\y2.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\YellowDay\y3.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\YellowDay\y4.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\YellowDay\y5.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\YellowDay\y6.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\YellowDay\y7.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\YellowDay\y8.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div><div class="col-md-3 col-sm-4 col-xs-4 mbgallery">
                                             <img src="assets\img\gallery\YellowDay\y9.png" data-group="67" class="galleryItem"><div class="photo-gallery-thumb" style=""></div>
                                        </div></div></div></div>
    </div>
  </div>
  <!-- accordion item 11 -- end -->

</div>

<!-- end mobile gallery -->


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