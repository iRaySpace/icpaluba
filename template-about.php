<?php
/*
Template Name: About page
*/
?>

<?php get_header(); ?>
	
	<div id="hero" class="small">

		<div id="inner-hero" class="row">
			
			<div class="large-12 columns">
				
				<h2>Know the history</h2>
				
				<p>We unfold the bits of how Immaculate Conception Parish of Aluba was made in the first place.</p>

			</div>

		</div> <!-- end of #inner-hero -->

	</div> <!-- end of #hero -->
		
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/content', 'misvis' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		    
		</div> <!-- end #inner-content -->
	
		<div id="history">
	    	
	    	<?php get_template_part( 'parts/content', 'history' ); ?>

		</div>

	</div> <!-- end #content -->

<?php get_footer(); ?>
