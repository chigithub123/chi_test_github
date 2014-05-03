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
		$args  = array('category_name'=>'Featured', 'posts_per_page' => -1);
		$query = new WP_Query($args);
		// if post make a loop to perform below task
		 while($query->have_posts()) : $query->the_post();
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
			
			// reset the query , back to normal
			//wp_reset_query();
		?>
	</ul>
  </div>
</section>


<?php
	get_footer();
?>