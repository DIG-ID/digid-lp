<?php
/**
 * Template Name: Landing Page Template
 */
get_header();
$lp_content = get_field( 'content' );
if ( $lp_content ) :
?>
<main class="container-fluid">
	<div class="row">
		<div class="box-wrapper col-6 d-flex justify-content-center align-items-stretch h-100 min-vh-100 animate__animated animate__fadeInLeft">
			<div class="box-content d-flex flex-column justify-content-between">
				<div class="img animate__animated animate__fadeIn"">
					<?php if ( has_custom_logo() ) : ?>
						<?php echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full' ); ?>
					<?php endif; ?>
				</div>
				<div class="content">
					<h1 class=""><?php echo esc_html( $lp_content['title'] ); ?></h1>
					<p class=""><?php echo wp_kses_post( $lp_content['description'] ); ?></p>
					<a href="#" class="btn d-inline-block modal-open"><?php echo esc_html( $lp_content['contact_button_text'] ); ?></a>
				</div>
				<ul class="contacts">
					<li>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"/></svg>
						<a href="mailto:<?php echo esc_url( $lp_content['email'] ); ?>"><?php echo esc_html( $lp_content['email'] ); ?></a>
					</li>
					<li>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"/></svg>
						<a href="tel:<?php echo esc_html( $lp_content['phone_number'] ); ?>"><?php echo esc_html( $lp_content['phone_number'] ); ?></a>
					</li>
					<li>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"/></svg>
						<p><?php echo wp_kses_post( $lp_content['address'] ); ?></p>
					</li>
				</ul>

			</div>
		</div>
		<div class="box-wrapper box-wrapper--image col-6 d-flex justify-content-end align-items-start h-100 min-vh-100 animate__animated animate__fadeInRight">
			<p class="text-right">
				Forward<br>
				Thinking<br>
				Marketing<br>
				Solutions
			</p>
			<div class="modal-window">
				<a href="" class="modal-close">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/></svg>
				</a>
				<div class="modal-container">
					<?php echo do_shortcode( $lp_content['contact_form_shortcode'] ); ?>
				</div>
			</div>
		</div>
	</div>
</main>
<?php
endif;
get_footer();
