<?php
// integrate shortcode to visual composer
add_action( 'vc_before_init', 'hm_landing_header_vc' );
function hm_landing_header_vc() {
    if (function_exists('vc_map')) {
        vc_map(array(
            "name" => __("HelloMaaS Landing Header", "hellomaas"),
            "base" => "hm_landing_header",
            "class" => "",
            "category" => __("Content"),
            "params" => array(
                array(
                    "type" => "attach_image",
                    "class" => "",
                    "heading" => __( "Logo", "hellomaas" ),
                    "param_name" => "logo",
                    "value" => "",
                ),
                array(
                    "type" => "textfield",
                    "class" => "",
                    "heading" => __( "Button URL", "hellomaas" ),
                    "param_name" => "link",
                    "value" => "",
                ),
                array(
                    "type" => "textfield",
                    "class" => "",
                    "heading" => __( "Button title", "hellomaas" ),
                    "param_name" => "button_name",
                    "value" => "",
                ),
            )
        ));
    }
}

// Add shortcode
add_shortcode( 'hm_landing_header', 'hm_landing_header_callback' );
function hm_landing_header_callback( $atts) {
    extract( shortcode_atts( array(
        'logo' => '',
        'link' => '',
        'button_name' => ''
    ), $atts ) );
    ob_start(); ?>
    <div class="hm-landing-menu-wrap">

        <div class="hm-top-container">
            <?php
            wp_nav_menu(
                array(
                'theme_location'  => 'top-landing-menu'
                )
            );
            ?>
        </div>
        <div  class="hm-menu-container">
            <div>
                <a href="#">
                <?php if ($logo) :
                    $image = wp_get_attachment_image_src( $logo, 'full' ); ?>
                    <img src="<?php esc_attr_e($image[0])?>" alt="HelloMaaS Logo">
                <?php endif; ?>
                </a>
            </div>
            <div class="hm-landing-menu">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'landing-menu'
                    )
                );
                ?>
                <div class="hm-overlay"></div>
                <a href="<?php esc_attr_e($link);?>" class="hm-btn-small">
                    <?php esc_html_e($button_name);?>
                </a>
                <div class="menu-btn"></div>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}