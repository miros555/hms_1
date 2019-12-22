<?php /* Template Name: Partners */ get_header(); ?>
<script>					
/**					
* Function that tracks a click on an outbound link in Analytics.					
* This function takes a valid URL string as an argument, and uses that URL string					
* as the event label. Setting the transport method to 'beacon' lets the hit be sent					
* using 'navigator.sendBeacon' in browser that support it.					
*/					
var trackOutboundLink = function(url) {					
ga('send', 'event', 'outbound', 'click', url, {					
transport': 'beacon',					
hitCallback': function(){document.location = url;}					
});					
}					
</script>					
	<main role="main">
		<!-- section -->
		
			<section class="main-banner partners">
			
				<h1>
				Partners			
				</h1>
			
			</section>
		<section class="section-holder">
		<div class="partner-box orange-box">
			<div class="partner-logo">
				<img src="<?php the_field('partner_logo'); ?>" />
				<p>
				<?php the_field('partner_location'); ?>	
				</p>
				<a href="https://<?php the_field('partner_website'); ?>" target="_blank" onclick="trackOutboundLink('http://<?php the_field('partner_website'); ?>'); return false;"><?php the_field('partner_website'); ?></a>
			</div>
			<div class="partner-text orange">
				<div class="partner-top">
					<h3>
						<?php the_field('partner_name'); ?>
					</h3>
					<p>
						<?php the_field('partner_description'); ?>
					</p>
				</div>
				<div class="partner-bottom">
					<h3>
						<?php _e('Why we are a partner of HelloMaas?','HelloMaasWP'); ?>
					</h3>
					<p>
						<?php the_field('why_were_a_partner_of_hellomaas'); ?>
					</p>
				</div>
			</div>
			</div>
			
			<div class="partner-box blue-box">
				<div class="partner-logo">
				<img src="<?php the_field('partner_logo2'); ?>" />
				<p>
				<?php the_field('partner_location2'); ?>	
				</p>
				<a href="https://<?php the_field('partner_website2'); ?>" target="_blank" onclick="trackOutboundLink('http://<?php the_field('partner_website2'); ?>'); return false;"><?php the_field('partner_website2'); ?></a>
			</div>
				<div class="partner-text blue">
				<div class="partner-top">
					<h3>
						<?php the_field('partner_name2'); ?>
					</h3>
					<p>
						<?php the_field('partner_description2'); ?>
					</p>
				</div>
				<div class="partner-bottom">
					<h3>
						<?php _e('Why we are a partner of HelloMaas?','HelloMaasWP'); ?>
					</h3>
					<p>
						<?php the_field('why_were_a_partner_of_hellomaas2'); ?>
					</p>
				</div>
			</div>
			
			
			</div>
		
		</section>
		
		
			

		
		<!-- /section -->
	</main>


<?php get_footer(); ?>
