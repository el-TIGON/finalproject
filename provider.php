<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>service provider</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/JiSlider.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

</head>

<body>
	<!-- header -->
	<div class="w3layouts-header">
		<div class="container">

			<div class="logo-nav-agileits">
				<div class="logo-nav-left">
					<h1>
						<a href="index.html">
							<span class="fa fa-"></span>  home service
						</a>
					</h1>
				</div>

				<div class="header-grid-left-wthree">
					<div class="h3-title">
						<h3>contact us</h3>
					</div>
					<ul>
						<li>
							<span class="fa fa-envelope" aria-hidden="true"></span>Homeservices.com
						</li>
						<li>
							<span class="fa fa-phone" aria-hidden="true"></span>5252</li>
						<li>
							<span class="fa fa-mobile" aria-hidden="true"></span>+252 63 4814459
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<div class="logo-nav-left1">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="about.html">about us</a>
							</li>
							<li>
								<a href="services.html">services</a>
							</li>
							<li>
								<a href="contact.html">Contact us</a>
							</li>
							<li>
								<a href="provider.html">register as service provider</a>
							</li>
						</ul>
					</div>

				</nav>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //header -->
	<div class="banner-bg2 ">
		<div class="banner-info bg3 inner">
			<h3>one click repair service</h3>
			<p>repair.&nbsp;improve.&nbsp;maintain</p>
		</div>
	</div>
	<!-- breadcrumbs -->
	<div class="breadcrumbs-w3l">
		<div class="container">
			<span class="breadcrumbs">
				<a href="index.html">Home</a> |
				<span>register as service provider</span>
			</span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- contact -->
	<div class="w3ls-section banner-single">
		<div class="container">
			<h4 class="main-title">Service Provider Employment</h4>
			<div class="about-inner-main">
			            <?php
						    if (isset($_SESSION['status']))
						    {
							    echo '<div class="alert alert-success">'.$_SESSION['status'].'</div>';
							    unset($_SESSION['status']);
						    }
						?>
				<div class="col-md-6 w3layouts-reg-form contact-form-row-agileinfo">
					<h4 class="form-con-txt">Service provider form</h4>
					<form action="employees.php" method="post" class="banner_form contact-inner-form">
						<div class="contact-form-left contact-field1">
							<div class="sec-left">
								<label class="contact-form-text">Name</label>
								<input placeholder="your name " name="firstname" type="text" required="">
							</div>
							<div class="sec-right">
								<label class="contact-form-text">Email</label>
								<input placeholder="your Email " name="email" type="email" required="">
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="sec-right">
                            <label class="contact-form-text">CV</label>
                            <input name="yourCV" type="file" required="">
                        </div>
						<div class="contact-form contact-field2">
							<input type="submit" value="Apply" name="_apply">
						</div>
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- contact -->
	<div class="w3ls-section app-head">
		<div class="container">
			<div class="col-md-8 col-sm-8 app-main">
				<h6>home services at your
					<span>finger tips!</span>
					<span>one call away</span>
				</h6>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- footer -->
	<div class="footer-main-w3_agile">
		<div class="footer-dot">
			<div class="container">
				<div class="footer-bottom">
					<div class="col-md-4 col-sm-6 col-xs-6 footer-grid1 address">
						<h4>Contact Info</h4>
						<ul>
							<li>
								<span class="fa fa-home" aria-hidden="true"></span>
								<p>1234k Avenue,block-4,New York City.</p>
							</li>
							<li>
								<span class="fa fa-envelope-o" aria-hidden="true"></span>
								<a href="mailto:info@example.com">info@example.com</a>
							</li>
							<li>
								<span class="fa fa-phone" aria-hidden="true"></span>
								<p>+1234 567 892</p>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 footer-grid1 res">
						<h4>services</h4>
						<ul>
							<li>
								<a href="#">appliance repair</a>
							</li>
							<li>
								<a href="#">home improvement</a>
							</li>
							<li>
								<a href="#">home maintenance</a>
							</li>
						</ul>
					</div>
				</div>
	<div class="cpy-footer">
		<div class="container">
			<div class="footer-top">
				<div class="logo-nav-left footer-top1">
					<h2>
						<a href="index.html">
							<span class="fa fa-home logo-ftr"></span>a2z
							<span class="logo-title">home services</span>
						</a>
					</h2>
				</div>
				<div class="footer-social">
					<h4>connect with us</h4>
					<ul>
						<li>
							<a href="#">
								<span class="fa fa-facebook icon_facebook"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-twitter icon_twitter"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-dribbble icon_dribbble"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-google-plus icon_g_plus"></span>
							</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="cpy-text">
			<p>© 2017 A2Z. All rights reserved | Design by
				<a href="http://w3layouts.com/">W3layouts</a>
			</p>
		</div>

	</div>
	<!--//footer  -->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js-->
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script  src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up-->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<script src="js/SmoothScroll.min.js"></script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>
</body>

</html>