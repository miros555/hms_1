<?php /* Template Name: Team */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="main-banner team-page">
			
		
				<h1 class="page-heading">
					<?php the_field('taem_page_heading'); ?>
				</h1>
				<p class="page-subheading">
						<?php the_field('taem_page_subheading'); ?>		
				</p>
				<div class="section-holder">
					
					
					<?php
    $loop = new WP_Query( array(
    	'post_type' => 'html5-blank',
        'meta_key' => 'team_order',
		'orderby' => 'meta_value',
        'order' => 'ASC'
        ) );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="team-member">
				<div class="team-member-holder">
					
				
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="team-img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php } ?>
                
                    <h4><?php echo get_the_title(); ?></h4>
					<p class="team-job-title">
						<span><?php the_field('team_job_title_1'); ?></span><br>
						<?php the_field('team_job_title_2'); ?>
					</p>
					<p class="team-city">
						<?php the_field('team_city_1'); ?><br>
						<?php the_field('team_city_2'); ?>
					</p>

					<div class="team-description">
						<?php the_field('team_description'); ?>
					</div>
                
					</div>
				<div class="team-tags">
						<?php the_field('team_tags'); ?>
				</div>
				<div class="team-member-below">
					
				</div>
            </div>
			
        <?php endwhile; ?>
            
        <?php endif;
    wp_reset_postdata();
?>
					
					
			</div>
			
		</section>
		
		
		
		<!-- /section -->
	</main>
<script src="/wp-content/themes/HelloMaasWP/js/accoridion.js"></script>

<?php get_footer(); ?>