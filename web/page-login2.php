<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Login2',
	'body_class' => 'body-bg-full profile-page'
);

get_header_error($config);
?>
<body<?php body_class() ?> style="background-image: url(assets/demo/night.jpg)">
	<div id="wrapper" class="row wrapper">

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

    <div class="col-8 offset-2 offset-sm-3 col-sm-6 col-md-4 offset-md-0 login-right float-right">
			<div class="navbar-header text-center">
        <a href="index.php">
          <img alt="" src="assets/demo/logo-expand-dark.png">
        </a>
      </div><!-- /.navbar-header -->

			<form class="form-horizontal form-material">
				<div class="form-group">
          <input type="email" placeholder="johndoe@site.com" class="form-control form-control-line" name="example-email" id="example-email">
					<label for="example-email">Email</label>
				</div>

				<div class="form-group">
          <input type="password" placeholder="password" class="form-control form-control-line">
					<label>Password</label>
				</div>

				<div class="form-group">
          <button class="btn btn-block btn-lg btn-color-scheme ripple" type="button">Login</button>
				</div>

				<div class="form-group no-gutters mb-0">
					<div class="col-md-12 d-flex">
						<div class="checkbox checkbox-info mr-auto">
							<label>
								<input type="checkbox">
								<span class="label-text">Remember me</span>
							</label>
						</div>
						<a href="javascript:void(0)" id="to-recover" class="text-dark my-auto pb-2">
							<i class="fa fa-lock mr-1"></i>Forgot Password?
						</a>
					</div><!-- /.row -->
        </div><!-- /.form-group -->
			</form><!-- /.form-horizontal -->

			<hr />

			<div class="row btn-list">
				<div class="col-md-6">
					<button type="button" class="btn btn-block btn-facebook ripple" data-toggle="tooltip" data-placement="top" title="Login with Facebook">
						<i class="social-icons list-icon">facebook</i>
						Facebook
					</button>
				</div>

				<div class="col-md-6">
					<button type="button" class="btn btn-block btn-googleplus ripple" data-toggle="tooltip" data-placement="top" title="Login with Google">
						<i class="social-icons list-icon">googleplus</i>
						Google
					</button>
				</div>
			</div>

			<footer class="col-sm-12 text-center">
				<hr />
        <p>Don't have an account? <a href="page-register.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>
      </footer>

    </div><!-- /.login-right -->
  </div><!-- /.body-container -->

	<!-- Scripts -->
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/material-design.js"></script>
</body>
</html>
