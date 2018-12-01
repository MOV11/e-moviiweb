<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Vector Maps',
	'body_class' => $GLOBALS['body_class'] . '',
	'styles' => array(
    'jqvmaps-css'
	),
	'scripts' => array(
    'jqvmaps-js',
    'jqvmaps-world',
    'jqvmaps-argentina',
    'jqvmaps-usa',
    'jqvmaps-australia',
    'jqvmaps-germany'
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

				<!-- World Map -->
				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">World Map</h5>

			        <div class="vmap" style="height: 700px;"
			          data-toggle="vector-map"
			          data-plugin-options='{"map":"world_en","scaleColors" : ["#E1FDF7" , "#51d2b7"], "label": "GDP of %p: $%v Billion",  "labelNaN" : "Data unavailable for %p", "valuesSrcFile": "assets/js/sample-data.json", "color": "#ddd"}'>
			        </div><!-- /.vmap -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Argentina -->
				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Argentina</h5>

							<div class="vmap" data-toggle="vector-map"
	              data-plugin-options='{"map":"argentina_en", "label": "You are on %p", "color" : "#DF8A03"}'>
	            </div><!-- /.vmap -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- U.S.A -->
				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">U.S.A</h5>

							<div class="vmap" data-toggle="vector-map"
	              data-plugin-options='{"map":"usa_en", "color": "#DFAF03"}'>
	            </div><!-- /.vmap -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Germany -->
				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Germany</h5>

							<div class="vmap" data-toggle="vector-map"
	              data-plugin-options='{"map":"germany_en", "color": "#2A2177"}'>
	            </div><!-- /.vmap -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Australia -->
				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Australia</h5>

							<div class="vmap" data-toggle="vector-map"
	              data-plugin-options='{"map":"australia_en", "color": "#1A4271"}'>
	            </div><!-- /.vmap -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
  </main><!-- /.main-wrapper -->

  <?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
