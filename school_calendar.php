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

<style>
 *, *:before, *:after {
-moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
}

/* body {
 overflow: hidden;
 font-family: 'HelveticaNeue-UltraLight', 'Helvetica Neue UltraLight', 'Helvetica Neue', Arial, Helvetica, sans-serif;
 font-weight: 100;
 color: rgba(255, 255, 255, 1);
 margin: 0;
 padding: 0;
 background: #4A4A4A;
 -webkit-touch-callout: none;
 -webkit-user-select: none;
 -khtml-user-select: none;
 -moz-user-select: none;
 -ms-user-select: none;
 user-select: none;
} */

/* #calendar {
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  width: 420px;
  margin: 0 auto;
  margin-left: 221px;
  height: 570px;
  overflow: hidden;
} */



.header h1 {
  margin: 0;
  padding: 0;
  color: white;
  font-size: 20px;
  line-height: 50px;
  font-weight: 100;
  letter-spacing: 1px;
}

.left, .right {
  position: absolute;
  width: 0px;
  height: 0px;
  border-style: solid;
  top: 50%;
  margin-top: -7.5px;
  cursor: pointer;
}

.left {
  border-width: 7.5px 10px 7.5px 0;
  border-color: transparent rgb(248 239 248) transparent transparent;
  left: 20px;
}

.right {
  border-width: 7.5px 0 7.5px 10px;
  border-color: #f0f0f000 transparent transparent rgb(255 250 255);
  right: 20px;
}

.month {
  /*overflow: hidden;*/
  opacity: 0;
}

.month.new {
  -webkit-animation: fadeIn 1s ease-out;
  opacity: 1;
}

.month.in.next {
  -webkit-animation: moveFromTopFadeMonth .4s ease-out;
  -moz-animation: moveFromTopFadeMonth .4s ease-out;
  animation: moveFromTopFadeMonth .4s ease-out;
  opacity: 1;
}

.month.out.next {
  -webkit-animation: moveToTopFadeMonth .4s ease-in;
  -moz-animation: moveToTopFadeMonth .4s ease-in;
  animation: moveToTopFadeMonth .4s ease-in;
  opacity: 1;
}

.month.in.prev {
  -webkit-animation: moveFromBottomFadeMonth .4s ease-out;
  -moz-animation: moveFromBottomFadeMonth .4s ease-out;
  animation: moveFromBottomFadeMonth .4s ease-out;
  opacity: 1;
}

.month.out.prev {
  -webkit-animation: moveToBottomFadeMonth .4s ease-in;
  -moz-animation: moveToBottomFadeMonth .4s ease-in;
  animation: moveToBottomFadeMonth .4s ease-in;
  opacity: 1;
}





.day.other {
 color: rgb(39 18 18 / 30%);
}

.day.today {
  color: rgba(156, 202, 235, 1);
}

.day-name {
  font-size: 9px;
  text-transform: uppercase;
  margin-bottom: 5px;
  color: rgb(21 1 1 / 50%);
  letter-spacing: .7px;
}

.day-number {
  font-size: 24px;
  letter-spacing: 1.5px;
}


.day .day-events {
  list-style: none;
  margin-top: 3px;
  text-align: center;
  height: 12px;
  line-height: 6px;
  overflow: hidden;
}

.day .day-events span {
  vertical-align: top;
  display: inline-block;
  padding: 0;
  margin: 0;
  width: 5px;
  height: 5px;
  line-height: 5px;
  margin: 0 1px;
}

.blue { background: rgba(156, 202, 235, 1); }
.orange { background: rgba(247, 167, 0, 1); }
.green { background: rgba(153, 198, 109, 1); }
.yellow { background: rgba(249, 233, 0, 1); }


.details.in {
  -webkit-animation: moveFromTopFade .5s ease both;
  -moz-animation: moveFromTopFade .5s ease both;
  animation: moveFromTopFade .5s ease both;
}

.details.out {
  -webkit-animation: moveToTopFade .5s ease both;
  -moz-animation: moveToTopFade .5s ease both;
  animation: moveToTopFade .5s ease both;
}

