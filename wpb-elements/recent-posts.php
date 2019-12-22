<?php
// integrate shortcode to visual composer
add_action( 'vc_before_init', 'hm_recent_posts_vc' );
function hm_recent_posts_vc() {
    if (function_exists('vc_map')) {
        vc_map(array(
            "name" => __("HelloMaaS recent_posts", "hellomaas"),
            "base" => "hm_recent_posts",
            "class" => "",
            "category" => __("Content"),
            "params" => array(
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "class" => "",
                    "heading" => __("Posts number", 'hellomaas'),
                    "param_name" => "posts_number",
                    "value" => "3",
                )
            )
        ));
    }
}

// Add shortcode
add_shortcode( 'hm_recent_posts', 'hm_recent_posts_callback' );
function hm_recent_posts_callback( $atts ) {
    extract( shortcode_atts( array(
        'posts_number' => '3',
    ), $atts ) );
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 12,
        'cat' => '8,7'
    );
    $query = new WP_Query($args);
    ob_start();
    ?>
    <div class="hm-recent-posts">
        <div class="owl-carousel">
        <?php while ($query->have_posts()) : $query->the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div>
                    <!-- post thumbnail -->
                    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail(array(404, 230, true) ); // Declare pixel size you need inside the array ?>
                        </a>
                    <?php endif; ?>
                    <!-- /post thumbnail -->
                </div>
                <div class="hm-post-body">
                    <div>
                        <!-- post title -->
                        <h3>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <!-- /post title -->

                        <!-- post details -->
                        <p class="hm-post-meta">
                            By <?php the_author(); ?> | <?php echo get_the_date('M j, Y'); ?>
                        </p>
                        <!-- /post details -->

                        <div class="hm-post-content">
                            <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
                        </div>
                    </div>
                    <div class="hm-post-more">
                        <a href="<?php the_permalink(); ?>">Read Full Article</a>
                        <div class="post-share">
                            <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?></div>
                    </div>
                </div>
            </article>
            <!-- /article -->

        <?php endwhile;?>
        </div>
    </div>
    <?php wp_reset_postdata();
    return ob_get_clean();
}

