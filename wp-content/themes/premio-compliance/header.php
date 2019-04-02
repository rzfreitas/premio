<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package premio-compliance
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="main" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'premio-compliance' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="row menu-top">
			<div class="col-9 col-md-3">
				<div class="site-branding">					
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php $logo_p = get_field('logo_principal');
						if( !empty($logo_p) ): ?>
							<img src="<?php echo $logo_p['url']; ?>" alt="<?php echo $logo_p['alt']; ?>" />
						<?php endif; ?>
					</a>
				</div><!-- .site-branding -->
			</div>
			
			<div class="col-3 col-md-9">
				<nav id="site-navigation" class="center main-navigation">						
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>						
				</nav><!-- #site-navigation -->
				
				<div class="hidden-md-up menu-sm">
					<span onclick="openNav()"><i class="fa fa-bars"></i></span>
					<div id="mySidenav" class="sidenav">
						<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>						
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>						
					</div>
				</div>					
			</div>
		</div>
	</header><!-- #masthead -->
	<div class="fix-height"></div>

	<div id="content" class="site-content">

	<script>
		
	</script>