<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Blank Page',
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

						<div class="widget-heading clearfix">
			        <h5>Blank Starter Page</h5>

							<ul class="widget-actions">
								<li>
									<a href="javascript:void(0);">
										<i class="material-icons list-icon">cached</i>
									</a>
								</li>

								<li>
									<div class="dropdown">
										<a class="color-content-color" href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
											<i class="material-icons list-icon">more_vert</i>
										</a>

										<div class="dropdown-menu">
											<a class="dropdown-item" href="javascript:void(0);">
												<i class="material-icons list-icon float-left mr-r-10">date_range</i>
												History
											</a>

											<a class="dropdown-item" href="javascript:void(0);">
												<i class="material-icons list-icon float-left mr-r-10">format_list_bulleted</i>
												Detailed logs
											</a>

											<a class="dropdown-item" href="javascript:void(0);">
												<i class="material-icons list-icon float-left mr-r-10">pie_chart_outlined</i>
												Statistics
											</a>

											<div role="separator" class="dropdown-divider"></div>

											<a class="dropdown-item" href="javascript:void(0);">
												<i class="material-icons list-icon float-left mr-r-10">close</i>
												<strong>Clear list</strong>
											</a>
										</div>
									</div>
								</li>
							</ul><!-- /.widget-actions -->

			      </div><!-- /.widget-heading -->

			      <div class="widget-body clearfix">
			        <p>
			          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			        </p>
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
