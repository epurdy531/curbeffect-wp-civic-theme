<?php
/**
 * Title: Footer
 * Slug: civic-starter-curbeffect/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Four-column footer: Contact, Quick Links, Services, Social.
 *
 * @package CivicStarterCurbEffect
 */
?>
<!-- wp:group {"tagName":"footer","backgroundColor":"contrast","textColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group has-contrast-background-color has-base-color has-background has-text-color" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns alignwide">

			<!-- Column 1: Contact -->
			<!-- wp:column -->
			<div class="wp-block-column">

				<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","letterSpacing":"1.6px"}},"fontSize":"small","textColor":"base"} -->
				<h3 class="wp-block-heading has-small-font-size has-base-color has-text-color" style="font-style:normal;font-weight:600;letter-spacing:1.6px;text-transform:uppercase"><?php esc_html_e( 'Contact', 'civic-starter-curbeffect' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"small","textColor":"base"} -->
				<p class="has-small-font-size has-base-color has-text-color" style="margin-top:var(--wp--preset--spacing--30)">123 City Hall Drive<br><?php esc_html_e( 'City, ST 00000', 'civic-starter-curbeffect' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"small","textColor":"base"} -->
				<p class="has-small-font-size has-base-color has-text-color"><?php esc_html_e( 'Phone: (555) 867-5309', 'civic-starter-curbeffect' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"small","textColor":"base"} -->
				<p class="has-small-font-size has-base-color has-text-color"><a href="mailto:info@citywebsite.gov"><?php esc_html_e( 'info@citywebsite.gov', 'civic-starter-curbeffect' ); ?></a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"small","textColor":"base"} -->
				<p class="has-small-font-size has-base-color has-text-color"><?php esc_html_e( 'Mon–Fri: 8:00 AM – 5:00 PM', 'civic-starter-curbeffect' ); ?></p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:column -->

			<!-- Column 2: Quick Links -->
			<!-- wp:column -->
			<div class="wp-block-column">

				<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","letterSpacing":"1.6px"}},"fontSize":"small","textColor":"base"} -->
				<h3 class="wp-block-heading has-small-font-size has-base-color has-text-color" style="font-style:normal;font-weight:600;letter-spacing:1.6px;text-transform:uppercase"><?php esc_html_e( 'Quick Links', 'civic-starter-curbeffect' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:navigation {"ariaLabel":"Quick Links","overlayMenu":"never","textColor":"base","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
					<!-- wp:navigation-link {"label":"Home","url":"<?php echo esc_url( home_url( '/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
					<!-- wp:navigation-link {"label":"Government","url":"<?php echo esc_url( home_url( '/government/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
					<!-- wp:navigation-link {"label":"Services","url":"<?php echo esc_url( home_url( '/services/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
					<!-- wp:navigation-link {"label":"Departments","url":"<?php echo esc_url( home_url( '/departments/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
					<!-- wp:navigation-link {"label":"News","url":"<?php echo esc_url( home_url( '/news/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
					<!-- wp:navigation-link {"label":"Contact Us","url":"<?php echo esc_url( home_url( '/contact/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
				<!-- /wp:navigation -->

			</div>
			<!-- /wp:column -->

			<!-- Column 3: Services -->
			<!-- wp:column -->
			<div class="wp-block-column">

				<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","letterSpacing":"1.6px"}},"fontSize":"small","textColor":"base"} -->
				<h3 class="wp-block-heading has-small-font-size has-base-color has-text-color" style="font-style:normal;font-weight:600;letter-spacing:1.6px;text-transform:uppercase"><?php esc_html_e( 'Services', 'civic-starter-curbeffect' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:navigation {"ariaLabel":"Services","overlayMenu":"never","textColor":"base","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
					<!-- wp:navigation-link {"label":"Report an Issue","url":"<?php echo esc_url( home_url( '/report-an-issue/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
					<!-- wp:navigation-link {"label":"Pay Bills Online","url":"<?php echo esc_url( home_url( '/pay-bills/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
					<!-- wp:navigation-link {"label":"Permits &amp; Licenses","url":"<?php echo esc_url( home_url( '/permits/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
					<!-- wp:navigation-link {"label":"Public Records","url":"<?php echo esc_url( home_url( '/public-records/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
					<!-- wp:navigation-link {"label":"Events Calendar","url":"<?php echo esc_url( home_url( '/events/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
				<!-- /wp:navigation -->

			</div>
			<!-- /wp:column -->

			<!-- Column 4: Social -->
			<!-- wp:column -->
			<div class="wp-block-column">

				<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","letterSpacing":"1.6px"}},"fontSize":"small","textColor":"base"} -->
				<h3 class="wp-block-heading has-small-font-size has-base-color has-text-color" style="font-style:normal;font-weight:600;letter-spacing:1.6px;text-transform:uppercase"><?php esc_html_e( 'Social', 'civic-starter-curbeffect' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
				<ul class="wp-block-social-links has-icon-color is-style-logos-only">
					<!-- wp:social-link {"url":"#","service":"facebook"} /-->
					<!-- wp:social-link {"url":"#","service":"twitter"} /-->
					<!-- wp:social-link {"url":"#","service":"instagram"} /-->
					<!-- wp:social-link {"url":"#","service":"youtube"} /-->
					<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				</ul>
				<!-- /wp:social-links -->

			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

		<!-- wp:separator {"backgroundColor":"accent-4","className":"is-style-wide"} -->
		<hr class="wp-block-separator has-accent-4-background-color has-background is-style-wide"/>
		<!-- /wp:separator -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide">

			<!-- wp:paragraph {"fontSize":"small","textColor":"base"} -->
			<p class="has-small-font-size has-base-color has-text-color">
				<?php printf( esc_html__( '© %s City Website. All rights reserved.', 'civic-starter-curbeffect' ), esc_html( date_i18n( 'Y' ) ) ); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small","textColor":"base"} -->
			<p class="has-small-font-size has-base-color has-text-color">
				<?php
				printf(
					/* translators: %s: WordPress link. */
					esc_html__( 'Designed with %s', 'civic-starter-curbeffect' ),
					'<a href="' . esc_url( __( 'https://wordpress.org', 'civic-starter-curbeffect' ) ) . '" rel="nofollow">WordPress</a>'
				);
				?>
			</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</footer>
<!-- /wp:group -->
