<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Register',
	'body_class' => 'body-bg-full profile-page'
);

get_header_error($config);
?>
<body<?php body_class() ?> style="background-image: url(assets/demo/night.jpg)">
	<div id="wrapper" class="row wrapper">

    <div class="col-10 offset-2 offset-sm-3 col-sm-6 col-md-4 offset-md-4 login-center">
			<div class="navbar-header text-center">
        <a href="index.php">
          <img alt="" src="assets/demo/logo-expand-dark.png">
        </a>
      </div><!-- /.navbar-header -->

			<form class="form-horizontal form-material" id="loginform" action="index.html">
				<h6 class="text-uppercase">Register Now</h6>
				<p class="text-muted">Create your account for free and enjoy.</p>

        <div class="form-group">
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

        <div class="form-group no-gutters mb-3">
          <div class="checkbox checkbox-info">
            <label>
              <input type="checkbox">
              <span class="label-text">I agree to all <a href="#">Terms &amp; Conditions</a></span>
            </label>
          </div><!-- /.checkbox -->
        </div><!-- /.form-group -->

        <div class="form-group text-center no-gutters mb-5">
          <button class="btn btn-info btn-lg btn-block text-uppercase ripple" type="submit">Sign Up</button>
        </div>
      </form><!-- /.form-horzontal -->

			<footer class="col-sm-12 text-center">
				<hr />
        <p>Already have an account? <a href="page-login.html" class="text-primary m-l-5"><b>Log In</b></a></p>
      </footer>
    </div><!-- /.login-center -->

  </div><!-- /.body-container -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="assets/js/material-design.js"></script>
</body>
</html>
