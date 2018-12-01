<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="assets/css/pace.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/demo/favicon.png">

	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title><?php echo isset( $title ) && $title ? $title : 'Starter Template for Unifato' ?></title>

	<!-- CSS -->
	<?php print_styles() ?>

	<!-- Head Libs -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

</head>
<body<?php body_class() ?>>
	<div id="wrapper" class="wrapper">
    <?php get_template_part( $GLOBALS['nav_file'] ); ?>