.arrow {
  position: absolute;
  top: -5px;
  left: 50%;
  margin-left: -2px;
  width: 0px;
  height: 0px;
  border-style: solid;
  border-width: 0 5px 5px 5px;
  border-color: transparent transparent rgba(164, 164, 164, 1) transparent;
  transition: all 0.7s ease;
}

.events {
  height: 75px;
  padding: 7px 0;
  overflow-y: auto;
  overflow-x: hidden;
}

.events.in {
  -webkit-animation: fadeIn .3s ease both;
  -moz-animation: fadeIn .3s ease both;
  animation: fadeIn .3s ease both;
}

.events.in {
  -webkit-animation-delay: .3s;
  -moz-animation-delay: .3s;
  animation-delay: .3s;
}

.details.out .events {
  -webkit-animation: fadeOutShrink .4s ease both;
  -moz-animation: fadeOutShink .4s ease both;
  animation: fadeOutShink .4s ease both;
}

.events.out {
  -webkit-animation: fadeOut .3s ease both;
  -moz-animation: fadeOut .3s ease both;
  animation: fadeOut .3s ease both;
}

.event {
  font-size: 16px;
  line-height: 22px;
  letter-spacing: .5px;
  padding: 2px 16px;
  vertical-align: top;
}

.event.empty {
  color: #1d1b1b;
}

.event-category {
  height: 10px;
  width: 10px;
  display: inline-block;
  margin: 6px 0 0;
  vertical-align: top;
}

.event span {
  display: inline-block;
  padding: 0 0 0 7px;
}



.entry {
  position: relative;
  padding: 0 0 0 25px;
  font-size: 13px;
  color: white;
  display: inline-block;
  line-height: 30px;
  background: transparent;
}

.entry:after {
  position: absolute;
  content: '';
  height: 5px;
  width: 5px;
  top: 12px;
  left: 14px;
}

.entry.blue:after { background: rgba(156, 202, 235, 1); }
.entry.orange:after { background: rgba(247, 167, 0, 1); }
.entry.green:after { background: rgba(153, 198, 109, 1); }
.entry.yellow:after { background: rgba(249, 233, 0, 1); }

/* Animations are cool!  */
@-webkit-keyframes moveFromTopFade {
  from { opacity: .3; height:0px; margin-top:0px; -webkit-transform: translateY(-100%); }
}
@-moz-keyframes moveFromTopFade {
  from { height:0px; margin-top:0px; -moz-transform: translateY(-100%); }
}
@keyframes moveFromTopFade {
  from { height:0px; margin-top:0px; transform: translateY(-100%); }
}

@-webkit-keyframes moveToTopFade {
  to { opacity: .3; height:0px; margin-top:0px; opacity: 0.3; -webkit-transform: translateY(-100%); }
}
@-moz-keyframes moveToTopFade {
  to { height:0px; -moz-transform: translateY(-100%); }
}
@keyframes moveToTopFade {
  to { height:0px; transform: translateY(-100%); }
}

@-webkit-keyframes moveToTopFadeMonth {
  to { opacity: 0; -webkit-transform: translateY(-30%) scale(.95); }
}
@-moz-keyframes moveToTopFadeMonth {
  to { opacity: 0; -moz-transform: translateY(-30%); }
}
@keyframes moveToTopFadeMonth {
  to { opacity: 0; -moz-transform: translateY(-30%); }
}

@-webkit-keyframes moveFromTopFadeMonth {
  from { opacity: 0; -webkit-transform: translateY(30%) scale(.95); }
}
@-moz-keyframes moveFromTopFadeMonth {
  from { opacity: 0; -moz-transform: translateY(30%); }
}
@keyframes moveFromTopFadeMonth {
  from { opacity: 0; -moz-transform: translateY(30%); }
}

@-webkit-keyframes moveToBottomFadeMonth {
  to { opacity: 0; -webkit-transform: translateY(30%) scale(.95); }
}
@-moz-keyframes moveToBottomFadeMonth {
  to { opacity: 0; -webkit-transform: translateY(30%); }
}
@keyframes moveToBottomFadeMonth {
  to { opacity: 0; -webkit-transform: translateY(30%); }
}

