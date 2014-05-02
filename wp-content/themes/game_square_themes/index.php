<?php
	get_header();
?>

<?php
	get_sidebar();
?>


<?php
	//the_post_thumbnail('featured');
	//the_post_thumbnail('post-thumb');
?>

<?php
	//get_template_part('index-loop');
?>

<section class="eleven columns row">
  <div class="flexslider">
	<ul class="slides">
		
		<?php
		query_posts(array('category_name' => 'Featured', 'posts_per_page' => 3));
		// if post make a loop to perform below task
		if(have_posts()) : while(have_posts()) : the_post();
		?>
	<!-- below will be repeat every time we have post-->
		  <li class="featured-game">
			<?php the_post_thumbnail('featured'); ?>
			<div class="caption">
				<a href="#" class="game-title"><?php the_title();?></a>
				<?php the_excerpt(); ?>
				<a href="#" class="playnow">Play Now</a>
			</div>
		  </li>
	  
		<?php
		    endwhile;
			endif;
			// reset the query , back to normal
			wp_reset_query();
		?>
	</ul>
  </div>
</section>


<?php
	get_footer();
?>