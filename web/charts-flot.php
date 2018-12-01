<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Flot Page',
	'body_class' => $GLOBALS['body_class'] . '',
	'scripts' => array(
		'flot-charts',
		'flot-time-plugin'
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
							<h5 class="box-title">Moving Line Chart</h5>

							<div id="movingLineFlot" style="width:100%;height:400px;"></div>
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Line Chart</h5>
							<div id="lineFlot" style="width:100%;height:400px;"></div>
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Bar Chart</h5>
							<div id="barFlot" style="width:100%;height:400px;"></div>
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Sales Bar Chart</h5>

							<div id="salesBarFlot" style="width:100%;height:400px;"></div>
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
