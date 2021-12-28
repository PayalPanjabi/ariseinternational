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
<link rel="stylesheet" href="assets/css/slider-cal.css">
<title>ARISE International</title>
<link rel="icon" type="image/png" href="assets/img/logo_white.jpg">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">


<link rel="stylesheet" href="assets/calendar/fonts/icomoon/style.css">

<link href='assets/calendar/fullcalendar/packages/core/main.css' rel='stylesheet' />
<link href='assets/calendar/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/calendar/css/bootstrap.min.css">

<!-- Style -->
<link rel="stylesheet" href="assets/calendar/css/style1.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style>
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -60px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
</style>
</head>
<body>
<?php include("header.php");?>

<section style="width: 100%; overflow: hidden;"> 
    <div class="section-title">
      <h2 style="color: #000;">  Primary Calendar</h2>
    </div>
  <br>
    <!-- <h4 style="text-align:center;color: blue;">Primary Calendar</h4> -->
    <div class="row">
        <div class="col-lg-8 col-sm-12" style="margin-top: -57px;">
            <!-- <div class="content"> -->
                <div id='calendar'></div>
            <!-- </div> -->
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="card" style="margin-top: -57px;">
            <h4 style="text-align:center;">Themes</h4>
            
            <div class="slideshow-container">

                <!-- no theme -->   
                <div class="mySlides fade">
                <img src="assets/calendar/calender-themes/January.png" style="width:100%">
                <div class="text">January</div>
                </div>
                <div class="mySlides fade">
                <img src="assets/calendar/calender-themes/February.png" style="width:100%">
                <div class="text">February</div>
                </div>
                <div class="mySlides fade">
                <img src="assets/calendar/calender-themes/March.png" style="width:100%">
                <div class="text">March</div>
                </div>

                <div class="mySlides fade">
                <img src="assets/calendar/calender-themes/April.png" style="width:100%">
                <div class="text">April</div>
                </div>

                <!-- no theme -->
                <div class="mySlides fade">
                <img src="assets/calendar/calender-themes/May.png" style="width:100%">
                <div class="text">May</div>
                </div>
               <div class="mySlides fade">
                <img src="assets/calendar/calender-themes/June.png" style="width:100%">
                <div class="text">June</div>
                </div>
                <div class="mySlides fade">
                <img src="assets/calendar/calender-themes/July.png" style="width:100%">
                <div class="text">July</div>
                </div>
                <div class="mySlides fade">
                <img src="assets/calendar/calender-themes/August.png" style="width:100%">
                <div class="text">August</div>
                </div>
                <div class="mySlides fade">
                <img src="assets/calendar/calender-themes/September.png" style="width:100%">
                <div class="text">September</div>
                </div>
                <div class="mySlides fade">
                <img src="assets/calendar/calender-themes/October.png" style="width:100%">
                <div class="text">October</div>
                </div>
                <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="assets/calendar/calender-themes/November.png" style="width:100%">
                <div class="text">November</div>
                </div>
                <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="assets/calendar/calender-themes/December.png" style="width:100%">
                <div class="text">December</div>
                </div>

                <a class="prev1" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next1" onclick="plusSlides(1)">&#10095;</a>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                <span class="dot" onclick="currentSlide(4)"></span> 
                <span class="dot" onclick="currentSlide(5)"></span> 
                <span class="dot" onclick="currentSlide(6)"></span> 
                <span class="dot" onclick="currentSlide(7)"></span> 
                <span class="dot" onclick="currentSlide(8)"></span> 
                <span class="dot" onclick="currentSlide(9)"></span> 
                <span class="dot" onclick="currentSlide(10)"></span> 
                <span class="dot" onclick="currentSlide(11)"></span> 
                <span class="dot" onclick="currentSlide(12)"></span> 
            </div>

            <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
            }
            </script>

            </div>
        </div>
    </div>
