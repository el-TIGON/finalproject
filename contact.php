<?php
session_start();
if(!isset($_SESSION['auth']))
{
header("Location: login.php");
}
include('includes/header.php');
include('includes/navbar.php');
?>
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
				<span>Contact Us</span>
			</span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- contact -->
	<div class="w3ls-section banner-single">
		<div class="container">
			<h4 class="main-title">contact us</h4>
			<div class="about-inner-main">
				<div class="col-md-6 contact-left">
					<div class="agile-contact-top">
						<h4>address </h4>
						<p>150 street,Hargiesa City.</p>
					</div>
					<div class="contact-bottom">
						<iframe src="https://www.google.com/maps/place/150+St,+Hargeisa/@9.5810036,44.0569151,17z/data=!3m1!4b1!4m5!3m4!1s0x1628bfaa9684a575:0xe2bafa3b0b6f587e!8m2!3d9.5809983!4d44.0591038"
						    style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-6 w3layouts-reg-form contact-form-row-agileinfo">
					<h4 class="form-con-txt">send us a message</h4>
					<form action="message.php" method="post" class="banner_form contact-inner-form">
						<div class="contact-form-left contact-field1">
						<?php
						if (isset($_SESSION['status']))
						{
							echo '<div class="alert alert-success">'.$_SESSION['status'].'</div>';
							unset($_SESSION['status']);
						}
						?>
						
							<div class="sec-left">
								<label class="contact-form-text">Name</label>
								<input placeholder="your name " name="Name" type="text" required="">
							</div>
							<div class="sec-right">
								<label class="contact-form-text">Email</label>
								<input placeholder="your Email " name="email" type="email" required="">
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="form-tx contact-field3">
							<label class="contact-form-text">message</label>
							<textarea placeholder="your message" required="" name="message"></textarea>
						</div>
						<div class="contact-form contact-field2">
							<input type="submit" value="send message" name="__submit">
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
	<?php
include('includes/footer.php');
include('includes/scripts.php');
	?>