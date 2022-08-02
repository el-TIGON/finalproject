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
					<form action="/dbfiles/employees.php" method="post" enctype="multipart/form-data" class="banner_form contact-inner-form">
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
	<?php
	include('includes/footer.php');
	include('includes/scripts.php');
	?>