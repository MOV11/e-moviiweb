<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Carousel',
	'body_class' => $GLOBALS['body_class'] . '',
  'scripts' => array(
    'slick'
  ),
  'styles' => array(
    'slick',
    'slick-theme'
  ),
);

get_header($config);
?>

<div class="content-wrapper">
	<?php get_template_part( $GLOBALS['sidebar_file'] ) ?>

	<main class="main-wrapper clearfix">

		<?php get_page_title($config); ?>

		<!-- =================================== -->
		<!-- Different data widgets ============ -->
		<!-- =================================== -->
		<div class="widget-list">
			<div class="row">

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Carousel with Fade Effect</h5>

	            <div class="carousel" data-slick='{"slidesToShow":1, "autoplay": true, "infinite": true, "speed": 2000, "fade": true, "dots": true, "infinite": true }'>
	              <div>
									<img src="assets/demo/carousel/carousel-10.jpeg" alt="" />
									<div class="carousel-caption single-item-caption">
										<div class="single-item-caption-inside">
											<h6>Inspiration and Design</h6>
											<h3>A Piece of Green</h3>
											<p class="text-muted">Posted: May 14, 2017</p>
											<a href="#" class="btn btn-outline-info btn-rounded">View Post</a>
										</div>
									</div>
								</div>

	              <div>
									<img src="assets/demo/carousel/carousel-11.jpeg" alt="" />
									<div class="carousel-caption single-item-caption">
										<div class="single-item-caption-inside">
											<h6>LifeStyle</h6>
											<h3>Balanced</h3>
											<p class="text-muted">Posted: May 14, 2017</p>
											<a href="#" class="btn btn-outline-info btn-rounded">View Post</a>
										</div>
									</div>
								</div>

	              <div>
									<img src="assets/demo/carousel/carousel-12.jpeg" alt="" />
									<div class="carousel-caption single-item-caption">
										<div class="single-item-caption-inside">
											<h6>Travel</h6>
											<h3>A Trip to Unknown</h3>
											<p class="text-muted">Posted: May 14, 2017</p>
											<a href="#" class="btn btn-outline-info btn-rounded">View Post</a>
										</div>
									</div>
								</div>

								<div>
									<img src="assets/demo/carousel/carousel-13.jpeg" alt="" />
									<div class="carousel-caption single-item-caption">
										<div class="single-item-caption-inside">
											<h6>Inspiration and Design</h6>
											<h3>A Piece of Green</h3>
											<p class="text-muted">Posted: May 14, 2017</p>
											<a href="#" class="btn btn-outline-info btn-rounded">View Post</a>
										</div>
									</div>
								</div>

								<div>
									<img src="assets/demo/carousel/carousel-14.jpeg" alt="" />
									<div class="carousel-caption single-item-caption">
										<div class="single-item-caption-inside">
											<h6>Lifestyle</h6>
											<h3>Whatever it takes.</h3>
											<p class="text-muted">Posted: May 14, 2017</p>
											<a href="#" class="btn btn-outline-info btn-rounded">View Post</a>
										</div>
									</div>
								</div>
	            </div>
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Carousel with Styled Items</h5>

	            <div class="carousel multi-slide-carousel" data-slick='{"slidesToShow":2, "slidesToScroll": 2, "autoplay": true, "infinite": true,  "dots": true, "infinite": true }'>
	              <div class="item-image">
									<a href="#" class="img-shadow">
										<img src="assets/demo/carousel/carousel-20.jpeg" alt="" />
										<span class="shadow"></span>
									</a>
									<div class="header-caption">
										<a href="#" class="bg-success">Sports
											<span class="triangle-top-left" style="border-color: #38d57a transparent transparent transparent;"></span>
										</a>
									</div>
									<div class="content-caption text-inverse">
										<div class="item-date">
											<span class="fa fa-clock-o" aria-hidden="true"></span> <span>Oct 2, 2016</span>
										</div>
										<div class="item-title">
											<h3 class="mr-t-10 fw-100">Lorem ipsum dolor sit amet</h3>
										</div>
										<div class="item-desc">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim.
											</p>
										</div>
									</div>
								</div>

	              <div class="item-image">
									<a href="#" class="img-shadow">
										<img src="assets/demo/carousel/carousel-16.jpeg" alt="" />
										<span class="shadow"></span>
									</a>
									<div class="header-caption">
										<a href="#" class="bg-info">Cricket
											<span class="triangle-top-left" style="border-color: #03a9f3 transparent transparent transparent;"></span>
										</a>
									</div>
									<div class="content-caption text-inverse">
										<div class="item-date">
											<span class="fa fa-clock-o" aria-hidden="true"></span> <span>Oct 2, 2016</span>
										</div>
										<div class="item-title">
											<h3 class="mr-t-10 fw-100">Smack Visitors Over the Head</h3>
										</div>
										<div class="item-desc">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim.
											</p>
										</div>
									</div>
								</div>

	              <div class="item-image">
									<a href="#" class="img-shadow">
										<img src="assets/demo/carousel/carousel-17.jpeg" alt="" />
										<span class="shadow"></span>
									</a>
									<div class="header-caption">
										<a href="#" class="bg-danger">Football
											<span class="triangle-top-left" style="border-color: #e6614f transparent transparent transparent;"></span>
										</a>
									</div>
									<div class="content-caption text-inverse">
										<div class="item-date">
											<span class="fa fa-clock-o" aria-hidden="true"></span> <span>Oct 2, 2016</span>
										</div>
										<div class="item-title">
											<h3 class="mr-t-10 fw-100">Give Them 3 Unbeatable Reasons</h3>
										</div>
										<div class="item-desc">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim.
											</p>
										</div>
									</div>
								</div>

								<div class="item-image">
									<a href="#" class="img-shadow">
										<img src="assets/demo/carousel/carousel-18.jpeg" alt="" />
										<span class="shadow"></span>
									</a>
									<div class="header-caption">
										<a href="#" class="bg-success">Foods
											<span class="triangle-top-left" style="border-color: #38d57a transparent transparent transparent;"></span>
										</a>
									</div>
									<div class="content-caption text-inverse">
										<div class="item-date">
											<span class="fa fa-clock-o" aria-hidden="true"></span> <span>Oct 2, 2016</span>
										</div>
										<div class="item-title">
											<h3 class="mr-t-10 fw-100">Swapping dull words for sticky</h3>
										</div>
										<div class="item-desc">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim.
											</p>
										</div>
									</div>
								</div>

								<div class="item-image">
									<a href="#" class="img-shadow">
										<img src="assets/demo/carousel/carousel-22.jpeg" alt="" />
										<span class="shadow"></span>
									</a>
									<div class="header-caption">
										<a href="#" class="bg-info">Medical
											<span class="triangle-top-left" style="border-color: #03a9f3 transparent transparent transparent;"></span>
										</a>
									</div>
									<div class="content-caption text-inverse">
										<div class="item-date">
											<span class="fa fa-clock-o" aria-hidden="true"></span> <span>Oct 2, 2016</span>
										</div>
										<div class="item-title">
											<h3 class="mr-t-10 fw-100">Stealing from PR and bloggers</h3>
										</div>
										<div class="item-desc">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim.
											</p>
										</div>
									</div>
								</div>

								<div class="item-image">
									<a href="#" class="img-shadow">
										<img src="assets/demo/carousel/carousel-21.jpeg" alt="" />
										<span class="shadow"></span>
									</a>
									<div class="header-caption">
										<a href="#" class="bg-danger">Life
											<span class="triangle-top-left" style="border-color: #e6614f transparent transparent transparent;"></span>
										</a>
									</div>
									<div class="content-caption text-inverse">
										<div class="item-date">
											<span class="fa fa-clock-o" aria-hidden="true"></span> <span>Oct 2, 2016</span>
										</div>
										<div class="item-title">
											<h3 class="mr-t-10 fw-100">Wireless should be free</h3>
										</div>
										<div class="item-desc">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim.
											</p>
										</div>
									</div>
								</div>

	            </div>
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
