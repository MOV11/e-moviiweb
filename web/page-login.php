<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Login',
	'body_class' => 'body-bg-full profile-page'
);

get_header_error($config);
?>
<body<?php body_class() ?> style="background-image: url(assets/demo/night.jpg)">
	<div id="wrapper" class="row wrapper">

    <div class="col-10 offset-1 offset-sm-3 col-sm-6 col-md-4 offset-md-4 login-center">
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
					</div><!-- /.col-md-12 -->
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
			</div><!-- /.btn-list -->

			<footer class="col-sm-12 text-center">
				<hr />
        <p>Don't have an account? <a href="page-register.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>
      </footer>

    </div><!-- /.login-center -->
  </div><!-- /.body-container -->

	<!-- Scripts -->
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/material-design.js"></script>
</body>
</html>
