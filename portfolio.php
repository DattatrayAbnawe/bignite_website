<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Bignite CS | Portfolio</title>
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
							<h1>Portfolio</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="index.html">Home</a>
								</li>
								<li class="breadcrumb-item active">
									Portfolio
								</li>
							</ol>
							<div class="divider-15 d-none d-xl-block"></div>
						</div>
					</div>
				</div>
			</section>


			<section class="ls s-pt-50 s-pb-130 container-px-0 gallery-excerpt">
				<div class="container">
					<div class="row">

						<div class="d-none d-lg-block divider-30"></div>

						<div class="col-lg-12">
							<!-- <div class="row justify-content-center">
								<div class="col-md-11 col-xl-9">
									<div class="filters gallery-filters small-text text-lg-right">
										<a href="#" data-filter="*" class="active selected">All</a>
										<a href="#" data-filter=".web-design">Web Design</a>
										<a href="#" data-filter=".logo-design">Logo Design</a>
										<a href="#" data-filter=".advertisement">Advertisement</a>
										<a href="#" data-filter=".branding">Branding</a>
										<a href="#" data-filter=".design">Design</a>
										<a href="#" data-filter=".photo">Photo</a>
									</div>
								</div>
							</div> -->

							<div class="row isotope-wrapper masonry-layout c-mb-30" data-filters=".gallery-filters">

								<div class="col-xl-4 col-sm-6 logo-design design">

									<div class="vertical-item text-center gallery-excerpt-padding ls ms">
										<div class="item-media">
											<img src="images/portfolio/swapgifts.jpg" alt="Swap Gifts" title="Swap Gifts">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>Swap Gifts</h6>
											<div class="small-text link-a">
												<a href="#">web design</a>
											</div>
											<p><strong>Category:</strong> Ecommerce Gifting Shop</p>
											<p><strong>Technology:</strong> Wordpress</p>
											<div class="mt-30">
												<a href="http://swapgifts.in/" target="_blank" class="btn btn-outline-maincolor know-more-btn">Know More</a>
											</div>
										</div>
									</div>

								</div>

								<div class="col-xl-4 col-sm-6 branding web-design photo">
									<div class="vertical-item text-center gallery-excerpt-padding ls ms">
										<div class="item-media">
											<img src="images/portfolio/sassyshop.jpg" alt="The Sassy Shop" title="The Sassy Shop">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>The Sassy Shop</h6>
											<div class="small-text link-a">
												<a href="#">web design</a>
											</div>
											<p><strong>Category:</strong> Ecommerce Cosmetic and Fashion</p>
											<p><strong>Technology:</strong> Wordpress</p>
											<div class="mt-30">
												<a href="https://sassyshop.in/" target="_blank" class="btn btn-outline-maincolor know-more-btn">Know More</a>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-4 col-sm-6 advertisement design branding">
									<div class="vertical-item text-center gallery-excerpt-padding ls ms">
										<div class="item-media">
											<img src="images/portfolio/bhpc.jpg" alt="Baverly Hills Polo Club" title="Baverly Hills Polo Club">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>Baverly Hills Polo Club</h6>
											<div class="small-text link-a">
												<a href="#">web design</a>
											</div>
											<p><strong>Category:</strong> Fregrances and Perfumes</p>
											<p><strong>Technology:</strong> Wordpress</p>
											<div class="mt-30">
												<a href="http://bhpc.sassyshop.in/" target="_blank" class="btn btn-outline-maincolor know-more-btn">Know More</a>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-4 col-sm-6 logo-design advertisement photo">
									<div class="vertical-item text-center gallery-excerpt-padding ls ms">
										<div class="item-media">
											<img src="images/portfolio/classico.jpg" alt="Clasico Brands" title="Clasico Brands">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>Clasico Brands</h6>
											<div class="small-text link-a">
												<a href="#">web design</a>
											</div>
											<p><strong>Category:</strong> Personal and Home Care</p>
											<p><strong>Technology:</strong> HTML5, CSS3, Javascript,Php</p>
											<div class="mt-30">
												<a href="https://www.clasicobrands.swapgifts.in/" target="_blank" class="btn btn-outline-maincolor know-more-btn">Know More</a>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-4 col-sm-6 branding web-design photo">
									<div class="vertical-item text-center gallery-excerpt-padding ls ms">
										<div class="item-media">
											<img src="images/portfolio/aspireinfotech.jpg" alt="Aspire Infotech" title="Aspire Infotech">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>Aspire Infotech</h6>
											<div class="small-text link-a">
												<a href="#">web design</a>
											</div>
											<p><strong>Category:</strong> Information Technology</p>
											<p><strong>Technology:</strong> Wordpress</p>
											<div class="mt-30">
												<a href="http://www.aspireinfotech.co.in/" target="_blank" class="btn btn-outline-maincolor know-more-btn">Know More</a>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-4 col-sm-6 advertisement design web-design photo">
									<div class="vertical-item text-center gallery-excerpt-padding ls ms">
										<div class="item-media">
											<img src="images/portfolio/tpa.jpg" alt="Turning Point Academy" title="Turning Point Academy">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>Turning Point Academy</h6>
											<div class="small-text link-a">
												<a href="#">web design</a>
											</div>
											<p><strong>Category:</strong> Education</p>
											<p><strong>Technology:</strong> HTML5, CSS3, Javascript,Php</p>
											<div class="mt-30">
												<a href="http://tpascience.com/" target="_blank" class="btn btn-outline-maincolor know-more-btn">Know More</a>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-4 col-sm-6 logo-design design branding">
									<div class="vertical-item text-center gallery-excerpt-padding ls ms">
										<div class="item-media">
											<img src="images/portfolio/wki.jpg" alt="We Kids International" title="We Kids International">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>We Kids International</h6>
											<div class="small-text link-a">
												<a href="#">web design</a>
											</div>
											<p><strong>Category:</strong> Education</p>
											<p><strong>Technology:</strong> HTML5, CSS3, Javascript,Php</p>
											<div class="mt-30">
												<a href="http://wekidsinternational.com/" target="_blank" class="btn btn-outline-maincolor know-more-btn">Know More</a>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-4 col-sm-6 branding web-design">
									<div class="vertical-item text-center gallery-excerpt-padding ls ms">
										<div class="item-media">
											<img src="images/portfolio/sixreynard.jpg" alt="Sixreynard" title="Sixreynard">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>Sixreynard</h6>
											<div class="small-text link-a">
												<a href="#">web design</a>
											</div>
											<p><strong>Category:</strong> Ecommerce Clothing</p>
											<p><strong>Technology:</strong> Shopify</p>
											<div class="mt-30">
												<a href="https://sixreynard.com/" target="_blank" class="btn btn-outline-maincolor know-more-btn">Know More</a>
											</div>
										</div>
									</div>
								</div>

								<!-- <div class="col-xl-4 col-sm-6 advertisement design branding">
									<div class="vertical-item text-center gallery-excerpt-padding ls ms">
										<div class="item-media">
											<img src="images/gallery/11.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>
												<a href="http://webdesign-finder.com/gallery-item3.html">Stet clita kasd guen porta ipsum</a>
											</h6>
											<div class="small-text link-a">
												<a href="#">advertisement</a>
											</div>
											<p>Suspendisse in posuere justo. Donec vel volutpat justo. Vestibulum ac tortor nulla. Etiam id sollicitudin.</p>

										</div>
									</div>
								</div> -->

								<!-- <div class="col-xl-4 col-sm-6 logo-design advertisement">
									<div class="vertical-item text-center gallery-excerpt-padding ls ms">
										<div class="item-media">
											<img src="images/gallery/12.jpg" alt="">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content">
											<h6>
												<a href="http://webdesign-finder.com/gallery-item3.html">Clita kasd gubergren tempor faucibus</a>
											</h6>
											<div class="small-text link-a">
												<a href="#">branding</a>
											</div>
											<p>Amet aspernatur commodi consequatur, cum, error illo iusto laboriosam id nihil optio quaerat obcaecati porta.</p>

										</div>
									</div>
								</div> -->

							</div>
							<!-- .isotope-wrapper-->

							<!-- <div class="row">
								<div class="col-sm-12 text-center gallery-btn">
									<a href="#" class="btn btn-maincolor">Load More</a>
								</div>
							</div> -->

						</div>

						<div class="d-none d-lg-block divider-75"></div>
					</div>

				</div>
			</section>

			<?php include('common/footer.php') ?>
			<?php include('common/copyright.php') ?>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->


	<?php include('common/bottomscript.php') ?>

</body>
</html>