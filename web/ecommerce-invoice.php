<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'E-Commerce Invoice',
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

							<div class="ecommerce-invoice">
								<div class="row">
				        	<div class="col-md-6">
				        		<h3>Invoice</h3>
				        	</div>
									<div class="col-md-6 text-right text-muted">
										Lisa Doe<br />
										PO Box 21177<br />
										MELBOURNE VIC 8011<br />
										Austria
									</div>
				        </div><!-- /.row -->

								<hr />

								<div class="row">
									<div class="col-md-6 text-muted">
				        		<h6 class="mr-t-0"><strong>Invoice To</strong></h6>
										Jone Doe<br />
										PO Box 21177<br />
										MELBOURNE VIC 8011<br />
										Austria
				        	</div>
									<div class="col-md-6 text-right">
										<h6 class="mr-t-0"><strong>Details:</strong></h6>
										<strong>Date:</strong> <span class="text-muted">August 10, 2014</span> <br />
										<strong>ID:</strong> <span class="text-muted">1357995</span> <br />
										<strong>Amount Due:</strong> <span class="text-muted">&dollar; 3040</span>
									</div>
								</div><!-- /.row -->

								<hr class="border-0" />

								<table class="table table-bordered table-striped">
									<thead>
										<tr class="bg-color-scheme-dark text-white">
											<th class="text-center">&#35;</th>
											<th>Product</th>
											<th class="text-center">Unit Cost</th>
											<th class="text-center">Quantity</th>
											<th class="text-center">Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="text-center">1</td>
											<td>Product One</td>
											<td class="text-center">100</td>
											<td class="text-center">1</td>
											<td class="text-center">100</td>
										</tr>
										<tr>
											<td class="text-center">2</td>
											<td>Product Two</td>
											<td class="text-center">550</td>
											<td class="text-center">2</td>
											<td class="text-center">1100</td>
										</tr>
										<tr>
											<td class="text-center">3</td>
											<td>Product Three</td>
											<td class="text-center">320</td>
											<td class="text-center">2</td>
											<td class="text-center">640</td>
										</tr>
										<tr>
											<td class="text-center">4</td>
											<td>Product Four</td>
											<td class="text-center">80</td>
											<td class="text-center">5</td>
											<td class="text-center">400</td>
										</tr>
										<tr>
											<td class="text-center">5</td>
											<td>Product Five</td>
											<td class="text-center">90</td>
											<td class="text-center">4</td>
											<td class="text-center">360</td>
										</tr>
										<tr>
											<td class="text-center">6</td>
											<td>Product Six</td>
											<td class="text-center">35</td>
											<td class="text-center">4</td>
											<td class="text-center">140</td>
										</tr>
									</tbody>
								</table>

								<div class="row">
									<div class="col-md-8">
										<p>Thanks for your business</p>
										<ul class="text-muted small">
											<li>Aeserunt tenetur cum nihil repudiandae perferendis fuga vitae corporis!</li>
											<li>Laborum, necessitatibus recusandae ullam at iusto dolore.</li>
											<li>Voluptatum aperiam voluptates quasi!</li>
											<li>Assumenda, iusto, consequuntur corporis atque culpa saepe magnam recusandae</li>
											<li>Possimus odio ipsam magni sint reiciendis unde amet</li>
										</ul>
									</div>
									<div class="col-md-4 invoice-sum text-right">
										<ul class="list-unstyled">
											<li>Sub - Total amount: &#36; 2740</li>
											<li>Discount: -----</li>
											<li>Tax (12%): &#36;300</li>
											<li><strong>Grand Total: &#36; 3040</strong></li>
										</ul>
									</div>
								</div><!-- /.row -->
							</div><!-- /.ecommerce-invoice -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