@-webkit-keyframes moveFromBottomFadeMonth {
  from { opacity: 0; -webkit-transform: translateY(-30%) scale(.95); }
}
@-moz-keyframes moveFromBottomFadeMonth {
  from { opacity: 0; -webkit-transform: translateY(-30%); }
}
@keyframes moveFromBottomFadeMonth {
  from { opacity: 0; -webkit-transform: translateY(-30%); }
}

@-webkit-keyframes fadeIn  {
  from { opacity: 0; }
}
@-moz-keyframes fadeIn  {
  from { opacity: 0; }
}
@keyframes fadeIn  {
  from { opacity: 0; }
}

@-webkit-keyframes fadeOut  {
  to { opacity: 0; }
}
@-moz-keyframes fadeOut  {
  to { opacity: 0; }
}
@keyframes fadeOut  {
  to { opacity: 0; }
}

@-webkit-keyframes fadeOutShink  {
  to { opacity: 0; padding: 0px; height: 0px; }
}
@-moz-keyframes fadeOutShink  {
  to { opacity: 0; padding: 0px; height: 0px; }
}
@keyframes fadeOutShink  {
  to { opacity: 0; padding: 0px; height: 0px; }
}
</style>

</head>
<body>
<?php include("header.php");?>


<!-- <section class="blog-area pt-80 pb-70 banner-img">
<div class="container">
<div class="section-title"><br>
<span> School Calendar</span>
<h2>Academic Year Calender 2019-20</h2>
</div>
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="single-blog-item">
<div class="blog-image">
<a href="#">
<img src="assets/img/child-img/a28.JPG" alt="image">
</a>
</div>
<div class="blog-content">

<h3>For Primary : &nbsp;</h3>

<div class="blog-btn">
<a class="default-btn" target="_blank" href="http://cdata.tezkids.com.s3.amazonaws.com/arise/u/udb/1a/d5/be/0d/2/arise_diary_final_2019-20__primary.pdf">Click Here</a>

</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="single-blog-item">
<div class="blog-image">
<a href="#">
<img src="assets/img/child-img/c14.jpg" alt="image" style="height: 312px;
    width: 557px;">
</a>
</div>
<div class="blog-content">

<h3>For Pre-Primary</h3>

<div class="blog-btn">
<a class="default-btn" target="_blank" href="http://cdata.tezkids.com.s3.amazonaws.com/arise/u/udb/1a/d5/be/0d/2/arise_diary_final_2019-20_pre-primary.copy1.pdf">Click Here</a>
</div>
</div>
</div>
</div>

</div>
</div>
</section> -->


<section style="background-image: linear-gradient(to right, #fc0c0c 27%, orange);
    padding: 20px;"> 
    <div class="section-title">
      <h2 style="    color: #fff;"> Event Calendar</h2>
    </div>
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <div id="calendar"></div>
      </div>
      <div class="col-lg-5 col-sm-12">
        <div class="card">
        
          <div class="slideshow-container">

            <!--<div class="mySlides fade">-->
            <!--  <div class="numbertext">1 / 3</div>-->
            <!--  <img src="assets/img/calender-themes/january.jpg" style="width:100%">-->
            <!--  <div class="text">January</div>-->
            <!--</div>-->

            <!--<div class="mySlides fade">-->
            <!--  <div class="numbertext">2 / 3</div>-->
            <!--  <img src="assets/img/calender-themes/feb.jpg" style="width:100%">-->
            <!--  <div class="text">February</div>-->
            <!--</div>-->

            <!--<div class="mySlides fade">-->
            <!--  <div class="numbertext">3 / 3</div>-->
            <!--  <img src="assets/img/calender-themes/january.jpg" style="width:100%">-->
            <!--  <div class="text">March</div>-->
            <!--</div>-->
            <div class="mySlides fade">
              <!-- <div class="numbertext">3 / 3</div> -->
              <img src="assets/img/calender-themes/April.png" style="width:100%">
              <div class="text">April</div>
            </div>
            <!--<div class="mySlides fade">-->
            <!--  <div class="numbertext">3 / 3</div>-->
            <!--  <img src="assets/img/calender-themes/April.png" style="width:100%">-->
            <!--  <div class="text">May</div>-->
            <!--</div>-->
            <div class="mySlides fade">
              <!-- <div class="numbertext">3 / 3</div> -->
              <img src="assets/img/calender-themes/June.png" style="width:100%">
              <div class="text">June</div>
            </div>
            <div class="mySlides fade">
              <!-- <div class="numbertext">3 / 3</div> -->
              <img src="assets/img/calender-themes/July.png" style="width:100%">
              <div class="text">July</div>
            </div>
            <div class="mySlides fade">
              <!-- <div class="numbertext">3 / 3</div> -->
              <img src="assets/img/calender-themes/August.png" style="width:100%">
              <div class="text">August</div>
            </div>
            <div class="mySlides fade">
              <!-- <div class="numbertext">3 / 3</div> -->
              <img src="assets/img/calender-themes/September.png" style="width:100%">
              <div class="text">September</div>
            </div>
                        <div class="mySlides fade">
              <!-- <div class="numbertext">3 / 3</div> -->
              <img src="assets/img/calender-themes/October.png" style="width:100%">
              <div class="text">October</div>
            </div>
                        <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="assets/img/calender-themes/November.png" style="width:100%">
              <div class="text">November</div>
            </div>
                        <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="assets/img/calender-themes/December.png" style="width:100%">
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
      <div class="col-lg-2"></div>
    </div>
