<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Chat Page',
	'body_class' => $GLOBALS['body_class'] . ' chat-page'
);

get_header($config);
?>

<div class="content-wrapper">
	<?php get_template_part( $GLOBALS['sidebar_file'] ) ?>

	<main class="main-wrapper pb-0 clearfix">

		<!-- =================================== -->
		<!-- Different data widgets ============ -->
		<!-- =================================== -->
		<div class="widget-list">
			<div class="row">

				<div class="col-md-12 widget-holder">
					<div class="widget-bg ">
			      <div class="widget-body clearfix">
              <div class="row no-gutters pos-relative">

								<!-- Chat Area -->
								<div class="col-sm-12 col-md-9 chat-left">
									<header class="d-flex justify-content-between">
										<a href="#" class="btn btn-sm btn-secondary">Back</a>
										<h4 class="my-0 sub-heading-font-family fw-400">Nick Lampard</h4>
										<a href="#" class="btn btn-sm btn-secondary">View Profile</a>
									</header>

									<section class="scrollbar-enabled scroll-to-bottom">
										<ul class="list-unstyled pd-t-20 mr-l-20">

											<li class="media user-left">
												<div class="d-flex mr-3">
													<a href="#">
														<img class="img-circle" src="assets/demo/users/user1.jpg" alt="" />
													</a>
												</div>

												<div class="media-body">
													<p class="mt-1 mb-2">Hello, Ashley How are you and your mother and what are you doing these days ?</p>
													<small class="block">7:13 PM</small>
												</div>
											</li>

											<li class="media user-right">
												<div class="d-flex ml-3">
													<a href="#">
														<img class="img-circle" src="assets/demo/users/user2.jpg" alt="" />
													</a>
												</div>

												<div class="media-body text-right">
													<p class="text-justify mt-1 mb-2">Hello, Nick We both are fine and we are doing some dance practice for an event.</p>
													<small class="block">12:18 AM</small>
												</div>
											</li>

											<li class="media user-left">
												<div class="d-flex mr-3">
													<a href="#">
														<img class="img-circle" src="assets/demo/users/user1.jpg" alt="" />
													</a>
												</div>

												<div class="media-body">
													<p class="mt-1 mb-2">It was all a dream, I used to read Word Up magazine Saltin Pepa and Heavy D up in the limousine.</p>
													<small class="block">9:16 PM</small>
												</div>
											</li>

											<li class="media user-left">
												<div class="d-flex mr-3">
													<a href="#">
														<img class="img-circle" src="assets/demo/users/user1.jpg" alt="" />
													</a>
												</div>

												<div class="media-body">
													<img class="mt-1 mb-2" src="assets/demo/demo-video-poster.jpg" alt="" />
													<small class="block">11:11 PM</small>
												</div>
											</li>

											<li class="media user-right">
												<div class="d-flex ml-3">
													<a href="#">
														<img class="img-circle" src="assets/demo/users/user2.jpg" alt="" />
													</a>
												</div>

												<div class="media-body text-right">
													<p class="text-justify mt-1 mb-2">Did you ever hang pictures on your wall ?</p>
													<small class="block">7:33 AM</small>
												</div>
											</li>

											<li class="media user-left">
												<div class="d-flex mr-3">
													<a href="#">
														<img class="img-circle" src="assets/demo/users/user1.jpg" alt="" />
													</a>
												</div>

												<div class="media-body">
													<p class="mt-1 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													<small class="block">2:19 PM</small>
												</div>
											</li>

											<li class="media user-right">
												<div class="d-flex ml-3">
													<a href="#">
														<img class="img-circle" src="assets/demo/users/user2.jpg" alt="" />
													</a>
												</div>

												<div class="media-body text-right">
													<p class="text-justify mt-1 mb-2">Hahahaha awesome, i think	i know the album your looking</p>
													<small class="block">6:14 AM</small>
												</div>
											</li>

											<li class="media user-left">
												<div class="d-flex mr-3">
													<a href="#">
														<img class="img-circle" src="assets/demo/users/user1.jpg" alt="" />
													</a>
												</div>

												<div class="media-body">
													<p class="mt-1 mb-2">Hello, Ashley How are you and your mother and what are you doing these days ?</p>
													<small class="block">12:17 PM</small>
												</div>
											</li>

											<li class="media user-right">
												<div class="d-flex ml-3">
													<a href="#">
														<img class="img-circle" src="assets/demo/users/user2.jpg" alt="" />
													</a>
												</div>

												<div class="media-body text-right">
													<p class="text-justify mt-1 mb-2">Hello, Nick We both are fine and we are doing some dance practice for an event.</p>
													<small class="block">10:53 AM</small>
												</div>
											</li>

											<li class="media user-left">
												<div class="d-flex mr-3">
													<a href="#">
														<img class="img-circle" src="assets/demo/users/user1.jpg" alt="" />
													</a>
												</div>

												<div class="media-body">
													<p class="mt-1 mb-2">It was all a dream, I used to read Word Up magazine Saltin Pepa and Heavy D up in the limousine.</p>
													<small class="block">3:23 PM</small>
												</div>
											</li>

										</ul>
									</section>

									<footer class="d-flex mt-4 mx-3">
										<a href="#" class="thumb-xs mr-2">
											<img class="img-circle" src="assets/demo/users/user1.jpg" alt="" />
										</a>
										<div class="form-group input-group mr-2">
                      <input class="form-control" placeholder="Type your message..." type="password">
                      <a href="#" class="input-group-addon">
                        <i class="fa fa-paperclip list-icon"></i>
                      </a>
                    </div>
										<div>
											<a href="#" class="btn btn-success px-4">Send</a>
										</div>
									</footer>
								</div><!-- /.chat-right -->

                <!-- Users' List -->
                <div class="chat-right col-md-3 hidden-sm-down scrollbar-enabled">
									<div class="chat-search">
										<div class="form-input-icon">
											<i class="material-icons list-icon">search</i>
											<input class="form-control" id="l6" placeholder="Search messages" type="text">
										</div>
									</div>

                  <div class="chat-contact-list">
                    <ul class="list-unstyled widget-user-list">

                      <li class="media">
                        <div class="d-flex mr-3">
                          <a href="#" class="block user--online thumb-xs">
                            <img src="assets/demo/users/user1.jpg" class="img-circle" alt="" />
                          </a>
                        </div>

                        <div class="media-body">
                          <h5 class="media-heading mb-0 d-flex">
                            <a href="#" class="mr-auto">Nick Lampard</a>
														<span class="text-muted mr-4 fw-300 fs-14">3:27 pm</span>
                          </h5>
													<small class="mr-4">Hello, How are you.... ? Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
                        </div>
                      </li>

                      <li class="media">
                        <div class="d-flex mr-3">
                          <a href="#" class="block user--busy thumb-xs">
                            <img src="assets/demo/users/user2.jpg" class="img-circle" alt="" />
                          </a>
                        </div>

                        <div class="media-body">
                          <h5 class="media-heading mb-0 d-flex">
                            <a href="#" class="mr-auto">Ashley Wilson</a>
                            <span class="text-muted mr-4 fw-300 fs-14">7:23 pm</span>
                          </h5>
													<small class="mr-4">Help me Nick. I am in trouble. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
                        </div>
                      </li>

                      <li class="media">
                        <div class="d-flex mr-3">
                          <a href="#" class="block user--away thumb-xs">
                            <img src="assets/demo/users/user3.jpg" class="img-circle" alt="" />
                          </a>
                        </div>

                        <div class="media-body">
                          <h5 class="media-heading mb-0 d-flex">
                            <a href="#" class="mr-auto">Shannon Wang Lee</a>
														<span class="text-muted mr-4 fw-300 fs-14">8:13 am</span>
                          </h5>
													<small class="mr-4">I am going to Scotland buddy. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
                        </div>
                      </li>

                      <li class="media">
                        <div class="d-flex mr-3">
                          <a href="#" class="block user--offline thumb-xs">
                            <img src="assets/demo/users/user4.jpg" class="img-circle" alt="" />
                          </a>
                        </div>

                        <div class="media-body">
                          <h5 class="media-heading mb-0 d-flex">
                            <a href="#" class="mr-auto">Cameron Moll</a>
                            <span class="text-muted mr-4 fw-300 fs-14">5:25 pm</span>
                          </h5>
													<small class="mr-4">Don't call me again Nick. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
                        </div>
                      </li>

                      <li class="media">
                        <div class="d-flex mr-3">
                          <a href="#" class="block user--online thumb-xs">
                            <img src="assets/demo/users/user1.jpg" class="img-circle" alt="" />
                          </a>
                        </div>

                        <div class="media-body">
                          <h5 class="media-heading mb-0 d-flex">
                            <a href="#" class="mr-auto">Nick Lampard</a>
                            <span class="text-muted mr-4 fw-300 fs-14">9:17 am</span>
                          </h5>
													<small class="mr-4">Hello, How are you.... ? Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
                        </div>
                      </li>

                      <li class="media">
                        <div class="d-flex mr-3">
                          <a href="#" class="block user--busy thumb-xs">
                            <img src="assets/demo/users/user2.jpg" class="img-circle" alt="" />
                          </a>
                        </div>

                        <div class="media-body">
                          <h5 class="media-heading mb-0 d-flex">
                            <a href="#" class="mr-auto">Ashley Wilson</a>
                            <span class="text-muted mr-4 fw-300 fs-14">6:18 am</span>
                          </h5>
													<small class="mr-4">Help me Nick. I am in trouble. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
                        </div>
                      </li>

                      <li class="media">
                        <div class="d-flex mr-3">
                          <a href="#" class="block user--away thumb-xs">
                            <img src="assets/demo/users/user3.jpg" class="img-circle" alt="" />
                          </a>
                        </div>

                        <div class="media-body">
                          <h5 class="media-heading mb-0 d-flex">
                            <a href="#" class="mr-auto">Shannon Wang Lee</a>
                            <span class="text-muted mr-4 fw-300 fs-14">1:19 pm</span>
                          </h5>
													<small class="mr-4">I am going to Scotland buddy. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
                        </div>
                      </li>

                      <li class="media">
                        <div class="d-flex mr-3">
                          <a href="#" class="block user--offline thumb-xs">
                            <img src="assets/demo/users/user4.jpg" class="img-circle" alt="" />
                          </a>
                        </div>

                        <div class="media-body">
                          <h5 class="media-heading mb-0 d-flex">
                            <a href="#" class="mr-auto">Cameron Moll</a>
                            <span class="text-muted mr-4 fw-300 fs-14">2:20 am</span>
                          </h5>
													<small class="mr-4">Don't call me again Nick. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
                        </div>
                      </li>

                      <li class="media">
                        <div class="d-flex mr-3">
                          <a href="#" class="block user--online thumb-xs">
                            <img src="assets/demo/users/user1.jpg" class="img-circle" alt="" />
                          </a>
                        </div>

                        <div class="media-body">
                          <h5 class="media-heading mb-0 d-flex">
                            <a href="#" class="mr-auto">Nick Lampard</a>
                            <span class="text-muted mr-4 fw-300 fs-14">6:07 am</span>
                          </h5>
													<small class="mr-4">I am happy, what you love it. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
                        </div>
                      </li>

                      <li class="media">
                        <div class="d-flex mr-3">
                          <a href="#" class="block user--busy thumb-xs">
                            <img src="assets/demo/users/user2.jpg" class="img-circle" alt="" />
                          </a>
                        </div>

                        <div class="media-body">
                          <h5 class="media-heading mb-0 d-flex">
                            <a href="#" class="mr-auto">Ashley Wilson</a>
                            <span class="text-muted mr-4 fw-300 fs-14">7:23 pm</span>
                          </h5>
													<small class="mr-4">Ofcourse mate. Never let you down. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
                        </div>
                      </li>

                      <li class="media">
                        <div class="d-flex mr-3">
                          <a href="#" class="block user--away thumb-xs">
                            <img src="assets/demo/users/user3.jpg" class="img-circle" alt="" />
                          </a>
                        </div>

                        <div class="media-body">
                          <h5 class="media-heading mb-0 d-flex">
                            <a href="#" class="mr-auto">Shannon Wang Lee</a>
														<span class="text-muted mr-4 fw-300 fs-14">8:13 pm</span>
                          </h5>
													<small class="mr-4">Ok, I will be there. I will Help you. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
                        </div>
                      </li>

                      <li class="media">
                        <div class="d-flex mr-3">
                          <a href="#" class="block user--offline thumb-xs">
                            <img src="assets/demo/users/user4.jpg" class="img-circle" alt="" />
                          </a>
                        </div>

                        <div class="media-body">
                          <h5 class="media-heading mb-0 d-flex">
                            <a href="#" class="mr-auto">Cameron Moll</a>
														<span class="text-muted mr-4 fw-300 fs-14">3:15 am</span>
                          </h5>
													<small class="mr-4">What you are talking about? Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
                        </div>
                      </li>

                      <li class="media">
                        <div class="d-flex mr-3">
                          <a href="#" class="block user--busy thumb-xs">
                            <img src="assets/demo/users/user2.jpg" class="img-circle" alt="" />
                          </a>
                        </div>

                        <div class="media-body">
                          <h5 class="media-heading mb-0 d-flex">
                            <a href="#" class="mr-auto">Ashley Wilson</a>
														<span class="text-muted mr-4 fw-300 fs-14">1:53 am</span>
                          </h5>
													<small class="mr-4">It goes something like this. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
                        </div>
                      </li>

											<li class="media">
                        <div class="d-flex mr-3">
                          <a href="#" class="block user--online thumb-xs">
                            <img src="assets/demo/users/user1.jpg" class="img-circle" alt="" />
                          </a>
                        </div>

                        <div class="media-body">
                          <h5 class="media-heading mb-0 d-flex">
                            <a href="#" class="mr-auto">Nick Lampard</a>
														<span class="text-muted mr-4 fw-300 fs-14">3:27 pm</span>
                          </h5>
													<small class="mr-4">Hello, How are you.... ? Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
                        </div>
                      </li>

                      <li class="media">
                        <div class="d-flex mr-3">
                          <a href="#" class="block user--busy thumb-xs">
                            <img src="assets/demo/users/user2.jpg" class="img-circle" alt="" />
                          </a>
                        </div>

                        <div class="media-body">
                          <h5 class="media-heading mb-0 d-flex">
                            <a href="#" class="mr-auto">Ashley Wilson</a>
                            <span class="text-muted mr-4 fw-300 fs-14">7:23 pm</span>
                          </h5>
													<small class="mr-4">Help me Nick. I am in trouble. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
                        </div>
                      </li>

                      <li class="media">
                        <div class="d-flex mr-3">
                          <a href="#" class="block user--away thumb-xs">
                            <img src="assets/demo/users/user3.jpg" class="img-circle" alt="" />
                          </a>
                        </div>

                        <div class="media-body">
                          <h5 class="media-heading mb-0 d-flex">
                            <a href="#" class="mr-auto">Shannon Wang Lee</a>
														<span class="text-muted mr-4 fw-300 fs-14">8:13 am</span>
                          </h5>
													<small class="mr-4">I am going to Scotland buddy. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
                        </div>
                      </li>

                    </ul><!-- /.widget-user-list -->
                  </div><!-- /.chat-contact-list -->
                </div><!-- /.chat-right -->


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
