<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Widgets Statistics',
	'body_class' => $GLOBALS['body_class'] . '',
	'scripts' => array(
		'counterup',
		'waypoints',
		'charts-js',
		'chart-js-bundle',
		'chart-js-utility',
		'knob',
		'knob-excanvas',
    'mithril',
		'moment',
		'underscore',
		'clndr',
		'jqueryui',
		'morris-charts',
		'morris-raphael',
		'flot-charts',
		'flot-time-plugin',
		'sparkline'
	),
	'styles' => array(
		'weather-icons',
		'weather-icons-wind',
		'morris-css'
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

			<div class="row">

				<div class="col-md-12">
					<h5 class="box-title mr-b-0">Counter Stats</h5>
					<p class="text-muted">Boxes with counter and icons</p>
				</div><!-- /.widget-list-title -->

				<!-- Counter: Sales -->
				<div class="col-md-3 col-sm-6 widget-holder">
					<div class="widget-bg bg-primary text-inverse">
			      <div class="widget-body clearfix">

							<div class="widget-counter">
	              <h6>
	                Total Sales
	                <small class="text-inverse">Last week</small>
	              </h6>
	              <h3 class="h1">&dollar;<span class="counter">741</span></h3>
	              <i class="material-icons list-icon">add_shopping_cart</i>
	            </div><!-- /.widget-counter -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Counter: Subscriptions -->
	      <div class="col-md-3 col-sm-6 widget-holder">
					<div class="widget-bg bg-color-scheme text-inverse">
			      <div class="widget-body clearfix">

	            <div class="widget-counter">
	              <h6>
	                New Subscriptions
	                <small class="text-inverse">Last month</small>
	              </h6>
	              <h3 class="counter h1">346</h3>
	              <i class="material-icons list-icon">event_available</i>
	            </div><!-- /.widget-counter -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Counter: Users -->
	      <div class="col-md-3 col-sm-6 widget-holder">
					<div class="widget-bg">
			      <div class="widget-body clearfix">

	            <div class="widget-counter">
	              <h6>
	                New Users
	                <small>Last 7 days</small>
	              </h6>
	              <h3 class="counter h1">625</h3>
	              <i class="material-icons list-icon">public</i>
	            </div><!-- /.widget-counter -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Counter: Pageviews -->
	      <div class="col-md-3 col-sm-6 widget-holder">
					<div class="widget-bg">
			      <div class="widget-body clearfix">

							<div class="widget-counter">
	              <h6>
	                Total PageViews
	                <small>Last 24 Hours</small>
	              </h6>
	              <h3 class="counter h1">2748</h3>
	              <i class="material-icons list-icon">show_chart</i>
	            </div><!-- /.widget-counter -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->

			<div class="row">

				<div class="col-md-12">
					<h5 class="box-title mr-b-0">Stats Chart</h5>
					<p class="text-muted">Boxes with icons</p>
				</div><!-- /.widget-list-title -->

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

			<div class="row">

				<div class="col-md-12">
					<h5 class="box-title mr-b-0">Bar stats</h5>
					<p class="text-muted">Boxes with progress bars</p>
				</div><!-- /.widget-list-title -->

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
  							<div class="sparklineChart" id="sparklinedashbar5"></div>
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
  							<div class="sparklineChart" id="sparklinedashbar6"></div>
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
								<span class="badge badge-pill badge-color-scheme my-2 float-right">
									<span class="mr-1 fs-12">16&#37;</span>
									<i class="material-icons list-icons fs-12">arrow_drop_up</i>
								</span>
							</section>

  						<div class="clearfix">
								<div class="sparklineChart" id="sparklinedashbar7"></div>
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
  							<div class="sparklineChart" id="sparklinedashbar8"></div>
  						</div>

  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

			</div><!-- /.row -->

			<hr class="mr-b-40" />

			<div class="row">

				<!-- Sales Statistics -->
				<div class="col-md-12 widget-holder">
					<div class="widget-bg">

						<div class="widget-body clearfix">

							<div class="clearfix">
								<div class="col-sm-8 float-left">
									<div class="media">
										<div class="media-left">
											<i class="list-icon material-icons color-info fs-48 mr-t-5 mr-r-20">business</i>
										</div>

										<div class="media-body">
											<h5 class="mr-t-10 mr-b-5">Sales Statistics</h5>
											<small>It is a long established fact that a reader will be distracted by the readable content.</small>
										</div>
									</div>
								</div><!-- /.col-md-8 -->

								<div class="col-sm-4 float-right">
									<div class="form-input-icon mr-t-10">
										<i class="material-icons list-icon">search</i>
										<input class="form-control form-control-rounded" placeholder="Type to search..." type="text" />
									</div>
								</div><!-- /.col-md-4 -->
							</div><!-- /.clearfix -->

							<hr class="mr-t-30" />

							<div class="row mr-tb-10">

								<div class="col-md-4 col-sm-6 statistic-squares mr-t-10 text-center">
									<div class="row m-0">
										<div class="col-6">
											<h3 class="mr-tb-0">3814</h3>
											<small class="text-uppercase">Products Sold</small>
										</div>
										<div class="col-6">
											<h3 class="mr-tb-0">47.5K</h3>
											<small class="text-uppercase">Followers</small>
										</div>
									</div>

									<div class="row m-0">
										<div class="col-6">
											<h3 class="mr-tb-0">&dollar;95</h3>
											<small class="text-uppercase">Daily Earnings</small>
										</div>
										<div class="col-6">
											<h3 class="mr-tb-0">12</h3>
											<small class="text-uppercase">Products</small>
										</div>
									</div>
								</div><!-- /.col-md-4 -->

								<div class="col-md-4 col-sm-6">
									<ul class="list-inline text-center">
				            <li class="list-inline-item">
				              <h6><i class="fa fa-circle m-r-5" style="color: #b8edf0;"></i>&nbsp;&nbsp;Products</h6>
										</li>
				            <li class="list-inline-item">
				              <h6><i class="fa fa-circle m-r-5" style="color: #b4c1d7;"></i>&nbsp;&nbsp;Followers</h6>
										</li>
										<li class="list-inline-item">
										 <h6><i class="fa fa-circle m-r-5" style="color: #fcc9ba;"></i>&nbsp;&nbsp;Earnings</h6>
									 </li>
			            </ul>
									<div id="barMorrisWidget" style="height: 200px;" class="text-center"></div>
								</div><!-- /.col-md-4 -->

								<div class="col-md-4 hidden-sm hidden-xs">
									<h4 class="h1 mr-b-0 mr-t-10">
										245
										<span class="badge badge-pill bg-success align-middle fs-12 mr-l-10 mr-b-10">
											12% &nbsp;
											<i class="fa fa-caret-up list-icon"></i>
										</span>
									</h4>
									<p class="text-muted">Products Sold</p>

                  <div style="height: 130px">
                    <canvas id="lineWidget" height="120"></canvas>
                  </div>
								</div><!-- /.col-md-4 -->

							</div><!-- /.row -->

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->

			<div class="row">

				<div class="col-md-4 col-sm-6 widget-holder">
					<div class="widget-bg">

						<div class="widget-body clearfix">
							<div class="knob-widget text-center">
								<header>
									<p class="color-success mr-b-0 mr-t-10">Total Budget</p>
									<h2 class="mr-t-5 fw-100">&dollar;24,879</h2>
								</header>
								<hr />

								<section>
									<input data-plugin="knob" data-width="160" data-height="160" data-linecap=round data-fgColor="#51d2b7" value="75" data-skin="tron" data-angleOffset="360" data-readOnly=true data-displayInput=false data-thickness=".15" />
									<i class="list-icon fa fa-usd"></i>
								</section>

								<ul class="list-unstyled list-inline mr-t-20">
									<li class="list-inline-item">
										<h4 class="mr-t-0">75<small>&#037;</small></h4>
										<p class="color-success mr-b-0">Completed</p>
									</li>
									<li class="list-inline-item">
										<h4 class="mr-t-0">25<small>&#037;</small></h4>
										<p class="color-danger mr-b-0">Remaining</p>
									</li>
								</ul>
							</div>
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Doughnut -->
				<div class="col-md-4 col-sm-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">

							<div class="knob-widget text-center">
								<header>
									<p class="color-success mr-b-0 mr-t-10">Total Budget</p>
									<h2 class="mr-t-5 fw-100">&dollar;24,879</h2>
								</header>
								<hr />

								<section>
									<canvas id="doughnutWidget" height="170"></canvas>
									<i class="list-icon fa fa-usd"></i>
								</section>

								<ul class="list-unstyled list-inline mr-t-20">
									<li class="list-inline-item">
										<h4 class="mr-t-0">75<small>&#037;</small></h4>
										<p class="color-success mr-b-0">Completed</p>
									</li>
									<li class="list-inline-item">
										<h4 class="mr-t-0">25<small>&#037;</small></h4>
										<p class="color-danger mr-b-0">Remaining</p>
									</li>
								</ul>
							</div><!-- /.knob-widget -->

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->

		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
