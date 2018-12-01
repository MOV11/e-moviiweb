<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Form Addons',
  'body_class' => $GLOBALS['body_class'] . '',
  'scripts' => array(
    'switchery',
    'touchspin',
    'rangeslider',
  ),
  'styles' => array(
    'switchery',
    'touchspin',
    'rangeslider',
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


	      <div class="widget-holder col-md-12">
	        <div class="widget-bg">
	          <div class="widget-body">

              <div class="row pd-b-20">

                <div class="col-md-4 mb-3">
                  <h5 class="box-title mr-b-0">Switchery</h5>
                  <p class="text-muted">Add the following line <code>class="js-switch" data-color="#13dafe"</code> to your input element.</p>

                  <input type="checkbox" checked class="js-switch" data-color="#d9534f" />
                  <input type="checkbox" checked class="js-switch" data-color="#e91e63" />
                  <input type="checkbox" checked class="js-switch" data-color="#9c27b0" />
                  <input type="checkbox" checked class="js-switch" data-color="#673ab7" />
                  <input type="checkbox" checked class="js-switch" data-color="#795548" />
                </div><!-- /.col-md-4 -->

                <div class="col-md-4 mb-3">
                  <h5 class="box-title mr-b-0">Sizes</h5>
                  <p class="text-muted">You can add <code>data-size="small",data-size="large"</code> to your input element for different sizes.</p>

                  <input type="checkbox" checked class="js-switch" data-color="#e6614f" data-size="small" />
                  <input type="checkbox" checked class="js-switch" data-color="#38d57a" />
                  <input type="checkbox" checked class="js-switch" data-color="#ffcc02 " data-size="large" />
                </div><!-- /.col-md-4 -->

                <div class="col-md-4 mb-3">
                  <h5 class="box-title mr-b-0">Secondary Color</h5>
                  <p class="text-muted">You can apply <code>data-color="@color" data-secondary-color="@color"</code> to your input element to both color.</p>

                  <input type="checkbox" class="js-switch" data-color="#99d683" data-secondary-color="#f96262" />
                  <input type="checkbox" class="js-switch" data-color="#13dafe" data-secondary-color="#6164c1" />
                </div><!-- /.col-md-4 -->

              </div><!-- /.row -->


	          </div><!-- /.widget-body -->
	        </div><!-- /.widget-bg -->
	      </div><!-- /.widget-holder -->

	      <div class="widget-holder col-md-12">
	        <div class="widget-bg">
	          <div class="widget-body">
							<h5 class="box-title mr-b-0">Bootstrap Touchspin</h5>
	            <p class="text-muted">Use the <code>data-toggle="touchspin"</code> to create a spinner.</p>

	            <div class="row">
	              <div class="col-md-4">
	                <div class="form-group">
	                  <label for="verticalTouchspin">Vertical Touchspin</label>
	                  <input type="text" id="verticalTouchspin" value="34" data-toggle="touchspin" data-plugin-options='{"verticalbuttons": true }' />
	                </div><!-- /.form-group -->
	              </div><!-- /.col-md-6 -->

	              <div class="col-md-4">
	                <div class="form-group">
	                  <label for="verticalTouchspin2">Side Touchspin</label>
	                  <input type="text" id="verticalTouchspin2" value="0" data-toggle="touchspin" />
	                </div><!-- /.form-group -->
	              </div><!-- /.col-md-6 -->

	              <div class="col-md-4">
	                <div class="form-group">
	                  <label for="verticalTouchspin3">Postfix and Prefix with button group</label>
	                  <div class="input-group">
	                  <input type="text" id="verticalTouchspin3" value="55" data-toggle="touchspin" data-plugin-options='{ "prefix": "pre", "postfix": "post" }' />
	                    <div class="input-group-btn d-flex flex-row">
	                      <button type="button" class="btn btn-default">Action</button>
	                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	                        <span class="caret"></span>
	                        <span class="sr-only">Toggle Dropdown</span>
	                      </button>
	                      <div class="dropdown-menu dropdown-menu-right" role="menu">
	                        <a class="dropdown-item" href="#">Action</a>
	                        <a class="dropdown-item" href="#">Another action</a>
	                        <a class="dropdown-item" href="#">Something else here</a>
	                        <div class="dropdown-divider"></div>
	                        <a class="dropdown-item" href="#">Separated link</a>
	                      </div>
	                    </div><!-- /.input-group-btn -->
	                  </div><!-- /.input-group -->
	                </div><!-- /.form-group -->
	              </div><!-- /.col-md-6 -->

	            </div><!-- /.row -->
	          </div><!-- /.widget-body -->
	        </div><!-- /.widget-bg -->
	      </div><!-- /.widget-holder -->

	      <div class="widget-holder col-md-12">
	        <div class="widget-bg">
	          <div class="widget-body">
	            <div class="row">
	              <div class="col-sm-4 mb-3">
	                <h3 class="box-title mr-b-0">Checkbox Square</h3>
	                <p class="text-muted">With Custom Background</p>

	                <div class="checkbox">
	                  <label>
	                    <input type="checkbox" checked>
	                    <span class="label-text">Default</span>
	                  </label>
	                </div><!-- /.checkbox -->

	                <div class="checkbox checkbox-primary">
	                  <label>
	                    <input type="checkbox" checked>
	                    <span class="label-text">Primary</span>
	                  </label>
	                </div><!-- /.checkbox -->

	                <div class="checkbox checkbox-pink">
	                  <label>
	                    <input type="checkbox" checked>
	                    <span class="label-text">Pink</span>
	                  </label>
	                </div><!-- /.checkbox -->

	                <div class="checkbox checkbox-grey">
	                  <label>
	                    <input type="checkbox" checked>
	                    <span class="label-text">Grey</span>
	                  </label>
	                </div><!-- /.checkbox -->

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" checked disabled>
                      <span class="label-text">Can't check this</span>
                    </label>
                  </div><!-- /.checkbox -->
	              </div><!-- /.col-sm-3 -->

	              <div class="col-sm-4 mb-3">
	                <h3 class="box-title mr-b-0">Checkbox Circle</h3>
									<p class="text-muted">Add simple <code>checkbox-circle</code> class</p>

	                <div class="checkbox checkbox-circle">
	                  <label>
	                    <input type="checkbox" checked>
	                    <span class="label-text">Default</span>
	                  </label>
	                </div><!-- /.checkbox -->

	                <div class="checkbox checkbox-circle checkbox-color-scheme">
	                  <label>
	                    <input type="checkbox" checked>
	                    <span class="label-text">Color Scheme</span>
	                  </label>
	                </div><!-- /.checkbox -->

	                <div class="checkbox checkbox-circle checkbox-warning">
	                  <label>
	                    <input type="checkbox" checked>
	                    <span class="label-text">Warning</span>
	                  </label>
	                </div><!-- /.checkbox -->

	                <div class="checkbox checkbox-circle checkbox-info">
	                  <label>
	                    <input type="checkbox" checked>
	                    <span class="label-text">Info</span>
	                  </label>
	                </div><!-- /.checkbox -->

                  <div class="checkbox checkbox-circle checkbox-danger">
                    <label>
                      <input type="checkbox" checked disabled>
                      <span class="label-text">Can't touch this</span>
                    </label>
                  </div><!-- /.checkbox -->
	              </div><!-- /.col-md-3 -->

	              <div class="col-sm-4 mb-3">
	                <h3 class="box-title mr-b-0">Radio Box</h3>
									<p class="text-muted">Custom Radio box</p>

									<div class="form-group">
										<div class="radiobox">
											<label>
												<input type="radio" name="radio1Option[]" value="1" checked />
												<span class="label-text">Default and Primary</span>
											</label>
										</div><!-- /.radiobox -->

										<div class="radiobox radio-success">
											<label>
												<input type="radio" name="radio1Option[]" value="4" />
												<span class="label-text">Success</span>
											</label>
										</div><!-- /.radiobox -->

										<div class="radiobox radio-info">
											<label>
												<input type="radio" name="radio1Option[]" value="5" />
												<span class="label-text">Info</span>
											</label>
										</div><!-- /.radiobox -->

										<div class="radiobox radio-danger">
											<label>
												<input type="radio" name="radio1Option[]" value="6" />
												<span class="label-text">Danger</span>
											</label>
										</div><!-- /.radiobox -->

										<div class="radiobox radio-pink">
											<label>
												<input type="radio" value="3" checked disabled />
												<span class="label-text">Can't See This, Ok maybe not</span>
											</label>
										</div><!-- /.radiobox -->
									</div><!-- /.form-group -->
	              </div><!-- /.col-sm-4 -->

	            </div><!-- /.row -->
	          </div><!-- /.widget-body -->
	        </div><!-- /.widget-bg -->
	      </div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Basic Slider with Grid</h5>

	            <input type="text" data-toggle="rangeslider" data-grid="true" data-grid-num="10" data-from="500" data-min="0" data-max="1000" data-force-edges="true"/>

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Basic Slider without Grid</h5>

	            <input type="text" data-toggle="rangeslider" data-grid-num="10" data-min="0" data-max="100" data-from="30" data-force-edges="true" data-step="10" />

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Range with Min Max</h5>

	            <input type="text" data-toggle="rangeslider" data-grid-num="10" data-min="0" data-max="100" data-from="40" data-to="70" data-from-min="20" data-from-max="40" data-from-shadow="true" data-to-min="70" data-to-max="90" data-to-shadow="true" data-type="double" data-step="10" />

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Range with Min Max</h5>

	            <input type="text" data-toggle="rangeslider" data-grid-num="10" data-min="0" data-max="100" data-from="40" data-to="70" data-type="double" data-step="10" />

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
