<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Basic Tables',
	'body_class' => $GLOBALS['body_class'] . '',
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

				<div class="widget-holder col-md-6">
	        <div class="widget-bg">
	          <div class="widget-body">
	            <h5 class="box-title">Basic Table</h5>
	            <p>Add the base class <code>.table</code> to any <code>&lt;table&gt;</code></p>

	            <table class="table">
	              <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Name</th>
	                  <th>Salary</th>
	                  <th>Country</th>
	                </tr>
	              </thead>
	              <tbody>
	                <tr>
	                  <td>1</td>
	                  <td>Bob Williams</td>
	                  <td>$23,566</td>
	                  <td>USA</td>
	                </tr>
	                <tr>
	                  <td>2</td>
	                  <td>Mike Tyson</td>
	                  <td>$10,200</td>
	                  <td>Canada</td>
	                </tr>
	                <tr>
	                  <td>3</td>
	                  <td>Tim Cook</td>
	                  <td>$32,190</td>
	                  <td>Netherlands</td>
	                </tr>
	                <tr>
	                  <td>4</td>
	                  <td>Philip Morris</td>
	                  <td>$31,432</td>
	                  <td>UK</td>
	                </tr>
	                <tr>
	                  <td>5</td>
	                  <td>Tom Hooper</td>
	                  <td>$28,768</td>
	                  <td>India</td>
	                </tr>
	                <tr>
	                  <td>6</td>
	                  <td>Hulk Hogan</td>
	                  <td>$43,201</td>
	                  <td>Netherlands</td>
	                </tr>
	                <tr>
	                  <td>7</td>
	                  <td>Angelina Jolie</td>
	                  <td>$12,239</td>
	                  <td>Australia</td>
	                </tr>
	              </tbody>
	            </table>

	          </div><!-- /.widget-body -->
	        </div><!-- /.widget-bg -->
	      </div><!-- /.widget-holder -->

	      <div class="widget-holder col-md-6">
	        <div class="widget-bg">
	          <div class="widget-body">
	            <h5 class="box-title">Striped Table</h5>
	            <p>Use <code>.table-striped</code> to add zebra-striping to any table row in <code>&lt;tbody&gt;</code>.</p>

	            <table class="table table-striped">
	              <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>First Name</th>
	                  <th>Last Name</th>
	                  <th>Username</th>
	                </tr>
	              </thead>
	              <tbody>
	                <tr>
	                  <td>1</td>
	                  <td>Bob</td>
	                  <td>Williams</td>
	                  <td>@bobw</td>
	                </tr>
	                <tr>
	                  <td>2</td>
	                  <td>Mike</td>
	                  <td>Tyson</td>
	                  <td>@miketyson</td>
	                </tr>
	                <tr>
	                  <td>3</td>
	                  <td>Tim</td>
	                  <td>Cook</td>
	                  <td>@timck</td>
	                </tr>
	                <tr>
	                  <td>4</td>
	                  <td>Philip</td>
	                  <td>Morris</td>
	                  <td>@philmorris</td>
	                </tr>
	                <tr>
	                  <td>5</td>
	                  <td>Tom</td>
	                  <td>Hooper</td>
	                  <td>@timhoop</td>
	                </tr>
	                <tr>
	                  <td>6</td>
	                  <td>Hulk</td>
	                  <td>Hogan</td>
	                  <td>@hulkhog</td>
	                </tr>
	                <tr>
	                  <td>7</td>
	                  <td>Angelina</td>
	                  <td>Jolie</td>
	                  <td>@angel</td>
	                </tr>
	              </tbody>
	            </table>

	          </div><!-- /.widget-body -->
	        </div><!-- /.widget-bg -->
	      </div><!-- /.widget-holder -->

	      <div class="widget-holder col-md-6">
	        <div class="widget-bg">
	          <div class="widget-body">
	            <h5 class="box-title">Bordered Table</h5>
	            <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>

	            <table class="table table-bordered">
	              <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Title</th>
	                  <th>Progress</th>
	                  <th>Deadline</th>
	                  <th>Actions</th>
	                </tr>
	              </thead>
	              <tbody>
	                <tr>
	                  <td>1</td>
	                  <td>Probe Project</td>
	                  <td>
	                    <div class="progress" data-toggle="tooltip" title="80%">
	                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
	                        <span class="sr-only">80% Complete </span>
	                      </div>
	                    </div>
	                  </td>
	                  <td>May 15, 2015</td>
	                  <td>
	                    <a href="#" class="color-content">
	                      <i class="material-icons md-18">settings</i>
	                    </a>
	                    <a href="#" class="color-content">
	                      <i class="material-icons md-18">clear</i>
	                    </a>
	                  </td>
	                </tr>
	                <tr>
	                  <td>2</td>
	                  <td>Office Automatized</td>
	                  <td>
	                    <div class="progress" data-toggle="tooltip" title="30%">
	                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
	                        <span class="sr-only">30% Complete </span>
	                      </div>
	                    </div>
	                  </td>
	                  <td>May 15, 2015</td>
	                  <td>
	                    <a href="#" class="color-content">
	                      <i class="material-icons md-18">settings</i>
	                    </a>
	                    <a href="#" class="color-content">
	                      <i class="material-icons md-18">clear</i>
	                    </a>
	                  </td>
	                </tr>
	                <tr>
	                  <td>3</td>
	                  <td>Dream successful Project</td>
	                  <td>
	                    <div class="progress" data-toggle="tooltip" title="50%">
	                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
	                        <span class="sr-only">50% Complete </span>
	                      </div>
	                    </div>
	                  </td>
	                  <td>May 15, 2015</td>
	                  <td>
	                    <a href="#" class="color-content">
	                      <i class="material-icons md-18">settings</i>
	                    </a>
	                    <a href="#" class="color-content">
	                      <i class="material-icons md-18">clear</i>
	                    </a>
	                  </td>
	                </tr>
	                <tr>
	                  <td>4</td>
	                  <td>The sunclim bing plain</td>
	                  <td>
	                    <div class="progress" data-toggle="tooltip" title="90%">
	                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
	                        <span class="sr-only">90% Complete </span>
	                      </div>
	                    </div>
	                  </td>
	                  <td>May 15, 2015</td>
	                  <td>
	                    <a href="#" class="color-content">
	                      <i class="material-icons md-18">settings</i>
	                    </a>
	                    <a href="#" class="color-content">
	                      <i class="material-icons md-18">clear</i>
	                    </a>
	                  </td>
	                </tr>
	                <tr>
	                  <td>4</td>
	                  <td>Dream successful Project</td>
	                  <td>
	                    <div class="progress" data-toggle="tooltip" title="40%">
	                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
	                        <span class="sr-only">40% Complete </span>
	                      </div>
	                    </div>
	                  </td>
	                  <td>May 15, 2015</td>
	                  <td>
	                    <a href="#" class="color-content">
	                      <i class="material-icons md-18">settings</i>
	                    </a>
	                    <a href="#" class="color-content">
	                      <i class="material-icons md-18">clear</i>
	                    </a>
	                  </td>
	                </tr>
	                <tr>
	                  <td>6</td>
	                  <td>Open strategy</td>
	                  <td>
	                    <div class="progress" data-toggle="tooltip" title="50%">
	                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
	                        <span class="sr-only">50% Complete </span>
	                      </div>
	                    </div>
	                  </td>
	                  <td>May 15, 2015</td>
	                  <td>
	                    <a href="#" class="color-content">
	                      <i class="material-icons md-18">settings</i>
	                    </a>
	                    <a href="#" class="color-content">
	                      <i class="material-icons md-18">clear</i>
	                    </a>
	                  </td>
	                </tr>
	              </tbody>
	            </table>

	          </div><!-- /.widget-body -->
	        </div><!-- /.widget-bg -->
	      </div><!-- /.widget-holder -->

	      <div class="widget-holder col-md-6">
	        <div class="widget-bg">
	          <div class="widget-body">
	            <h5 class="box-title">Hover Table</h5>
	            <p>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>

	            <table class="table table-hover">
	              <thead>
	                <tr>
	                  <th>Invoice</th>
	                  <th>User</th>
	                  <th>Amount</th>
	                  <th>Date</th>
	                  <th>Status</th>
	                </tr>
	              </thead>
	              <tbody>
	                <tr>
	                  <td>Order#21249</td>
	                  <td>Harman Beck</td>
	                  <td>$35.22</td>
	                  <td>May 15, 2015</td>
	                  <td><span class="badge badge-success py-1 px-2">Paid</span></td>
	                </tr>
	                <tr>
	                  <td>Order#34572</td>
	                  <td>Mary Adams</td>
	                  <td>$75.82</td>
	                  <td>May 12, 2015</td>
	                  <td><span class="badge badge-danger py-1 px-2">Cancel</span></td>
	                </tr>
	                <tr>
	                  <td>Order#78878</td>
	                  <td>Caleb Richard</td>
	                  <td>$45.22</td>
	                  <td>May 15, 2015</td>
	                  <td><span class="badge badge-info py-1 px-2">Pending</span></td>
	                </tr>
	                <tr>
	                  <td>Order#67686</td>
	                  <td>June Lane</td>
	                  <td>$90.23</td>
	                  <td>May 19, 2015</td>
	                  <td><span class="badge badge-warning py-1 px-2">Error</span></td>
	                </tr>
	                <tr>
	                  <td>Order#67378</td>
	                  <td>Lisa Roy</td>
	                  <td>$23.67</td>
	                  <td>April 19, 2015</td>
	                  <td><span class="badge badge-success py-1 px-2">Paid</span></td>
	                </tr>
	                <tr>
	                  <td>Order#67567</td>
	                  <td>John Doe</td>
	                  <td>$47.12</td>
	                  <td>April 28, 2015</td>
	                  <td><span class="badge badge-info py-1 px-2">Pending</span></td>
	                </tr>
	              </tbody>
	            </table>

	          </div><!-- /.widget-body -->
	        </div><!-- /.widget-bg -->
	      </div><!-- /.widget-holder -->

      </div><!-- /.row -->

      <div class="row">

				<div class="widget-holder col-md-6">
	        <div class="widget-bg">
	          <div class="widget-body">
	            <h5 class="box-title">Condensed Table</h5>
	            <p>Add <code>.table-sm</code> to make tables more compact by cutting cell padding in half.</p>

	            <table class="table table-sm mb-4">
	              <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Name</th>
	                  <th>Salary</th>
	                  <th>Country</th>
	                </tr>
	              </thead>
	              <tbody>
	                <tr>
	                  <td>1</td>
	                  <td>Bob Williams</td>
	                  <td>$23,566</td>
	                  <td>USA</td>
	                </tr>
	                <tr>
	                  <td>2</td>
	                  <td>Mike Tyson</td>
	                  <td>$10,200</td>
	                  <td>Canada</td>
	                </tr>
	                <tr>
	                  <td>3</td>
	                  <td>Tim Cook</td>
	                  <td>$32,190</td>
	                  <td>Netherlands</td>
	                </tr>
	                <tr>
	                  <td>4</td>
	                  <td>Philip Morris</td>
	                  <td>$31,432</td>
	                  <td>UK</td>
	                </tr>
	                <tr>
	                  <td>5</td>
	                  <td>Tom Hooper</td>
	                  <td>$28,768</td>
	                  <td>India</td>
	                </tr>
	                <tr>
	                  <td>6</td>
	                  <td>Hulk Hogan</td>
	                  <td>$43,201</td>
	                  <td>Netherlands</td>
	                </tr>
	              </tbody>
	            </table>

	          </div><!-- /.widget-body -->
	        </div><!-- /.widget-bg -->
	      </div><!-- /.widget-holder -->

	      <div class="widget-holder col-md-6">
	        <div class="widget-bg">
	          <div class="widget-body">
	            <h5 class="box-title">Contextual Classes</h5>
	            <p>Use contextual classes to color table rows or individual cells.</p>
	            <table class="table">
	              <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>First Name</th>
	                  <th>Last Name</th>
	                  <th>Username</th>
	                </tr>
	              </thead>
	              <tbody>
	                <tr class="table-active">
	                  <td>1</td>
	                  <td>Bob</td>
	                  <td>Williams</td>
	                  <td>@bobw</td>
	                </tr>
	                <tr class="danger">
	                  <td>2</td>
	                  <td>Mike</td>
	                  <td>Tyson</td>
	                  <td>@miketyson</td>
	                </tr>
	                <tr class="warning">
	                  <td>3</td>
	                  <td>Tim</td>
	                  <td>Cook</td>
	                  <td>@timck</td>
	                </tr>
	                <tr class="info">
	                  <td>4</td>
	                  <td>Philip</td>
	                  <td>Morris</td>
	                  <td>@philmorris</td>
	                </tr>
	                <tr class="success">
	                  <td>5</td>
	                  <td>Tom</td>
	                  <td>Hooper</td>
	                  <td>@timhoop</td>
	                </tr>
	              </tbody>
	            </table>

	          </div><!-- /.widget-body -->
	        </div><!-- /.widget-bg -->
	      </div><!-- /.widget-holder -->

				<div class="col-md-4 col-sm-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title mr-b-0">Primary Table</h5>
							<p class="text-muted">Add <code>.color-table .table-primary</code> to the <code>.table</code> class.</p>

							<table class="table color-table table-primary">
								<thead>
									<tr>
										<th>Name</th>
										<th>Salary</th>
										<th>Country</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Bob Williams</td>
										<td>$23,566</td>
										<td>USA</td>
									</tr>
									<tr>
										<td>Mike Tyson</td>
										<td>$10,200</td>
										<td>Canada</td>
									</tr>
									<tr>
										<td>Tim Cook</td>
										<td>$32,190</td>
										<td>Netherlands</td>
									</tr>
								</tbody>
							</table>

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-4 col-sm-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title mr-b-0">Inverse Table</h5>
							<p class="text-muted">Add <code>.inverse-table .table-primary</code> to the <code>.table</code> class</p>

							<table class="table inverse-table table-color-scheme">
								<thead>
									<tr>
										<th>Name</th>
										<th>Salary</th>
										<th>Country</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Bob Williams</td>
										<td>$23,566</td>
										<td>USA</td>
									</tr>
									<tr>
										<td>Mike Tyson</td>
										<td>$10,200</td>
										<td>Canada</td>
									</tr>
									<tr>
										<td>Tim Cook</td>
										<td>$32,190</td>
										<td>Netherlands</td>
									</tr>
								</tbody>
							</table>

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-4 col-sm-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title mr-b-0">Full Info Table and Hover</h5>
							<p class="text-muted">Add <code>.full-color-table .table-info .table-hover</code></p>

							<table class="table full-color-table table-info table-hover">
								<thead>
									<tr>
										<th>Name</th>
										<th>Salary</th>
										<th>Country</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Bob Williams</td>
										<td>$23,566</td>
										<td>USA</td>
									</tr>
									<tr>
										<td>Mike Tyson</td>
										<td>$10,200</td>
										<td>Canada</td>
									</tr>
									<tr>
										<td>Tim Cook</td>
										<td>$32,190</td>
										<td>Netherlands</td>
									</tr>
								</tbody>
							</table>

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

      </div><!-- /.row -->

    </div><!-- /.widget-list -->
  </main>

  <?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
