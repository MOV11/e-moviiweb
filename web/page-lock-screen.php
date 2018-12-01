<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Lock Screen',
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
				<div class="text-center mr-b-20">
					<img src="assets/demo/users/user7.jpg" class="img-circle img-thumbnail thumb-lg" alt="">
				</div>
				<p class="text-center text-muted">Enter your password to access the admin.</p>

				<div class="form-group no-gutters">
					<label class="col-md-12">Password</label>
					<div class="col-md-12">
						<input type="password" placeholder="password" class="form-control form-control-line">
					</div>
				</div>

				<div class="form-group no-gutters mb-5">
					<div class="col-md-12">
						<button class="btn btn-block btn-color-scheme ripple" type="button">Login</button>
					</div>
				</div>
			</form>

			<footer class="col-sm-12 text-center">
				<hr />
        <p>Not you? return <a href="page-login.html" class="text-primary m-l-5"><b>Login</b></a></p>
      </footer>

    </div><!-- /.login-right -->
  </div><!-- /.body-container -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
