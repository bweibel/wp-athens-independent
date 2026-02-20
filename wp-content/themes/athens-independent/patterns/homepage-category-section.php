<?php
/**
 * Title: Homepage Category Section
 * Slug: athens-independent/homepage-category-section
 * Description: Reusable category post section with 3-column grid and READ MORE tab
 * Categories: athens-independent/posts
 * Keywords: category, posts, grid, homepage, section
 * Viewport Width: 1500
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Category Section"},"align":"wide","style":{"border":{"bottom":{"color":"var:preset|color|border-light","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-bottom-color:var(--wp--preset--color--border-light);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--medium)">

<!-- wp:heading {"level":2,"fontSize":"base","style":{"typography":{"fontWeight":"800","letterSpacing":"0.12em","textTransform":"uppercase"},"border":{"bottom":{"color":"var:preset|color|primary","width":"3px"}},"spacing":{"padding":{"bottom":"8px"},"margin":{"bottom":"var:preset|spacing|small"}}}} -->
<h2 class="wp-block-heading has-base-font-size" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:3px;font-weight:800;letter-spacing:0.12em;text-transform:uppercase;padding-bottom:8px;margin-bottom:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Section Name', 'athens-independent' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns">

<!-- wp:column {"metadata":{"name":"Posts Grid"}} -->
<div class="wp-block-column"><!-- wp:query {"queryId":20,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"name":"Category Posts Query"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"metadata":{"name":"Post Card"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"4px"},"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}}} /-->

<!-- wp:post-terms {"term":"category","className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontWeight":"600","fontSize":"var:preset|font-size|x-small"}},"textColor":"primary"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"style":{"typography":{"fontWeight":"700","lineHeight":"1.25","fontSize":"clamp(0.9rem,1.5vw,1.05rem)"},"elements":{"link":{"color":{"text":"var:preset|color|main"},":hover":{"typography":{"textDecoration":"underline"}}}}}} /-->

<!-- wp:post-date {"fontSize":"x-small","textColor":"secondary"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"52px","metadata":{"name":"Read More Tab"}} -->
<div class="wp-block-column" style="flex-basis:52px"><!-- wp:group {"className":"aci-read-more-tab","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group aci-read-more-tab has-primary-background-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--medium);padding-right:0;padding-bottom:var(--wp--preset--spacing--medium);padding-left:0"><!-- wp:paragraph {"align":"center","textColor":"base","style":{"typography":{"fontWeight":"800","letterSpacing":"0.15em","textTransform":"uppercase","fontSize":"clamp(0.65rem,1vw,0.75rem)"}}} -->
<p class="has-text-align-center has-base-color has-text-color" style="font-weight:800;letter-spacing:0.15em;text-transform:uppercase;font-size:clamp(0.65rem,1vw,0.75rem)"><a href="#"><?php esc_html_e( 'Read More', 'athens-independent' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->
