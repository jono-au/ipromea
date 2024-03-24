<?php

$boldthemes_options = get_option( BoldThemesFramework::$pfx . '_theme_options' );
if ( is_product() && isset( $boldthemes_options['shop_settings_page_slug'] ) && $boldthemes_options['shop_settings_page_slug'] != '' ) {
	BoldThemesFramework::$page_for_header_id = boldthemes_get_id_by_slug( $boldthemes_options['shop_settings_page_slug'] );
} else if ( ( is_shop() || is_product_category() || is_product_taxonomy() ) && get_option( 'woocommerce_shop_page_id' ) ) {
	BoldThemesFramework::$page_for_header_id = get_option( 'woocommerce_shop_page_id' );
}

get_header();

if(is_archive()) {
	wc_get_template_part( 'partials/section', 'shop-banner' );
}

echo '<article class="btPostSingleItemStandard btWooCommerce gutter">';
	echo '<div class="port">';
		echo '<div class="btPostContentHolder">';
			?>
			<div class="container-fluid">
				<div class="row">
					<div class="<?php if(!is_product()) echo "col-md-9 col-lg-10"?>">
						<?php woocommerce_content(); ?>
					</div>
					<div class="col-md-3 col-lg-2" id="shop-product-filter">
						<?php if(!is_product()) { get_sidebar( 'shop' ); }?>
					</div>
				</div>
			</div>

			<?php
		
		echo '</div>';
	echo '</div>';
echo '</article>';

if (!is_archive()) {
	wc_get_template_part( 'partials/section', 'flexible-content' );
}

/*************** output related products ***************/
if (!is_archive()) {

global $product;

if( ! is_a( $product, 'WC_Product' ) ){
    $product = wc_get_product(get_the_id());
}

woocommerce_related_products( array(
    'posts_per_page' => 4,
    'columns'        => 4,
    'orderby'        => 'rand'
) );

}
/*************** output related products end ***************/

if ( is_product() && ( comments_open() || get_comments_number() ) ) {
	get_template_part( 'views/comments' );
}


get_footer(); 