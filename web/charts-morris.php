<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Morris Page',
	'body_class' => $GLOBALS['body_class'] . '',
	'scripts' => array(
		'morris-charts',
		'morris-raphael'
	),
	'styles' => array(
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

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Product Line Chart</h5>

							<ul class="list-inline text-right">
								<li class="list-inline-item">
									<h6><i class="fa fa-circle mr-r-5" style="color: #00bfc7;"></i>Dell</h6>
								</li>
								<li class="list-inline-item">
									<h6><i class="fa fa-circle mr-r-5" style="color: #fb9678;"></i>Lenovo</h6>
								</li>
								<li class="list-inline-item">
									<h6><i class="fa fa-circle mr-r-5" style="color: #9675ce;"></i>Sony</h6>
								</li>
							</ul>
							<div id="productLineMorris" style="height: 300px;"></div>
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Site Visit Chart</h5>

							<ul class="list-inline text-right">
		            <li class="list-inline-item">
		              <h6><i class="fa fa-circle m-r-5" style="color: #5867c3;"></i> Quality</h6>
								</li>
		            <li class="list-inline-item">
		              <h6><i class="fa fa-circle m-r-5" style="color: #ffaa00;"></i> Price</h6>
								</li>
	            </ul>
							<div id="siteVisitMorris" style="height: 300px;"></div>
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Line Chart</h5>

							<div id="lineMorris" style="height: 250px;"></div>
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Donut Chart</h5>

							<div id="donuteMorris" style="height: 250px;"></div>
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Bar Chart</h5>

							<div id="barMorris"></div>
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Extra Area Chart</h5>

							<div id="extraAreaMorris"></div>
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
