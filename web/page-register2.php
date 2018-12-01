<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Register2',
	'body_class' => 'body-bg-full profile-page'
);

get_header_error($config);
?>
<body<?php body_class() ?> style="background-image: url(assets/demo/night.jpg)">
	<div id="wrapper" class="row wrapper">

		<!-- Login Left -->
		<div class="col-md-8 text-inverse hidden-xs hidden-sm">
      <div class="login-left-inner">
				<div class="login-content">
					<h3 class="mr-b-20 sub-heading-font-family fw-400">Oscar : Ultimate Admin Template</h3>
					<p><small>Simple and Flexible Bootstrap Admin Template with 50 plus highly commented and well documented pages. Oscar admin template is powered by HTML5, SASS, Gulp, Bourbon and Bootstrap. Subscribe and get weeky updates.</small></p>
	      </div>

				<ul class="list-inline login-links">
					<li class="list-inline-item"><a href="#">About Us</a></li>
					<li class="list-inline-item"><a href="#">Careers</a></li>
					<li class="list-inline-item"><a href="#">Terms</a></li>
					<li class="list-inline-item"><a href="#">Privacy</a></li>
					<li class="list-inline-item"><a href="#">Contact Us</a></li>
					<li class="list-inline-item"><a href="#">Twitter</a></li>
					<li class="list-inline-item"><a href="#">Facebook</a></li>
				</ul>
			</div><!-- /.login-left-inner -->
    </div><!-- /.login-left -->

		<!-- Login Right -->
    <div class="col-8 offset-2 offset-sm-3 col-sm-6 col-md-4 offset-md-0 login-right float-right">
			<div class="navbar-header text-center">
        <a href="index.php">
          <img alt="" src="assets/demo/logo-expand-dark.png">
        </a>
      </div><!-- /.navbar-header -->

			<form class="form-horizontal form-material no-gutters" id="loginform" action="index.html">
				<h5 class="text-uppercase">Register Now</h5>
				<p class="text-muted">Create your account for free and enjoy.</p>

        <div class="form-group mr-t-20">
          <input class="form-control" type="text" required="" placeholder="Name">
          <label>Name</label>
        </div>

        <div class="form-group">
          <input class="form-control" type="text" required="" placeholder="Email">
          <label>Email</label>
        </div>

        <div class="form-group">
          <input class="form-control" type="password" required="" placeholder="Password">
          <label>Password</label>
        </div>

        <div class="form-group">
          <input class="form-control" type="password" required="" placeholder="Confirm Password">
          <label>Confirm Password</label>
        </div>

        <div class="form-group mb-3">
          <div class="checkbox checkbox-info">
            <label>
              <input type="checkbox">
              <span class="label-text">I agree to all <a href="#">Terms &amp; Conditions</a></span>
            </label>
          </div><!-- /.checkbox -->
        </div>

        <div class="form-group text-center no-gutters mb-5">
          <div class="col-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase ripple" type="submit">Sign Up</button>
          </div>
        </div>
      </form><!-- /.form-horizontal -->

			<footer class="col-sm-12 text-center">
				<hr />
        <p>Already have an account? <a href="page-login.html" class="text-primary m-l-5"><b>Log In</b></a></p>
      </footer>
    </div><!-- /.login-right -->
  </div><!-- /.body-container -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="assets/js/material-design.js"></script>
</body>
</html>
