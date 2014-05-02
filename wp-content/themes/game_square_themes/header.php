<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php
//?????????????????????????????
// 			wp_title('|','true','right');
// definiation of wp_ function () such as wp_enqueue_script("jquery"); wp_head()
// can't downlaod skeleton.css from skeleton webpage
//???????????????????????????????????????	
				wp_title('|','true','right');
				bloginfo('name');
			?>
		</title>
		<!-- place this jquery above wp_head()-->
		<!-- whatever script we call right here, wordpress will add it into queue so it makes sure which one has been loaded or not. if already, it
		make sure will not load again-->
		<?php wp_enqueue_script("jquery");?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/skeleton.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/flexslider.css" />
		<?php wp_head();?>
		
	</head>	
	<body>
		<div class="container">
			<header>
			<!-- "five columns" means the width of the div-->
			<!-- five columns is the function from skeleton.css which has been design to design px (table) int he page-->
				<div class = "five columns">
					<a href="<?php echo get_option('home');?>"><img src="<?php bloginfo('template_url');?>/img/logo.png" title="<?php bloginfo('title');?>"</a>
				</div>
				
				
				<!-- "sixteen columns" means the width of the div-->
				<div class="sixteen columns main-nav" id="show-nav">
					<a href="#">Toggle Navigation</a>
				</div>
				<div class="sixteen columns" id="close-nav">
					<a href="#">Close</a>
				</div>
				
				
				<div class="sixteen columns nav-bar">
					<?php 
						wp_nav_menu(array('container_class'=>'main-nav','container'=>'nav'));
					?>
				
				</div>
			</header>
		</div>
		
		<!-- here is jquery-->
		<script>
				<!-- when #show-nav on click run this function-->
				jQuery("#show-nav").click(function()
				{
				<!-- when i click show-nav id, i want it display main-nav slowly-->
				<!-- as we put wp_jQuery above anything else so it will be top priority when it conflict with css-->
					jQuery(".main-nav").toggle("slow");
					jQuery("#close-nav").show("slow");
				});
				
				jQuery("#close-nav").click(function()
				{
					jQuery(".main-nav").toggle("slow");
					jQuery("#close-nav").hide("slow");
				});
				
			</script>
	</body>
</html>