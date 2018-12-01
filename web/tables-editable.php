<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Editable Table',
	'body_class' => $GLOBALS['body_class'] . '',
  'styles'=> array(
    'footable',
    'datatables'
  ),
  'scripts'=> array(
    'moment',
    'datatables',
    'footable',
    'tabledit'
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
					<div class="widget-bg">

						<div class="widget-heading clearfix">
			        <h5>Editable Table</h5>
			      </div><!-- /.widget-heading -->

			      <div class="widget-body clearfix">

	            <table class="table table-editable">
	              <thead>
	                <tr>
	                  <th data-identifier>ID</th>
	                  <th data-editable>Name</th>
	                  <th data-editable>Salary</th>
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

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">

						<div class="widget-heading clearfix">
			        <h5>Inline Editable Table</h5>
			      </div><!-- /.widget-heading -->

			      <div class="widget-body clearfix">

	            <table class="table table-editable-inline">
	              <thead>
	                <tr>
	                  <th data-identifier>ID</th>
	                  <th data-editable>Name</th>
	                  <th data-editable>Salary</th>
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

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">

						<div class="widget-heading clearfix">
			        <h5>Datatable Editable</h5>
			      </div><!-- /.widget-heading -->

			      <div class="widget-body clearfix">

	            <table class="table table-editable" data-toggle="datatables">
	              <thead>
	                <tr>
	                  <th data-identifier>ID</th>
	                  <th data-editable>First Name</th>
	                  <th data-editable>Last Name</th>
	                  <th data-editable>Job Title</th>
	                  <th>Started On</th>
	                  <th>Date of Birth</th>
	                </tr>
	              </thead>
	              <tbody>
	                <tr data-expanded="true">
	                  <td>1</td>
	                  <td>Dennise</td>
	                  <td>Fuhrman</td>
	                  <td>High School History Teacher</td>
	                  <td>November 8th 2011</td>
	                  <td>July 25th 1960</td>
	                </tr>
	                <tr>
	                  <td>2</td>
	                  <td>Elodia</td>
	                  <td>Weisz</td>
	                  <td>Wallpaperer Helper</td>
	                  <td>October 15th 2010</td>
	                  <td>March 30th 1982</td>
	                </tr>
	                <tr>
	                  <td>3</td>
	                  <td>Raeann</td>
	                  <td>Haner</td>
	                  <td>Internal Medicine Nurse Practitioner</td>
	                  <td>November 28th 2013</td>
	                  <td>February 26th 1966</td>
	                </tr>
	                <tr>
	                  <td>4</td>
	                  <td>Junie</td>
	                  <td>Landa</td>
	                  <td>Offbearer</td>
	                  <td>October 31st 2010</td>
	                  <td>March 29th 1966</td>
	                </tr>
	                <tr>
	                  <td>5</td>
	                  <td>Solomon</td>
	                  <td>Bittinger</td>
	                  <td>Roller Skater</td>
	                  <td>December 29th 2011</td>
	                  <td>September 22nd 1964</td>
	                </tr>
	                <tr>
	                  <td>6</td>
	                  <td>Bar</td>
	                  <td>Lewis</td>
	                  <td>Clown</td>
	                  <td>November 12th 2012</td>
	                  <td>August 4th 1991</td>
	                </tr>
	                <tr>
	                  <td>7</td>
	                  <td>Usha</td>
	                  <td>Leak</td>
	                  <td>Ships Electronic Warfare Officer</td>
	                  <td>August 14th 2012</td>
	                  <td>November 20th 1979</td>
	                </tr>
	                <tr>
	                  <td>8</td>
	                  <td>Lorriane</td>
	                  <td>Cooke</td>
	                  <td>Technical Services Librarian</td>
	                  <td>September 21st 2010</td>
	                  <td>April 7th 1969</td>
	                </tr>
	              </tbody>
	            </table>
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
