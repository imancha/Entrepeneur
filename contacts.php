<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contacts</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/TMForm.js"></script>
		<script>
			$(document).ready(function(){
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
	<body class="" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li><a href="index.php">Home</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="cars.php">Cars</a></li>
									<li><a href="services.php">Services</a></li>
									<li class="current"><a href="contacts.php">Contacts</a></li>
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
<!--==============================Content=================================-->
			<div class="content"><div class="ic"></div>
				<div class="container_12">
					<div class="grid_12">
						<h3>Find Us</h3>
						<div class="map">
							<figure>								
								<iframe frameborder="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=-6.621346,108.45107&amp;aq=0&amp;oq=Panguraga&amp;sll=-6.621719,108.451855&amp;sspn=0.00325,0.005284&amp;ie=UTF8&amp;hq=&amp;hnear=Panguragan,+Cirebon,+Jawa+Barat,+Indonesia&amp;t=m&amp;z=14&amp;ll=-6.621341,108.451066&amp;output=embed"></iframe>
							</figure>
						</div>
					</div>
					<div class="grid_5">
						<h3>Contact Info</h3>
						<div class="map">
							<div class="text1 color2">Kritik dan Saran</div>
							Kami sangat menantikan kritik dan saran dari Anda semua agar kami bisa berinstropeksi dan menjadi lebih baik lagi.
							Dan apabila Anda merasa dirugikan atau dikecewakan atau tidak puas oleh pelayanan dari <a href="index.php">Imancha Tour &amp; Travel</a>,
							kami harap jangan segan-segan untuk menghubungi customer service kami. Dan tentu saja harus bisa dipertanggungjawabkan, dengan demikian maka kami selaku pengurus 
							dapat melakukan tindakan-tindakan yang kami anggap perlu agar hak-hak dari pengguna jasa transportasi <a href="index.php">Imancha Tour &amp; Travel</a> bisa terpenuhi.
							Terima Kasih.
							<br><br>
							<address>
								<dl>
									<dt><a href="index.php"><b>Imancha Tour &amp; Travel</b></a><br>
										Jl. H. Ismail RT/RW 15/06 Blok 4<br>
										Panguragan - Cirebon<br>
										Jawa Barat
									</dt>
									<br>
									<dd><span>Phone:</span> +6285 2240 57100</dd>									
									<dd>E-mail: <a href="mailto:travel@imancha.net" class="color1">travel@imancha.net</a></dd>
								</dl>
							</address>
						</div>
					</div>
					<div class="grid_6 prefix_1">
						<h3>Contact Form</h3>
						<form id="form">
							<div class="success_wrapper">
								<div class="success-message">Contact form submitted</div>
							</div>
							<label class="name">
								<input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" />
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid name.</span>
							</label>
							<label class="email">
								<input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid email.</span>
							</label>
							<label class="phone">
								<input type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers"/>
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid phone.</span>
							</label>
							<label class="message">
								<textarea placeholder="Message:" data-constraints='@Required @Length(min=2,max=999999)'></textarea>
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*The message is too short.</span>
							</label>
							<div>
								<div class="clear"></div>
								<div class="btns">
									<a href="#" data-type="submit" class="btn">Send</a>
									<a href="#" data-type="reset" class="btn">Clear</a>
								</div>
							</div>
						</form>
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
						<div class="st1">		
							<div class="pull-left">
								<div class="brand">Support Team</div>														
								<br><br>
								<ul class="list1">
									<li><a href="http://www.unikom.ac.id" target="_blank">UNIKOM</a></li>
									<li><a href="http://kuliahonline.unikom.ac.id" target="_blank">Kuliah Online Unikom</a></li>
									<li><a href="http://blog.unikom.ac.id" target="_blank">Blog Unikom</a></li>
									<li><a href="http://repository.unikom.ac.id" target="_blank">Repository Unikom</a></li>
									<li><a href="http://elib.unikom.ac.id" target="_blank">Elib Unikom</a></li>
								</ul>
							</div>
						</div>
						<br>
						<div class="st1">
							<div class="copy pull-right">
								<div class="brand">
									Imancha<span class="color1">T</span>our 
								</div>
								&copy; 2014
						</div>
					</div>
				</div>					
			</div>				
			<div class="clear"></div>
		</footer>
	</body>
</html>
