<?php
/**
 * Title: Post Centered (No Author)
 * Slug: athens-independent/template-post-centered-no-author
 * Template Types: single
 * Description: Single post layout without byline author name or author box — for Letters, Op-Eds, Obituaries.
 * Categories: athens-independent/posts
 * Keywords: post, centered, sidebar, no author
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","theme":"athens-independent","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content Area"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"metadata":{"name":"Post Header"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"metadata":{"name":"Leaderboard Ad"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small)"><!-- wp:html -->
<script src="https://cdn.broadstreetads.com/init-2.min.js"></script>
<script>broadstreet.watch({ networkId: 9899 })</script>
<!-- Leaderboard -->
<broadstreet-zone zone-id="178171"></broadstreet-zone>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"16/9","align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"2rem","topRight":"2rem","bottomLeft":"2rem","bottomRight":"2rem"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Post Columns"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|xx-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"","metadata":{"name":"Post Content"}} -->
<div class="wp-block-column"><!-- wp:post-title {"level":1,"className":"story-title","style":{"typography":{"fontWeight":"800","lineHeight":"1.1"}},"fontSize":"x-large"} /-->

<!-- wp:group {"metadata":{"name":"Byline"},"style":{"spacing":{"blockGap":"6px","margin":{"bottom":"var:preset|spacing|medium"},"padding":{"bottom":"var:preset|spacing|small"}},"border":{"bottom":{"width":"4px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-bottom-width:4px;margin-bottom:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:post-terms {"term":"category","className":"is-style-term-button","style":{"typography":{"fontWeight":"700","fontStyle":"normal"}},"fontSize":"x-small"} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"textColor":"secondary","fontSize":"x-small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-content {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","justifyContent":"left"}} /-->

<!-- wp:group {"metadata":{"name":"Tags"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:post-terms {"term":"post_tag","className":"is-style-term-button","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20rem","metadata":{"name":"Sidebar"}} -->
<div class="wp-block-column" style="flex-basis:20rem"><!-- wp:template-part {"slug":"sidebar","theme":"athens-independent","tagName":"aside","area":"sidebar"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"athens-independent","tagName":"footer","className":"site-footer"} /-->
