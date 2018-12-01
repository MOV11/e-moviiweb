<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Sparkline Page',
	'body_class' => $GLOBALS['body_class'] . '',
	'scripts' => array(
		'sparkline'
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

        <div class="col-lg-3 col-sm-6 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">
  						<span class="text-muted text-uppercase fw-500">CPU Allocation</span>

							<section class="mb-5">
								<h3 class="m-0 sub-heading-font-family fw-300 float-left">83&#37;</h3>
								<span class="badge badge-pill badge-info my-2 float-right">
									<span class="mr-1 fs-12">32&#37;</span>
									<i class="material-icons list-icons fs-12">arrow_drop_up</i>
								</span>
							</section>

  						<div class="clearfix">
  							<div class="sparklineChart" id="sparklinedash"></div>
  						</div>

  		      </div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

  			<div class="col-lg-3 col-sm-6 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">
							<span class="text-muted text-uppercase fw-500">Memory Allocation</span>

							<section class="mb-5">
								<h3 class="m-0 sub-heading-font-family fw-300 float-left">36&#37;</h3>
								<span class="badge badge-pill badge-danger my-2 float-right">
									<span class="mr-1 fs-12">8&#37;</span>
									<i class="material-icons list-icons fs-12">arrow_drop_down</i>
								</span>
							</section>

  						<div class="clearfix">
  							<div class="sparklineChart" id="sparklinedash2"></div>
  						</div>

  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

  			<div class="col-lg-3 col-sm-6 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">
							<span class="text-muted text-uppercase fw-500">Disk Allocation</span>

							<section class="mb-5">
								<h3 class="m-0 sub-heading-font-family fw-300 float-left">42&#37;</h3>
								<span class="badge badge-pill badge-success my-2 float-right">
									<span class="mr-1 fs-12">16&#37;</span>
									<i class="material-icons list-icons fs-12">arrow_drop_up</i>
								</span>
							</section>

  						<div class="clearfix">
								<div class="sparklineChart" id="sparklinedash3"></div>
  						</div>

  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

  			<div class="col-lg-3 col-sm-6 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">
							<span class="text-muted text-uppercase fw-500">Network Allocation</span>

							<section class="mb-5">
								<h3 class="m-0 sub-heading-font-family fw-300 float-left">56&#37;</h3>
								<span class="badge badge-pill badge-primary my-2 float-right">
									<span class="mr-1 fs-12">24&#37;</span>
									<i class="material-icons list-icons fs-12">arrow_drop_up</i>
								</span>
							</section>

  						<div class="clearfix">
  							<div class="sparklineChart" id="sparklinedash4"></div>
  						</div>

  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

			</div><!-- /.row -->

			<div class="row">

				<div class="col-lg-3 col-sm-6 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">
  						<span class="text-muted text-uppercase fw-500">All Products</span>

							<section class="mb-5">
								<h3 class="m-0 sub-heading-font-family fw-300 float-left">83&#37;</h3>
								<span class="badge badge-pill badge-info my-2 float-right">
									<span class="mr-1 fs-12">32&#37;</span>
									<i class="material-icons list-icons fs-12">arrow_drop_up</i>
								</span>
							</section>

  						<div class="clearfix">
  							<div class="sparklineChart" id="sparklinedashbar5"></div>
  						</div>

  		      </div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

  			<div class="col-lg-3 col-sm-6 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">
							<span class="text-muted text-uppercase fw-500">Defective Products</span>

							<section class="mb-5">
								<h3 class="m-0 sub-heading-font-family fw-300 float-left">36&#37;</h3>
								<span class="badge badge-pill badge-danger my-2 float-right">
									<span class="mr-1 fs-12">8&#37;</span>
									<i class="material-icons list-icons fs-12">arrow_drop_down</i>
								</span>
							</section>

  						<div class="clearfix">
  							<div class="sparklineChart" id="sparklinedashbar6"></div>
  						</div>

  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

  			<div class="col-lg-3 col-sm-6 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">
								<span class="text-muted text-uppercase fw-500">Tested Products</span>

							<section class="mb-5">
								<h3 class="m-0 sub-heading-font-family fw-300 float-left">42&#37;</h3>
								<span class="badge badge-pill badge-color-scheme my-2 float-right">
									<span class="mr-1 fs-12">16&#37;</span>
									<i class="material-icons list-icons fs-12">arrow_drop_up</i>
								</span>
							</section>

  						<div class="clearfix">
								<div class="sparklineChart" id="sparklinedashbar7"></div>
  						</div>

  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

  			<div class="col-lg-3 col-sm-6 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">
							<span class="text-muted text-uppercase fw-500">Products For Sale</span>

							<section class="mb-5">
								<h3 class="m-0 sub-heading-font-family fw-300 float-left">56&#37;</h3>
								<span class="badge badge-pill badge-primary my-2 float-right">
									<span class="mr-1 fs-12">24&#37;</span>
									<i class="material-icons list-icons fs-12">arrow_drop_up</i>
								</span>
							</section>

  						<div class="clearfix">
  							<div class="sparklineChart" id="sparklinedashbar8"></div>
  						</div>

  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

			</div><!-- /.row -->

			<div class="row">

  			<div class="col-sm-6 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">
  						<h5 class="box-title">Bar Chart</h5>

  						<div id="sparkline12" class="sparklineChart text-center"></div>
  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

  			<div class="col-sm-6 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">
  						<h5 class="box-title">Composite Bar Chart</h5>

  						<div id="sparkline13" class="sparklineChart text-center"></div>
  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

  			<div class="col-sm-6 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">
  						<h5 class="box-title">Pie Chart</h5>

  						<div id="sparkline11" class="sparklineChart text-center"></div>
  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

  			<div class="col-sm-6 widget-holder">
  				<div class="widget-bg">
  					<div class="widget-body clearfix">
  						<h5 class="box-title">Line Chart</h5>

  						<div id="sparkline16" class="sparklineChart text-center"></div>
  					</div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

			</div><!-- /.row -->

		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
