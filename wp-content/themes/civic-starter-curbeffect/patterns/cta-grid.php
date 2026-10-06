<?php
/**
 * Title: CTA Grid
 * Slug: civic-starter-curbeffect/cta-grid
 * Categories: featured
 * Description: Six CTA service cards in a 2×3 grid.
 *
 * @package CivicStarterCurbEffect
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"accent-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:heading {"level":2,"textAlign":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'How Can We Help You?', 'civic-starter-curbeffect' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:group {"layout":{"type":"grid","columnCount":2},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-group">

			<!-- Card: Pay Your Bills -->
			<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|accent-1","style":"solid","width":"4px"},"right":{"color":"var:preset|color|accent-6","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|accent-6","style":"solid","width":"1px"},"left":{"color":"var:preset|color|accent-6","style":"solid","width":"1px"}},"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="border-top:4px solid var(--wp--preset--color--accent-1);border-right:1px solid var(--wp--preset--color--accent-6);border-bottom:1px solid var(--wp--preset--color--accent-6);border-left:1px solid var(--wp--preset--color--accent-6);background-color:#ffffff;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:html -->
				<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" style="color:var(--wp--preset--color--accent-1)"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"top":"0"}}}} -->
				<h3 class="wp-block-heading" style="font-weight:600;margin-top:0"><a href="<?php echo esc_url( home_url( '/pay-bills/' ) ); ?>"><?php esc_html_e( 'Pay Your Bills', 'civic-starter-curbeffect' ); ?></a></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php esc_html_e( 'Pay utility bills, parking tickets, and municipal fees online — fast and secure.', 'civic-starter-curbeffect' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Card: Report an Issue -->
			<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|accent-1","style":"solid","width":"4px"},"right":{"color":"var:preset|color|accent-6","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|accent-6","style":"solid","width":"1px"},"left":{"color":"var:preset|color|accent-6","style":"solid","width":"1px"}},"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="border-top:4px solid var(--wp--preset--color--accent-1);border-right:1px solid var(--wp--preset--color--accent-6);border-bottom:1px solid var(--wp--preset--color--accent-6);border-left:1px solid var(--wp--preset--color--accent-6);background-color:#ffffff;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:html -->
				<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" style="color:var(--wp--preset--color--accent-1)"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"top":"0"}}}} -->
				<h3 class="wp-block-heading" style="font-weight:600;margin-top:0"><a href="<?php echo esc_url( home_url( '/report-an-issue/' ) ); ?>"><?php esc_html_e( 'Report an Issue', 'civic-starter-curbeffect' ); ?></a></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php esc_html_e( 'Submit requests for potholes, broken streetlights, graffiti, or other public concerns.', 'civic-starter-curbeffect' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Card: Permits & Licenses -->
			<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|accent-1","style":"solid","width":"4px"},"right":{"color":"var:preset|color|accent-6","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|accent-6","style":"solid","width":"1px"},"left":{"color":"var:preset|color|accent-6","style":"solid","width":"1px"}},"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="border-top:4px solid var(--wp--preset--color--accent-1);border-right:1px solid var(--wp--preset--color--accent-6);border-bottom:1px solid var(--wp--preset--color--accent-6);border-left:1px solid var(--wp--preset--color--accent-6);background-color:#ffffff;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:html -->
				<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" style="color:var(--wp--preset--color--accent-1)"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"top":"0"}}}} -->
				<h3 class="wp-block-heading" style="font-weight:600;margin-top:0"><a href="<?php echo esc_url( home_url( '/permits/' ) ); ?>"><?php esc_html_e( 'Permits &amp; Licenses', 'civic-starter-curbeffect' ); ?></a></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php esc_html_e( 'Apply for building permits, business licenses, and special-use permits online.', 'civic-starter-curbeffect' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Card: City Council -->
			<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|accent-1","style":"solid","width":"4px"},"right":{"color":"var:preset|color|accent-6","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|accent-6","style":"solid","width":"1px"},"left":{"color":"var:preset|color|accent-6","style":"solid","width":"1px"}},"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="border-top:4px solid var(--wp--preset--color--accent-1);border-right:1px solid var(--wp--preset--color--accent-6);border-bottom:1px solid var(--wp--preset--color--accent-6);border-left:1px solid var(--wp--preset--color--accent-6);background-color:#ffffff;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:html -->
				<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" style="color:var(--wp--preset--color--accent-1)"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"top":"0"}}}} -->
				<h3 class="wp-block-heading" style="font-weight:600;margin-top:0"><a href="<?php echo esc_url( home_url( '/government/' ) ); ?>"><?php esc_html_e( 'City Council', 'civic-starter-curbeffect' ); ?></a></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php esc_html_e( 'View meeting schedules, agendas, minutes, and contact your city representatives.', 'civic-starter-curbeffect' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Card: Public Records -->
			<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|accent-1","style":"solid","width":"4px"},"right":{"color":"var:preset|color|accent-6","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|accent-6","style":"solid","width":"1px"},"left":{"color":"var:preset|color|accent-6","style":"solid","width":"1px"}},"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="border-top:4px solid var(--wp--preset--color--accent-1);border-right:1px solid var(--wp--preset--color--accent-6);border-bottom:1px solid var(--wp--preset--color--accent-6);border-left:1px solid var(--wp--preset--color--accent-6);background-color:#ffffff;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:html -->
				<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" style="color:var(--wp--preset--color--accent-1)"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"top":"0"}}}} -->
				<h3 class="wp-block-heading" style="font-weight:600;margin-top:0"><a href="<?php echo esc_url( home_url( '/public-records/' ) ); ?>"><?php esc_html_e( 'Public Records', 'civic-starter-curbeffect' ); ?></a></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php esc_html_e( 'Submit a FOIA request or search publicly available documents and data.', 'civic-starter-curbeffect' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Card: Events Calendar -->
			<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|accent-1","style":"solid","width":"4px"},"right":{"color":"var:preset|color|accent-6","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|accent-6","style":"solid","width":"1px"},"left":{"color":"var:preset|color|accent-6","style":"solid","width":"1px"}},"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="border-top:4px solid var(--wp--preset--color--accent-1);border-right:1px solid var(--wp--preset--color--accent-6);border-bottom:1px solid var(--wp--preset--color--accent-6);border-left:1px solid var(--wp--preset--color--accent-6);background-color:#ffffff;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:html -->
				<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" style="color:var(--wp--preset--color--accent-1)"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"top":"0"}}}} -->
				<h3 class="wp-block-heading" style="font-weight:600;margin-top:0"><a href="<?php echo esc_url( home_url( '/events/' ) ); ?>"><?php esc_html_e( 'Events Calendar', 'civic-starter-curbeffect' ); ?></a></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><?php esc_html_e( 'Find upcoming community events, city meetings, and public hearings.', 'civic-starter-curbeffect' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
