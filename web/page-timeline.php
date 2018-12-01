<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Timeline',
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

				<div class="widget-holder col-md-12">
	        <div class="widget-bg-transparent">
	          <div class="widget-body">

	            <div class="timeline">
	              <div class="timeline-single">
	                <div class="timeline-header">
	                  <i class="material-icons">mode_comment</i>
	                </div><!-- /.timeline-header -->

	                <div class="timeline-title">
	                  <img src="assets/demo/users/user1.jpg" alt="User Image" />
	                  <h5><a href="#">John Doe</a></h5>
	                  <small>2:23 p.m</small>
	                </div><!-- /.timeline-title -->

	                <div class="timeline-body">
                    <header>
                      <h6 class="timeline-body-title">Commented On <a href="#">5 reasons not to die</a></h6>
                    </header>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in diam vitae sem posuere iaculis. Nunc id enim arcu. Ut eget eros eget lacus luctus mollis sit amet id tortor.</p>
	                </div><!-- /.timeline-body -->
	              </div><!-- /.timeline-single -->

	              <div class="timeline-single">
	                <div class="timeline-header">
	                  <i class="material-icons">done</i>
	                </div><!-- /.timeline-header -->

	                <div class="timeline-title">
	                  <img src="assets/demo/users/user2.jpg" alt="User Image" />
	                  <h5>Jonas Doe</h5>
	                  <small>Yesterday</small>
	                </div><!-- /.timeline-title -->

	                <div class="timeline-body">
                    <header>
                      <h6 class="timeline-body-title">Added Post: <a href="#">Quisque mollis lorem a gravida fringilla</a></h6>
                    </header>
	                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in diam vitae sem posuere iaculis. Nunc id enim arcu. Ut eget eros eget lacus luctus mollis sit amet id tortor.</p>
	                </div><!-- /.timeline-body -->
	              </div><!-- /.timeline-single -->

	              <div class="timeline-single">
	                <div class="timeline-header">
	                  <i class="material-icons bg-color-scheme">thumb_up</i>
	                </div><!-- /.timeline-header -->

	                <div class="timeline-title">
	                  <img src="assets/demo/users/user3.jpg" alt="User Image" />
	                  <h5>Judy Doe</h5>
	                  <small>Yesterday</small>
	                </div><!-- /.timeline-title -->

	                <div class="timeline-body">
                    <header class="bg-color-scheme">
                      <h6 class="timeline-body-title">Liked <a href="#">35 reasons you are wrong about everything</a></h6>
                    </header>
	                </div>
	              </div><!-- /.timeline-single -->

	              <div class="timeline-single">
	                <div class="timeline-header">
	                  <i class="material-icons bg-danger">videocam</i>
	                </div><!-- /.timeline-header -->

	                <div class="timeline-title">
	                  <img src="assets/demo/users/user4.jpg" alt="User Image" />
	                  <h5>Judy Doe</h5>
	                  <small>Yesterday</small>
	                </div><!-- /.timeline-title -->

	                <div class="timeline-body">
                    <header class="bg-danger">
                      <h6 class="timeline-body-title">Video Shared</h6>
                    </header>
	                  <iframe width="560" height="315" src="https://www.youtube.com/embed/DJ-dOODlQgg" frameborder="0" allowfullscreen></iframe>
	                </div>
	              </div><!-- /.timeline-single -->

	              <div class="timeline-single">
	                <div class="timeline-header">
                    <i class="material-icons bg-danger">done</i>
	                </div><!-- /.timeline-header -->

	                <div class="timeline-title">
	                  <img src="assets/demo/users/user2.jpg" alt="User Image" />
	                  <h5>Jonas Doe</h5>
	                  <small>Yesterday</small>
	                </div><!-- /.timeline-title -->

	                <div class="timeline-body">
                    <header class="bg-danger">
                      <h6 class="timeline-body-title">Post Shared <a href="#">Quisque mollis lorem a gravida fringilla</a></h6>
                    </header>
	                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in diam vitae sem posuere iaculis. Nunc id enim arcu. Ut eget eros eget lacus luctus mollis sit amet id tortor.</p>
	                </div><!-- /.timeline-body -->
	              </div><!-- /.timeline-single -->

	              <button class="load-more-btn btn btn-primary btn-lg" data-url="assets/js/getTimeline.php"><span>Load More</span></button>
	            </div><!-- /.timeline -->

	          </div><!-- /.widget-body -->
	        </div><!-- /.widget-bg-transparent -->
	      </div><!-- /.widget-holder -->

			</div><!-- /.row -->
    </div><!-- /.widget-list -->

	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
