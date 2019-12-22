<?php
// integrate shortcode to visual composer
add_action( 'vc_before_init', 'hm_author_vc' );
function hm_author_vc() {
    if (function_exists('vc_map')) {
        vc_map(array(
            "name" => __("HelloMaaS Author", "hellomaas"),
            "base" => "hm_author",
            "class" => "",
            "category" => __("Content"),
            "params" => array(
                array(
                    "type" => "attach_image",
                    "class" => "",
                    "heading" => __( "Photo", "hellomaas" ),
                    "param_name" => "photo",
                    "value" => "",
                ),
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "class" => "",
                    "heading" => __("Name", 'hellomaas'),
                    "param_name" => "name"
                ),
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "class" => "",
                    "heading" => __("P Info", 'hellomaas'),
                    "param_name" => "p_info"
                ),
                array(
                    "type" => "textarea_html",
                    "holder" => "div",
                    "class" => "",
                    "heading" => __("Description", 'hellomaas'),
                    "param_name" => "content"
                )
            )
        ));
    }
}

// Add shortcode
add_shortcode( 'hm_author', 'hm_author_callback' );
function hm_author_callback( $atts, $content) {
    extract( shortcode_atts( array(
        'photo' => '',
        'name' => '',
        'p_info' => '',
        'description' => '',
    ), $atts ) );
    ob_start(); ?>
    <div class="hm-author">
        <div>
            <?php if ($photo) :
                $image = wp_get_attachment_image_src( $photo, 'full' ); ?>
                <img src="<?php esc_attr_e($image[0])?>" alt="<?php esc_attr_e($atts['name']); ?>">
            <?php endif; ?>
        </div>
        <h4>
            <?= esc_html($name) ?>
        </h4>
        <h3>
            <?= esc_html($p_info) ?>
        </h3>
        <div>
            <?= $content ?>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

