<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header( 'shop' ); ?>

<div class="body container">
	<div class="main productarchive-wrapper">
		<div class="row">
			<div class="col-md-9">
				<div class="productarchive">
					<?php
						/**
						 * woocommerce_before_main_content hook
						 *
						 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
						 * @hooked woocommerce_breadcrumb - 20
						 */
						do_action( 'woocommerce_before_main_content' );
					?>

						<?php while ( have_posts() ) : the_post(); ?>

							<?php wc_get_template_part( 'content', 'single-product' ); ?>

						<?php endwhile; // end of the loop. ?>

					<?php
						/**
						 * woocommerce_after_main_content hook
						 *
						 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
						 */
						do_action( 'woocommerce_after_main_content' );
					?>
				</div>
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
	
<?php get_footer( 'shop' ); ?>