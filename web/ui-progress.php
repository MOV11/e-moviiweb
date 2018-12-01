<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Progress Bars',
	'body_class' => $GLOBALS['body_class'] . ''
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

							<div class="row">
                <!-- Colored Progress Bar -->
								<div class="col-md-6 mr-b-50">
									<h5 class="box-title">Colored Progress Bars</h5>
                  <p class="text-muted">Just add class <code>.progress-info</code> etc to <code>.progress-bar</code></p>

									<div class="progress">
	                  <div class="progress-bar progress-bar-danger" style="width: 60%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
	                </div>

									<div class="progress">
	                  <div class="progress-bar progress-bar-info" style="width: 20%;" role="progressbar"> <span class="sr-only">20% Complete</span> </div>
	                </div>

									<div class="progress">
	                  <div class="progress-bar progress-bar-success" style="width: 30%;" role="progressbar"> <span class="sr-only">20% Complete</span> </div>
	                </div>

									<div class="progress">
	                  <div class="progress-bar progress-bar-warning" style="width: 70%;" role="progressbar"> <span class="sr-only">70% Complete</span> </div>
	                </div>
								</div>

                <!-- Horizontal Progress Bar -->
								<div class="col-md-6 mr-b-50">
									<h5 class="box-title">Horizontal styles of Progress Bars</h5>
                  <p class="text-muted">You can also add <code>.progress-striped</code> and <code>.progress-bar-animated</code></p>

									<div class="progress progress-md">
	                  <div class="progress-bar progress-bar-success" style="width: 30%;" role="progressbar"> <span class="sr-only">20% Complete</span> </div>
	                </div>

									<div class="progress progress-md">
	                  <div class="progress-bar progress-bar-success progress-bar-striped" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
	                </div>

									<div class="progress progress-md">
	                  <div class="progress-bar progress-bar-success progress-bar-striped progress-bar-animated" style="width: 20%;" role="progressbar"><span class="sr-only">20% Complete</span></div>
	                </div>

									<div class="progress progress-md">
	                  <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;" class="progress-bar progress-bar-success progress-bar-striped progress-bar-animated"></div>
	                  <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;" class="progress-bar progress-bar-info progress-bar-striped progress-bar-animated"></div>
	                  <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 15%;" class="progress-bar progress-bar-danger progress-bar-striped progress-bar-animated"></div>
	                  <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;" class="progress-bar progress-bar-linkedin progress-bar-striped progress-bar-animated"></div>
	                </div>

									<div class="progress progress-md">
	                  <div class="progress-bar progress-bar-success" style="width: 70%;" role="progressbar">70%</div>
	                </div>
								</div>

                <!-- All Sizes Of Progress Bars -->
								<div class="col-md-6 mr-b-50">
									<h5 class="box-title mr-b-0">All Size Bars</h5>
									<p class="text-muted">Size whatever you want just add class <code>progress sm, md, lg</code></p>

									<div class="progress">
	                  <div class="progress-bar progress-bar-info" style="width: 20%;" role="progressbar"><span class="sr-only">20% Complete</span></div>
	                </div>

									<div class="progress progress-sm">
	                  <div class="progress-bar progress-bar-info" style="width: 30%;" role="progressbar"><span class="sr-only">30% Complete</span></div>
	                </div>

									<div class="progress progress-md">
	                  <div class="progress-bar progress-bar-info" style="width: 60%;" role="progressbar"><span class="sr-only">60% Complete</span></div>
	                </div>

									<div class="progress progress-lg">
	                  <div class="progress-bar progress-bar-info" style="width: 80%;" role="progressbar"><span class="sr-only">80% Complete</span></div>
	                </div>

								</div><!-- /.col-md-4 -->

                <!-- Vertical Progress Bars -->
								<div class="col-md-6 mr-b-50">
									<h5 class="box-title mr-b-0">Vertical Progress Bars</h5>
									<p class="text-muted">You can also show progress bar in vertical</p>

									<div class="progress progress-md progress-vertical-top">
	                  <div class="progress-bar progress-bar-warning" style="height: 70%;" role="progressbar"> <span class="sr-only">70% Complete</span> </div>
	                </div>

									<div class="progress progress-md progress-vertical">
	                  <div class="progress-bar progress-bar-info" style="height: 30%;" role="progressbar"><span class="sr-only">30% Complete</span></div>
	                </div>

									<div class="progress progress-md progress-vertical">
	                  <div class="progress-bar progress-bar-striped progress-bar-success" style="height: 50%;" role="progressbar"> <span class="sr-only">50% Complete</span> </div>
	                </div>

									<div class="progress progress-md progress-vertical">
	                  <div class="progress-bar progress-bar-striped progress-bar-pink progress-bar-animated" style="height: 40%;" role="progressbar"><span class="sr-only">40% Complete</span></div>
	                </div>

								</div><!-- /.col-md-3 -->
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
