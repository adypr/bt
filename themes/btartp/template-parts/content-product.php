<?php 
global $product;
?>

<li <?php wc_product_class( 'work', $product ); ?>>
    <a href="<?php the_permalink(); ?>" class="work__link woocommerce-LoopProduct-link woocommerce-loop-product__link">
        <?php echo btartp_thumb(); ?>
        <div class="work__description">
            <h3 class="work__title"><?php the_title(); ?></h3>
            <p class="work__price">$<?php echo $product->get_price(); ?></p>
        </div>
    </a>
</li>