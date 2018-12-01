<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Contacts',
	'body_class' => $GLOBALS['body_class'] . '',
	'styles'=> array(
    'footable'
  ),
  'scripts'=> array(
    'moment',
    'footable'
  ),
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

									<div class="inbox-categories inbox-labels mr-b-40">
										<h6 class="text-muted text-uppercase pl-3">Groups</h6>

										<ul class="list-unstyled">
							        <li>
							          <a href="#">
													<i class="material-icons list-icon text-info float-left mr-2">bookmark</i>
													<span class="text-muted float-right">23</span>
							            Marketing
							          </a>
							        </li>
											<li>
							          <a href="#">
													<i class="material-icons list-icon text-warning float-left mr-2">bookmark</i>
													<span class="text-muted float-right">87</span>
							            Testing
							          </a>
							        </li>
											<li>
							          <a href="#">
													<i class="material-icons list-icon text-primary float-left mr-2">bookmark</i>
													<span class="text-muted float-right">63</span>
							            Development
							          </a>
							        </li>
											<li>
							          <a href="#">
													<i class="material-icons list-icon text-success float-left mr-2">bookmark</i>
													<span class="text-muted float-right">32</span>
							            Research
							          </a>
							        </li>
											<li>
							          <a href="#">
													<i class="material-icons list-icon text-danger float-left mr-2">bookmark</i>
													<span class="text-muted float-right">48</span>
							            Accounts
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
										<h2 class="col-sm-6 col-md-7 mr-t-0 fw-300 h1 sub-heading-font-family">Contacts</h2>

										<form class="col-sm-6 col-md-5 mr-t-0" action="javascript:void(0);" method="get">
											<div class="form-input-icon form-input-icon-right">
		                    <i class="material-icons list-icon">search</i>
		                    <input class="form-control" id="l6" placeholder="Search Contacts" type="text">
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
	                    </div>

											<div class="btn-group m-r-10">
												<a href="javascript:void(0)" data-toggle="dropdown" class="btn btn-sm btn-outline-default dropdown-toggle ripple border-bottom-0">
		 											More
		 											<span class="caret"></span>
		 										</a>

				                <div role="menu" class="dropdown-menu">
				                  <a class="dropdown-item" href="javascript:void(0)">First Task</a>
				                  <a class="dropdown-item" href="javascript:void(0)">Second Task</a>
				                  <a class="dropdown-item" href="javascript:void(0)">Tird Task</a>
                          <div class="dropdown-divider"></div>
				                  <a class="dropdown-item" href="javascript:void(0)">Grand Task</a>
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

									<table class="mail-list contact-list-right">
										<tbody>
											<tr>
												<td class="mail-list-user">
                          <label>
                            <input type="checkbox" />
                            <figure>
                              <img width="30" height="30" class="img-circle" src="assets/demo/users/user4.jpg" alt="" />
                            </figure>
                          </label>
												</td>

												<td class="mail-list-name">
													<a href="app-inbox-single.php">Jerome Sallee</a>
													<span class="text-muted">Account Manager, <a href="#">Acme Company</a></span>
												</td>

												<td class="mail-list-message">
													<span class="contact-list-phone">(615) 728-1241</span>
													<div class="text-muted">jerome.sallee@acme.com</div>
												</td>

												<td class="mail-list-time">
													<i class="material-icons list-icon text-warning mr-2">bookmark</i>
							            Testing
												</td>
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

												<td class="mail-list-name">
													<a href="app-contact-details.php">Jacob Hubertus</a>
													<span class="text-muted">VP Operations, <a href="javascript:void(0)">Acme Company</a></span>
												</td>

												<td class="mail-list-message">
													<span class="contact-list-phone">(581) 850-7505</span>
													<div class="text-muted">jacob.hubertus@acme.com</div>
												</td>

												<td class="mail-list-time">
													<i class="material-icons list-icon text-info mr-2">bookmark</i>
							            Marketing
												</td>
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

												<td class="mail-list-name">
													<a href="app-inbox-single.php">Jeromy Pervorse</a>
													<span class="text-muted">CTO, <a href="#">Acme Company</a></span>
												</td>

												<td class="mail-list-message">
													<span class="contact-list-phone">(855) 802-3669</span>
													<div class="text-muted">jeromy.pervorse@acme.com</div>
												</td>

												<td class="mail-list-time">
													<i class="material-icons list-icon text-primary mr-2">bookmark</i>
							            Development
												</td>
											</tr>

											<tr>
												<td class="mail-list-user">
                          <label>
                            <input type="checkbox" checked />
                            <figure>
                              <img width="30" height="30" class="img-circle" src="assets/demo/users/user7.jpg" alt="" />
                            </figure>
                          </label>
												</td>

												<td class="mail-list-name">
													<a href="app-inbox-single.php">Gustav Butlex</a>
													<span class="text-muted">Account Manager, <a href="#">Acme Company</a></span>
												</td>

												<td class="mail-list-message">
													<span class="contact-list-phone">(615) 728-1241</span>
													<div class="text-muted">gustav.butlex@acme.com</div>
												</td>

												<td class="mail-list-time">
													<i class="material-icons list-icon text-success mr-2">bookmark</i>
							            Research
												</td>
											</tr>

											<tr>
												<td class="mail-list-user">
                          <label>
                            <input type="checkbox" checked />
                            <figure>
                              <img width="30" height="30" class="img-circle" src="assets/demo/users/user6.jpg" alt="" />
                            </figure>
                          </label>
												</td>

												<td class="mail-list-name">
													<a href="app-inbox-single.php">Sarah Paramentor</a>
													<span class="text-muted">Account Manager, <a href="#">Acme Company</a></span>
												</td>

												<td class="mail-list-message">
													<span class="contact-list-phone">(672) 134-849</span>
													<div class="text-muted">sarah.paramantor@acme.com</div>
												</td>

												<td class="mail-list-time">
													<i class="material-icons list-icon text-danger mr-2">bookmark</i>
							            Accounts
												</td>
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

												<td class="mail-list-name">
													<a href="app-inbox-single.php">Jerome Sallee</a>
													<span class="text-muted">Account Manager, <a href="#">Acme Company</a></span>
												</td>

												<td class="mail-list-message">
													<span class="contact-list-phone">(615) 728-1241</span>
													<div class="text-muted">jerome.sallee@acme.com</div>
												</td>

												<td class="mail-list-time">
													<i class="material-icons list-icon text-warning mr-2">bookmark</i>
							            Testing
												</td>
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

												<td class="mail-list-name">
													<a href="app-contact-details.php">Jacob Hubertus</a>
													<span class="text-muted">VP Operations, <a href="javascript:void(0)">Acme Company</a></span>
												</td>

												<td class="mail-list-message">
													<span class="contact-list-phone">(581) 850-7505</span>
													<div class="text-muted">jacob.hubertus@acme.com</div>
												</td>

												<td class="mail-list-time">
													<i class="material-icons list-icon text-info mr-2">bookmark</i>
							            Marketing
												</td>
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

												<td class="mail-list-name">
													<a href="app-inbox-single.php">Jeromy Pervorse</a>
													<span class="text-muted">CTO, <a href="#">Acme Company</a></span>
												</td>

												<td class="mail-list-message">
													<span class="contact-list-phone">(855) 802-3669</span>
													<div class="text-muted">jeromy.pervorse@acme.com</div>
												</td>

												<td class="mail-list-time">
													<i class="material-icons list-icon text-primary mr-2">bookmark</i>
							            Development
												</td>
											</tr>

											<tr>
												<td class="mail-list-user">
                          </label>
                            <input type="checkbox" />
                            <figure>
                              <img width="30" height="30" class="img-circle" src="assets/demo/users/user7.jpg" alt="" />
                            </figure>
                          </label>
												</td>

												<td class="mail-list-name">
													<a href="app-inbox-single.php">Gustav Butlex</a>
													<span class="text-muted">Account Manager, <a href="#">Acme Company</a></span>
												</td>

												<td class="mail-list-message">
													<span class="contact-list-phone">(615) 728-1241</span>
													<div class="text-muted">gustav.butlex@acme.com</div>
												</td>

												<td class="mail-list-time">
													<i class="material-icons list-icon text-success mr-2">bookmark</i>
							            Research
												</td>
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

												<td class="mail-list-name">
													<a href="app-inbox-single.php">Sarah Paramentor</a>
													<span class="text-muted">Account Manager, <a href="#">Acme Company</a></span>
												</td>

												<td class="mail-list-message">
													<span class="contact-list-phone">(672) 134-849</span>
													<div class="text-muted">sarah.paramantor@acme.com</div>
												</td>

												<td class="mail-list-time">
													<i class="material-icons list-icon text-danger mr-2">bookmark</i>
							            Accounts
												</td>
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
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
