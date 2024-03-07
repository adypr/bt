<?php

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action( 'woocommerce_before_main_content', function() {
    echo '<div id="primary" class="container btartp-theme">';
} );
add_action( 'woocommerce_after_main_content', function() {
    echo '</div>';
} );

// Change breadcrambs

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

add_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 9 );

add_action( 'woocommerce_sidebar', 'woocommerce_breadcrumb', 11 );