<?php
/**
 * Title: Header Light
 * Slug: athens-independent/header-light
 * Description: Three-bar header with utility bar, logo, nav, and breaking news ticker
 * Categories: header
 * Keywords: header, nav, links, button, ticker
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Header"},"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","right":"0","left":"0"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

<!-- wp:group {"metadata":{"name":"Utility Bar"},"align":"full","className":"aci-header-utility-bar","style":{"spacing":{"padding":{"top":"6px","bottom":"6px","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"bottom":{"color":"var:preset|color|border-light","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull aci-header-utility-bar" style="border-bottom-color:var(--wp--preset--color--border-light);border-bottom-width:1px;padding-top:6px;padding-right:var(--wp--preset--spacing--medium);padding-bottom:6px;padding-left:var(--wp--preset--spacing--medium)"><!-- wp:social-links {"iconColor":"main","iconColorValue":"#231F20","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"6px","left":"6px"}}},"layout":{"type":"flex","justifyContent":"left","verticalAlignment":"center"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"align":"center","fontSize":"x-small","style":{"typography":{"fontWeight":"500"}}} -->
<p class="has-text-align-center has-x-small-font-size" style="font-weight:500"><?php esc_html_e( 'Support us today by becoming a member!', 'athens-independent' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"openSubmenusOnClick":false,"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"typography":{"fontWeight":"600","letterSpacing":"0.05em"}},"fontSize":"x-small","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<!-- wp:navigation-link {"label":"SHOP","url":"#","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"ADVERTISE","url":"#","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Logo Bar"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:site-logo {"width":300} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Nav Bar"},"align":"full","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"top":{"color":"var:preset|color|border-light","width":"1px"},"bottom":{"color":"var:preset|color|border-light","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--border-light);border-top-width:1px;border-bottom-color:var(--wp--preset--color--border-light);border-bottom-width:1px;padding-top:10px;padding-right:var(--wp--preset--spacing--medium);padding-bottom:10px;padding-left:var(--wp--preset--spacing--medium)"><!-- wp:navigation {"openSubmenusOnClick":true,"icon":"menu","style":{"spacing":{"blockGap":"var:preset|spacing|medium"},"typography":{"fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"}},"fontSize":"x-small","layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"}} -->
<!-- wp:navigation-link {"label":"TOPICS","url":"#","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"FEATURES","url":"#","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"ABOUT","url":"#","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"CALENDAR","url":"#","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"CONTACT","url":"#","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"border":{"radius":"4px"},"typography":{"fontWeight":"700","letterSpacing":"0.05em"}},"fontSize":"x-small"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:4px;font-weight:700;letter-spacing:0.05em" href="#">SUBSCRIBE</a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"4px","width":"2px","color":"var(--wp--preset--color--main)"},"typography":{"fontWeight":"700","letterSpacing":"0.05em"},"color":{"background":"transparent","text":"var(--wp--preset--color--main)"}},"fontSize":"x-small"} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:4px;border-width:2px;border-color:var(--wp--preset--color--main);background:transparent;color:var(--wp--preset--color--main);font-weight:700;letter-spacing:0.05em" href="#">DONATE</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:athensindependent/breaking-news /-->

</div>
<!-- /wp:group -->
