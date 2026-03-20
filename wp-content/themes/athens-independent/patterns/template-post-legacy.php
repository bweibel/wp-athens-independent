<?php
/**
 * Title: Post Legacy
 * Slug: athens-independent/template-post-legacy
 * Description: Legacy single post layout with two-column content and sidebar.
 * Categories: athens-independent/posts
 * Keywords: post, legacy, sidebar
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","theme":"athens-independent","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content Area"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"metadata":{"name":"Post Header"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"metadata":{"name":"Ad Banner"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"500","letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"secondary","fontSize":"x-small"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-x-small-font-size" style="font-weight:500;letter-spacing:0.1em;text-transform:uppercase">Advertisement</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"16/9","align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"2rem","topRight":"2rem","bottomLeft":"2rem","bottomRight":"2rem"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Post Columns"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|xx-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"","metadata":{"name":"Post Content"}} -->
<div class="wp-block-column"><!-- wp:post-title {"level":1,"className":"story-title","style":{"typography":{"fontWeight":"800","lineHeight":"1.1"}},"fontSize":"x-large"} /-->

<!-- wp:group {"metadata":{"name":"Byline"},"style":{"spacing":{"blockGap":"6px","margin":{"bottom":"var:preset|spacing|medium"},"padding":{"bottom":"var:preset|spacing|small"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:co-authors-plus/coauthors -->
<div class="wp-block-co-authors-plus-coauthors"><!-- wp:co-authors-plus/name {"isLink":true} /--></div>
<!-- /wp:co-authors-plus/coauthors -->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"textColor":"secondary","fontSize":"x-small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"category","suffix":" ","className":"is-style-term-button","style":{"typography":{"fontWeight":"700","fontStyle":"normal"},"border":{"bottom":{"width":"4px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|small"}}},"fontSize":"x-small"} /-->

<!-- wp:post-content {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","justifyContent":"left"}} /-->

<!-- wp:group {"metadata":{"name":"Tags"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:post-terms {"term":"post_tag","className":"is-style-term-button","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20rem","metadata":{"name":"Sidebar"}} -->
<div class="wp-block-column" style="flex-basis:20rem"><!-- wp:group {"metadata":{"name":"Support Widget"},"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"backgroundColor":"primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"800","letterSpacing":"0.05em","textTransform":"uppercase"}},"textColor":"base","fontSize":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-base-font-size" style="font-weight:800;letter-spacing:0.05em;text-transform:uppercase">Support Local News</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-small-font-size">Athens County Independent is funded by readers like you. Your support makes local journalism possible.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"4px","color":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)","width":"2px"},"typography":{"fontWeight":"700"},"color":{"background":"transparent","text":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)"}},"fontSize":"x-small"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-border-color has-x-small-font-size has-custom-font-size wp-element-button" href="#" style="border-color:var(--wp--preset--color--base);border-width:2px;border-radius:4px;color:var(--wp--preset--color--base);background-color:transparent;font-weight:700">Become a Member</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Ad Placeholder 1"},"style":{"border":{"radius":"4px","color":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dborder-light)","width":"1px","style":"dashed"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-tertiary-background-color has-background" style="border-color:var(--wp--preset--color--border-light);border-style:dashed;border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"500","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"secondary","fontSize":"x-small"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-x-small-font-size" style="font-weight:500;letter-spacing:0.08em;text-transform:uppercase">Advertisement</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Event Info"},"style":{"border":{"radius":"6px","color":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dborder-light)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border-light);border-width:1px;border-radius:6px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"}},"fontSize":"small"} -->
<h4 class="wp-block-heading has-small-font-size" style="font-weight:700;letter-spacing:0.08em;text-transform:uppercase">Upcoming Events</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"x-small"} -->
<p class="has-secondary-color has-text-color has-x-small-font-size">Add event details here via the Site Editor.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Ad Placeholder 2"},"style":{"border":{"radius":"4px","color":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dborder-light)","width":"1px","style":"dashed"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-tertiary-background-color has-background" style="border-color:var(--wp--preset--color--border-light);border-style:dashed;border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"500","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"secondary","fontSize":"x-small"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-x-small-font-size" style="font-weight:500;letter-spacing:0.08em;text-transform:uppercase">Advertisement</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"metadata":{"name":"Author Box"},"align":"wide","style":{"border":{"top":{"color":"var:preset|color|border-light","width":"2px"}},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--border-light);border-top-width:2px;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:avatar {"size":80,"style":{"border":{"radius":"100px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"base"} /-->

<!-- wp:post-author-biography {"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Comments Area"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:comments {"align":"full","className":"wp-block-comments-query-loop","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-comments alignfull wp-block-comments-query-loop has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"metadata":{"name":"Comments Inside"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium","padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:heading -->
<h2 class="wp-block-heading">Comments</h2>
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

<!-- wp:template-part {"slug":"footer","theme":"athens-independent","tagName":"footer","className":"site-footer"} /-->