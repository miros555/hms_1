<?php
// integrate shortcode to visual composer
add_action( 'vc_before_init', 'hm_landing_footer_vc' );
function hm_landing_footer_vc() {
    if (function_exists('vc_map')) {
        vc_map(array(
            "name" => __("HelloMaaS Landing Footer", "hellomaas"),
            "base" => "hm_landing_footer",
            "class" => "",
            "category" => __("Content"),
            "params" => array(
                array(
                    "type" => "textarea",
                    "holder" => "div",
                    "class" => "",
                    "heading" => __("First column text", 'hellomaas'),
                    "param_name" => "first_text"
                ),
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "class" => "",
                    "heading" => __("Button title", 'hellomaas'),
                    "param_name" => "btn_title"
                ),
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "class" => "",
                    "heading" => __("Button link", 'hellomaas'),
                    "param_name" => "btn_url"
                ),
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "class" => "",
                    "heading" => __("Copyright text", 'hellomaas'),
                    "param_name" => "copyright"
                ),
            )
        ));
    }
}

// Add shortcode
add_shortcode( 'hm_landing_footer', 'hm_landing_footer_callback' );
function hm_landing_footer_callback( $atts) {
    extract( shortcode_atts( array(
        'first_text' => '',
        'btn_title' => '',
        'btn_url' => '',
        'copyright' => ''
    ), $atts ) );
    ob_start(); ?>
    <footer class="hm-footer-wrap">
        <div class="hm-footer-top">
            <div>
                <h3><?=$first_text?></h3>
                <a href="<?php esc_attr_e($btn_url); ?>" class="hm-btn hm-btn-orange">
                    <?php esc_html_e($btn_title) ?>
                </a>
            </div>
            <div>
                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
            </div>
            <div>
                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-3')) ?>
            </div>
            <div>
                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-4')) ?>
            </div>
        </div>
        <hr/>
        <div class="hm-footer-bottom-wrap">
            <div class="hm-footer-bottom">
                <p class="hm-copyright">
                    &copy; <?php echo date('Y'); ?> <?php esc_html_e($copyright);?>
                </p>
                <p class="hm-footer-bottom-nav">
                    <a href="/terms-of-service/"><?php _e('Terms of Service','HelloMaasWP'); ?></a>
                    <a href="/cookie-policy/"><?php _e('Cookie Policy','HelloMaasWP'); ?></a>
                    <a href="/privacy-policy/"><?php _e('Privacy Policy','HelloMaasWP'); ?></a>
                </p>
            </div>
        </div>
    </footer>
    <?php
    return ob_get_clean();
}