<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Your Profile',
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

				<!-- User Summary -->
				<div class="col-12 col-md-4 widget-holder">
					<div class="widget-bg">
			      <div class="widget-body clearfix">

							<div class="contact-info">
								<header class="text-center">
									<div class="float-right dropdown">
										<a href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle">
											<i class="material-icons list-icon text-color-scheme-dark">menu</i>
										</a>
										<div class="dropdown-menu dropdown-left">
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
									</div><!-- /.dropdown -->

									<div class="text-center">
										<figure class="inline-block user--online thumb-lg">
											<img src="assets/demo/user-cards/11.jpg" class="img-circle img-thumbnail" alt="" />
										</figure>
									</div>

									<h4 class="mt-1">
										<a href="#">Dustin Putnam</a>
										<span class="badge text-uppercase badge-warning align-middle">Pro</span>
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

				<!-- Tabs Content -->
				<div class="col-12 col-md-8 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">

							<div class="tabs mr-t-10">
								<ul class="nav nav-tabs">
									<li class="nav-item">
		                <a href="#home-tab-bordered-1" class="nav-link active" data-toggle="tab" aria-expanded="true">Activity</a>
		              </li>
									<li class="nav-item">
		                <a href="#profile-tab-bordered-1" class="nav-link" data-toggle="tab" aria-expanded="true">View Profile</a>
		              </li>
									<li class="nav-item">
		                <a href="#edit-tab-bordered-1" class="nav-link" data-toggle="tab" aria-expanded="true">Edit Detail</a>
		              </li>
		            </ul>

								<div class="tab-content">
									<div class="tab-pane active" id="home-tab-bordered-1">
										<ul class="list-unstyled widget-activity">
											<li class="media">
												<div class="d-flex mr-3">
													<figure class="user--online thumb-xs">
														<img src="assets/demo/users/user1.jpg" class="img-circle" alt="" />
													</figure>
												</div>

												<div class="media-body">
													<span class="badge badge-pink py-1 px-2 fs-11 fw-500 mr-1 align-top text-uppercase text-inverse">File</span>
													<h6 class="media-heading inline-block">
														<strong><a href="#">Eddie</a></strong> uploaded new files:
														<small>2 hours ago</small>
													</h6>

													<p class="media-body-content">Hi <strong>&#64;everyone</strong>, the new designs are attached.
														Go check them out and let me know if I missed anything. Thanks!</p>

													<div class="row">
														<div class="col-4 widget-body-image-list">
															<figure>
																<a href="#"><img src="assets/demo/widget-activity/1.jpeg"></a>
																<figcaption>
																	User Wall - Posts<small>PNG - 100KB</small>
																</figcaption>
															</figure>
														</div>

														<div class="col-4 widget-body-image-list">
															<figure>
																<a href="#"><img src="assets/demo/widget-activity/2.jpeg"></a>
																<figcaption>
																	User Login - Requests<small>PNG - 120KB</small>
																</figcaption>
															</figure>
														</div>

														<div class="col-4 widget-body-image-list">
															<figure>
																<a href="#"><img src="assets/demo/widget-activity/3.jpeg"></a>
																<figcaption>
																	User Wall - Posts<small>PNG - 200KB</small>
																</figcaption>
															</figure>
														</div>
													</div>
												</div>
											</li>

											<li class="media">
												<div class="d-flex mr-3">
													<figure class="user--offline thumb-xs">
														<img src="assets/demo/users/user6.jpg" class="img-circle" alt="" />
													</figure>
												</div>

												<div class="media-body">
													<span class="badge badge-success py-1 px-2 fs-11 fw-500 mr-1 align-top text-uppercase text-inverse">Task</span>
													<h6 class="media-heading inline-block">
														<strong><a href="#">Sarah</a></strong> marked the <strong>Pending Review</strong>: <a href="#">Trash Can Icon Design</a>
														<small>2 days ago</small>
													</h6>
												</div>
											</li>

											<li class="media">
												<div class="d-flex mr-3">
													<figure class="user--away thumb-xs">
														<img src="assets/demo/users/user1.jpg" class="img-circle" alt="" />
													</figure>
												</div>

												<div class="media-body">
													<span class="badge badge-pink py-1 px-2 fs-11 fw-500 mr-1 align-top text-uppercase text-inverse">File</span>
													<h6 class="media-heading inline-block">
														<strong><a href="#">Eddie</a></strong> uploaded new files:
														<small>2 hours ago</small>
													</h6>

													<p class="media-body-content">Hi <strong>&#64;everyone</strong>, the new designs are attached.
														Go check them out and let me know if I missed anything. Thanks!</p>

													<div class="row">
														<div class="col-4">
															<figure>
																<a href="#"><img src="assets/demo/widget-activity/4.jpeg" alt=""></a>
															</figure>
														</div>

														<div class="col-8">
															<p>
																Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
																dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
																commodo consequat.
															</p>
														</div>
													</div>
												</div>
											</li>

											<li class="media">
												<div class="d-flex mr-3">
													<figure class="user--online thumb-xs">
														<img src="assets/demo/users/user2.jpg" class="img-circle" alt="" />
													</figure>
												</div>

												<div class="media-body">
													<span class="badge badge-purple py-1 px-2 fs-11 fw-500 mr-1 align-top text-uppercase text-inverse">Comment</span>
													<h6 class="media-heading inline-block">
														<strong><a href="#">Okyun</a></strong> posted a task: <a href="#">Design a new Homepage</a>
														<small>8 hours ago</small>
													</h6>

													<p class="media-body-content">Hey <strong><a href="#">&#64;James</a></strong>, I don't believe that will be neccessary.
														We will just instruct the devs to build this using percent widths so it will look good on all screens.
														So, this way we don't have to spend	even more time on this!
													</p>
												</div>
											</li>
										</ul><!-- /.widget-activity -->
		              </div><!-- /.tab-pane -->

									<div class="tab-pane" id="profile-tab-bordered-1">
                    <div class="contact-details-profile pd-lr-30">
                      <h4>Interested In</h4>
                      <div class="row">
                        <div class="col-md-6">
                          <h6 class="text-muted text-uppercase">Lives in</h6>
                          <p class="mr-t-0">San Fransisco</p>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                          <h6 class="text-muted text-uppercase">Major</h6>
                          <p class="mr-t-0">Computer Engineering</p>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                          <h6 class="text-muted text-uppercase">Year</h6>
                          <p class="mr-t-0">2017</p>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                          <h6 class="text-muted text-uppercase">Season</h6>
                          <p class="mr-t-0">Spring</p>
                        </div><!-- /.col-md-6 -->
                      </div><!-- /.row -->

                      <hr class="mr-tb-50" />

                      <h4>Education Details</h4>
                      <div class="row">
                        <div class="col-md-6">
                          <h6 class="text-muted text-uppercase">Degree</h6>
                          <p class="mr-t-0">San Fransisco</p>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                          <h6 class="text-muted text-uppercase">Major</h6>
                          <p class="mr-t-0">Computer Engineering</p>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                          <h6 class="text-muted text-uppercase">University</h6>
                          <p class="mr-t-0">University of Southern Australia</p>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                          <h6 class="text-muted text-uppercase">Scores</h6>
                          <p class="mr-t-0">75.5% (3.40 GPA)</p>
                        </div><!-- /.col-md-6 -->
                      </div><!-- /.row -->

                      <hr class="mr-tb-50" />

                      <h4>Work Experience</h4>
                      <div class="row">
                        <div class="col-md-6">
                          <h6 class="text-muted text-uppercase">Worked At</h6>
                          <p class="mr-t-0">Google Inc.</p>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                          <h6 class="text-muted text-uppercase">Post</h6>
                          <p class="mr-t-0">Senior System Engineer</p>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                          <h6 class="text-muted text-uppercase">Duration</h6>
                          <p class="mr-t-0">June 2015 - Aug 2017</p>
                        </div><!-- /.col-md-6 -->
                      </div><!-- /.row -->

                      <hr class="border-0 mr-tb-50" />

                    </div><!-- /.contact-details-profile -->
                  </div><!-- /.tab-pane -->

									<div class="tab-pane" id="edit-tab-bordered-1">

										<form class="form-horizontal form-material pt-3">

                      <div class="media align-items-center p-3 mb-4 bg-light-grey">
                        <div class="d-flex mr-3">
                          <figure class="mb-0 thumb-md">
                            <img src="assets/demo/user-cards/11.jpg" class="img-thumbnail" />
                          </figure>
                        </div><!-- /.d-flex -->

                        <div class="media-body">
                          <div class="form-group">
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            <label for="exampleInputFile">File input</label>
                          </div>
                        </div><!-- /.media-body -->
                      </div><!-- /.media -->

										  <div class="form-group">
                        <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
										    <label>Full Name</label>
										  </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="email" placeholder="email@site.com" class="form-control form-control-line" name="example-email" id="example-email">
                            <label for="example-email">Email</label>
                          </div>

                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="password" placeholder="password" class="form-control form-control-line">
                            <label>Password</label>
                          </div>
                        </div><!-- /.col-md-6 -->
                      </div><!-- /.row -->

										  <div class="form-group">
                        <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
										    <label>Phone No</label>
										  </div>

										  <div class="form-group">
                        <textarea rows="3" class="form-control form-control-line"></textarea>
										    <label>Message</label>
										  </div>

										  <div class="form-group">
                        <select class="form-control form-control-line">
                          <option>Australia</option>
                          <option>India</option>
                          <option>Usa</option>
                          <option>Canada</option>
                          <option>Thailand</option>
                        </select>
										    <label>Select Country</label>
										  </div>

										  <div class="form-group">
                        <button class="btn btn-success ripple">Update Profile</button>
										  </div>
										</form>

		              </div><!-- /.tab-pane -->
								</div><!-- /.tab-content -->
							</div><!--  /.tabs -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
