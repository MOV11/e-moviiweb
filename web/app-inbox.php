<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Inbox',
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
			<div class="row no-gutters">

				<div class="col-md-12 widget-holder widget-no-padding">
					<div class="widget-bg">
			      <div class="widget-body clearfix">

							<div class="row no-gutters">

								<!-- Mail Sidebar -->
								<div class="col-lg-2 col-md-3 col-sm-3 col-12 mail-sidebar">
                  <div class="m-3">
                    <a href="app-inbox-compose.php" class="btn btn-lg btn-danger btn-block ripple text-uppercase fs-16">Compose</a>
                  </div>

									<div class="inbox-categories">
										<ul class="list-unstyled">
							        <li>
							          <a href="#" class="active">
													<i class="material-icons list-icon float-left mr-2">inbox</i>
							            <span class="badge fs-12 bg-danger float-right">8</span>
							            Inbox
							          </a>
							        </li>
											<li>
							          <a href="#">
													<i class="material-icons list-icon float-left mr-2">star</i>
							            Starred
							          </a>
							        </li>
											<li>
							          <a href="#">
													<i class="material-icons list-icon float-left mr-2">drafts</i>
													<span class="badge fs-12 bg-info float-right">32</span>
							            Draft
							          </a>
							        </li>
											<li>
							          <a href="#">
													<i class="material-icons list-icon float-left mr-2">send</i>
							            Sent Mails
							          </a>
							        </li>
											<li role="separator" class="divider"></li>
											<li>
							          <a href="#">
													<i class="material-icons list-icon float-left mr-2">delete</i>
							            Trash
							          </a>
							        </li>
											<li>
							          <a href="#" class="add-btn">
													<i class="material-icons list-icon float-left mr-2">add</i>
							            Add More
							          </a>
							        </li>
							      </ul>
									</div><!-- /.inbox-categories -->

									<div class="inbox-categories inbox-labels mr-b-40">
										<h6 class="text-muted text-uppercase pl-3">Labels</h6>

										<ul class="list-unstyled">
							        <li>
							          <a href="#">
													<i class="material-icons list-icon text-info float-right mr-2">bookmark</i>
							            Web App
							          </a>
							        </li>
											<li>
							          <a href="#">
													<i class="material-icons list-icon text-warning float-right mr-2">bookmark</i>
							            Project 1
							          </a>
							        </li>
											<li>
							          <a href="#">
													<i class="material-icons list-icon text-primary float-right mr-2">bookmark</i>
							            Project 2
							          </a>
							        </li>
											<li>
							          <a href="#">
													<i class="material-icons list-icon text-success float-right mr-2">bookmark</i>
							            Family
							          </a>
							        </li>
											<li>
							          <a href="#">
													<i class="material-icons list-icon text-danger float-right mr-2">bookmark</i>
							            Friends
							          </a>
							        </li>
											<li>
							          <a href="#" class="add-btn">
													<i class="material-icons list-icon float-left mr-2">add</i>
							            Add More
							          </a>
							        </li>
							      </ul>
									</div><!-- /.inbox-labels -->
								</div><!-- /.mail-sidebar -->

								<!-- Mails List -->
								<div class="col-lg-10 col-md-9 col-sm-9 col-12 mail-inbox">
									<div class="row pl-3 pr-3 pt-4">
										<h2 class="col-sm-6 col-md-7 mr-t-0 fw-300 h1 sub-heading-font-family">Inbox</h2>

										<form class="col-sm-6 col-md-5 mr-t-0" action="javascript:void(0);" method="get">
											<div class="form-input-icon form-input-icon-right">
		                    <i class="material-icons list-icon">search</i>
		                    <input class="form-control" id="l6" placeholder="Search Inbox" type="text">
		                  </div>
										</form>
									</div>

									<header class="row pl-3 pr-3 pt-0 ml-0">
										<div class="col-sm-8 mail-inbox-tools pl-0 mt-3">

											<span class="checkbox checkbox-primary mail-inbox-select-all">
			                  <label>
			                    <input type="checkbox" />
			                    <span class="label-text">Select all</span>
			                  </label>
			                </span>

											<div class="btn-group">
	                      <a href="javascript:void(0)" class="btn btn-sm btn-outline-default ripple border-bottom-0"><i class="list-icon material-icons">loop</i></a>
	                      <a href="javascript:void(0)" class="btn btn-sm btn-outline-default ripple border-bottom-0"><i class="list-icon material-icons">delete</i></a>
	                      <a href="javascript:void(0)" class="btn btn-sm btn-outline-default ripple border-bottom-0"><i class="list-icon material-icons">favorite</i></a>
	                    </div>

											<div class="btn-group m-r-10">
												<a href="javascript:void(0)" data-toggle="dropdown" class="btn btn-sm btn-outline-default dropdown-toggle ripple border-bottom-0">
		 											More
		 											<span class="caret"></span>
		 										</a>

				                <div role="menu" class="dropdown-menu">
				                  <a class="dropdown-item" href="javascript:void(0)">Mark as Unread</a>
				                  <a class="dropdown-item" href="javascript:void(0)">Add to Tasks</a>
				                  <a class="dropdown-item" href="javascript:void(0)">Add Star</a>
                          <div class="dropdown-divider"></div>
				                  <a class="dropdown-item" href="javascript:void(0)">Mute</a>
				                </div>
				              </div>
										</div><!-- /.col-md-6 -->

										<ul class="col-sm-4 hidden-xs-down list-inline text-right mb-0 mt-3 mail-inbox-sort">
											<li class="list-inline-item">
												<a href="javascript:void(0)">Alphabetically</a>
											</li>
											<li class="list-inline-item active">
												<a href="javascript:void(0)">Recent</a>
											</li>
										</ul>
									</header>

									<table class="mail-list">
										<tbody>
											<tr class="unread">
												<td class="mail-list-user">
                          <label>
                            <input type="checkbox" checked />
                            <figure>
                              <img width="30" height="30" class="img-circle" src="assets/demo/users/user4.jpg" alt="" />
                            </figure>
                          </label>
												</td>

												<td class="mail-list-star"><i class="list-icon material-icons">star_bordered</i></td>
												<td class="mail-list-name"><a href="app-inbox-single.php">Jerome Sallee</a></td>

												<td class="mail-list-message">
													<a href="app-inbox-single.php">
														<span class="badge bg-info px-2">Family</span>
														Chilling in Hawaii!!!
													</a>
												</td>

												<td class="mail-list-time">8:30 pm</td>
											</tr>

											<tr class="unread">
												<td class="mail-list-user">
                          <label>
                            <input type="checkbox" checked />
                            <figure>
                              <img width="30" height="30" class="img-circle" src="assets/demo/users/user2.jpg" alt="" />
                            </figure>
                          </label>
												</td>

												<td class="mail-list-star"><i class="list-icon material-icons text-warning">star</i></td>
												<td class="mail-list-name"><a href="app-inbox-single.php">Jacob Hubertus</a></td>

												<td class="mail-list-message">
													<a href="app-inbox-single.php">
														What you've learn't about creating?
													</a>
												</td>

												<td class="mail-list-time">7:22 pm</td>
											</tr>

											<tr class="unread">
												<td class="mail-list-user">
                          <label>
                            <input type="checkbox" />
                            <figure>
                              <img width="30" height="30" class="img-circle" src="assets/img/default-avatar.jpg" alt="" />
                            </figure>
                          </label>
												</td>

												<td class="mail-list-star"><i class="list-icon material-icons">star_bordered</i></td>
												<td class="mail-list-name"><a href="app-inbox-single.php">Jeremy Pervorse</a></td>

												<td class="mail-list-message">
													<a href="app-inbox-single.php">
														Street Photography Competition
													</a>
												</td>

												<td class="mail-list-time">Jun 15</td>
											</tr>

											<tr>
												<td class="mail-list-user">
                          <label>
                            <input type="checkbox" checked />
                            <figure>
                              <img width="30" height="30" class="img-circle" src="assets/demo/users/user7.jpg" alt="" />
                            </figure>
                          <label>
												</td>

												<td class="mail-list-star"><i class="list-icon material-icons">star_bordered</i></td>
												<td class="mail-list-name"><a href="app-inbox-single.php">Gustav Butlex</a></td>

												<td class="mail-list-message">
													<a href="app-inbox-single.php">
														<span class="badge bg-success px-2">Friends</span>
														Playstation this weekend?
													</a>
												</td>

												<td class="mail-list-time">Jun 15</td>
											</tr>

											<tr>
												<td class="mail-list-user">
                          <label>
                            <input type="checkbox" />
                            <figure>
                              <img width="30" height="30" class="img-circle" src="assets/demo/users/user6.jpg" alt="" />
                            </figure>
                          </label>
												</td>

												<td class="mail-list-star"><i class="list-icon material-icons">star_bordered</i></td>
												<td class="mail-list-name"><a href="app-inbox-single.php">Sarah Paramentor</a></td>

												<td class="mail-list-message">
													<a href="app-inbox-single.php">
														<span class="badge bg-danger px-2">Work</span>
														[Dribbble] Work Inquiry from Google Inc.
													</a>
												</td>

												<td class="mail-list-time">Jun 15</td>
											</tr>

											<tr>
												<td class="mail-list-user">
                          <label>
													<input type="checkbox" />
													<figure>
														<img width="30" height="30" class="img-circle" src="assets/img/default-avatar.jpg" alt="" />
													</figure>
                          </label>
												</td>

												<td class="mail-list-star"><i class="list-icon material-icons">star_bordered</i></td>
												<td class="mail-list-name"><a href="app-inbox-single.php">Victor Erixon</a></td>

												<td class="mail-list-message">
													<a href="app-inbox-single.php">
														HTML & CSS Tutorial?
													</a>
												</td>

												<td class="mail-list-time">Jun 14</td>
											</tr>

											<tr>
												<td class="mail-list-user">
                          <label>
                            <input type="checkbox" />
                            <figure>
                              <img width="30" height="30" class="img-circle" src="assets/demo/users/user4.jpg" alt="" />
                            </figure>
                          </label>
												</td>

												<td class="mail-list-star"><i class="list-icon material-icons">star_bordered</i></td>
												<td class="mail-list-name"><a href="app-inbox-single.php">Jerome Sallee</a></td>

												<td class="mail-list-message">
													<a href="app-inbox-single.php">
														<span class="badge bg-info px-2">Family</span>
														Chilling in Hawaii!!!
													</a>
												</td>

												<td class="mail-list-time">Jun 13</td>
											</tr>

											<tr>
												<td class="mail-list-user">
                          <label>
                            <input type="checkbox" checked />
                            <figure>
                              <img width="30" height="30" class="img-circle" src="assets/demo/users/user2.jpg" alt="" />
                            </figure>
                          </label>
												</td>

												<td class="mail-list-star"><i class="list-icon material-icons text-warning">star</i></td>
												<td class="mail-list-name"><a href="app-inbox-single.php">Jacob Hubertus</a></td>

												<td class="mail-list-message">
													<a href="app-inbox-single.php">
														What you've learn't about creating?
													</a>
												</td>

												<td class="mail-list-time">Jun 10</td>
											</tr>

											<tr>
												<td class="mail-list-user">
                          <label>
                            <input type="checkbox" />
                            <figure>
                              <img width="30" height="30" class="img-circle" src="assets/demo/users/user3.jpg" alt="" />
                            </figure>
                          </label>
												</td>

												<td class="mail-list-star"><i class="list-icon material-icons text-warning">star</i></td>
												<td class="mail-list-name"><a href="app-inbox-single.php">Jeremy Pervorse</a></td>

												<td class="mail-list-message">
													<a href="app-inbox-single.php">
														Street Photography Competition
													</a>
												</td>

												<td class="mail-list-time">Jun 9</td>
											</tr>

											<tr>
												<td class="mail-list-user">
                          <label>
                            <input type="checkbox" />
                            <figure>
                              <img width="30" height="30" class="img-circle" src="assets/demo/users/user7.jpg" alt="" />
                            </figure>
                          </label>
												</td>

												<td class="mail-list-star"><i class="list-icon material-icons">star_bordered</i></td>
												<td class="mail-list-name"><a href="app-inbox-single.php">Gustav Butlex</a></td>

												<td class="mail-list-message">
													<a href="app-inbox-single.php">
														<span class="badge bg-warning px-2">Friends</span>
														Playstation this weekend?
													</a>
												</td>

												<td class="mail-list-time">Jun 8</td>
											</tr>

											<tr>
												<td class="mail-list-user">
                          <label>
                            <input type="checkbox" />
                            <figure>
                              <img width="30" height="30" class="img-circle" src="assets/demo/users/user6.jpg" alt="" />
                            </figure>
                          </label>
												</td>

												<td class="mail-list-star"><i class="list-icon material-icons">star_bordered</i></td>
												<td class="mail-list-name"><a href="app-inbox-single.php">Sarah Paramentor</a></td>

												<td class="mail-list-message">
													<a href="app-inbox-single.php">
														<span class="badge bg-danger px-2">Work</span>
														[Dribbble] Work Inquiry from Google Inc.
													</a>
												</td>

												<td class="mail-list-time">Jun 8</td>
											</tr>

											<tr>
												<td class="mail-list-user">
                          <label>
                            <input type="checkbox" />
                            <figure>
                              <img width="30" height="30" class="img-circle" src="assets/demo/users/user-image.png" alt="" />
                            </figure>
                          </label>
												</td>

												<td class="mail-list-star"><i class="list-icon material-icons">star_bordered</i></td>
												<td class="mail-list-name"><a href="app-inbox-single.php">Victor Erixon</a></td>

												<td class="mail-list-message">
													<a href="app-inbox-single.php">
														HTML & CSS Tutorial?
													</a>
												</td>

												<td class="mail-list-time">Jun 7</td>
											</tr>
										</tbody>
									</table><!-- /.mail-list -->

									<!-- Mails Navigation -->
									<div class="row p-3">
	                  <div class="col-7 text-muted mt-1">
	                    Showing 1 - 20 of 289
	                  </div>

	                  <div class="col-5">
	                    <div class="btn-group float-right">
	                      <a href="#" class="btn btn-sm btn-outline-default ripple">
													<i class="list-icon material-icons">keyboard_arrow_left</i>
												</a>

	                      <a href="#" class="btn btn-sm btn-outline-default ripple">
													<i class="list-icon material-icons">keyboard_arrow_right</i>
												</a>
	                    </div>
	                  </div>
	                </div>

								</div><!-- /.mail-inbox -->
							</div><!-- /.mailbox -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
  </main><!-- /.main-wrapper -->

  <?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
