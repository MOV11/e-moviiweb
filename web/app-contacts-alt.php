<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Contacts List',
	'body_class' => $GLOBALS['body_class'] . ' '
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
										<img src="assets/demo/user-cards/1.jpg" class="img-circle img-thumbnail" alt="" />
									</figure>

									<h4 class="mt-1">
										<a href="#">Dustin Putnam</a>
										<span class="badge text-uppercase align-middle bg-color-scheme">Pro</span>
									</h4>

									<div class="contact-info-address">
										<i class="material-icons list-icon">location_on</i>
										<p>Charlotte, NC</p>
									</div>
								</header>

								<section class="padded-reverse">
									<h5>
										User Status
										<small class="float-right">Role: <strong>Developer</strong></small>
									</h5>

									<div class="row text-center">
										<div class="col-4">
											<span>14,563</span><br /><small>views</small>
										</div>

										<div class="col-4">
											<span>762</span><br /><small>likes</small>
										</div>

										<div class="col-4">
											<span>54</span><br /><small>comments</small>
										</div>
									</div>
								</section><!-- /.padded-reverse -->

								<footer class="clearfix">
									<a href="#" class="btn btn-success btn-rounded"><i class="material-icons list-icon">done</i>	Following</a>
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
										<img src="assets/demo/user-cards/2.jpg" class="img-circle img-thumbnail" alt="" />
									</figure>

									<h4 class="mt-1">
										<a href="#">Julien Renvoye</a>
									</h4>

									<div class="contact-info-address">
										<i class="material-icons list-icon">location_on</i>
										<p>Charlotte, NC</p>
									</div>
								</header>

								<section class="padded-reverse">
									<h5>
										User Status
										<small class="float-right">Role: <strong>Designer</strong></small>
									</h5>

									<div class="row text-center">
										<div class="col-4">
											<span>24,563</span><br /><small>views</small>
										</div>

										<div class="col-4">
											<span>662</span><br /><small>likes</small>
										</div>

										<div class="col-4">
											<span>14</span><br /><small>comments</small>
										</div>
									</div>
								</section><!-- /.padded-reverse -->

								<footer class="clearfix">
									<a href="#" class=" btn btn-success btn-rounded"><i class="material-icons list-icon">done</i>	Following</a>
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
										<img src="assets/demo/user-cards/3.jpg" class="img-circle img-thumbnail" alt="" />
									</figure>

									<h4 class="mt-1">
										<a href="#">Trent Walton</a>
										<span class="badge text-uppercase align-middle bg-color-scheme">Pro</span>
									</h4>

									<div class="contact-info-address">
										<i class="material-icons list-icon">location_on</i>
										<p>Charlotte, NC</p>
									</div>
								</header>

								<section class="padded-reverse">
									<h5>
										User Status
										<small class="float-right">Role: <strong>Marketing</strong></small>
									</h5>

									<div class="row text-center">
										<div class="col-4">
											<span>17,563</span><br /><small>views</small>
										</div>

										<div class="col-4">
											<span>82</span><br /><small>likes</small>
										</div>

										<div class="col-4">
											<span>34</span><br /><small>comments</small>
										</div>
									</div>
								</section>

								<footer class="clearfix">
									<a href="#" class=" btn btn-success btn-rounded"><i class="material-icons list-icon">done</i>	Following</a>
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

				<div class="col-sm-6 col-md-4 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">

							<div class="contact-info">
								<header class="text-center">
									<figure class="inline-block user--online thumb-lg">
										<img src="assets/demo/user-cards/7.jpg" class="img-circle img-thumbnail" alt="" />
									</figure>

									<h4 class="mt-1">
										<a href="#">John Doe</a>
										<span class="badge text-uppercase align-middle bg-color-scheme">Pro</span>
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
										<img src="assets/demo/user-cards/8.jpg" class="img-circle img-thumbnail" alt="" />
									</figure>

									<h4 class="mt-1">
										<a href="#">Moanna Andrew</a>
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
										<img src="assets/demo/user-cards/11.jpg" class="img-circle img-thumbnail" alt="" />
									</figure>

									<h4 class="mt-1">
										<a href="#">Eddie Lebanovskiy</a>
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
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
