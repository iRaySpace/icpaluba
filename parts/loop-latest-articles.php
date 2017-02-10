<h2 class="page-title">Latest Articles</h2>

<?php 
	
	$args = array(
		'posts_per_page' => 3,
		'category_name__not_in' => 'announcements'
	);

	$q = new WP_QUERY( $args );

	if( $q->have_posts() ):
		while( $q->have_posts() ):
			$q->the_post();

 ?>

<div class="large-4 columns">
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>	
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis non vero magnam fugit animi nobis molestiae laborum et quidem ducimus ratione officiis dolore explicabo sapiente, voluptatibus repellat. Commodi quo, dolor.</p>
	<a href="<?php the_permalink(); ?>">Read more</a>
</div>

<?php 
	endwhile;
	wp_reset_postdata();
	endif;
?>

<!-- 
<div class="large-4 columns">
	<h3><a href="#">Second Article</a></h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos illo adipisci expedita ab nulla est impedit, neque architecto, rerum repudiandae maiores, mollitia ipsam porro velit, quidem autem. Beatae, voluptatum sint.</p>
	<a href="#">Read more</a>
	
</div>
<div class="large-4 columns">
	<h3><a href="#">Third Article</a></h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim saepe, impedit ipsam accusantium iure consectetur officia rem nemo eaque. Hic ea, molestiae quo a esse, sit alias rem modi culpa.</p>
	<a href="#">Read more</a>
</div> -->