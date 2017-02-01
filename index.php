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
			
			<div class="row">
				
				<div class="large-6 columns">

					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1973.217974556576!2d124.6466333!3d8.456916!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32ff8d26a22e0471%3A0xb12dd0ab19955a96!2sImmaculate+Conception+Parish!5e0!3m2!1sen!2sph!4v1485942440566" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>	

				</div>

				<div class="large-6 columns">
					
					<form action="#">
						Name
						<input type="text" name="name" placeholder="Enter your name">
						Email Address
						<input type="text" name="email_address" placeholder="Enter your email address">
						Message
						<textarea name="message" placeholder="Enter your concerns"></textarea>
						<input type="text" class="button success" value="Submit">
					</form>
				</div>	

			</div>

		</div> <!-- end #church-map -->

	</div> <!-- end #content -->
	

<?php get_footer(); ?>