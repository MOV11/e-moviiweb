<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'TinyMCE Editor',
	'body_class' => $GLOBALS['body_class'] . '',
  'styles' => array(
    'bootstrap-wysiwyg',
  ),
  'scripts' => array(
    'tinymce',
    'tinymce.theme',
    'tinymce.jquery',
    'bootstrap-wysiwyg',
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
            <div class="widget-body">
							<h5 class="box-title mr-b-0">Bootstrap Wysiwyg Default</h5>
	            <p class="text-muted">Bootstrap html5 editor</p>
	            <textarea data-toggle="wysiwyg"></textarea>
            </div><!-- /.widget-body -->
          </div><!-- /.widget-bg -->
        </div><!-- /.col-md-12 -->

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">TinyMCE Default</h5>

	            <textarea data-toggle="tinymce" data-plugin-options='{ "height": 400 }'></textarea>
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
