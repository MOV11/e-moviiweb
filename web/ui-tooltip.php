<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Tooltip & Popovers',
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

				<div class="col-md-4 col-sm-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Simple ToolTips</h5>

							<ul class="list-group">
							  <li class="list-group-item d-flex justify-content-start">
									<span class="mr-auto">Slide In Up</span>
									<span class="fancy-tooltip tooltip-effect-slideInUp">
			            	<span class="tooltip-item">Demo</span>
										<span class="tooltip-content clearfix">
	                    <span class="tooltip-text fw-400">The Update Flow<br /><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></span>
										</span>
			            </span>
								</li>

							  <li class="list-group-item d-flex justify-content-start">
									<span class="mr-auto">Rotate</span>
									<span class="fancy-tooltip tooltip-effect-rotate">
			            	<span class="tooltip-item">Demo</span>
										<span class="tooltip-content clearfix text-center">
											<span class="tooltip-text fw-400">The Update Flow<br /><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></span>
										</span>
			            </span>
								</li>

							  <li class="list-group-item d-flex justify-content-start">
									<span class="mr-auto">Spin</span>
									<span class="fancy-tooltip tooltip-effect-spin">
			            	<span class="tooltip-item">Demo</span>
										<span class="tooltip-content clearfix">
				            	<span class="tooltip-text fw-400">Student and family support<br /><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></span>
										</span>
			            </span>
								</li>

								<li class="list-group-item d-flex justify-content-start">
									<span class="mr-auto">Slide In Down</span>
									<span class="fancy-tooltip tooltip-effect-slideInDown">
			            	<span class="tooltip-item">Demo</span>
										<span class="tooltip-content clearfix text-center">
				            	<span class="tooltip-text fw-400">Student and family support<br /><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></span>
										</span>
			            </span>
								</li>
							</ul>

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-4 col-sm-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">ToolTips With Buttons</h5>

							<ul class="list-group">
							  <li class="list-group-item d-flex justify-content-start">
									<span class="mr-auto">Slide In Up</span>
									<span class="fancy-tooltip tooltip-effect-slideInUp">
			            	<span class="tooltip-item">Demo</span>
										<span class="tooltip-content clearfix">
	                    <span class="tooltip-text fw-400">The Update Flow<br /><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></span>
											<a href="#" class="btn btn-sm btn-info ml-3 mb-3">Learn More</a>
											<a href="#" class="btn btn-sm btn-info ml-1 mb-3">Close</a>
										</span>
			            </span>
								</li>

							  <li class="list-group-item d-flex justify-content-start">
									<span class="mr-auto">Rotate</span>
									<span class="fancy-tooltip tooltip-effect-rotate">
			            	<span class="tooltip-item">Demo</span>
										<span class="tooltip-content clearfix text-center">
											<span class="tooltip-text fw-400">The Update Flow<br /><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></span>
											<a href="#" class="btn btn-sm btn-danger mb-3 mx-5 px-4">Learn More</a>
										</span>
			            </span>
								</li>

							  <li class="list-group-item d-flex justify-content-start">
									<span class="mr-auto">Spin</span>
									<span class="fancy-tooltip tooltip-effect-spin">
			            	<span class="tooltip-item">Demo</span>
										<span class="tooltip-content clearfix">
				            	<span class="tooltip-text fw-400">Student and family support<br /><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></span>
											<a href="#" class="btn btn-sm btn-warning ml-3 mb-3">Learn More</a>
											<a href="#" class="btn btn-sm btn-warning ml-1 mb-3">Close</a>
										</span>
			            </span>
								</li>

								<li class="list-group-item d-flex justify-content-start">
									<span class="mr-auto">Slide In Down</span>
									<span class="fancy-tooltip tooltip-effect-slideInDown">
			            	<span class="tooltip-item">Demo</span>
										<span class="tooltip-content clearfix text-center">
				            	<span class="tooltip-text fw-400">Student and family support<br /><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></span>
											<a href="#" class="btn btn-sm btn-success mb-3 mx-5 px-4">Learn More</a>
										</span>
			            </span>
								</li>
							</ul>

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-4 col-sm-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">ToolTips With Buttons & Icons</h5>

							<ul class="list-group">
							  <li class="list-group-item d-flex justify-content-start">
									<span class="mr-auto">Slide In Up</span>
									<span class="fancy-tooltip tooltip-effect-slideInUp">
			            	<span class="tooltip-item">Demo</span>
										<span class="tooltip-content clearfix">
	                    <span class="tooltip-text fw-400">The Update Flow<br /><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></span>
											<a href="#" class="btn btn-sm btn-info ml-3 mb-3"><i class="material-icons list-icon align-middle">dashboard</i>&nbsp;&nbsp;Learn More</a>
											<a href="#" class="btn btn-sm btn-info mr-3 mb-3 float-right"><i class="material-icons list-icon align-middle">close</i>&nbsp;&nbsp;Close</a>
										</span>
			            </span>
								</li>

							  <li class="list-group-item d-flex justify-content-start">
									<span class="mr-auto">Rotate</span>
									<span class="fancy-tooltip tooltip-effect-rotate">
			            	<span class="tooltip-item">Demo</span>
										<span class="tooltip-content clearfix text-center">
											<span class="tooltip-text fw-400">The Update Flow<br /><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></span>
											<a href="#" class="btn btn-sm btn-danger mb-3 mx-5 px-4"><i class="material-icons list-icon align-middle">extension</i>&nbsp;&nbsp;Learn More</a>
										</span>
			            </span>
								</li>

							  <li class="list-group-item d-flex justify-content-start">
									<span class="mr-auto">Spin</span>
									<span class="fancy-tooltip tooltip-effect-spin">
			            	<span class="tooltip-item">Demo</span>
										<span class="tooltip-content clearfix">
				            	<span class="tooltip-text fw-400">Student and family support<br /><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></span>
											<a href="#" class="btn btn-sm btn-warning ml-3 mb-3"><i class="material-icons list-icon align-middle">games</i>&nbsp;&nbsp;Learn More</a>
											<a href="#" class="btn btn-sm btn-warning mr-3 mb-3 float-right"><i class="material-icons list-icon align-middle">close</i>&nbsp;&nbsp;Close</a>
										</span>
			            </span>
								</li>

								<li class="list-group-item d-flex justify-content-start">
									<span class="mr-auto">Slide In Down</span>
									<span class="fancy-tooltip tooltip-effect-slideInDown">
			            	<span class="tooltip-item">Demo</span>
										<span class="tooltip-content clearfix text-center">
				            	<span class="tooltip-text fw-400">Student and family support<br /><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></span>
											<a href="#" class="btn btn-sm btn-success mb-3 mx-5 px-4"><i class="material-icons list-icon align-middle">open_with</i>&nbsp;&nbsp;Learn More</a>
										</span>
			            </span>
								</li>
							</ul>

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-4 col-sm-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Colored ToolTips</h5>

							<ul class="list-group">
							  <li class="list-group-item d-flex justify-content-start">
									<span class="mr-auto">Slide In Up</span>
									<span class="fancy-tooltip tooltip-effect-slideInUp">
			            	<span class="tooltip-item">Demo</span>
										<span class="tooltip-content bg-slate clearfix">
	                    <span class="tooltip-text fw-400">The Update Flow<br /><small class="text-inverse fw-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></span>
											<a href="#" class="btn btn-sm btn-primary ml-3 mb-3"><i class="material-icons list-icon align-middle">dashboard</i>&nbsp;&nbsp;Learn More</a>
											<a href="#" class="btn btn-sm btn-primary mr-3 mb-3 float-right"><i class="material-icons list-icon align-middle">close</i>&nbsp;&nbsp;Close</a>
										</span>
			            </span>
								</li>

							  <li class="list-group-item d-flex justify-content-start">
									<span class="mr-auto">Rotate</span>
									<span class="fancy-tooltip tooltip-effect-rotate">
			            	<span class="tooltip-item">Demo</span>
										<span class="tooltip-content bg-linkedin clearfix text-center">
											<span class="tooltip-text fw-400">The Update Flow<br /><small class="text-inverse fw-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></span>
											<a href="#" class="btn btn-sm btn-success mb-3 mx-5 px-4"><i class="material-icons list-icon align-middle">extension</i>&nbsp;&nbsp;Learn More</a>
										</span>
			            </span>
								</li>

							  <li class="list-group-item d-flex justify-content-start">
									<span class="mr-auto">Spin</span>
									<span class="fancy-tooltip tooltip-effect-spin">
			            	<span class="tooltip-item">Demo</span>
										<span class="tooltip-content bg-info clearfix">
				            	<span class="tooltip-text fw-400">Student and family support<br /><small class="text-inverse fw-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></span>
											<a href="#" class="btn btn-sm btn-warning ml-3 mb-3"><i class="material-icons list-icon align-middle">games</i>&nbsp;&nbsp;Learn More</a>
											<a href="#" class="btn btn-sm btn-warning mr-3 mb-3 float-right"><i class="material-icons list-icon align-middle">close</i>&nbsp;&nbsp;Close</a>
										</span>
			            </span>
								</li>

								<li class="list-group-item d-flex justify-content-start">
									<span class="mr-auto">Slide In Down</span>
									<span class="fancy-tooltip tooltip-effect-slideInDown">
			            	<span class="tooltip-item">Demo</span>
										<span class="tooltip-content bg-success clearfix text-center">
				            	<span class="tooltip-text fw-400">Student and family support<br /><small class="text-inverse fw-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></span>
											<a href="#" class="btn btn-sm btn-secondary mb-3 mx-5 px-4"><i class="material-icons list-icon align-middle">open_with</i>&nbsp;&nbsp;Learn More</a>
										</span>
			            </span>
								</li>
							</ul>

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->

		</div><!--.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
