<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

      <section id="slider_wrapper">
          <div class="slider">
              <?php echo do_shortcode("[layerslider id=1]"); ?>
          </div>
      </section>

	   <div class="main">
          <div class="container triangles-of-section">
               <div class="triangle-up-left"></div>
               <div class="square-left"></div>
               <div class="triangle-up-right"></div>
               <div class="square-right"></div>
          </div>
          
          <section class="range_wrapper">
               <div class="container">
                    <div class="row">
                         <h2>Products Range</h2>
                         <div class="range">
                            <?php echo do_shortcode('[product_categories number="" columns="4" ids="7,8,9,10,11,12,13,14"]');  ?>
                         </div>
                    </div>
               </div>
          </section>

          <section class="content_section">
                <div class="container">
                    <h2>FOCUS ON CUSTOMER INDEED EQUIPMENTS</h2>
                    <p><?php query_posts('post_type=page&posts_per_page=1&page_id=4'); ?> 
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="text">
                      <?php echo excerpt(52); ?>
                      <?php endwhile;
                      //Reset Query
                      wp_reset_query(); ?> 
                    </p>   
                </div>
          </section>
      
          <section class="featured_section_wrapper">
              <div class="container triangles-of-section">
                    <div class="content-triangle-up-left"></div>
                    <div class="content-square-left"></div>
                    <div class="content-triangle-up-right"></div>
                    <div class="content-square-right"></div>
              </div>
               
              <div class="featured_section fadeInUp">
                    <div class="container">
                      <div class="row">
                          <h2 class="section_header text">Featured Products<small>we take pride in our products</small></h2>
                          
                          <div class="featured">
                              <?php echo do_shortcode('[featured_products per_page="4" columns="4"]');  ?>
                          </div>
                      </div>
                    </div>
              </div>
          </section>
         </div>
              <div class="logoslider-wrapper">
                  <div class="container">
                      <div class="row">                        
                          <h2 class="section_header text">Our valuable brands<small>all of them are top brands</small></h2>
                          <div class="col-md-12">
                            <div class="logoslider">                            
                                <?php echo do_shortcode('[print_thumbnail_slider]');  ?>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
              
          
     
          

      



<?php get_footer(); ?>
