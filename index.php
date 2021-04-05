<!DOCTYPE html>
<html>
<head>
  <title>LEVIOOSA || ONLINE GROCERIES</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<!--ICON-->
<link rel="shortcut icon" href="images/logo.svg">

<!--META TAGS-->
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="author" content="Mahesh">
<meta name="description" content="">
<meta name="keywords" content="">
<meta property="og:locale" content="en_US" />
<meta property="og:url" content="" />
<meta property="og:site_name" content="LEVIOOSA" />

<!--EXTERNAL CSS
<link rel="stylesheet" href="css/style.css">-->

<!--PLUGIN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Fredoka+One&family=Kanit:wght@300&display=swap" rel="stylesheet">  
</head>
<body>

<!--LOADER
<body onload="preLoader()" style="margin:0;">
<div class="loading" id="loader">
<div class="loader">
<span></span>
<span></span>
<span></span>
</div>
</div>
<div style="display:none;" id="myPageShow" class="page-animate">-->

<!--NAV-BAR-->
<header>
<div class="topnav" id="myTopnav">
<a class="logo">LEVIOOSA<em>.COM</em></a>
<a onclick="openSearch()"><i class="fa fa-search"></i></a>
<a href="#"><i class="fa fa-user"></i></a>
<a href="#"><i class="fa fa-shopping-cart"></i></a>
<a href="#">Grocery Menu</a>
<div class="dropdown"><button class="dropbtn">Boxes <i class="fa fa-caret-down"></i></button>
<div class="dropdown-content">
<a href="#">Select Box</a>
<a href="#">Create Box</a>
<a href="#">Finalize Box</a>
</div>
</div> 
<a href="#">Contact</a>
<a href="#">About</a>
<a href="#" class="active">Home</a>
<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</header>
<div id="navbar">
<div class="slide-menu">
<a class="logo">JAWARIBOX<em>.COM</em></a>
<a onclick="openSearch()"><i class="fa fa-search"></i></a>
<a href="#"><i class="fa fa-user"></i></a>
<a href="#"><i class="fa fa-shopping-cart"></i></a>
<a href="#">Grocery Menu</a>
<div class="dropdown"><button class="dropbtn">Boxes <i class="fa fa-caret-down"></i></button>
<div class="dropdown-content">
<a href="#">Select Box</a>
<a href="#">Create Box</a>
<a href="#">Finalize Box</a>
</div>
</div> 
<a href="#">Contact</a>
<a href="#">About</a>
<a href="#" class="active">Home</a>
</div>
</div>


<!--MAIN-->
<div class="main">
<section>
<h1 class="title ml9">
<span class="text-wrapper">
<span class="letters">FRESH <em style="color:#138275;">GROCERY</em> SHOPPING</span>
</span>
</h1>
<h5 class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
<a href="#" class="btn1">CHOOSE YOU BOX</a>
</section>
</div>


<!--SECTION0-->
<section class="section0">
<center>
<!--CARD STARTS-->
<div class="card inline-photo show-on-scroll">
<table>
<tr>
<td><i class="fa fa-leaf"></i></td>
<td>
<h2 class="title">Balanced Diet</h2>
<span class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></td>
</tr>
</table>
</div>
<!--CARD ENDS-->
<!--CARD STARTS-->
<div class="card inline-photo show-on-scroll">
<table>
<tr>
<td><i class="fa fa-shopping-cart"></i></td>
<td>
<h2 class="title">Doorstep delivery</h2>
<span class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></td>
</tr>
</table>
</div>
<!--CARD ENDS-->
<!--CARD STARTS-->
<div class="card inline-photo show-on-scroll">
<table>
<tr>
<td><i class="fa fa-tag"></i></td>
<td>
<h2 class="title">Price guarantee</h2>
<span class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></td>
</tr>
</table>
</div>
<!--CARD ENDS-->
<!--CARD STARTS-->
<div class="card inline-photo show-on-scroll">
<table>
<tr>
<td><i class="fa fa-line-chart"></i></td>
<td>
<h2 class="title">Discover new</h2>
<span class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></td>
</tr>
</table>
</div>
<!--CARD ENDS-->
</section>

