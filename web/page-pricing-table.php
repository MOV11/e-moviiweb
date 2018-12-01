<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Pricing Table',
	'body_class' => $GLOBALS['body_class'] . ''
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
					<div class="widget-bg-transparent">

			      <div class="widget-body clearfix">

							<div class="row m-0">

								<div class="col-12 col-md-3">
									<div class="pricing-box">
										<header>
											<h6>Free</h6>
											<span class="h1 sub-heading-font-family fw-300">0,00<sub>&#8364;</sub></span>
										</header><hr />
										<div class="pricing-box-content">
											<ul class="list-unstyled text-center">
												<li>Do it yourself!</li>
												<li>Open Source Project</li>
												<li>Android &amp;iOS app</li>
												<li>One time payment</li>
											</ul>
											<a href="#" class="btn btn-lg btn-outline-default">Start</a>
										</div>
									</div><!-- /.pricing-box -->
				        </div><!-- /.col-md-3 -->

								<div class="col-12 col-md-3">
									<div class="pricing-box featured-pricing-box">
										<header>
											<h6>Publish Pro</h6>
											<span class="h1 sub-heading-font-family fw-300">250<sub>&#8364;</sub></span>
										</header><hr />
										<div class="pricing-box-content">
											<ul class="list-unstyled text-center">
												<li>iOS App</li>
												<li>Android App</li>
												<li>Build &amp; Publish</li>
												<li>One time payment</li>
											</ul>

											<h6 class="mr-t-50 mr-b-30">All extensions included<br /><small>Save more than 200&#8364;!</small></h6>
											<a href="#" class="btn btn-lg btn-primary">Buy Now</a>
										</div>
									</div><!-- /.pricing-box -->
				        </div><!-- /.col-md-3 -->

								<div class="col-12 col-md-3">
									<div class="pricing-box">
										<header>
											<h6>Publish</h6>
											<span class="h1 sub-heading-font-family fw-300">150<sub>&#8364;</sub></span>
										</header><hr />
										<div class="pricing-box-content">
											<ul class="list-unstyled text-center">
												<li>iOS App</li>
												<li>Android App</li>
												<li>Build &amp; Publish</li>
												<li>One time payment</li>
											</ul>
											<a href="#" class="btn btn-lg btn-outline-default">Buy Now</a>
										</div>
									</div><!-- /.pricing-box -->
				        </div><!-- /.col-md-3 -->

								<div class="col-12 col-md-3">
									<div class="pricing-box featured-pricing-box-2 bg-color-scheme">
										<header>
											<h5>Enterprise</h5>
											<p class="header-text">A solution for<br />professionals</p>
										</header>
										<hr class="bg-white" />
										<div class="pricing-box-content">
											<ul class="list-unstyled text-center">
												<li>Built Prices</li>
												<li>Custom Features</li>
												<li>Include your branding</li>
												<li>Private Developer Accounts</li>
											</ul>
											<a href="#" class="btn btn-lg btn-outline-default">Contact</a>
										</div>
									</div><!-- /.pricing-box -->
				        </div><!-- /.col-md-3 -->

							</div><!-- /.row -->



			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
