<?php //This part is required for WordPress to recognize it as a page template
/*
Template Name: Contact-Us
*/
?>
<?php get_header();  ?>

              <div class="post" id="post-<?php the_ID(); ?>">
                <div class="body container">   
                  
                  <div class="container">
                      
                      <div class="col-md-12">                        
                        
                        <div class="map img-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7977.4636258513!2d103.94891300000002!3d1.337172!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc4b404c4bd352bcf!2sGolden+World+Machinery+(S)+Pte+Ltd!5e0!3m2!1sen!2sus!4v1423013761403" width="100%" height="450" frameborder="0" style="border:0"></iframe>              
                        </div>
                        
                      </div>


                      <div class="col-md-12"> 
                        <div class="contactform-wrapper">
                          <div class="contactform">

                              <div class="col-md-6 col-sm-6"> 
                                <div class="contac-right-address address">
                                  <?php $id =10; $page_data = get_page($id);?>                                                              
                                  <?php $post = get_page($id); $content = apply_filters('the_content', $post->post_content); echo $content; ?>  
                                </div>
                              </div>

                              <div class="col-md-6 contac-left col-sm-6"> 
                                <?php echo do_shortcode('[contact-form-7 id="90" title="Contact form 1"]')  ?>
                              </div>

                          </div>  
                        </div>
                      </div>


                  </div>
                      
                     

                  </div>
                </div><!--end of  content-->    
                 
             



<?php get_footer();  ?>
 
 