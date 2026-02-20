<?php
/**
 * Title: Homepage Hero
 * Slug: athens-independent/homepage-hero
 * Description: Hero section with featured post and related stories
 * Categories: athens-independent/hero
 * Keywords: hero, featured, homepage, posts
 * Viewport Width: 1500
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Homepage Hero"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignwide">

<!-- wp:column {"width":"60%","metadata":{"name":"Featured Post"}} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:query {"queryId":10,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"name":"Featured Post Query"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"overlayColor":"main","minHeight":420,"minHeightUnit":"px","style":{"border":{"radius":"4px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-radius:4px;min-height:420px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><span aria-hidden="true" class="wp-block-cover__background has-main-background-color has-background-dim-50 has-background-dim"></span><div class="wp-block-cover__inner-container">

<!-- wp:group {"metadata":{"name":"Cover Overlay Content"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","className":"is-style-term-button","style":{"elements":{"link":{"color":{"text":"var:preset|color|main"}}},"typography":{"fontWeight":"700","fontSize":"var:preset|font-size|x-small"}},"backgroundColor":"primary"} /-->

<!-- wp:post-title {"isLink":true,"level":2,"textColor":"base","style":{"typography":{"fontWeight":"800","lineHeight":"1.1","fontSize":"clamp(1.4rem,3vw,2.2rem)"},"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"typography":{"textDecoration":"underline"}}}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:post-author {"showBio":false,"textColor":"base","fontSize":"x-small","style":{"typography":{"fontWeight":"600"}}} /-->

<!-- wp:paragraph {"textColor":"base","fontSize":"x-small"} -->
<p class="has-base-color has-text-color has-x-small-font-size">·</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"textColor":"base","fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</div></div>
<!-- /wp:cover -->

<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"0"}}},"fontSize":"small"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%","metadata":{"name":"Related Stories"}} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading {"level":3,"fontSize":"small","style":{"typography":{"fontWeight":"800","letterSpacing":"0.12em","textTransform":"uppercase"},"border":{"bottom":{"color":"var:preset|color|primary","width":"3px"}},"spacing":{"padding":{"bottom":"10px"},"margin":{"bottom":"var:preset|spacing|small"}}}} -->
<h3 class="wp-block-heading has-small-font-size" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:3px;font-weight:800;letter-spacing:0.12em;text-transform:uppercase;padding-bottom:10px;margin-bottom:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Related Stories', 'athens-independent' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":12,"query":{"perPage":4,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"name":"Related Stories Query"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
<!-- wp:group {"metadata":{"name":"Related Story Card"},"style":{"border":{"bottom":{"color":"var:preset|color|border-light","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-light);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:post-featured-image {"isLink":true,"width":"80px","height":"80px","style":{"border":{"radius":"4px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"level":4,"style":{"typography":{"fontWeight":"700","lineHeight":"1.2","fontSize":"clamp(0.85rem,1.5vw,1rem)"},"elements":{"link":{"color":{"text":"var:preset|color|main"},":hover":{"typography":{"textDecoration":"underline"}}}}}} /-->

<!-- wp:post-date {"fontSize":"x-small","textColor":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

</div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
