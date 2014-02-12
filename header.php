<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site row">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div>

		<div class="contain-to-grid">
			<!-- Starting the Top-Bar -->
			<nav class="top-bar" data-topbar>
			    <ul class="title-area">
			        <li class="name">
			        </li>
					<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
					<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			    </ul>
			    <section class="top-bar-section">
			    <?php
			        wp_nav_menu( array(
			            'theme_location' => 'primary',
			            'container' => false,
			            'depth' => 0,
			            'items_wrap' => '<ul class="left">%3$s</ul>',
			            'walker' => new yeti_walker( array(
			                'in_top_bar' => true,
			                'item_type' => 'li'
			            ) ),
			        ) );
			    ?>
			    </section>
			</nav>
			<!-- End of Top-Bar -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
