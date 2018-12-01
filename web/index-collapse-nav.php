<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Collapsed Sidebar',
	'body_class' => 'header-dark sidebar-light sidebar-collapse',
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
	),
	'styles' => array(
		'weather-icons',
		'weather-icons-wind',
    'daterangepicker',
		'morris-css',
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

			<!-- Counters and Social Widgets -->
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

      <!-- Statistics Widget-->
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

      <!-- Chart Group -->
			<div class="row">

				<!-- Charts: Tasks -->
  			<div class="col-md-4 col-sm-6 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">

              <h6 class="mr-t-0 mr-b-5 fw-700">Your Tasks</h6>
              <p class="text-muted">Calculated in the last 7 days</p>

              <div class="row text-center">
                <div class="col-6">
                  <div class="progress-stats-round text-center">
                    <input data-plugin="knob"
                      data-width="90"
                      data-height="90"
                      data-bgColor="#ebeff2"
                      data-fgColor="#fb9678"
                      data-displayInput=false
                      value="62"
                      data-readOnly=true
                      data-thickness=".05" />
                    <i class="list-icon material-icons color-primary">loyalty</i>
                    <h4 class="color-primary mr-tb-10">62%</h4>
                    <h6 class="mr-b-5 mr-t-0">Satisfaction Rate</h6>
                    <small>54% Average</small>
                  </div>
									<div class="mr-tb-20" id="homeSparkline1"></div>
                </div>

                <div class="col-6">
                  <div class="progress-stats-round text-center">
                    <input data-plugin="knob"
                      data-width="90"
                      data-height="90"
                      data-bgColor="#ebeff2"
                      data-fgColor="#03a9f3"
                      data-displayInput=false
                      value="86"
                      data-readOnly=true
                      data-thickness=".05" />
                    <i class="list-icon material-icons color-info">developer_board</i>
                    <h4 class="color-info mr-tb-10">86%</h4>
                    <h6 class="mr-b-5 mr-t-0">Productivity Goal</h6>
                    <small>82% average</small>
                  </div>
									<div class="mr-t-20" id="homeSparkline2"></div>
                </div>
              </div><!-- /.row -->

  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

  			<!-- Charts: Projects -->
  			<div class="col-md-4 col-sm-6 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">

  						<h6 class="mr-t-0 mr-b-5 fw-700">Your Projects</h6>
  						<p class="text-muted">Calculated in the last 30 days</p>

  						<div id="siteVisitMorris" style="margin-left:-15px; margin-right:-15px; height: 270px;"></div>

  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

				<!-- Social Feed: Facebook -->
  			<div class="col-md-4 hidden-xs hidden-sm widget-holder">
  				<div class="widget-bg bg-facebook color-white pd-0">
  		      <div class="widget-body clearfix">

              <div class="facebook-widget" style="height: 370px;" data-plugin-options='{"user": "envato", "limit": 3}'></div>

  		      </div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

			</div><!-- /.user -->

      <!-- Support Tickets & Social Feeds -->
			<div class="row">

				<!-- Support Tickets -->
				<div class="col-md-9 widget-holder padded-reversed">
					<div class="widget-bg">
						<div class="widget-heading">
							<h5>Support Tickets</h5>

							<ul class="widget-actions">
								<li class="dropdown">
									<div class="predefinedRanges float-right fs-13 fw-500" style="cursor: pointer;">
										<i class="list-icon material-icons color-danger">fiber_manual_record</i>
										<span></span>
										<i class="list-icon material-icons">expand_more</i>
									</div>
								</li>
							</ul><!-- /.widget-actions -->
						</div><!-- /.widget-heading -->

						<div class="widget-body">
							<div class="padded-reverse">
								<table class="table">
									<thead>
										<tr>
											<th class="text-center" style="width: 70px;">Due</th>
											<th style="width: 30%">User</th>
											<th>Description</th>
											<th class="text-center" style="width: 80px;"><i class="material-icons">expand_more</i></th>
										</tr>
									</thead>

									<tbody>
										<tr class="table-active">
											<td class="pd-l-20" colspan="3">Active Tickets</td>
											<td class="text-center"><span class="badge badge-primary badge-pill fs-12 px-2">24</span></td>
										</tr>

										<tr>
											<td class="text-center"><span class="text-center lh-14">12<small class="block text-muted fs-12">hours</small></span></td>
											<td>
												<div class="media">
													<div class="d-flex mr-3">
														<a href="#" class="thumb-xs">
															<img src="assets/demo/users/user1.jpg" class="block media-object img-circle" alt="" />
														</a>
													</div><!-- /.media-left -->
													<div class="media-body">
														<h6 class="media-heading mb-0 mr-t-5"><a href="#" class="color-content">Chris Macintyre</a></h6>
														<small><i class="material-icons fs-12 mr-r-5 color-info">label_outline</i> Active</small>
													</div><!-- /.media-body -->
												</div><!-- /.media -->
											</td>

											<td>
												<h6 class="mb-0 mr-t-5 content-font-family"><a href="#" class="color-content">[#1223] In ante magna, hendrerit sed est id</a></h6>
												<p class="mb-0"><a href="#" class="text-muted">Fusce maximus posuere est at dictum. Morbi vulputate tellus nulla</a></p>
											</td>
											<td class="text-center">
												<div class="dropdown">
													<a class="color-content" data-toggle="dropdown" href="javascript:void(0)"><i class="material-icons md-18">menu</i></a>
													<div class="dropdown-menu dropdown-left">
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">reply</i>Reply Ticket</a>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">history</i>Full History</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">check</i>Resolve Issue</a>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">remove</i>Close Issue</a>
													</div><!-- /.dropdown-menu -->
												</div><!-- /.dropdown -->
											</td>
										</tr>

										<tr>
											<td class="text-center"><span class="text-center lf-14">16<small class="block text-muted fs-12">hours</small></span></td>
											<td>
												<div class="media">
													<div class="d-flex mr-3">
														<a href="#" class="thumb-xs">
															<span class="user-char-image bg-info"><i>R</i></span>
														</a>
													</div><!-- /.media-left -->
													<div class="media-body">
														<h6 class="media-heading mb-0 mr-t-5"><a href="#" class="color-content">Robert Hauber</a></h6>
														<small><i class="material-icons fs-12 mr-r-5 color-info">label_outline</i> Active</small>
													</div><!-- /.media-body -->
												</div><!-- /.media -->
											</td>

											<td>
												<h6 class="mb-0 mr-t-5 content-font-family"><a href="#" class="color-content">[#1217] Aliquam placerat bibendum elit nec semper.</a></h6>
												<p class="mb-0"><a href="#" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
											</td>
											<td class="text-center">
												<div class="dropdown">
													<a class="color-content" data-toggle="dropdown" href="javascript:void(0)"><i class="material-icons md-18">menu</i></a>
													<div class="dropdown-menu dropdown-left">
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">reply</i>Reply Ticket</a>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">history</i>Full History</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">check</i>Resolve Issue</a>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">remove</i>Close Issue</a>
													</div><!-- /.dropdown-menu -->
												</div><!-- /.dropdown -->
											</td>
										</tr>

										<tr>
											<td class="text-center"><span class="text-center lh-14">2<small class="block text-muted fs-12">Day</small></span></td>
											<td>
												<div class="media">
													<div class="d-flex mr-3">
														<a href="#" class="thumb-xs">
															<span class="user-char-image bg-primary"><i>J</i></span>
														</a>
													</div><!-- /.media-left -->
													<div class="media-body">
														<h6 class="media-heading mb-0 mr-t-5"><a href="#" class="color-content">Johnathan Fury</a></h6>
														<small><i class="material-icons fs-12 mr-r-5 color-info">label_outline</i> Active</small>
													</div><!-- /.media-body -->
												</div><!-- /.media -->
											</td>
											<td>
												<h6 class="mb-0 mr-t-5 content-font-family"><a href="#" class="color-content">[#1211] Praesent leo mi, gravida sit amet velit sed</a></h6>
												<p class="mb-0"><a href="#" class="text-muted">Mauris id justo ut arcu malesuada scelerisque semper ac ex</a></p>
											</td>
											<td class="text-center">
												<div class="dropdown">
													<a class="color-content" data-toggle="dropdown" href="javascript:void(0)"><i class="material-icons md-18">menu</i></a>
													<div class="dropdown-menu dropdown-left">
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">reply</i>Reply Ticket</a>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">history</i>Full History</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">check</i>Resolve Issue</a>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">remove</i>Close Issue</a>
													</div><!-- /.dropdown-menu -->
												</div><!-- /.dropdown -->
											</td>
										</tr>

										<tr>
											<td class="text-center"><span class="text-center lh-14">3<small class="block text-muted fs-12">Day</small></span></td>
											<td>
												<div class="media">
													<div class="d-flex mr-3">
														<a href="#" class="thumb-xs">
															<img src="assets/demo/user-cards/1.jpg" class="block media-object img-circle" alt="" />
														</a>
													</div><!-- /.media-left -->
													<div class="media-body">
														<h6 class="media-heading mb-0 mr-t-5"><a href="#" class="color-content">Eddie Lebanovski</a></h6>
														<small><i class="material-icons fs-12 mr-r-5 color-info">label_outline</i> Active</small>
													</div><!-- /.media-body -->
												</div><!-- /.media -->
											</td>
											<td>
												<h6 class="mb-0 mr-t-5 content-font-family"><a href="#" class="color-content">[#1193] Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></h6>
												<p class="mb-0"><a href="#" class="text-muted">Nulla ac sem at ex lobortis luctus ac nec lorem. In dolor ligula</a></p>
											</td>
											<td class="text-center">
												<div class="dropdown">
													<a class="color-content" data-toggle="dropdown" href="javascript:void(0)"><i class="material-icons md-18">menu</i></a>
													<div class="dropdown-menu dropdown-left">
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">reply</i>Reply Ticket</a>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">history</i>Full History</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">check</i>Resolve Issue</a>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">remove</i>Close Issue</a>
													</div><!-- /.dropdown-menu -->
												</div><!-- /.dropdown -->
											</td>
										</tr>

										<tr class="table-active">
											<td class="pd-l-20" colspan="3">Resolved Tickets</td>
											<td class="text-center"><span class="badge badge-success badge-pill fs-12 px-2">48</span></td>
										</tr>

										<tr>
											<td class="text-center">
												<i class="material-icons md-24 color-success mr-t-5">check</i>
											</td>
											<td>
												<div class="media">
													<div class="d-flex mr-3">
														<a href="#" class="thumb-xs">
															<span class="user-char-image bg-warning"><i>E</i></span>
														</a>
													</div><!-- /.media-left -->
													<div class="media-body">
														<h6 class="media-heading mb-0 mr-t-5"><a href="#" class="color-content">Emily Wilson</a></h6>
														<small><i class="material-icons fs-12 mr-r-5 color-success">label_outline</i> Resolved</small>
													</div><!-- /.media-body -->
												</div><!-- /.media -->
											</td>
											<td>
												<h6 class="mb-0 mr-t-5 content-font-family fw-400"><a href="#" class="color-content">[#1090] Nullam consectetur venenatis tristique</a></h6>
												<p class="mb-0"><a href="#" class="text-muted">Aliquam mollis tellus sit amet pretium molestie</a></p>
											</td>
											<td class="text-center">
												<div class="dropdown">
													<a class="color-content" data-toggle="dropdown" href="javascript:void(0)"><i class="material-icons md-18">menu</i></a>
													<div class="dropdown-menu dropdown-left">
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">reply</i>Reply Ticket</a>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">history</i>Full History</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">check</i>Resolve Issue</a>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">remove</i>Close Issue</a>
													</div><!-- /.dropdown-menu -->
												</div><!-- /.dropdown -->
											</td>
										</tr>

										<tr>
											<td class="text-center">
												<i class="material-icons md-24 color-success mr-t-5">check</i>
											</td>
											<td>
												<div class="media">
													<div class="d-flex mr-3">
														<a href="#" class="thumb-xs">
															<span class="user-char-image bg-danger"><i>E</i></span>
														</a>
													</div><!-- /.media-left -->
													<div class="media-body">
														<h6 class="media-heading mb-0 mr-t-5"><a href="#" class="color-content">Emma Osment</a></h6>
														<small><i class="material-icons fs-12 mr-r-5 color-success">label_outline</i> Resolved</small>
													</div><!-- /.media-body -->
												</div><!-- /.media -->
											</td>
											<td>
												<h6 class="mb-0 mr-t-5 content-font-family fw-400"><a href="#" class="color-content">[#1065] Morbi sagittis nibh ac aliquet blandit</a></h6>
												<p class="mb-0"><a href="#" class="text-muted">Maecenas risus eros, mattis vel euismod quis, facilisis quis odio</a></p>
											</td>
											<td class="text-center">
												<div class="dropdown">
													<a class="color-content" data-toggle="dropdown" href="javascript:void(0)"><i class="material-icons md-18">menu</i></a>
													<div class="dropdown-menu dropdown-left">
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">reply</i>Reply Ticket</a>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">history</i>Full History</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">check</i>Resolve Issue</a>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">remove</i>Close Issue</a>
													</div><!-- /.dropdown-menu -->
												</div><!-- /.dropdown -->
											</td>
										</tr>

										<tr>
											<td class="text-center">
												<i class="material-icons md-24 color-success mr-t-5">check</i>
											</td>
											<td>
												<div class="media">
													<div class="d-flex mr-3">
														<a href="#" class="thumb-xs">
															<img src="assets/demo/user-cards/4.jpg" class="block media-object img-circle" alt="" />
														</a>
													</div><!-- /.media-left -->
													<div class="media-body">
														<h6 class="media-heading mb-0 mr-t-5"><a href="#" class="color-content">Lucy Wilson</a></h6>
														<small><i class="material-icons fs-12 mr-r-5 color-success">label_outline</i> Resolved</small>
													</div><!-- /.media-body -->
												</div><!-- /.media -->
											</td>
											<td>
												<h6 class="mb-0 mr-t-5 content-font-family fw-400"><a href="#" class="color-content">[#1055] Fusce eleifend ante in libero pulvinar rhoncus</a></h6>
												<p class="mb-0"><a href="#" class="text-muted">Morbi suscipit lacus libero, ac pretium sem efficitur vitae</a></p>
											</td>
											<td class="text-center">
												<div class="dropdown">
													<a class="color-content" data-toggle="dropdown" href="javascript:void(0)"><i class="material-icons md-18">menu</i></a>
													<div class="dropdown-menu dropdown-left">
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">reply</i>Reply Ticket</a>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">history</i>Full History</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">check</i>Resolve Issue</a>
														<a class="dropdown-item" href="#"><i class="material-icons md-18 mr-r-10">remove</i>Close Issue</a>
													</div><!-- /.dropdown-menu -->
												</div><!-- /.dropdown -->
											</td>
										</tr>

									</tbody>
								</table>

							</div><!-- /.padded-reverse -->
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

  			<!-- Social Feed: Twitter and Contact Info -->
  			<div class="col-md-3 col-sm-6">
					<div class="widget-holder">
						<div class="widget-bg bg-twitter color-white pd-0">
	  		      <div class="widget-body clearfix">

	              <div class="twitter-widget" style="height: 240px;" data-plugin-options='{"screen_name": "elonmusk", "count": 3}'></div>

	  		      </div><!-- /.widget-body -->
	  				</div><!-- /.widget-bg -->
	  			</div><!-- /.widget-holder -->

					<!-- Contact Info -->
					<div class="widget-holder">
						<div class="widget-bg">
							<div class="widget-body clearfix">

								<div class="contact-info">
									<header class="text-center">
										<figure class="inline-block user--online thumb-lg">
											<img src="assets/demo/user-cards/11.jpg" class="img-circle img-thumbnail" alt="" />
										</figure>

										<h4 class="mt-1">
											<a href="#">Eddie Lebanovskiy</a>
										</h4>

										<div class="contact-info-address">
											<i class="material-icons list-icon">location_on</i>
											<p>Charlotte, NC</p>
										</div>
									</header>

									<footer class="clearfix">
										<a href="#" class="float-left btn btn-success btn-rounded"><i class="material-icons list-icon">done</i>	Following</a>
										<a href="#" class="float-right btn btn-default btn-rounded">Message</a>
									</footer>
								</div><!-- /.contact-info -->

							</div><!-- /.widget-body -->
						</div><!-- /.widget-bg -->
					</div><!-- /.widget-holder -->
				</div><!-- /.Twitter and Contact Info -->

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

              <div class="weather-card-image-dark text-inverse" style="background-image: url(assets/demo/weather-image/weather-cloud.jpg);">
  							<i class="wi wi-showers"></i>
  							<div class="weather-caption">
  								<span class="h1 fw-300 sub-heading-font-family">
  									<span class="color-color-scheme">75&deg;</span>
  								</span>
  								<h5 class="mr-t-10">
  									Cloudy Skies<br />
  									<small class="opacity-06">Sicklervilte, New Jersey</small>
  								</h5>
  							</div>
  							<div class="weather-date bg-color-scheme text-inverse text-center">
  								<span>May<br/><strong>21</strong></span>
  							</div>
  						</div>

  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

  			<!-- To Do -->
        <div class="col-md-4 col-sm-12 widget-holder">
          <div class="widget-bg">
            <div class="widget-body">
  						<h5 class="box-title">To do Widget</h5>

              <div class="todo-widget">
                <ol>
                  <li data-checked="true">Lorem ipsum dolor sit amet</li>
                  <li>Nunc est metus, hendrerit ac.</li>
                  <li>Ut feugiat sed velit quis molestie.</li>
                  <li>Suspendisse ac risus ac arcu.</li>
									<li>hendrerit ac sollicitudin vel.</li>
                </ol>
              </div><!-- /.todo-widget -->

            </div><!-- /.widget-body -->
          </div><!-- /.widget-bg -->
        </div><!-- /.widget-holder -->

			</div><!-- /.row -->

			<!-- List and Table Widgets -->
			<div class="row">

				<!-- User List: User Registrations -->
  			<div class="col-md-5 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">
  						<h5 class="box-title">User Registrations</h5>

  						<ul class="list-unstyled widget-user-list">
  							<li class="media">
  								<div class="d-flex mr-3">
  									<a href="#" class="user--online thumb-xs">
  										<img src="assets/demo/users/user1.jpg" class="img-circle" alt="" />
  									</a>
  								</div>

  								<div class="media-body">
  									<a href="#" class="btn btn-outline-default" >Follow</a>
  									<h5 class="media-heading">
  										<a href="#">Nick Lampard</a>
  										<small>@kingnick24</small>
  									</h5>
  								</div>
  							</li>

  							<li class="media">
  								<div class="d-flex mr-3">
  									<a href="#" class="user--busy thumb-xs">
  										<img src="assets/demo/users/user2.jpg" class="img-circle" alt="" />
  									</a>
  								</div>

  								<div class="media-body">
  									<a href="#" class="btn btn-success">Following</a>
  									<h5 class="media-heading">
  										<a href="#">Ashley Wilson</a>
  										<small>@AshWilson123</small>
  									</h5>
  								</div>
  							</li>

  							<li class="media">
  								<div class="d-flex mr-3">
  									<a href="#" class="user--online thumb-xs">
  										<img src="assets/demo/users/user3.jpg" class="img-circle" alt="" />
  									</a>
  								</div>

  								<div class="media-body">
  									<a href="#" class="btn btn-outline-default" >Follow</a>
  									<h5 class="media-heading">
  										<a href="#">Shannon Wang Lee</a>
  										<small>@Shalee_42</small>
  									</h5>
  								</div>
  							</li>

  							<li class="media">
  								<div class="d-flex mr-3">
  									<a href="#" class="user--away thumb-xs">
  										<img src="assets/demo/users/user6.jpg" class="img-circle" alt="" />
  									</a>
  								</div>

  								<div class="media-body">
  									<a href="#" class="btn btn-outline-default" >Follow</a>
  									<h5 class="media-heading">
  										<a href="#">Emily Lee</a>
  										<small>@emilyLee</small>
  									</h5>
  								</div>
  							</li>

								<li class="media">
  								<div class="d-flex mr-3">
  									<a href="#" class="user--online thumb-xs">
  										<img src="assets/demo/users/user-image.png" class="img-circle" alt="" />
  									</a>
  								</div>

  								<div class="media-body">
  									<a href="#" class="btn btn-outline-default" >Follow</a>
  									<h5 class="media-heading">
  										<a href="#">Scott Adams</a>
  										<small>@scott_adams</small>
  									</h5>
  								</div>
  							</li>
  						</ul><!-- /.widget-user-list -->

  		      </div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

  			<!-- Table: Order Status -->
  			<div class="col-md-7 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">
  						<h5 class="box-title">Order Status</h5>

							<div class="padded-reverse">
								<table class="table table-striped widget-status-table mr-b-0">
					        <thead>
					          <tr>
					            <th class="pd-l-20">Orders</th>
					            <th>Status</th>
					            <th class="hidden-xs">Date</th>
					            <th class="text-right pd-r-20">Actions</th>
					          </tr>
					        </thead>

					        <tbody>
					          <tr>
					            <th class="pd-l-20"><a href="#">Tarcho Tee</a></th>
					            <td><span class="badge badge-info text-inverse">Complete</span></td>
					            <td class="text-muted hidden-xs">July 31,2017</td>
					            <td class="text-right">
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">edit</i></a>
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">delete</i></a>
					            </td>
					          </tr>

					          <tr>
					            <th class="pd-l-20"><a href="#">Athlete Tee</a></th>
					            <td><span class="badge badge-danger text-inverse">Pending</span></td>
					            <td class="text-muted hidden-xs">April 12, 2017</td>
					            <td class="text-right">
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">edit</i></a>
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">delete</i></a>
					            </td>
					          </tr>

					          <tr>
					            <th class="pd-l-20"><a href="#">Namche Zip Tee</a></th>
					            <td><span class="badge badge-warning text-inverse">Delivered</span></td>
					            <td class="text-muted hidden-xs">August 3, 2017</td>
					            <td class="text-right">
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">edit</i></a>
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">delete</i></a>
					            </td>
					          </tr>

					          <tr>
					            <th class="pd-l-20"><a href="#">Asaar Jacket</a></th>
					            <td><span class="badge badge-info text-inverse">Complete</span></td>
					            <td class="text-muted hidden-xs">August 12, 2017</td>
					            <td class="text-right">
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">edit</i></a>
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">delete</i></a>
					            </td>
					          </tr>

					          <tr>
					            <th class="pd-l-20"><a href="#">Everest Zip Jacket</a></th>
					            <td><span class="badge badge-danger text-inverse">Pending</span></td>
					            <td class="text-muted hidden-xs">March 1, 2017</td>
					            <td class="text-right">
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">edit</i></a>
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">delete</i></a>
					            </td>
					          </tr>

					          <tr>
					            <th class="pd-l-20"><a href="#">Namche Zip Tee</a></th>
					            <td><span class="badge badge-warning text-inverse">Delivered</span></td>
					            <td class="text-muted hidden-xs">August 3, 2017</td>
					            <td class="text-right">
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">edit</i></a>
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">delete</i></a>
					            </td>
					          </tr>

										<tr>
					            <th class="pd-l-20"><a href="#">Tarcho Tee</a></th>
					            <td><span class="badge badge-info text-inverse">Complete</span></td>
					            <td class="text-muted hidden-xs">July 31,2017</td>
					            <td class="text-right">
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">edit</i></a>
					              <a href="#"><i class="material-icons list-icon md-18 text-muted">delete</i></a>
					            </td>
					          </tr>

										<tr>
					            <th class="pd-l-20"><a href="#">Namche Zip Tee</a></th>
					            <td><span class="badge badge-warning text-inverse">Delivered</span></td>
					            <td class="text-muted hidden-xs">August 3, 2017</td>
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

		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
