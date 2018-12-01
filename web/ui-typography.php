<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Typography',
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

							<div class="row">
								<div class="col-md-6">
									<h5 class="box-title mr-b-0">Headings</h5>
									<p class="text-muted">Use tags <code>h1 to h6</code> for get desire heading.</p>

									<h1>h1. Bootstrap	heading</h1>
									<h2>h2. Bootstrap	heading</h2>
									<h3>h3. Bootstrap	heading</h3>
									<h4>h4. Bootstrap	heading</h4>
									<h5>h5. Bootstrap	heading</h5>
									<h6>h6. Bootstrap	heading</h6>
								</div>

								<div class="col-md-6">
									<h5 class="box-title mr-b-0">Heading with Subheadings</h5>
									<p class="text-muted">Use tags <code>h1 to h6</code> for get desire heading.</p>

									<h1>Heading 1 <small>Sub-heading</small></h1>
									<h2>Heading 2 <small>Sub-heading</small></h2>
									<h3>Heading 3 <small>Sub-heading</small></h3>
									<h4>Heading 4 <small>Sub-heading</small></h4>
									<h5>Heading 5 <small>Sub-heading</small></h5>
									<h6>Heading 6 <small>Sub-heading</small></h6>
								</div>

								<div class="col-md-12"><hr class="mr-tb-40" /></div>

								<div class="col-md-4">
	                <h5 class="box-title">Body</h5>
	                <p class="text-muted">This template has default body <code>font</code>size is <code>14px</code> and <code>line-height</code> <b>1.57142857</b>.</p>
	              </div>

								<div class="col-md-4">
	                <h5 class="box-title">Highlighted text</h5>
	                <p class="text-muted">
										This template has default highlighted text tag
	                  <mark>highlight</mark>
	                  so you can use <code> mark </code> tag to display highlighted text.
									</p>
	              </div>

								<div class="col-md-4">
	                <h5 class="box-title">Alignment text</h5>
	                <p class="text-left">Left aligned text.</p>
	                <p class="text-center">Center aligned text.</p>
	                <p class="text-right">Right aligned text.</p>
	              </div>

								<div class="col-md-12"><hr class="mr-tb-40" /></div>

								<div class="col-md-4">
	                <h5 class="box-title">Text Colors</h5>

									<p class="text-muted">This is an example of muted text. Add class <code>text-muted</code></p>
									<p class="text-primary">This is an example of primary text. Add class <code>text-primary</code></p>
									<p class="text-success">This is an example of success text. Add class <code>text-success</code></p>
									<p class="text-info">This is an example of info text. Add class <code>text-info</code></p>
									<p class="text-warning">This is an example of warning text. Add class <code>text-warning</code></p>
									<p class="text-danger">This is an example of danger text. Add class <code>text-danger</code></p>
	              </div>

								<div class="col-md-4">
	                <h5 class="box-title">Address</h5>

									<address>
	                  <strong>Twitter, Inc.</strong>
	                  <br /> 795 Folsom Ave, Suite 600
	                  <br /> San Francisco, CA 94107
	                  <br />
	                  <abbr title="Phone">P:</abbr>(123) 456-7890
	                </address>

									<address>
	                  <strong>George Belly</strong>
	                  <br />
	                  <a href="mailto:#">first.last@example.com</a>
	                </address>
	              </div>

								<div class="col-md-4">
	                <h5 class="box-title">Default Blockquotes</h5>

									<blockquote class="blockquote">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
									</blockquote>

									<blockquote class="blockquote blockquote-reverse">
	                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
	                  <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
									</blockquote>
	              </div>

								<div class="col-md-12"><hr class="mr-tb-40" /></div>

								<div class="col-md-4">
	                <h5 class="box-title">OL Listing</h5>

									<ol>
	                  <li>Lorem ipsum dolor sit amet</li>
	                  <li>Consectetur adipiscing elit</li>
	                  <li>Integer molestie lorem at massa </li>
	                </ol>
	              </div>

								<div class="col-md-4">
	                <h5 class="box-title">Ul Listing</h5>

									<ul>
	                  <li>Lorem ipsum dolor sit amet</li>
	                  <li>Consectetur adipiscing elit</li>
	                  <li>Integer molestie lorem at massa </li>
	                </ul>
	              </div>

								<div class="col-md-4">
	                <h5 class="box-title">Description Text</h5>

                  <dl class="row">
                    <dt class="col-sm-3">Description lists</dt>
                    <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                    <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                    <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

                    <dt class="col-sm-3">Nesting</dt>
                    <dd class="col-sm-9">
                    <dl class="row">
                      <dt class="col-sm-4">Nested definition list</dt>
                      <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                    </dl>
                    </dd>
                  </dl>
	              </div>

							</div><!-- /.row -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
