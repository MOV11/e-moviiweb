<?php
include_once 'lib/init.php';

$config = array(
  'title' => 'Form Elements',
  'body_class' => $GLOBALS['body_class'] . '',
  'styles' => array(
    'fullcalendar',
  ),
  'scripts' => array(
    'moment',
    'fullcalendar',
    'jqueryui',
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

        <div class="col-md-12 widget-holder">
  				<div class="widget-bg">

  					<div class="widget-body clearfix">
              <h5 class="box-title mr-b-0">Horizontal Form</h5>
              <p class="text-muted">All bootstrap element classies</p>

              <form>
                <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="l0">Default Input</label>
                  <div class="col-md-9">
                    <input class="form-control" id="l0" placeholder="Default Input" type="password">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="l10">Disabled</label>
                  <div class="col-md-9">
                    <input class="form-control" disabled="" id="l10" placeholder="Disabled" type="password">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="l11">Readonly</label>
                  <div class="col-md-9">
                    <input class="form-control" id="l11" placeholder="Readonly" readonly="" type="password">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="l4">With Actions on Left</label>
                  <div class="col-md-9">
                    <div class="input-group">
                      <div class="input-group-btn">
                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">
                          Action
                          <span class="caret"></span>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="javascript: void(0);"><strong>Action</strong></a>
                          <a class="dropdown-item" href="javascript: void(0);">Action</a>
                          <a class="dropdown-item" href="javascript: void(0);">Another action</a>
                          <a class="dropdown-item" href="javascript: void(0);">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="javascript: void(0);"><strong>Separated link</strong></a>
                        </div>
                      </div>
                      <input class="form-control" id="l4" type="text">
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="l5">With Actions on Right</label>
                  <div class="col-md-9">
                    <div class="input-group">
                      <input class="form-control" id="l5" type="text">
                      <div class="input-group-btn">
                        <button class="btn btn-outline-default dropdown-toggle" data-toggle="dropdown" type="button">
                          Action
                          <span class="caret"></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="javascript: void(0);"><strong>Action</strong></a>
                          <a class="dropdown-item" href="javascript: void(0);">Action</a>
                          <a class="dropdown-item" href="javascript: void(0);">Another action</a>
                          <a class="dropdown-item" href="javascript: void(0);">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="javascript: void(0);"><strong>Separated link</strong></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="l8">Search</label>
                  <div class="col-md-9">
                    <div class="input-group">
                      <input class="form-control" id="l8" placeholder="Search..." type="text">
                      <span class="input-group-btn">
                        <a class="btn btn-success" href="javascript: void(0);">
                          Search files
                        </a>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="l1">Block Help</label>
                  <div class="col-md-9">
                    <input class="form-control" id="l1" placeholder="Enter text" type="text">
                    <small class="text-muted">Technical information for user</small>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="l2">Email Address</label>
                  <div class="col-md-9">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="material-icons list-icon">mail_outline</i>
                      </span>
                      <input class="form-control" id="l2" placeholder="Email Address" type="email">
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="l3">Password</label>
                  <div class="col-md-9">
                    <div class="input-group">
                      <input class="form-control" id="l3" placeholder="Password" type="password">
                      <span class="input-group-addon">
                        <i class="material-icons list-icon">lock_open</i>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="l6">Left Icon</label>
                  <div class="col-md-9">
                    <div class="form-input-icon">
                      <i class="material-icons list-icon">search</i>
                      <input class="form-control" id="l6" placeholder="Left icon" type="text">
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="l7">Right Icon</label>
                  <div class="col-md-9">
                    <div class="form-input-icon form-input-icon-right">
                      <i class="material-icons list-icon">account_circle</i>
                      <input class="form-control" id="l7" placeholder="Right icon" type="text">
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 col-form-label">Static Control</label>
                  <div class="col-md-9">
                    <p class="form-control-static"> email@example.com </p>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="l13">Dropdown</label>
                  <div class="col-md-9">
                    <select class="form-control" id="l13">
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                      <option>Option 4</option>
                      <option>Option 5</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="l14">Multiple Select</label>
                  <div class="col-md-9">
                    <select class="form-control py-3" id="l14" multiple="">
                      <option>Option 1</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                      <option>Option 4</option>
                      <option>Option 5</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="l15">Textarea</label>
                  <div class="col-md-9">
                    <textarea class="form-control" id="l15" rows="3"></textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="l16">File input</label>
                  <div class="col-md-9">
                    <input id="l16" type="file"><br />
                    <small class="text-muted">Technical information for user</small>
                  </div>
                </div>

                <div class="form-actions">
                  <div class="form-group row">
                    <div class="col-md-9 offset-md-3 btn-list">
                      <button class="btn btn-primary btn-rounded" type="button">Submit</button>
                      <button class="btn btn-outline-default btn-rounded" type="button">Cancel</button>
                    </div>
                  </div>
                </div>
              </form>

  		      </div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

        <div class="col-md-12 widget-holder">
  				<div class="widget-bg">

  					<div class="widget-body clearfix">
              <h5 class="box-title mr-b-0">Vertical Form</h5>
              <p class="text-muted">All bootstrap element classies</p>

              <form>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="l30">Default Input</label>
                      <input class="form-control" id="l30" placeholder="Email Address" type="text">
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="l31">Password</label>
                      <div class="input-group">
                        <input class="form-control" id="l31" placeholder="Password" type="password">
                        <span class="input-group-addon">
                          <i class="material-icons list-icon">lock</i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="l32">Left Icon</label>
                      <div class="form-input-icon">
                        <i class="material-icons list-icon">face</i>
                        <input class="form-control" id="l32" placeholder="Left icon" type="text">
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="l33">Right Icon</label>
                      <div class="form-input-icon form-input-icon-right">
                        <i class="material-icons list-icon">file_download</i>
                        <input class="form-control" id="l33" placeholder="Right icon" type="text">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="l34">Input with Icon</label>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="material-icons list-icon">search</i>
                        </span>
                        <input class="input-error form-control" id="l34" type="text" value="">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="l36">Disabled</label>
                      <input class="form-control" disabled="" id="l36" placeholder="Disabled" type="text">
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="l37">Readonly</label>
                      <input class="form-control" id="l37" placeholder="Readonly" readonly="" type="text">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="l38">Textarea</label>
                  <textarea class="form-control" id="l38" rows="3"></textarea>
                </div>

                <div class="form-group">
                  <label for="l39">File input</label><br />
                  <input id="l39" type="file"><br />
                  <small class="text-muted">Technical information for user</small>
                </div>

                <div class="form-actions btn-list">
                  <button class="btn btn-primary" type="button">Submit</button>
                  <button class="btn btn-outline-default" type="button">Cancel</button>
                </div>
              </form>

  		      </div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

        <div class="col-md-12 widget-holder">
  				<div class="widget-bg">

  		      <div class="widget-body clearfix">
              <h5 class="box-title mr-b-0">Rounded Inputs</h5>
              <p class="text-muted">Use class <code>.form-control-rounded</code></p>

              <div class="row mr-b-50">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="form-label" for="l81">Rounded Input</label>
                    <input class="form-control form-control-rounded" id="l81" type="text">
                  </div>
                </div>
                <div class="col-lg-12">
                  <label class="form-label" for="l82">Disabled Rounded Input</label>
                  <input class="form-control form-control-rounded" disabled="" id="l82" placeholder="Password" type="password">
                </div>
              </div>

              <h5 class="box-title mr-b-0">Input States</h5>
              <p class="text-muted">Use class <code>.has-success</code> <code>.has-warning</code> <code>.has-danger</code></p>

              <div class="row mr-b-50">
                <div class="col-lg-12">
                  <div class="form-group has-success">
                    <label class="form-control-label" for="l51">Input with success</label>
                    <input class="form-control" id="l51" type="text">
                    <div class="form-control-feedback">Success! You've done it.</div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group has-warning">
                    <label class="form-control-label" for="l52">Input with warning</label>
                    <input class="form-control" id="l52" type="text">
                    <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group has-danger">
                    <label class="form-control-label" for="l54">Input with danger</label>
                    <input class="form-control" id="l54" type="text">
                    <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                  </div>
                </div>
              </div>

              <h5 class="box-title mr-b-0">Inline Form</h5>
              <form class="form-inline">
                <div class="form-group mr-2">
                  <label class="sr-only" for="exampleInputAmount">Amount</label>
                  <div class="input-group">
                    <div class="input-group-addon">$</div>
                    <input class="form-control" id="exampleInputAmount" placeholder="Amount" type="text">
                    <div class="input-group-addon">.00</div>
                  </div>
                </div>
                <a class="btn btn-primary" href="javascript: void(0);">Transfer cash</a>
              </form>

              <h5 class="box-title mr-t-50">Column Sizing</h5>
              <form class="mr-b-30">
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <input class="form-control" placeholder=".col-md-2" type="text">
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <input class="form-control" placeholder=".col-md-3" type="text">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <input class="form-control" placeholder=".col-md-4" type="text">
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <input class="form-control" placeholder=".col-md-2" type="text">
                    </div>
                  </div>
                </div>
              </form>

  		      </div><!-- /.widget-body -->
  				</div><!-- /.widget-bg -->
  			</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">

						<div class="widget-body clearfix">
							<h5 class="box-title mr-b-0">Vertical Forms With Left Icons</h5>
							<p class="text-muted">Basic Form with left icons</p>

			        <form action="javascript:void(0)">
	              <div class="form-group mr-t-30">
	                <label for="sample1UserName">User Name</label>
	                <div class="input-group">
	                  <div class="input-group-addon"><i class="material-icons">person</i></div>
	                  <input type="text" class="form-control" id="sample1UserName" placeholder="User Name" />
	                </div><!-- /.input-group -->
	              </div><!-- /.form-group -->

	              <div class="form-group">
	                <label for="sample1Password">Password</label>
	                <div class="input-group">
	                  <div class="input-group-addon"><i class="material-icons">lock</i></div>
	                  <input type="password" class="form-control" id="sample1Password" placeholder="Password" />
	                </div><!-- /.input-group -->
	              </div><!-- /.form-group -->

	              <div class="form-group mb-3">
	                <div class="checkbox checkbox-primary">
	                  <label>
	                    <input type="checkbox" id="sample1Checkbox">
	                    <span class="label-text">
	                      Remember me
	                    </span>
	                  </label>
	                </div><!-- /.checkbox -->
	              </div><!-- /.form-group -->

	              <div class="form-actions">
	                <div class="form-group">
	                  <div class="row">
	                    <div class="col-sm-12 btn-list">
	                      <button type="submit" class="btn btn-primary">Submit</button>
	                      <button type="button" class="btn btn-default">Cancel</button>
	                    </div><!-- /.col-sm-12 -->
	                  </div><!-- /.row -->
	                </div><!-- /.form-group -->
	              </div><!-- /.form-group -->

	            </form>
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">

						<div class="widget-body clearfix">
							<h5 class="box-title mr-b-0">Vertical Forms With Right Icons</h5>
							<p class="text-muted">Basic Forms with right icons</p>

			        <form action="javascript:void(0)" class="mr-t-30">
	              <div class="form-group">
	                <label for="sample2UserName">User Name</label>
	                <div class="input-group">
	                  <input type="text" class="form-control" id="sample2UserName" placeholder="User Name" />
	                  <div class="input-group-addon"><i class="material-icons">person</i></div>
	                </div><!-- /.input-group -->
	              </div><!-- /.form-group -->

	              <div class="form-group">
	                <label for="sample2Password">Password</label>
	                <div class="input-group">
	                  <input type="password" class="form-control" id="sample2Password" placeholder="Password" />
	                  <div class="input-group-addon"><i class="material-icons">lock</i></div>
	                </div><!-- /.input-group -->
	              </div><!-- /.form-group -->

	              <div class="form-group mb-3">
	                <div class="checkbox checkbox-primary">
	                  <label>
	                    <input type="checkbox" id="sample2checkbox">
	                    <span class="label-text">
	                      Remember me
	                    </span>
	                  </label>
	                </div><!-- /.checkbox -->
	              </div><!-- /.form-group -->

	              <div class="form-actions">
	                <div class="form-group">
	                  <div class="row">
	                    <div class="col-sm-12 btn-list">
	                      <button type="submit" class="btn btn-primary">Submit</button>
	                      <button type="button" class="btn btn-default">Cancel</button>
	                    </div><!-- /.col-sm-12 -->
	                  </div><!-- /.row -->
	                </div><!-- /.form-group -->
	              </div><!-- /.form-actions -->

	            </form>
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">

						<div class="widget-body clearfix">
							<h5 class="box-title mr-b-0">Horizontal form with left icons</h5>
			        <p class="text-muted">Use Bootstrap's predefined classes horizontal form</p>

	            <form class="form-horizontal mr-t-30" action="javascript:void(0)">
	              <div class="form-group row">
	                <label for="sample3UserName" class="text-sm-right col-sm-3 col-form-label">User Name</label>
	                <div class="col-sm-9">
	                  <div class="input-group">
	                    <div class="input-group-addon"><i class="material-icons">person</i></div>
	                    <input type="text" class="form-control" id="sample3UserName" placeholder="User Name" />
	                  </div><!-- /.input-group -->
	                </div><!-- /.col-sm-9 -->
	              </div><!-- /.form-group -->

	              <div class="form-group row">
	                <label for="sample3Password" class="text-sm-right col-sm-3 col-form-label">Password</label>
	                <div class="col-sm-9">
	                  <div class="input-group">
	                    <div class="input-group-addon"><i class="material-icons">lock</i></div>
	                    <input type="password" class="form-control" id="sample3Password" placeholder="Password" />
	                  </div><!-- /.input-group -->
	                </div><!-- /.col-sm-9 -->
	              </div><!-- /.form-group -->

	              <div class="form-group mb-3 mr-4">
	                <div class="col-sm-9 offset-sm-3">
	                  <div class="checkbox checkbox-primary">
	                    <label>
	                      <input type="checkbox" id="sample3checkbox">
	                      <span class="label-text">
	                        Remember me
	                      </span>
	                    </label>
	                  </div><!-- /.checkbox -->
	                </div><!-- /.col-sm-9 -->
	              </div><!-- /.form-group -->

	              <div class="form-actions">
	                <div class="form-group row">
	                  <div class="col-sm-9 offset-sm-3 btn-list">
	                    <button type="submit" class="btn btn-primary">Submit</button>
	                    <button type="button" class="btn btn-default">Cancel</button>
	                  </div><!-- /.col-sm-12 -->
	                </div><!-- /.form-group -->
	              </div><!-- /.form-actions -->

	            </form>
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">

						<div class="widget-body clearfix">
							<h5 class="box-title mr-b-0">Horizontal Form with right icons</h5>
			        <p class="text-muted">Use Bootstrap's predefined classes horizontal form</p>

	            <form class="form-horizontal mr-t-30" action="javascript:void(0)">
	              <div class="form-group row">
	                <label for="sample4UserName" class="text-sm-right col-sm-3 col-form-label">User Name</label>
	                <div class="col-sm-9">
	                  <div class="input-group">
	                    <input type="text" class="form-control" id="sample4UserName" placeholder="User Name" />
	                    <div class="input-group-addon"><i class="material-icons">person</i></div>
	                  </div><!-- /.input-group -->
	                </div><!-- /.col-sm-9 -->
	              </div><!-- /.form-group -->

	              <div class="form-group row">
	                <label for="sample4Password" class="text-sm-right col-sm-3 col-form-label">Password</label>
	                <div class="col-sm-9">
	                  <div class="input-group">
	                    <input type="password" class="form-control" id="sample4Password" placeholder="Password" />
	                    <div class="input-group-addon"><i class="material-icons">lock</i></div>
	                  </div><!-- /.input-group -->
	                </div><!-- /.col-sm-9 -->
	              </div><!-- /.form-group -->

	              <div class="form-group mb-3 mr-4">
	                <div class="col-sm-9 offset-sm-3">
	                  <div class="checkbox checkbox-primary">
	                    <label>
	                      <input type="checkbox" id="sample4checkbox">
	                      <span class="label-text">
	                        Remember me
	                      </span>
	                    </label>
	                  </div><!-- /.checkbox -->
	                </div><!-- /.col-sm-9 -->
	              </div><!-- /.form-group -->

	              <div class="form-actions">
	                <div class="form-group row">
	                  <div class="col-sm-9 offset-sm-3 btn-list">
	                    <button type="submit" class="btn btn-primary">Submit</button>
	                    <button type="button" class="btn btn-default">Cancel</button>
	                  </div><!-- /.col-sm-12 -->
	                </div><!-- /.form-group -->
	              </div><!-- /.form-actions -->

	            </form>
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
  </main><!-- /.main-wrapper -->

  <?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
