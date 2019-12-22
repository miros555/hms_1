<?php
// integrate shortcode to visual composer
add_action( 'vc_before_init', 'hm_gallery_vc' );
function hm_gallery_vc() {
    if (function_exists('vc_map')) {
        vc_map(array(
            "name" => __("HelloMaaS Logo Gallery", "hellomaas"),
            "base" => "hm_gallery",
            "class" => "",
            "category" => __("Content"),
            "params" => array(
                array(
                    "type" => "attach_images",
                    "class" => "",
                    "heading" => __( "Logos", "hellomaas" ),
                    "param_name" => "photos",
                    "value" => "",
                )
            )
        ));
    }
}

// Add shortcode
add_shortcode( 'hm_gallery', 'hm_gallery_callback' );
function hm_gallery_callback( $atts ) {
    extract( shortcode_atts( array(
        'photos' => '',
    ), $atts ) );
    ob_start(); ?>
    <div class="hm-gallery">
    <?php if ($photos) :
        $photos = explode(',',$photos);
        foreach ($photos as $photo) :
            $image = wp_get_attachment_image_src( $photo, 'full' ); ?>
            <div>
                <img src="<?php esc_attr_e($image[0])?>" alt="Company logo">
            </div>
        <?php endforeach;
    endif; ?>
    </div>
    <?php
    return ob_get_clean();
}

