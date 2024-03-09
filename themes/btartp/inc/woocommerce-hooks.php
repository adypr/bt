<?php

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

add_filter('woocommerce_add_to_cart_fragments', function($fragments) {
    $fragments['.mini-cart-cnt'] = '<span class="header_count mini-cart-cnt">'.count(WC()->cart->get_cart()) .'</span>';
    return $fragments;
});