<!--SECTION1-->
<section class="section1">
<!--CARD STARTS-->
<div class="cards inline-photo show-on-scroll">
<section>
<h1 class="title">PULSES</h1>
<span class="sub-title">100% Organic Products</span>
<a href="#" class="btn1">CHECK OUT</a>
</section>
</div>
<!--CARD ENDS-->
<!--CARD STARTS-->
<div class="cards inline-photo show-on-scroll">
<section>
<h1 class="title">CEREALS</h1>
<span class="sub-title">100% Organic Products</span>
<a href="#" class="btn1">CHECK OUT</a>
</section>
</div>
<!--CARD ENDS-->
<!--CARD STARTS-->
<div class="cards inline-photo show-on-scroll">
<section>
<h1 class="title">NUTS</h1>
<span class="sub-title">100% Organic Products</span>
<a href="#" class="btn1">CHECK OUT</a>
</section>
</div>
<!--CARD ENDS-->
</section>

<!--SECTION2-->
<section class="section2">
<table>
<tr>
<td>
<h1 class="title">What's Inside the BOX Every Month</h1>
<ul>
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
</ul>
<a href="#" class="btn1">CHECK YOUR BOX</a>
</td>
<td>
<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1159990/toy1.jpg" alt="HOW WE WORK">
</td>
</tr>
</table>
</section>

<!--SECTION3-->
<section class="section3">
<table>
<tr>
<td>
<div class="card inline-photo show-on-scroll">
<div class="card_part card_part-one"></div>
<!-- Photo 2 -->
<div class="card_part card_part-two"></div>
<!-- Photo 3 -->
<div class="card_part card_part-three"></div>
<!-- Photo 4 -->
<div class="card_part card_part-four"></div>
</div>
</td>
<td>
<h1 class="title">How We Work?</h1>
<ol>
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
</ol>
</td>
</tr>
</table>
</section>

<!--SLICK CARDS-->
<section class="slick">
<div class="banner">
<span class="title">Our Special Products </span>
<span class="sub-title" style="display:block;">Variety of groceries at your doorstep</span>
</div>
<table>
<tr>
<td>
<ul>
<!--DETAIL_1-->
<li class="inline-photo2 show-on-scroll2">
<h3>MOONG DAL</h3>
<p>Nutritional Value/30gms</p>
<a href="#" class="btn2">View Details</a>
</li>
<!--DETAIL_2-->
<li class="inline-photo2 show-on-scroll2">
<h3>MOONG DAL</h3>
<p>Nutritional Value/30gms</p>
<a href="#" class="btn2">View Details</a>
</li>
<!--DETAIL_3-->
<li class="inline-photo2 show-on-scroll2">
<h3>MOONG DAL</h3>
<p>Nutritional Value/30gms</p>
<a href="#" class="btn2">View Details</a>
</li>
</ul>
</td>
<td>
<div class="card inline-photo show-on-scroll">
<div class="card_part card_part-one"></div>
<!-- Photo 2 -->
<div class="card_part card_part-two"></div>
<!-- Photo 3 -->
<div class="card_part card_part-three"></div>
<!-- Photo 4 -->
<div class="card_part card_part-four"></div>
</div>
</td>
<td>
<ul>
<!--DETAIL_1-->
<li class="inline-photo3 show-on-scroll3">
<h3>MOONG DAL</h3>
<p>Nutritional Value/30gms</p>
<a href="#" class="btn2">View Details</a>
</li>
<!--DETAIL_2-->
<li class="inline-photo3 show-on-scroll3">
<h3>MOONG DAL</h3>
<p>Nutritional Value/30gms</p>
<a href="#" class="btn2">View Details</a>
</li>
<!--DETAIL_3-->
<li class="inline-photo3 show-on-scroll3">
<h3>MOONG DAL</h3>
<p>Nutritional Value/30gms</p>
<a href="#" class="btn2">View Details</a>
</li>
</ul>
</td>
</tr>
</table>
</section>


