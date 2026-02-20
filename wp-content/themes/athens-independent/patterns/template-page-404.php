<?php
/**
 * Title: 404 Page
 * Slug: athens-independent/template-page-404
 * Description: The page that shows when no other page is found.
 * Categories: athens-independent/pages
 * Keywords: page, 404, not found
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content Area"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)">

<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"x-large","style":{"typography":{"fontWeight":"800","letterSpacing":"0.05em","textTransform":"uppercase"}}} -->
<h1 class="wp-block-heading has-text-align-center has-x-large-font-size" style="font-weight:800;letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e( '404 &mdash; Page Not Found', 'athens-independent' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"secondary","style":{"typography":{"fontWeight":"600","letterSpacing":"0.05em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0"}}},"fontSize":"small"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.05em;text-transform:uppercase;margin-top:0"><?php esc_html_e( 'Looks like you made a wrong turn there&hellip;', 'athens-independent' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"center","width":320,"sizeSlug":"full","linkDestination":"none","className":"aci-404-illustration"} -->
<figure class="wp-block-image aligncenter size-full is-resized aci-404-illustration"><img src="" alt="<?php esc_attr_e( '404 illustration — replace this image in the Site Editor', 'athens-independent' ); ?>" style="width:320px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--large)"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"border":{"radius":"4px"},"typography":{"fontWeight":"700"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:4px;font-weight:700" href="/"><?php esc_html_e( 'Return Home', 'athens-independent' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
