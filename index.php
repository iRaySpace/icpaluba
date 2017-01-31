<?php get_header(); ?>
	
	<div id="hero">

		<div id="inner-hero" class="row">
			
			<div class="large-12 columns">
				
				<h2>Lorem ipsum</h2>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores, dolorem quaerat dolores adipisci enim explicabo eveniet ab cupiditate deleniti nisi, eligendi voluptatem voluptas obcaecati? Blanditiis asperiores eos soluta! Inventore.</p>

			</div>

		</div> <!-- end of #inner-hero -->

	</div> <!-- end of #hero -->

	<div id="content">

		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
				
				<?php get_template_part( 'parts/loop', 'announcements' ); ?>

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
		
		<div id="article-list">
			
			<div class="row">

				<?php get_template_part( 'parts/loop', 'latest-articles' ); ?>

			</div>

		</div> <!-- end #article-list -->	
		
		<div id="church-map">
			
			use google maps
				
		</div>

	</div> <!-- end #content -->

<?php get_footer(); ?>