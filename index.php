<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=yes" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="booking/css/booking.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/camera.js"></script>
		<script src="js/jquery.autocomplete.min.js"></script>
		<script src="js/city-autocomplete.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
				jQuery('#camera_wrap').camera({
					loader: false,
					pagination: false ,
					minHeight: '444',
					thumbnails: false,
					height: '28.28125%',
					caption: true,
					navigation: true,
					fx: 'mosaic'
				});
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
			<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>				
				<div class="menu_block">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li class="current"><a href="index.php">Home</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="cars.php">Cars</a></li>
									<li><a href="services.php">Services</a></li>
									<li><a href="contacts.php">Contacts</a></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>				
				<div class="container_12">
					<div class="grid_12">
						<h1>
							<a href="index.php">								
								<img src="images/logo.png" alt="Your Happy Family">
							</a>
						</h1>
					</div>
				</div>
				<div class="clear"></div>
			</header>
			<div class="slider_wrapper ">
				<div id="camera_wrap" class="">
					<div data-src="images/slide5.jpg"></div>
					<div data-src="images/slide.jpg" ></div>
					<div data-src="images/slide1.jpg" ></div>
					<div data-src="images/slide2.jpg"></div>
					<div data-src="images/slide3.jpg"></div>
					<div data-src="images/slide4.jpg"></div>										
				</div>
			</div>
			<div class="container_12">
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/icon1.png" alt="">
								<div class="extra_wrapper">Fast &amp;
									<div class="color1">Safe</div>
								</div>
							</div>
							Pasti dijemput dan diantar sampai tempat tujuan dengan waktu yang telah disepakati bersama dengan tetap mengutamakan keamanan dan kenyamanan.
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/icon2.png" alt="">
								<div class="extra_wrapper">Best
									<div class="color1">Prices</div>
								</div>
							</div>
							Harga yang kami tawarkan merupakan harga yang terbaik dan termurah apabila dibandingkan dengan agen travel lain.
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="images/icon3.png" alt="">
								<div class="extra_wrapper">Wide
									<div class="color1">Baggage</div>
								</div>
							</div>
							Armada yang bagus dan terawat serta bagasi yang luas sehingga tidak perlu bingung apabila membawa barang bawaan dengan jumlah yang relatif banyak.
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="c_phone">
				<div class="container_12">
					<div class="grid_12">
						<div class="fa fa-phone"></div>+ 6285 2240 57100
						<span>ORDER NOW!</span>
					</div>
					<div class="clear"></div>
				</div>
			</div>
<!--==============================Content=================================-->
			<div class="content"><div class="ic"></div>
				<div class="container_12">
					<div class="grid_5">
						<h3>Booking Form</h3>
						<form id="bookingForm">
							<div class="fl1">
								<div class="tmInput">
									<input name="Name" placeHolder="Name:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
								</div>
								<div class="tmInput">
									<input name="From" placeHolder="From:" type="text" data-constraints="@NotEmpty @Required " id="autoFrom">									
								</div>
							</div>
							<div class="fl1">
								<div class="tmInput">
									<input name="Email" placeHolder="Email:" type="text" data-constraints="@NotEmpty @Required @Email">
								</div>
								<div class="tmInput mr0">
									<input name="To" placeHolder="To:" type="text" data-constraints="@NotEmpty @Required" id="autoTo">
								</div>
							</div>
							<div class="clear"></div>
							<strong>Time</strong>
							<div class="tmInput">
								<input name="Time" placeHolder="<?php $h=date("H")-1; $m=date("i"); echo "$h:$m"; ?>" type="text" data-constraints="@NotEmpty @Required" id="autoTime">
							</div>
							<div class="clear"></div>
							<strong>Date</strong>
							<label class="tmDatepicker">
								<input type="text" name="Date"	placeHolder='<?php echo date("m/d/Y"); ?>' data-constraints="@NotEmpty @Required @Date">
							</label>
							<div class="clear"></div>
							<div class="tmRadio">
								<p>Comfort</p>
								<input name="Comfort" type="radio" id="tmRadio0" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' checked/>
								<span>Cheap</span>
								<input name="Comfort" type="radio" id="tmRadio1" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
								<span>Standart</span>
								<input name="Comfort" type="radio" id="tmRadio2" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
								<span>Lux</span>
							</div>
							<div class="clear"></div>
							<div class="fl1 fl2">
								<em>Adults</em>
								<select name="Adults" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
									<option>1</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
								<div class="clear height1"></div>
							</div>
							<div class="fl1 fl2">
								<em>Children</em>
								<select name="Children" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
									<option>0</option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
								</select>
							</div>
							<div class="clear"></div>
							<div class="tmTextarea">
								<textarea name="Message" placeHolder="Message"></textarea>
							</div>
							<a href="#" class="btn" data-type="submit">Submit</a>							
						</form>
					</div>
					<div class="grid_6 prefix_1">
						<a href="cars.php#economy" class="type"><img src="images/page1_img1.jpg" alt=""><span class="type_caption">Economy</span></a>
						<a href="cars.php#standard" class="type"><img src="images/page1_img2.jpg" alt=""><span class="type_caption">Standard</span></a>
						<a href="cars.php#lux" class="type"><img src="images/page1_img3.jpg" alt=""><span class="type_caption">Lux</span></a>						
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="f_phone"><span>Call Us:</span> + 6285 2240 57100</div>
					<div class="socials">
						<a href="http://www.twitter.com/ImanchaOS" target="_blank" class="fa fa-twitter"></a>
						<a href="http://www.facebook.com/imancha.os" target="_blank" class="fa fa-facebook"></a>
						<a href="https://plus.google.com/+ImanSyahOS/" target="_blank" class="fa fa-google-plus"></a>
					</div>
					<div class="st1">		
						<div class="pull-left">
							<div class="brand">Support Team</div>														
							<br><br>
							<ul class="list1">
								<li><a href="http://www.unikom.ac.id" target="_blank">UNIKOM</a></li>
								<li><a href="http://kuliahonline.unikom.ac.id" target="_blank">Kuliah Online Unikom</a></li>
								<li><a href="http://blog.unikom.ac.id" target="_blank">Blog Unikom</a></li>									<li><a href="http://repository.unikom.ac.id" target="_blank">Repository Unikom</a></li>
								<li><a href="http://elib.unikom.ac.id" target="_blank">Elib Unikom</a></li>
							</ul>
						</div>
					</div>
					<br>
					<div class="st1">
						<div class="copy pull-right">
							<div class="brand">Imancha<span class="color1">T</span>our </div>&copy; 2014
						</div>
					</div>
				</div>					
			</div>				
			<div class="clear"></div>
		</footer>
		<script>
			$(function (){
				$('#bookingForm').bookingForm({
					ownerEmail: '#'
				});
			})
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script>
	</body>
</html>
