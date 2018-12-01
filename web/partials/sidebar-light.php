<!-- SIDEBAR -->
<aside class="site-sidebar scrollbar-enabled clearfix">

	<!-- User Details -->
	<div class="side-user">
		<a class="col-sm-12 media clearfix" href="javascript:void(0);">
			<figure class="media-left media-middle user--online thumb-sm mr-r-10 mr-b-0">
				<img  src="assets/demo/users/user-image.png" class="media-object img-circle" alt="" />
			</figure>

		  <div class="media-body hide-menu">
		    <h4 class="media-heading mr-b-5 text-uppercase">Scott Adams</h4>
		    <span class="user-type fs-12">Edit Profile (...)</span>
		  </div>
		</a>

		<div class="clearfix"></div>

		<ul class="nav in side-menu">
			<li>
				<a href="page-profile.php">
					<i class="list-icon material-icons">face</i>
					My Profile
				</a>
			</li>
			<li>
				<a href="app-inbox.php">
					<i class="list-icon material-icons">mail_outline</i>
					Inbox
				</a>
			</li>
			<li>
				<a href="page-lock-screen.php">
					<i class="list-icon material-icons">settings</i>
					Lock Screen
				</a>
			</li>
			<li>
				<a href="page-login.php">
					<i class="list-icon material-icons">settings_power</i>
					Logout
				</a>
			</li>
		</ul>
	</div><!-- /.side-user -->

	<!-- Sidebar Menu -->
	<nav class="sidebar-nav">
		<ul class="nav in side-menu">
			<li class="current-page menu-item-has-children">
				<a href="javascript:void(0);" class="ripple">
					<i class="list-icon material-icons">network_check</i>
					<span class="hide-menu">
						Dashboard
						<span class="badge badge-border bg-primary pull-right">5</span>
					</span>
				</a>

				<ul class="list-unstyled sub-menu">
          <?php if( $GLOBALS['enable_relative_nav'] ) : ?>
					<li><a href="../default/index.php">Default</a></li>
					<li><a href="../collapse-nav/index.php">Collapsed Nav</a></li>
					<li><a href="../horizontal-nav-icons/index.php">Horizontal Nav Icons</a></li>
          <li><a href="../horizontal-nav/index.php">Horizontal Nav</a></li>
					<li><a href="../ecommerce/index.php">Ecommerce</a></li>
					<li><a href="../real-estate/index.php">Real Estate</a></li>
					<li><a href="../university/index.php">University</a></li>
          <?php else : ?>
					<li><a href="index.php">Default</a></li>
					<li><a href="index-collapse-nav.php">Collapsed Nav</a></li>
					<li><a href="index-horizontal-nav-icons.php">Horizontal Nav Icons</a></li>
          <li><a href="index-horizontal-nav.php">Horizontal Nav</a></li>
					<li><a href="index-ecommerce-demo.php">Ecommerce</a></li>
					<li><a href="index-real-estate-demo.php">Real Estate</a></li>
					<li><a href="index-university-demo.php">University</a></li>
          <?php endif; ?>
				</ul>
			</li>

			<li class="menu-item-has-children active">
				<a href="javascript:void(0);" class="ripple">
					<span class="color-color-scheme">
						<i class="list-icon material-icons">mail_outline</i>
						<span class="hide-menu">
							Apps
						</span>
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
					<li><a href="app-calender.php">Calender</a></li>
					<li class="menu-item-has-children">
						<a href="javascript:void(0);">Inbox</a>
						<ul class="list-unstyled sub-menu">
							<li><a href="app-inbox.php">Inbox</a></li>
							<li><a href="app-inbox-single.php">Inbox single</a></li>
							<li><a href="app-inbox-compose.php">Compose mail</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children">
						<a href="javascript:void(0);">Contacts</a>
						<ul class="list-unstyled sub-menu">
							<li><a href="app-contacts.php">Contacts List</a></li>
							<li><a href="app-contacts-alt.php">Contacts List Alt</a></li>
							<li><a href="app-contacts-details.php">Contact Details</a></li>
						</ul>
					</li>
				</ul>
			</li>

			<li class="menu-item-has-children">
				<a href="javascript:void(0);" class="ripple">
					<i class="list-icon material-icons">playlist_add</i>
					<span class="hide-menu">
						Tables
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
					<li><a href="tables-basic.php">Basic Tables</a></li>
					<li><a href="tables-data-table.php">Data Table</a></li>
					<li><a href="tables-bootstrap.php">Bootstrap Tables</a></li>
					<li><a href="tables-responsive.php">Responsive Tables</a></li>
					<li><a href="tables-editable.php">Editable Tables</a></li>
				</ul>
			</li>

			<li class="menu-item-has-children">
				<a href="javascript:void(0);" class="ripple">
					<i class="list-icon material-icons">lightbulb_outline</i>
					<span class="hide-menu">
						UI Elements
						<span class="badge badge-border bg-primary pull-right">9</span>
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
					<li><a href="ui-typography.php">Typography</a></li>
					<li><a href="ui-buttons.php">Buttons</a></li>
					<li><a href="ui-cards.php">Cards</a></li>
					<li><a href="ui-tabs.php">Tabs</a></li>
					<li><a href="ui-panels.php">Panels</a></li>
					<li><a href="ui-accordions.php">Accordions</a></li>
					<li><a href="ui-modals.php">Modals</a></li>
					<li><a href="ui-icon-boxes.php">Icon Boxes</a></li>
					<li><a href="ui-lists.php">Lists &amp; Media Object</a></li>
					<li><a href="ui-user-cards.php">User Cards</a></li>
					<li><a href="ui-grid.php">Grid</a></li>
					<li><a href="ui-progress.php">Progress Bars</a></li>
					<li><a href="ui-notifications.php">Notifications &amp; Alerts</a></li>
					<li><a href="ui-pagination.php">Pagination</a></li>
					<li><a href="ui-media.php">Media</a></li>
					<li><a href="ui-carousel.php">Carousel</a></li>
					<li><a href="ui-bootstrap.php">Bootstrap Elements</a></li>
				</ul>
			</li>

			<li class="menu-item-has-children">
				<a href="javascript:void(0);" class="ripple">
					<i class="list-icon material-icons">developer_board</i>
					<span class="hide-menu">
						Forms
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
					<li><a href="form-elements.php">Elements</a></li>
					<li><a href="form-material.php">Material Design</a></li>
					<li><a href="form-validation.php">Form Validation</a></li>
					<li><a href="form-dropzone.php">File Upload</a></li>
					<li><a href="form-pickers.php">Picker</a></li>
					<li><a href="form-select.php">Select and Multiselect</a></li>
					<li><a href="form-tags-categories.php">Tags and Categories</a></li>
					<li><a href="form-addons.php">Addons</a></li>
					<li><a href="form-editors.php">Editors</a></li>
				</ul>
			</li>

			<li class="menu-item-has-children">
				<a href="javascript:void(0);" class="ripple">
					<i class="list-icon material-icons">tune</i>
					<span class="hide-menu">
						Charts
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
					<li><a href="charts-flot.php">Flot Charts</a></li>
					<li><a href="charts-morris.php">Morris Charts</a></li>
					<li><a href="charts-js.php">Chart-js</a></li>
					<li><a href="charts-sparkline.php">Sparkline Charts</a></li>
					<li><a href="charts-knob.php">Knob Charts</a></li>
				</ul>
			</li>

			<li class="list-divider"></li>

			<li>
				<a href="#" class="ripple">
					<i class="list-icon material-icons">notifications_none</i>
					<span class="hide-menu">
						Updates
					</span>
				</a>
			</li>

			<li class="menu-item-has-children">
				<a href="javascript:void(0);" class="ripple">
					<i class="list-icon material-icons">widgets</i>
					<span class="hide-menu">
						Widgets
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
					<li><a href="widgets.php">Content Widgets</a></li>
					<li><a href="widgets-statistics.php">Statistics Widgets</a></li>
				</ul>
			</li>

			<li class="menu-item-has-children">
				<a href="javascript:void(0);" class="ripple">
					<i class="list-icon material-icons">add_location</i>
					<span class="hide-menu">
						Maps
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
					<li><a href="maps-google.php">Google Maps</a></li>
					<li><a href="maps-vector.php">Vector Maps</a></li>
				</ul>
			</li>

			<li class="menu-item-has-children">
				<a href="javascript:void(0);" class="ripple">
					<i class="list-icon material-icons">lightbulb_outline</i>
					<span class="hide-menu">
						Icons
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
					<li><a href="icons-material-design.php">Material Design</a></li>
					<li><a href="icons-font-awesome.php">Font Awesome</a></li>
					<li><a href="icons-mono-social.php">Social Icons</a></li>
					<li><a href="icons-weather.php">Weather Icons</a></li>
				</ul>
			</li>

			<li class="menu-item-has-children">
				<a href="javascript:void(0);" class="ripple">
					<i class="list-icon material-icons">folder_open</i>
					<span class="hide-menu">
						Sample Pages
						<span class="badge badge-border bg-info pull-right">3</span>
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
					<li><a href="page-blank.php">Blank Page</a></li>
					<li class="menu-item-has-children">
						<a href="javascript:void(0);">Email Templates</a>
						<ul class="list-unstyled sub-menu">
							<li><a href="email-templates/basic.html">Basic</a></li>
							<li><a href="email-templates/billing.html">Billing</a></li>
							<li><a href="email-templates/friend-request.html">Friend Request</a></li>
						</ul>
					</li>

					<li><a href="page-lightbox.php">Lightbox Popup</a></li>
					<li><a href="page-sitemap.php">Sitemap</a></li>
					<li><a href="page-search-results.php">Search Results</a></li>
					<li><a href="page-custom-scroll.php">Custom Scroll</a></li>
					<li><a href="page-utility-classes.php">Utility Classes</a></li>
					<li><a href="page-animations.php">Animations</a></li>
					<li><a href="page-faq.php">FAQ</a></li>
					<li><a href="page-pricing-table.php">Pricing</a></li>
				</ul>
			</li>

			<li class="menu-item-has-children">
				<a href="javascript:void(0);" class="ripple">
					<i class="list-icon material-icons">card_travel</i>
					<span class="hide-menu">
						Profile Pages
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
					<li><a href="page-profile.php">Profile</a></li>
					<li><a href="page-login.php">Login Page</a></li>
					<li><a href="page-login2.php">Login Page 2</a></li>
					<li><a href="page-register.php">Sign Up</a></li>
					<li><a href="page-register2.php">Sign Up 2</a></li>
					<li><a href="page-register-3-step.php">3 Step Sign Up</a></li>
					<li><a href="page-forgot-pwd.php">Forgot Password</a></li>
					<li><a href="page-email-confirm.php">Confirm Email</a></li>
					<li><a href="page-lock-screen.php">Lock Screen</a></li>
					<li><a href="page-timeline.php">Timeline</a></li>
					<li class="menu-item-has-children">
						<a href="javascript:void(0);">
							Error Pages
						</a>
						<ul class="list-unstyled sub-menu">
							<li><a href="page-error-403.php">Error 403</a></li>
							<li><a href="page-error-404.php">Error 404</a></li>
							<li><a href="page-error-500.php">Error 500</a></li>
							<li><a href="page-error-503.php">Error 503</a></li>
						</ul>
					</li>
				</ul>
			</li>

			<li class="menu-item-has-children">
				<a href="javascript:void(0);" class="ripple">
					<i class="list-icon material-icons">shopping_cart</i>
					<span class="hide-menu">
						E-Commerce
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
					<li><a href="ecommerce-products.php">Products</a></li>
					<li><a href="ecommerce-horizontal-products.php">Horizontal Products</a></li>
					<li><a href="ecommerce-invoice.php">Invoice</a></li>
				</ul>
			</li>

			<li class="menu-item-has-children">
				<a href="javascript:void(0);" class="ripple">
					<i class="list-icon material-icons">filter_list</i>
					<span class="hide-menu">
						Multi-level Menu
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
					<li><a href="index.php">Second Level Item</a></li>
					<li><a href="index.php">Second Level Item</a></li>
					<li class="menu-item-has-children">
						<a href="index.php">Third Level</a>
						<ul class="list-unstyled sub-menu">
							<li><a href="index.php">Third Level Item</a></li>
							<li><a href="index.php">Third Level Item</a></li>
							<li><a href="index.php">Third Level Item</a></li>
						</ul>
					</li>
				</ul>
			</li>

			<li>
				<a href="page-login.php">
					<i class="list-icon material-icons">settings_power</i>
					<span class="hide-menu">
						Log Out
					</span>
				</a>
			</li>
		</ul><!-- /.side-menu -->
	</nav><!-- /.sidebar-nav -->

</aside><!-- /.site-sidebar -->
