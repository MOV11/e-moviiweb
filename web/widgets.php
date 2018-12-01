<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Widgets',
	'body_class' => $GLOBALS['body_class'] . '',
	'scripts' => array(
    'sparkline',
		'charts-js',
		'chart-js-bundle',
		'chart-js-utility',
		'knob',
		'knob-excanvas',
		'moment',
		'daterangepicker',
    'jqvmaps-js',
    'jqvmaps-usa',
		'slick',
		'mithril',
		'theme-widgets',
	),
	'styles' => array(
    'jqvmaps-css',
		'daterangepicker',
		'weather-icons',
		'weather-icons-wind',
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

			<!-- Social Widgets Simple -->
			<div class="row">

				<!-- Facebook Widget Simple -->
				<div class="col-md-3 widget-holder">
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
										<h4 class="my-0">42k</h4>
										<small>Friends</small>
									</li>
									<li class="col-md-6">
										<h4 class="my-0">90</h4>
										<small>Feeds</small>
									</li>
								</ul>
							</div>
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Twitter Widget Simple -->
				<div class="col-md-3 widget-holder">
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
										<h4 class="my-0">27k</h4>
										<small>Tweets</small>
									</li>
									<li class="col-md-6">
										<h4 class="my-0">15k</h4>
										<small>Followers</small>
									</li>
								</ul>
							</div>
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Social Widgets Combined -->
				<div class="col-md-6 widget-holder">
					<div class="widget-bg">

						<div class="widget-body clearfix">
							<div class="row text-center text-inverse padded-reverse widget-social">
								<a href="#" class="col-md-4 bg-facebook">
									<i class="list-icon fa fa-facebook"></i>
									<p class="mr-tb-10 opacity-05"><strong>Facebook</strong></p>
									<h4 class="my-0 opacity-08">32k</h4>
								</a>
								<a href="#" class="col-md-4 bg-twitter">
									<i class="list-icon fa fa-twitter"></i>
									<p class="mr-tb-10 opacity-05"><strong>Twitter</strong></p>
									<h4 class="my-0 opacity-08">50k</h4>
								</a>
								<a href="#" class="col-md-4 bg-dribbble">
									<i class="list-icon fa fa-dribbble"></i>
									<p class="mr-tb-10 opacity-05"><strong>Dribbble</strong></p>
									<h4 class="my-0 opacity-08">16k</h4>
								</a>
							</div>
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->

			<!-- Weather Widgets Simple -->
			<div class="row">

				<!-- Weather Card Simple with Icon -->
				<div class="col-sm-4 widget-holder">
					<div class="widget-bg bg-warning text-inverse">
						<div class="widget-body clearfix">

							<div class="weather-card-simple clearfix">
								<div class="float-left">
									<h3 class="my-0">14&deg;C</h3>
									<small>San Francisco, CA</small>
								</div>

								<div class="float-right">
									<i class="wi wi-day-cloudy-gusts"></i>
								</div>
							</div><!-- /.weather-card -->

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Weather Card Simple with Icon -->
				<div class="col-sm-4 widget-holder">
					<div class="widget-bg bg-info text-inverse">
						<div class="widget-body clearfix">

							<div class="weather-card-simple clearfix">
								<div class="float-left">
									<h3 class="my-0">14&deg;C</h3>
									<small>San Francisco, CA</small>
								</div>

								<div class="float-right">
									<i class="wi wi-day-light-wind"></i>
								</div>
							</div><!-- /.weather-card -->

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Weather Card Simple with Icon -->
				<div class="col-sm-4 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">

							<div class="weather-card-simple clearfix">
								<div class="float-left">
									<h3 class="my-0">14&deg;C</h3>
									<small>San Francisco, CA</small>
								</div>

								<div class="float-right">
									<i class="wi wi-night-sleet"></i>
								</div>
							</div><!-- /.weather-card -->

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->

			<!-- Support Ticket Widget -->
			<div class="row">

				<!-- Support Tickets -->
				<div class="col-md-12 widget-holder padded-reversed">
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
											<td class="text-center"><span class="badge badge-primary fs-12 badge-pill">24</span></td>
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
											<td class="text-center"><span class="badge badge-success fs-12 badge-pill">48</span></td>
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

			</div><!-- /.row -->

			<!-- Vector Map and User Info -->
			<div class="row">

				<!-- Vector Map: Visitors -->
				<div class="col-md-8 widget-holder">
					<div class="widget-bg bg-facebook">
						<div class="widget-body">

							<div class="row">
								<div class="col-md-12">
									<h5 class="box-title text-inverse">Visitors Map</h5>
									<p class="text-inverse">It shows the location of all the visitors to your site in the last 24 hours. Getting a free website visitor map like this is very easy - just follow the easy instructions above to create your own free visitor map, and post it to your MySpace, Blogger.com or Friendster page with one click! You can also post it on your blog or any other site!</p>
									<div class="vmap mr-b-20" style="height: 450px;"
										data-toggle="vector-map"
										data-plugin-options='{"map":"usa_en", "scaleColors" : ["#ffffff" , "#03a9f3"], "valuesSrcFile": "assets/js/sample-usa-data.json", "color": "#ddd"}'>
									</div><!-- /.vmap -->
								</div><!-- /.col-md-9 -->
							</div><!-- /.row -->

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- User Info Card -->
				<div class="col-md-4 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">

							<div class="card-user-info-widget">
								<figure class="text-center thumb-lg">
									<img class="img-circle img-thumbnail" src="assets/demo/user-cards/1.jpg" alt="">
								</figure>

								<div class="img-caption text-center">
									<h4 class="fw-700">Dustin Putnam <span class="badge badge-success badge-pill fs-12 align-middle">PRO</span></h4>
									<h4 class="fw-100">Founder</h4>
									<p class="text-muted">Greater Seattle Area</p>
								</div>

								<div class="caption-btn pd-lr-50">
									<a href="javascript:void(0);" class="btn btn-block btn-rounded btn-info">Follow</a>

									<div class="dropdown">
										<a href="javascript:void(0);" class="dropdown-toggle btn btn-block btn-rounded btn-outline-info" data-toggle="dropdown" aria-expanded="false">
											Connect <i class="fa fa-caret-down list-icon"></i>
										</a>

										<div class="dropdown-menu">
											<a class="dropdown-item" href="javascript:void(0);">
												<i class="material-icons list-icon float-left mr-r-10">date_range</i>
												History
											</a>

											<a class="dropdown-item" href="javascript:void(0);">
												<i class="material-icons list-icon float-left mr-r-10">format_list_bulleted</i>
												Detailed logs
											</a>

											<a class="dropdown-item" href="javascript:void(0);">
												<i class="material-icons list-icon float-left mr-r-10">pie_chart_outlined</i>
												Statistics
											</a>

											<div role="separator" class="dropdown-divider"></div>

											<a class="dropdown-item" href="javascript:void(0);">
												<i class="material-icons list-icon float-left mr-r-10">close</i>
												<strong>Clear list</strong>
											</a>
										</div>
									</div>
								</div>

								<section class="mr-t-30">
									<ul class="list-unstyled row padded-reverse text-center followers-details-list">
										<li class="col-6">
											<h4 class="mb-0">200</h4>
											<p class="text-muted">Connections</p>
										</li>
										<li class="col-6">
											<h4 class="mb-0">1.9M</h4>
											<p class="text-muted">Followers</p>
										</li>
									</ul>

									<ul class="list-unstyled mb-0 text-muted email-details-list">
										<li class="col-12 mr-t-20">
											<i class="list-icon fa fa-link"></i>&nbsp; linkedin.com/in/williamh...
										</li>
										<li class="col-12">
											<i class="list-icon fa fa-globe"></i>&nbsp; dustin.com
										</li>
									</ul>
								</section>
							</div><!-- /.card-user-info-widget -->

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->

			<!-- Weather Card Wide and Doughnut Widget -->
			<div class="row">

				<!-- Doughnut Widget -->
				<div class="col-md-3 widget-holder">
					<div class="widget-bg">

						<div class="widget-body clearfix">
							<div class="doughnut-widget">
                <div style="height: 180px;">
                  <canvas id="doughnutWidget" height="180"></canvas>
                </div>
								<section class="text-center">
									<h5 class="mt-0 mr-b-5">142</h5>
									<small class="text-uppercase">Total<br />Orders</small>
								</section>
							</div>
							<hr />
							<div class="doughnut-widget-details">
								<ul class="list-unstyled">
									<li>
										<i class="fa fa-circle mr-r-5" style="color: #03a9f3;"></i> Processed
									</li>
									<li>
										<i class="fa fa-circle mr-r-5" style="color: #e6614f;"></i> Cancel
									</li>
									<li>
										<i class="fa fa-circle mr-r-5" style="color: #ffcc02;"></i> Pending
									</li>
									<li>
										<i class="fa fa-circle mr-r-5" style="color: #fb9678;"></i> Extra
									</li>
									<li>
										<i class="fa fa-circle mr-r-5" style="color: #38d57a;"></i> Completed
									</li>
								</ul>
							</div>

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Weather Widget -->
				<div class="col-md-9 widget-holder">
					<div class="widget-bg pd-0">
						<div class="widget-body clearfix">

							<div class="weather-card-image">
								<figure style="background-image: url('assets/demo/weather-image/weather-city.jpg');">
									<figcaption class="image-name">
										<h6 class="text-uppercase mr-l-20 text-white">Weather Forecast</h6>
										<span class="text-white">
											<i class="wi wi-day-cloudy"></i>
											37 <sup>o</sup>
										</span>
									</figcaption>
								</figure>

								<ul class="weather-footer list-inline list-unstyled text-center">
									<li class="list-inline-item">
										<h6 class="mt-0">Sun</h6>
										<i class="wi wi-day-cloudy text-primary"></i><br/>
										<span>32<sup>o</sup></span>
									</li>
									<li class="list-inline-item">
										<h6 class="mt-0">Mon</h6>
										<i class="wi wi-day-cloudy text-danger"></i><br/>
										<span>40<sup>o</sup></span>
									</li>
									<li class="list-inline-item">
										<h6 class="mt-0">Tue</h6>
										<i class="wi wi-day-cloudy text-info"></i><br/>
										<span>25<sup>o</sup></span>
									</li>
									<li class="list-inline-item">
										<h6 class="mt-0">Wed</h6>
										<i class="wi wi-day-cloudy text-success"></i><br/>
										<span>37<sup>o</sup></span>
									</li>
									<li class="list-inline-item">
										<h6 class="mt-0">Thu</h6>
										<i class="wi wi-day-cloudy text-warning"></i><br/>
										<span>15<sup>o</sup></span>
									</li>
									<li class="list-inline-item">
										<h6 class="mt-0">Fri</h6>
										<i class="wi wi-day-cloudy"></i><br/>
										<span>21<sup>o</sup></span>
									</li>
								</ul><!-- /.weather-footer -->
							</div><!-- /.weather-card-image -->

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->

			<!-- Weather Card and Social Feed -->
			<div class="row">

				<!-- Weather Card: Icons -->
				<div class="col-12 col-sm-6 col-md-4 widget-holder">
					<div class="widget-bg">

						<div class="widget-body clearfix">
							<div class="row m-0 weather-card-default">
								<div class="col-md-6 weather-status text-info mr-t-10">
									<i class="wi wi-day-showers"></i>
									<span>73&deg;</span>
								</div>

								<div class="col-md-6 mr-b-20">
									<h6 class=" mb-0">Saturday</h6>
									<small>Paris, France</small>
								</div>

								<table class="table mb-0">
									<tbody>
										<tr>
											<td>Wind</td>
											<td class="text-muted">ESE 17 mph</td>
										</tr>
										<tr>
											<td>Humidity</td>
											<td class="text-muted">83%</td>
										</tr>
										<tr>
											<td>Pressure</td>
											<td class="text-muted">28.56 in</td>
										</tr>
										<tr>
											<td>Cloud Cover</td>
											<td class="text-muted">78%</td>
										</tr>
										<tr>
											<td>Ceiling</td>
											<td class="text-muted">25760 ft</td>
										</tr>
									</tbody>
								</table>

								<hr style="width:100%;" />

								<ul class="list-unstyled list-inline text-center">
									<li class="list-inline-item">
										<small class="text-muted">09:30</small><br />
										<i class="wi wi-day-sunny text-info"></i><br />
										<h5 class="mr-t-10">70&deg;</h5>
									</li>
									<li class="list-inline-item">
										<small class="text-muted">11:30</small><br />
										<i class="wi wi-day-cloudy text-info"></i><br />
										<h5 class="mr-t-10">72&deg;</h5>
									</li>
									<li class="list-inline-item">
										<small class="text-muted">13:30</small><br />
										<i class="wi wi-day-hail text-info"></i><br />
										<h5 class="mr-t-10">75&deg;</h5>
									</li>
									<li class="list-inline-item">
										<small class="text-muted">15:30</small><br />
										<i class="wi wi-day-sprinkle text-info"></i><br />
										<h5 class="mr-t-10">76&deg;</h5>
									</li>
								</ul>
							</div>

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Weather Card: Icon and Image -->
				<div class="col-sm-6 col-md-4 widget-holder">
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
  						</div><!-- /.weather-card-image-dark -->

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Social Feed: Twitter and Facebook -->
  			<div class="col-md-4 col-sm-6 widget-holder">
					<!-- Social Feed: Twitter -->
					<div class="widget-holder">
						<div class="widget-bg bg-twitter color-white pd-0">
							<div class="widget-body clearfix">
								<div class="twitter-widget" style="height: 220px;" data-plugin-options='{"screen_name": "elonmusk", "count": 3}'></div>
							</div><!-- /.widget-body -->
						</div><!-- /.widget-bg -->
					</div>

					<!-- Social Feed: Facebook -->
	  			<div class="widget-holder">
	  				<div class="widget-bg bg-facebook color-white pd-0">
	  		      <div class="widget-body clearfix">
	              <div class="facebook-widget" style="height: 220px;" data-plugin-options='{"user": "envato", "limit": 3}'></div>
	  		      </div><!-- /.widget-body -->
	  				</div><!-- /.widget-bg -->
	  			</div><!-- /.widget-holder -->
  			</div><!-- /.col-md-4 -->

			</div><!-- /.row -->

		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
