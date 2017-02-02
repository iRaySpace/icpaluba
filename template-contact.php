<?php
/*
Template Name: Contact page
*/
?>

<?php get_header(); ?>
	
	<div id="hero" class="small">
		<!-- should be small -->
		<div id="inner-hero" class="row">
			
			<div class="large-12 columns">
				
				<h2>Let us get in touch!</h2>
				
				<p>Together, let's get evangelize!</p>

			</div>

		</div> <!-- end of #inner-hero -->

	</div> <!-- end of #hero -->
		
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/content', 'contact-us' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
