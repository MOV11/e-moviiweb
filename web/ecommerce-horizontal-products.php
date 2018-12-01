<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'E-Commerce Horizontal Products',
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
					<div class="widget-bg-transparent">

			      <div class="widget-body clearfix">

							<!-- Products List -->
			        <ul class="ecommerce-products ecommerce-horizontal-products list-unstyled">

								<li class="media">
									<div class="d-flex mr-0 product-image">
										<a href="#">
											<img src="assets/demo/e-commerce/1.jpg" alt="" />
										</a>
									</div>
									<div class="media-body">
										<section>
											<p>I-Pod<del class="text-muted float-right">&#36;699.99</del><br />
												<small>Accessories<span class="float-right">&#36;659.99</span></small>
											</p><hr />
											<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
										</section>
									</div>
								</li>

								<li class="media">
									<div class="d-flex mr-0 product-image">
										<a href="#">
											<img src="assets/demo/e-commerce/2.jpg" alt="" />
										</a>
									</div>
									<div class="media-body">
										<section>
											<p>Lens<del class="text-muted float-right">&#36;199.99</del><br />
												<small>Accessories<span class="float-right">&#36;159.99</span></small>
											</p><hr />
											<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
										</section>
									</div>
								</li>

								<li class="media">
									<div class="d-flex mr-0 product-image">
										<a href="#">
											<img src="assets/demo/e-commerce/3.jpg" alt="" />
										</a>
									</div>
									<div class="media-body">
										<section>
											<p>Speakers<del class="text-muted float-right">&#36;299.99</del><br />
												<small>Accessories<span class="float-right">&#36;249.99</span></small>
											</p><hr />
											<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
										</section>
									</div>
								</li>

								<li class="media">
									<div class="d-flex mr-0 product-image">
										<a href="#">
											<img src="assets/demo/e-commerce/4.jpg" alt="" />
										</a>
									</div>
									<div class="media-body">
										<section>
											<p>Apple PC<del class="text-muted float-right">&#36;2199.99</del><br />
												<small>Accessories<span class="float-right">&#36;1999.99</span></small>
											</p><hr />
											<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
										</section>
									</div>
								</li>

								<li class="media">
									<div class="d-flex mr-0 product-image">
										<a href="#">
											<img src="assets/demo/e-commerce/5.jpg" alt="" />
										</a>
									</div>
									<div class="media-body">
										<section>
											<p>Headphones<del class="text-muted float-right">&#36;59.99</del><br />
												<small>Accessories<span class="float-right">&#36;49.99</span></small>
											</p><hr />
											<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
										</section>
									</div>
								</li>

								<li class="media">
									<div class="d-flex mr-0 product-image">
										<a href="#">
											<img src="assets/demo/e-commerce/6.jpg" alt="" />
										</a>
									</div>
									<div class="media-body">
										<section>
											<p>Camera<del class="text-muted float-right">&#36;259.99</del><br />
												<small>Accessories<span class="float-right">&#36;159.99</span></small>
											</p><hr />
											<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
										</section>
									</div>
								</li>

								<li class="media">
									<div class="d-flex mr-0 product-image">
										<a href="#">
											<img src="assets/demo/e-commerce/7.jpg" alt="" />
										</a>
									</div>
									<div class="media-body">
										<section>
											<p>Phone<del class="text-muted float-right">&#36;399.99</del><br />
												<small>Accessories<span class="float-right">&#36;359.99</span></small>
											</p><hr />
											<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
										</section>
									</div>
								</li>

								<li class="media">
									<div class="d-flex mr-0 product-image">
										<a href="#">
											<img src="assets/demo/e-commerce/8.jpg" alt="" />
										</a>
									</div>
									<div class="media-body">
										<section>
											<p>Laptop<del class="text-muted float-right">&#36;599.99</del><br />
												<small>Accessories<span class="float-right">&#36;559.99</span></small>
											</p><hr />
											<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
										</section>
									</div>
								</li>

								<li class="media">
									<div class="d-flex mr-0 product-image">
										<a href="#">
											<img src="assets/demo/e-commerce/9.jpg" alt="" />
										</a>
									</div>
									<div class="media-body">
										<section>
											<p>DSLR<del class="text-muted float-right">&#36;899.99</del><br />
												<small>Accessories<span class="float-right">&#36;799.99</span></small>
											</p><hr />
											<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
										</section>
									</div>
								</li>

							</ul><!-- /.ecommerce-products -->

							<!-- Product Navigation -->
							<div class="col-md-12 mr-t-50">
								<nav aria-label="Page navigation">
									<ul class="pagination d-flex justify-content-center">
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
							</div><!-- /.col-md-12 -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
