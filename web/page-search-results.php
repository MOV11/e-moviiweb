<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Search Results',
	'body_class' => $GLOBALS['body_class'] . ' search-results'
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

							<form class="form-group" role="search">
	              <div class="form-input-icon d-flex">
									<i class="list-icon material-icons fs-28">search</i>
	                <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control fs-22 fw-300 ml-3 border-0" placeholder="Search Here">
	              </div>
								<hr />
	            </form><!-- /.form-group -->

							<div class="row search-results">
								<div class="col-md-3">
									<h5 class="box-title fs-14">Categories <span class="text-muted">(3)</span></h5>
									<ul class="list-unstyled mt-4">
										<li class="d-flex">
											<i class="material-icons list-icon text-muted fs-20 mr-3">add_to_photos</i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">Image Library</a>
												<small>Images List</small>
											</section>
										</li>

										<hr />

										<li class="d-flex">
											<i class="material-icons list-icon text-muted fs-20 mr-3">video_library</i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">Video Library</a>
												<small>Video List</small>
											</section>
										</li>

										<hr />

										<li class="d-flex">
											<i class="material-icons list-icon text-muted fs-20 mr-3">audiotrack</i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">Audio Library</a>
												<small>Audio List</small>
											</section>
										</li>
									</ul>
								</div>

								<div class="col-md-3">
									<h5 class="box-title fs-14">Videos <span class="text-muted">(8)</span></h5>
									<ul class="list-unstyled mt-4">
										<li class="d-flex">
											<i class="fa fa-video-camera list-icon text-muted fs-18 mr-3"></i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">Setting Up WordPress</a>
												<small>Play Video (11:54)</small>
											</section>
										</li>

										<hr />

										<li class="d-flex">
											<i class="fa fa-video-camera list-icon text-muted fs-18 mr-3"></i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">Add, Edit and Remove</a>
												<small>Play Video (3:44)</small>
											</section>
										</li>

										<hr />

										<li class="d-flex">
											<i class="fa fa-video-camera list-icon text-muted fs-18 mr-3"></i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">Category Manager</a>
												<small>Play Video (6:39)</small>
											</section>
										</li>

										<hr />

										<li class="d-flex">
											<i class="fa fa-video-camera list-icon text-muted fs-18 mr-3"></i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">Open Classifieds</a>
												<small>Play Video (1:16)</small>
											</section>
										</li>

										<hr />

										<li class="d-flex">
											<i class="fa fa-video-camera list-icon text-muted fs-18 mr-3"></i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">Effectively Manage</a>
												<small>Play Video (3:40)</small>
											</section>
										</li>

										<hr />

										<li class="d-flex">
											<i class="fa fa-video-camera list-icon text-muted fs-18 mr-3"></i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">RescueTime</a>
												<small>Play Video (1:34)</small>
											</section>
										</li>

										<hr />

										<li class="d-flex">
											<i class="fa fa-video-camera list-icon text-muted fs-18 mr-3"></i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">Menus and Pages</a>
												<small>Play Video (8:31)</small>
											</section>
										</li>

										<hr />

										<li class="d-flex">
											<i class="fa fa-video-camera list-icon text-muted fs-18 mr-3"></i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">Portal Demo</a>
												<small>Play Video (0:44)</small>
											</section>
										</li>

									</ul>
								</div>

								<div class="col-md-3">
									<h5 class="box-title fs-14">Images <span class="text-muted">(6)</span></h5>
									<ul class="list-unstyled mt-4">
										<li class="d-flex">
											<i class="fa fa-picture-o list-icon text-muted fs-18 mr-3"></i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">Documentation Image</a>
												<small>JPG (544 KB)</small>
											</section>
										</li>

										<hr />

										<li class="d-flex">
											<i class="fa fa-picture-o list-icon text-muted fs-18 mr-3"></i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">Files and Folders</a>
												<small>PNG (267 KB)</small>
											</section>
										</li>

										<hr />

										<li class="d-flex">
											<i class="fa fa-picture-o list-icon text-muted fs-18 mr-3"></i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">Access Control</a>
												<small>JPG (174 KB)</small>
											</section>
										</li>

										<hr />

										<li class="d-flex">
											<i class="fa fa-picture-o list-icon text-muted fs-18 mr-3"></i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">Custom Binding</a>
												<small>JPEG (742 KB)</small>
											</section>
										</li>

										<hr />

										<li class="d-flex">
											<i class="fa fa-picture-o list-icon text-muted fs-18 mr-3"></i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">Add or Remove Files</a>
												<small>PNG (333 KB)</small>
											</section>
										</li>

										<hr />

										<li class="d-flex">
											<i class="fa fa-picture-o list-icon text-muted fs-18 mr-3"></i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">Actions Wind</a>
												<small>JPG (934 KB)</small>
											</section>
										</li>

									</ul>
								</div>

								<div class="col-md-3">
									<h5 class="box-title fs-14">Audio <span class="text-muted">(4)</span></h5>
									<ul class="list-unstyled mt-4">
										<li class="d-flex">
											<i class="fa fa-volume-up list-icon text-muted fs-18 mr-3"></i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">Manage Files</a>
												<small>Play Audio (5:44)</small>
											</section>
										</li>

										<hr />

										<li class="d-flex">
											<i class="fa fa-volume-up list-icon text-muted fs-18 mr-3"></i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">Session Programming</a>
												<small>Play Audio (6:34)</small>
											</section>
										</li>

										<hr />

										<li class="d-flex">
											<i class="fa fa-volume-up list-icon text-muted fs-18 mr-3"></i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">Managing Sets</a>
												<small>Play Audio (4:23)</small>
											</section>
										</li>

										<hr />

										<li class="d-flex">
											<i class="fa fa-volume-up list-icon text-muted fs-18 mr-3"></i>
											<section>
												<a href="javascript:void(0)" class="h5 fs-15 mt-0 mb-1 sub-heading-font-family block">Binding Modules</a>
												<small>Play Audio (7:10)</small>
											</section>
										</li>

									</ul>
								</div>
							</div>

							<ul class="pagination mt-5 d-flex justify-content-center">
							  <li class="page-item disabled"> <a class="page-link" href="#"><i class="material-icons list-icon">chevron_left</i></a> </li>
							  <li class="page-item"> <a class="page-link" href="javascript:void(0)">1</a> </li>
							  <li class="page-item active"> <a class="page-link" href="javascript:void(0)">2</a> </li>
							  <li class="page-item"> <a class="page-link" href="javascript:void(0)">3</a> </li>
							  <li class="page-item"> <a class="page-link" href="javascript:void(0)">4</a> </li>
							  <li class="page-item"> <a class="page-link" href="javascript:void(0)">5</a> </li>
							  <li class="page-item"> <a class="page-link" href="javascript:void(0)"><i class="material-icons list-icon">chevron_right</i></a> </li>
							</ul><!-- /.pagination -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
