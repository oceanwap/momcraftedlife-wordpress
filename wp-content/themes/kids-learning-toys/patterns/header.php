<?php
/**
 * Title: Header
 * Slug: kids-learning-toys/header
 * Categories: kids-learning-toys, header
 */
?>

<!-- wp:group {"className":"top-bar","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"header-bg","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group top-bar has-header-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"center","className":"top-bar-inner"} -->
<div class="wp-block-columns are-vertically-aligned-center top-bar-inner"><!-- wp:column {"verticalAlignment":"center","width":"30%","className":"loc-block"} -->
<div class="wp-block-column is-vertically-aligned-center loc-block" style="flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":16,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/location.png'); ?>" alt="" class="wp-image-16"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"12px"}},"textColor":"heading"} -->
<p class="has-heading-color has-text-color has-link-color" style="font-size:12px"><?php esc_html_e('Store Location','kids-learning-toys'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%","className":"top-text-block"} -->
<div class="wp-block-column is-vertically-aligned-center top-text-block" style="flex-basis:40%"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} -->
<p class="has-text-align-center has-heading-color has-text-color has-link-color" style="font-size:12px"><?php esc_html_e('Get free home delivery (Order More then $300)','kids-learning-toys'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"30%","className":"top-right-box"} -->
<div class="wp-block-column is-vertically-aligned-center top-right-box" style="flex-basis:30%"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"40%","className":"call-box"} -->
<div class="wp-block-column is-vertically-aligned-center call-box" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:image {"id":16,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/call.png'); ?>" alt="" class="wp-image-16"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"12px"}},"textColor":"heading"} -->
<p class="has-heading-color has-text-color has-link-color" style="font-size:12px"><?php esc_html_e('+1800-1574-1540','kids-learning-toys'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%","className":"mail-box"} -->
<div class="wp-block-column is-vertically-aligned-center mail-box" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:image {"id":16,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/mail.png'); ?>" alt="" class="wp-image-16"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"12px"}},"textColor":"heading"} -->
<p class="has-heading-color has-text-color has-link-color" style="font-size:12px"><?php esc_html_e('support@example.com','kids-learning-toys'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"menu-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group menu-header has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"className":"menu-header-inner"} -->
<div class="wp-block-columns menu-header-inner"><!-- wp:column {"verticalAlignment":"center","width":"20%","className":"logo-block"} -->
<div class="wp-block-column is-vertically-aligned-center logo-block" style="flex-basis:20%"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"25px"}},"textColor":"primary"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%","className":"menu-block"} -->
<div class="wp-block-column is-vertically-aligned-center menu-block" style="flex-basis:40%"><!-- wp:navigation {"textColor":"heading","overlayBackgroundColor":"white","overlayTextColor":"black","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500","letterSpacing":"1px"},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Collection","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-submenu {"label":"Pages","type":"","url":"#","kind":"custom"} -->
	<!-- wp:navigation-link {"label":"Page 1","type":"","url":"#","kind":"custom","className":""} /-->

	<!-- wp:navigation-link {"label":"Page 2","type":"","url":"#","kind":"custom","className":""} /-->
<!-- /wp:navigation-submenu -->

<!-- wp:navigation-link {"label":"Buy Now","type":"link","opensInNewTab":true,"url":"https://www.ovationthemes.com/products/toys-wordpress-theme","kind":"custom","className":"buynow"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%","className":"header-right-box"} -->
<div class="wp-block-column is-vertically-aligned-center header-right-box" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"search","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"className":"search-box"} /-->

<!-- wp:shortcode -->

<!-- /wp:shortcode -->

<!-- wp:woocommerce/mini-cart {"iconColor":{"color":"#FD6798","name":"Ternary","slug":"ternary","class":"has-ternary-icon-color"},"productCountColor":{"color":"#132C3B","name":"Headings","slug":"heading","class":"has-heading-product-count-color"},"className":"head-cart"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->