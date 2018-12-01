<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Tabs',
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

				<!-- Default Tabs -->
				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Default Tabs</h5>

							<div class="tabs">
								<ul class="nav nav-tabs">
									<li class="nav-item">
		                <a class="nav-link" href="#home-tab" data-toggle="tab" aria-expanded="true">Home</a>
		              </li>
		              <li class="nav-item active">
		                <a class="nav-link" href="#profile-tab" data-toggle="tab" aria-expanded="true">Profile</a>
		              </li>
									<li class="nav-item">
		                <a class="nav-link" href="#messages-tab" data-toggle="tab" aria-expanded="true">Messages</a>
		              </li>
									<li class="nav-item">
		                <a class="nav-link" href="#settings-tab" data-toggle="tab" aria-expanded="true">Settings</a>
		              </li>
		            </ul><!-- /.nav-tabs -->

								<div class="tab-content">
									<div class="tab-pane" id="home-tab">
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
		                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
		              </div>

									<div class="tab-pane active" id="profile-tab">
										<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
		              </div>

									<div class="tab-pane" id="messages-tab">
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
		                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
		              </div>

									<div class="tab-pane" id="settings-tab">
										<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
		              </div>
								</div><!-- /.tab-content -->
							</div><!-- /.tabs -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Tabs Justified -->
				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Tabs Justified</h5>

							<div class="tabs">
								<ul class="nav nav-tabs nav-justified">
									<li class="nav-item">
		                <a class="nav-link" href="#home-tab2" data-toggle="tab" aria-expanded="true">Home</a>
		              </li>
		              <li class="nav-item active">
		                <a class="nav-link" href="#profile-tab2" data-toggle="tab" aria-expanded="true">Profile</a>
		              </li>
									<li class="nav-item">
		                <a class="nav-link" href="#messages-tab2" data-toggle="tab" aria-expanded="true">Messages</a>
		              </li>
									<li class="nav-item">
		                <a class="nav-link" href="#settings-tab2" data-toggle="tab" aria-expanded="true">Settings</a>
		              </li>
		            </ul><!-- /.nav-tabs -->

								<div class="tab-content">
									<div class="tab-pane" id="home-tab2">
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
		                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
		              </div>

									<div class="tab-pane active" id="profile-tab2">
										<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
		              </div>

									<div class="tab-pane" id="messages-tab2">
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
		                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
		              </div>

									<div class="tab-pane" id="settings-tab2">
										<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
		              </div>
								</div><!-- /.tab-content -->
							</div><!-- /.tabs -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->

			<div class="row">

				<!-- Tabs Vertical Left -->
				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">tabs Vertical Left</h5>

							<div class="tabs tabs-vertical">
								<ul class="nav nav-tabs flex-column">
									<li class="nav-item active">
		                <a class="nav-link" href="#home-tab-v1" data-toggle="tab" aria-expanded="true">Home</a>
		              </li>
		              <li class="nav-item">
		                <a class="nav-link" href="#profile-tab-v1" data-toggle="tab" aria-expanded="true">Profile</a>
		              </li>
									<li class="nav-item">
		                <a class="nav-link" href="#messages-tab-v1" data-toggle="tab" aria-expanded="true">Messages</a>
		              </li>
									<li class="nav-item">
		                <a class="nav-link" href="#settings-tab-v1" data-toggle="tab" aria-expanded="true">Settings</a>
		              </li>
		            </ul><!-- /.nav-tabs -->

								<div class="tab-content">
									<div class="tab-pane active" id="home-tab-v1">
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet.</p>
										<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa.</p>
		              </div>

									<div class="tab-pane" id="profile-tab-v1">
										<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
										<p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac.</p>
		              </div>

									<div class="tab-pane" id="messages-tab-v1">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet.</p>
										<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa.</p>
		              </div>

									<div class="tab-pane" id="settings-tab-v1">
										<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
										<p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac.</p>
		              </div>
								</div><!-- /.tab-content -->
							</div><!-- /.tabs -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Tabs Vertical Right -->
				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body">
							<h5 class="box-title">tabs Vertical Right</h5>

							<div class="tabs tabs-vertical tabs-vertical-right clearfix">
								<ul class="nav nav-tabs flex-column">
									<li class="nav-item active">
		                <a class="nav-link" href="#home-tab-v2" data-toggle="tab" aria-expanded="true">Home</a>
		              </li>
		              <li class="nav-item">
		                <a class="nav-link" href="#profile-tab-v2" data-toggle="tab" aria-expanded="true">Profile</a>
		              </li>
									<li class="nav-item">
		                <a class="nav-link" href="#messages-tab-v2" data-toggle="tab" aria-expanded="true">Messages</a>
		              </li>
									<li class="nav-item">
		                <a class="nav-link" href="#settings-tab-v2" data-toggle="tab" aria-expanded="true">Settings</a>
		              </li>
		            </ul><!-- /.nav-tabs -->

								<div class="tab-content">
									<div class="tab-pane active" id="home-tab-v2">
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet.</p>
										<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa.</p>
		              </div>

									<div class="tab-pane" id="profile-tab-v2">
										<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
										<p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac.</p>
		              </div>

									<div class="tab-pane" id="messages-tab-v2">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet.</p>
										<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa.</p>
		              </div>

									<div class="tab-pane" id="settings-tab-v2">
										<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
										<p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac.</p>
		              </div>
								</div><!-- /.tab-content -->
							</div><!-- /.tabs -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->

			<div class="row">

				<!-- Tabs Bordered -->
				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Tabs Bordered</h5>

							<div class="tabs tabs-bordered">
								<ul class="nav nav-tabs">
									<li class="nav-item active">
		                <a class="nav-link" href="#home-tab-bordered-1" data-toggle="tab" aria-expanded="true">Home</a>
		              </li>
		              <li class="nav-item">
		                <a class="nav-link" href="#profile-tab-bordered-1" data-toggle="tab" aria-expanded="true">Profile</a>
		              </li>
									<li class="nav-item">
		                <a class="nav-link" href="#messages-tab-bordered-1" data-toggle="tab" aria-expanded="true">Messages</a>
		              </li>
									<li class="nav-item">
		                <a class="nav-link" href="#settings-tab-bordered-1" data-toggle="tab" aria-expanded="true">Settings</a>
		              </li>
		            </ul><!-- /.nav-tabs -->

								<div class="tab-content">
									<div class="tab-pane active" id="home-tab-bordered-1">
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
		                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
		              </div>

									<div class="tab-pane" id="profile-tab-bordered-1">
										<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
		              </div>

									<div class="tab-pane" id="messages-tab-bordered-1">
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
		                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
		              </div>

									<div class="tab-pane" id="settings-tab-bordered-1">
										<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
		              </div>
								</div><!-- /.tab-content -->
							</div><!-- /.tabs -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

				<!-- Tabs with Icons -->
				<div class="col-md-6 widget-holder">
					<div class="widget-bg">
						<div class="widget-body clearfix">
							<h5 class="box-title">Tabs with Icons</h5>

							<div class="tabs tabs-vertical tabs-vertical-icons">
								<ul class="nav nav-tabs flex-column">
									<li class="nav-item active">
		                <a class="nav-link" href="#home-tab-icon1" data-toggle="tab" aria-expanded="true">
		                  <i class="list-icon material-icons">home</i>
		                </a>
		              </li>
		              <li class="nav-item">
		                <a class="nav-link" href="#profile-tab-icon1" data-toggle="tab" aria-expanded="true">
		                  <i class="list-icon material-icons">person</i>
		                </a>
		              </li>
									<li class="nav-item">
		                <a class="nav-link" href="#messages-tab-icon1" data-toggle="tab" aria-expanded="true">
		                  <i class="list-icon material-icons">mail_outline</i>
		                </a>
		              </li>
									<li class="nav-item">
		                <a class="nav-link" href="#settings-tab-icon1" data-toggle="tab" aria-expanded="true">
		                  <i class="list-icon material-icons">settings</i>
		                </a>
		              </li>
		            </ul><!-- /.nav-tabs -->

								<div class="tab-content">
									<div class="tab-pane active" id="home-tab-icon1">
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
		                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
		              </div>

									<div class="tab-pane" id="profile-tab-icon1">
										<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
		              </div>

									<div class="tab-pane" id="messages-tab-icon1">
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
		                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
		              </div>

									<div class="tab-pane" id="settings-tab-icon1">
										<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
		              </div>
								</div><!-- /.tab-content -->
							</div><!-- /.tabs -->

			      </div><!-- /.widget-body -->
					</div><!-- /.widget-bg -->
				</div><!-- /.widget-holder -->

			</div><!-- /.row -->

		</div><!-- /.widget-list -->
	</main><!-- /.main-wrappper -->

	<?php get_template_part('partials/right-sidebar') ?>
</div><!-- /.content-wrapper -->

<?php get_footer();
