<?php 
/* Short and sweet */
define('WP_USE_THEMES', false);
require('./blog/wp-blog-header.php');
?>

<!-- BLOG -->	  
	  <div id="blog" class="container">
	    <h1>Blog <br><sub>Thoughts and Musings of an Engineer</sub></h1>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			 <h3 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<div class="meta"><?php _e("Filed under:"); ?> <?php the_category(',') ?> &#8212; <?php the_author() ?> @ <?php the_time() ?> <?php edit_post_link(__('Edit This')); ?></div>
			<div class="storycontent">
				<?php the_content(__('(more...)')); ?>
			</div>
			<div class="feedback">
					<?php wp_link_pages(); ?>
					<?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>
			</div>
		</div>
	  </div>