</section> 


<?php include("footer.php");?>

<div class="go-top">
<i class='bx bx-up-arrow-alt'></i>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
<script>
    
    !function() {

var today = moment();

function Calendar(selector, events) {
  this.el = document.querySelector(selector);
  this.events = events;
  this.current = moment().date(1);
  this.draw();
  var current = document.querySelector('.today');
  if(current) {
    var self = this;
    window.setTimeout(function() {
      self.openDay(current);
    }, 500);
  }
}

Calendar.prototype.draw = function() {
  //Create Header
  this.drawHeader();

  //Draw Month
  this.drawMonth();

  this.drawLegend();
}

Calendar.prototype.drawHeader = function() {
  var self = this;
  if(!this.header) {
    //Create the header elements
    this.header = createElement('div', 'header');
    this.header.className = 'header';

    this.title = createElement('h1');

    var right = createElement('div', 'right');
    right.addEventListener('click', function() { self.nextMonth();
    plusSlides(1);
        
    });

    var left = createElement('div', 'left');
    left.addEventListener('click', function() {  plusSlides(-1); self.prevMonth(); });

    //Append the Elements
    this.header.appendChild(this.title); 
    this.header.appendChild(right);
    this.header.appendChild(left);
    this.el.appendChild(this.header);
  }

  this.title.innerHTML = this.current.format('MMMM YYYY');
}

Calendar.prototype.drawMonth = function() {
  var self = this;
  
  this.events.forEach(function(ev) {
   ev.date = self.current.clone().date(Math.random() * (29 - 1) + 1);
  });
  
  
  if(this.month) {
    this.oldMonth = this.month;
    this.oldMonth.className = 'month out ' + (self.next ? 'next' : 'prev');
    this.oldMonth.addEventListener('webkitAnimationEnd', function() {
      self.oldMonth.parentNode.removeChild(self.oldMonth);
      self.month = createElement('div', 'month');
      self.backFill();
      self.currentMonth();
      self.fowardFill();
      self.el.appendChild(self.month);
      window.setTimeout(function() {
        self.month.className = 'month in ' + (self.next ? 'next' : 'prev');
      }, 16);
    });
  } else {
      this.month = createElement('div', 'month');
      this.el.appendChild(this.month);
      this.backFill();
      this.currentMonth();
      this.fowardFill();
      this.month.className = 'month new';
  }
}

Calendar.prototype.backFill = function() {
  var clone = this.current.clone();
  var dayOfWeek = clone.day();

  if(!dayOfWeek) { return; }

  clone.subtract('days', dayOfWeek+1);

  for(var i = dayOfWeek; i > 0 ; i--) {
    this.drawDay(clone.add('days', 1));
  }
}

Calendar.prototype.fowardFill = function() {
  var clone = this.current.clone().add('months', 1).subtract('days', 1);
  var dayOfWeek = clone.day();

  if(dayOfWeek === 6) { return; }

  for(var i = dayOfWeek; i < 6 ; i++) {
    this.drawDay(clone.add('days', 1));
  }
}

Calendar.prototype.currentMonth = function() {
  var clone = this.current.clone();

  while(clone.month() === this.current.month()) {
    this.drawDay(clone);
    clone.add('days', 1);
  }
}

Calendar.prototype.getWeek = function(day) {
  if(!this.week || day.day() === 0) {
    this.week = createElement('div', 'week');
    this.month.appendChild(this.week);
  }
}

Calendar.prototype.drawDay = function(day) {
  var self = this;
  this.getWeek(day);

  //Outer Day
  var outer = createElement('div', this.getDayClass(day));
  outer.addEventListener('click', function() {
    self.openDay(this);
  });

  //Day Name
  var name = createElement('div', 'day-name', day.format('ddd'));

  //Day Number
  var number = createElement('div', 'day-number', day.format('DD'));


  //Events
  var events = createElement('div', 'day-events');
  this.drawEvents(day, events);

  outer.appendChild(name);
  outer.appendChild(number);
  outer.appendChild(events);
  this.week.appendChild(outer);
}

Calendar.prototype.drawEvents = function(day, element) {
  if(day.month() === this.current.month()) {
    var todaysEvents = this.events.reduce(function(memo, ev) {
      if(ev.date.isSame(day, 'day')) {
        memo.push(ev);
      }
      return memo;
    }, []);

    todaysEvents.forEach(function(ev) {
      var evSpan = createElement('span', ev.color);
      element.appendChild(evSpan);
    });
  }
}

Calendar.prototype.getDayClass = function(day) {
  classes = ['day'];
  if(day.month() !== this.current.month()) {
    classes.push('other');
  } else if (today.isSame(day, 'day')) {
    classes.push('today');
  }
  return classes.join(' ');
}

Calendar.prototype.openDay = function(el) {
  var details, arrow;
  var dayNumber = +el.querySelectorAll('.day-number')[0].innerText || +el.querySelectorAll('.day-number')[0].textContent;
  var day = this.current.clone().date(dayNumber);

  var currentOpened = document.querySelector('.details');

  //Check to see if there is an open detais box on the current row
  if(currentOpened && currentOpened.parentNode === el.parentNode) {
    details = currentOpened;
    arrow = document.querySelector('.arrow');
  } else {
    //Close the open events on differnt week row
    //currentOpened && currentOpened.parentNode.removeChild(currentOpened);
    if(currentOpened) {
      currentOpened.addEventListener('webkitAnimationEnd', function() {
        currentOpened.parentNode.removeChild(currentOpened);
      });
      currentOpened.addEventListener('oanimationend', function() {
        currentOpened.parentNode.removeChild(currentOpened);
      });
      currentOpened.addEventListener('msAnimationEnd', function() {
        currentOpened.parentNode.removeChild(currentOpened);
      });
      currentOpened.addEventListener('animationend', function() {
        currentOpened.parentNode.removeChild(currentOpened);
      });
      currentOpened.className = 'details out';
    }

    //Create the Details Container
    details = createElement('div', 'details in');

    //Create the arrow
    var arrow = createElement('div', 'arrow');

    //Create the event wrapper

    details.appendChild(arrow);
    el.parentNode.appendChild(details);
  }

  var todaysEvents = this.events.reduce(function(memo, ev) {
    if(ev.date.isSame(day, 'day')) {
      memo.push(ev);
    }
    return memo;
  }, []);

  this.renderEvents(todaysEvents, details);

  arrow.style.left = el.offsetLeft - el.parentNode.offsetLeft + 27 + 'px';
}

Calendar.prototype.renderEvents = function(events, ele) {
  //Remove any events in the current details element
  var currentWrapper = ele.querySelector('.events');
  var wrapper = createElement('div', 'events in' + (currentWrapper ? ' new' : ''));

  events.forEach(function(ev) {
    var div = createElement('div', 'event');
    var square = createElement('div', 'event-category ' + ev.color);
    var span = createElement('span', '', ev.eventName);

    div.appendChild(square);
    div.appendChild(span);
    wrapper.appendChild(div);
  });

  if(!events.length) {
    var div = createElement('div', 'event empty');
    var span = createElement('span', '', 'No Events');

    div.appendChild(span);
    wrapper.appendChild(div);
  }

  if(currentWrapper) {
    currentWrapper.className = 'events out';
    currentWrapper.addEventListener('webkitAnimationEnd', function() {
      currentWrapper.parentNode.removeChild(currentWrapper);
      ele.appendChild(wrapper);
    });
    currentWrapper.addEventListener('oanimationend', function() {
      currentWrapper.parentNode.removeChild(currentWrapper);
      ele.appendChild(wrapper);
    });
    currentWrapper.addEventListener('msAnimationEnd', function() {
      currentWrapper.parentNode.removeChild(currentWrapper);
      ele.appendChild(wrapper);
    });
    currentWrapper.addEventListener('animationend', function() {
      currentWrapper.parentNode.removeChild(currentWrapper);
      ele.appendChild(wrapper);
    });
  } else {
    ele.appendChild(wrapper);
  }
}

Calendar.prototype.drawLegend = function() {
  var legend = createElement('div', 'legend');
  var calendars = this.events.map(function(e) {
    return e.calendar + '|' + e.color;
  }).reduce(function(memo, e) {
    if(memo.indexOf(e) === -1) {
      memo.push(e);
    }
    return memo;
  }, []).forEach(function(e) {
    var parts = e.split('|');
    var entry = createElement('span', 'entry ' +  parts[1], parts[0]);
    legend.appendChild(entry);
  });
  this.el.appendChild(legend);
}

Calendar.prototype.nextMonth = function() {
  this.current.add('months', 1);
  this.next = true;
  this.draw();
}

Calendar.prototype.prevMonth = function() {
  this.current.subtract('months', 1);
  this.next = false;
  this.draw();
}

window.Calendar = Calendar;

function createElement(tagName, className, innerText) {
  var ele = document.createElement(tagName);
  if(className) {
    ele.className = className;
  }
  if(innerText) {
    ele.innderText = ele.textContent = innerText;
  }
  return ele;
}
}();

