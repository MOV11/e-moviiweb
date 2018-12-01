<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Buttons',
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

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
			      <div class="widget-body clearfix">

							<h5 class="box-title mr-b-0">Default Buttons</h5>
							<p class="text-muted">Use classes <code>btn btn-default</code>to quickly create a General button.</p>

							<div class="row mr-b-50">
								<div class="col-lg-3 col-sm-6 col-12 mr-b-20"><button class="btn btn-block btn-default">Default</button></div>
								<div class="col-lg-3 col-sm-6 col-12 mr-b-20"><button class="btn btn-block btn-primary">Primary</button></div>
								<div class="col-lg-3 col-sm-6 col-12 mr-b-20"><button class="btn btn-block btn-rounded btn-warning">Warning</button></div>
								<div class="col-lg-3 col-sm-6 col-12 mr-b-20"><button class="btn btn-block btn-rounded btn-info" disabled>Disabled</button></div>
							</div>

							<h5 class="box-title mr-b-0">Outline Buttons</h5>
							<p class="text-muted">Use classes <code>btn btn-ouline-default btn-rounded</code>to quickly create a Rounded button.</p>

							<div class="row">
								<div class="col-lg-3 col-sm-6 col-12 mr-b-20"><button class="btn btn-block btn-outline-default">Default</button></div>
								<div class="col-lg-3 col-sm-6 col-12 mr-b-20"><button class="btn btn-block btn-outline-primary">Primary</button></div>
								<div class="col-lg-3 col-sm-6 col-12 mr-b-20"><button class="btn btn-block btn-rounded btn-outline-warning">Warning</button></div>
								<div class="col-lg-3 col-sm-6 col-12 mr-b-20"><button class="btn btn-block btn-rounded btn-outline-info" disabled>Disabled</button></div>
							</div>

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
			      <div class="widget-body clearfix">

							<h5 class="box-title mr-b-0">Button Sizes</h5>
							<p class="text-muted">Use any of the following classes: <code>btn-lg btn-sm btn-xs</code></p>

							<div class="btn-list mr-b-50">
								<button class="btn btn-lg btn-outline-default">Large Button</button>
								<button class="btn btn-outline-default">Default</button>
								<button class="btn btn-sm btn-outline-default">Small</button>
								<button class="btn btn-xs btn-outline-default">Mini Button</button>
							</div>

							<h5 class="box-title mr-b-0">Block Button</h5>
							<p class="text-muted">Use class <code>btn-block</code> to make a buttton take all of the block space.</p>

							<div class="mr-b-20">
								<button class="btn btn-block btn-lg btn-outline-default">Block Button</button>
							</div>

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->

			<div class="row">

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
			      <div class="widget-body clearfix">

							<h5 class="box-title mr-b-0">Buttons with Icons</h5>
							<p class="text-muted">Just add icon in i tag and text in span</p>

							<div class="btn-list mr-b-20">
								<button class="btn btn-outline-default ripple">
									<i class="material-icons list-icon">favorite</i>
									<span>Default</span>
								</button>

								<button class="btn btn-primary btn-rounded ripple">
									<i class="material-icons list-icon">star</i>
									<span>Primary</span>
								</button>

								<button class="btn btn-success btn-rounded ripple">
									<i class="material-icons list-icon">check</i>
									<span>Success</span>
								</button>

								<button class="btn btn-info ripple">
									<i class="material-icons list-icon">mail_outline</i>
									<span>Info</span>
								</button>
							</div>

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
			      <div class="widget-body clearfix">

							<h5 class="box-title mr-b-0">Button Dropdowns & Dropups</h5>
							<p class="text-muted">Just add icon in i tag and text in span</p>

							<div class="btn-list mr-b-20">
								<div class="btn-group m-r-10">
	                <button aria-expanded="false" data-toggle="dropdown" class="btn btn-pink dropdown-toggle ripple" type="button">Dropdown <span class="caret"></span></button>
									<div role="menu" class="dropdown-menu">
	                  <a class="dropdown-item" href="#"><strong>Action</strong></a>
	                  <a class="dropdown-item" href="#">Another action</a>
	                  <a class="dropdown-item" href="#">Something else here</a>
	                  <div class="dropdown-divider"></div>
	                  <a class="dropdown-item" href="#"><strong>Separated link</strong></a>
	                </div>
	              </div>

								<div class="btn-group dropup m-r-10">
	                <button aria-expanded="false" data-toggle="dropdown" class="btn btn-color-scheme dropdown-toggle ripple" type="button">Dropup FadeUp <span class="caret"></span></button>
	                <div role="menu" class="dropdown-menu animated fadeInUp">
	                  <a class="dropdown-item" href="#"><strong>Action</strong></a>
	                  <a class="dropdown-item" href="#">Another action</a>
	                  <a class="dropdown-item" href="#">Something else here</a>
	                  <div class="dropdown-divider"></div>
	                  <a class="dropdown-item" href="#"><strong>Separated link</strong></a>
	                </div>
	              </div>

								<div class="btn-group m-r-10">
	                <button aria-expanded="false" data-toggle="dropdown" class="btn btn-outline-red dropdown-toggle ripple" type="button">
										<i class="material-icons list-icon">favorite</i>
										<span class="caret"></span>
									</button>
									<div role="menu" class="dropdown-menu">
	                  <a class="dropdown-item" href="#"><strong>Action</strong></a>
	                  <a class="dropdown-item" href="#">Another action</a>
	                  <a class="dropdown-item" href="#">Something else here</a>
	                  <div class="dropdown-divider"></div>
	                  <a class="dropdown-item" href="#"><strong>Separated link</strong></a>
	                </div>
	              </div>

								<div class="btn-group dropup m-r-10">
	                <button aria-expanded="false" data-toggle="dropdown" class="btn btn-danger dropdown-toggle ripple" type="button">
										<i class="material-icons list-icon">favorite</i>
										<span class="caret"></span>
									</button>
									<div role="menu" class="dropdown-menu">
	                  <a class="dropdown-item" href="#"><strong>Action</strong></a>
	                  <a class="dropdown-item" href="#">Another action</a>
	                  <a class="dropdown-item" href="#">Something else here</a>
	                  <div class="dropdown-divider"></div>
	                  <a class="dropdown-item" href="#"><strong>Separated link</strong></a>
	                </div>
	              </div>
							</div>

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-4 widget-holder">
					<div class="widget-bg">
			      <div class="widget-body clearfix">

							<h5 class="box-title mr-b-0">Social Icons Default</h5>
							<p class="text-muted"><code>btn btn-facebook</code></p>

							<div class="mr-b-40 btn-list">
								<button type="button" class="btn btn-sm btn-facebook">
									<i class="social-icons list-icon">facebook</i>
								</button>

								<button type="button" class="btn btn-sm btn-twitter">
									<i class="social-icons list-icon">twitter</i>
								</button>

								<button type="button" class="btn btn-sm btn-googleplus">
									<i class="social-icons list-icon">googleplus</i>
								</button>

								<button type="button" class="btn btn-sm btn-linkedin">
									<i class="social-icons list-icon">linkedin</i>
								</button>

								<button type="button" class="btn btn-sm btn-instagram">
									<i class="social-icons list-icon">instagram</i>
								</button>

								<button type="button" class="btn btn-sm btn-pinterest">
									<i class="social-icons list-icon">pinterest</i>
								</button>

								<button type="button" class="btn btn-sm btn-dribbble">
									<i class="social-icons list-icon">dribble</i>
								</button>

								<button type="button" class="btn btn-sm btn-youtube">
									<i class="social-icons list-icon">youtube</i>
								</button>
							</div>

							<h5 class="box-title mr-b-0">Social Icons Circle</h5>
							<p class="text-muted"><code>btn btn-circle btn-sm btn-facebook</code></p>

							<div class="mr-b-40 btn-list">
								<button type="button" class="btn btn-circle btn-sm btn-facebook">
									<i class="social-icons list-icon">facebook</i>
								</button>

								<button type="button" class="btn btn-circle btn-sm btn-twitter">
									<i class="social-icons list-icon">twitter</i>
								</button>

								<button type="button" class="btn btn-circle btn-sm btn-googleplus">
									<i class="social-icons list-icon">googleplus</i>
								</button>

								<button type="button" class="btn btn-circle btn-sm btn-linkedin">
									<i class="social-icons list-icon">linkedin</i>
								</button>

								<button type="button" class="btn btn-circle btn-sm btn-instagram">
									<i class="social-icons list-icon">instagram</i>
								</button>

								<button type="button" class="btn btn-circle btn-sm btn-pinterest">
									<i class="social-icons list-icon">pinterest</i>
								</button>

								<button type="button" class="btn btn-circle btn-sm btn-dribbble">
									<i class="social-icons list-icon">dribble</i>
								</button>

								<button type="button" class="btn btn-circle btn-sm btn-youtube">
									<i class="social-icons list-icon">youtube</i>
								</button>
							</div>

							<h5 class="box-title mr-b-0">Large Circle Buttons</h5>
							<p class="text-muted"><code>btn btn-facebook</code></p>

							<div class="mr-b-20 btn-list">
								<button type="button" class="btn btn-sm btn-facebook">
									<i class="social-icons list-icon">facebook</i>
									Facebook
								</button>
								<button type="button" class="btn btn-sm btn-twitter">
									<i class="social-icons list-icon">twitter</i>
									Twitter
								</button>
								<button type="button" class="btn btn-sm btn-googleplus">
									<i class="social-icons list-icon">googleplus</i>
									Google
								</button>
								<button type="button" class="btn btn-sm btn-linkedin">
									<i class="social-icons list-icon">linkedin</i>
									LinkedIn
								</button>
							</div>

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-4 widget-holder">
					<div class="widget-bg">
			      <div class="widget-body clearfix">

              <h5 class="box-title mr-b-0">Circle Buttons</h5>
              <p class="text-muted"><code>btn btn-default btn-circle btn-sm</code></p>

              <div class="btn-list">
                <button type="button" class="btn btn-default btn-circle btn-sm">
                  <i class="material-icons list-icon">check</i>
                </button>

                <button type="button" class="btn btn-primary btn-circle">
                  <i class="material-icons list-icon">check</i>
                </button>

                <button type="button" class="btn btn-danger btn-circle btn-lg">
                  <i class="material-icons list-icon">check</i>
                </button>
              </div><!-- /.btn-list -->

              <div class="btn-list">

                <button type="button" class="btn btn-pink btn-circle btn-lg">
                  <i class="material-icons list-icon">room</i>
                </button>

                <button type="button" class="btn btn-color-scheme btn-circle">
                  <i class="material-icons list-icon">home</i>
                </button>

                <button type="button" class="btn btn-success btn-circle btn-sm">
                  <i class="material-icons list-icon">send</i>
                </button>

              </div><!-- /.btn-list -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-4 widget-holder">
					<div class="widget-bg">
			      <div class="widget-body clearfix">

							<h5 class="box-title">Group Buttons</h5>

							<div class="btn-group mr-b-20">
	              <button type="button" class="btn btn-outline-default ripple">Left</button>
	              <button type="button" class="btn btn-outline-default ripple">Middle</button>
	              <button type="button" class="btn btn-outline-default ripple">Right</button>
	            </div>

							<br />

							<div class="btn-group btn-group-vertical mr-b-20">
	              <button class="btn btn-outline-default ripple">Left</button>
	              <button class="btn btn-outline-default ripple">Middle</button>
	              <button class="btn btn-outline-default ripple">Right</button>
	            </div>

							<br />

							<div class="btn-group btn-group-justified mr-b-20">
								<a class="btn btn-outline-default" role="button">Left</a>
								<a class="btn btn-outline-default" role="button">Middle</a>
								<a class="btn btn-outline-default" role="button">Right</a>
							</div>

							<div class="btn-group">
	              <button type="button" class="btn btn-outline-default">1</button>
	              <button type="button" class="btn btn-info">2</button>
	              <button type="button" class="btn btn-outline-default">3</button>
	              <button type="button" class="btn btn-outline-default">4</button>
	            </div>
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->

		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
