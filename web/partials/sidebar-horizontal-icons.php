<!-- SIDEBAR -->
<aside class="site-sidebar clearfix">

	<nav class="sidebar-nav">
		<ul class="nav in side-menu">
			<li class="current-page menu-item-has-children">
				<a href="javascript:void(0);">
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

			<li class="menu-item-has-children">
				<a href="javascript:void(0);">
					<span class="color-color-scheme">
						<i class="list-icon material-icons">mail_outline</i>
						<span class="hide-menu">
							Apps
						</span>
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
					<li><a href="app-calender.php">Calendar</a></li>

					<li class="menu-item-has-children">
						<a href="javascript:void(0);">Inbox</a>
						<ul class="list-unstyled sub-menu">
							<li><a href="app-inbox.php">Mail box</a></li>
							<li><a href="app-inbox-single.php">Inbox detail</a></li>
							<li><a href="app-inbox-compose.php">Compose mail</a></li>
						</ul>
					</li>

					<li class="menu-item-has-children">
						<a href="javascript:void(0);">Contacts</a>
						<ul class="list-unstyled sub-menu">
							<li><a href="app-contacts.php">Contacts List</a></li>
							<li><a href="app-contacts-alt.php">Contacts List Alt</a></li>
							<li><a href="app-contacts-details.php">Contact details</a></li>
						</ul>
					</li>

					<li class="menu-item-has-children">
						<a href="javascript:void(0);">
							Tables
						</a>
						<ul class="list-unstyled sub-menu">
							<li><a href="tables-basic.php">Basic Tables</a></li>
							<li><a href="tables-layouts.php">Table Layouts</a></li>
							<li><a href="tables-data-table.php">Data Table</a></li>
							<li><a href="tables-bootstrap.php">Bootstrap Tables</a></li>
							<li><a href="tables-responsive.php">Responsive Tables</a></li>
							<li><a href="tables-editable.php">Editable Tables</a></li>
							<li><a href="tables-footables.php">FooTables</a></li>
						</ul>
					</li>

					<li class="menu-item-has-children">
					  <a href="javascript:void(0);">
					    Maps
					  </a>
					  <ul class="list-unstyled sub-menu">
					    <li><a href="maps-google.php">Google Maps</a></li>
					    <li><a href="maps-vector.php">Vector Maps</a></li>
					  </ul>
					</li>

					<li class="menu-item-has-children">
						<a href="javascript:void(0);">Email Templates</a>
						<ul class="list-unstyled sub-menu">
							<li><a href="email-templates/basic.html">Basic</a></li>
							<li><a href="email-templates/billing.html">Billing</a></li>
							<li><a href="email-templates/friend-request.html">Friend Request</a></li>
						</ul>
					</li>

					<li class="menu-item-has-children">
						<a href="javascript:void(0);">
							Icons
						</a>
						<ul class="list-unstyled sub-menu">
							<li><a href="icons-material-design.php">Material Design</a></li>
							<li><a href="icons-font-awesome.php">Font Awesome</a></li>
							<li><a href="icons-mono-social.php">Social Icons</a></li>
							<li><a href="icons-weather.php">Weather Icons</a></li>
						</ul>
					</li>

				</ul>
			</li>

			<li class="menu-item-has-children">
				<a href="javascript:void(0);">
					<i class="list-icon material-icons">playlist_add</i>
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
			  <a href="javascript:void(0);">
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

			<li class="menu-item-has-children">
				<a href="javascript:void(0);">
					<i class="list-icon material-icons">lightbulb_outline</i>
					<span class="hide-menu">
						UI Elements
						<span class="badge badge-border bg-primary pull-right">9</span>
					</span>
				</a>
				<ul class="list-unstyled sub-menu two-li">
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
				<a href="javascript:void(0);">
					<i class="list-icon material-icons">folder_open</i>
					<span class="hide-menu">
						Sample Pages
						<span class="badge badge-border bg-info pull-right">13</span>
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
					<li><a href="page-blank.php">Blank Page</a></li>
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
				<a href="javascript:void(0);">
					<i class="list-icon material-icons">card_travel</i>
					<span class="hide-menu">
						Other Pages
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
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
				</ul>
			</li>

			<li class="menu-item-has-children">
				<a href="javascript:void(0);">
					<i class="list-icon material-icons">filter_hdr</i>
					<span class="hide-menu">
						Widgets
					</span>
				</a>
				<ul class="list-unstyled sub-menu">
					<li><a href="widgets.php">Content Widgets</a></li>
					<li><a href="widgets-statistics.php">Statistics Widgets</a></li>
				</ul>
			</li>
		</ul><!-- /.side-menu -->
	</nav><!-- /.sidebar-nav -->

</aside><!-- /.site-sidebar -->
