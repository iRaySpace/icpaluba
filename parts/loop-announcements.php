<h2 class="page-title">Announcements</h2>

<?php
	
	// get the latest announcement
	$args = array(
		'posts_per_page' => '1',
		'category_name' => 'announcements',
	);

	// do some WordPress query
	$q = new WP_QUERY( $args );

	if( $q->have_posts() ):
		while( $q->have_posts() ):
			$q->the_post();
		
?>

<div class="large-8 columns">
	<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique autem, necessitatibus illo, non consequuntur laudantium veritatis blanditiis, dolores explicabo accusantium odio maiores. Assumenda saepe sunt eveniet, dolores repellendus totam exercitationem!</p>
	<a href="<?php the_permalink() ?>" class="button">Read more</a>
</div>

<?php 
	endwhile;
	wp_reset_postdata();
	endif;
?>

<div class="large-4 columns">
	Calendar
</div>