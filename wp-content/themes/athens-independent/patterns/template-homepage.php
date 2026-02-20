<?php
/**
 * Title: Template Homepage
 * Slug: athens-independent/template-homepage
 * Template Types: front-page, home
 * Description: Full homepage layout with hero, ad banner, category sections, and sidebar.
 * Categories: athens-independent/pages
 * Keywords: homepage, front page, hero, categories, sidebar
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Homepage Content"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0">

<!-- wp:pattern {"slug":"athens-independent/homepage-hero"} /-->

<!-- wp:group {"metadata":{"name":"Ad Banner"},"align":"full","backgroundColor":"tertiary","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"top":{"color":"var:preset|color|border-light","width":"1px"},"bottom":{"color":"var:preset|color|border-light","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="border-top-color:var(--wp--preset--color--border-light);border-top-width:1px;border-bottom-color:var(--wp--preset--color--border-light);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"align":"center","textColor":"secondary","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase","fontSize":"clamp(0.65rem,1.2vw,0.85rem)"}}} -->
<p class="has-text-align-center has-secondary-color has-text-color" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase;font-size:clamp(0.65rem,1.2vw,0.85rem)"><?php esc_html_e( 'Local Ad Goes Here', 'athens-independent' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Main Content Area"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|xx-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignwide">

<!-- wp:column {"width":"72%","metadata":{"name":"Category Sections"}} -->
<div class="wp-block-column" style="flex-basis:72%">

<!-- wp:pattern {"slug":"athens-independent/homepage-category-section"} /-->

<!-- wp:pattern {"slug":"athens-independent/homepage-category-section"} /-->

<!-- wp:pattern {"slug":"athens-independent/homepage-category-section"} /-->

<!-- wp:pattern {"slug":"athens-independent/homepage-category-section"} /-->

</div>
<!-- /wp:column -->

<!-- wp:column {"width":"28%","metadata":{"name":"Sidebar"}} -->
<div class="wp-block-column" style="flex-basis:28%">

<!-- wp:group {"metadata":{"name":"Support Local News Widget"},"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-primary-background-color has-background has-link-color" style="border-radius:6px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"textColor":"base","fontSize":"base","style":{"typography":{"fontWeight":"800","letterSpacing":"0.05em","textTransform":"uppercase"}}} -->
<h3 class="wp-block-heading has-base-color has-text-color has-base-font-size" style="font-weight:800;letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e( 'Support Local News', 'athens-independent' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-small-font-size"><?php esc_html_e( 'Athens County Independent is reader-funded. Your membership keeps local journalism alive.', 'athens-independent' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"4px","color":"var(--wp--preset--color--base)","width":"2px"},"typography":{"fontWeight":"700"},"color":{"background":"transparent","text":"var(--wp--preset--color--base)"}},"fontSize":"x-small"} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:4px;border-width:2px;border-color:var(--wp--preset--color--base);background:transparent;color:var(--wp--preset--color--base);font-weight:700" href="#"><?php esc_html_e( 'Become a Member', 'athens-independent' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Sidebar Ad 1"},"style":{"border":{"radius":"4px","color":"var(--wp--preset--color--border-light)","width":"1px","style":"dashed"},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-radius:4px;border-color:var(--wp--preset--color--border-light);border-style:dashed;border-width:1px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"align":"center","textColor":"secondary","fontSize":"x-small","style":{"typography":{"fontWeight":"500","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
<p class="has-text-align-center has-secondary-color has-text-color has-x-small-font-size" style="font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Advertisement', 'athens-independent' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Sidebar Ad 2"},"style":{"border":{"radius":"4px","color":"var(--wp--preset--color--border-light)","width":"1px","style":"dashed"},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-radius:4px;border-color:var(--wp--preset--color--border-light);border-style:dashed;border-width:1px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"align":"center","textColor":"secondary","fontSize":"x-small","style":{"typography":{"fontWeight":"500","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
<p class="has-text-align-center has-secondary-color has-text-color has-x-small-font-size" style="font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Advertisement', 'athens-independent' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Sidebar Content"},"style":{"border":{"radius":"6px","color":"var(--wp--preset--color--border-light)","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-radius:6px;border-color:var(--wp--preset--color--border-light);border-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":4,"fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
<h4 class="wp-block-heading has-small-font-size" style="font-weight:700;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e( 'Newsletter', 'athens-independent' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"x-small"} -->
<p class="has-secondary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Get Athens County news delivered to your inbox. Add a subscription form or content here.', 'athens-independent' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
