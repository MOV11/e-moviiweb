<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Tags and Categories Selector',
	'body_class' => $GLOBALS['body_class'] . '',
  'styles' => array(
    'select2',
    'tagsinput',
  ),
  'scripts' => array(
    'select2',
    'tagsinput',
  ),
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

							<h5 class="box-title mr-b-0">Categories Selector</h5>
	            <p class="text-muted">Select2 for custom search and select. Use <code>data-toggle="select2"</code></p>

	            <form action="javascript:void(0);">
	              <div class="form-group">
	                <label class="form-control-label">Select multiple State</label>
	                <select class="m-b-10 form-control" multiple data-placeholder="Choose" data-toggle="select2">
	                  <optgroup label="Type 1">
                      <option>Category 1-1</option>
                      <option>Category 1-2</option>
                      <option>Category 1-2</option>
	                  </optgroup>
	                  <optgroup label="Type 2">
                      <option>Category 2-1</option>
                      <option>Category 2-2</option>
	                  </optgroup>
	                  <optgroup label="Type 3">
                      <option>Category 3-1</option>
                      <option>Category 3-2</option>
                      <option>Category 3-3</option>
                      <option>Category 3-4</option>
	                  </optgroup>
	                </select>
	              </div><!-- /.form-group -->
	            </form>
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

	      <div class="widget-holder col-md-12">
	        <div class="widget-bg">
	          <div class="widget-body">

							<div class="form-group mr-b-30">
								<h5 class="box-title mr-b-0">Input Tags</h5>
		            <p class="text-muted">Add <code>data-role="tagsinput"</code> to your input field &amp; its automatically change it to a tags input.</p>

	              <input type="text" value="Amsterdam,Washington,Sydney" class="form-control" data-role="tagsinput" placeholder="add tags" />
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
