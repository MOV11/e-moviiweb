<?php
include_once 'lib/init.php';

$config = array(
	'title' => 'Error 500',
	'body_class' => 'body-bg-full error-page error-500'
);

get_header_error($config);
?>
<body<?php body_class() ?> style="background-image: url(assets/demo/body-bg.jpg)">;
	<div id="wrapper" class="wrapper">
		<div class="content-wrapper">

			<main class="main-wrapper">
				<div class="page-title">
					<h1>500</h1>
				</div>

				<h4>Unexpected Error!</h4>
				<p class="mr-t-10 mr-b-20">An error occurred and your request couldn't be completed.</p>
				<a href="javascript: history.back();" class="btn btn-info btn-lg btn-rounded mr-b-20 ripple">Go Back</a>
			</main>

		</div><!-- .content-wrapper -->
	</div><!-- .wrapper -->

</body>
</html>
