<?php

add_filter('woocommerce_add_to_cart_fragments', function($fragments) {
    $fragments['.mini-cart-cnt'] = '<span class="header_count mini-cart-cnt">'.count(WC()->cart->get_cart()) .'</span>';
    return $fragments;
});


function wp_kama_woocommerce_cart_product_cannot_add_another_message_filter( $message, $product_data ){
	$message = 'You have already added '. $product_data->name . ' to your cart';
	return $message;
}
add_filter( 'woocommerce_cart_product_cannot_add_another_message', 'wp_kama_woocommerce_cart_product_cannot_add_another_message_filter', 10, 2 );

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 70 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
add_action( 'woocommerce_after_single_product',  'woocommerce_output_related_products', 9);


remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

