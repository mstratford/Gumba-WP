<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="/frontpage-assets/img/favicon.ico">
	<link rel="stylesheet" href="/frontpage-assets/css/vendor/fluidbox.min.css">
	<link rel="stylesheet" href="/frontpage-assets/css/main.css">

	<?php wp_head(); ?>
</head>
<body id="#top">


	<header>

		<div id="logo-container">
			<div id="logo"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></div>
			<div id="subtitle"><?php echo get_bloginfo( 'description' ); ?></div>
		</div>
 		<nav>
			<ul>
        <?php wp_list_pages( '&title_li=' ); ?>
			</ul>
		</nav>

	</header>

	<div id="content">
