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
.mySlides .fade{
    display: contents;
}
</style>
</head>
<body>
<?php include("header.php");?>

<section style="width: 100%; overflow: hidden;"> 
    <div class="section-title">
      <h2 style="color: #000;">  Pre Calendar</h2>
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
                <!-- <div class="numbertext">3 / 3</div> -->
                <img src="assets/calendar/calender-themes/November.png" style="width:100%">
                <div class="text">November</div>
                </div>
                <div class="mySlides fade">
                <!-- <div class="numbertext">3 / 3</div> -->
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
                    title: 'Gandhi Jayanti \nCelebration',
                    
                    // description: '',
                    // allDay: false,
                    // free: true,
                    // color: '#26c57d'
                }, {
                    id: 2,
                    start: '2021-10-02',
                    // end: '2021-10-02T16:00',
                    title: 'Gandhi Jayanti',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 8,
                    start: '2021-10-14',
                    // end: '2021-10-14T11:30',
                    title: 'Dramatic Play \n/ Puppet Show \non Dussehra',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#26c57d'
                }, {
                    id: 9,
                    start: '2021-10-15',
                    // end: '2021-10-15T11:30',
                    title: 'Dussehra \n/ Dasara',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 11,
                    start: '2021-10-19',
                    // end: '2021-10-19T11:30',
                    title: 'Id-E-Milad',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 12,
                    start: '2021-10-21',
                    // end: '2021-10-21T11:30',
                    title: 'Traditional \nWear \nCompetition',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#26c57d'
                }, 
                 {
                    id: 12,
                    start: '2021-10-24',
                    // end: '2021-10-24T11:30',
                    title: 'Diwali \nCraft',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#26c57d'
                }, 
                 {
                    id: 12,
                    start: '2021-10-29',
                    // end: '2021-10-29T11:30',
                    title: 'Halloween \nCelebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#26c57d'
                }, 
                // nov 2021
                {
                    id: 13,
                    start: '2021-11-01',
                    // end: '2021-11-01T11:30',
                    title: 'Diwali Vacation \nBegin',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 14,
                    start: '2021-11-04',
                    // end: '2021-11-04T11:30',
                    title: 'Diwali / \nDeepavali',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 20,
                    start: '2021-11-15',
                    // end: '2021-11-15T11:30',
                    title: 'Children\'s \nDay Celebration \nSchool Reopens',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                , {
                    id: 21,
                    start: '2021-11-17',
                    // end: '2021-11-17T11:30',
                    title: 'Magic Wand/ \nCrown Making \nCompetition',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                , {
                    id: 22,
                    start: '2021-11-19',
                    // end: '2021-11-19T11:30',
                    title: 'Guru Nanak\'s \nBirth \nAnniversary',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }
                , {
                    id: 23,
                    start: '2021-11-22',
                    // end: '2021-11-22T11:30',
                    title: 'Role Play \nCompetition \nTheme: My Favourite \nSuperHero',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 23,
                    start: '2021-11-26',
                    // end: '2021-11-26T11:30',
                    title: 'Cultural Food \nFestival',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 23,
                    start: '2021-11-29',
                    // end: '2021-11-29T11:30',
                    title: 'Tell -A- Tale \nStory Narration by \nTeachers',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 23,
                    start: '2021-11-30',
                    // end: '2021-11-30T11:30',
                    title: 'Pink Day \nCelebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                // december
                , {
                    id: 25,
                    start: '2021-12-02',
                    // end: '2021-12-02T11:30',
                    title: 'Introduction \nto Traffic Rules',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 27,
                    start: '2021-12-07',
                    // end: '2021-12-07T11:30',
                    title: 'Traffic Signal',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 29,
                    start: '2021-12-10',
                    // end: '2021-12-10T11:30',
                    title: 'Rhyme Recitation \nCompetition',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 30,
                    start: '2021-12-15',
                    // end: '2021-12-15T11:30',
                    title: 'Speaking Project: \nMy Favourite \nVehicle',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#26c57d'
                },{
                    id: 32,
                    start: '2021-12-20',
                    // end: '2021-12-20T11:30',
                    title: 'Snow man \nMaking \nCompetition',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#26c57d'
                },{
                    id: 34,
                    start: '2021-12-23',
                    // end: '2021-12-23T11:30',
                    title: 'Christmas \nCelebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#26c57d'
                }, {
                    id: 35,
                    start: '2021-12-24',
                    // end: '2021-12-24T11:30',
                    title: 'Christmas \nVacation Begin',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 37,
                    start: '2021-12-25',
                    // end: '2021-12-25T11:30',
                    title: 'Christmas',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }
                // jan  2022
                , {
                    id: 38,
                    start: '2022-01-03',
                    // end: '2022-01-03T11:30',
                    title: 'School Reopens',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 39,
                    start: '2022-01-07',
                    // end: '2022-01-07T11:30',
                    title: 'My Body Safety \nSession -II Puppet \nShow',
                    // description: '7th Jan : "My Body Safety" Session -II : To make the students aware about their private body parts ; safe and unsafe touches. ',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 40,
                    start: '2022-01-13',
                    // end: '2022-01-13T11:30',
                    title: 'Kite Flying \nCompetition ',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 41,
                    start: '2022-01-14',
                    // end: '2022-01-14T11:30',
                    title: 'Makar Sankranti \nPongal',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 42,
                    start: '2022-01-19',
                    // end: '2022-01-19T11:30',
                    title: 'Dental Check \nUp',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 43,
                    start: '2022-01-25',
                    // end: '2022-01-25T11:30',
                    title: 'Patriotic \nSong Competition',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 44,
                    start: '2022-01-26',
                    // end: '2022-01-26T11:30',
                    title: 'Republic \nDay',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 45,
                    start: '2022-01-31',
                    // end: '2022-01-31T11:30',
                    title: 'Brown Day \nCelebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                // feb 2022
                , {
                    id: 51,
                    start: '2022-02-09',
                    // end: '2022-02-09T11:30',
                    title: 'Best Out Of \nWaste Competition \n(Theme : Space)',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 52,
                    start: '2022-02-14',
                    // end: '2022-02-14T11:30',
                    title: 'Ramp Walk \nCompetition \n(Theme: Seasons)',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2022-02-18',
                    // end: '2022-02-18T11:30',
                    title: 'Shiv Jayanti \nCelebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2022-02-19',
                    // end: '2022-02-19T11:30',
                    title: 'Shiv Jayanti',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 53,
                    start: '2022-02-21',
                    // end: '2022-02-21T11:30',
                    title: 'Grey Day \nCelebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2022-02-23',
                    // end: '2022-02-23T11:30',
                    title: 'Clay Modelling \nof Planets',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2022-02-25',
                    // end: '2022-02-25T11:30',
                    title: 'Camping Fun ',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2022-02-28',
                    // end: '2022-02-28T11:30',
                    title: 'Science Day \nActivity',
                    // description: '',
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
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 53,
                    start: '2022-03-03',
                    // end: '2022-03-03T11:30',
                    title: 'Rainbow Spin \nWheel',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2022-03-04',
                    // end: '2022-03-04T11:30',
                    title: 'Rainbow Colour \nDay ',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2022-03-08',
                    // end: '2022-03-08T11:30',
                    title: 'Women\'s Day \nCelebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                },
                {
                    id: 53,
                    start: '2022-03-11',
                    // end: '2022-03-11T11:30',
                    title: 'Life Cycle of \na Butterfly',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                },
                {
                    id: 53,
                    start: '2022-03-18',
                    // end: '2022-03-18T11:30',
                    title: 'Holi',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                },



                    // april 2021
                    {
                    id: 1,
                    start: '2021-04-02',
                    // end: '2021-04-02T11:30',
                    title: 'Good Friday',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 2,
                    start: '2021-04-12',
                    // end: '2021-04-12T11:30',
                    title: 'Gudi Decoration \nCompetition \n(For Mummas) ',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 3,
                    start: '2021-04-13',
                    // end: '2021-04-13T11:30',
                    title: 'Ugadi / \nGudi Padwa',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 4,
                    start: '2021-04-14',
                    // end: '2021-04-14T11:30',
                    title: 'Ambedkar \nJayanti',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 5,
                    start: '2021-04-15',
                    // end: '2021-04-15T11:30',
                    title: 'Opening Day',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 6,
                    start: '2021-04-16',
                    // end: '2021-04-16T11:30',
                    title: 'Facial \nExpressions',
                    // description: '16th April : Activity : Facial Expressions : Students have to send a video showing any 3 facial expressions',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 7,
                    start: '2021-04-19',
                    // end: '2021-04-19T11:30',
                    title: 'Finger Gym \nActivity : \nPaper Tearing',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 8,
                    start: '2021-04-21',
                    // end: '2021-04-21T11:30',
                    title: 'Ram Navami',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 9,
                    start: '2021-04-23',
                    // end: '2021-04-23T11:30',
                    title: 'How Old Am I?',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 10,
                    start: '2021-04-25',
                    // end: '2021-04-25T11:30',
                    title: 'Mahavir Jayanti',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 11,
                    start: '2021-04-27',
                    // end: '2021-04-27T11:30',
                    title: 'Fun with \nShapes(from TB)',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 12,
                    start: '2021-04-29',
                    // end: '2021-04-29T11:30',
                    title: 'Show and Tell \nMy Favourite \nColour',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 13,
                    start: '2021-04-30',
                    // end: '2021-04-30T11:30',
                    title: 'White Day \nCelebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                // May 2021
                , {
                    id: 53,
                    start: '2021-05-01',
                    // end: '2021-05-01T11:30',
                    title: 'Labour \nDay',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-05-13',
                    // end: '2021-05-13T11:30',
                    title: 'Eid-ul-Fitar',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-05-26',
                    // end: '2021-05-26T11:30',
                    title: 'Budhha \nPurnima',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                // june 2021
                , {
                    id: 53,
                    start: '2021-06-07',
                    // end: '2021-06-07T11:30',
                    title: 'School Reopens',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-08',
                    // end: '2021-06-08T11:30',
                    title: 'Marvelous \nMe Self \nIntroduction',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-09',
                    // end: '2021-06-09T11:30',
                    title: 'School Tour',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-11',
                    // end: '2021-06-11T11:30',
                    title: ' Good Habits',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-14',
                    // end: '2021-06-14T11:30',
                    title: 'World Environment \nDay Plant \na Sapling',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-17',
                    // end: '2021-06-17T11:30',
                    title: 'My Beautiful \nHand Activity: \nHand Print',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-21',
                    // end: '2021-06-21T11:30',
                    title: 'Yoga Day \nCelebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-23',
                    // end: '2021-06-23T11:30',
                    title: 'Purple Day \nCelebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-25',
                    // end: '2021-06-25T11:30',
                    title: 'My 5 Senses',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-26',
                    // end: '2021-06-26T11:30',
                    title: 'Father\'s Day \nCelebration',
                    // description: '26th June: Father\'s Day Celebration : Basketball Competition for Fathers, Newspaper Dance for Father and Child',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-06-29',
                    // end: '2021-06-29T11:30',
                    title: 'All About Me \n(Ref : TB)',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                },
                // JULY 2021
                {
                    id: 53,
                    start: '2021-07-02',
                    // end: '2021-07-02T11:30',
                    title: 'My Fun \nExperiments \nWith Water',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                , 
                {
                    id: 53,
                    start: '2021-07-06',
                    // end: '2021-07-06T11:30',
                    title: 'Friends \nPlant Pot',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-07-09',
                    // end: '2021-07-09T11:30',
                    title: 'Grandparents \nDay Celebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-07-12',
                    // end: '2021-07-12T11:30',
                    title: 'Speaking Project: \nMy Family',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-07-15',
                    // end: '2021-07-15T11:30',
                    title: 'Activity: \nBoat Making',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-07-16',
                    // end: '2021-07-16T11:30',
                    title: 'Water Play',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-07-20',
                    // end: '2021-07-20T11:30',
                    title: 'Palkhi Celebration \nAshadhi Ekadashi',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-07-21',
                    // end: '2021-07-21T11:30',
                    title: 'Bakri Id / Eid \nul-Adha',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 53,
                    start: '2021-07-23',
                    // end: '2021-07-23T11:30',
                    title: 'Guru Purnima \nCelebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-07-26',
                    // end: '2021-07-26T11:30',
                    title: '"My Body Safety" \nSession- I \nPuppet Show',
                    // description: '26th July : "My Body Safety" Session -I : To make the students aware about their private body parts ; safe and unsafe touches.',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-07-29',
                    // end: '2021-07-29T11:30',
                    title: 'Twist and Turn \nOrigami Activity',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                , {
                    id: 53,
                    start: '2021-07-30',
                    // end: '2021-07-30T11:30',
                    title: 'Blue Day \nCelebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                // AUGUST 2021
                , {
                    id: 53,
                    start: '2021-08-02',
                    // end: '2021-08-02T11:30',
                    title: 'Friendship Day \nCelebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-08-13',
                    // end: '2021-08-13T11:30',
                    title: 'Proud To Be An \nIndian RolePlay: \nFreedom Fighters',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                , {
                    id: 53,
                    start: '2021-08-15',
                    // end: '2021-08-15T11:30',
                    title: 'Independence \nDay',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }
                , {
                    id: 53,
                    start: '2021-08-16',
                    // end: '2021-08-16T11:30',
                    title: 'Parsi New Year',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }
                , {
                    id: 53,
                    start: '2021-08-19',
                    // end: '2021-08-19T11:30',
                    title: 'Muharram',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }
                , {
                    id: 53,
                    start: '2021-08-20',
                    // end: '2021-08-20T11:30',
                    title: 'Onam \nCelebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                , {
                    id: 53,
                    start: '2021-08-22',
                    // end: '2021-08-22T11:30',
                    title: 'Raksha Bandhan',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                } , {
                    id: 53,
                    start: '2021-08-23',
                    // end: '2021-08-23T11:30',
                    title: 'Rakshabandhan \nCelebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                } , {
                    id: 53,
                    start: '2021-08-25',
                    // end: '2021-08-25T11:30',
                    title: 'Hat/Cap Making \nCompetition \n(Community \nHelpers)',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                } , {
                    id: 53,
                    start: '2021-08-27',
                    // end: '2021-08-27T11:30',
                    title: 'National Sports \nDay Celebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-08-29',
                    // end: '2021-08-29T11:30',
                    title: 'National Sports \nDay	',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                , {
                    id: 53,
                    start: '2021-08-30',
                    // end: '2021-08-30T11:30',
                    title: 'Janmashtami \nCelebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }
                // SEPTEMBER 2021
                , {
                    id: 53,
                    start: '2021-09-03',
                    // end: '2021-09-03T11:30',
                    title: 'Teacher\'s Day \nCelebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-09-06',
                    // end: '2021-09-06T11:30',
                    title: 'Carrot Finger \nPrint',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-09-09',
                    // end: '2021-09-09T11:30',
                    title: 'My Family Ganesha \nIdol Making by \nstudent and Parents',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-09-10',
                    // end: '2021-09-10T11:30',
                    title: 'Vinayaka Chaturthi',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 53,
                    start: '2021-09-14',
                    // end: '2021-09-14T11:30',
                    title: 'Hindi Diwas \nCelebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-09-17',
                    // end: '2021-09-17T11:30',
                    title: 'Where Do I \nLive?',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-09-19',
                    // end: '2021-09-19T11:30',
                    title: 'Anant Chaturdashi',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#d00f0f'
                }, {
                    id: 53,
                    start: '2021-09-21',
                    // end: '2021-09-21T11:30',
                    title: 'Field Trip: \nFarm',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-09-23',
                    // end: '2021-09-23T11:30',
                    title: 'Activity: \nGermination',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-09-27',
                    // end: '2021-09-27T11:30',
                    title: 'World Tourism \nDay Celebration ',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-09-29',
                    // end: '2021-09-29T11:30',
                    title: 'Yellow Day \nCelebration',
                    // description: '',
                    // allDay: false,
                    // free: false,
                    // color: '#37bbe4'
                }, {
                    id: 53,
                    start: '2021-09-30',
                    // end: '2021-09-30T11:30',
                    title: 'Harvest Craft \nCompetition',
                    // description: '',
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