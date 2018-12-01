<?php
include_once 'lib/init.php';

$config = array(
  'title' => 'Material Design Form',
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
              <h5 class="box-title mr-b-0">Material Design Form</h5>
              <p class="text-muted">All bootstrap element classes</p>

              <form class="form-material">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input class="form-control" id="l30" placeholder="Email Address" type="text">
                      <label for="l30">Default Input</label>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <input class="form-control" id="l31" placeholder="Password" type="password">
                      <label for="l31">Password</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group form-group-icon">
                      <div class="input-group">
                        <i class="material-icons list-icon">face</i>
                        <input class="form-control" id="l32" placeholder="Left icon" type="text">
                      </div>
                      <label for="l32">Left Icon</label>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group form-group-icon form-group-icon-right">
                      <div class="input-group">
                        <i class="material-icons list-icon">file_download</i>
                        <input class="form-control" id="l33" placeholder="Right icon" type="text">
                      </div>
                      <label for="l33">Right Icon</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input class="form-control" disabled="" id="l36" value="Disabled" type="text">
                      <label for="l36">Disabled</label>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <input class="form-control" id="l37" value="Readonly" readonly="" type="text">
                      <label for="l37">Readonly</label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <textarea class="form-control" id="l38" rows="3"></textarea>
                  <label for="l38">Textarea</label>
                </div>

                <div class="form-group">
                  <select class="form-control" id="l13">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                    <option>Option 4</option>
                    <option>Option 5</option>
                  </select>
                  <label for="l38">Select Box</label>
                </div>

                <div class="form-actions btn-list">
                  <button class="btn btn-primary" type="button">Submit</button>
                  <button class="btn btn-outline-default" type="button">Cancel</button>
                </div>
              </form>

  		      </div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
  </main><!-- /.main-wrapper -->

  <?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
