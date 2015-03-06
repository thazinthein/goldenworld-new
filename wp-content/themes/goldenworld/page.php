<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>



         
<div class="body container">
	<div class="main productarchive-wrapper">
		<div class="row">
			<div class="col-md-9">
				
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="pagewrapper">	
						<article class="post" id="post-<?php the_ID(); ?>">

							
									
								<?php the_content(); ?>						

							

							<?php edit_post_link(__('Edit this entry','html5reset'), '<p>', '</p>'); ?>

						</article>				
						
						</div>
					<?php endwhile; endif; ?>
				
			</div>

			<div class="col-md-3">
				<div id="sidebar">
					<div id="recent-posts-3" class="widget widget_recent_entries">		
						<h3 class="widgettitle">Products Categories</h3>		
							<nav class="rightnav" role="navigation">
								<?php wp_nav_menu(array('menu'=> 'right-nav'));?>
							</nav>
					</div> <!-- end .widget --><!-- end .widget -->								
								
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage-random') ) : endif; ?>
								
				</div>
			</div>

		</div>
	</div>
</div>



<?php get_footer(); ?>
