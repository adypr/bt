<?php

function btartp_admin_scripts() {
    wp_enqueue_style( 'btartp-dashboard-styles', get_template_directory_uri(  ). '/assets/admin-main.css' );
}

add_action( 'admin_enqueue_scripts',  'btartp_admin_scripts');


function btartp_add_sizes_cb($post) {
    
    wp_nonce_field( 'btartp_sizes_action', 'btartp_sizes_nonce' );


    $width = get_post_meta( $post->ID,  'art__width', true);
    $height = get_post_meta( $post->ID,  'art__height', true);
    $depth = get_post_meta( $post->ID,  'art__depth', true);

    ?>

    <table class="form-table">
        <tr>
            <th><label for="art__width">Width, cm </label></th>
            <th><label for="art__height">Height, cm</label></th>
            <th><label for="art__depth">Depth, cm</label></th>
        </tr>
        <tr>
            <td><input type="number" min="0" id="art__width" name="art__width" class="metabox__input" value="<?php echo esc_attr($width); ?>"></td>
            <td><input type="number" min="0" id="art__height" name="art__height" class="metabox__input" value="<?php echo esc_attr($height); ?>"></td>
            <td><input type="number" min="0" id="art__depth" name="art__depth" class="metabox__input" value="<?php echo esc_attr($depth); ?>"></td>
        </tr>
    </table>
    <?php
}

function btartp_metabox_sizes() {
    add_meta_box('art_sizes', 'Sizes', 'btartp_add_sizes_cb', ['product'], 'normal');
}

add_action('add_meta_boxes', 'btartp_metabox_sizes');

function btartp_save_metabox_sizes ($post_id) {

    if (!isset($_POST['btartp_sizes_nonce']) || !wp_verify_nonce( $_POST['btartp_sizes_nonce'], 'btartp_sizes_action' )) {
        return;
    }
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
        return;
    }
    if( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if (!empty($_POST['art__width'])) {
        update_post_meta($post_id, 'art__width', sanitize_text_field($_POST['art__width']));
    }
    else {
        delete_post_meta($post_id, 'art__width');
    }

    if (!empty($_POST['art__height'])) {
        update_post_meta($post_id, 'art__height', sanitize_text_field($_POST['art__height']));
    }
    else {
        delete_post_meta($post_id, 'art__height');
    }

    if (!empty($_POST['art__depth'])) {
        update_post_meta($post_id, 'art__depth', sanitize_text_field($_POST['art__depth']));
    }
    else {
        delete_post_meta($post_id, 'art__depth');
    }
}
add_action( 'save_post',  'btartp_save_metabox_sizes');


// Metabox materials
function btartp_add_materials_cb($post) {
    
    wp_nonce_field( 'btartp_materials_action', 'btartp_materials_nonce' );

    $base = get_post_meta( $post->ID,  'art__base', true);
    $materials = get_post_meta( $post->ID,  'art__materials', true);

    ?>

    <table class="form-table">
        <tr>
            <th><label for="art__base">Base: </label></th>
            <td><input type="text" name="art__base" id="art__base" class="metabox__input_materials" value="<?php echo esc_attr($base); ?>"></td>
        </tr>
        <tr>
            <th><label for="art__materials">Materials: </label></th>
            <td><input type="text" name="art__materials" id="art__materials" class="metabox__input_materials" value="<?php echo esc_attr($materials); ?>"></td>
        </tr>
    </table>
    <?php
}

function btartp_metabox_materials() {
    add_meta_box('art_materials', 'Materials', 'btartp_add_materials_cb', ['product'], 'normal');
}

add_action('add_meta_boxes', 'btartp_metabox_materials');

function btartp_save_metabox_materials ($post_id) {

    if (!isset($_POST['btartp_materials_nonce']) || !wp_verify_nonce( $_POST['btartp_materials_nonce'], 'btartp_materials_action' )) {
        return;
    }
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
        return;
    }
    if( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if (!empty($_POST['art__base'])) {
        update_post_meta($post_id, 'art__base', sanitize_text_field($_POST['art__base']));
    }
    else {
        delete_post_meta($post_id, 'art__base');
    }

    if (!empty($_POST['art__materials'])) {
        update_post_meta($post_id, 'art__materials', sanitize_text_field($_POST['art__materials']));
    }
    else {
        delete_post_meta($post_id, 'art__materials');
    }

}
add_action( 'save_post',  'btartp_save_metabox_materials');