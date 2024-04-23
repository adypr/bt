<?php 
global $product;
?>

<li <?php wc_product_class( 'work', $product ); ?>>
    <a href="<?php the_permalink(); ?>" class="work__link woocommerce-LoopProduct-link woocommerce-loop-product__link">
        <div class="work__container">
            <?php echo btartp_thumb(); ?>
        </div>    
        <div class="work__description">
            <h3 class="work__title"><?php the_title(); ?></h3>
            <p class="work__price"><?php echo $product->get_price_html(); ?></p>
        </div>
        <?php echo do_shortcode('[ti_wishlists_addtowishlist loop=yes]'); ?>
    </a>
</li>