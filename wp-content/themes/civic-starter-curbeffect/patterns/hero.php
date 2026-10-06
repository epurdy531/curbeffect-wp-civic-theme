<?php
/**
 * Title: Hero
 * Slug: civic-starter-curbeffect/hero
 * Categories: banner
 * Description: Full-width hero with cover background, left-aligned text card, and CTA buttons.
 *
 * @package CivicStarterCurbEffect
 */
?>
<!-- wp:cover {"dimRatio":50,"overlayColor":"contrast","isUserOverlayColor":false,"align":"full","minHeight":600,"minHeightUnit":"px","isDark":true,"contentPosition":"center left","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-dark has-custom-content-position is-position-center-left" style="min-height:600px">
	<span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-50 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">

		<!-- wp:group {"style":{"color":{"background":"rgba(17,46,81,0.92)"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"6px"}},"textColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
		<div class="wp-block-group has-base-color has-text-color" style="background-color:rgba(17,46,81,0.92);border-radius:6px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","letterSpacing":"1.6px"}},"fontSize":"small","textColor":"base"} -->
			<p class="has-small-font-size has-base-color has-text-color" style="font-style:normal;font-weight:600;letter-spacing:1.6px;text-transform:uppercase"><?php esc_html_e( 'Welcome to', 'civic-starter-curbeffect' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"textColor":"base","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"0"}}}} -->
			<h1 class="wp-block-heading has-base-color has-text-color" style="font-weight:700;margin-top:0"><?php esc_html_e( 'City Website', 'civic-starter-curbeffect' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"medium","textColor":"base"} -->
			<p class="has-medium-font-size has-base-color has-text-color"><?php esc_html_e( 'Building a better community, together.', 'civic-starter-curbeffect' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">

				<!-- wp:button {"backgroundColor":"accent-1","textColor":"base"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-accent-1-background-color has-base-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Explore Services', 'civic-starter-curbeffect' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","textColor":"base","style":{"border":{"color":"var:preset|color|base"}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color wp-element-button" style="border-color:var(--wp--preset--color--base)" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'civic-starter-curbeffect' ); ?></a></div>
				<!-- /wp:button -->

			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->

	</div>
</div>
<!-- /wp:cover -->
