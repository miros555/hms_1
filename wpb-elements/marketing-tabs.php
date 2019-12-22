<?php
// integrate shortcode to visual composer
add_action( 'vc_before_init', 'hm_marketing_tabs_vc' );
function hm_marketing_tabs_vc() {
    if (function_exists('vc_map')) {
        vc_map(array(
            "name" => __("HelloMaaS Marketing Tabs", "hellomaas"),
            "base" => "hm_marketing_tabs",
            "class" => "",
            "category" => __("Content"),
            "params" => array(
                array(
                    "type" => "attach_image",
                    "class" => "",
                    "heading" => __( "Image 1", "hellomaas" ),
                    "param_name" => "image1",
                    "value" => "",
                ),
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "class" => "",
                    "heading" => __("First Section Title", 'hellomaas'),
                    "param_name" => "title1",
                    "value" => "",
                ),
                array(
                    "type" => "textarea",
                    "holder" => "div",
                    "class" => "",
                    "heading" => __("First Section Description", 'hellomaas'),
                    "param_name" => "description1",
                    "value" => "",
                ),
                array(
                    "type" => "attach_image",
                    "class" => "",
                    "heading" => __( "Image 2", "hellomaas" ),
                    "param_name" => "image2",
                    "value" => "",
                ),
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "class" => "",
                    "heading" => __("Second Section Title", 'hellomaas'),
                    "param_name" => "title2",
                    "value" => "",
                ),
                array(
                    "type" => "textarea",
                    "holder" => "div",
                    "class" => "",
                    "heading" => __("Second Section Description", 'hellomaas'),
                    "param_name" => "description2",
                    "value" => "",
                ),
                array(
                    "type" => "attach_image",
                    "class" => "",
                    "heading" => __( "Image 3", "hellomaas" ),
                    "param_name" => "image3",
                    "value" => "",
                ),
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "class" => "",
                    "heading" => __("Third Section Title", 'hellomaas'),
                    "param_name" => "title3",
                    "value" => "",
                ),
                array(
                    "type" => "textarea",
                    "holder" => "div",
                    "class" => "",
                    "heading" => __("Third Section Description", 'hellomaas'),
                    "param_name" => "description3",
                    "value" => "",
                ),
            )
        ));
    }
}

// Add shortcode
add_shortcode( 'hm_marketing_tabs', 'hm_marketing_tabs_callback' );
function hm_marketing_tabs_callback( $atts) {
    extract( shortcode_atts( array(
        'image1' => '',
        'title1' => '',
        'description1' => '',
        'image2' => '',
        'title2' => '',
        'description2' => '',
        'image3' => '',
        'title3' => '',
        'description3' => '',
    ), $atts ) );
    ob_start(); ?>
    <div class="marketing-tabs">
        <!-- Tab content -->
        <?php for ($i = 1; $i <= 3; $i++) : ?>
            <div id="marketing-tab-<?=$i?>" class="tabcontent">
                <div class="marketing-tab-image">
                <?php if (${'image'.$i}) :
                $image = wp_get_attachment_image_src( ${'image'.$i}, 'full' ); ?>
                    <img src="<?php esc_attr_e($image[0])?>" alt="<?php esc_attr_e($title1); ?>">
                <?php endif?>
                </div>
            </div>
        <?php endfor; ?>
        <!-- Tab links -->
        <div class="hm-tab">
            <?php for ($i = 1; $i <= 3; $i++) : ?>
            <div class="tablinks <?php if($i == 1) echo 'active'?>" onclick="openTab(event, 'marketing-tab-' + <?=$i?> )">
                <h3><?=${'title'.$i} ?></h3>
                <p><?=${'description'.$i} ?></p>
            </div>
            <?php endfor; ?>
        </div>
    </div>

    <?php
    return ob_get_clean();
}
