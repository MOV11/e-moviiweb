<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Forgot Password',
	'body_class' => 'body-bg-full profile-page'
);

get_header_error($config);
?>
<body<?php body_class() ?> style="background-image: url(assets/demo/night.jpg)">
	<div id="wrapper" class="row wrapper">

    <div class="col-10 offset-1 offset-sm-3 col-sm-6 col-md-4 offset-md-4 login-center login-center-mini">
			<div class="navbar-header text-center">
        <a href="index.php">
          <img alt="" src="assets/demo/logo-expand-dark.png">
        </a>
      </div><!-- /.navbar-header -->

			<form class="form-horizontal form-material">
				<p class="text-center text-muted">Enter your email address and we'll send you an email with instructions to reset your password.</p>

				<div class="form-group no-gutters">
          <input type="email" placeholder="johndoe@site.com" class="form-control form-control-line" name="example-email" id="example-email">
					<label for="example-email" class="col-md-12 mb-1">Email</label>
				</div>

				<div class="form-group mb-5">
          <button class="btn btn-block btn-color-scheme ripple" type="button">Submit</button>
				</div>
			</form><!-- /.form-material -->

			<footer class="col-sm-12 text-center">
				<hr />
        <p>Back to <a href="page-login.html" class="text-primary m-l-5"><b>Login</b></a></p>
      </footer>

    </div><!-- /.login-right -->
  </div><!-- /.body-container -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="assets/js/material-design.js"></script>
</body>
</html>
