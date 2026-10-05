<?php
/**
 * Title: Header
 * Slug: civic-starter-curbeffect/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with logo, site title, and primary navigation.
 *
 * @package CivicStarterCurbEffect
 */
?>
<!-- wp:html -->
<a class="skip-to-content" href="#main"><?php esc_html_e( 'Skip to main content', 'civic-starter-curbeffect' ); ?></a>
<!-- /wp:html -->

<!-- wp:group {"tagName":"header","align":"full","backgroundColor":"navy","textColor":"base","layout":{"type":"default"}} -->
<header class="wp-block-group alignfull has-navy-background-color has-base-color has-background has-text-color">

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">

		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

			<!-- Left: city icon + site title -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group">

				<!-- wp:html -->
				<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 100 100" aria-hidden="true" focusable="false" fill="currentColor" style="display:block;flex-shrink:0">
					<polygon points="50,4 4,30 96,30"/>
					<rect x="11" y="33" width="10" height="38"/>
					<rect x="26" y="33" width="10" height="38"/>
					<rect x="45" y="33" width="10" height="38"/>
					<rect x="64" y="33" width="10" height="38"/>
					<rect x="79" y="33" width="10" height="38"/>
					<rect x="3" y="73" width="94" height="7"/>
					<rect x="0" y="82" width="100" height="7"/>
					<rect x="0" y="91" width="100" height="9"/>
				</svg>
				<!-- /wp:html -->

				<!-- wp:site-title {"level":0,"isLink":true} /-->

			</div>
			<!-- /wp:group -->

			<!-- Right: primary navigation -->
			<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"base","overlayTextColor":"contrast","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
				<!-- wp:navigation-link {"label":"Government","url":"<?php echo esc_url( home_url( '/government/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Services","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"Departments","url":"<?php echo esc_url( home_url( '/departments/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</header>
<!-- /wp:group -->
