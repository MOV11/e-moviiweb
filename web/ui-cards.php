<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Cards',
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

				<!-- Expandable Cards -->
				<div class="col-md-12 widget-holder">
					<div class="widget-bg-transparent">
			      <div class="widget-body clearfix">

							<h5 class="box-title">Expandable Cards</h5>

							<div class="row">

								<div class="col-sm-4 mr-b-20">
									<div class="card card-expandable card-inverse bg-color-scheme-dark">
										<div class="card-header border-bottom-0">
											<h5 class="card-title mb-1 fs-15">Card Dark</h5>
											<span class="card-subtitle mb-0 op-06">Subtitle</span>
											<i class="material-icons list-icon ripple">keyboard_arrow_down</i>
										</div>

										<div class="card-block pt-0">
	                    <p class="card-text">Hey there, I am a very simple card. I am good at containing small bits of information. I am quite convenient because I require little markup to use effectively.</p>
	                  </div>

										<div class="card-action">
	                    <a href="#" class="card-link text-uppercase fw-500">Card link</a>
	                    <a href="#" class="card-link text-uppercase fw-500">Another link</a>
	                  </div>
	                </div>
								</div><!-- /.col-md-4 -->

								<div class="col-sm-4 mr-b-20">
									<div class="card card-expandable card-inverse bg-info">
										<div class="card-header border-bottom-0">
											<h5 class="card-title mb-1 fs-15">Card Info</h5>
											<span class="card-subtitle mb-0 op-06">Subtitle</span>
											<i class="material-icons list-icon ripple">keyboard_arrow_down</i>
										</div>

										<div class="card-block pt-0">
	                    <p class="card-text">Hey there, I am a very simple card. I am good at containing small bits of information. I am quite convenient because I require little markup to use effectively.</p>
	                  </div>

										<div class="card-action">
	                    <a href="#" class="card-link text-uppercase fw-500">Card link</a>
	                    <a href="#" class="card-link text-uppercase fw-500">Another link</a>
	                  </div>
	                </div>
								</div><!-- /.col-md-4 -->

								<div class="col-sm-4 mr-b-20">
									<div class="card card-expandable bg-white">
										<div class="card-header border-bottom-0">
											<h5 class="card-title mb-1 fs-15">Card Info</h5>
											<span class="card-subtitle mb-0 op-06">Subtitle</span>
											<i class="material-icons list-icon ripple">keyboard_arrow_down</i>
										</div>

										<div class="card-block pt-0">
	                    <p class="card-text">Hey there, I am a very simple card. I am good at containing small bits of information. I am quite convenient because I require little markup to use effectively.</p>
	                  </div>

										<div class="card-action">
	                    <a href="#" class="card-link text-uppercase fw-500">Card link</a>
	                    <a href="#" class="card-link text-uppercase fw-500">Another link</a>
	                  </div>
	                </div>
								</div><!-- /.col-md-4 -->

							</div><!-- /.row -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Simple Card -->
				<div class="col-md-12 widget-holder">
					<div class="widget-bg-transparent">
			      <div class="widget-body clearfix">

							<h5 class="box-title">Simple Cards</h5>

							<div class="row">
								<div class="col-sm-4 mr-b-20">
									<div class="card">
										<div class="card-block">
	                    <h5 class="card-title">Card White</h5>
	                    <p class="card-text">Hey there, I am a very simple card. I am good at containing small bits of information. I am quite convenient because I require little markup to use effectively.</p>
	                  </div>

										<div class="card-action">
	                    <a href="#" class="card-link text-uppercase fw-500">Card link</a>
	                    <a href="#" class="card-link text-uppercase fw-500">Another link</a>
	                  </div>
	                </div>
								</div><!-- /.col-md-4 -->

								<div class="col-sm-4 mr-b-20">
									<div class="card card-inverse bg-color-scheme-dark">
										<div class="card-block">
	                    <h5 class="card-title">Card Dark</h5>
	                    <p class="card-text">Hey there, I am a very simple card. I am good at containing small bits of information. I am quite convenient because I require little markup to use effectively.</p>
	                  </div>

										<div class="card-action">
	                    <a href="#" class="card-link text-uppercase fw-500">Card link</a>
	                    <a href="#" class="card-link text-uppercase fw-500">Another link</a>
	                  </div>
	                </div>
								</div><!-- /.col-md-4 -->

								<div class="col-sm-4 mr-b-20">
									<div class="card card-inverse bg-success">
										<div class="card-block">
	                    <h5 class="card-title">Card Success</h5>
	                    <p class="card-text">Hey there, I am a very simple card. I am good at containing small bits of information. I am quite convenient because I require little markup to use effectively.</p>
	                  </div>

										<div class="card-action">
	                    <a href="#" class="card-link text-uppercase fw-500">Card link</a>
	                    <a href="#" class="card-link text-uppercase fw-500">Another link</a>
	                  </div>
	                </div>
								</div><!-- /.col-md-4 -->
							</div><!-- /.row -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Blog Posts -->
        <div class="col-md-12 widget-holder">
          <div class="widget-bg-transparent">
            <div class="widget-body">

							<h5 class="box-title">Blog Posts</h5>

              <div class="row">
                <div class="col-md-4 mr-b-30 d-flex">
                  <div class="blog-post blog-post-card text-center">
                    <figure>
                      <a href="#">
                        <img src="assets/demo/cards/blog-post-1.jpg" alt="Blog Post 1" />
                      </a>
                    </figure>

                    <header>
                      <ul class="blog-post-share-links list-unstyled list-inline">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-primary ripple toggle-link"><i class="list-icon social-icons">sharethis</i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-facebook ripple"><i class="list-icon social-icons">facebook</i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-twitter ripple"><i class="list-icon social-icons">twitter</i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-dribbble ripple"><i class="list-icon social-icons">dribble</i></a></li>
                      </ul>
                      <div class="block text-muted blog-post-tags">Posted in
                        <ul class="ml-1 inline-block list-unstyled list-inline">
                          <li class="list-inline-item"><a href="#"><strong>Challenge</strong></a></li>
                          <li class="list-inline-item"><a href="#"><strong>Flowers</strong></a></li>
                        </ul>
                      </div>
                      <h4 class="h3 fw-300 m-1 sub-heading-font-family blog-post-title"><a href="#">5 Amazing places to visit before you die</a></h4>
                    </header>

                    <footer class="mr-t-30">
											<a href="#" class="btn btn-outline-primary btn-rounded">Continue Reading</a>
                    </footer>
                  </div><!-- /.blog-post -->
                </div><!-- /.col-md-4 -->

								<div class="col-md-4 mr-b-30 d-flex">
                  <div class="blog-post blog-post-card text-center">
                    <figure>
                      <a href="#">
                        <img src="assets/demo/cards/blog-post-2.jpeg" alt="" />
                      </a>
                    </figure>

                    <header>
                      <ul class="blog-post-share-links list-unstyled list-inline">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-primary ripple toggle-link"><i class="list-icon social-icons">sharethis</i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-facebook ripple"><i class="list-icon social-icons">facebook</i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-twitter ripple"><i class="list-icon social-icons">twitter</i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-dribbble ripple"><i class="list-icon social-icons">dribble</i></a></li>
                      </ul>
                      <div class="text-muted blog-post-tags">Posted in
                        <ul class="ml-1 inline-block list-unstyled list-inline">
                          <li class="list-inline-item"><a href="#"><strong>Challenge</strong></a></li>
                          <li class="list-inline-item"><a href="#"><strong>Flowers</strong></a></li>
                        </ul>
                      </div>
                      <h4 class="h3 fw-300 m-1 sub-heading-font-family blog-post-title"><a href="#">8 Practical ways to improve yourself</a></h4>
                    </header>

                    <footer class="mr-t-30">
											<a href="#" class="btn btn-outline-primary btn-rounded">Continue Reading</a>
                    </footer>
                  </div><!-- /.blog-post -->
                </div><!-- /.col-md-4 -->

								<div class="col-md-4 mr-b-30 d-flex">
                  <div class="blog-post blog-post-card text-center">
                    <figure>
                      <a href="#">
                        <img src="assets/demo/cards/blog-post-3.jpeg" alt="" />
                      </a>
                    </figure>

                    <header>
                      <ul class="blog-post-share-links list-unstyled list-inline">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-primary ripple toggle-link"><i class="list-icon social-icons">sharethis</i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-facebook ripple"><i class="list-icon social-icons">facebook</i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-twitter ripple"><i class="list-icon social-icons">twitter</i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="bg-dribbble ripple"><i class="list-icon social-icons">dribble</i></a></li>
                      </ul>
                      <div class="block text-muted blog-post-tags">Posted in
                        <ul class="ml-1 inline-block list-unstyled list-inline">
                          <li class="list-inline-item"><a href="#"><strong>Challenge</strong></a></li>
                          <li class="list-inline-item"><a href="#"><strong>Flowers</strong></a></li>
                        </ul>
                      </div>
                      <h4 class="h3 fw-300 m-1 sub-heading-font-family blog-post-title"><a href="#">3 Benefits of waking up early</a></h4>
                    </header>

                    <footer class="mr-t-30">
											<a href="#" class="btn btn-outline-primary btn-rounded">Continue Reading</a>
                    </footer>
                  </div><!-- /.blog-post -->
                </div><!-- /.col-md-4 -->

              </div><!-- /.row -->
            </div><!-- /.widget-body -->
          </div><!-- /.widget-bg-transparent -->
        </div><!-- /.widget-holder -->

				<!-- Card with Image -->
				<div class="col-md-12 widget-holder">
					<div class="widget-bg-transparent">
			      <div class="widget-body">

							<h5 class="box-title">Cards with Images</h5>

							<div class="row">
	              <div class="col-md-4 mr-b-30">
	                <div class="card">
	                  <img class="card-img-top" src="assets/demo/cards/1.jpg" alt="" />

										<div class="card-block">
	                    <h4 class="card-title">First Card</h4>
	                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                  </div>

										<div class="card-action">
	                    <a href="#" class="card-link text-uppercase fw-500">Card link</a>
	                    <a href="#" class="card-link text-uppercase fw-500">Another link</a>
	                  </div>
	                </div>
	              </div>

								<div class="col-md-4 mr-b-30">
	                <div class="card">
	                  <img class="card-img-top" src="assets/demo/cards/6.jpg" alt="" />
										<div class="card-block">
	                    <h4 class="card-title">Second Card</h4>
	                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                  </div>

										<div class="card-action">
	                    <a href="#" class="card-link text-uppercase fw-500">Card link</a>
	                    <a href="#" class="card-link text-uppercase fw-500">Another link</a>
	                  </div>
	                </div>
	              </div>

								<div class="col-md-4 mr-b-30">
	                <div class="card">
	                  <img class="card-img-top" src="assets/demo/cards/3.jpg" alt="" />
										<div class="card-block">
	                    <h4 class="card-title">Third Card</h4>
	                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                  </div>

										<div class="card-action">
	                    <a href="#" class="card-link text-uppercase fw-500">Card link</a>
	                    <a href="#" class="card-link text-uppercase fw-500">Another link</a>
	                  </div>
	                </div>
	              </div>
	            </div>

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