!function() {
var data = [
  { eventName: 'Lunch Meeting w/ Mark', calendar: 'Work', color: 'orange' },
  { eventName: 'Interview - Jr. Web Developer', calendar: 'Work', color: 'orange' },
  { eventName: 'Demo New App to the Board', calendar: 'Work', color: 'orange' },
  { eventName: 'Dinner w/ Marketing', calendar: 'Work', color: 'orange' },

  { eventName: 'Game vs Portalnd', calendar: 'Sports', color: 'blue' },
  { eventName: 'Game vs Houston', calendar: 'Sports', color: 'blue' },
  { eventName: 'Game vs Denver', calendar: 'Sports', color: 'blue' },
  { eventName: 'Game vs San Degio', calendar: 'Sports', color: 'blue' },

  { eventName: 'School Play', calendar: 'Kids', color: 'yellow' },
  { eventName: 'Parent/Teacher Conference', calendar: 'Kids', color: 'yellow' },
  { eventName: 'Pick up from Soccer Practice', calendar: 'Kids', color: 'yellow' },
  { eventName: 'Ice Cream Night', calendar: 'Kids', color: 'yellow' },

  { eventName: 'Free Tamale Night', calendar: 'Other', color: 'green' },
  { eventName: 'Bowling Team', calendar: 'Other', color: 'green' },
  { eventName: 'Teach Kids to Code', calendar: 'Other', color: 'green' },
  { eventName: 'Startup Weekend', calendar: 'Other', color: 'green' }
];



function addDate(ev) {
  
}

var calendar = new Calendar('#calendar', data);

}();

</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!-- <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script> -->
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
<!-- <script src="assets/js/main.js"></script> -->

<!-- <script src="assets/js/cal.js"></script> -->

</body>
</html>