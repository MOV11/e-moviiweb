<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Inbox Single',
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

								<!-- Mail Details -->
								<div class="col-lg-10 col-md-9 col-sm-9 col-12 mail-inbox mail-single">
									<header class="clearfix">
										<div class="col-md-8 mail-inbox-tools pt-4 pd-l-0">

											<div class="btn-group">
												<a href="javascript:void(0)" class="btn btn-sm btn-outline-default ripple"><i class="list-icon material-icons">loop</i></a>
												<a href="javascript:void(0)" class="btn btn-sm btn-outline-default ripple"><i class="list-icon material-icons">delete</i></a>
												<a href="javascript:void(0)" class="btn btn-sm btn-outline-default ripple"><i class="list-icon material-icons">favorite</i></a>
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
													<a class="dropdown-item" href="javascript:void(0)">Mute</a></li>
												</div>
											</div>
										</div><!-- /.mail-inbox-tools -->
									</header>

									<div class="mail-single-content">
										<header class="media">
											<figure class="d-flex mr-2">
												<a href="#" class="block thumb-xs">
													<img class="img-circle" src="assets/demo/users/user1.jpg" alt="" />
												</a>
											</figure>

											<div class="media-body pd-t-10 clearfix">
												<div class="float-left">
													<a href="#">Aaron Ruiz</a> to <strong>Jessica Larson</strong>
												</div>

												<div class="float-right">
													<small class="text-muted mr-10">16th June, 3:04pm</small>
													<a href="#" title="Post a Reply"><i class="list-icon material-icons">reply</i></a>
												</div><!-- /.float-right -->
											</div><!-- /.media-body -->
										</header><!-- /.media -->

										<div class="mail-single-message">
											<h2 class="fw-300 h1 sub-heading-font-family mt-1 mr-b-30">Your message title goes here</h2>
											<hr />

											<p>Hi Aaron,</p>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
											<blockquote>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</blockquote>
											<p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
											<p>Have a nice day. <br />Jessica</p>

											<div class="mail-attachment">
												<hr />
												<h6 class="mail-attachment-heading">
													<i class="list-icon material-icons md-18">attach_file</i>
                          Attachments <span class="text-muted">(3 Files, 680 KB)</span>
												</h6>

                        <div class="list-unstyled file-list">
                          <div class="file-list-item">
                            <a href="#"><img src="assets/demo/cards/1.jpg" alt="" /></a>
                            <a href="#" class="fw-500 color-content mr-2">force.gif</a>
                            <span class="text-muted">(128 KB)</span>
                            <div class="spacer"></div>
                            <div class="list-unstyled list-inline">
                              <a href="#" class="list-inline-item">Download</a>
                              <a href="#" class="list-inline-item">Share</a>
                              <a href="#" class="list-inline-item">View</a>
                            </div>
                          </div><!-- /.file-item -->

                          <div class="file-list-item">
                            <a href="#"><img src="assets/demo/cards/2.jpg" alt="" /></a>
                            <a href="#" class="fw-500 color-content mr-2">profile.png</a>
                            <span class="text-muted">(286 KB)</span>
                            <div class="spacer"></div>
                            <div class="list-unstyled list-inline">
                              <a href="#" class="list-inline-item">Download</a>
                              <a href="#" class="list-inline-item">Share</a>
                              <a href="#" class="list-inline-item">View</a>
                            </div>
                          </div><!-- /.file-item -->

                          <div class="file-list-item">
                            <i class="fa fa-file-pdf-o"></i>
                            <a href="#" class="fw-500 color-content mr-2">statement.pdf</a>
                            <span class="text-muted">(266 KB)</span>
                            <div class="spacer"></div>
                            <div class="list-unstyled list-inline">
                              <a href="#" class="list-inline-item">Download</a>
                              <a href="#" class="list-inline-item">Share</a>
                              <a href="#" class="list-inline-item">View</a>
                            </div>
                          </div><!-- /.file-item -->
                        </div><!-- /.list-unstyled -->
                        
											</div><!-- /.mail-attachment -->
										</div><!-- /.mail-single-message -->
									</div><!-- /.mail-single-content -->

									<div class="mail-single-reply mr-4 ml-4 clearfix">
										<div class="triangle-top"></div>
										<span class="float-left">
											Click here to <a href="#">Reply</a> or <a href="#">Forward</a>
										</span>
										<span class="float-right">
											<i class="list-icon material-icons">attach_file</i>
										</span>
									</div><!-- /.mail-single-post -->

								</div><!-- /.mail-inbox -->
							</div><!-- /.mailbox -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
