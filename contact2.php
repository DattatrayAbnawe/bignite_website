<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Bignite CS | Contact</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="keyword" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<?php include('common/topscript.php') ?>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="http://webdesign-finder.com/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->


			<!-- header with three Bootstrap columns - left for logo, center for navigation and right for includes-->
			<?php include('common/header.php') ?>

			<section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1>Contact 2</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">Home</a>
								</li>
								<li class="breadcrumb-item">
									<a href="#">Pages</a>
								</li>
								<li class="breadcrumb-item active">
									Contact 2
								</li>
							</ol>
							<div class="divider-15 d-none d-xl-block"></div>
						</div>
					</div>
				</div>
			</section>


			<section class="ls s-pt-30 s-pb-100 s-pb-md-130 s-py-lg-100 contact2">
				<div class="divider-15 d-none d-xl-block"></div>
				<div class="container">
					<div class="row c-mb-30 c-mb-md-50">
						<div class="col-md-4 text-center">
							<div class="border-icon">
								<div class="teaser-icon">
									<img src="images/icon1.png" alt="">
								</div>
							</div>
							<h6>
								Call Us
							</h6>
							<p class="teaser-content">
								<strong>New Accounts:</strong> 1-800-123-4567
								<br>
								<strong>Support:</strong> 1-800-123-4569
							</p>
						</div>
						<div class="col-md-4 text-center">
							<div class="border-icon">
								<div class="teaser-icon">
									<img src="images/icon3.png" alt="">
								</div>
							</div>
							<h6>
								Write Us
							</h6>
							<p class="teaser-content">
								example@example.com
								<br> example@example.com
							</p>
						</div>
						<div class="col-md-4 text-center">
							<div class="border-icon">
								<div class="teaser-icon">
									<img src="images/icon2.png" alt="">
								</div>
							</div>
							<h6>
								Visit Us
							</h6>
							<p class="teaser-content">
								2231 Sycamore Lake Road
								<br> Green Bay, WI 54304
							</p>
						</div>
					</div>
					<div class="divider-60 d-none d-xl-block"></div>
					<div class="row">
						<div class="col-lg-12 ">
							<form class="contact-form" method="post" action="http://webdesign-finder.com/">

								<div class="row c-gutter-20">

									<div class="col-12 col-md-6">
										<div class="form-group has-placeholder">
											<label for="name">Full Name
												<span class="required">*</span>
											</label>
											<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control text-left" placeholder="Full Name">
										</div>
										<div class="form-group has-placeholder ">
											<label for="email">Email address
												<span class="required">*</span>
											</label>
											<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control text-left" placeholder="Email Address">
										</div>
										<div class="form-group has-placeholder">
											<label for="subject">Subject
												<span class="required">*</span>
											</label>
											<input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control text-left" placeholder="Phone Number">
										</div>
									</div>
									<div class="col-12 col-md-6">

										<div class="form-group has-placeholder">
											<label for="message">Message</label>
											<textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control text-left" placeholder="Your Message"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group text-center">
											<button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor">Send Message</button>
										</div>
									</div>

								</div>
							</form>

						</div>
						<!--.col-* -->

						<div class="divider-80 d-none d-xl-block"></div>

					</div>
				</div>
			</section>
			<section class="about-map ms page_map" data-draggable="false" data-scrollwheel="false">

				<div class="marker">
					<div class="marker-address">2231 Sycamore, Green Bay, WI 54304</div>
					<div class="marker-description">

						<ul class="list-unstyled">
							<li>
								<span class="icon-inline">
									<span class="icon-styled color-main">
										<i class="fa fa-map-marker"></i>
									</span>

									<span>
										2231 Sycamore, Green Bay, WI 54304
									</span>
								</span>
							</li>

							<li>
								<span class="icon-inline">
									<span class="icon-styled color-main">
										<i class="fa fa-phone"></i>
									</span>

									<span>
										1-800-123-4567
									</span>
								</span>
							</li>
							<li>
								<span class="icon-inline">
									<span class="icon-styled color-main">
										<i class="fa fa-envelope"></i>
									</span>

									<span>
										DotCreative@example.com
									</span>
								</span>
							</li>
						</ul>
					</div>

					<img class="marker-icon" src="images/map_marker_icon.png" alt="">
				</div>
				<!-- .marker -->

			</section>

			<?php include('common/footer.php') ?>
			<?php include('common/copyright.php') ?>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<?php include('common/bottomscript.php') ?>

	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

</body>


<!-- Mirrored from webdesign-finder.com/html/dotcreative/contact2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Apr 2020 05:24:28 GMT -->
</html>