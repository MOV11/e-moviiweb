<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Knob Page',
	'body_class' => $GLOBALS['body_class'] . '',
	'scripts' => array(
		'knob',
		'knob-excanvas'
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

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">

							<h5 class="box-title mr-b-0">Examples</h5>
							<p class="text-muted">Add <code> data-plugin="knob" data-width="xx" data-height="xx" data-fgColor="#xxx" data-displayInput=.. value="xxx" </code></p>

							<div class="row text-center">

								<div class="col-md-3 col-sm-6 mr-b-40">
									<input data-plugin="knob" data-width="150" data-height="150" data-bgColor="#ebeff2" data-fgColor="#e6614f" data-displayInput=false value="70" />
			            <h6 class="text-muted mr-t-10">Disabled input</h6>
								</div>

								<div class="col-md-3 col-sm-6 mr-b-40">
									<input data-plugin="knob" data-width="150" data-height="150" data-cursor=true data-fgColor="#38d57a" value="25" />
		              <h6 class="text-muted mr-t-10">Cursor mode</h6>
								</div>

								<div class="col-md-3 col-sm-6 mr-b-40">
									<input data-plugin="knob" data-width="150" data-height="150" data-min="-100" data-fgColor="#03a9f3" data-displayPrevious=true value="35" />
		              <h6 class="text-muted mr-t-10">Display negative value</h6>
								</div>

								<div class="col-md-3 col-sm-6 mr-b-40">
									<input data-plugin="knob" data-width="150" data-height="150" data-min="-100" data-fgColor="#bf8040" data-displayPrevious=true data-angleOffset=-65 data-angleArc=250 value="36" />
									<h6 class="text-muted mr-t-10">Angle offset and arc</h6>
								</div>

								<div class="clearfix"></div>

								<div class="col-md-3 col-sm-6 mr-b-40">
									<input data-plugin="knob" data-width="150" data-height="150" data-angleOffset="180" data-linecap="round" data-fgColor="#7094db" value="50" />
		              <h6 class="text-muted mr-t-10">Angle offset</h6>
								</div>

								<div class="col-md-3 col-sm-6 mr-b-40">
									<input data-plugin="knob" data-width="150" data-height="150" data-min="-20000" data-displayPrevious=true data-max="20000" data-step="2000" value="6000" data-fgColor="#ea4c89" />
		              <h6 class="text-muted mr-t-10">5-digit values, step 2000</h6>
								</div>

								<div class="col-md-3 col-sm-6 mr-b-40">
									<input data-plugin="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#607d8b" value="80" data-skin="tron" data-angleOffset="90" data-readOnly=true data-thickness=".1" />
		              <h6 class="text-muted mr-t-10">Readonly</h6>
								</div>

								<div class="col-md-3 col-sm-6 mr-b-40">
									<input data-plugin="knob" data-width="150" data-height="150" data-displayPrevious=true data-fgColor="#ff4d4d" data-skin="tron" data-cursor=true value="45" data-thickness=".2" data-angleOffset=-90 data-angleArc=250 />
		              <h6 class="text-muted mr-t-10">Angle offset and arc</h6>
								</div>

								<div class="clearfix"></div>

								<div class="col-md-3 col-sm-6 mr-b-40">
									<input data-plugin="knob" data-width="60" data-height="60" data-linecap=round data-fgColor="#ffcc02" value="30" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
									<h6 class="text-muted mr-t-10">Readonly</h6>
								</div>

								<div class="col-md-3 col-sm-6 mr-b-40">
									<input data-plugin="knob" data-width="120" data-height="120" data-linecap=round data-fgColor="#03a9f3" value="86" data-skin="tron" data-angleOffset="90" data-readOnly=true data-thickness=".1" />
									<h6 class="text-muted mr-t-10">Readonly</h6>
								</div>

								<div class="col-md-3 col-sm-6 mr-b-40">
									<input data-plugin="knob" data-width="160" data-height="160" data-linecap=round data-fgColor="#fb9678" value="47" data-skin="tron" data-angleOffset="90" data-readOnly=true data-thickness=".1" />
									<h6 class="text-muted mr-t-10">Readonly</h6>
								</div>

								<div class="col-md-3 col-sm-6 mr-b-40">
									<input data-plugin="knob" data-width="200" data-height="200" data-linecap=round data-fgColor="#38d57a" value="70" data-skin="tron" data-angleOffset="90" data-readOnly=true data-thickness=".2" />
									<h6 class="text-muted mr-t-10">Readonly</h6>
								</div>

							</div><!-- /.row -->

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
