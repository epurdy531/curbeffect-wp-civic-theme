<?php
/**
 * Title: Header
 * Slug: civic-starter-curbeffect/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with logo, site title, dropdown navigation, and social links.
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

			<!-- Right: search + navigation + social icons -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group">

				<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"navy","overlayTextColor":"base","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->

					<!-- Government dropdown -->
					<!-- wp:navigation-submenu {"label":"Government","url":"<?php echo esc_url( home_url( '/government/' ) ); ?>","kind":"custom","type":"custom","isTopLevelLink":true} -->
						<!-- wp:navigation-link {"label":"City Government","url":"<?php echo esc_url( home_url( '/government/' ) ); ?>","kind":"custom"} /-->
						<!-- wp:navigation-link {"label":"City Council","url":"#","kind":"custom"} /-->
						<!-- wp:navigation-link {"label":"Mayor's Office","url":"#","kind":"custom"} /-->
						<!-- wp:navigation-link {"label":"City Charter","url":"#","kind":"custom"} /-->
					<!-- /wp:navigation-submenu -->

					<!-- Services dropdown -->
					<!-- wp:navigation-submenu {"label":"Services","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>","kind":"custom","type":"custom","isTopLevelLink":true} -->
						<!-- wp:navigation-link {"label":"All Services","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>","kind":"custom"} /-->
						<!-- wp:navigation-link {"label":"Pay Your Bills","url":"<?php echo esc_url( home_url( '/pay-bills/' ) ); ?>","kind":"custom"} /-->
						<!-- wp:navigation-link {"label":"Report an Issue","url":"<?php echo esc_url( home_url( '/report-an-issue/' ) ); ?>","kind":"custom"} /-->
						<!-- wp:navigation-link {"label":"Permits &amp; Licenses","url":"<?php echo esc_url( home_url( '/permits/' ) ); ?>","kind":"custom"} /-->
					<!-- /wp:navigation-submenu -->

					<!-- Departments dropdown -->
					<!-- wp:navigation-submenu {"label":"Departments","url":"<?php echo esc_url( home_url( '/departments/' ) ); ?>","kind":"custom","type":"custom","isTopLevelLink":true} -->
						<!-- wp:navigation-link {"label":"All Departments","url":"<?php echo esc_url( home_url( '/departments/' ) ); ?>","kind":"custom"} /-->
						<!-- wp:navigation-link {"label":"Public Works","url":"#","kind":"custom"} /-->
						<!-- wp:navigation-link {"label":"Parks &amp; Recreation","url":"#","kind":"custom"} /-->
						<!-- wp:navigation-link {"label":"Police Department","url":"#","kind":"custom"} /-->
						<!-- wp:navigation-link {"label":"Fire Department","url":"#","kind":"custom"} /-->
					<!-- /wp:navigation-submenu -->

					<!-- Contact Us — no dropdown -->
					<!-- wp:navigation-link {"label":"Contact Us","url":"<?php echo esc_url( home_url( '/contact/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->

				<!-- /wp:navigation -->

				<!-- wp:search {"showLabel":false,"label":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true} /-->

				<!-- Social icons: LinkedIn + Instagram -->
				<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
				<ul class="wp-block-social-links has-icon-color is-style-logos-only">
					<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
					<!-- wp:social-link {"url":"#","service":"instagram"} /-->
				</ul>
				<!-- /wp:social-links -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</header>
<!-- /wp:group -->
