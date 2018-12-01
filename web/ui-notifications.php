<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Notifications',
	'body_class' => $GLOBALS['body_class'] . '',
	'styles' => array(
		'toastr'
	),
	'scripts' => array(
		'toastr',
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
							<h5 class="box-title mr-b-0">Simple Toastr Alerts</h5>
							<p class="text-muted">You can use four different alert <code>info, warning, success, and error</code> messages.</p>

							<div class="btn-list">
	              <button class="toast-info btn btn-info ripple">Info Message</button>
	              <button class="toast-warning btn btn-warning ripple">Warning Message</button>
	              <button class="toast-success btn btn-success ripple">Success Message</button>
	              <button class="toast-danger btn btn-danger ripple">Danger Message</button>
	            </div>

							<div class="btn-list">
								<button class="toast-basic btn btn-outline-default ripple">Basic</button>
	              <button class="toast-array btn btn-outline-default ripple">Text Array</button>
	              <button class="toast-html btn btn-outline-default ripple">HTML Message</button>
	              <button class="toast-transitions btn btn-outline-default ripple">Transitions</button>
								<button class="toast-sticky btn btn-outline-default ripple">Sticky</button>
	            </div>
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-12 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title mr-b-0">Modal Alerts</h5>
							<p class="text-muted">You can use four different alert <code>info, warning, success, and error</code> message.</p>

							<div class="btn-list">
								<button class="modal-alert btn btn-outline-default ripple" data-title="Here's a Message!">Basic</button>
	              <button class="modal-alert btn btn-outline-default ripple" data-title="Here's a Message!"  data-text="It's pretty, isn't it?">With Text</button>
	              <button class="modal-alert btn btn-outline-default ripple" data-title="Good job!" data-text="You clicked the button!" data-type="success" data-button-text="Success">Success</button>
	              <button class="modal-alert-warning btn btn-outline-default ripple">Warning</button>
								<button class="modal-alert-cancel btn btn-outline-default ripple">Cancel</button>
								<button class="modal-alert-info btn btn-outline-default ripple">Info</button>
								<button class="modal-alert-image btn btn-outline-default ripple">Image</button>
	            </div>

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Simple Alerts</h5>

							<div class="alert alert-icon alert-success alert-dismissible fade show" role="alert">
	              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <i class="material-icons list-icon">check_circle</i>
	              <strong>Well done!</strong> You successfully read this important alert message.
	            </div>

							<div class="alert alert-icon alert-info alert-dismissible fade show" role="alert">
	              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <i class="material-icons list-icon">info</i>
	              <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
	            </div>

							<div class="alert alert-icon alert-warning alert-dismissible fade show" role="alert">
	              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <i class="material-icons list-icon">warning</i>
	              <strong>Holy guacamole!</strong> You should check in on some of those fields below.
	            </div>

							<div class="alert alert-icon alert-danger alert-dismissible fade show" role="alert">
	              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <i class="material-icons list-icon">not_interested</i>
	              <strong>Oh snap!</strong> Change a few things up and try submitting again.
	            </div>
			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Alert with List</h5>

							<div class="alert alert-info" role="alert">
	              <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true">×</span></button>
	              <p><strong>Read documentation and check devices:</strong></p>
	              <ul class="mr-t-10">
	                <li>Connections</li>
	                <li>Cables &amp; Accessories</li>
	                <li>Display &amp; Touch</li>
	                <li>Drivers</li>
	              </ul>
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
