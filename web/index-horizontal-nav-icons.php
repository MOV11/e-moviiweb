<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Horizontal Navigation',
	'body_class' => 'header-centered sidebar-horizontal',
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
		'jqvmaps-js',
    'jqvmaps-usa',
		'slick',
	),
	'styles' => array(
		'weather-icons',
		'weather-icons-wind',
    'daterangepicker',
		'morris-css',
		'jqvmaps-css',
		'slick',
    'slick-theme',
	)
);

get_header($config);
?>

<div class="content-wrapper">
	<?php get_template_part('partials/sidebar-horizontal-icons') ?>

	<main class="main-wrapper clearfix">

		<?php get_page_title($config); ?>

		<!-- =================================== -->
		<!-- Different data widgets ============ -->
		<!-- =================================== -->
		<div class="widget-list">

			<!-- Chart and Map Widget -->
			<div class="row">

				<!-- Vector Map Widget -->
				<div class="col-md-7 widget-holder">
					<div class="widget-bg bg-facebook">
						<div class="widget-body">

							<div class="row">
								<div class="col-md-12">
									<h5 class="box-title text-inverse">Visitors Map</h5>
									<div class="vmap mr-b-20"
										style="height: 310px;"
										data-toggle="vector-map"
										data-plugin-options='{"map":"usa_en", "scaleColors" : ["#ffffff" , "#03a9f3"], "valuesSrcFile": "assets/js/sample-usa-data.json", "color": "#ddd"}'>
									</div><!-- /.vmap -->
								</div><!-- /.col-md-9 -->
							</div><!-- /.row -->

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Charts: Sales Statistics -->
  			<div class="col-md-5 widget-holder">
  				<div class="widget-bg">

  					<div class="widget-heading clearfix">
  		        <h5>New Sales</h5>

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

  					<div class="widget-body clearfix">
  						<div class="row">
  							<div class="col-4 mr-b-20 text-center">
  								<h6 class="h5 mr-b-0 mr-t-10">
  									<i class="list-icon material-icons mr-r-5 small">shop</i>
  									1481
  								</h6>
  								<small>orders weekly</small>
  							</div>

  							<div class="col-4 mr-b-20 text-center">
  								<h6 class="h5 mr-b-0 mr-t-10">
  									<i class="list-icon material-icons mr-r-5 small">date_range</i>
  									5,678
  								</h6>
  								<small>orders monthly</small>
  							</div>

  							<div class="col-4 mr-b-20 text-center">
  								<h6 class="h5 mr-b-0 mr-t-10">
  									<i class="list-icon material-icons small">attach_money</i>
  									27,321
  								</h6>
  								<small>orders weekly</small>
  							</div>
  						</div><!-- /.row -->

  						<div id="productLineHomeMorris" style="height: 250px;"></div>
  					</div><!-- /.widget-body -->

  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

			</div><!-- /.row -->

			<!-- Contact, Pricing and Table Widgets -->
			<div class="row">

				<!-- Contact Info -->
				<div class="hidden-xs hidden-sm col-md-3 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">

							<div class="contact-info">
								<header class="text-center">
									<figure class="inline-block user--online thumb-lg">
										<img src="assets/demo/user-cards/6.jpg" class="img-circle img-thumbnail" alt="" />
									</figure>

									<h4 class="mt-1">
										<a href="#">Emmy Wilson</a>
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

				<!-- Table: Order Status -->
  			<div class="col-sm-8 col-md-6 widget-holder">
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

					        </tbody>
					      </table><!-- /.widget-status-table -->
							</div><!-- /.padded-reverse -->

  		      </div><!-- /.widget-body badge -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

				<!-- Pricing Card -->
				<div class="hidden-xs col-sm-4 col-md-3 widget-holder">
					<div class="pricing-box my-0 featured-pricing-box-2 bg-color-scheme">
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

  			<!-- Charts: Sales -->
  			<div class="col-md-4 col-sm-12 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">

  						<h6 class="mr-t-0 mr-b-5 fw-700">Your Sales</h6>
  						<p class="text-muted">A general overview of your sales</p>

  						<div id="barMorrisDashboard" style="margin-left:-15px; margin-right:-15px; height: 270px;"></div>

  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

			</div><!-- /.user -->

			<!-- Weather and Knob Widget -->
			<div class="row">

				<!-- Weather Widget -->
				<div class="col-md-8 col-sm-12 widget-holder">
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

				<!-- Knob Widget -->
				<div class="col-md-4 col-sm-6 offset-sm-3 offset-md-0 widget-holder">
					<div class="widget-bg">

						<div class="widget-body clearfix">
							<div class="knob-widget text-center">
								<header>
									<p class="color-success mr-b-0 mr-t-10">Total Budget</p>
									<h2 class="mr-t-5 fw-100">&dollar;24,879</h2>
								</header>
								<hr />

								<section>
									<input data-plugin="knob" data-width="170" data-height="170" data-linecap=round data-fgColor="#51d2b7" value="75" data-skin="tron" data-angleOffset="360" data-readOnly=true data-displayInput=false data-thickness=".15" />
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

			</div><!-- /.row -->

      <!-- Other Widgets -->
			<div class="row">

				<!-- Doughnut Widget -->
				<div class="col-md-4 col-sm-6 offset-sm-3 offset-md-0 widget-holder">
					<div class="widget-bg">

						<div class="widget-body clearfix">
							<div class="doughnut-widget">
                <div style="height: 220px">
                  <canvas id="doughnutWidget" height="170"></canvas>
                </div>
								<section class="text-center">
									<h5 class="mr-t-0 mr-b-5 h2">142</h5>
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
										<i class="fa fa-circle mr-r-5" style="color: #38d57a;"></i> Cancel
									</li>
									<li>
										<i class="fa fa-circle mr-r-5" style="color: #ffcc02;"></i> Pending
									</li>
									<li>
										<i class="fa fa-circle mr-r-5" style="color: #e6614f;"></i> Extra
									</li>
								</ul>
							</div>

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Calender -->
  			<div class="col-lg-4 col-md-6 col-sm-12 widget-holder">
  				<div class="widget-bg bg-color-scheme color-white pd-0">
  					<div class="widget-body clearfix">

  						<div class="" data-toggle="clndr">
  							<script type="text/template" class="template">
  	              <div class="clndr-controls mr-b-20 clearfix">
  	                <h5 class="clndr-title float-left mr-tb-0">Time Machine</h5>
  	                <div class="float-right">
  	                  <div class="clndr-previous-button float-left"><i class="material-icons">chevron_left</i></div>
  	                  <div class="clndr-next-button float-right"><i class="material-icons">chevron_right</i></div>
  	                </div>
  	                <div class="text-right current-month text-uppercase"><%= month.substr(0,3) %> <%= year %></div>
  	              </div>
  	              <div class="clndr-grid">
  	                <div class="days">
  	                  <% _.each(days, function(day) { %>
  	                    <div class="text-center <%= day.classes %>" id="<%= day.id %>"><span class="day-number"><%= day.day %></span></div>
  	                  <% }); %>
  	                </div>
  	              </div><!-- /.clndr-grid -->

  	              <% if( !_.isEmpty(extras.selectedDay.events) ) { %>
  	                <div class="event-listing row">
  	                  <div class="col-3 col-sm-3">
  	                    <div class="selected-date">
  	                      <span class="date"><%= moment(extras.selectedDay.date._d).format("D") %></span>
  	                      <span class="color-color-scheme"><%= moment(extras.selectedDay.date._d).format("Do").substr(-2) %></span>
  	                    </div><!-- /.selected-date -->
  	                  </div><!-- /.col-3 -->
  	                  <div class="col-9 col-sm-9">
  	                    <% _.each(extras.selectedDay.events, function(event) { %>
  	                      <div class="event-item">
  	                        <span class="event-item-time"><%= moment(event.date).format("kk:mm") %></span>
  	                        <span class="event-item-title"><%= event.title %></span>
  	                        <span class="event-item-icon color-color-scheme"><i class="material-icons md-18"><%= event.icon%></i></span>
  	                      </div>
  	                    <% }); %>
  	                  </div><!-- /.col-9 -->
  	                </div><!-- /.event-listing -->
  	              <% } %>
  	            </script>

  							<script type="text/json" class="events">
  							{
  								"events" : [
  									{
  										"date": "2017-08-14T13:00:00+05:30",
  										"title": "Friends Golf Meet",
  										"icon": "golf_course"
  									},
  									{
  										"date": "2017-08-25T10:00:00+05:30",
  										"title": "Alumini Awards",
  										"icon": "school"
  									},
  									{
  										"date": "2017-08-25T13:00:00+05:30",
  										"title": "Meeting",
  										"icon": "business_center"
  									},
  									{
  										"date": "2017-08-04T08:00:00+05:30",
  										"title": "Friends Reunion",
  										"icon": "face"
  									},
  									{
  										"date": "2017-08-04T21:00:00+05:30",
  										"title": "Beach Party",
  										"icon": "beach_access"
  									},
  									{
  										"date": "2017-08-13T13:00:00+05:30",
  										"title": "Friends Golf Meet",
  										"icon": "golf_course"
  									},
  									{
  										"date": "2017-08-26T10:00:00+05:30",
  										"title": "Alumini Awards",
  										"icon": "school"
  									},
  									{
  										"date": "2017-08-24T10:00:00+05:30",
  										"title": "Alumini Awards",
  										"icon": "school"
  									},
  									{
  										"date": "2017-08-24T13:00:00+05:30",
  										"title": "Meeting",
  										"icon": "business_center"
  									}
  								]
  							}
  							</script>
  						</div>

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

			</div><!-- /.row -->

		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
