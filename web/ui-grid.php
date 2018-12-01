<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Grid Page',
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
							<h5 class="box-title mr-b-0">Grid Options</h5>
			        <p class="text-muted">See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>

							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th></th>
										<th>
											Extra small devices <small>Phones</small><br />
											<small>(&#60;768px)</small>
										</th>
										<th>
											Small devices <small>Tablets</small><br />
											<small>(&#8805;768px)</small>
										</th>
										<th>
											Medium devices <small>Dekstops</small><br />
											<small>(&#8805;992px)</small>
										</th>
										<th>
											Large devices <small>Tablets</small><br />
											<small>(&#8805;1200px)</small>
										</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<th>Grid behavior</th>
										<td>Horizontal at all times</td>
										<td colspan="3">Collapsed to start, horizontal above breakpoints</td>
									</tr>

									<tr>
										<th>Max container width</th>
										<td>None (auto)</td>
										<td>750px</td>
										<td>970px</td>
										<td>1170px</td>
									</tr>

									<tr>
										<th>Class prefix</th>
										<td><code>.col-</code></td>
										<td><code>.col-sm-</code></td>
										<td><code>.col-md-</code></td>
										<td><code>.col-lg-</code></td>
									</tr>

									<tr>
										<th># of columns</th>
										<td colspan="4">12</td>
									</tr>

									<tr>
										<th>Max column width</th>
										<td>Auto</td>
										<td>60px</td>
										<td>78px</td>
										<td>95px</td>
									</tr>

									<tr>
										<th>Gutter width</th>
										<td colspan="4">30px (15px on each side of a column)</td>
									</tr>

									<tr>
										<th>Nestable</th>
										<td colspan="4">Yes</td>
									</tr>

									<tr>
										<th>Offsets</th>
										<td colspan="4">Yes</td>
									</tr>

									<tr>
										<th>Column Ordering</th>
										<td colspan="4">Yes</td>
									</tr>
								</tbody>
							</table>

							<p class="text-muted">Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, applying any <code>.col-md-</code> class to an element will not only affect its styling on medium devices but also on large devices if a <code>.col-lg-</code> class is not present.</p>
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title mr-b-0">Example: Stacked-To-Horizontal</h5>
			        <p class="text-muted">Using a single set of <code>.col-md-*</code> grid classes, you can create a default grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any <code>.row</code>.</p>

							<div class="row show-grid">
	              <div class="col-md-1">.col-md-1</div>
	              <div class="col-md-1">.col-md-1</div>
	              <div class="col-md-1">.col-md-1</div>
	              <div class="col-md-1">.col-md-1</div>
	              <div class="col-md-1">.col-md-1</div>
	              <div class="col-md-1">.col-md-1</div>
	              <div class="col-md-1">.col-md-1</div>
	              <div class="col-md-1">.col-md-1</div>
	              <div class="col-md-1">.col-md-1</div>
	              <div class="col-md-1">.col-md-1</div>
	              <div class="col-md-1">.col-md-1</div>
	              <div class="col-md-1">.col-md-1</div>
	            </div>

							<div class="row show-grid">
	              <div class="col-md-8">.col-md-8</div>
	              <div class="col-md-4">.col-md-4</div>
	            </div>

							<div class="row show-grid">
	              <div class="col-md-4">.col-md-4</div>
	              <div class="col-md-4">.col-md-4</div>
	              <div class="col-md-4">.col-md-4</div>
	            </div>

							<div class="row show-grid">
	              <div class="col-md-6">.col-md-6</div>
	              <div class="col-md-6">.col-md-6</div>
	            </div>

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title mr-b-0">Example: Mobile and Desktop</h5>
			        <p class="text-muted">Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding <code>.col-*</code> <code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</p>

							<div class="row show-grid">
	              <div class="col-12 col-md-8">.col-12 .col-md-8</div>
	              <div class="col-6 col-md-4">.col-6 .col-md-4</div>
	            </div>

							<div class="row show-grid">
	              <div class="col-6 col-md-4">.col-6 .col-md-4</div>
	              <div class="col-6 col-md-4">.col-6 .col-md-4</div>
	              <div class="col-6 col-md-4">.col-6 .col-md-4</div>
	            </div>

							<div class="row show-grid">
	              <div class="col-6">.col-6</div>
	              <div class="col-6">.col-6</div>
	            </div>

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title mr-b-0">Example: Mobile, Tablet, Dekstops</h5>
			        <p class="text-muted">Build on the previous example by creating even more dynamic and powerful layouts with tablet <code>.col-sm-*</code> classes.</p>

							<div class="row show-grid">
	              <div class="col-12 col-sm-6 col-md-8">.col-12 .col-sm-6 .col-md-8</div>
	              <div class="col-6 col-md-4">.col-6 .col-md-4</div>
	            </div>

							<div class="row show-grid">
	              <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
	              <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
	              <!-- Optional: clear the XS cols if their content doesn't match in height -->
	              <div class="clearfix visible-xs"></div>
	              <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
	            </div>

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title mr-b-0">Responsive Column Resets</h5>
			        <p class="text-muted">With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a <code>.clearfix</code> and our responsive utility classes.</p>

							<div class="row show-grid">
	              <div class="col-6 col-sm-3"> .col-6 .col-sm-3 <br> Resize your viewport or check it out on your phone for an example. </div>
	              <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
	              <!-- Add the extra clearfix for only the required viewport -->
	              <div class="clearfix visible-xs"></div>
	              <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
	              <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
	            </div>

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title mr-b-0">Offsetting Columns</h5>
			        <p class="text-muted">Move columns to the right using <code>.offset-md-*</code> classes. These classes increase the left margin of a column by * columns. For example, <code>.offset-md-4</code> moves <code>.col-md-4</code> over four columns.</p>

							<div class="row show-grid">
	              <div class="col-md-4">.col-md-4</div>
	              <div class="col-md-4 offset-md-4">.col-md-4 .offset-md-4</div>
	            </div>
							<div class="row show-grid">
	              <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
	              <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
	            </div>
							<div class="row show-grid">
	              <div class="col-md-6 offset-md-3">.col-md-6 .offset-md-3</div>
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
