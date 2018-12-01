<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Animation Page',
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
							<h5 class="box-title mr-b-0">Animations</h5>
							<p class="text-muted">Select an animation style using the dropdown below. You can these animations for any element using classes: <code>.animated</code> & <code>.bounce</code></p>

							<div class="text-center mt-5">
								<span id="animationSandbox" style="display: block;">
									<span class="display-2 sub-heading-font-family text-info">Let's Animate!</span>
								</span>
							</div>

							<form class="mt-5">
								<div class="row">
									<div class="col-sm-8 offset-sm-2">
										<div class="d-flex justify-content-center">
											<select class="form-control fs-15 js--animations mr-3" style="width:auto;">
												<optgroup label="Attention Seekers">
													<option value="bounce">bounce</option>
													<option value="flash">flash</option>
													<option value="pulse">pulse</option>
													<option value="rubberBand">rubberBand</option>
													<option value="shake">shake</option>
													<option value="swing">swing</option>
													<option value="tada">tada</option>
													<option value="wobble">wobble</option>
													<option value="jello">jello</option>
												</optgroup>
												<optgroup label="Bouncing Entrances">
													<option value="bounceIn">bounceIn</option>
													<option value="bounceInDown">bounceInDown</option>
													<option value="bounceInLeft">bounceInLeft</option>
													<option value="bounceInRight">bounceInRight</option>
													<option value="bounceInUp">bounceInUp</option>
												</optgroup>
												<optgroup label="Bouncing Exits">
													<option value="bounceOut">bounceOut</option>
													<option value="bounceOutDown">bounceOutDown</option>
													<option value="bounceOutLeft">bounceOutLeft</option>
													<option value="bounceOutRight">bounceOutRight</option>
													<option value="bounceOutUp">bounceOutUp</option>
												</optgroup>
												<optgroup label="Fading Entrances">
													<option value="fadeIn">fadeIn</option>
													<option value="fadeInDown">fadeInDown</option>
													<option value="fadeInDownBig">fadeInDownBig</option>
													<option value="fadeInLeft">fadeInLeft</option>
													<option value="fadeInLeftBig">fadeInLeftBig</option>
													<option value="fadeInRight">fadeInRight</option>
													<option value="fadeInRightBig">fadeInRightBig</option>
													<option value="fadeInUp">fadeInUp</option>
													<option value="fadeInUpBig">fadeInUpBig</option>
												</optgroup>
												<optgroup label="Fading Exits">
													<option value="fadeOut">fadeOut</option>
													<option value="fadeOutDown">fadeOutDown</option>
													<option value="fadeOutDownBig">fadeOutDownBig</option>
													<option value="fadeOutLeft">fadeOutLeft</option>
													<option value="fadeOutLeftBig">fadeOutLeftBig</option>
													<option value="fadeOutRight">fadeOutRight</option>
													<option value="fadeOutRightBig">fadeOutRightBig </option>
													<option value="fadeOutUp">fadeOutUp</option>
													<option value="fadeOutUpBig">fadeOutUpBig</option>
												</optgroup>
												<optgroup label="Flippers">
													<option value="flip">flip</option>
													<option value="flipInX">flipInX</option>
													<option value="flipInY">flipInY</option>
													<option value="flipOutX">flipOutX</option>
													<option value="flipOutY">flipOutY</option>
												</optgroup>
												<optgroup label="Lightspeed">
													<option value="lightSpeedIn">lightSpeedIn</option>
													<option value="lightSpeedOut">lightSpeedOut</option>
												</optgroup>
												<optgroup label="Rotating Entrances">
													<option value="rotateIn">rotateIn</option>
													<option value="rotateInDownLeft">rotateInDownLeft </option>
													<option value="rotateInDownRight">rotateInDownRight </option>
													<option value="rotateInUpLeft">rotateInUpLeft</option>
													<option value="rotateInUpRight">rotateInUpRight </option>
												</optgroup>
												<optgroup label="Rotating Exits">
													<option value="rotateOut">rotateOut</option>
													<option value="rotateOutDownLeft">rotateOutDownLeft </option>
													<option value="rotateOutDownRight"> rotateOutDownRight </option>
													<option value="rotateOutUpLeft">rotateOutUpLeft </option>
													<option value="rotateOutUpRight">rotateOutUpRight </option>
												</optgroup>
												<optgroup label="Sliding Entrances">
													<option value="slideInUp">slideInUp</option>
													<option value="slideInDown">slideInDown</option>
													<option value="slideInLeft">slideInLeft</option>
													<option value="slideInRight">slideInRight</option>
												</optgroup>
												<optgroup label="Sliding Exits">
													<option value="slideOutUp">slideOutUp</option>
													<option value="slideOutDown">slideOutDown</option>
													<option value="slideOutLeft">slideOutLeft</option>
													<option value="slideOutRight">slideOutRight</option>
												</optgroup>
												<optgroup label="Zoom Entrances">
													<option value="zoomIn">zoomIn</option>
													<option value="zoomInDown">zoomInDown</option>
													<option value="zoomInLeft">zoomInLeft</option>
													<option value="zoomInRight">zoomInRight</option>
													<option value="zoomInUp">zoomInUp</option>
												</optgroup>
												<optgroup label="Zoom Exits">
													<option value="zoomOut">zoomOut</option>
													<option value="zoomOutDown">zoomOutDown</option>
													<option value="zoomOutLeft">zoomOutLeft</option>
													<option value="zoomOutRight">zoomOutRight</option>
													<option value="zoomOutUp">zoomOutUp</option>
												</optgroup>
												<optgroup label="Specials">
													<option value="hinge">hinge</option>
													<option value="rollIn">rollIn</option>
													<option value="rollOut">rollOut</option>
												</optgroup>
											</select>
											<span>
												<button class="btn btn-success js--triggerAnimation" type="button">Let's Animate!</button>
											</span>
										</div>
									</div>
								</div>
							</form>

						</div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->
		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
