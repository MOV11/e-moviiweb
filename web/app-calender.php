<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Full Calender',
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

				<!-- Events List -->
	      <div class="col-md-3 widget-holder widget-full-height widget-no-padding">
	        <div class="widget-bg">
	          <div class="widget-body">
	            <div class="fullcalendar-events" data-toggle="fullcalendar-events" data-target="#fullcalendar-1">
                <div class="m-3">
                  <button class="btn btn-lg btn-danger btn-block ripple fc-add-event text-uppercase fs-16">
                    <span>Add New Event</span>
                  </button>
                </div>

	              <h5 class="box-title pr-4 pl-4 mt-3">Month Planner</h5>

	              <div class="fc-events">
                  <div class="fc-event-item">
                    <div class="fc-event bg-info">My Event 1</div>
                    <i class="material-icons color-info">bookmark</i>
                  </div><!-- /.fc-event-item -->
                  <div class="fc-event-item">
                    <div class="fc-event bg-warning">My Event 2</div>
                    <i class="material-icons color-warning">bookmark</i>
                  </div><!-- /.fc-event-item -->
                  <div class="fc-event-item">
                    <div class="fc-event bg-danger">My Event 3</div>
                    <i class="material-icons color-danger">bookmark</i>
                  </div><!-- /.fc-event-item -->
                  <div class="fc-event-item">
                    <div class="fc-event bg-color-scheme">My Event 4</div>
                    <i class="material-icons color-color-scheme">bookmark</i>
                  </div><!-- /.fc-event-item -->
	              </div><!-- /.fc-events -->

	              <div class="checkbox checkbox-primary pr-4 pl-4">
	                <label>
	                  <input type="checkbox" id="drop-remove">
	                  <span class="label-text">remove after drop</span>
	                </label>
	              </div>
	            </div><!-- /.fullcalendar-events -->
	          </div><!-- /.widget-body -->
	        </div><!-- /.widget-bg -->
	      </div><!-- /.widget-holder -->

				<!-- Full Calender -->
				<div class="col-md-9 widget-holder widget-no-padding">
					<div class="widget-bg-transparent">
						<div class="widget-body clearfix">
	            <div class="fullcalendar" id="fullcalendar-1" data-toggle="fullcalendar" data-plugin-options='{ "events" : "assets/js/events-sample.json"}'></div><!-- /.fullcalendar -->
						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
  </main><!-- /.main-wrapper -->

  <?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
