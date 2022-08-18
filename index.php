<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

				</nav>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //header -->
	<!-- banner -->
	<div class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="banner-top banner-top1">
						<div class="container">
							<div class="banner-info info2">
								<h3>one stop home services</h3>
								<p>let us do it for you.</p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top banner-top2">
						<div class="container">
							<div class="banner-info bg3 info2">
								<h3>one click repair service</h3>
								<p>repair.&nbsp;improve.&nbsp;maintain</p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top banner-top3">
						<div class="container">
							<div class="banner-info bg3">
								<h3>Property Maintenance Services</h3>
								<p>one call does it all.</p>
							</div>

						</div>
					</div>
				</li>
			</ul>
		</div>
		<!-- //banner -->
		<!-- banner bottom -->
		<div class="banner-btm">
			<div class="container">
				<div class="banner-bottom-main">
					<div class="col-md-4 banner-btmg1">
						<?php
						if (isset($_SESSION['status']))
						{
							echo '<div class="alert alert-success">'.$_SESSION['status'].'</div>';
							unset($_SESSION['status']);
						}
						?>
						<div class="form-text">
							<h3>Looking for a Handyman?</h3>
							<p>We solve your Home repair needs!</p>
							<img src="images/f1.png" alt="" />
						</div>
						<form action="booking.php" method="post" class="banner_form">
							<div class="sec-left">
								<label class="contact-form-text">Name</label>
								<input placeholder="name " name="username" type="text" required="">
							</div>
							<div class="sec-right">
								<label class="contact-form-text">Email</label>
								<input placeholder="Email " name="email" type="email" required="">
							</div>
							<div class="form-tx">
								<label class="contact-form-text">Mobile</label>
								<textarea placeholder="mobile number" required="" name="mobile" type ="number"></textarea>
							</div>
							<div class="form-tx">
								<label class="contact-form-text">Address</label>
								<input placeholder="address" required="" name="address" type="text">
							</div>
							<div class="form-select sec-right">
								<label class="contact-form-text">Select Service</label>
								<select name="service">
									<option value="0">---- SELECT ----</option>
									<option value="Electrical" >Electrical</option>
									<option value="Plumbing" >Plumbing</option>
									<option value="Painting" >Painting</option>
									<option value="Carpentry" >Carpentry</option>
									<option value="Gardening" >Gardening</option>
									<option value="Cleaning" >Cleaning</option>
									<option value="pests" >pests killer</option>
								</select>
							</div>
							<input type="submit" value="Submit" name="_submit">
						</form>
					</div>
					<div class="col-md-8 banner-btm-grid2">
						<div class="col-md-4 banner-grid2">
							<div class="banner-subg1">
								<h3>maintenance</h3>
								<p>The little things add up. That's why regular maintenance in and around the home is especially important. 
								 All of our home improvement professionals know exactly what to look for and how to fix it. 
								 From replacing grout in the bathroom to installing a fan, 
								let us tackle the small and large projects on your list.</p>
								<span class="fa fa-cog" aria-hidden="true"></span>
								<div class="read-btn">
									<a href="about.html">view more</a>
								</div>
							</div>
							<div class="banner-subg1">
								<h3>carpentry</h3>
								<p>With an average of 10 years' experience, our home improvement professionals are skilled carpenters and furniture builders.</p>
								<span class="fa fa-check-square-o" aria-hidden="true"></span>
								<div class="read-btn">
									<a href="about.php">view more</a>
								</div>
							</div>

						</div>
						<div class="col-md-4 banner-grid2">
							<div class="banner-subg1">
								<h3>repair</h3>
								<p>When stuff breaks, we fix it. Our home repair contractors can save you the time and money it would otherwise cost to find and install a replacement for your broken fixtures and household items.
									We believe in a convenient, one-call solution where one call can get one of our house repair contractors on the way to fixing whatever you need fixed. 
							</p>
								<span class="fa fa-yelp" aria-hidden="true"></span>
								<div class="read-btn">
									<a href="about.php">view more</a>
								</div>
							</div>
							<div class="banner-subg1">
								<h3>improvement</h3>
								<p>Everyone knows that some improvements required usually means lots of improvements. 
								Home service gets your furniture and equipment out of the box and into your home or yard.</p>
								<span class="fa fa-gg" aria-hidden="true"></span>
								<div class="read-btn">
									<a href="about.php">view more</a>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- //banner bottom -->
		<!-- about -->
		<div class="agile-about-main">
			<div class="col-md-4 about-left">
				<div class="about-main-bg text-center">
					<h4 class="about-title">Why</h4>
					<h4 class="sub">
						<span>c</span>hoose
						<span>u</span>s?</h4>
				</div>
			</div>
			<div class="col-md-8 about-bottom-g1">
				<h4>One Stop Solution for your Complete Home Maintenance</h4>
				
				<div class="about-grid">
					<div class="about-bottom-right">
						<div class="abouthome-grid">
							<span class="hi-icon hi-icon-archive fa fa-check"> </span>
						</div>
						<div class="about-bottom">
							<h5>vision</h5>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="about-bottom-right">
						<div class="abouthome-grid">
							<span class="hi-icon hi-icon-archive  fa fa-book"> </span>
						</div>
						<div class="about-bottom">
							<h5>affordable</h5>
							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class=" about-bottom-right">
						<div class="abouthome-grid">
							<span class="hi-icon hi-icon-archive fa fa-photo"> </span>
						</div>
						<div class="about-bottom">
							<h5>quality</h5>
							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class=" about-bottom-right">
						<div class="abouthome-grid">
							<span class="hi-icon hi-icon-archive fa fa-briefcase"> </span>
						</div>
						<div class="about-bottom">
							<h5>24*7 support</h5>
							
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="abt-img">
					<img src="images/a1.png" alt="" class="img-responsive" />
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>
	<div class="w3ls-section">
		<div class="container">
			<div class="main-bottom">
				<div class="col-md-6 col-sm-6 mb-left">

				</div>
				<div class="col-md-6 col-sm-6 mb-right">
					<h4>service you can trust</h4>
					<p>protect all your home appliances & systems.</p>
					<a href="services.php">view all services</a>
				</div>
			</div>
		</div>
	</div>

<?php
include 'includes/footer.php';
include 'includes/scripts.php';

?>