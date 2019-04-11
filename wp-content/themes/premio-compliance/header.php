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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="main" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'premio-compliance' ); ?></a>

	<header id="masthead" class="site-header menu-top">
		<div class="container center">
			<div class="row">
				<div class="col-9 col-md-3 b-r-img">
					<div class="site-branding">					
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-premio-compliance-2019.png" alt="prêmio compliance 2019">
						</a>
					</div><!-- .site-branding -->
				</div>
				
				<div class="col-3 col-md-9">
					<nav id="site-navigation" class="main-navigation">						
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>						
					</nav><!-- #site-navigation -->
					
					<div class="d-block d-sm-none menu-sm">
						<span onclick="openNav()"><i class="fa fa-bars"></i></span>						
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<div class="fix-height"></div>

	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>			
		<div class="p-t-c">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</div>		
	</div>

	<div id="content" class="site-content">