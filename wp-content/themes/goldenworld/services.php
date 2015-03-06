<?php //This part is required for WordPress to recognize it as a page template
/*
Template Name: Services
*/
?>
<?php get_header();  ?>
    <div class="body container">
      <div class="main productarchive-wrapper">
        <div class="row">
          <div class="col-md-9">
            <div class="pagewrapper">
              
              <div class="services">
                <?php $id =8; $page_data = get_page($id);?>   
                  <h3 class="heading"><?php echo get_the_title(8); ?> </h3>                                    
                  <?php 
                    $post = get_page($id); $content = apply_filters('the_content', $post->post_content); 
                    echo $content; 
                  ?>
              </div>

              <div class="serviceswrap">
                <?php $id =169; $page_data = get_page($id);?>   
                  <h3 class="heading"><?php echo get_the_title(169); ?> </h3>                                    
                  <img src="<?php bloginfo('template_directory');?>/images/installation.jpg" class="img-responsive">
                  <?php 
                    $post = get_page($id); $content = apply_filters('the_content', $post->post_content); 
                    echo $content; 
                ?>
              </div>


              <div class="serviceswrap">
                <?php $id =173; $page_data = get_page($id);?>   
                  <h3 class="heading"><?php echo get_the_title(173); ?> </h3>                                    
                  <img src="<?php bloginfo('template_directory');?>/images/repair.jpg" class="img-responsive">
                  <?php 
                    $post = get_page($id); $content = apply_filters('the_content', $post->post_content); 
                    echo $content; 
                ?>
              </div>

              <div class="serviceswrap">
                <?php $id =171; $page_data = get_page($id);?>   
                  <h3 class="heading"><?php echo get_the_title(171); ?> </h3>                                    
                  <img src="<?php bloginfo('template_directory');?>/images/services.jpg" class="img-responsive">
                  <?php 
                    $post = get_page($id); $content = apply_filters('the_content', $post->post_content); 
                    echo $content; 
                ?>
              </div>
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

<?php get_footer();  ?>
 
 
 
