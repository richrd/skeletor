<!doctype html>
<html>
<head>
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
	<?php wp_head()?>

    <!-- Shortcut icons -->
    <link rel="shortcut icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"/>

    <!-- Font Awesome icons -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Default stylesheet -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />

</head>
<body>
<a id="page-top"></a>
	<div id="main">

		<div id="top">

			<div class="header">
				<div class="header-logo">
					<a href="<?php echo home_url('/')?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/text-logo.png?killcache" alt="<?php bloginfo('name'); ?>"/>
					</a>
				</div>
				<div class="header-text">
					<h1>
					<a href="<?php echo home_url('/')?>">
					<?php echo bloginfo("name");?>
					</a>
					</h1>
					<strong><?php echo bloginfo("description");?></strong>
				</div>
			</div>

			<div id="main-menu-container">
	  			<a href="javascript:mainMenuToggle();void(0);" id="main-menu-toggle" title="Main Menu"></a>
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'main-menu', 'container_id' => 'main-menu' ) );?>
			</div>

		</div>





