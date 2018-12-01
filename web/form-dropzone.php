<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'File Dropzone',
	'body_class' => $GLOBALS['body_class'] . '',
  'scripts' => array(
    'dropzone'
  ),
  'styles' => array(
    'dropzone',
    'dropzone-basic'
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
							<h5 class="box-title mr-b-0">Dropzone</h5>
	            <p class="text-muted">For multiple file upload</p>

	            <form action="assets/demo" data-toggle="dropzone">
	              <div class="fallback">
	                <input type="file" name="file" id="file1" multiple />
	              </div><!-- /.fallback -->
                <div class="dz-message" data-dz-message><span>Drop files here to upload</span></div>
	            </form>
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title mr-b-0">Dropzone</h5>
	            <p class="text-muted">Dropzone inside Form</p>
	            <form>
	              <div class="form-group">
	                <label class="control-label">Name</label>
	                <input class="form-control" type="text" placeholder="Name" />
	              </div>
	              <div data-toggle="dropzone" data-plugin-options='{"url":"assets/demo"}'>
	                <div class="fallback">
	                  <input type="file" name="file" id="file2" multiple />
	                </div><!-- /.fallback -->
	                <div class="dz-message" data-dz-message><span>Drop files here to upload</span></div>
	              </div><!-- /.[data-toggle="dropzone"] -->
	            </form>
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
