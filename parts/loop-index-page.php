<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<header class="article-header">
		<h2 class="page-title">Announcements</h2>
	</header> <!-- end article header -->

    <section class="entry-content" itemprop="articleBody">
    	<div class="large-8 columns">
	    	<h3><a href="#">Simple news</a></h3>
	    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, vitae perspiciatis in repellendus minima, beatae aut harum mollitia necessitatibus omnis, perferendis rerum obcaecati facilis autem nobis id optio illo ratione!</p>
	    	<a href="#" class="button">Read more</a>
		</div>
		<div class="large-4 columns">
			Calendar
		</div>
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		
	</footer> <!-- end article footer -->
						    
	<?php comments_template(); ?>
					
</article> <!-- end article -->