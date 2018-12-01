<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'User Cards',
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

				<div class="col-sm-6 col-md-4 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">

							<div class="contact-info">
								<header class="text-center">
									<figure class="inline-block user--online thumb-lg">
										<img src="assets/demo/user-cards/4.jpg" class="img-circle img-thumbnail" alt="" />
									</figure>

									<h4 class="mt-1">
										<a href="#">Bill Kenny</a>
									</h4>

									<div class="contact-info-address">
										<i class="material-icons list-icon">location_on</i>
										<p>Charlotte, NC</p>
									</div>
								</header>

								<footer class="clearfix">
									<a href="#" class="float-left btn btn-success btn-rounded"><i class="material-icons list-icon">done</i>	Following</a>
									<a href="#" class="float-right btn btn-default btn-rounded">Message</a>
								</footer>
							</div><!-- /.contact-info -->

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-sm-6 col-md-4 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">

							<div class="contact-info">
								<header class="text-center">
									<figure class="inline-block user--online thumb-lg">
										<img src="assets/demo/user-cards/5.jpg" class="img-circle img-thumbnail" alt="" />
									</figure>

									<h4 class="mt-1">
										<a href="#">Cameron Moll</a>
									</h4>

									<div class="contact-info-address">
										<i class="material-icons list-icon">location_on</i>
										<p>Charlotte, NC</p>
									</div>
								</header>

								<footer class="clearfix">
									<a href="#" class="float-left btn btn-success btn-rounded"><i class="material-icons list-icon">done</i>	Following</a>
									<a href="#" class="float-right btn btn-default btn-rounded">Message</a>
								</footer>
							</div><!-- /.contact-info -->

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-sm-6 col-md-4 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">

							<div class="contact-info">
								<header class="text-center">
									<figure class="inline-block user--online thumb-lg">
										<img src="assets/demo/user-cards/6.jpg" class="img-circle img-thumbnail" alt="" />
									</figure>

									<h4 class="mt-1">
										<a href="#">Emmy Wilson</a>
									</h4>

									<div class="contact-info-address">
										<i class="material-icons list-icon">location_on</i>
										<p>Charlotte, NC</p>
									</div>
								</header>

								<footer class="clearfix">
									<a href="#" class="float-left btn btn-success btn-rounded"><i class="material-icons list-icon">done</i>	Following</a>
									<a href="#" class="float-right btn btn-default btn-rounded">Message</a>
								</footer>
							</div><!-- /.contact-info -->

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->

			<div class="row">

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">

							<div class="row">
								<div class="col-md-4">
									<div class="user-card user-card-default">
										<figure>
											<img src="assets/demo/user-cards/13.png" alt="" />
										</figure>

										<div class="user-card-details">
											<h4>Steve Smith</h4>
											<span class="user-role">Chief Executive Officer</span>
											<hr>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempus arcu ut faucibus tempus.</p>

											<ul class="social-icons-list list-inline">
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">instagram</i></a></li>
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">twitterbird</i></a></li>
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">facebook</i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- /.col-md-4 -->

								<div class="col-md-4">
									<div class="user-card user-card-default">
										<figure>
											<img src="assets/demo/user-cards/12.png" alt="" />
										</figure>

										<div class="user-card-details">
											<h4>Emily Lee</h4>
											<span class="user-role">Chief Technical Officer</span>
											<hr>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempus arcu ut faucibus tempus.</p>

											<ul class="social-icons-list list-inline">
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">instagram</i></a></li>
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">twitterbird</i></a></li>
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">facebook</i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- /.col-md-4 -->

								<div class="col-md-4">
									<div class="user-card user-card-default">
										<figure>
											<img src="assets/demo/user-cards/11.jpg" alt="" />
										</figure>

										<div class="user-card-details">
											<h4>Christopher Palmer</h4>
											<span class="user-role">Managing Director</span>
											<hr>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tempus arcu ut faucibus tempus.</p>

											<ul class="social-icons-list list-inline">
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">instagram</i></a></li>
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">twitterbird</i></a></li>
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">facebook</i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- /.col-md-4 -->
							</div><!-- /.row -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Social Icons on Hover</h5>

							<div class="row">
								<div class="col-md-4">
									<div class="text-center user-card">
										<figure class="user-card-hover-social">
											<img src="assets/demo/user-cards/12.png" alt="" />

											<ul class="social-icons-list list-inline">
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">instagram</i></a></li>
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">twitterbird</i></a></li>
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">facebook</i></a></li>
											</ul>
										</figure>

										<div class="user-card-details">
											<h4>Emily Lee</h4>
											<span class="user-role badge badge-pill bg-color-scheme">Founder</span>
										</div>
									</div>
								</div><!-- /.col-md-4 -->

								<div class="col-md-4">
									<div class="text-center user-card">
										<figure class="user-card-hover-social">
											<img src="assets/demo/user-cards/11.jpg" alt="" />

											<ul class="social-icons-list list-inline">
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">instagram</i></a></li>
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">twitterbird</i></a></li>
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">facebook</i></a></li>
											</ul>
										</figure>

										<div class="user-card-details">
											<h4>Christopher Palmer</h4>
											<span class="user-role badge badge-pill bg-color-scheme">Founder</span>
										</div>
									</div>
								</div><!-- /.col-md-4 -->

								<div class="col-md-4">
									<div class="text-center user-card">
										<figure class="user-card-hover-social">
											<img src="assets/demo/user-cards/13.png" alt="" />

											<ul class="social-icons-list list-inline">
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">instagram</i></a></li>
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">twitterbird</i></a></li>
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">facebook</i></a></li>
											</ul>
										</figure>

										<div class="user-card-details">
											<h4>Steve Smith</h4>
											<span class="user-role badge badge-pill bg-color-scheme">Founder</span>
										</div>
									</div>
								</div><!-- /.col-md-4 -->
							</div><!-- /.row -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Masonry Style</h5>

							<div class="row">
								<div class="col-md-3">
									<div class="user-card user-card-masonry">
										<figure>
											<img src="assets/demo/user-cards/13.png" alt="" />
										</figure>

										<div class="user-card-details">
											<h4>Steve Smith</h4>
											<span class="user-role">Chief Executive Officer</span>

											<ul class="social-icons-list list-inline">
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">instagram</i></a></li>
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">twitterbird</i></a></li>
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">facebook</i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- /.col-md-3 -->

								<div class="col-md-3">
									<div class="user-card user-card-masonry user-card-masonry-up">
										<div class="user-card-details">
											<h4>Emily Lee</h4>
											<span class="user-role">Chief Technical Officer</span>

											<ul class="social-icons-list list-inline">
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">instagram</i></a></li>
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">twitterbird</i></a></li>
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">facebook</i></a></li>
											</ul>
										</div>

										<figure>
											<img src="assets/demo/user-cards/12.png" alt="" />
										</figure>
									</div>
								</div><!-- /.col-md-3 -->

								<div class="col-md-3">
									<div class="user-card user-card-masonry">
										<figure>
											<img src="assets/demo/user-cards/11.jpg" alt="" />
										</figure>

										<div class="user-card-details">
											<h4>Christopher Palmer</h4>
											<span class="user-role">Managing Director</span>

											<ul class="social-icons-list list-inline">
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">instagram</i></a></li>
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">twitterbird</i></a></li>
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">facebook</i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- /.col-md-3 -->

								<div class="col-md-3">
									<div class="user-card user-card-masonry user-card-masonry-up">
										<div class="user-card-details">
											<h4>Steve Smith</h4>
											<span class="user-role">Chief Executive Officer</span>

											<ul class="social-icons-list list-inline">
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">instagram</i></a></li>
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">twitterbird</i></a></li>
												<li class="list-inline-item"><a href="#"><i class="list-icon social-icons">facebook</i></a></li>
											</ul>
										</div>

										<figure>
											<img src="assets/demo/user-cards/13.png" alt="" />
										</figure>
									</div>
								</div><!-- /.col-md-3 -->
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