<!--TESTIMONIAL-->
<section class="testimonial">
<div class="banner" style="color:#fff;">
<h1 class="title">What Our Customers Say</h1>
</div>
<img src="https://i.ibb.co/jWGM1LK/dish.png" class="icons inline-photo3 show-on-scroll3">
<div class="testimonial_slider_2">
<input type="radio" name="slider_2" id="slide_2_1" checked />
<input type="radio" name="slider_2" id="slide_2_2" />
<input type="radio" name="slider_2" id="slide_2_3" />
<input type="radio" name="slider_2" id="slide_2_4" />
<div class="boo_inner clearfix">
<!--TESTIMONIAL_1-->
<div class="slide_content">
<div class="testimonial_2">
<div class="content_2">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<div class="author_2"><h3>Author</h3><h4>Designation, Country</h4></div>
</div>
</div>
<!--TESTIMONIAL_2-->
<div class="slide_content">
<div class="testimonial_2">
<div class="content_2">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<div class="author_2"><h3>Author</h3><h4>Designation, Country</h4></div>
</div>
</div>
<!--TESTIMONIAL_3-->
<div class="slide_content">
<div class="testimonial_2">
<div class="content_2">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<div class="author_2"><h3>Author</h3><h4>Designation, Country</h4></div>
</div>
</div>
<!--TESTIMONIAL_4-->
<div class="slide_content">
<div class="testimonial_2">
<div class="content_2">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<div class="author_2"><h3>Author</h3><h4>Designation, Country</h4></div>
</div>
</div>
</div>
<div id="controls">
<label for="slide_2_1"></label>
<label for="slide_2_2"></label>
<label for="slide_2_3"></label>
<label for="slide_2_4"></label>
</div>
</div>
</section>

<!--SECTION4-->
<section class="section4">
<h1 class="title">FLEXIBLE PLANS</h1>
<h5 class="sub-title">Skip & Cancel anytime - only order what you want. No commitments.</h5>
<a href="#" class="btn1">ORDER NOW</a>
</section>

<!--FOOTER-->
<footer>
<div class="footer">
<!--COLUMN_1-->
<div class="column">
<ul>
<li class="title">LEVIOOSA.BOX</li>
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
</ul>
</div>
<!--COLUMN_2-->
<div class="column">
<ul>
<li class="title">OTHER LINKS</li>
<li><a href="#">Terms & Conditions</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Cookie Policy</a></li>
<li><a href="#">Tickets</a></li>
</ul>
</div>
<!--COLUMN_3-->
<div class="column">
<ul>
<li class="title">SHORT CUT</li>
<li><a href="#">Contact Us</a></li>
<li><a href="#">Our Services</a></li>
<li><a href="#">Our Mission</a></li>
<li><a href="#">About Us</a></li>
</ul>
</div>
<!--COLUMN_4-->
<div class="column">
<ul>
<li class="title">NEWSLETTER</li>
<li>
<form action="#" method="post">
<input type="email" name="email" placeholder="Email*" maxlength="80" required /><button class="btn1"><i class="fa fa-paper-plane"></i></button>
</form>
</li>
<li>
<a href="#" title="Address,State,Country,Pincode"><i class="fa fa-map-marker"></i></a>
<a href="#"><i class="fa fa-phone"></i></a>
<a href="#"><i class="fa fa-envelope"></i></a>
</li>
</ul>
</div>
</div>
</footer>
<!--SUB_FOOTER-->
<div class="sub-footer">
Copyright © 2021 LEVIOOSA - All rights reserved || Designed By: Mahesh 
</div>


<!--IF LOADER INCLUDED
</div>-->

<!--SEARCH_ICON-->
<div id="myOverlay" class="overlay">
<span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
<div class="overlay-content animate">
<form action="/action_page.php">
<input type="text" placeholder="Search.." name="search">
<button type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
</div>
<script src="works.js">
</script>
</body>
</html>
