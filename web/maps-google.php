<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Google Maps',
	'body_class' => $GLOBALS['body_class'] . '',
	'scripts' => array(
    'gmaps-api',
    'gmaps'
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

				<!-- Simple Map -->
				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Simple Map</h5>

							<div class="gmap" data-toggle="google-map" data-plugin-options='{"lat": 34.05, "lng": -78.72, "zoom": 5}'>
		          </div><!-- /.gmap -->
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Marker with Info Window -->
				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Marker with Info Window</h5>

							<div class="gmap" data-toggle="google-map" data-plugin-options='{"lat": -12.043333, "lng": -77.028333}'>
		            <div class="map-marker" data-plugin-options='{ "lat": -12.043449, "lng": -77.030497 , "title": "Some title" }'>
		              <div class="content">
		                <p class="mr-b-0">Really Cool Place</p>
		              </div><!-- /.content -->
		            </div><!-- /.map-marker -->
		          </div><!-- /.gmap -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Overlay Map -->
				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Overlay Map</h5>

							<div class="gmap" data-toggle="google-map" data-plugin-options='{"lat": -12.043333, "lng": -77.028333}'>
		            <div class="map-overlays" data-plugin-options='{ "lat": -12.043449, "lng": -77.030497 }'>
		              <div class="overlay">
		                <p class="mr-b-0">Really Cool Place</p>
		              </div><!-- /.overlay -->
		            </div><!-- /.map-overlays -->
		          </div><!-- /.gmap -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Route Map -->
				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Route Map</h5>

							<div class="gmap" data-toggle="google-map" data-plugin-options='{"lat": -12.043333, "lng": -77.028333}'>
		            <div class="map-path" data-plugin-options='{ "path" : [[-12.044012922866312, -77.02470665341184], [-12.05449279282314, -77.03024273281858], [-12.055122327623378, -77.03039293652341], [-12.075917129727586, -77.02764635449216], [-12.07635776902266, -77.02792530422971], [-12.076819390363665, -77.02893381481931], [-12.088527520066453, -77.0241058385925], [-12.090814532191756, -77.02271108990476]] , "strokeColor": "#131540", "strokeOpacity": 0.6, "strokeWeight": 6}'>
		            </div><!-- /.map-path -->
		          </div><!-- /.gmap -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Polygonal Map -->
				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Polygonal Map</h5>

							<div class="gmap" data-toggle="google-map" data-plugin-options='{"lat": -12.043333, "lng": -77.028333}'>
		            <div class="map-polygon" data-plugin-options='{ "paths" : [[-12.040397656836609,-77.03373871559225], [-12.040248585302038,-77.03993927003302], [-12.050047116528843,-77.02448169303511],	[-12.044804866577001,-77.02154422636042]] , "strokeColor": "#131540", "strokeOpacity": 0.6, "strokeWeight": 6}'>
		            </div><!-- /.map-path -->
		          </div><!-- /.gmap -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
  </main><!-- /.main-wrapper -->

  <?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
