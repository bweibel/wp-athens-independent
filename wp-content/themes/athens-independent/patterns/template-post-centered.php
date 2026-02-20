<?php
/**
 * Title: Post Centered
 * Slug: athens-independent/template-post-centered
 * Template Types: single
 * Description: Single post layout with two-column content and sidebar.
 * Categories: athens-independent/posts
 * Keywords: post, centered, sidebar
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content Area"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0">

<!-- wp:group {"metadata":{"name":"Ad Banner"},"align":"full","backgroundColor":"tertiary","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"align":"center","textColor":"secondary","fontSize":"x-small","style":{"typography":{"fontWeight":"500","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
<p class="has-text-align-center has-secondary-color has-text-color has-x-small-font-size" style="font-weight:500;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e( 'Advertisement', 'athens-independent' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:group {"metadata":{"name":"Post Title"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"0","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:0;padding-left:var(--wp--preset--spacing--medium)"><!-- wp:post-title {"level":1,"fontSize":"x-large","style":{"typography":{"fontWeight":"800","lineHeight":"1.1"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Post Columns"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|xx-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignwide">

<!-- wp:column {"width":"68%","metadata":{"name":"Post Content"}} -->
<div class="wp-block-column" style="flex-basis:68%">

<!-- wp:group {"metadata":{"name":"Byline"},"style":{"spacing":{"blockGap":"6px","margin":{"bottom":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--medium)"><!-- wp:post-author {"showBio":false,"fontSize":"x-small","style":{"typography":{"fontWeight":"600"}}} /-->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"x-small"} -->
<p class="has-secondary-color has-text-color has-x-small-font-size">·</p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","className":"is-style-term-button","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontWeight":"600","fontSize":"var:preset|font-size|x-small"}},"backgroundColor":"primary","textColor":"base"} /-->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"x-small"} -->
<p class="has-secondary-color has-text-color has-x-small-font-size">·</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"fontSize":"x-small","textColor":"secondary"} /--></div>
<!-- /wp:group -->

<!-- wp:post-content {"align":"wide","layout":{"type":"constrained"}} /-->

<!-- wp:pullquote {"className":"is-style-aci-big","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} -->
<figure class="wp-block-pullquote is-style-aci-big" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)"><blockquote><p><?php esc_html_e( 'Add a pull quote here to highlight a key moment from this story.', 'athens-independent' ); ?></p></blockquote></figure>
<!-- /wp:pullquote -->

<!-- wp:group {"metadata":{"name":"Tags"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:post-terms {"term":"post_tag","className":"is-style-term-button","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /--></div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

<!-- wp:column {"width":"32%","metadata":{"name":"Sidebar"}} -->
<div class="wp-block-column" style="flex-basis:32%">

<!-- wp:group {"metadata":{"name":"Support Widget"},"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"backgroundColor":"primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"textColor":"base","fontSize":"base","style":{"typography":{"fontWeight":"800","letterSpacing":"0.05em","textTransform":"uppercase"}}} -->
<h3 class="wp-block-heading has-base-color has-text-color has-base-font-size" style="font-weight:800;letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e( 'Support Local News', 'athens-independent' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-small-font-size"><?php esc_html_e( 'Athens County Independent is funded by readers like you. Your support makes local journalism possible.', 'athens-independent' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"4px","color":"var(--wp--preset--color--base)","width":"2px"},"typography":{"fontWeight":"700"},"color":{"background":"transparent","text":"var(--wp--preset--color--base)"}},"fontSize":"x-small"} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:4px;border-width:2px;border-color:var(--wp--preset--color--base);background:transparent;color:var(--wp--preset--color--base);font-weight:700" href="#"><?php esc_html_e( 'Become a Member', 'athens-independent' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Ad Placeholder 1"},"style":{"border":{"radius":"4px","color":"var(--wp--preset--color--border-light)","width":"1px","style":"dashed"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-radius:4px;border-color:var(--wp--preset--color--border-light);border-style:dashed;border-width:1px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"align":"center","textColor":"secondary","fontSize":"x-small","style":{"typography":{"fontWeight":"500","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
<p class="has-text-align-center has-secondary-color has-text-color has-x-small-font-size" style="font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Advertisement', 'athens-independent' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Event Info"},"style":{"border":{"radius":"6px","color":"var(--wp--preset--color--border-light)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-radius:6px;border-color:var(--wp--preset--color--border-light);border-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":4,"fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
<h4 class="wp-block-heading has-small-font-size" style="font-weight:700;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Upcoming Events', 'athens-independent' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"x-small"} -->
<p class="has-secondary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Add event details here via the Site Editor.', 'athens-independent' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Ad Placeholder 2"},"style":{"border":{"radius":"4px","color":"var(--wp--preset--color--border-light)","width":"1px","style":"dashed"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-radius:4px;border-color:var(--wp--preset--color--border-light);border-style:dashed;border-width:1px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"align":"center","textColor":"secondary","fontSize":"x-small","style":{"typography":{"fontWeight":"500","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
<p class="has-text-align-center has-secondary-color has-text-color has-x-small-font-size" style="font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Advertisement', 'athens-independent' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- wp:group {"metadata":{"name":"Author Box"},"align":"wide","style":{"border":{"top":{"color":"var:preset|color|border-light","width":"2px"}},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--border-light);border-top-width:2px;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:avatar {"size":80,"style":{"border":{"radius":"100px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-author-biography {"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</main>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Comments Area"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:comments {"align":"full","className":"wp-block-comments-query-loop","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-comments alignfull wp-block-comments-query-loop has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"metadata":{"name":"Comments Inside"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium","padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Comments', 'athens-independent' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:comments-title {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"base"} /-->

<!-- wp:comment-template {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} -->
<!-- wp:group {"metadata":{"name":"Comment Content"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"},"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"5px","bottom":{"color":"var:preset|color|border-light","width":"1px"}}},"backgroundColor":"base"} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:5px;border-bottom-color:var(--wp--preset--color--border-light);border-bottom-width:1px;margin-top:0;margin-bottom:var(--wp--preset--spacing--medium);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":44,"style":{"border":{"radius":"100px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-group"><!-- wp:comment-author-name /-->

<!-- wp:comment-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:comment-content {"fontSize":"small"} /-->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"blockGap":"var:preset|spacing|small"}},"textColor":"secondary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-secondary-color has-text-color has-link-color"><!-- wp:comment-edit-link /-->

<!-- wp:comment-reply-link /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:group --></div>
<!-- /wp:comments --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
