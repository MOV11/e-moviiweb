<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Site Map',
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

							<div class="row">
								<div class="col-sm-6 col-md-4 sitemap mr-b-40">
									<h5 class="box-title">Oscar</h5>

									<ul class="sitemap-list sitemap-list-icons list-unstyled">

										<li class="menu-item-has-children">
											<a href="#"><i class="material-icons list-icon">fiber_manual_record</i> About</a>
											<ul class="sub-menu list-unstyled">
												<li><a href="#"><i class="material-icons list-icon">adjust</i> Business</a></li>
												<li><a href="#"><i class="material-icons list-icon">adjust</i> Philosophy</a></li>
												<li><a href="#"><i class="material-icons list-icon">adjust</i> Staff</a></li>
											</ul>
										</li>

										<li class="menu-item-has-children">
											<a href="#"><i class="material-icons list-icon">fiber_manual_record</i> Works</a>
											<ul class="sub-menu list-unstyled">

												<li class="menu-item-has-children">
													<a href="#"><i class="material-icons list-icon">adjust</i> 2016</a>
													<ul class="sub-menu list-unstyled">
														<li><a href="#"><i class="material-icons list-icon">radio_button_unchecked</i> Company</a></li>
														<li><a href="#"><i class="material-icons list-icon">radio_button_unchecked</i> Service</a></li>
														<li><a href="#"><i class="material-icons list-icon">radio_button_unchecked</i> Contest</a></li>
													</ul>
												</li>

												<li class="menu-item-has-children">
													<a href="#"><i class="material-icons list-icon">adjust</i> 2015</a>
													<ul class="sub-menu list-unstyled">
														<li><a href="#"><i class="material-icons list-icon">radio_button_unchecked</i> Company</a></li>
														<li><a href="#"><i class="material-icons list-icon">radio_button_unchecked</i> Service</a></li>
														<li><a href="#"><i class="material-icons list-icon">radio_button_unchecked</i> Contest</a></li>
													</ul>
												</li>

												<li class="menu-item-has-children">
													<a href="#"><i class="material-icons list-icon">adjust</i>	2014</a>
													<ul class="sub-menu list-unstyled">
														<li><a href="#"><i class="material-icons list-icon">radio_button_unchecked</i> Company</a></li>
														<li><a href="#"><i class="material-icons list-icon">radio_button_unchecked</i> Service</a></li>
														<li><a href="#"><i class="material-icons list-icon">radio_button_unchecked</i> Contest</a></li>
													</ul>
												</li>
											</ul>
										</li>

										<li>
											<a href="#"><i class="material-icons list-icon">fiber_manual_record</i> Contacts</a>
										</li>

										<li>
											<a href="#"><i class="material-icons list-icon">fiber_manual_record</i> Sitemap</a>
										</li>

										<li class="menu-item-has-children">
											<a href="#"><i class="material-icons list-icon">fiber_manual_record</i> Recruit</a>
											<ul class="sub-menu list-unstyled">
												<li><a href="#"><i class="material-icons list-icon">adjust</i> Web Director</a></li>
												<li><a href="#"><i class="material-icons list-icon">adjust</i> Web Designer</a></li>
												<li><a href="#"><i class="material-icons list-icon">adjust</i> Web Engineer</a></li>
											</ul>
										</li>
									</ul>
								</div><!-- /.col-md-4.sitemap -->

								<div class="col-sm-6 col-md-4 sitemap-default sitemap mr-b-40">
									<h5 class="box-title">Oscar</h5>

									<ul class="sitemap-list sitemap-list-icons list-unstyled">

										<li class="menu-item-has-children">
											<a href="#"><strong>About</strong></a>
											<ul class="sub-menu list-unstyled">
												<li><a href="#">Business</a></li>
												<li><a href="#">Philosophy</a></li>
												<li><a href="#">Staff</a></li>
											</ul>
										</li>

										<li class="menu-item-has-children">
											<a href="#"><strong>Works</strong></a>
											<ul class="sub-menu list-unstyled">

												<li class="menu-item-has-children">
													<a href="#">2016</a>
													<ul class="sub-menu list-unstyled">
														<li><a href="#">Company</a></li>
														<li><a href="#">Service</a></li>
														<li><a href="#">Contest</a></li>
													</ul>
												</li>

												<li class="menu-item-has-children">
													<a href="#">2015</a>
													<ul class="sub-menu list-unstyled">
														<li><a href="#">Company</a></li>
														<li><a href="#">Service</a></li>
														<li><a href="#">Contest</a></li>
													</ul>
												</li>

												<li class="menu-item-has-children">
													<a href="#">2014</a>
													<ul class="sub-menu list-unstyled">
														<li><a href="#">Company</a></li>
														<li><a href="#">Service</a></li>
														<li><a href="#">Contest</a></li>
													</ul>
												</li>
											</ul>
										</li>

										<li>
											<a href="#"><strong>Contacts</strong></a>
										</li>

										<li>
											<a href="#"><strong>Sitemap</strong></a>
										</li>

										<li class="menu-item-has-children">
											<a href="#"><strong>Recruit</strong></a>
											<ul class="sub-menu list-unstyled">
												<li><a href="#">Web Director</a></li>
												<li><a href="#">Web Designer</a></li>
												<li><a href="#">Web Engineer</a></li>
											</ul>
										</li>
									</ul>
								</div><!-- /.col-md-4.sitemap -->

								<div class="col-sm-6 col-md-4 sitemap-right sitemap mr-b-40">
									<h5 class="box-title text-primary">Oscar</h5>

									<ul class="sitemap-list sitemap-list-icons list-unstyled">

										<li class="menu-item-has-children">
											<a href="#"><strong>About</strong></a>
											<ul class="sub-menu list-unstyled">
												<li><a href="#">Business</a></li>
												<li><a href="#">Philosophy</a></li>
												<li><a href="#">Staff</a></li>
											</ul>
										</li>

										<li class="menu-item-has-children">
											<a href="#"><strong>Works</strong></a>
											<ul class="sub-menu list-unstyled">

												<li class="menu-item-has-children">
													<a href="#" class="text-success">2016</a>
													<ul class="sub-menu list-unstyled">
														<li><a href="#">Company</a></li>
														<li><a href="#">Service</a></li>
														<li><a href="#">Contest</a></li>
													</ul>
												</li>

												<li class="menu-item-has-children">
													<a href="#" class="text-success">2015</a>
													<ul class="sub-menu list-unstyled">
														<li><a href="#">Company</a></li>
														<li><a href="#">Service</a></li>
														<li><a href="#">Contest</a></li>
													</ul>
												</li>

												<li class="menu-item-has-children">
													<a href="#" class="text-success">2014</a>
													<ul class="sub-menu list-unstyled">
														<li><a href="#">Company</a></li>
														<li><a href="#">Service</a></li>
														<li><a href="#">Contest</a></li>
													</ul>
												</li>
											</ul>
										</li>

										<li>
											<a href="#"><strong>Contacts</strong></a>
										</li>

										<li>
											<a href="#"><strong>Sitemap</strong></a>
										</li>

										<li class="menu-item-has-children">
											<a href="#"><strong>Recruit</strong></a>
											<ul class="sub-menu list-unstyled">
												<li><a href="#">Web Director</a></li>
												<li><a href="#">Web Designer</a></li>
												<li><a href="#">Web Engineer</a></li>
											</ul>
										</li>
									</ul>
								</div><!-- /.col-md-4.sitemap -->
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
