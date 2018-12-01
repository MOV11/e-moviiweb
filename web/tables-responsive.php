<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Responsive Tables',
	'body_class' => $GLOBALS['body_class'] . '',
  'styles' => array(
    'tablesaw'
  ),
  'scripts' => array(
    'tablesaw',
    'tablesaw-init'
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
			        <h5>Kitchen Sink</h5>
			      </div><!-- /.widget-heading -->

	          <p>Swipe Mode, ModeSwitch, Minimap, Sortable, SortableSwitch</p>

			      <div class="widget-body clearfix">

	            <table class="tablesaw color-table table-primary table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>
	              <thead>
	                <tr>
	                  <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Movie Title</th>
	                  <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Rank</th>
	                  <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year</th>
	                  <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">
	                    <abbr title="Rotten Tomato Rating">Rating</abbr>
	                  </th>
	                  <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Gross</th>
	                </tr>
	              </thead>
	              <tbody>
	                <tr>
	                  <td class="title">Avatar</td>
	                  <td>1</td>
	                  <td>2009</td>
	                  <td>83%</td>
	                  <td>$2.7B</td>
	                </tr>
	                <tr>
	                  <td class="title">Titanic</td>
	                  <td>2</td>
	                  <td>1997</td>
	                  <td>88%</td>
	                  <td>$2.1B</td>
	                </tr>
	                <tr>
	                  <td class="title">The Avengers</td>
	                  <td>3</td>
	                  <td>2012</td>
	                  <td>92%</td>
	                  <td>$1.5B</td>
	                </tr>
	                <tr>
	                  <td class="title">Harry Potter and the Deathly Hallows—Part 2</td>
	                  <td>4</td>
	                  <td>2011</td>
	                  <td>96%</td>
	                  <td>$1.3B</td>
	                </tr>
	                <tr>
	                  <td class="title">Frozen</td>
	                  <td>5</td>
	                  <td>2013</td>
	                  <td>89%</td>
	                  <td>$1.2B</td>
	                </tr>
	                <tr>
	                  <td class="title">Iron Man 3</td>
	                  <td>6</td>
	                  <td>2013</td>
	                  <td>78%</td>
	                  <td>$1.2B</td>
	                </tr>
	                <tr>
	                  <td class="title">Transformers: Dark of the Moon</td>
	                  <td>7</td>
	                  <td>2011</td>
	                  <td>36%</td>
	                  <td>$1.1B</td>
	                </tr>
	                <tr>
	                  <td class="title">The Lord of the Rings: The Return of the King</td>
	                  <td>8</td>
	                  <td>2003</td>
	                  <td>95%</td>
	                  <td>$1.1B</td>
	                </tr>
	                <tr>
	                  <td class="title">Skyfall</td>
	                  <td>9</td>
	                  <td>2012</td>
	                  <td>92%</td>
	                  <td>$1.1B</td>
	                </tr>
	                <tr>
	                  <td class="title">Transformers: Age of Extinction</td>
	                  <td>10</td>
	                  <td>2014</td>
	                  <td>18%</td>
	                  <td>$1.0B</td>
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
