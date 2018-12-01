<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Panels and Wells',
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
					<div class="widget-bg-transparent">

						<div class="widget-body clearfix">

							<div class="row">
								<div class="col-md-4 mr-b-30">
					        <div class="card card-default">
					          <div class="card-header">
					            <h5 class="card-title mt-0 mb-3">Panel Default</h5>
					            <h6 class="card-subtitle">Sub title goes here with small font</h6>
					          </div>
					          <div class="card-block">
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					          </div>
					          <div class="card-footer">
					            Panel Footer
					          </div>
					        </div>
					      </div><!-- /.col-md-4 -->

					      <div class="col-md-4 mr-b-30">
					        <div class="card card-outline-primary">
					          <div class="card-header">
					            <h5 class="card-title mt-0 mb-3">Panel Default</h5>
					            <h6 class="card-subtitle">Sub title goes here with small font</h6>
					          </div>
					          <div class="card-block">
					            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					          </div>
					          <div class="card-footer">
					            Panel Footer
					          </div>
					        </div>
					      </div><!-- /.col-md-4 -->

					      <div class="col-md-4 mr-b-30">
					        <div class="card card-outline-color-scheme">
					          <div class="card-header">
					            <h5 class="card-title mt-0 mb-3">Panel Color Scheme</h5>
					            <h6 class="card-subtitle">Sub title goes here with small font</h6>
					          </div>
					          <div class="card-block">
					            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					          </div>
					          <div class="card-footer">
					            Panel Footer
					          </div>
					        </div>
					      </div><!-- /.col-md-4 -->

					      <div class="col-md-4 mr-b-30">
					        <div class="card card-outline-danger">
					          <div class="card-header">
					            <h5 class="card-title mt-0 mb-3">Panel Danger</h5>
					            <h6 class="card-subtitle">Sub title goes here with small font</h6>
					          </div>
					          <div class="card-block">
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					          </div>
					        </div>
					      </div><!-- /.col-md-4 -->

					      <div class="col-md-4 mr-b-30">
					        <div class="card card-outline-success">
					          <div class="card-header">
					            <h5 class="card-title mt-0 mb-3">Panel Success</h5>
					            <h6 class="card-subtitle">Sub title goes here with small font</h6>
					          </div>
					          <div class="card-block">
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					          </div>
					        </div>
					      </div><!-- /.col-md-4 -->

					      <div class="col-md-4 mr-b-30">
					        <div class="card card-outline-info">
					          <div class="card-header">
					            <h5 class="card-title mt-0 mb-3">Panel Info</h5>
					            <h6 class="card-subtitle">Sub title goes here with small font</h6>
					          </div>
					          <div class="card-block">
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					          </div>
					        </div>
					      </div><!-- /.col-md-4 -->

					      <div class="col-md-4 mr-b-30">
					        <div class="card card-outline-warning">
					          <div class="card-header">
					            <h5 class="card-title mt-0 mb-3">Panel Warning</h5>
					            <h6 class="card-subtitle">Sub title goes here with small font</h6>
					          </div>
					          <div class="card-block">
					            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					          </div>
					        </div>
					      </div><!-- /.col-md-4 -->

					      <div class="col-md-4 mr-b-30">
					        <div class="card card-outline-pink">
					          <div class="card-header">
					            <h5 class="card-title mt-0 mb-3">Panel Pink</h5>
					            <h6 class="card-subtitle">Sub title goes here with small font</h6>
					          </div>
					          <div class="card-block">
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					          </div>
					        </div>
					      </div><!-- /.col-md-4 -->

					      <div class="col-md-4 mr-b-30">
					        <div class="card card-outline-purple">
					          <div class="card-header">
                      <h5 class="card-title mt-0 mb-3">Panel Inverse</h5>
					            <h6 class="card-subtitle">Sub title goes here with small font</h6>
					          </div>
					          <div class="card-block">
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					          </div>
					        </div>
					      </div><!-- /.col-md-4 -->
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
