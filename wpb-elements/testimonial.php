<?php
// integrate shortcode to visual composer
add_action( 'vc_before_init', 'hm_testimonial_vc' );
function hm_testimonial_vc() {
    if (function_exists('vc_map')) {
        vc_map(array(
            "name" => __("HelloMaaS Testimonial", "hellomaas"),
            "base" => "hm_testimonial",
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
                    "heading" => __("Name and position", 'hellomaas'),
                    "param_name" => "name"
                ),
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "class" => "",
                    "heading" => __("Company Name", 'hellomaas'),
                    "param_name" => "company_name"
                ),
                array(
                    "type" => "attach_image",
                    "class" => "",
                    "heading" => __( "Company Logo", "hellomaas" ),
                    "param_name" => "company_logo",
                    "value" => "",
                ),
                array(
                    "type" => "textarea",
                    "holder" => "div",
                    "class" => "",
                    "heading" => __("Testimonial", 'hellomaas'),
                    "param_name" => "description"
                )
            )
        ));
    }
}

// Add shortcode
add_shortcode( 'hm_testimonial', 'hm_testimonial_callback' );
function hm_testimonial_callback( $atts ) {
    extract( shortcode_atts( array(
        'photo' => '',
        'name' => '',
        'company_name' => '',
        'description' => '',
        'company_logo' => ''
    ), $atts ) );
    ob_start(); ?>
    <div class="hm-testimonial">
        <div>
            <?php if ($photo) :
                $image = wp_get_attachment_image_src( $photo, 'full' ); ?>
                <img src="<?php esc_attr_e($image[0])?>" alt="<?php esc_attr_e($atts['name']); ?>">
            <?php endif; ?>
        </div>
        <div>
            <div class="hm-testimonial-text">
                <p>
                    <?= esc_html($description) ?>
                </p>
                <div class="hm-testimonial-company">
                    <div>
                        <span>
                            <?= esc_html($name) ?>
                        </span>
                        <span>
                            <?= esc_html($company_name) ?>
                        </span>
                    </div>
                    <div>
                        <?php if ($company_logo) :
                            $image = wp_get_attachment_image_src( $company_logo, 'full' ); ?>
                            <img src="<?php esc_attr_e($image[0])?>" alt="<?php esc_attr_e($atts['company_name']); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}