<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Collapsed Sidebar',
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
		'flot-charts',
		'flot-time-plugin',
		'slick'
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
	<?php get_template_part('partials/sidebar-light') ?>

	<main class="main-wrapper clearfix">

		<?php get_page_title($config); ?>

		<!-- =================================== -->
		<!-- Different data widgets ============ -->
		<!-- =================================== -->
		<div class="widget-list">

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
  							<div class="sparklineChart" id="sparklinedashbar"></div>
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
  							<div class="sparklineChart" id="sparklinedashbar2"></div>
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
								<div class="sparklineChart" id="sparklinedashbar3"></div>
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
  							<div class="sparklineChart" id="sparklinedashbar4"></div>
  						</div>

  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

			</div>


      <!-- Statistics Widget-->
			<div class="row">

				<div class="col-md-7 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Property Stats</h5>

							<div id="barMorrisDemo"></div>
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-5 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Property Sales Income</h5>

							<div id="donuteMorrisDemo"></div>
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->

      <!-- Chart Group -->
			<div class="row">

				<!-- Blog Posts -->
        <div class="col-md-12 widget-holder">
          <div class="widget-bg-transparent">
            <div class="widget-body">

              <div class="row">
                <div class="col-md-4 d-flex">
                  <div class="blog-post blog-post-card text-center">
                    <figure>
                      <a href="#">
                        <img src="assets/demo/cards/real-estate-1.jpeg" alt="Blog Post 1" />
                      </a>
                    </figure>

                    <header>
                      <ul class="blog-post-share-links list-unstyled list-inline">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-primary ripple toggle-link"><i class="list-icon social-icons">sharethis</i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-facebook ripple"><i class="list-icon social-icons">facebook</i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-twitter ripple"><i class="list-icon social-icons">twitter</i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-dribbble ripple"><i class="list-icon social-icons">dribble</i></a></li>
                      </ul>
                      <div class="block text-muted blog-post-tags">Posted in
                        <ul class="inline-block list-unstyled list-inline">
                          <li class="list-inline-item"><a href="#"><strong>Avenue Street</strong></a></li>
                          <li class="list-inline-item"><a href="#"><strong>London</strong></a></li>
                        </ul>
                      </div>
                      <h4 class="h3 fw-300 m-1 sub-heading-font-family blog-post-title"><a href="#">4 BHK Avenue Street, Mountain View</a></h4>
                    </header>

                    <footer class="mr-t-30">
											<a href="#" class="btn btn-outline-primary btn-rounded">More Details</a>
                    </footer>
                  </div><!-- /.blog-post -->
                </div><!-- /.col-md-4 -->

								<div class="col-md-4 d-flex">
                  <div class="blog-post blog-post-card text-center">
                    <figure>
                      <a href="#">
                        <img src="assets/demo/cards/real-estate-2.jpeg" alt="" />
                      </a>
                    </figure>

                    <header>
                      <ul class="blog-post-share-links list-unstyled list-inline">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-primary ripple toggle-link"><i class="list-icon social-icons">sharethis</i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-facebook ripple"><i class="list-icon social-icons">facebook</i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-twitter ripple"><i class="list-icon social-icons">twitter</i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-dribbble ripple"><i class="list-icon social-icons">dribble</i></a></li>
                      </ul>
                      <div class="text-muted blog-post-tags">Posted in
                        <ul class="inline-block list-unstyled list-inline">
                          <li class="list-inline-item"><a href="#"><strong>Baker Street</strong></a></li>
                          <li class="list-inline-item"><a href="#"><strong>London</strong></a></li>
                        </ul>
                      </div>
                      <h4 class="h3 fw-300 m-1 sub-heading-font-family blog-post-title"><a href="#">3 BHK 221B Baker Street, London</a></h4>
                    </header>

                    <footer class="mr-t-30">
											<a href="#" class="btn btn-outline-primary btn-rounded">More Details</a>
                    </footer>
                  </div><!-- /.blog-post -->
                </div><!-- /.col-md-4 -->

								<div class="col-md-4 d-flex">
                  <div class="blog-post blog-post-card text-center">
                    <figure>
                      <a href="#">
                        <img src="assets/demo/cards/real-estate-3.jpeg" alt="" />
                      </a>
                    </figure>

                    <header>
                      <ul class="blog-post-share-links list-unstyled list-inline">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-primary ripple toggle-link"><i class="list-icon social-icons">sharethis</i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-facebook ripple"><i class="list-icon social-icons">facebook</i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-twitter ripple"><i class="list-icon social-icons">twitter</i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-dribbble ripple"><i class="list-icon social-icons">dribble</i></a></li>
                      </ul>
                      <div class="block text-muted blog-post-tags">Posted in
                        <ul class="inline-block list-unstyled list-inline">
                          <li class="list-inline-item"><a href="#"><strong>Manhattan</strong></a></li>
                          <li class="list-inline-item"><a href="#"><strong>New York</strong></a></li>
                        </ul>
                      </div>
                      <h4 class="h3 fw-300 m-1 sub-heading-font-family blog-post-title"><a href="#">5 BHK Manhattan, New York</a></h4>
                    </header>

                    <footer class="mr-t-30">
											<a href="#" class="btn btn-outline-primary btn-rounded">More Details</a>
                    </footer>
                  </div><!-- /.blog-post -->
                </div><!-- /.col-md-4 -->

              </div><!-- /.row -->
            </div><!-- /.widget-body -->
          </div><!-- /.widget-bg-transparent -->
        </div><!-- /.widget-holder -->

			</div><!-- /.user -->

      <!-- Support Tickets & Social Feeds -->
			<div class="row">

				<!-- Table: Order Status -->
  			<div class="col-md-12 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">
  						<h5 class="box-title">Property Overview</h5>

							<div class="padded-reverse">
								<table class="table widget-status-table mr-b-0">
					        <thead>
					          <tr>
					            <th class="pd-l-20">Address</th>
											<th class="hidden-sm-down">OrderId</th>
											<th>Photo</th>
											<th class="hidden-sm-down">Type</th>
					            <th class="hidden-sm-down">Date</th>
											<th>Status</th>
					            <th class="text-right pd-r-20">Actions</th>
					          </tr>
					        </thead>

					        <tbody>
					          <tr>
					            <th class="pd-l-20"><a href="#">Swanim villa</a></th>
                      <td class="hidden-sm-down">#85457898</td>
											<td><img src="assets/demo/cards/real-estate-1.jpeg" alt="" width="80"></td>
											<td class="text-muted hidden-sm-down">Sold</td>
					            <td class="text-muted hidden-sm-down">July 31,2017</td>
											<td><span class="badge badge-success text-inverse">Paid</span></td>
					            <td class="text-right">
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">edit</i></a>
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">delete</i></a>
					            </td>
					          </tr>

					          <tr>
					            <th class="pd-l-20"><a href="#">Gray Chair</a></th>
                      <td class="hidden-sm-down">#85457898</td>
											<td><img src="assets/demo/cards/real-estate-2.jpeg" alt="" width="80"></td>
											<td class="text-muted hidden-sm-down">On Rent</td>
					            <td class="text-muted hidden-sm-down">April 12, 2017</td>
											<td><span class="badge badge-warning text-inverse">Pending</span></td>
					            <td class="text-right">
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">edit</i></a>
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">delete</i></a>
					            </td>
					          </tr>

					          <tr>
					            <th class="pd-l-20"><a href="#">River view home</a></th>
                      <td class="hidden-sm-down">#85457898</td>
											<td><img src="assets/demo/cards/real-estate-3.jpeg" alt="" width="80"></td>
											<td class="text-muted hidden-sm-down">Sold</td>
					            <td class="text-muted hidden-sm-down">August 3, 2017</td>
											<td><span class="badge badge-success text-inverse">Paid</span></td>
					            <td class="text-right">
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">edit</i></a>
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">delete</i></a>
					            </td>
					          </tr>

					          <tr>
					            <th class="pd-l-20"><a href="#">Pure Wooden chair</a></th>
                      <td class="hidden-sm-down">#85457898</td>
											<td><img src="assets/demo/cards/real-estate-2.jpeg" alt="" width="80"></td>
											<td class="text-muted hidden-sm-down">On Rent</td>
					            <td class="text-muted hidden-sm-down">August 12, 2017</td>
											<td><span class="badge badge-danger text-inverse">Failed</span></td>
					            <td class="text-right">
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">edit</i></a>
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">delete</i></a>
					            </td>
					          </tr>
					        </tbody>
					      </table><!-- /.widget-status-table -->
							</div><!-- /.padded-reverse -->

  		      </div><!-- /.widget-body badge -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

			</div><!-- /.row -->

      <!-- Other Widgets -->
			<div class="row">

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
                  <div style="height: 185px">
    								<canvas id="doughnutWidget" height="185"></canvas>
                  </div>
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

        <!-- Weather -->
  			<div class="col-md-4 col-sm-6 widget-holder">
  				<div class="widget-bg pd-0">
  					<div class="widget-body clearfix">

              <div class="weather-card-image-dark text-inverse" style="background-image: url(assets/demo/cards/real-estate-2.jpeg);">

  							<div class="weather-caption">
  								<span class="h1 fw-300 sub-heading-font-family">
  									<span class="color-color-scheme">&dollar;750</span>
  								</span>
  								<h5 class="mr-t-10">
  									Home Beauty<br />
  									<small class="opacity-06">Down Payment</small>
  								</h5>
  							</div>
  							<div class="weather-date bg-color-scheme text-inverse text-center">
  								<span>May<br/><strong>21</strong></span>
  							</div>
  						</div>

  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->


				<!-- User List: User Registrations -->
  			<div class="col-md-4 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">
  						<h5 class="box-title">Recent Properties</h5>

  						<ul class="list-unstyled pt-0 mb-0 widget-user-list">
  							<li class="media">
  								<div class="d-flex mr-3">
  									<a href="#">
  										<img src="assets/demo/cards/real-estate-1.jpeg" class="" alt="" width="100"/>
  									</a>
  								</div>

  								<div class="media-body">
  									<h5 class="media-heading">
  										<a href="#">4 BHK Avenue Street, London</a>
  										<small>Oct 07, 2015 | Jon Doe</small>
  									</h5>
  								</div>
  							</li>

								<li class="media">
  								<div class="d-flex mr-3">
  									<a href="#">
  										<img src="assets/demo/cards/real-estate-2.jpeg" class="" alt="" width="100"/>
  									</a>
  								</div>

  								<div class="media-body">
  									<h5 class="media-heading">
  										<a href="#">3 BHK 221B Baker Street</a>
  										<small>Jun 21, 2017 | Jon Doe</small>
  									</h5>
  								</div>
  							</li>

								<li class="media">
  								<div class="d-flex mr-3">
  									<a href="#">
  										<img src="assets/demo/cards/real-estate-3.jpeg" class="" alt="" width="100"/>
  									</a>
  								</div>

  								<div class="media-body">
  									<h5 class="media-heading">
  										<a href="#">5 BHK Manhattan, New York</a>
  										<small>Jan 11, 2017 | Jon Doe</small>
  									</h5>
  								</div>
  							</li>

								<li class="media">
  								<div class="d-flex mr-3">
  									<a href="#">
  										<img src="assets/demo/cards/real-estate-2.jpeg" class="" alt="" width="100"/>
  									</a>
  								</div>

  								<div class="media-body">
  									<h5 class="media-heading">
  										<a href="#">4 BHK Avenue Street</a>
  										<small>Oct 07, 2015 | Jon Doe</small>
  									</h5>
  								</div>
  							</li>


  						</ul><!-- /.widget-user-list -->

  		      </div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->



			</div><!-- /.row -->

		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
