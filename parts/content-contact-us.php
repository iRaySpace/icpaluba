<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header">
		<h2 class="page-title"><?php the_title(); ?></h2>
	</header> <!-- end article header -->
					
    <section class="entry-content" itemprop="articleBody">
	    <div class="large-6 large-centered columns">
	    	<form action="#">
	    		Name:
	    		<input type="text" name="name">
	    		Email:
	    		<input type="text" name="email">
	    		Message:
	    		<textarea name="message" rows="10"></textarea>
	    		<input type="submit" class="button" value="Send">
	    	</form>
	    </div>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		
	</footer> <!-- end article footer -->
						    
	<?php comments_template(); ?>
					
</article> <!-- end article -->