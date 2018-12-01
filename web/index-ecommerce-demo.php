<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Painel de Controle',
	'body_class' => $GLOBALS['body_class'] . '',
	'scripts' => array(
		'counterup',
		'waypoints',
		'charts-js',
		'chart-js-bundle',
		'chart-js-utility',
		'knob',
		'sparkline',
		'knob-excanvas',
    'mithril',
    'theme-widgets',
		'moment',
		'underscore',
		'clndr',
		'jqueryui',
		'morris-charts',
		'morris-raphael',
    'daterangepicker',
    'slick',
		'flot-charts',
		'flot-time-plugin'
	),
	'styles' => array(
		'weather-icons',
		'weather-icons-wind',
    'daterangepicker',
		'morris-css',
    'slick',
    'slick-theme'
	)
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

			<!-- Chart and Map Widget -->
			<div class="row">

				<div class="col-lg-3 col-sm-6 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">
  						<span class="text-muted text-uppercase fw-500">All Products</span>

							<section class="mb-5">
								<h3 class="m-0 sub-heading-font-family fw-300 float-left">83&#37;</h3>
								<span class="badge badge-pill badge-info my-2 float-right">
									<span class="mr-1 fs-12">32&#37;</span>
									<i class="material-icons list-icons fs-12">arrow_drop_up</i>
								</span>
							</section>

  						<div class="clearfix">
  							<div class="sparklineChart" id="sparklinedash"></div>
  						</div>

  		      </div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

  			<div class="col-lg-3 col-sm-6 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">
							<span class="text-muted text-uppercase fw-500">Defective Products</span>

							<section class="mb-5">
								<h3 class="m-0 sub-heading-font-family fw-300 float-left">36&#37;</h3>
								<span class="badge badge-pill badge-danger my-2 float-right">
									<span class="mr-1 fs-12">8&#37;</span>
									<i class="material-icons list-icons fs-12">arrow_drop_down</i>
								</span>
							</section>

  						<div class="clearfix">
  							<div class="sparklineChart" id="sparklinedash2"></div>
  						</div>

  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

  			<div class="col-lg-3 col-sm-6 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">
								<span class="text-muted text-uppercase fw-500">Tested Products</span>

							<section class="mb-5">
								<h3 class="m-0 sub-heading-font-family fw-300 float-left">42&#37;</h3>
								<span class="badge badge-pill badge-success my-2 float-right">
									<span class="mr-1 fs-12">16&#37;</span>
									<i class="material-icons list-icons fs-12">arrow_drop_up</i>
								</span>
							</section>

  						<div class="clearfix">
								<div class="sparklineChart" id="sparklinedash3"></div>
  						</div>

  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

  			<div class="col-lg-3 col-sm-6 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">
							<span class="text-muted text-uppercase fw-500">Products For Sale</span>

							<section class="mb-5">
								<h3 class="m-0 sub-heading-font-family fw-300 float-left">56&#37;</h3>
								<span class="badge badge-pill badge-primary my-2 float-right">
									<span class="mr-1 fs-12">24&#37;</span>
									<i class="material-icons list-icons fs-12">arrow_drop_up</i>
								</span>
							</section>

  						<div class="clearfix">
  							<div class="sparklineChart" id="sparklinedash4"></div>
  						</div>

  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

			</div><!-- /.row -->

			<!-- Contact, Pricing and Table Widgets -->
			<div class="row">

				<div class="col-md-8 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Product Sales</h5>

							<div id="movingLineFlot" style="height:400px;"></div>
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-4 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Order Status</h5>

							<div style="height: 270px;">
								<canvas id="chartJsDoughnutDemo"></canvas>
							</div>

							<ul class="list-inline mt-4 text-center">
                <li class="list-inline-item">
                  <h5 class="text-muted h6 mr-3"><i class="fa fa-circle" style="color: #38d57a;"></i>&nbsp;&nbsp;Order</h5>
                  <h4 class="mb-0">120</h4>
                </li>
                <li class="list-inline-item">
                  <h5 class="text-muted h6 mr-3"><i class="fa fa-circle" style="color: #fb9678;"></i>&nbsp;&nbsp;Pending</h5>
                  <h4 class="mb-0">100</h4>
                </li>
                <li class="list-inline-item">
                  <h5 class="text-muted h6"> <i class="fa fa-circle" style="color: #5793f3;"></i>&nbsp;&nbsp;Delivered</h5>
                  <h4 class="mb-0">300</h4>
                </li>
              </ul>
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->

			<!-- Chart Group -->
			<div class="row">

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Product Gallery</h5>

							<div class="row">
								<div class="col-md-4">
									<div class="text-center user-card">
										<figure class="user-card-hover-social">
											<img src="assets/demo/e-commerce/1.jpg" alt="" />

											<ul class="social-icons-list list-inline">
												<li class="list-inline-item"><a href="#" class="btn btn-outline-inverse"><i class="list-icon material-icons fs-22">shopping_cart</i></a></li>
											</ul>
										</figure>

										<div class="user-card-details">
											<h4>I-Pod</h4>
											<a href="#"><span class="user-role badge badge-pill bg-color-scheme">Details</span></a>
										</div>
									</div>
								</div><!-- /.col-md-4 -->

								<div class="col-md-4">
									<div class="text-center user-card">
										<figure class="user-card-hover-social">
											<img src="assets/demo/e-commerce/3.jpg" alt="" />

											<ul class="social-icons-list list-inline">
												<li class="list-inline-item"><a href="#" class="btn btn-outline-inverse"><i class="list-icon material-icons fs-22">shopping_cart</i></a></li>
											</ul>
										</figure>

										<div class="user-card-details">
											<h4>Speakers</h4>
											<a href="#"><span class="user-role badge badge-pill bg-color-scheme">Details</span></a>
										</div>
									</div>
								</div><!-- /.col-md-4 -->

								<div class="col-md-4">
									<div class="text-center user-card">
										<figure class="user-card-hover-social">
											<img src="assets/demo/e-commerce/4.jpg" alt="" />

											<ul class="social-icons-list list-inline">
												<li class="list-inline-item"><a href="#" class="btn btn-outline-inverse"><i class="list-icon material-icons fs-22">shopping_cart</i></a></li>
											</ul>
										</figure>

										<div class="user-card-details">
											<h4>Apple PC</h4>
											<a href="#"><span class="user-role badge badge-pill bg-color-scheme">Details</span></a>
										</div>
									</div>
								</div><!-- /.col-md-4 -->
							</div><!-- /.row -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.user -->

			<!-- Weather and Knob Widget -->
			<div class="row">

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">More Products</h5>

							<div class="row">
								<div class="col-md-3">
									<div class="user-card user-card-masonry">
										<figure>
											<img src="assets/demo/e-commerce/1.jpg" alt="" />
										</figure>

										<div class="user-card-details">
											<h4>Apple I-Pod</h4>
											<span class="user-role">Great Experience</span>

											<ul class="social-icons-list list-inline mt-1">
												<li class="list-inline-item"><a href="#" class="btn btn-sm btn-outline-inverse"><i class="list-icon material-icons fs-22">shopping_cart</i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- /.col-md-3 -->

								<div class="col-md-3">
									<div class="user-card user-card-masonry user-card-masonry-up">
										<div class="user-card-details">
											<h4>Speakers</h4>
											<span class="user-role">Awesome Sound Experience</span>

											<ul class="social-icons-list list-inline mt-1">
												<li class="list-inline-item"><a href="#" class="btn btn-sm btn-outline-inverse"><i class="list-icon material-icons fs-22">shopping_cart</i></a></li>
											</ul>
										</div>

										<figure>
											<img src="assets/demo/e-commerce/3.jpg" alt="" />
										</figure>
									</div>
								</div><!-- /.col-md-3 -->

								<div class="col-md-3">
									<div class="user-card user-card-masonry">
										<figure>
											<img src="assets/demo/e-commerce/6.jpg" alt="" />
										</figure>

										<div class="user-card-details">
											<h4>Camera</h4>
											<span class="user-role">Better Photography Effects</span>

											<ul class="social-icons-list list-inline mt-1">
												<li class="list-inline-item"><a href="#" class="btn btn-sm btn-outline-inverse"><i class="list-icon material-icons fs-22">shopping_cart</i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- /.col-md-3 -->

								<div class="col-md-3">
									<div class="user-card user-card-masonry user-card-masonry-up">
										<div class="user-card-details">
											<h4>Laptop</h4>
											<span class="user-role">Very Light, Easy to Carry</span>

											<ul class="social-icons-list list-inline mt-1">
												<li class="list-inline-item"><a href="#" class="btn btn-sm btn-outline-inverse"><i class="list-icon material-icons fs-22">shopping_cart</i></a></li>
											</ul>
										</div>

										<figure>
											<img src="assets/demo/e-commerce/8.jpg" alt="" />
										</figure>
									</div>
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
