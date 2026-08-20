<?php
/**
 * Site header.
 *
 * @package Jay_Builders
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'jay-builders' ); ?></a>
<div class="site-shell">
	<header class="site-header" id="home">
		<div class="site-header__inner">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a class="brand-link" href="<?php echo esc_url( home_url( '/#home' ) ); ?>" aria-label="<?php esc_attr_e( 'JAY Builders home', 'jay-builders' ); ?>">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/jay-builders-logo.svg' ); ?>" alt="<?php esc_attr_e( 'JAY Builders', 'jay-builders' ); ?>" width="108" height="52">
				</a>
			<?php endif; ?>

			<button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-navigation">
				<span></span><span></span><span></span>
				<span class="screen-reader-text"><?php esc_html_e( 'Toggle menu', 'jay-builders' ); ?></span>
			</button>

			<nav class="site-nav" id="site-navigation" aria-label="<?php esc_attr_e( 'Primary navigation', 'jay-builders' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'fallback_cb'    => 'jay_builders_menu_fallback',
						'depth'          => 1,
					)
				);
				?>
				<a class="button button--primary header-cta" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">
					<?php esc_html_e( 'Request a Free Quote', 'jay-builders' ); ?>
				</a>
			</nav>
		</div>
	</header>
