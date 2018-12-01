<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Confirm Email',
	'body_class' => 'body-bg-full profile-page'
);

get_header_error($config);
?>
<body<?php body_class() ?> style="background-image: url(assets/demo/night.jpg)">
	<div id="wrapper" class="row wrapper">

    <div class="col-10 offset-1 offset-sm-3 col-sm-6 col-md-4 offset-md-4 login-center login-center-mini">
			<div class="navbar-header text-center">
        <a href="index.php">
          <img alt="" src="assets/demo/logo-expand-dark.png" />
        </a>
      </div><!-- /.navbar-header -->

			<div class="text-center mr-b-20">
				<img src="assets/demo/users/user7.jpg" class="img-circle img-thumbnail thumb-lg" alt="">
			</div>
			<p class="text-center text-muted">A email has been send to youremail@domain.com. Please check for an email from company and click on the included link to reset your password.</p>

			<a href="index.html" class="btn btn-block btn-primary ripple mr-tb-30">Back to Home</a>

    </div><!-- /.login-center -->
  </div><!-- /.wrapper -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
