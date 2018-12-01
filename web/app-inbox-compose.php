<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Inbox Compose',
	'body_class' => $GLOBALS['body_class'] . '',
  'styles' => array(
    'bootstrap-wysiwyg',
    'dropzone',
    'selectpicker',
  ),
  'scripts' => array(
    'tinymce',
    'tinymce.theme',
    'tinymce.jquery',
    'bootstrap-wysiwyg',
    'selectpicker',
    'dropzone',
  )
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

								<!-- Compose Mail Area -->
								<div class="col-lg-10 col-md-9 col-sm-9 col-12 mail-inbox mail-single">
                  <div class="mail-single-content border-0 m-4 p-0">

										<div class="mail-single-message mail-single-compose">
											<form>
                        <div class="card">
                          <div class="card-header">

                            <i class="material-icons send-to-icon mr-3 bg-primary text-inverse hidden-md-down">mail_outline</i>

                            <div class="form-group flex-3 mr-3 mb-0">
                              <input class="form-control subject-field" placeholder="Subject">
                            </div><!-- /.form-group -->

                            <div class="form-group mr-3 mb-0">
                              <input class="form-control send-to-field" placeholder="Send To:">
                            </div><!-- /.form-group -->

                            <div class="form-group mb-0">
                              <select class="selectpicker form-control" data-width="250px" data-live-search="true" title="CC: Nothing Selected" multiple>
                                <option>John Doe</option>
                                <option>Scott Adams</option>
                                <option>Steve Smith</option>
                                <option>Emily Lee</option>
                                <option>Christopher Palmer</option>
                              </select>
                            </div><!-- /.form-group -->
                          </div><!-- /.card-header -->

                          <div class="card-body">
                            <div class="form-group d-flex flex-column mb-0" style="height: 500px">
                              <textarea class="mb-0" data-toggle="wysiwyg"></textarea>
                            </div>
                          </div><!-- /.card-body -->

                          <div class="card-footer">
                            <div class="btn-list">
                              <button class="btn btn-primary ripple mb-0">
                                <i class="material-icons list-icon">mail</i>
                                <span>Send Mail</span>
                              </button>

                              <button class="btn btn-outline-default ripple mb-0">
                                <i class="material-icons list-icon">clear</i>
                                <span>Discard</span>
                              </button>
                            </div><!-- /.btn-list -->
                          </div><!-- /.card-footer -->
                        </div><!-- /.card -->


											</form>
										</div><!-- /.mail-single-message -->
									</div><!-- /.mail-single-content -->

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
