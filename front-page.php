<?php
/**
 * Front page template.
 *
 * @package Jay_Builders
 */

get_header();
?>
<main id="primary">
	<section class="hero" aria-labelledby="hero-title">
		<div class="hero__inner">
			<div class="hero__content">
				<h1 class="hero__title" id="hero-title">
					<?php esc_html_e( 'Built for Reading.', 'jay-builders' ); ?>
					<span class="hero__title-accent"><?php esc_html_e( 'Trusted by Local Homeowners.', 'jay-builders' ); ?></span>
				</h1>

				<p class="hero__intro">
					<?php esc_html_e( 'Complete renovations, extensions and property services you can rely on.', 'jay-builders' ); ?>
				</p>

				<ul class="hero__benefits" aria-label="<?php esc_attr_e( 'Why choose JAY Builders', 'jay-builders' ); ?>">
					<li><?php esc_html_e( 'Fully Insured', 'jay-builders' ); ?></li>
					<li><?php esc_html_e( 'Experienced Team', 'jay-builders' ); ?></li>
					<li><?php esc_html_e( 'On Time, On Budget', 'jay-builders' ); ?></li>
					<li><?php esc_html_e( 'Clear Quotations', 'jay-builders' ); ?></li>
					<li><?php esc_html_e( 'Quality Workmanship', 'jay-builders' ); ?></li>
					<li><?php esc_html_e( 'Emergency Call-outs', 'jay-builders' ); ?></li>
				</ul>

				<div class="hero__actions">
					<a class="button button--primary" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">
						<?php esc_html_e( 'Request a Free Quote', 'jay-builders' ); ?>
					</a>
					<a class="button button--outline" href="<?php echo esc_url( home_url( '/#our-work' ) ); ?>">
						<?php esc_html_e( 'View Our Work', 'jay-builders' ); ?>
					</a>
				</div>

				<figure class="testimonial" id="reviews">
					<div class="testimonial__media">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/testimonial-sarah-mark.png' ); ?>" alt="<?php esc_attr_e( 'JAY Builders customer testimonial', 'jay-builders' ); ?>" width="244" height="138">
						<button class="testimonial__play" type="button" aria-label="<?php esc_attr_e( 'Play customer testimonial', 'jay-builders' ); ?>"></button>
					</div>
					<figcaption>
						<blockquote class="testimonial__quote">
							<?php esc_html_e( '“JAY Builders transformed our home beautifully and the whole process was smooth and stress-free.”', 'jay-builders' ); ?>
						</blockquote>
						<p class="testimonial__attribution">— <?php esc_html_e( 'Sarah & Mark, London', 'jay-builders' ); ?></p>
					</figcaption>
				</figure>
			</div>
		</div>

		<button class="accessibility-toggle" type="button" aria-pressed="false" aria-label="<?php esc_attr_e( 'Toggle high contrast', 'jay-builders' ); ?>">
			<svg viewBox="0 0 32 32" aria-hidden="true" focusable="false">
				<g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2.8">
					<path d="M16 2v8M16 22v8M2 16h8M22 16h8M6.1 6.1l5.7 5.7M20.2 20.2l5.7 5.7M25.9 6.1l-5.7 5.7M11.8 20.2l-5.7 5.7" />
				</g>
			</svg>
		</button>
	</section>

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="site-main-content" id="about">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</main>
<?php
get_footer();
