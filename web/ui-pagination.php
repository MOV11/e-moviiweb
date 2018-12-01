<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Pagination',
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

								<div class="col-md-4 mr-b-40">
									<h5 class="box-title mr-b-0">Default Pagination</h5>
									<p class="text-muted">Simple Bootstrap Pagination</p>

									<nav aria-label="Page navigation">
										<ul class="pagination">
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Previous">
													<span aria-hidden="true">
														<i class="material-icons">arrow_back</i>
													</span>
												</a>
											</li>
											<li class="page-item"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item active"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#">4</a></li>
											<li class="page-item"><a class="page-link" href="#">5</a></li>
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Next">
													<span aria-hidden="true">
														<i class="material-icons">arrow_forward</i>
													</span>
												</a>
											</li>
										</ul>
									</nav>
								</div><!-- /.col-md-4 -->

								<div class="col-md-4 mr-b-40">
									<h5 class="box-title mr-b-0">Sizing</h5>
									<p class="text-muted">Use <code>.pagination-lg</code> or <code>.pagination-sm</code> for different sizes of pagination</p>
									<nav aria-label="Page navigation">

										<ul class="pagination pagination-lg mr-t-0">
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Previous">
													<span aria-hidden="true">
														<i class="material-icons">arrow_back</i>
													</span>
												</a>
											</li>
											<li class="page-item"><a class="page-link" href="#">1</a></li>
											<li class="page-item active"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Next">
													<span aria-hidden="true">
														<i class="material-icons">arrow_forward</i>
													</span>
												</a>
											</li>
										</ul>

										<br />

										<ul class="pagination mr-t-0 mr-b-20">
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Previous">
													<span aria-hidden="true">
														<i class="material-icons">arrow_back</i>
													</span>
												</a>
											</li>
											<li class="page-item"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item active"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#">4</a></li>
											<li class="page-item"><a class="page-link" href="#">5</a></li>
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Next">
													<span aria-hidden="true">
														<i class="material-icons">arrow_forward</i>
													</span>
												</a>
											</li>
										</ul>
										<br />
										<ul class="pagination pagination-sm mr-t-0 mr-b-20">
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Previous">
													<span aria-hidden="true">
														<i class="material-icons">arrow_back</i>
													</span>
												</a>
											</li>
											<li class="page-item"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item active"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#">4</a></li>
											<li class="page-item"><a class="page-link" href="#">5</a></li>
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Next">
													<span aria-hidden="true">
														<i class="material-icons">arrow_forward</i>
													</span>
												</a>
											</li>
										</ul>

									</nav>
								</div><!-- /.col-md-4 -->

								<div class="col-md-4 mr-b-40">
									<h5 class="box-title mr-b-0">Disbaled and Active States</h5>
									<p class="text-muted">Use <code>.disabled</code> and <code>.active</code> one <code>&lt;li&gt;</code> for their respective states</p>
									<nav aria-label="Page navigation">
										<ul class="pagination">
											<li class="page-item disabled">
												<a class="page-link" href="#" aria-label="Previous">
													<span aria-hidden="true">
														<i class="material-icons">arrow_back</i>
													</span>
												</a>
											</li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#">4</a></li>
											<li class="page-item"><a class="page-link" href="#">5</a></li>
											<li class="page-item">
												<a class="page-link" href="#" aria-label="Next">
													<span aria-hidden="true">
														<i class="material-icons">arrow_forward</i>
													</span>
												</a>
											</li>
										</ul>
									</nav>
								</div><!-- /.col-md-4 -->
							</div><!-- /.row -->

							<div class="row">
								<div class="col-md-4 mr-b-40">
									<h5 class="box-title mr-b-0">Page Default</h5>
									<p class="text-muted">By default, the pager centers links.</p>
									<nav aria-label="...">
										<ul class="pager">
                      <li class="spacer"></li>
											<li class="mr-1"><a class="btn btn-rounded btn-outline-color-scheme btn-sm" href="#">Previous</a></li>
											<li class="ml-1"><a class="btn btn-rounded btn-outline-color-scheme btn-sm" href="#">Next</a></li>
                      <li class="spacer"></li>
										</ul>
									</nav>
								</div><!-- /.col-md-4 -->

								<div class="col-md-4 mr-b-40">
									<h5 class="box-title mr-b-0">Aligned Links</h5>
									<p class="text-muted">Alternatively, you can align each link to the sides</p>
									<nav aria-label="...">
										<ul class="pager">
											<li><a class="btn btn-rounded btn-outline-color-scheme btn-sm" href="#"><span aria-hidden="true"><i class="material-icons">arrow_back</i></span> Older</a></li>
                      <li class="spacer"></li>
											<li><a class="btn btn-rounded btn-outline-color-scheme btn-sm" href="#">Newer <span aria-hidden="true"><i class="material-icons">arrow_forward</i></span></a></li>
										</ul>
									</nav>
								</div><!-- /.col-md-4 -->

								<div class="col-md-4 mr-b-40">
									<h5 class="box-title mr-b-0">Optional disabled state</h5>
									<p class="text-muted">Pager links also use the general <code>.disabled</code> utility class from the pagination.</p>
									<nav aria-label="...">
										<ul class="pager">
											<li class="disabled"><a class="btn btn-block btn-rounded btn-outline-color-scheme btn-sm" href="#"><span aria-hidden="true"><i class="material-icons">arrow_back</i></span> Older</a></li>
                      <li class="spacer"></li>
											<li><a class="btn btn-block btn-rounded btn-outline-color-scheme btn-sm" href="#">Newer <span aria-hidden="true"><i class="material-icons">arrow_forward</i></span></a></li>
										</ul>
									</nav>
								</div><!-- /.col-md-4 -->
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
