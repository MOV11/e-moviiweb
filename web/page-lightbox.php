<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Lightbox',
  'body_class' => $GLOBALS['body_class'] . '',
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

							<div class="row lightbox-gallery" data-toggle="lightbox-gallery" data-type="image" data-effect="fadeInRight">

								<div id="lightbox-popup-gallery" class="col-md-4 lightbox">
									<h4 class="box-title">Lightbox Gallery</h4>
	                <a href="assets/demo/carousel/carousel-4.jpg" title="Gallery 1">
	                  <img src="assets/demo/carousel/carousel-4.jpg" alt="Thumb 1" />
										<span class="hover-effect">
											<i class="material-icons list-icon fs-36">add_circle_outline</i>
										</span>
	                </a>
	              </div><!-- /.col-md-4 -->

								<div id="lightbox-popup-image" class="col-sm-6 col-md-4 mr-b-20 lightbox">
	                <h4 class="box-title">Lightbox showing single image</h4>
	                <a href="assets/demo/carousel/carousel-1.jpg" title="Lightbox 1" data-toggle="lightbox" data-type="image">
	                  <img src="assets/demo/carousel/carousel-1.jpg" alt="Thumb 1" />
										<span class="hover-effect">
											<i class="material-icons list-icon fs-36">add_circle_outline</i>
										</span>
	                </a>
	              </div><!-- /.col-md-4 -->

								<div id="lightbox-popup-video" class="col-sm-6 col-md-4 mr-b-20 lightbox">
									<h4 class="box-title">Youtube Embed</h4>
									<a href="https://www.youtube.com/watch?v=mxxIloURtoU" class="mfp-iframe" data-toggle="lightbox" data-type="iframe">
										<img src="assets/demo/carousel/carousel-6.jpg" alt="Thumb 1" />
										<span class="hover-effect">
											<i class="material-icons list-icon fs-36">play_circle_outline</i>
										</span>
									</a>
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
