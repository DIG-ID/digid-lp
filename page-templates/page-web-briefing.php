<?php
/**
 * Template Name: Web Briefing Template
 */

get_header();
?>

	<div class="web-briefing-wrapper">
		<header class="briefing-header">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-6 col-md-6">
						<div class="site-logo">
							<?php if ( has_custom_logo() ) : ?>
								<?php echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full' ); ?>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-6 col-md-6">
						<div class="header-extras d-flex flex-column align-items-end">
							<p class="slogan text-nowrap text-right d-sm-block d-md-block">
								Forward<br>
								Thinking<br>
								Marketing<br>
								Solutions
							</p>
						</div>
					</div>
				</div>
			</div>
		</header>
		<main class="main-content">
			<div class="container">
				<div class="row justify-content-center align-items-center">
					<div class="col-12">
						<?php the_title( '<h1 class="title">', '</h1>' ); ?>
					</div>
				</div>
				<div class="row justify-content-center align-items-center">
					<div class="col-12">
						<?php echo do_shortcode( get_field( 'form_shortcode' ) ); ?>
					</div>
				</div>
			</div>
		</main>
		<?php do_action( 'wpml_add_language_selector' ); ?>
	</div>

<?php
get_footer();
