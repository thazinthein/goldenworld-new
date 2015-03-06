<?php //This part is required for WordPress to recognize it as a page template
/*
Template Name: product categories
*/
?>
<?php get_header();  ?>
    <div class="body container">
      <div class="main productarchive-wrapper">
        <div class="row">
          <div class="col-md-9">
            <div class="pagewrapper brands">
                  
                <h2 class="page-title"><?php the_title(); ?></h2>
                <?php echo do_shortcode('[product_categories number="" columns="3" ids="7,8,13,9,10,14,11,12"]');  ?>

                        
                  <?php //echo do_shortcode('[product_categories number="" columns="3" ids="13,8,11,16,14,15,12,10,9"]');  ?>
                      <!--<h3>Products Brands</h3>-->
                  
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

<?php get_footer(); ?>
 
 
 