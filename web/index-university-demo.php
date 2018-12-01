<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Painr de Controle',
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

      <!-- Counters -->
			<div class="row">

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

				<!-- Facebook Widget Simple -->
				<div class="col-md-3 col-sm-6 widget-holder">
					<div class="widget-bg">

						<div class="widget-body clearfix">
							<div class="widget-social-ft padded-reverse">
								<header class="text-center bg-facebook  text-inverse">
									<a href="#">
										<i class="list-icon fa fa-facebook"></i>
									</a>
								</header>
								<ul class="list-unstyled list-inline row mr-b-20 text-center">
									<li class="col-md-6">
										<h4 class="mr-tb-0">42k</h4>
										<small>Friends</small>
									</li>
									<li class="col-md-6">
										<h4 class="mr-tb-0">90</h4>
										<small>Feeds</small>
									</li>
								</ul>
							</div>
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Twitter Widget Simple -->
				<div class="col-md-3 col-sm-6 widget-holder">
					<div class="widget-bg">

						<div class="widget-body clearfix">
							<div class="widget-social-ft padded-reverse">
								<header class="text-center bg-twitter text-inverse">
									<a href="#">
										<i class="list-icon fa fa-twitter"></i>
									</a>
								</header>
								<ul class="list-unstyled list-inline row mr-b-20 text-center">
									<li class="col-md-6">
										<h4 class="mr-tb-0">27k</h4>
										<small>Tweets</small>
									</li>
									<li class="col-md-6">
										<h4 class="mr-tb-0">15k</h4>
										<small>Followers</small>
									</li>
								</ul>
							</div>
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->

      <!-- Chart Group 1 -->
			<div class="row">

				<div class="col-md-8 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Students By Courses</h5>
							<ul class="list-inline text-right">
								<li class="list-inline-item mr-2">
									<h6><i class="fa fa-circle mr-1" style="color: #03A9F3;"></i>Arts</h6>
								</li>
								<li class="list-inline-item mr-2">
									<h6><i class="fa fa-circle mr-1" style="color: #E6614F;"></i>Commerce</h6>
								</li>
								<li class="list-inline-item mr-2">
									<h6><i class="fa fa-circle mr-1" style="color: #51D2B7;"></i>Science</h6>
								</li>
							</ul>

							<div id="barMorrisUniversityDemo"></div>

							<div class="col-sm-12 row mt-3 text-center sub-heading-font-family">
								<div class="col-4">
									<small>Last Week</small>
									<h3 class="mt-2">&dollar;529</h3>
								</div>
								<div class="col-4">
									<small>Last Month</small>
									<h3 class="mt-2">&dollar;754</h3>
								</div>
								<div class="col-4">
									<small>Last Year</small>
									<h3 class="mt-2">&dollar;1,249</h3>
								</div>
							</div>

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-sm-6 col-md-4 widget-holder">
					<div class="widget-bg">
			      <div class="widget-body clearfix">

							<div class="contact-info">
								<header class="text-center">
									<figure class="inline-block user--online thumb-lg">
										<img src="assets/demo/user-cards/1.jpg" class="img-circle img-thumbnail" alt="" />
									</figure>

									<h4 class="mt-1">
										<a href="#">Dustin Putnam</a>
										<span class="badge text-uppercase align-middle bg-color-scheme">Pro</span>
									</h4>

									<div class="contact-info-address">
										<i class="material-icons list-icon">location_on</i>
										<p>Charlotte, NC</p>
									</div>
								</header>

								<section class="padded-reverse">
									<h5>
										Student Status
										<small class="float-right">Role: <strong>Developer</strong></small>
									</h5>

									<div class="row text-center">
										<div class="col-4">
											<span>1,200</span><br /><small>comments</small>
										</div>

										<div class="col-4">
											<span>134</span><br /><small>courses</small>
										</div>

										<div class="col-4">
											<span>54</span><br /><small>certificates</small>
										</div>
									</div>
								</section><!-- /.padded-reverse -->

								<footer class="clearfix">
									<a href="#" class="btn btn-success btn-rounded"><i class="material-icons list-icon">done</i>	Following</a>
									<a href="#" class="float-right btn btn-default btn-rounded">Message</a>
								</footer>
							</div><!-- /.contact-info -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->

      <!-- Chart Group 2 -->
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
                        <img src="assets/demo/cards/university-1.jpeg" alt="Blog Post 1" />
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
                          <li class="list-inline-item"><a href="#"><strong>PHP</strong></a></li>
                        </ul>
                      </div>
                      <h4 class="h3 fw-300 m-1 sub-heading-font-family blog-post-title"><a href="#">PHP Development Course</a></h4>
                      <ul class="list-unstyled list-inline fs-12 text-muted mt-3">
                        <li class="list-inline-item mr-r-20"><i class="list-icon fa fa-calendar mr-r-5"></i> Duration: 6 Months</li>
                        <li class="list-inline-item mr-r-20"><i class="list-icon fa fa-user-o mr-r-5"></i> Professors: Jane Doe</li>
                        <li class="list-inline-item"><i class="list-icon fa fa-graduation-cap mr-r-5"></i> Students: 600+</li>
                      </ul>
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
                        <img src="assets/demo/cards/university-2.jpeg" alt="" />
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
                          <li class="list-inline-item"><a href="#"><strong>Android</strong></a></li>
                          <li class="list-inline-item"><a href="#"><strong>Mobile Apps</strong></a></li>
                        </ul>
                      </div>
                      <h4 class="h3 fw-300 m-1 sub-heading-font-family blog-post-title"><a href="#">Andriod Development Course</a></h4>
                      <ul class="list-unstyled list-inline fs-12 text-muted mt-3">
                        <li class="list-inline-item mr-r-20"><i class="list-icon fa fa-calendar mr-r-5"></i> Duration: 6 Months</li>
                        <li class="list-inline-item mr-r-20"><i class="list-icon fa fa-user-o mr-r-5"></i> Professors: Jane Doe</li>
                        <li class="list-inline-item"><i class="list-icon fa fa-graduation-cap mr-r-5"></i> Students: 600+</li>
                      </ul>
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
                        <img src="assets/demo/cards/university-3.jpeg" alt="" />
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
                          <li class="list-inline-item"><a href="#"><strong>Web Apps</strong></a></li>
                        </ul>
                      </div>
                      <h4 class="h3 fw-300 m-1 sub-heading-font-family blog-post-title"><a href="#">Web Development Course</a></h4>
                      <ul class="list-unstyled list-inline fs-12 text-muted mt-3">
                        <li class="list-inline-item mr-r-20"><i class="list-icon fa fa-calendar mr-r-5"></i> Duration: 6 Months</li>
                        <li class="list-inline-item mr-r-20"><i class="list-icon fa fa-user-o mr-r-5"></i> Professors: Jane Doe</li>
                        <li class="list-inline-item"><i class="list-icon fa fa-graduation-cap mr-r-5"></i> Students: 600+</li>
                      </ul>
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

		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
