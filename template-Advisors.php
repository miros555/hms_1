<?php /* Template Name: Advisors Page Template */ get_header(); ?>
<script src="/wp-content/themes/HelloMaasWP/js/advisors-tabs.js"></script>
	<main role="main">
		<!-- section -->
		<section class="main-banner team-page">
			
		
				<h1 class="page-heading">
					<?php the_field('banner_title'); ?>
				</h1>
				<p class="page-subheading">
						<?php the_field('banner_text'); ?>		
				</p>
				<div class="section-holder advisor-board">
					
					
					<?php
					$i = 1;
    $loop = new WP_Query( array( 'post_type' => 'advisors-posts' ) );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="team-member">
				
					
				
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="team-img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php } ?>
                
                    <h4><?php echo get_the_title(); ?></h4>
					<p class="advisor-location">
						<?php the_field('location'); ?>
					</p>
					<div class="advisor-tabs">
						<div class="tablinks tablinks<?php echo $i; ?> active" onclick="openTab<?php echo $i; ?>(event, 'info<?php echo $i; ?>')">
							<p>
								Bio
							</p>
						</div>
						<div class="tablinks tablinks<?php echo $i; ?>" onclick="openTab<?php echo $i; ?>(event, 'quote<?php echo $i; ?>')">
							<p>
								Quote
							</p>
						</div>
							<div id="info<?php echo $i; ?>" class="tabcontent tabcontent<?php echo $i; ?>" style="display:block;">
								<p>
									<?php the_field('info_tab_text'); ?>
								</p>
							</div>
						<div id="quote<?php echo $i; ?>" class="tabcontent tabcontent<?php echo $i; ?>">
								<p>
									<?php the_field('quote_tab_text'); ?>
								</p>
							</div>
					</div>
					<div class="advisor-tags">
						<?php the_field('tags'); ?>
					</div>
                
					
				
            </div>
			 <?php $i++; ?>
        <?php endwhile; ?>
            
        <?php endif;
    wp_reset_postdata();
?>
					
					
			</div>
			
		</section>
	</main>



<?php get_footer(); ?>
