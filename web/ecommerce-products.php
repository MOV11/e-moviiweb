<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'E-Commerce Products',
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
			        <ul class="ecommerce-products list-unstyled row">
								<li class="col-12 col-sm-6 col-md-4">
									<figure>
										<a href="#">
											<img src="assets/demo/e-commerce/1.jpg" alt="">
											<div>
												<small>Accessories<span class="float-right"><del>&#36;699.99</del></span></small>
												<p>I-Pod<span class="float-right">&#36;659.99</span></p>
											</div>
										</a>
									</figure>
								</li>

								<li class="col-12 col-sm-6 col-md-4">
									<figure>
										<a href="#">
											<img src="assets/demo/e-commerce/2.jpg" alt="">
											<div>
												<small>Accessories<span class="float-right"><del>&#36;199.99</del></span></small>
												<p>Lens<span class="float-right">&#36;159.99</span></p>
											</div>
										</a>
									</figure>
								</li>

								<li class="col-12 col-sm-6 col-md-4">
									<figure>
										<a href="#">
											<img src="assets/demo/e-commerce/3.jpg" alt="">
											<div>
												<small>Accessories<span class="float-right"><del>&#36;299.99</del></span></small>
												<p>Speakers<span class="float-right">&#36;249.99</span></p>
											</div>
										</a>
									</figure>
								</li>

								<li class="col-12 col-sm-6 col-md-4">
									<figure>
										<a href="#">
											<img src="assets/demo/e-commerce/4.jpg" alt="">
											<div>
												<small>Accessories<span class="float-right"><del>&#36;2199.99</del></span></small>
												<p>Apple PC<span class="float-right">&#36;1999.99</span></p>
											</div>
										</a>
									</figure>
								</li>

								<li class="col-12 col-sm-6 col-md-4">
									<figure>
										<a href="#">
											<img src="assets/demo/e-commerce/5.jpg" alt="">
											<div>
												<small>Accessories<span class="float-right"><del>&#36;59.99</del></span></small>
												<p>Headphones<span class="float-right">&#36;49.99</span></p>
											</div>
										</a>
									</figure>
								</li>

								<li class="col-12 col-sm-6 col-md-4">
									<figure>
										<a href="#">
											<img src="assets/demo/e-commerce/6.jpg" alt="">
											<div>
												<small>Accessories<span class="float-right"><del>&#36;259.99</del></span></small>
												<p>Camera<span class="float-right">&#36;199.99</span></p>
											</div>
										</a>
									</figure>
								</li>

								<li class="col-12 col-sm-6 col-md-4">
									<figure>
										<a href="#">
											<img src="assets/demo/e-commerce/7.jpg" alt="">
											<div>
												<small>Accessories<span class="float-right"><del>&#36;399.99</del></span></small>
												<p>Phone<span class="float-right">&#36;359.99</span></p>
											</div>
										</a>
									</figure>
								</li>

								<li class="col-12 col-sm-6 col-md-4">
									<figure>
										<a href="#">
											<img src="assets/demo/e-commerce/8.jpg" alt="">
											<div>
												<small>Accessories<span class="float-right"><del>&#36;599.99</del></span></small>
												<p>Laptop<span class="float-right">&#36;559.99</span></p>
											</div>
										</a>
									</figure>
								</li>

								<li class="col-12 col-sm-6 col-md-4">
									<figure>
										<a href="#">
											<img src="assets/demo/e-commerce/9.jpg" alt="">
											<div>
												<small>Accessories<span class="float-right"><del>&#36;899.99</del></span></small>
												<p>DSLR<span class="float-right">&#36;759.99</span></p>
											</div>
										</a>
									</figure>
								</li>
							</ul><!-- /.ecommerce-products -->

							<!-- Product Navigation -->
							<div class="col-md-12">
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
