<?php
// integrate shortcode to visual composer
add_action( 'vc_before_init', 'hm_step_5ps_vc' );
function hm_step_5ps_vc() {
    if (function_exists('vc_map')) {
        vc_map(array(
            "name" => __("HelloMaaS 5p's step", "hellomaas"),
            "base" => "hm_step_5ps",
            "class" => "",
            "category" => __("Content"),
            "params" => array(
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "class" => "",
                    "heading" => __("Step Title", 'hellomaas'),
                    "param_name" => "title"
                ),
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "class" => "",
                    "heading" => __("Step Number", 'hellomaas'),
                    "param_name" => "step_number"
                ),
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "class" => "",
                    "heading" => __("Description", 'hellomaas'),
                    "param_name" => "description"
                ),
                array(
                    "type" => "colorpicker",
                    "class" => "",
                    "heading" => __( "First letter color", "hellomaas" ),
                    "param_name" => "letter_color",
                    "value" => '#FF0000',
                )
            )
        ));
    }
}

// Add shortcode
add_shortcode( 'hm_step_5ps', 'hm_step_5ps_callback' );
function hm_step_5ps_callback( $atts ) {
    extract( shortcode_atts( array(
        'title' => '',
        'step_number' => '',
        'description' => '',
        'letter_color' => '',
    ), $atts ) );
    $letter = $title{0};
    $title = substr($title, 1);
    ob_start(); ?>
    <div class="step-5ps">
        <div>
            <span style="color: <?=esc_attr($letter_color)?>"><?=$letter?></span><?= esc_html($title) ?>
        </div>
        <div class="step-number">
            <?= esc_html($step_number) ?>
        </div>
        <div>
            <?= esc_html($description) ?>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