</section>
    <br>

   <script src="assets/calendar/js/jquery-3.3.1.min.js"></script>
    <script src="assets/calendar/js/popper.min.js"></script>
    <script src="assets/calendar/js/bootstrap.min.js"></script>

    <script src='assets/calendar/fullcalendar/packages/core/main.js'></script>
    <script src='assets/calendar/fullcalendar/packages/interaction/main.js'></script>
    <script src='assets/calendar/fullcalendar/packages/daygrid/main.js'></script>

    

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'interaction', 'dayGrid' ],
    //   defaultDate: '2020-02-12',
      editable: false,
      eventLimit: true, // allow "more" link when too many events
   
      events: [
                {
                    id: 1,
                    start: '2021-10-01',
                    // end: '2021-10-01T13:30',
                    title: 'Mahatma Gandhi \nJayanti Celebration',
                    // //description: '',
                    // allDay: false,
                    // free: true,
                    // color: '#26c57d'
                }, {
                    id: 2,
                    start: '2021-10-02',
                    // end: '2021-10-02T16:00',
                    title: 'Mahatma Gandhi \nJayanti',
                    // //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 3,
                    start: '2021-10-04',
                    // end: '2021-10-04T22:00',
                    title: 'Philately Week \nBegins World \nAnimal Welfare Day \nSA',
                    // //description: '',
                    // allDay: false,
                    // free: true,
                    // color: '#37bbe4'
                }, {
                    id: 4,
                    start: '2021-10-07',
                    // end: '2021-10-07T11:30',
                    title: 'World Animal Day',
                    // //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 5,
                    start: '2021-10-08',
                    // end: '2021-10-08T11:30',
                    title: 'Indian Air Force \nDay',
                    // //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 6,
                    start: '2021-10-09',
                    // end: '2021-10-09T11:30',
                    title: 'National Post Day \nSA',
                    // //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#26c57d'
                }, {
                    id: 7,
                    start: '2021-10-11',
                    //end: '2021-10-11T11:30',
                    title: 'International Girl \nChild Day',
                    // //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 8,
                    start: '2021-10-14',
                    // end: '2021-10-14T11:30',
                    title: 'Dussehra SA',
                    // //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#26c57d'
                }, {
                    id: 9,
                    start: '2021-10-15',
                    // end: '2021-10-15T11:30',
                    title: 'Dussehra / Dasara \nGlobal Hand \nWashing Day',
                    // //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 10,
                    start: '2021-10-16',
                    // end: '2021-10-16T11:30',
                    title: 'World Food Day \nSA',
                    // //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 11,
                    start: '2021-10-19',
                    // end: '2021-10-19T11:30',
                    title: 'Id-E-Milad',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 12,
                    start: '2021-10-31',
                    // end: '2021-10-31T11:30',
                    title: 'Sardar Vallabh \nbhai BA	\nNational Unity Day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#26c57d'
                }, {
                    id: 13,
                    start: '2021-11-01',
                    // end: '2021-11-01T11:30',
                    title: 'Diwali Vacation \nBegin',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 14,
                    start: '2021-11-04',
                    // end: '2021-11-04T11:30',
                    title: 'Diwali / Deepavali',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 15,
                    start: '2021-11-05',
                    // end: '2021-11-05T11:30',
                    title: 'World Tsunami \nAwareness Day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#26c57d'
                }, {
                    id: 16,
                    start: '2021-11-07',
                    // end: '2021-11-07T11:30',
                    title: 'Dr. C V Raman BA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                , {
                    id: 17,
                    start: '2021-11-08',
                    // end: '2021-11-08T11:30',
                    title: 'World Radiology \nDay Dr. C V \nRaman Birth \nAnniversary SA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#26c57d'
                }
                , {
                    id: 18,
                    start: '2021-11-11',
                    // end: '2021-11-11T11:30',
                    title: 'National Education \nDay',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                , {
                    id: 19,
                    start: '2021-11-14',
                    // end: '2021-11-14T11:30',
                    title: 'Children\'s Day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#26c57d'
                }
                , {
                    id: 20,
                    start: '2021-11-15',
                    // end: '2021-11-15T11:30',
                    title: 'Children\'s Day \nCelebration \nSchool Reopens',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                , {
                    id: 21,
                    start: '2021-11-19',
                    // end: '2021-11-19T11:30',
                    title: '"Guru Nanak\'s \nBirth Anniversary"',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }
                , {
                    id: 22,
                    start: '2021-11-21',
                    // end: '2021-11-21T11:30',
                    title: 'World Television \nDay',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#26c57d'
                }
                , {
                    id: 23,
                    start: '2021-11-26',
                    // end: '2021-11-26T11:30',
                    title: 'Constitution Day of India',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                // december
                , {
                    id: 25,
                    start: '2021-12-02',
                    // end: '2021-12-02T11:30',
                    title: 'World Computer \nLiteracy Day \nNational Pollution \nControl Day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 26,
                    start: '2021-12-04',
                    // end: '2021-12-04T11:30',
                    title: 'Indian Navy \nDay',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#26c57d'
                }, {
                    id: 27,
                    start: '2021-12-07',
                    // end: '2021-12-07T11:30',
                    title: 'Flag Day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 28,
                    start: '2021-12-09',
                    // end: '2021-12-09T11:30',
                    title: 'International Day \nagainst corruption.',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#26c57d'
                }, {
                    id: 29,
                    start: '2021-12-10',
                    // end: '2021-12-10T11:30',
                    title: 'Human Rights \nDay',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 30,
                    start: '2021-12-13',
                    // end: '2021-12-13T11:30',
                    title: 'Joy of Giving \nWeek',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#26c57d'
                }, {
                    id: 31,
                    start: '2021-12-14',
                    // end: '2021-12-14T11:30',
                    title: 'World Energy \nConservation Day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 32,
                    start: '2021-12-16',
                    // end: '2021-12-16T11:30',
                    title: 'Vijay Diwas',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#26c57d'
                }, {
                    id: 33,
                    start: '2021-12-22',
                    // end: '2021-12-22T11:30',
                    title: 'National \nMathematics day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 34,
                    start: '2021-12-23',
                    // end: '2021-12-23T11:30',
                    title: 'Christmas \nCelebration \nKisan Diwas',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#26c57d'
                }, {
                    id: 35,
                    start: '2021-12-24',
                    // end: '2021-12-24T11:30',
                    title: 'Christmas \nVacation Begin',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 36,
                    start: '2021-11-26',
                    // end: '2021-11-26T11:30',
                    title: 'Constitution \nDay of India',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#26c57d'
                }, {
                    id: 37,
                    start: '2021-12-25',
                    // end: '2021-12-25T11:30',
                    title: 'Christmas',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }
                // jan  2022
                , {
                    id: 38,
                    start: '2022-01-02',
                    // end: '2022-01-02T11:30',
                    title: 'Savitribai Phule \nJayanti SA	',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 39,
                    start: '2022-01-09',
                    // end: '2022-01-09T11:30',
                    title: 'Kite Festival',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 40,
                    start: '2022-01-10',
                    // end: '2022-01-10T11:30',
                    title: 'World Hindi Day \nWorld Laughter \nDay',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 41,
                    start: '2022-01-11',
                    // end: '2022-01-11T11:30',
                    title: 'Rajmata Jijau \nJayanti',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                , {
                    id: 42,
                    start: '2022-01-12',
                    // end: '2022-01-12T11:30',
                    title: 'National Youth \nDay Swami \nVivekanand \nJayanti',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 43,
                    start: '2022-01-14',
                    // end: '2022-01-14T11:30',
                    title: 'Makar Sankranti \nPongal',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 44,
                    start: '2022-01-15',
                    // end: '2022-01-15T11:30',
                    title: 'Indian Army Day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 45,
                    start: '2022-01-17',
                    // end: '2022-01-17T11:30',
                    title: 'National \nHandwriting \nDay',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 46,
                    start: '2022-01-23',
                    // end: '2022-01-23T11:30',
                    title: 'Subhash Chandra \nBose BA	',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 47,
                    start: '2022-01-24',
                    // end: '2022-01-24T11:30',
                    title: 'Subhash Chandra \nBose Birth \nAnniversary \nSA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 48,
                    start: '2022-01-25',
                    // end: '2022-01-25T11:30',
                    title: 'Patriotic Song \nCompetition \nNational Voter\'s \nDay',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 49,
                    start: '2022-01-26',
                    // end: '2022-01-26T11:30',
                    title: 'Republic Day ',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 49,
                    start: '2022-01-30',
                    // end: '2022-01-30T11:30',
                    title: 'Martyrs Day	 ',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                // feb 2022
                , {
                    id: 50,
                    start: '2022-02-2',
                    // end: '2022-02-2T11:30',
                    title: 'World Wetlands Day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 51,
                    start: '2022-02-09',
                    // end: '2022-02-09T11:30',
                    title: 'Best Out Of Waste \nCompetition \n(Theme : Space)',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 52,
                    start: '2022-02-12',
                    // end: '2022-02-12T11:30',
                    title: 'Darwin Day \nAbraham Lincoln\'s \nBirthday',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2022-02-13',
                    // end: '2022-02-13T11:30',
                    title: 'Sarojini Naidu\'s \nBirth Anniversay	',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2022-02-18',
                    // end: '2022-02-18T11:30',
                    title: 'Shiv Jayanti \nCelebration',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2022-02-19',
                    // end: '2022-02-19T11:30',
                    title: 'Shiv Jayanti',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 53,
                    start: '2022-02-21',
                    // end: '2022-02-21T11:30',
                    title: 'International \nMother Language \nDay',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2022-02-22',
                    // end: '2022-02-22T11:30',
                    title: 'World Scout Day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2022-02-27',
                    // end: '2022-02-27T11:30',
                    title: 'Marathi Rajbhasha \nDiwas World \nScout Day	',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2022-02-28',
                    // end: '2022-02-28T11:30',
                    title: 'National Science \nDay Marathi \nRajbhasha Diwas \nSA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                // march 2022
                , {
                    id: 53,
                    start: '2022-03-01',
                    // end: '2022-03-01T11:30',
                    title: 'Maha Shivratri',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 53,
                    start: '2022-03-08',
                    // end: '2022-03-08T11:30',
                    title: 'International \nWomen\'s Day \nSA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2022-03-15',
                    // end: '2022-03-15T11:30',
                    title: 'World Consumer \nRights Day \nSA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2022-03-18',
                    // end: '2022-03-18T11:30',
                    title: 'Holi',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }
                // april 2021
                , {
                    id: 53,
                    start: '2021-04-02',
                    // end: '2021-04-02T11:30',
                    title: 'Good Friday',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 53,
                    start: '2021-04-04',
                    // end: '2021-04-04T11:30',
                    title: 'Easter Sunday',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 53,
                    start: '2021-04-05',
                    // end: '2021-04-05T11:30',
                    title: 'School Reopens',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-04-07',
                    // end: '2021-04-07T11:30',
                    title: 'World Health \nDay Seminar by \nNutritionist',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-04-11',
                    // end: '2021-04-11T11:30',
                    title: 'Mahatma Phule \nJayanti',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-04-12',
                    // end: '2021-04-12T11:30',
                    title: 'Gudi Padwa SA \nMahatma Phule \nJayanti SA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-04-13',
                    // end: '2021-04-13T11:30',
                    title: 'Ugadi/Gudi \nPadwa',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 53,
                    start: '2021-04-14',
                    // end: '2021-04-14T11:30',
                    title: 'Ambedkar \nJayanti',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 53,
                    start: '2021-04-15',
                    // end: '2021-04-15T11:30',
                    title: 'Ambedkar Jayanti \nSA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-04-18',
                    // end: '2021-04-18T11:30',
                    title: 'World Heritage \nDay',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 53,
                    start: '2021-04-19',
                    // end: '2021-04-19T11:30',
                    title: 'World Literature \nWeek World \nHeritage Day \nSA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-04-20',
                    // end: '2021-04-20T11:30',
                    title: 'Ram Navami \nSA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-04-21',
                    // end: '2021-04-21T11:30',
                    title: 'Ram Navami',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 53,
                    start: '2021-04-23',
                    // end: '2021-04-23T11:30',
                    title: 'Earth Day \nShakespeare\'s \nBirth Anniversary',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-04-25',
                    // end: '2021-04-25T11:30',
                    title: 'Mahavir Jayanti',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }
                // May 2021
                , {
                    id: 53,
                    start: '2021-05-01',
                    // end: '2021-05-01T11:30',
                    title: 'Labour Day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-05-13',
                    // end: '2021-05-13T11:30',
                    title: 'Eid-ul-Fitar',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-05-26',
                    // end: '2021-05-26T11:30',
                    title: 'Budhha Purnima',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                // june 2021
                , {
                    id: 53,
                    start: '2021-06-03',
                    // end: '2021-06-03T11:30',
                    title: 'World Bicycle \nDay Election Results \nDeclared',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-05',
                    // end: '2021-06-05T11:30',
                    title: 'World Environment \nDay Investiture \nCeremony',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-07',
                    // end: '2021-06-07T11:30',
                    title: 'School Reopens',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-08',
                    // end: '2021-06-08T11:30',
                    title: 'World Ocean \nDay SA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-10',
                    // end: '2021-06-10T11:30',
                    title: 'World Eye \nDonation Day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-12',
                    // end: '2021-06-12T11:30',
                    title: 'World Day \nagainst Child \nLabour SA',
                    //description: '',
                //     allDay: false,
                //     free: false,
                //     color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-19',
                    // end: '2021-06-19T11:30',
                    title: 'Father\'s Day \nCelebration \nSports Event',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-20',
                    // end: '2021-06-20T11:30',
                    title: 'Father\'s Day	',
                    // description: 'Note:26th June: Father\'s Day Celebration : Cricket match competition for fathers',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 53,
                    start: '2021-06-21',
                    // end: '2021-06-21T11:30',
                    title: 'International \nYoga Day \nStudent Council \nElection Begins',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-22',
                    // end: '2021-06-22T11:30',
                    title: 'Nominations',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-23',
                    // end: '2021-06-23T11:30',
                    title: 'Short listing \nof nominees',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-24',
                    // end: '2021-06-24T11:30',
                    title: 'Canvassing',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-25',
                    // end: '2021-06-25T11:30',
                    title: 'Canvassing',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-26',
                    // end: '2021-06-26T11:30',
                    title: 'Ch. Shahu \nMaharaj Jayanti',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                // JULY 2021
                , {
                    id: 53,
                    start: '2021-07-01',
                    // end: '2021-07-01T11:30',
                    title: 'World Doctor\'s \nDay Election \nresults declared',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-07-03',
                    // end: '2021-07-03T11:30',
                    title: 'Investiture \nCeremony',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-07-13',
                    // end: '2021-07-13T11:30',
                    title: 'World Population \nDay',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-07-17',
                    // end: '2021-07-17T11:30',
                    title: 'International \nJustice Day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-07-18',
                    // end: '2021-07-18T11:30',
                    title: 'International \nNelson Mandela \nDay',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 53,
                    start: '2021-07-19',
                    // end: '2021-07-19T11:30',
                    title: 'International \nNelson Mandela \nDay SA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-07-20',
                    // end: '2021-07-20T11:30',
                    title: 'Palkhi Cel. \nAshadhi Ekadashi',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 53,
                    start: '2021-07-21',
                    // end: '2021-07-21T11:30',
                    title: 'Bakri Id / \nEid ul-Adha',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 53,
                    start: '2021-07-23',
                    // end: '2021-07-23T11:30',
                    title: 'Guru Purnima \nCel. SA \nLokmanya Tilak \nJayanti',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-07-26',
                    // end: '2021-07-26T11:30',
                    title: 'Kargil Vijay \nDiwas SA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-07-29',
                    // end: '2021-07-29T11:30',
                    title: 'World Tiger \nDay SA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                // AUGUST 2021
                , {
                    id: 53,
                    start: '2021-08-01',
                    // end: '2021-08-01T11:30',
                    title: 'Friendship Day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }
                , {
                    id: 53,
                    start: '2021-08-06',
                    // end: '2021-08-06T11:30',
                    title: 'Hiroshima Day \nSA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                , {
                    id: 53,
                    start: '2021-08-07',
                    // end: '2021-08-07T11:30',
                    title: 'National \nHandloom Day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                , {
                    id: 53,
                    start: '2021-08-09',
                    // end: '2021-08-09T11:30',
                    title: 'World Adivasi \nDay, Quit India \nDay, Nagasaki Day \nSA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                , {
                    id: 53,
                    start: '2021-08-12',
                    // end: '2021-08-12T11:30',
                    title: 'International \nYouth Day, SA \nWorld Elephant \nDay',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                , {
                    id: 53,
                    start: '2021-08-13',
                    // end: '2021-08-13T11:30',
                    title: 'World Organ \nDonation Day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                , {
                    id: 53,
                    start: '2021-08-15',
                    // end: '2021-08-15T11:30',
                    title: 'Independence Day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }
                , {
                    id: 53,
                    start: '2021-08-16',
                    // end: '2021-08-16T11:30',
                    title: 'Parsi New Year \nSanskrit Day SA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }
                , {
                    id: 53,
                    start: '2021-08-19',
                    // end: '2021-08-19T11:30',
                    title: '19 Muharram \nWorld Photography \nDay, World \nHumanitarian Day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }
                , {
                    id: 53,
                    start: '2021-08-20',
                    // end: '2021-08-20T11:30',
                    title: 'Onam Celebration',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                , {
                    id: 53,
                    start: '2021-08-21',
                    // end: '2021-08-21T11:30',
                    title: 'Onam SA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                , {
                    id: 53,
                    start: '2021-08-22',
                    // end: '2021-08-22T11:30',
                    title: 'Raksha Bandhan',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                } , {
                    id: 53,
                    start: '2021-08-23',
                    // end: '2021-08-23T11:30',
                    title: 'Rakshabandhan \nCelebration',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                } , {
                    id: 53,
                    start: '2021-08-29',
                    // end: '2021-08-29T11:30',
                    title: 'National Sports \nDay,Major \nDhyanchand BA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                } , {
                    id: 53,
                    start: '2021-08-30',
                    // end: '2021-08-30T11:30',
                    title: 'Janmashtami \nCelebration SA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                // SEPTEMBER 2021
                , {
                    id: 53,
                    start: '2021-09-01',
                    // end: '2021-09-01T11:30',
                    title: 'National \nNutrition Week (1-7)',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-09-04',
                    // end: '2021-09-04T11:30',
                    title: 'Teacher\'s Day \nCelebration',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-09-05',
                    // end: '2021-09-05T11:30',
                    title: 'Teacher\'s Day \nInternational \nDay of Charity	',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 53,
                    start: '2021-09-07',
                    // end: '2021-09-07T11:30',
                    title: 'Hindi Saptah \nbegins',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-09-08',
                    // end: '2021-09-08T11:30',
                    title: 'International \nLiteracy Day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-09-10',
                    // end: '2021-09-10T11:30',
                    title: 'Vinayaka Chaturthi',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 53,
                    start: '2021-09-14',
                    // end: '2021-09-14T11:30',
                    title: 'Hindi Diwas \nWorld First \nAid Day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-09-15',
                    // end: '2021-09-15T11:30',
                    title: '15 Engineer\'s Day \nDr. Vishveshraiya \nB A Int. Day of \nDemocracy',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-09-16',
                    // end: '2021-09-16T11:30',
                    title: 'World Ozone Day',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-09-17',
                    // end: '2021-09-17T11:30',
                    title: 'Marathwada \nMukti Din SA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-09-19',
                    // end: '2021-09-19T11:30',
                    title: 'Anant Chaturdashi',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 53,
                    start: '2021-09-21',
                    // end: '2021-09-21T11:30',
                    title: 'World Day of \nPeace',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-09-25',
                    // end: '2021-09-25T11:30',
                    title: 'World Pharmacy \nDay SA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-09-27',
                    // end: '2021-09-27T11:30',
                    title: 'World Tourism \nDay Celebration ',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-09-28',
                    // end: '2021-09-28T11:30',
                    title: 'Bhagat Singh \nBA',
                    //description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                ]
    });


    calendar.render();
  });

    </script>

    <script src="assets/calendar/js/main.js"></script>

    <?php include("footer.php");?>

<div class="go-top">
<i class='bx bx-up-arrow-alt'></i>
</div>



</body>
</html>