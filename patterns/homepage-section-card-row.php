<?php
/**
 * Title: Section card row
 * Slug: linea/homepage-section-card-row
 * Categories: linea-homepage, linea-sections
 * Description: A three-column row for flexible newsroom modules without fragile category assumptions.
 */
?>
<!-- wp:group {"align":"wide","className":"linea-section-card-row","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide linea-section-card-row" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"className":"linea-section-teaser linea-section-teaser-green","layout":{"type":"constrained"}} -->
	<div class="wp-block-group linea-section-teaser linea-section-teaser-green">
		<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"className":"linea-section-heading","level":2} -->
			<h2 class="wp-block-heading linea-section-heading">Visual Story</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"linea-view-all","fontSize":"x-small"} -->
			<p class="linea-view-all has-x-small-font-size"><a href="#latest-stories">View latest</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":4,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"linea-section-teaser-query"} -->
		<div class="wp-block-query linea-section-teaser-query">
			<!-- wp:post-template -->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
				<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"medium"} /-->
				<!-- wp:group {"className":"linea-byline-row","layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group linea-byline-row">
					<!-- wp:post-author-name {"fontSize":"x-small"} /-->
					<!-- wp:post-date {"fontSize":"x-small"} /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->

			<!-- wp:query-no-results -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size">This card fills in after more visual stories are published.</p>
				<!-- /wp:paragraph -->
			<!-- /wp:query-no-results -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"linea-section-teaser linea-section-teaser-purple","layout":{"type":"constrained"}} -->
	<div class="wp-block-group linea-section-teaser linea-section-teaser-purple">
		<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"className":"linea-section-heading","level":2} -->
			<h2 class="wp-block-heading linea-section-heading">Campus Life</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"linea-view-all","fontSize":"x-small"} -->
			<p class="linea-view-all has-x-small-font-size"><a href="#latest-stories">View latest</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":5,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"linea-section-teaser-query"} -->
		<div class="wp-block-query linea-section-teaser-query">
			<!-- wp:post-template -->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
				<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"medium"} /-->
				<!-- wp:group {"className":"linea-byline-row","layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group linea-byline-row">
					<!-- wp:post-author-name {"fontSize":"x-small"} /-->
					<!-- wp:post-date {"fontSize":"x-small"} /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->

			<!-- wp:query-no-results -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size">Campus-life coverage will appear here as the site grows.</p>
				<!-- /wp:paragraph -->
			<!-- /wp:query-no-results -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"linea-section-teaser linea-section-teaser-blue","layout":{"type":"constrained"}} -->
	<div class="wp-block-group linea-section-teaser linea-section-teaser-blue">
		<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"className":"linea-section-heading","level":2} -->
			<h2 class="wp-block-heading linea-section-heading">Staff Picks</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"linea-view-all","fontSize":"x-small"} -->
			<p class="linea-view-all has-x-small-font-size"><a href="#latest-stories">View latest</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":6,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"linea-section-teaser-query"} -->
		<div class="wp-block-query linea-section-teaser-query">
			<!-- wp:post-template -->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
				<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"medium"} /-->
				<!-- wp:group {"className":"linea-byline-row","layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group linea-byline-row">
					<!-- wp:post-author-name {"fontSize":"x-small"} /-->
					<!-- wp:post-date {"fontSize":"x-small"} /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->

			<!-- wp:query-no-results -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size">Staff picks will appear here after more stories are published.</p>
				<!-- /wp:paragraph -->
			<!-- /wp:query-no-results -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
