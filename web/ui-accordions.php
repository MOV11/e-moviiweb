<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Accordions',
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

				<div class="col-md-6 widget-holder">
					<div class="widget-bg-transparent">
						<div class="widget-body clearfix">
							<h5 class="box-title">Accordion Minimal</h5>

							<div class="accordion accordion-minimal" id="accordion-5" role="tablist" aria-multiselectable="true">

								<div class="card">
									<div class="card-header" role="tab" id="heading13">
										<h5 class="m-0">
											<a role="button" data-toggle="collapse" data-parent="#accordion-5" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
												Collapsible Group Item #1
											</a>
										</h5>
									</div>
									<div id="collapseFive" class="card-collapse collapse show" role="tabpanel" aria-labelledby="heading13">
										<div class="card-block">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div><!-- /.card -->

								<div class="card">
									<div class="card-header" role="tab" id="heading14">
										<h5 class="m-0">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-5" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
												Collapsible Group Item #2
											</a>
										</h5>
									</div>
									<div id="collapseSix" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading14">
										<div class="card-block">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div><!-- /.card -->

								<div class="card">
									<div class="card-header" role="tab" id="heading15">
										<h5 class="m-0">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-5" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
												Collapsible Group Item #3
											</a>
										</h5>
									</div>
									<div id="collapseSeven" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading15">
										<div class="card-block">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div><!-- /.panel -->

							</div><!-- /.panel-group -->
						</div><!-- /.widget-body -->

					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg-transparent">
						<div class="widget-body clearfix">
							<h5 class="box-title">Danger Accordion</h5>

	            <div class="accordion" id="accordion-3" role="tablist" aria-multiselectable="true">

	              <div class="card card-outline-danger">
	                <div class="card-header" role="tab" id="heading4">
	                  <h5 class="m-0">
	                    <a role="button" data-toggle="collapse" data-parent="#accordion-3" href="#collapse21" aria-expanded="true" aria-controls="collapse21">
	                      Collapsible Group Item #1
	                    </a>
	                  </h5>
	                </div><!-- /.card-header -->

	                <div id="collapse21" class="card-collapse collapse show" role="tabpanel" aria-labelledby="heading4">
	                  <div class="card-block">
	                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
	                  </div><!-- /.card-block -->
	                </div><!-- /.card-collapse -->
	              </div><!-- /.panel -->

	              <div class="card card-outline-danger">
	                <div class="card-header" role="tab" id="heading5">
	                  <h5 class="m-0">
	                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-3" href="#collapse22" aria-expanded="false" aria-controls="collapse22">
	                      Collapsible Group Item #2
	                    </a>
	                  </h5>
	                </div><!-- /.card-header -->

	                <div id="collapse22" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading5">
	                  <div class="card-block">
	                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
	                  </div><!-- /.card-block -->
	                </div><!-- /.card-collapse -->
	              </div><!-- /.panel -->

	              <div class="card card-outline-danger">
	                <div class="card-header" role="tab" id="heading6">
	                  <h5 class="m-0">
	                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-3" href="#collapse23" aria-expanded="false" aria-controls="collapse23">
	                      Collapsible Group Item #3
	                    </a>
	                  </h5>
	                </div><!-- /.card-header -->

	                <div id="collapse23" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading6">
	                  <div class="card-block">
	                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
	                  </div><!-- /.card-block -->
	                </div><!-- /.card-collapse -->
	              </div><!-- /.panel-default -->
	            </div><!-- /.panel-group -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

      </div><!-- /.row -->

      <div class="row">

				<div class="col-md-6 widget-holder">
					<div class="widget-bg-transparent">
						<div class="widget-body clearfix">
							<h5 class="box-title">Info Accordion</h5>

	            <div class="accordion" id="accordion-2" role="tablist" aria-multiselectable="true">

	              <div class="card card-outline-info">
	                <div class="card-header" role="tab" id="heading7">
	                  <h5 class="m-0">
	                    <a role="button" data-toggle="collapse" data-parent="#accordion-2" href="#collapse31" aria-expanded="true" aria-controls="collapse31">
	                    	Collapsible Group Item #1
	                    </a>
	                  </h5>
	                </div><!-- /.card-header -->

	                <div id="collapse31" class="card-collapse collapse show" role="tabpanel" aria-labelledby="heading7">
	                  <div class="card-block">
	                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
	                  </div><!-- /.card-block -->
	                </div><!-- /.card-collapse -->
	              </div><!-- /.panel -->

	              <div class="card card-outline-info">
	                <div class="card-header" role="tab" id="heading8">
	                  <h5 class="m-0">
	                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-2" href="#collapse32" aria-expanded="false" aria-controls="collapse32">
	                      Collapsible Group Item #2
	                    </a>
	                  </h5>
	                </div><!-- /.card-header -->

	                <div id="collapse32" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading8">
	                  <div class="card-block">
	                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
	                  </div><!-- /.card-block -->
	                </div><!-- /.card-collapse -->
	              </div><!-- /.panel -->

	              <div class="card card-outline-info">
	                <div class="card-header" role="tab" id="heading9">
	                  <h5 class="m-0">
	                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-2" href="#collapse33" aria-expanded="false" aria-controls="collapse33">
	                      Collapsible Group Item #3
	                    </a>
	                  </h5>
	                </div><!-- /.card-header -->

	                <div id="collapse33" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading9">
	                  <div class="card-block">
	                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
	                  </div><!-- /.card-block -->
	                </div><!-- /.card-collapse -->
	              </div><!-- /.panel-default -->
	            </div><!-- /.panel-group -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg-transparent">
						<div class="widget-body clearfix">
							<h5 class="box-title">Color Scheme Accordion</h5>

	            <div class="accordion" id="accordion-4" role="tablist" aria-multiselectable="true">

	              <div class="card card-outline-color-scheme">
	                <div class="card-header" role="tab" id="heading10">
	                  <h5 class="m-0">
	                    <a role="button" data-toggle="collapse" data-parent="#accordion-4" href="#collapse41" aria-expanded="true" aria-controls="collapse41">
	                      <i class="material-icons md-18">extension</i>
	                      Collapsible Group Item #1
	                    </a>
	                  </h5>
	                </div><!-- /.card-header -->

	                <div id="collapse41" class="card-collapse collapse show" role="tabpanel" aria-labelledby="heading10">
	                  <div class="card-block">
	                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
	                  </div><!-- /.card-block -->
	                </div><!-- /.card-collapse -->
	              </div><!-- /.panel -->

	              <div class="card card-outline-color-scheme">
	                <div class="card-header" role="tab" id="heading11">
	                  <h5 class="m-0">
	                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-4" href="#collapse42" aria-expanded="false" aria-controls="collapse42">
	                      <i class="material-icons md-18">face</i>
	                      Collapsible Group Item #2
	                    </a>
	                  </h5>
	                </div><!-- /.card-header -->

	                <div id="collapse42" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading11">
	                  <div class="card-block">
	                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
	                  </div><!-- /.card-block -->
	                </div><!-- /.card-collapse -->
	              </div><!-- /.panel -->

	              <div class="card card-outline-color-scheme">
	                <div class="card-header" role="tab" id="heading12">
	                  <h5 class="m-0">
	                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-4" href="#collapse43" aria-expanded="false" aria-controls="collapse43">
	                      <i class="material-icons md-18">fingerprint</i>
	                      Collapsible Group Item #3
	                    </a>
	                  </h5>
	                </div><!-- /.card-header -->

	                <div id="collapse43" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading12">
	                  <div class="card-block">
	                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
	                  </div><!-- /.card-block -->
	                </div><!-- /.card-collapse -->
	              </div><!-- /.panel-default -->
	            </div><!-- /.panel-group -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
    </div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
