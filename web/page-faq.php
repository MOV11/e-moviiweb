<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'FAQS Page',
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

				<ul class="col-md-3 list-unstyled">

					<li class="widget-holder widget-bg">
						<a href="#accordion1" class="widget-body d-flex">
							<div class="mr-3">
								<i class="fa fa-diamond fs-22 text-primary"></i>
							</div>
							<div>
								<h5 class="mt-0 mb-1 fs-16 fw-400 sub-heading-font-family">Common FAQ</h5>
								<small>Lorem ipsum dolor sit amet.</small>
							</div>
						</a>
					</li>

					<li class="widget-holder widget-bg">
						<a href="#accordion2" class="widget-body d-flex">
							<div class="mr-3">
								<i class="fa fa-star-o fs-22 text-info"></i>
							</div>
							<div>
								<h5 class="mt-0 mb-1 fs-16 fw-400 sub-heading-font-family">Knowledge Base</h5>
								<small>Lorem ipsum dolor sit amet.</small>
							</div>
						</a>
					</li>

					<li class="widget-holder widget-bg">
						<a href="#accordion3" class="widget-body d-flex">
							<div class="mr-3">
								<i class="fa fa-shield fs-22 text-danger"></i>
							</div>
							<div>
								<h5 class="mt-0 mb-1 fs-16 fw-400 sub-heading-font-family">Purchase FAQ</h5>
								<small>Lorem ipsum dolor sit amet.</small>
							</div>
						</a>
					</li>

					<li class="widget-holder widget-bg">
						<a href="#accordion4" class="widget-body d-flex">
							<div class="mr-3">
								<i class="fa fa-money fs-22 text-success"></i>
							</div>
							<div>
								<h5 class="mt-0 mb-1 fs-16 fw-400 sub-heading-font-family">Buisness FAQ</h5>
								<small>Lorem ipsum dolor sit amet.</small>
							</div>
						</a>
					</li>

				</ul><!-- /.col-md-3 -->

				<div class="col-md-9">

					<div class="widget-holder">
						<div class="widget-bg">
							<div class="widget-body clearfix">

								<div class="accordion accordion-minimal" id="accordion1" role="tablist" aria-multiselectable="true">

									<div class="d-flex mb-4 mt-2">
										<div class="mr-3">
											<i class="fa fa-diamond fs-24 text-primary"></i>
										</div>
										<div>
											<h5 class="mt-0 mb-1 fs-22 fw-400 sub-heading-font-family">Common FAQ</h5>
											<small>Lorem ipsum dolor sit amet.</small>
										</div>
									</div>

								  <div class="card ">
								    <div class="card-header" role="tab" id="headingOne">
								      <h5 class="card-title fw-300">
								        <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								          <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</strong>
								        </a>
								      </h5>
								    </div>
								    <div id="collapseOne" class="card-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
								      <div class="card-block">
								        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								      </div>
								    </div>
								  </div>

								  <div class="card ">
								    <div class="card-header" role="tab" id="headingTwo">
								      <h5 class="card-title fw-300">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								          <strong>Ut enim ad minim veniam, quis nostrud exercitation?</strong>
								        </a>
								      </h5>
								    </div>
								    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								      <div class="card-block">
								        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								      </div>
								    </div>
								  </div>

								  <div class="card ">
								    <div class="card-header" role="tab" id="headingThree">
								      <h5 class="card-title fw-300">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								          <strong>Excepteur sint occaecat cupidatat non proident?</strong>
								        </a>
								      </h5>
								    </div>
								    <div id="collapseThree" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								      <div class="card-block">
								        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								      </div>
								    </div>
								  </div>

									<div class="card ">
								    <div class="card-header border-0" role="tab" id="headingFour">
								      <h5 class="card-title fw-300">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								          <strong>Duis aute irure dolor in reprehenderit?</strong>
								        </a>
								      </h5>
								    </div>
								    <div id="collapseFour" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
								      <div class="card-block">
								        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								      </div>
								    </div>
								  </div>
								</div><!-- /.panel-group -->

				      </div><!-- /.widget-body -->
						</div><!-- /.widget-bg -->
					</div><!-- /.widget-holder -->

					<div class="widget-holder">
						<div class="widget-bg">
							<div class="widget-body clearfix">

								<div class="accordion accordion-minimal" id="accordion2" role="tablist" aria-multiselectable="true">

									<div class="d-flex mb-4 mt-2">
										<div class="mr-3">
											<i class="fa fa-star-o fs-24 text-info"></i>
										</div>
										<div>
											<h5 class="mt-0 mb-1 fs-22 fw-400 sub-heading-font-family">Knowledge Base</h5>
											<small>Lorem ipsum dolor sit amet.</small>
										</div>
									</div>

								  <div class="card ">
								    <div class="card-header" role="tab" id="headingFive">
								      <h5 class="card-title fw-300">
								        <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
								          <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</strong>
								        </a>
								      </h5>
								    </div>
								    <div id="collapseFive" class="card-collapse collapse show" role="tabpanel" aria-labelledby="headingFive">
								      <div class="card-block">
								        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								      </div>
								    </div>
								  </div>

								  <div class="card ">
								    <div class="card-header" role="tab" id="headingSix">
								      <h5 class="card-title fw-300">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
								          <strong>Ut enim ad minim veniam, quis nostrud exercitation?</strong>
								        </a>
								      </h5>
								    </div>
								    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
								      <div class="card-block">
								        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								      </div>
								    </div>
								  </div>

								  <div class="card ">
								    <div class="card-header" role="tab" id="headingSeven">
								      <h5 class="card-title fw-300">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
								          <strong>Excepteur sint occaecat cupidatat non proident?</strong>
								        </a>
								      </h5>
								    </div>
								    <div id="collapseSeven" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
								      <div class="card-block">
								        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								      </div>
								    </div>
								  </div>

									<div class="card ">
								    <div class="card-header" role="tab" id="headingEight">
								      <h5 class="card-title fw-300">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
								          <strong>Duis aute irure dolor in reprehenderit?</strong>
								        </a>
								      </h5>
								    </div>
								    <div id="collapseEight" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
								      <div class="card-block">
								        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								      </div>
								    </div>
								  </div>

									<div class="card ">
								    <div class="card-header" role="tab" id="headingNine">
								      <h5 class="card-title fw-300">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
								          <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</strong>
								        </a>
								      </h5>
								    </div>
								    <div id="collapseNine" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
								      <div class="card-block">
								        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								      </div>
								    </div>
								  </div>

									<div class="card ">
								    <div class="card-header border-0" role="tab" id="headingTen">
								      <h5 class="card-title fw-300">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
								          <strong>Ut enim ad minim veniam, quis nostrud exercitation?</strong>
								        </a>
								      </h5>
								    </div>
								    <div id="collapseTen" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
								      <div class="card-block">
								        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								      </div>
								    </div>
								  </div>
								</div><!-- /.panel-group -->

				      </div><!-- /.widget-body -->
						</div><!-- /.widget-bg -->
					</div><!-- /.widget-holder -->

					<div class="widget-holder">
						<div class="widget-bg">
							<div class="widget-body clearfix">

								<div class="accordion accordion-minimal" id="accordion3" role="tablist" aria-multiselectable="true">

									<div class="d-flex mb-4 mt-2">
										<div class="mr-3">
											<i class="fa fa-shield fs-24 text-danger"></i>
										</div>
										<div>
											<h5 class="mt-0 mb-1 fs-22 fw-400 sub-heading-font-family">Purchase FAQ</h5>
											<small>Lorem ipsum dolor sit amet.</small>
										</div>
									</div>

								  <div class="card">
								    <div class="card-header" role="tab" id="headingEleven">
								      <h5 class="card-title fw-300">
								        <a role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
								          <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</strong>
								        </a>
								      </h5>
								    </div>
								    <div id="collapseEleven" class="card-collapse collapse show" role="tabpanel" aria-labelledby="headingEleven">
								      <div class="card-block">
								        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								      </div>
								    </div>
								  </div>

								  <div class="card">
								    <div class="card-header" role="tab" id="headingTwelve">
								      <h5 class="card-title fw-300">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
								          <strong>Ut enim ad minim veniam, quis nostrud exercitation?</strong>
								        </a>
								      </h5>
								    </div>
								    <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
								      <div class="card-block">
								        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								      </div>
								    </div>
								  </div>

								  <div class="card ">
								    <div class="card-header border-0" role="tab" id="headingThirteen">
								      <h5 class="card-title fw-300">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
								          <strong>Excepteur sint occaecat cupidatat non proident?</strong>
								        </a>
								      </h5>
								    </div>
								    <div id="collapseThirteen" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
								      <div class="card-block">
								        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								      </div>
								    </div>
								  </div>

								</div><!-- /.panel-group -->

				      </div><!-- /.widget-body -->
						</div><!-- /.widget-bg -->
					</div><!-- /.widget-holder -->

					<div class="widget-holder">
						<div class="widget-bg">
							<div class="widget-body clearfix">

								<div class="accordion accordion-minimal" id="accordion4" role="tablist" aria-multiselectable="true">

									<div class="d-flex mb-4 mt-2">
										<div class="mr-3">
											<i class="fa fa-money fs-24 text-success"></i>
										</div>
										<div>
											<h5 class="mt-0 mb-1 fs-22 fw-400 sub-heading-font-family">Buisness FAQ</h5>
											<small>Lorem ipsum dolor sit amet.</small>
										</div>
									</div>

								  <div class="card ">
								    <div class="card-header" role="tab" id="headingFourteen">
								      <h5 class="card-title fw-300">
								        <a role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen">
								          <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</strong>
								        </a>
								      </h5>
								    </div>
								    <div id="collapseFourteen" class="card-collapse collapse show" role="tabpanel" aria-labelledby="headingFourteen">
								      <div class="card-block">
								        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								      </div>
								    </div>
								  </div>

								  <div class="card ">
								    <div class="card-header" role="tab" id="headingFifteen">
								      <h5 class="card-title fw-300">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
								          <strong>Ut enim ad minim veniam, quis nostrud exercitation?</strong>
								        </a>
								      </h5>
								    </div>
								    <div id="collapseFifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFifteen">
								      <div class="card-block">
								        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								      </div>
								    </div>
								  </div>

								  <div class="card ">
								    <div class="card-header" role="tab" id="headingSixteen">
								      <h5 class="card-title fw-300">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
								          <strong>Excepteur sint occaecat cupidatat non proident?</strong>
								        </a>
								      </h5>
								    </div>
								    <div id="collapseSixteen" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingSixteen">
								      <div class="card-block">
								        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								      </div>
								    </div>
								  </div>

									<div class="card ">
								    <div class="card-header border-0" role="tab" id="headingSeventeen">
								      <h5 class="card-title fw-300">
								        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
								          <strong>Duis aute irure dolor in reprehenderit?</strong>
								        </a>
								      </h5>
								    </div>
								    <div id="collapseSeventeen" class="card-collapse collapse" role="tabpanel" aria-labelledby="headingSeventeen">
								      <div class="card-block">
								        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								      </div>
								    </div>
								  </div>

								</div><!-- /.panel-group -->

				      </div><!-- /.widget-body -->
						</div><!-- /.widget-bg -->
					</div><!-- /.widget-holder -->

				</div><!-- /.col-md-9 -->



			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
