<?php
// integrate shortcode to visual composer
add_action( 'vc_before_init', 'hm_steps_vc' );
function hm_steps_vc() {
    if (function_exists('vc_map')) {
        vc_map(array(
            "name" => __("HelloMaaS steps", "hellomaas"),
            "base" => "hm_steps",
            "class" => "",
            "category" => __("Content"),
        ));
    }
}

// Add shortcode
add_shortcode( 'hm_steps', 'hm_steps_callback' );
function hm_steps_callback( $atts, $content) {
    extract( shortcode_atts( array(
        'photo' => '',
        'name' => '',
        'p_info' => '',
        'description' => '',
    ), $atts ) );
    ob_start(); ?>
    <div class="steps-holder">

        <div class="steps-left">
            <img src="<?php the_field('home_step_1_image'); ?>" class="step-imgs" id="first" style="display: block;" />
            <img src="<?php the_field('home_step_2_image'); ?>" class="step-imgs" id="second" />
            <img src="<?php the_field('home_step_3_image'); ?>" class="step-imgs" id="third" />
            <img src="<?php the_field('home_step_4_image'); ?>" class="step-imgs" id="forth" />
            <img src="<?php the_field('home_step_5_image'); ?>" class="step-imgs" id="fifth" />
        </div>
        <div class="steps-right">
            <div class="acc-bg active-acc-bg">

                <div class="accordion active" id="acc-first">

                    <div class="acc-num step-1">

                    </div>


                    <p class="acc-title">
                        <?php the_field('home_step_1_title'); ?>
                    </p>
                </div>
                <div class="panel show">
                    <p><?php the_field('home_step_1_text'); ?></p>
                </div>

            </div>

            <div class="acc-bg">

                <div class="accordion"  id="acc-second">

                    <div class="acc-num step-2">

                    </div>


                    <p class="acc-title">
                        <?php the_field('home_step_2_title'); ?>
                    </p>
                </div>
                <div class="panel">
                    <p><?php the_field('home_step_2_text'); ?></p>
                </div>

            </div>

            <div class="acc-bg">

                <div class="accordion" id="acc-third">

                    <div class="acc-num step-3">

                    </div>


                    <p class="acc-title">
                        <?php the_field('home_step_3_title'); ?>
                    </p>
                </div>
                <div class="panel">
                    <p><?php the_field('home_step_3_text'); ?></p>
                </div>

            </div>

            <div class="acc-bg">

                <div class="accordion" id="acc-forth">

                    <div class="acc-num step-4">

                    </div>


                    <p class="acc-title">
                        <?php the_field('home_step_4_title'); ?>
                    </p>
                </div>
                <div class="panel">
                    <p><?php the_field('home_step_4_text'); ?></p>
                </div>

            </div>

            <div class="acc-bg">

                <div class="accordion" id="acc-fifth">

                    <div class="acc-num step-5-home2">

                    </div>


                    <p class="acc-title">
                        <?php the_field('home_step_5_title'); ?>
                    </p>
                </div>
                <div class="panel last-panel">
                    <p><?php the_field('home_step_5_text'); ?></p>
                </div>

            </div
        </div>
    </div>
    <?php
    return ob_get_clean();
}

