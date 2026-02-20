<?php
/**
 * Title: Footer Light
 * Slug: athens-independent/footer-light
 * Description: Athens Independent locally-owned footer
 * Categories: footer
 * Keywords: footer, local, news
 * Viewport Width: 1500
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Footer"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0px"},"blockGap":"var:preset|spacing|medium"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"main","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-main-background-color has-base-color has-text-color has-background has-link-color" style="margin-top:0px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">

<!-- wp:paragraph {"align":"center","textColor":"base","style":{"typography":{"fontWeight":"700","letterSpacing":"0.2em","textTransform":"uppercase","fontSize":"clamp(0.65rem,1.2vw,0.8rem)"}}} -->
<p class="has-text-align-center has-base-color has-text-color" style="font-weight:700;letter-spacing:0.2em;text-transform:uppercase;font-size:clamp(0.65rem,1.2vw,0.8rem)"><?php esc_html_e( 'Locally Owned, Community Driven News', 'athens-independent' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:group {"metadata":{"name":"Support Badge"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"8px"},"border":{"radius":"8px"}},"backgroundColor":"primary","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"align":"center","textColor":"base","style":{"typography":{"fontWeight":"800","letterSpacing":"0.1em","textTransform":"uppercase","fontSize":"clamp(0.75rem,1.5vw,0.95rem)"}}} -->
<p class="has-text-align-center has-base-color has-text-color" style="font-weight:800;letter-spacing:0.1em;text-transform:uppercase;font-size:clamp(0.75rem,1.5vw,0.95rem)"><?php esc_html_e( 'Support Local News', 'athens-independent' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:site-logo {"width":280} /-->

<!-- wp:paragraph {"align":"center","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} -->
<p class="has-text-align-center has-small-font-size"><a href="#"><?php esc_html_e( 'Learn About Our Award Winning &amp; Locally Supported Journalism', 'athens-independent' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"backgroundColor":"border-dark","className":"is-style-separator-thin"} -->
<hr class="wp-block-separator has-text-color has-border-dark-color has-alpha-channel-opacity has-border-dark-background-color has-background is-style-separator-thin"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","fontSize":"x-small","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}}} -->
<p class="has-text-align-center has-x-small-font-size"><?php echo esc_html( '© ' . date( 'Y' ) ); ?> <?php esc_html_e( 'Athens County Independent · PO Box 123, Athens, OH 45701 · All rights reserved.', 'athens-independent' ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
