<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>	 
		<div class="wrapper" style="margin-bottom:40px">
		<div class="main">
		<div class="blog-wrapper">

			
			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
		
		</div>
		</div>
		</div>
		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
