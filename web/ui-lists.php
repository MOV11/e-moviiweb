<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'List Groups',
	'body_class' =>  $GLOBALS['body_class'] . '',
  'styles' => array(
    'nestable',
  ),
	'scripts' => array(
    'jqueryui',
    'nestable',
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

				<div class="col-md-12 widget-holder">
					<div class="widget-bg-transparent">
						<div class="widget-body clearfix">
							<h5 class="box-title">Sortable List <small>(drag to sort)</small></h5>

							<ol class="list-group sortable">
	              <li class="list-group-item no-gutters bg-color-scheme text-inverse">
                  <div class="col-md-6">
										<i class="material-icons list-icon">swap_vert</i>
										Browser compatibility
									</div>

									<div class="col-md-6 text-right">
										<a href="javascript:void(0);"><i class="material-icons list-icon">add</i></a>
										<a href="javascript:void(0);"><i class="material-icons list-icon">edit</i></a>
										<a href="javascript:void(0);"><i class="material-icons list-icon">close</i></a>
									</div>
	              </li>

								<li class="list-group-item no-gutters bg-info text-inverse">
									<div class="col-md-6">
										<i class="material-icons list-icon">swap_vert</i>
										Looking for more examples templates
									</div>

									<div class="col-md-6 text-right">
										<a href="javascript:void(0);"><i class="material-icons list-icon">add</i></a>
										<a href="javascript:void(0);"><i class="material-icons list-icon">edit</i></a>
										<a href="javascript:void(0);"><i class="material-icons list-icon">close</i></a>
									</div>
	              </li>

								<li class="list-group-item no-gutters">
									<div class="col-md-6">
										<i class="material-icons list-icon">swap_vert</i>
										The fastest way to get started
									</div>

									<div class="col-md-6 text-right">
										<a href="javascript:void(0);"><i class="material-icons list-icon">add</i></a>
										<a href="javascript:void(0);"><i class="material-icons list-icon">edit</i></a>
										<a href="javascript:void(0);"><i class="material-icons list-icon">close</i></a>
									</div>
	              </li>
							</ol><!-- /.list-group -->

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-12 widget-holder">
					<div class="widget-bg-transparent">
						<div class="widget-body clearfix">
							<h5 class="box-title">Nested Sortable List <small>(drag to sort)</small></h5>

	            <div class="row">
	              <div class="col-md-6">

	                <div class="dd">
	                  <ol class="dd-list">
	                    <li class="dd-item" data-id="13">
	                      <div class="dd-handle">Item 13</div>
	                    </li>
	                    <li class="dd-item" data-id="14">
	                      <div class="dd-handle">Item 14</div>
	                    </li>
	                    <li class="dd-item" data-id="15">
	                      <div class="dd-handle">Item 15</div>
	                      <ol class="dd-list">
	                        <li class="dd-item" data-id="16">
	                          <div class="dd-handle">Item 16</div>
	                        </li>
	                        <li class="dd-item" data-id="17">
	                          <div class="dd-handle">Item 17</div>
	                        </li>
	                        <li class="dd-item" data-id="18">
	                          <div class="dd-handle">Item 18</div>
	                        </li>
	                      </ol>
	                    </li>
	                  </ol>
	                </div><!-- /.div -->

	              </div><!-- /.col-md-6 -->

	              <div class="col-md-6">

	                <div class="dd">
	                  <ol class="dd-list">
	                    <li class="dd-item dd3-item" data-id="13">
	                      <div class="dd-handle dd3-handle"></div>
	                      <div class="dd3-content">Item 13</div>
	                    </li>
	                    <li class="dd-item dd3-item" data-id="14">
	                      <div class="dd-handle dd3-handle"></div>
	                      <div class="dd3-content">Item 14</div>
	                    </li>
	                    <li class="dd-item dd3-item" data-id="15">
	                      <div class="dd-handle dd3-handle"></div>
	                      <div class="dd3-content">Item 15</div>
	                      <ol class="dd-list">
	                        <li class="dd-item dd3-item" data-id="16">
	                          <div class="dd-handle dd3-handle"></div>
	                          <div class="dd3-content">Item 16</div>
	                        </li>
	                        <li class="dd-item dd3-item" data-id="17">
	                          <div class="dd-handle dd3-handle"></div>
	                          <div class="dd3-content">Item 17</div>
	                        </li>
	                        <li class="dd-item dd3-item" data-id="18">
	                          <div class="dd-handle dd3-handle"></div>
	                          <div class="dd3-content">Item 18</div>
	                        </li>
	                      </ol>
	                    </li>
	                  </ol>
	                </div><!-- /.dd -->

	              </div><!-- /.col-md-6 -->
	            </div><!-- /.row -->

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg-transparent">
	          <div class="widget-body clearfix">
							<h5 class="box-title">Basic List</h5>

							<div class="list-group bg-dark auto">
	              <a href="#" class="list-group-item list-group-item-action d-flex justify-content-end">
									<span class="mr-auto"><i class="material-icons list-icon icon-muted mr-2">email</i>Inbox</span>
									<span class="badge badge-pill badge-default fs-12 mr-1">201</span>
	                <i class="material-icons list-icon icon-muted">chevron_right</i>
	              </a>

	              <a href="#" class="list-group-item list-group-item-action d-flex justify-content-end">
									<span class="mr-auto"><i class="material-icons list-icon icon-muted mr-2">remove_red_eye</i>Profile visits</span>
									<span class="badge badge-pill badge-info fs-12 mr-1">5021</span>
	                <i class="material-icons list-icon icon-muted">chevron_right</i>
	              </a>

	              <a href="#" class="list-group-item list-group-item-action d-flex justify-content-end">
									<span class="mr-auto"><i class="material-icons list-icon icon-muted mr-2">call</i>Call</span>
									<span class="badge badge-pill badge-success fs-12 mr-1">14</span>
	                <i class="material-icons list-icon icon-muted">chevron_right</i>
	              </a>

	              <a href="#" class="list-group-item list-group-item-action d-flex justify-content-end">
									<span class="mr-auto"><i class="material-icons list-icon icon-muted mr-2">email</i>Messages</span>
									<span class="badge badge-pill badge-default fs-12 mr-1">20</span>
	                <i class="material-icons list-icon icon-muted">chevron_right</i>
	              </a>

	              <a href="#" class="list-group-item list-group-item-action d-flex justify-content-end">
									<span class="mr-auto"><i class="material-icons list-icon icon-muted mr-2">bookmark</i>Bookmarks</span>
									<span class="badge badge-pill badge-warning fs-12 mr-1">14</span>
	                <i class="material-icons list-icon icon-muted">chevron_right</i>
	              </a>

	              <a href="#" class="list-group-item list-group-item-action d-flex justify-content-end">
									<span class="mr-auto"><i class="material-icons list-icon icon-muted mr-2">notifications</i>Notifications</span>
									<span class="badge badge-pill badge-info fs-12 mr-1">30</span>
	                <i class="material-icons list-icon icon-muted">chevron_right</i>
	              </a>

	              <a href="#" class="list-group-item list-group-item-action d-flex justify-content-end">
									<span class="mr-auto"><i class="material-icons list-icon icon-muted mr-2">watch_later</i>Watch</span>
									<span class="badge badge-pill badge-danger fs-12 mr-1">10</span>
	                <i class="material-icons list-icon icon-muted">chevron_right</i>
	              </a>
	            </div><!-- /.list-group -->

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg-transparent">
						<div class="widget-body clearfix">
							<h5 class="box-title">Media Boxes</h5>

							<section class="card">
	              <header class="card-header">
	                <div class="input-group text-sm">
	                  <input type="text" class="input-sm form-control" placeholder="Search">
	                  <div class="input-group-btn">
	                    <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
	                    <ul class="dropdown-menu dropdown-left">
	                      <li><a class="dropdown-item" href="#">Action</a></li>
	                      <li><a class="dropdown-item" href="#">Another action</a></li>
	                      <li><a class="dropdown-item" href="#">Something else here</a></li>
	                      <li class="dropdown-divider"></li>
	                      <li><a class="dropdown-item" href="#">Separated link</a></li>
	                    </ul>
	                  </div>
	                </div>
	              </header><!-- /.panel-heading -->

								<ul class="list-unstyled widget-user-list card-block">
									<li class="media">
										<div class="d-flex mr-3">
											<a href="#" class="user--online thumb-xs">
												<img src="assets/demo/users/user1.jpg" class="img-circle" alt="">
											</a>
										</div>

										<div class="media-body">
											<a href="#" class="btn btn-outline-default">Follow</a>
											<h5 class="media-heading">
												<a href="#">Nick Lampard</a>
												<small>@kingnick24</small>
											</h5>
										</div>
									</li>

									<li class="media">
										<div class="d-flex mr-3">
											<a href="#" class="user--busy thumb-xs">
												<img src="assets/demo/users/user2.jpg" class="img-circle" alt="">
											</a>
										</div>

										<div class="media-body">
											<a href="#" class="btn btn-success">Following</a>
											<h5 class="media-heading">
												<a href="#">Ashley Wilson</a>
												<small>@AshWilson123</small>
											</h5>
										</div>
									</li>

									<li class="media">
										<div class="d-flex mr-3">
											<a href="#" class="user--online thumb-xs">
												<img src="assets/demo/users/user3.jpg" class="img-circle" alt="">
											</a>
										</div>

										<div class="media-body">
											<a href="#" class="btn btn-outline-default">Follow</a>
											<h5 class="media-heading">
												<a href="#">Shannon Wang Lee</a>
												<small>@Shalee_42</small>
											</h5>
										</div>
									</li>
								</ul>
	            </section><!-- /.panel-default -->

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
