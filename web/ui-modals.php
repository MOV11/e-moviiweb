	<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Modals',
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

				<!-- Large Modal -->
				<div class="col-md-6 widget-holder">
					<div class="widget-bg">

			      <div class="widget-body clearfix">

							<h5 class="box-title">Large Modal <small class="text-muted">Click on image.</small></h5>
              <p>Following are Large Modals, you can even add custom colors to style them.</p>
              <a href="#" data-toggle="modal" data-target=".bs-modal-lg" class="mr-3 btn btn-outline-default">Default</a>
              <a href="#" data-toggle="modal" data-target=".bs-modal-lg-primary" class="mr-3 btn btn-outline-primary">Primary</a>
              <a href="#" data-toggle="modal" data-target=".bs-modal-lg-color-scheme" class="mr-3 btn btn-outline-color-scheme">Color Scheme</a>
              <!-- <img src="assets/demo/modal/modal-large.png" data-toggle="modal" data-target=".bs-modal-lg" class="modal-img" alt="" /> -->

							<div class="modal fade bs-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
	              <div class="modal-dialog modal-lg">
	                <div class="modal-content">
	                  <div class="modal-header">
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    <h5 class="modal-title" id="myLargeModalLabel">Large Modal Heading</h5>
										</div>

	                  <div class="modal-body">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	                  </div>

	                  <div class="modal-footer">
											<a href="#" class="btn btn-info btn-rounded ripple text-left">Learn more</a>
	                    <button type="button" class="btn btn-danger btn-rounded ripple text-left" data-dismiss="modal">Close this</button>
	                  </div>
	                </div><!-- /.modal-content -->
	              </div><!-- /.modal-dialog -->
	            </div><!-- /.modal -->

							<div class="modal modal-primary fade bs-modal-lg-primary" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
	              <div class="modal-dialog modal-lg">
	                <div class="modal-content">
	                  <div class="modal-header text-inverse">
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    <h5 class="modal-title" id="myLargeModalLabel">Large Modal Heading</h5>
										</div>

	                  <div class="modal-body">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	                  </div>

	                  <div class="modal-footer">
											<a href="#" class="btn btn-info btn-rounded ripple text-left">Learn more</a>
	                    <button type="button" class="btn btn-danger btn-rounded ripple text-left" data-dismiss="modal">Close this</button>
	                  </div>
	                </div><!-- /.modal-content -->
	              </div><!-- /.modal-dialog -->
	            </div><!-- /.modal -->

							<div class="modal modal-color-scheme fade bs-modal-lg-color-scheme" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
	              <div class="modal-dialog modal-lg">
	                <div class="modal-content">
	                  <div class="modal-header text-inverse">
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    <h5 class="modal-title" id="myLargeModalLabel">Large Modal Heading</h5>
										</div>

	                  <div class="modal-body">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	                  </div>

	                  <div class="modal-footer">
											<a href="#" class="btn btn-info btn-rounded ripple text-left">Learn more</a>
	                    <button type="button" class="btn btn-danger btn-rounded ripple text-left" data-dismiss="modal">Close this</button>
	                  </div>
	                </div><!-- /.modal-content -->
	              </div><!-- /.modal-dialog -->
	            </div><!-- /.modal -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Medium Modal -->
				<div class="col-md-6 widget-holder">
					<div class="widget-bg">

			      <div class="widget-body clearfix">

							<h5 class="box-title">Medium Modal <small class="text-muted">Click on image.</small></h5>
              <p>You can do the same with medium sized Modals</p>
              <a href="#" data-toggle="modal" data-target=".bs-modal-md" class="mr-3 btn btn-outline-danger">Danger</a>
              <a href="#" data-toggle="modal" data-target=".bs-modal-md-primary" class="mr-3 btn btn-outline-info">Info</a>
              <a href="#" data-toggle="modal" data-target=".bs-modal-md-color-scheme" class="mr-3 btn btn-outline-pink">Pink</a>

							<div class="modal modal-danger fade bs-modal-md" tabindex="-1" role="dialog" aria-labelledby="myMediumModalLabel" aria-hidden="true" style="display: none;">
	              <div class="modal-dialog modal-md">
	                <div class="modal-content">
	                  <div class="modal-header text-inverse">
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    <h5 class="modal-title" id="myMediumModalLabel">Medium Modal Heading</h5>
										</div>

	                  <div class="modal-body">
	                    <h5>First Sub Heading</h5>
											<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

											<hr />

											<h5>Overflowing text to show scroll behavior</h5>
											<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
											<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
											<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	                  </div>

	                  <div class="modal-footer">
											<a href="#" class="btn btn-info btn-rounded ripple text-left">Learn more</a>
	                    <button type="button" class="btn btn-danger btn-rounded ripple text-left" data-dismiss="modal">Close this</button>
	                  </div>
	                </div><!-- /.modal-content -->
	              </div><!-- /.modal-dialog -->
	            </div><!-- /.modal -->

							<div class="modal modal-info fade bs-modal-md-primary" tabindex="-1" role="dialog" aria-labelledby="myMediumModalLabel" aria-hidden="true" style="display: none;">
	              <div class="modal-dialog modal-md">
	                <div class="modal-content">
	                  <div class="modal-header text-inverse">
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    <h5 class="modal-title" id="myMediumModalLabel">Medium Modal Heading</h5>
										</div>

	                  <div class="modal-body">
	                    <h5>First Sub Heading</h5>
											<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

											<hr />

											<h5>Overflowing text to show scroll behavior</h5>
											<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
											<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
											<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	                  </div>

	                  <div class="modal-footer">
											<a href="#" class="btn btn-info btn-rounded ripple text-left">Learn more</a>
	                    <button type="button" class="btn btn-danger btn-rounded ripple text-left" data-dismiss="modal">Close this</button>
	                  </div>
	                </div><!-- /.modal-content -->
	              </div><!-- /.modal-dialog -->
	            </div><!-- /.modal -->

							<div class="modal modal-pink fade bs-modal-md-color-scheme" tabindex="-1" role="dialog" aria-labelledby="myMediumModalLabel" aria-hidden="true" style="display: none;">
	              <div class="modal-dialog modal-md">
	                <div class="modal-content">
	                  <div class="modal-header text-inverse">
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    <h5 class="modal-title" id="myMediumModalLabel">Medium Modal Heading</h5>
										</div>

	                  <div class="modal-body">
	                    <h5>First Sub Heading</h5>
											<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

											<hr />

											<h5>Overflowing text to show scroll behavior</h5>
											<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
											<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
											<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	                  </div>

	                  <div class="modal-footer">
											<a href="#" class="btn btn-info btn-rounded ripple text-left">Learn more</a>
	                    <button type="button" class="btn btn-danger btn-rounded ripple text-left" data-dismiss="modal">Close this</button>
	                  </div>
	                </div><!-- /.modal-content -->
	              </div><!-- /.modal-dialog -->
	            </div><!-- /.modal -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Small Modal -->
				<div class="col-md-6 widget-holder">
					<div class="widget-bg">

			      <div class="widget-body clearfix">

							<h5 class="box-title">Small Modal <small class="text-muted">Click on image.</small></h5>
              <p>Here are some examples with small modals</p>
              <a href="#" data-toggle="modal" data-target=".bs-modal-sm" class="mr-3 btn btn-outline-default">Default</a>
              <a href="#" data-toggle="modal" data-target=".bs-modal-sm-primary" class="mr-3 btn btn-outline-primary">Primary</a>
              <a href="#" data-toggle="modal" data-target=".bs-modal-sm-color-scheme" class="mr-3 btn btn-outline-color-scheme">Color Scheme</a>

							<div class="modal fade bs-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
	              <div class="modal-dialog modal-sm">
	                <div class="modal-content">
	                  <div class="modal-header">
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    <h5 class="modal-title" id="mySmallModalLabel">Small Modal Heading</h5>
										</div>

	                  <div class="modal-body">
											<p>...</p>
	                  </div>
	                </div><!-- /.modal-content -->
	              </div><!-- /.modal-dialog -->
	            </div><!-- /.modal -->

							<div class="modal modal-primary fade bs-modal-sm-primary" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
	              <div class="modal-dialog modal-sm">
	                <div class="modal-content">
	                  <div class="modal-header text-inverse">
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    <h5 class="modal-title" id="mySmallModalLabel">Small Modal Heading</h5>
										</div>

	                  <div class="modal-body">
											<p>...</p>
	                  </div>
	                </div><!-- /.modal-content -->
	              </div><!-- /.modal-dialog -->
	            </div><!-- /.modal -->

							<div class="modal modal-color-scheme fade bs-modal-sm-color-scheme" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
	              <div class="modal-dialog modal-sm">
	                <div class="modal-content">
	                  <div class="modal-header text-inverse">
	                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    <h5 class="modal-title" id="mySmallModalLabel">Small Modal Heading</h5>
										</div>

	                  <div class="modal-body">
											<p>...</p>
	                  </div>
	                </div><!-- /.modal-content -->
	              </div><!-- /.modal-dialog -->
	            </div><!-- /.modal -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Custom Modals -->
				<div class="col-md-6 widget-holder">
					<div class="widget-bg">

			      <div class="widget-body clearfix">
							<h5 class="box-title">Custom Modals</h5>
              <p>Some examples of Modals</p>
              <a href="#" class="btn btn-primary ripple mr-3" data-toggle="modal" data-target="#signup-modal">Sign Up Modal</a>
              <a href="#" class="btn btn-info ripple" data-toggle="modal" data-target="#login-modal">Log in Modal</a>

							<!-- Signup Modal -->
							<div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	              <div class="modal-dialog">
	                <div class="modal-content">
	                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                  <div class="modal-body">
	                    <div class="text-center">
												<a href="#">
													<span><img src="assets/demo/logo-expand-dark.png" alt=""></span>
												</a>
											</div>

	                    <form>
	                      <div class="form-group">
													<label for="username">Name</label>
													<input class="form-control" type="text" id="username" required="" placeholder="John Doe">
	                      </div>
	                      <div class="form-group">
													<label for="emailaddress">Email address</label>
													<input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com">
	                      </div>
	                      <div class="form-group mr-b-30">
													<label for="password">Password</label>
													<input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
	                      </div>
	                      <div class="form-group mr-b-30">
													<div class="checkbox">
					                  <label for="checkbox11">
					                    <input id="checkbox11" type="checkbox">
					                    <span class="label-text">I accept <a href="#">Terms and Conditions</a></span>
					                  </label>
					                </div>
	                      </div>
	                      <div class="text-center mr-b-30">
	                        <button class="btn btn-rounded btn-lg btn-success ripple" type="submit">Sign Up Free</button>
	                      </div>
	                    </form>
	                  </div>
	                </div><!-- /.modal-content -->
	              </div><!-- /.modal-dialog -->
	            </div><!-- /.modal -->

							<!-- Sign In Modal -->
							<div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	              <div class="modal-dialog">
	                <div class="modal-content">
	                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

										<div class="modal-body">
	                    <div class="text-center">
	                      <a href="index.html" class="text-success">
	                        <img src="assets/demo/logo-expand-dark.png" alt="" />
	                      </a>
	                  	</div>

		                  <form>
		                    <div class="form-group">
													<label for="emailaddress1">Email address</label>
													<input class="form-control" type="email" id="emailaddress1" required="" placeholder="john@deo.com">
		                    </div>

		                    <div class="form-group mr-b-30">
													<a href="page-recoverpw.html" class="text-muted pull-right"><small>Forgot your password?</small></a>
													<label for="password1">Password</label>
													<input class="form-control" type="password" required="" id="password1" placeholder="Enter your password">
		                    </div>

		                    <div class="form-group mr-b-30">
													<div class="checkbox">
					                  <label for="checkbox12">
					                    <input id="checkbox12" type="checkbox">
					                    <span class="label-text">Remember me</span>
					                  </label>
					                </div>
		                    </div>

		                    <div class="form-group text-center">
		                      <button class="btn btn-rounded btn-lg btn-info ripple" type="submit">Sign In</button>
		                    </div>
		                  </form>
	                	</div>
	              	</div><!-- /.modal-content -->
	              </div><!-- /.modal-dialog -->
	            </div><!-- /.modal -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
